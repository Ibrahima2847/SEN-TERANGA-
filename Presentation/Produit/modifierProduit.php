<?php 
  
  if(isset($_POST)){
    include_once('../../Metier/produit.php');
    if(extract($_POST)){
      $dao = new DAO();
    $c = new Produit($reference,$libelle,$prix,$quantite,$achat,$image,$cat);
    $c->update($c);
    $succes=true;
    }
  }
  header("Location: http://localhost/stock/Presentation/Produit/afficherProduits.php");
?>