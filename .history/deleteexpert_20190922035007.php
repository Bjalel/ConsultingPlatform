<?php
$connection = mysqli_connect("localhost","jalel","jlon123","avocat");



$data  = json_decode(file_get_contents("php://input"));



 
        $id =  $data ;

        if ( empty($_post($data)) )
        {
                 echo "hiiiaeuss" ;
        }
     echo $data;

 
     $query = "DELETE FROM `expert` WHERE `id`='$id' ";

 
if(mysqli_query($connection,$query)){
    echo "Done ,   User deleted !";
}else {
     echo "Error delete !";
}
     
 
  



 
 


?>