<?php  
session_start();
 //insert.php  
 $connect = mysqli_connect("localhost", "jalel", "jlon123", "avocat");  

 $output=array();

 $ide=$_SESSION['id'];

$query="SELECT * from `expert` where id_expert=$ide " ;

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