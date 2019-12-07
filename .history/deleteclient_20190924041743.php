<?php
$connection = mysqli_connect("localhost","jalel","jlon123","avocat");


$id=$_POST['id_clt'];
 if(empty($id))
 {
      echo "id vide ";
 }
 else
 {
     $query = "DELETE FROM `client` WHERE `id_clt`='$id' ";
     
 
     if(mysqli_query($connection,$query))
     {
     echo "Done ,   User deleted !";
     }else {
          echo "utilisateur ne se trouve pas !";
}
 }
     
     
 
  



 
 


?>