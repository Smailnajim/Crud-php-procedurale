<?php 
 include("../connexion.php");
$name=$_POST["name"];
$phone=$_POST["phone"];

$lastname=$_POST["lastname"];

$email=$_POST["email"];

// echo $email;

$query =" INSERT INTO etudiant(name,lastname,Email,numero) VALUES('$name','$lastname','$email',$phone)";

$resultat = mysqli_query($connexion,$query);



//  require_once '../index.php';





header("location: ../index.php");









?>