<?php
$connection = mysqli_connect("localhost","jalel","jlon123","avocat");


$id=$_POST['id_exp'];
 if(empty($id))
 {
      echo "id vide ";
 }
 else
 {
     $query = "DELETE FROM `expert` WHERE `id_expert`='$id' ";

 
     if(mysqli_query($connection,$query))
     {
     echo "Done ,   User deleted !";
     }else {
          echo "Error delete !";
}
 }
     
     
 
  



 
 


?>