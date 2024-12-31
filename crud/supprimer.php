<?php 
include("../connexion.php");

$id=$_GET["deleted"];



$query ="DELETE FROM etudiant where id=$id";

$resultat = mysqli_query($connexion,$query);





// require_once '../index.php';




header("location: ../index.php");






?>