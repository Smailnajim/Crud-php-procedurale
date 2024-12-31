<?php 
include("../connexion.php");
$name=$_POST["name"];
$phone=$_POST["phone"];

$lastname=$_POST["lastname"];

$email=$_POST["email"];
$id=$_POST["IdUpdate"];
// echo $email;
// echo $lastname;
// echo $name;
// echo $phone;
         $query = "UPDATE etudiant
SET name ='$name',lastname ='$lastname',Email ='$email',numero=$phone
WHERE id=$id";
     $resultat = mysqli_query($connexion, $query);

     header("location: ../index.php");




                    ?>