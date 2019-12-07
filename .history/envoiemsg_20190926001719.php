<?php
session_start();
//insert.php  
$connect = mysqli_connect("localhost", "jalel", "jlon123", "avocat");  

$idr1=$_SESSION['id'];

$data  = json_decode(file_get_contents("php://input"));

if(count($data)>0)
{



     $nom = mysqli_real_escape_string($connection,$data->nom);
      $prenom = mysqli_real_escape_string($connection,$data->prenom);
       $sujet = mysqli_real_escape_string($connection,$data->sujet);
       $desc = mysqli_real_escape_string($connection,$data->desc);

     


     $query = "INSERT INTO `msg`(  `object`, `contenu`, `id_sender` ) VALUES ( '$sujet','$desc','$idr1'    )";

 
if(mysqli_query($connection,$query)){
    echo "Done , new User added !";
}else {
     echo "Error add !";
}
 } 