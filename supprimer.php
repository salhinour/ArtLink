<?php
include 'C:\xampp\htdocs\ArtLink\controller\musicienC.php';
$musician=new musicianC();
$musician->deletemusician($_GET['id']);
header("Location: tablemusiciens.php");
?>