
<?php
//session_start();
echo '<font color="white">Bienvenue '.$_SESSION['user_nom'].'</font>';
if($_SESSION['admin']!=0){ ?>
 <li class="nav-item dropdown active">
 <span class="fa fa-cog"></span>
<select name="liens" onchange="window.location.href=this.value">
  <OPTION>Selectionner une opération            
    <option class="nav-link" value="ajouter_prd.php">Ajouter un produit</option>
    <option class="nav-link" value="Supp_prod.php">Supprimer un produit</option>
    <option class="nav-link" value="Modifier_prd.php">Modifier un produit</option>
    <option class="nav-link" value="ajouter_cat.php">Ajouter une catégorie</option>
    <option class="nav-link" value="Supp_cat.php">Supprimer une catégorie</option>
    <option class="nav-link" value="Modifier_cat.php">Modifier une catégorie</option>
</select>

                        
<?php
}
?>