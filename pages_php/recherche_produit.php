<?php
   session_start();
   
   $servername = "127.0.0.1";
   $username = "root";
   $password = "";
   $dbname = "meublariobase";
       try
       {
           $db=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
       }
   
       catch(exception $e)
       {
           die("connection failed: ".$e->getMessage());
       }


        if(isset($_GET['p'])){
        $resultat = (String) trim($_GET['p']);

        $req = $db->query("SELECT * FROM produit where designation like \"%$resultat%\" or codecateg in (select code from categorie where nom like \"%$resultat%\" )");

        $req->setFetchMode(PDO::FETCH_BOTH);    
        $produit=$req->fetch();
        echo "</br></br><div><h2 align=\"center\">Résultat pour la recherche: ".$_GET['p']."</br></br></h2></div><table><tr>";
        $i=0;
        do{
           
            if($i==3){
               echo "</tr><tr>";
               $i=0;
            }
                    
                echo"
                <td><div class=\"men-thumb-item\">
                      <img src=\"../images/".$produit["refImage"]."\" class=\"img-thumbnail\">
                         <div class=\"men-cart-pro\">
                         <div class=\"inner-men-cart-pro\">
                         <a href=\"single.php?p=".$produit['ref']."\" class=\"link-product-add-cart\">Aperçu</a>
                         </div>
                         </div>
                      </div><td>
                      <td>
                      <div class=\"product_price\">
                      <h4>
                         <a href=\"single.php\">".$produit["designation"]."</a>
                      </h4>
                      <div class=\"grid-price mt-2\">
                         <span class=\"money\">".$produit['prix']." $</span>
                      </div>
                   </div>
                  </td>";
                  $i++;
                
                }
            while($produit = $req->fetch(PDO::FETCH_BOTH));
            if($i!=3){
            echo "</tr>" ;}
            echo "</table>";
            

 }
?>