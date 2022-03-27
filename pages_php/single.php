<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->

   
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
      <!-- For Clients slider -->
      <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="../css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="../css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="../css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      
     
   </head>
   <body>
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
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> 
                                <span class="far fa-user"></span></button>
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
   
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Produit en détail</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
      <?php
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
             $id=$_GET['p'];
         $req = $db->query("SELECT * FROM produit where ref=$id");

        $req->setFetchMode(PDO::FETCH_BOTH);    
        $produit=$req->fetch();
        //déclaration des variables
        $img=$produit['refImage'];
        $prix=$produit['prix'];
        $qte=$produit['qte'];
        $des=$produit['designation'];

            

 }?>
      <section class="banner-bottom py-lg-5 py-3">
         <div class="container" id="div_recherche">
            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                  <div class="col-lg-4 single-right-left ">
                     <div class="grid images_3_of_2">
                        <div class="flexslider1">
                           <ul class="slides">
                              <li data-thumb="images/f2.jpg">
                                 <div class="thumb-image"> <img src="../images/<?php echo $img; ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                              </li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                     <h3><?php echo $des; ?></h3>
                     <p><span class="item_price"><?php echo 'Prix: '.$prix.'$'; ?></span>
                     </p>
                     <p><span class="item_price"><?php echo 'Référence du produit: '.$id; ?></span>
                     </p>
                     <div class="rating1">
                        <ul class="stars">
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="description">
                        <h5>Option de payement</h5>
                        <form action="#" method="post">
                           <input class="form-control" type="text" name="Email" placeholder="entrer..." required="">
                           <input type="submit" value="Check">
                        </form>
                     </div>
                     <!--div class="color-quality">
                        <div class="color-quality-right">
                           <h5>couleur :</h5>
                           <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                              <option value="null"></option>
                              <option value="null">3 Feet</option>
                              <option value="null">4 Feet</option>
                              <option value="null">5 Feet</option>
                           </select>
                        </div>
                     </div>
                     <div class="occasional">
                        <h5>Types :</h5>
                        <div class="colr ert">
                           <label class="radio"><input type="radio" name="radio" checked=""><i></i> Soft Teddy Bear (Black)</label>
                        </div>
                        <div class="colr">
                           <label class="radio"><input type="radio" name="radio"><i></i>Soft Teddy Bear (Brown)</label>
                        </div>
                        <div class="colr">
                           <label class="radio"><input type="radio" name="radio"><i></i>Pink Teddy Bear (Pink)</label>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                     <div class="occasion-cart">
                        <div class="toys single-item singlepage">
                           <form action="#" method="post">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="add" value="1">
                              <input type="hidden" name="toys_item" value="Farenheit">
                              <input type="hidden" name="amount" value="575.00">
                              <button type="submit" class="toys-cart ptoys-cart add">
                              Add to Cart
                              </button>
                           </form>
                        </div>
                     </div-->
                     <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-linkedin-in"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fas fa-rss"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="clearfix"> </div>
                  <!--/tabs-->
                  
                           
                        </div>
                     </div>
                  </div>
                  <!--//tabs-->
               </div>
            </div>
         </div>
      </section>
      <!--subscribe-address-->
      
      <!--//subscribe-address-->
      <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Rester en contact avec nous</h3>
            <div class="icons mt-4 text-center">
               <ul>
                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                  <li><a href="#"><span class="fas fa-rss"></span></a></li>
                  <li><a href="#"><span class="fab fa-vk"></span></a></li>
               </ul>
              
            </div>
            <div class="email-sub-agile">
               <form action="#" method="post">
                  <div class="form-group sub-info-mail">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">S'inscrire'</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2019 Meublario. All Rights Reserved 
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               
               <div class="modal-body">
                  <div class="register-form">
                           <form action="#" method="post">
                           <div class="fields-grid">
                              <div class="styled-input">
                                 <input type="text" placeholder="Login" name="user_login" required="">
                              </div>
                              <div class="styled-input">
                                 <input type="password" placeholder="Mot de passe" name="password" required="">
                              </div>
                              <button type="submit" name="b" class="btn subscrib-btnn" >Connecter</button>
                              <?php 
                           if((!empty($_SESSION['user_login']))&&(!empty($_SESSION['user_login']))){
                              echo'<button  class="btn subscrib-btnn" onclick="window.open(\'logout.php\')">Déconnecter</button>';}
                              ?>
                           
                           </div>
                           </form>
                           <?php 
                           if(isset($_POST['user_login'])){
                              
                              $_SESSION['user_login']=$_POST['user_login'];
                              $_SESSION['password']=$_POST['password'];
                              if ((empty($_SESSION['user_login'])) || (empty($_SESSION['password']))) {

                                 echo '<script>
                                         alert("remplir tous les champs SVP!");
                                       </script>';
                                 }
                               else{

                                 //echo 'connexion établie';
                                  include("login.php");
                               }
                             }
                           ?>
                  </div>
               </div>
               
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
       <!-- //recherche-->
       <script src='../js/recherche.js'></script>
      <script src='../js/xmlhttp.js'></script>
      <!-- //Modal 1-->
      <!--jQuery-->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- newsletter modal -->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- price range (top products) -->
      <script src="js/jquery-ui.js"></script>
      <script>
         //<![CDATA[ 
         $(window).load(function () {
         	$("#slider-range").slider({
         		range: true,
         		min: 0,
         		max: 9000,
         		values: [50, 6000],
         		slide: function (event, ui) {
         			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
         		}
         	});
         	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
         
         }); //]]>
      </script>
      <!-- //price range (top products) -->
      <!-- single -->
      <script src="js/imagezoom.js"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="js/easy-responsive-tabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		activate: function (event) { // Callback function if tab is switched
         			var $tab = $(this);
         			var $info = $('#tabInfo');
         			var $name = $('span', $info);
         			$name.text($tab.text());
         			$info.show();
         		}
         	});
         	$('#verticalTab').easyResponsiveTabs({
         		type: 'vertical',
         		width: 'auto',
         		fit: true
         	});
         });
      </script>
      <!-- FlexSlider -->
      <script src="js/jquery.flexslider.js"></script>
      <script>
         // Can also be used with $(document).ready()
         $(window).load(function () {
         	$('.flexslider1').flexslider({
         		animation: "slide",
         		controlNav: "thumbnails"
         	});
         });
      </script>
      <!-- //FlexSlider-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
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
      <!-- //here ends scrolling icon -->
      <!-- //smooth-scrolling-of-move-up -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working--> 
   </body>
</html>