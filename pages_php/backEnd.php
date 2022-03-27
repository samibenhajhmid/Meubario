<?php
	session_start();

	function executeQuery($query, $param = array()){
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$database = 'meublariobase';
		$db;
		
		try{
			$db = new PDO('mysql:host='.$host.';dbname='.$database, $user, 
						$password, 
						array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
						PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
		}catch(PDOException $e){
			die($e->getTraceAsString());
		}
		$statement = $db->prepare($query);
		$statement->execute($param);
		return $statement->fetchAll(PDO::FETCH_OBJ);
	}

	if(!isset($_SESSION['cart']))
    	$_SESSION['cart']= array();
    
    $action = '';
    if(array_key_exists('action', $_POST))
    	$action = $_POST['action'];
	
	if($action == 'loadArticls'){
		echo json_encode(array('lstArticls'=>executeQuery('SELECT * FROM produit'), 'inCart'=>inCart()));
	}

	if($action == 'addToCart'){
		$idArticl = $_POST['id'];
		if((isset($_SESSION['cart'][$idArticl]))&&($_SESSION['cart'][$idArticl]<10))
			{$_SESSION['cart'][$idArticl]++;
				echo json_encode(array('inCart'=>inCart()));}
		else{
		{if(($_SESSION['cart'][$idArticl]<10))
			$_SESSION['cart'][$idArticl] = 1;
			echo json_encode(array('inCart'=>inCart()));}
		
		}
       
	}

	if($action == 'lstArticlsOrder'){
		echo json_encode(recoverLstArticlsOrdred());
	}

	if($action == 'removeAction'){
		unset($_SESSION['cart'][$_POST['id']]);
		echo json_encode(recoverLstArticlsOrdred());
	}

	if($action == 'orderNow'){
		if(count($_SESSION['cart'])>0){
			$lstIdInCart = array_keys($_SESSION['cart']);
			//It is assumed that the client is already an open session and we have his id 1
			foreach ($lstIdInCart as $idArt){
				executeQuery("INSERT INTO orders VALUES('', $idArt, 1, ".$_SESSION['cart'][$idArt].")");
				$nvqte=$_SESSION['cart'][$idArt];
				executeQuery("UPDATE produit SET qte=qte-$nvqte WHERE ref IN ($ids)");
				unset($_SESSION['cart'][$idArt]);
			}
		}
	}

	function inCart(){
		$quantity = 0;
		$total = 0;
		if(count($_SESSION['cart'])>0){
			$lstIdInCart = array_keys($_SESSION['cart']);
			if(!empty($lstIdInCart)){
				$ids = implode(', ', $lstIdInCart);
				$articls = executeQuery("SELECT ref, prix FROM produit WHERE ref IN ($ids)");
				foreach ($articls as $art){
					$quantity += $_SESSION['cart'][$art->ref];
					
					$total += $_SESSION['cart'][$art->ref] * $art->prix;
				}
			}
		}
		return array('quantity'=>$quantity, 'total'=>$total);
	}

	function recoverLstArticlsOrdred(){
		$quantity = 0;
		$total = 0;
		$lstOrders = array();
		if(count($_SESSION['cart'])>0){
			$lstIdInCart = array_keys($_SESSION['cart']);
			if(!empty($lstIdInCart)){
				$ids = implode(', ', $lstIdInCart);
				$articls = executeQuery("SELECT ref, designation, prix,refImage FROM produit WHERE ref IN ($ids)");
				foreach ($articls as $art){
					$lstOrders[] = array('ref'=>$art->ref, 'designation'=>$art->designation,

									'refImage'=>$art->refImage,	'prix'=>$art->prix, 'quantity'=>$_SESSION['cart'][$art->ref],
										'amount'=>$_SESSION['cart'][$art->ref] * $art->prix);
					$quantity += $_SESSION['cart'][$art->ref];
					$total += $_SESSION['cart'][$art->ref] * $art->prix;
				}

			}
		}

		return array('lstOrders'=>$lstOrders, 'quantity'=>$quantity, 'total'=>$total);
	}
	

?>