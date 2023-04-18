<?php
include 'C:\xampp\htdocs\ArtLink\controller\categorieC.php';
$categorie=new categorieC();
$categorie->deletecategorie($_GET['id']);
header("Location: tablecategories.php");
?>