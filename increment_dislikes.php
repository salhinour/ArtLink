<?php
require_once 'C:\xampp\htdocs\ArtLink\controller\musicienC.php';
require_once 'C:\xampp\htdocs\ArtLink\model\Musician.php';
$musicianc = new musicianC();
$musician=$musicianc->getbyide($_GET['id']);
$musicianc->incrementdislikes($musician,$_GET['id']);
header("Location: Musicians.php");
?>