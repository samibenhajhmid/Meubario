<?php

session_start();
$bdd = mysqli_connect('localhost', 'root', '', 'meublariobase');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
if(!$bdd)
{
	alert( "connexion à la base impossible");
}

?>

<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
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
      <?php
      
       /*if((isset($_SESSION['user_login'])) && ((isset($_SESSION['password'])) && (isset($_SESSION['admin'])))){
      include('profile.php');} */?>
     
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
         <!-- Slideshow 4 -->
         <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Meublez Parfaitement <br>Votre Maison</h5>
                              <div class="outs_more-buttn">
                                 <a href="about.php">Lire plus</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>les derniers modèles<br>de meubles</h5>
                              <div class="outs_more-buttn">
                                 <a href="about.php">Lire plus</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h5>Avec le moindre<br>cout</h5>
                              <div class="outs_more-buttn">
                                 <a href="about.php">Lire plus</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
            <div class="clearfix" id="div_recherche"></div>
         </div>
      <!-- //banner -->
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Meilleurs produits</h3>
            <div class="row banner-below-w3l">
               
               <?php 
                     $sqli= "SELECT * FROM produit;";
                     $resultat=mysqli_query($bdd,$sqli); 
                    
                   
                     while ($donnees = mysqli_fetch_assoc($resultat))                      
                     { 
                      if($donnees['prix']>799){
                       ?>   <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                      <img src="../images/<?php echo $donnees['refImage']; ?>.jpg" class="img-thumbnail" alt="">
                      <div class="banner-right-icon">
                         <h4 class="pt-3"><?php echo $donnees['designation']; ?></h4>
                      </div>
                   </div>
                   <?php
                  } } ?>
                   
               <div class="toys-grids-upper">
                  <div class="about-toys-off">
                     <h2>Réduction jusqu'à <span>50% sur </span>certains meubles</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //about -->
      <!--new Arrivals -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Nouveaux produits</h3>
            <div class="slid-img">
               <ul id="flexiselDemo1">
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="../images/canapé1.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">le canapé rose</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="tousLesProduits.php">Achettez maintenant</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="../images/rideau1.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Rideau jaune orangée</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="tousLesProduits.php">Achettez maintenant</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="../images/salon9.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">le Salon gris et noire</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="tousLesProduits.php">Achettez maintenant</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="../images/salon5.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Salon Vert</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="tousLesProduits.php">Achettez maintenant</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="../images/salon2.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">salon salon</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="tousLesProduits.php">Achettez maintenant</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="../images/wajihe2.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Rideau blanc et rouge</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="tousLesProduits.php">Achettez maintenant</a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
     
      <!--//Customers Review -->
      <!-- Product-view -->
      
      <!--//Product-about-->
      <!--subscribe-address-->
      
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
                     <input type="text" class="form-control email-sub-agile" placeholder="Nom" name="nom">
                  </div>
                  <div class="form-group sub-info-mail">
                     <input type="text" class="form-control email-sub-agile" placeholder="Prénom" name="prenom">
                  </div>
                  <div class="form-group sub-info-mail">
                     <input type="text" class="form-control email-sub-agile" placeholder="Login" name="login">
                  </div>
                  <div class="form-group sub-info-mail">
                     <input type="text" class="form-control email-sub-agile" placeholder="mot de passe" name="pwd">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn" name="inscrire">S'inscrire</button>
                  </div>
               </form>
            </div>
         </div>
         <?php 
                           if(isset($_POST['inscrire'])){
                             $adm=0;
                            $nom=$_POST['nom'];
                            $prenom=$_POST['prenom'];
                              $login=$_POST['login'];
                              $pwd=$_POST['pwd'];

                        $sql="insert into user (loginU,pwd,prenom,nom,adm) values ('$login','$pwd','$prenom','$nom','$adm');";
                        $query = mysqli_query($bdd,$sql);
                        $sql="select * from user where pwd='$pwd' AND loginU='$login'";
$query = mysqli_query($bdd,$sql);
$rows = mysqli_num_rows($query);
if ($rows !=0) {

echo '<script>
        alert("Inscription établie avec succès");
      </script>';
//header("location: index.php"); // Redirecting To Other Page
} else {
echo '<script>
        alert("echoue de l\'inscription");
      </script>';
}

                                 
                             }
                           ?>
      </section>
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2019 Meublario. 
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <?php
      //session_start();
      ?>
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
      <!--js working-->
      <script src='../js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="../js/minicart.js"></script>
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
      <!--responsiveslides banner-->
      <script src="../js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="../js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
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
      <!-- //bootstrap working-->
      
         <script>

   </body>
</html>