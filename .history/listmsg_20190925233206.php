<?php
session_start();
 //insert.php  
 $connect = mysqli_connect("localhost", "jalel", "jlon123", "avocat");  

 $output=array();
 
 
$id=$_SESSION['id'];
print_r($_SESSION['id']);

$query="SELECT * from `msg` where 'id_sender'=$id  ";
$resultat=mysqli_query($connect,$query);
if (mysqli_num_rows($resultat) >0 )
{
     while($row=mysqli_fetch_array($resultat))
     {
          $output[]=$row;
     }
     echo json_encode($output);
}

 ?>  