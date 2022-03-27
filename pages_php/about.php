
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
                     <a href="index.html">Accueil</a>
                     <span>/ /</span>
                  </li>
                  <li>A propos</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--show Now-->  
         <h2 align="center">A propos</h2>
         <p align="center"></br></br>Un site qui vous fourni les meilleurs meubles modernes orientals et occidentals.</br>Nous sommes spécialisés surtout dans tout ce qui est
         salon,canapé et rideau.</br>
         Notre site est toujours en mis à jour, ainsi que nos produit .</p>




         <!-- //show Now-->
         <!--subscribe-address-->
         <!--section class="subscribe">
            <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 col-md-6 map-info-right px-0">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
               </div>
               <div class="col-lg-6 col-md-6 address-w3l-right text-center">
                  <div class="address-gried ">
                     <span class="far fa-map"></span>
                     <p>25478 Road St.121<br>USA New Hill
                     <p>
                  </div>
                  <div class="address-gried mt-3">
                     <span class="fas fa-phone-volume"></span>
                     <p> +(000)123 4565<br>+(010)123 4565</p>
                  </div>
                  <div class=" address-gried mt-3">
                     <span class="far fa-envelope"></span>
                     <p><a href="mailto:info@example.com">info@example1.com</a>
                        <br><a href="mailto:info@example.com">info@example2.com</a>
                     </p>
                  </div>
               </div>
            </div>
            </div>
         </section-->
         <!--//subscribe-address-->
         <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
               <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
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
                        <button type="submit" class="btn subscrib-btnn">Subscribe</button>
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
           <!-- //Modal 1-->
      <!--js working-->
      <script src='../js/jquery-2.2.3.min.js'></script>
      <script type="text/javascript" src="../js/jquery-2.1.3.js"> </script>
      <!--//js working-->
      <!-- cart-js -->	
     
      <script src="../js/minicart.js"></script>
      <script>
     
          toys.render();
          
          toys.cart.on('toys_checkout', function (evt) {
            var items, len, i;
          
            if (this.subtotal() > 0) {
              items = this.items();
          
              for (i = 0, len = items.length; i < len; i++) {
                  
              }
            }
          });
        
       </script>


         <!-- //cart-js -->
         <!-- price range (top products) -->
         <script src="../js/jquery-ui.js"></script>
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
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + 
                " - $" + $("#slider-range").slider("values", 1));
            
            }); //]]>
         </script>
         <!-- //price range (top products) -->
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
         <!-- //here ends scrolling icon -->
         <!--bootstrap working-->
         <script src="../js/bootstrap.min.js"></script>
         <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
      </body>
   </html>
   