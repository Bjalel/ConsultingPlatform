<?php
$connection = mysqli_connect("localhost","jalel","jlon123","avocat");



$data  = json_decode(file_get_contents("php://input"));

if(count($data)>0)
{

 
        $id =  $data->id ;

     

 
     $query = "DELETE FROM `expert` WHERE `id`='$id_expert' ";

 
if(mysqli_query($connection,$query)){
    echo "Done ,   User deleted !";
}else {
     echo "Error delete !";
}
     
 
  


}
 
 


?>