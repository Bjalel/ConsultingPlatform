<?php
session_start();
 //insert.php  
 $connect = mysqli_connect("localhost", "jalel", "jlon123", "avocat");  

 $output=array();
 
 if (isset($_SESSION['id']))
 {
$id=$_SESSION['id'];
$query="SELECT * from `msg` where 'id_sender'='$id' or 'id_dest'='$id' " ;
$resultat=mysqli_query($connect,$query);
if (mysqli_num_rows($resultat) >0 )
{
     while($row=mysqli_fetch_array($resultat))
     {
          $output[]=$row;
     }
     echo json_encode($output);
}
echo "good";
print_r ($_SESSION['id']);
}
else{
     echo "problem";
}

 ?>  