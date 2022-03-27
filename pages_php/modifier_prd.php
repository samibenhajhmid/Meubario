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
      <title>Modifier un produit</title>
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
      <link rel="stylesheet" type="text/css" href="../css/jquery-ui1.css">
      <link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
      <!--stylesheets-->
      <link href="../css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      
   </head>
   <body>
      <!--headder-->
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
while ($donnees = mysqli_fetch_assoc($resultat))                        
{?> 
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
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Acceuil</a>
                  <span>/ /</span>
               </li>
               <li>Modifier produit</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
      <div class="modal-body">
                  <div class="register-form" align="center" id="div_recherche">
                  <h4>Donner la référence du produit <br>Et remplir les champs à modifier</h4>
                  <!--select name="liens" onchange="window.location.href=this.value">
                    <OPTION>Selectionner un champ           
                    <option class="nav-link" value="ajouter_prd.php">Déscription</option>
                    <option class="nav-link" value="Supp_prod.php">Quantité</option>
                    <option class="nav-link" value="Modifier_prd.php">Prixt</option>
                    <option class="nav-link" value="ajouter_cat.php">Disponibilité</option>
                    <option class="nav-link" value="Supp_cat.php">Promotion</option>
                    <option class="nav-link" value="Modifier_cat.php">Source de l'image</option>
                    <option class="nav-link" value="Modifier_cat.php">Code de la catégorie associé</option>

                   </select-->
                   <form action="#" method="post" >
                   <table>
                           <div class="fields-grid" >
                           <th> <div class="styled-input" width="200">
                                 <input type="text" placeholder="Reférence" name="ref" required="">
                              </div>
                           </th>   
                           <tr><td><div class="styled-input" width="200">
                                 <input type="text" placeholder="Désignation" name="desig">
                              </div></td>
                              <td> <button type="submit" class="btn subscrib-btnn" name="b1" >Modifier</button></td>
                           </tr>   
                           <tr> <td>  <div class="styled-input" width="200">
                                 <input type="text" placeholder="quantité en stock" name="qte">
                              </div></td>
                              <td><button type="submit" class="btn subscrib-btnn" name="b2" >Modifier</button></td>
                           </tr>
                           <tr> <td>  <div class="styled-input" width="200">
                                 <input type="text" placeholder="prix" name="prix">
                              </div></td>
                              <td><button type="submit" class="btn subscrib-btnn" name="b3" >Modifier</button></td>
                           </tr>
                           <tr>   <td><div class="styled-input" width="200">
                                 <input type="text" placeholder="disponible ou non ?" name="disp">
                              </div></td>
                              <td> <button type="submit" class="btn subscrib-btnn" name="b4" >Modifier</button></td>
                           </tr>
                           <tr> <td>  <div class="styled-input" width="200">
                                 <input type="text" placeholder="promotion" name="promo">
                              </div></td>
                              <td> <button type="submit" class="btn subscrib-btnn" name="b5" >Modifier</button></td>
                           </tr>
                           <tr> <td>  <div class="styled-input" width="200">
                                 <input type="text" placeholder="src de l'image" name="img">
                              </div></td>
                              <td><button type="submit" class="btn subscrib-btnn" name="b6" >Modifier</button></td>
                           </tr>
                           <tr>  <td>  <div class="styled-input" width="200">
                                 <input type="text" placeholder="code catégorie" name="cat_code">
                              </div></td> 
                              <td>  <button type="submit" class="btn subscrib-btnn" name="b7" >Modifier</button></td>
                           </tr>     
                           </table>  
                              

                           
                           </div>
                           </form>                
                  </div>
               </div>
               <?php
                //Modification des valeurs dans la base suivant les champs saisis
            if(isset($_POST['b1'])){
               //if(isset($_POST['desig'])){
                  //définir les variables
                  $ref=$_POST['ref'];
                  $desig=$_POST['desig'];
                  // Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
                  $connection = mysqli_connect("localhost", "root", "", "meublariobase");
                  //echo 'connexion établie';

                  // SQL query to fetch information of registerd users and finds user match.
                  $sql="update produit set designation = '$desig' where ref = '$ref'";

                  $query = mysqli_query($connection,$sql);
                  $sql="select * from produit where designation='$desig' and ref='$ref'";
                  $query = mysqli_query($connection,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows==1){
                     echo '<script>
                           alert("Désignation modifiée avec succès");
                           </script>';
                     //header("location: index.php");
                  }
                  else{
                     echo '<script>
                           alert("Modification de la désignation à échouer \nveuillez recommencer");
                           </script>';
                    }
                  mysqli_close($connection); // Closing Connection
               }
               if(isset($_POST['b2'])){
                  //définir les variables
                  $ref=$_POST['ref'];
                  $qte=$_POST['qte'];
                  // Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
                  $connection = mysqli_connect("localhost", "root", "", "meublariobase");
                  //echo 'connexion établie';

                  // SQL query to fetch information of registerd users and finds user match.
                  $sql="update produit set qte = '$qte' where ref = '$ref'";

                  $query = mysqli_query($connection,$sql);
                  $sql="select * from produit where qte='$qte' and ref='$ref'";
                  $query = mysqli_query($connection,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows==1){
                     echo '<script>
                           alert("Quantité modifiée avec succès");
                           </script>';
                     //header("location: index.php");
                  }
                  else{
                     echo '<script>
                           alert("Modification de la quantité à échouer \nveuillez recommencer");
                           </script>';
                    }
                  mysqli_close($connection); // Closing Connection
               }

               //3ème champ
               if(isset($_POST['b3'])){
                  //définir les variables
                  $ref=$_POST['ref'];
                  $prix=$_POST['prix'];
                  // Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
                  $connection = mysqli_connect("localhost", "root", "", "meublariobase");
                  //echo 'connexion établie';

                  // SQL query to fetch information of registerd users and finds user match.
                  $sql="update produit set prix = '$prix' where ref = '$ref'";

                  $query = mysqli_query($connection,$sql);
                  $sql="select * from produit where prix='$prix' and ref='$ref'";
                  $query = mysqli_query($connection,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows==1){
                     echo '<script>
                           alert("Prix modifié avec succès");
                           </script>';
                     //header("location: index.php");
                  }
                  else{
                     echo '<script>
                           alert("Modification du prix à échouer \nveuillez recommencer");
                           </script>';
                    }
                  mysqli_close($connection); // Closing Connection
               }

               //4ème champ
               if(isset($_POST['b4'])){
                  //définir les variables
                  $ref=$_POST['ref'];
                  $disp=$_POST['disp'];
                  // Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
                  $connection = mysqli_connect("localhost", "root", "", "meublariobase");
                 //echo 'connexion établie';

                  // SQL query to fetch information of registerd users and finds user match.
                  $sql="update produit set disponibilite = '$disp' where ref = '$ref'";

                  $query = mysqli_query($connection,$sql);
                  $sql="select * from produit where disponibilite='$disp' and ref='$ref'";
                  $query = mysqli_query($connection,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows==1){
                     echo '<script>
                           alert("Disponibilité modifiée avec succès");
                           </script>';
                     //header("location: index.php");
                  }
                  else{
                     echo '<script>
                           alert("Modification de la disponibilité à échouer \nveuillez recommencer");
                           </script>';
                    }
                  mysqli_close($connection); // Closing Connection
               }
               //5ème champ
               if(isset($_POST['b5'])){
                  //définir les variables
                  $ref=$_POST['ref'];
                  $promo=$_POST['promo'];
                  // Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
                  $connection = mysqli_connect("localhost", "root", "", "meublariobase");
                  //echo 'connexion établie';

                  // SQL query to fetch information of registerd users and finds user match.
                  $sql="update produit set promotion = '$promo' where ref = '$ref'";

                  $query = mysqli_query($connection,$sql);
                  $sql="select * from produit where promotion='$promo' and ref='$ref'";
                  $query = mysqli_query($connection,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows==1){
                     echo '<script>
                           alert("la promotion du produit est modifiée avec succès");
                           </script>';
                     //header("location: index.php");
                  }
                  else{
                     echo '<script>
                           alert("Modification de la promotion à échouer \nveuillez recommencer");
                           </script>';
                    }
                  mysqli_close($connection); // Closing Connection
               }
               //6ème champ
               if(isset($_POST['b6'])){
                  //définir les variables
                  $ref=$_POST['ref'];
                  $img=$_POST['img'];
                  // Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
                  $connection = mysqli_connect("localhost", "root", "", "meublariobase");
                  //echo 'connexion établie';

                  // SQL query to fetch information of registerd users and finds user match.
                  $sql="update produit set refImage = '$img' where ref = '$ref'";

                  $query = mysqli_query($connection,$sql);
                  $sql="select * from produit where refImage='$img' and ref='$ref'";
                  $query = mysqli_query($connection,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows==1){
                     echo '<script>
                           alert("la référence de l\'image est modifiée avec succès");
                           </script>';
                     //header("location: index.php");
                  }
                  else{
                     echo '<script>
                           alert("Modification de la référence de l\'image échouée \nveuillez recommencer");
                           </script>';
                    }
                  mysqli_close($connection); // Closing Connection
               }

               //7ème champ
               if(isset($_POST['b7'])){
                  //définir les variables
                  $ref=$_POST['ref'];
                  $cat_code=$_POST['cat_code'];
                  // Establishing Connection with Server by passing server_name, user_id and password as a parameter and selecting database
                  $connection = mysqli_connect("localhost", "root", "", "meublariobase");
                  //echo 'connexion établie';

                  // SQL query to fetch information of registerd users and finds user match.
                  $sql="update produit set codecateg = '$cat_code' where ref = '$ref'";

                  $query = mysqli_query($connection,$sql);
                  $sql="select * from produit where codecateg='$cat_code' and ref='$ref'";
                  $query = mysqli_query($connection,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows==1){
                     echo '<script>
                           alert("le code de la catégorie associée est modifié avec succès");
                           </script>';
                     //header("location: index.php");
                  }
                  else{
                     echo '<script>
                           alert("Modification du code de la catégorie échouée \nveuillez recommencer");
                           </script>';
                    }
                  mysqli_close($connection); // Closing Connection
               }
            


?>
                  
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Meublario. All Rights Reserved 
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
      <script src="../js/jquery-2.2.3.min.js"></script>
      <!-- newsletter modal -->
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
         	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
         
         }); //]]>
      </script>
      <!-- //price range (top products) -->
      <!-- single -->
      <script src="../js/imagezoom.js"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="../js/easy-responsive-tabs.js"></script>
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
      <script src="../js/jquery.flexslider.js"></script>
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
      <!-- //smooth-scrolling-of-move-up -->
      <!--bootstrap working-->
      <script src="../js/bootstrap.min.js"></script>
      <!-- //bootstrap working--> 
   </body>
</html>

