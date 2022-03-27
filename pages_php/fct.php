<?php
session_start();
$bdd = mysqli_connect('localhost', 'root', '', 'meublariobase');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
if(!$bdd)
{
	alert( "connexion à la base impossible");
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Meublario</title>
<!--meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
 Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script>
 addEventListener("load", function () {
     setTimeout(hideURLbar, 0);
 }, false);
 
 function hideURLbar() {
     window.scrollTo(0, 1);
 }
</script>
<!--//meta tags ends here-->
<!--booststrap-->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<!--//booststrap end-->
<!-- font-awesome icons -->
<link href="../css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //font-awesome icons -->
<!--Shoping cart-->
<link rel="stylesheet" href="../css/shop.css" type="text/css" />
<!--//Shoping cart-->
<!--checkout-->
<link rel="stylesheet" type="text/css" href="../css/checkout.css">
<!--//checkout-->
<!--stylesheets-->
<link href="../css/style.css" rel='stylesheet' type='text/css' media="all">
<!--//stylesheets-->
<link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
<!--headder-->
<!-- <div class="header-outs" id="home">
 <div class="header-bar">
    <div class="info-top-grid">
       <div class="info-contact-agile">
          <ul>
             <li>
                <span class="fas fa-phone-volume"></span>
                <p>+(000)123 4565 32</p>
             </li>
             <li>
                <span class="fas fa-envelope"></span>
                <p><a href="mailto:info@example.com">info@example1.com</a></p>
             </li>
             <li>
             </li>
          </ul>
       </div>
    </div>-->
    <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="info-top-grid">
           
            
         </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.php">Meublario</a></h1>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <div class="form-inline my-lg-0" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" id="search" color:#000000>
                        <a button class="btn" type="submit" href="#div_recherche" onclick="recherche()" >
                        <span class="fas fa-search" color:#000000></span>
                        </a>
                        </button>
   
                     </div>
                    
                  </div>
                     <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <?php
                           if((isset($_SESSION['admin'])&&($_SESSION['admin']==0))){
                     echo '
                       
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li>';}
                           
      
                           if((isset($_SESSION['user_login'])) && ((isset($_SESSION['password'])) && (isset($_SESSION['admin'])))){
                           include('profile.php');} ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
    <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item ">
                        <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="tousLesProduits.php" class="nav-link">Nos produits</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                         role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                        $sqli= "SELECT * FROM categorie;";
                        $resultat=mysqli_query($bdd,$sqli); 
                        while ($donnees = mysqli_fetch_assoc($resultat)){?> 
                           <a class="nav-link" href="produit.php?id='<?php echo $donnees['code']; ?>'"><?php echo $donnees['NOM']; ?></a>
                    <?php } ?>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="about.php" class="nav-link">A propos</a>
                     </li>
                  </ul>
               </div>
            </nav>
 </div>
  </div>
 <!--//headder-->
 <!-- banner -->
 <div class="inner_page-banner one-img">
 </div>
 <!-- short -->
 <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
       <ul class="short_ls">
          <li>
             <a href="index.php">accueil</a>
             <span>/ /</span>
          </li>
          <li>Checkout</li>
       </ul>
    </div>
 </div>
		<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
	</head>
	<body>
		<div id='wrapper'>
			<div id='header'>
				</div>
				<div class='menu'></div>
			</div>



<div id='content'>
<table align="right">
						<tr>
							<td>
								<a href="myCart">
									panier<br>
									<span id='quantity'></span> In <img src='../css/images/cart.gif' />
								</a>
							</td>
							<td>
								Total<br><span id='total'></span>
							</td>
						</tr>
					</table>

	<div class="checkout-right">

	</div>
    
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var loadTabOrders = function(data){
			$('.checkout-right').html('');
			var template = "<table id='lstOrders' class='timetable_sub'>\
								<tr class='tb_h'>\
                                <th>produit</th>\
									<th>nom</th>\
									<th>prix unitaire</th>\
									<th>Quantité</th>\
									<th>prix</th>\
									<th>suppression</th>\
								</tr>\
								{{#row}}\
								<tr id='{{ref}}'>\
                                <td class='invert-image'><a href='single.html'><img src='../images/{{refImage}}.jpg' ></a></td>\
                                    <td class='invert'>{{designation}}</td>\
									<td class='invert'>{{prix}}</td>\
									<td class='invert'>{{quantity}}</td>\
									<td class='invert'>{{amount}}</td>\
									<td class='removeAction'><img src='../css/images/trach.png' /></td>\
								</tr>\
								{{/row}}\
								<tr>\
									<td colspan='2' ></td>\
									<td class='sumQty'><b>{{quantity}}</b></td>\
									<td class='sumTtl'><b>{{total}} €</b></td>\
									<td class='passC'><img src='../css/images/order_now.gif' /></td>\
								</tr>\
							</table>";
            $('.loading').removeClass('hidden');
			var html = Mustache.to_html(template, {'row':data.lstOrders,
													'quantity':data.quantity,
	                								'total':data.total});
            $('#quantity').text(data.quantity);
			$('#total').text(data.total+' €');


            $('.checkout-right').append(html).removeClass('hidden');
           
		};

		var loadOrders = function(){
			$.post('backEnd.php', {action:'lstArticlsOrder'}, function(data){
				loadTabOrders(data);
			}, 'json');
		}

		loadOrders();

		$('.removeAction').live('click', function(){
			var idArt = $(this).parent('tr').attr('id');
			if(confirm('Voulez vous supprimer le produit ?')){
				$.post('backEnd.php', {action:'removeAction', id:idArt}, function(data){
					loadTabOrders(data);
				}, 'json');
			}
		});

		$('.passC').live('click', function(){
			if(confirm('Voulez vous passer la commande ?')){
				$.post('backEnd.php', {action:'orderNow'}, function(){
					window.location.replace("listeArticls");
				});
			}
		});

	});
</script>
			
          
    <script type="text/javascript" src="../js/mustache.js"></script>
<!-- //Modal 1-->
 <!-- //recherche-->
 <script src='../js/recherche.js'></script>
      <script src='../js/xmlhttp.js'></script>
<!--js working-->
<script src='../js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!-- cart-js -->	
<script src="../js/minicart.js"></script>



<!--// cart-js -->
<!--quantity-->
<script>
 $('.value-plus').on('click', function () {
     var divUpd = $(this).parent().find('.value'),
         newVal = parseInt(divUpd.text(), 10) + 1;
     divUpd.text(newVal);
 });
 
 $('.value-minus').on('click', function () {
     var divUpd = $(this).parent().find('.value'),
         newVal = parseInt(divUpd.text(), 10) - 1;
     if (newVal >= 1) divUpd.text(newVal);
 });
</script>
<!--quantity-->
<
<!-- start-smoth-scrolling -->
<script src="../js/move-top.js"></script>
<script src="../js/easing.js"></script>
<script>
 jQuery(document).ready(function ($) {
     $(".scroll").click(function (event) {
         event.preventDefault();
         $('html,body').animate({
             scrollTop: $(this.hash).offset().top
         }, 900);
     });
 });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
 $(document).ready(function () {
 
     var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
     };
     $().UItoTop({
         easingType: 'easeOutQuart'
     });
 
 });
</script>
<script type="text/javascript" src="../js/mustache.js"></script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="../js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
</body>
</html>
        
        
        