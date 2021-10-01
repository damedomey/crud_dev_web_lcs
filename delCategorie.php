<?php
if (isset($_GET['id'])) {
  require_once "model/Categorie.php";
  $categorie = new Categorie();
  $categorie->delete($_GET['id']);
  header('location:listeCategorie.php');
}
