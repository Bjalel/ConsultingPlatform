<?php
$connection = mysqli_connect("localhost","jalel","jlon123","avocat");



 
     $query = "DELETE FROM `expert` WHERE `id`='$id' ";

 
if(mysqli_query($connection,$query)){
    echo "Done ,   User deleted !";
}else {
     echo "Error delete !";
}
     
 
  



 
 


?>