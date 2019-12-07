<?php 

$con = mysqli_connect("localhost","jalel","jlon123","avocat");
if (!$con)
 {
 die('Could not connect');
 }


 session_start();
 
 

    
   if (isset($_POST['login']) )
   {
    $myusername=$_POST['login'];
  
   } ;
   if (isset($_POST['pwd']) )
   {
    $pwd=$_POST['pwd'];
 
   } ;

    $sql = "SELECT id_clt FROM client WHERE login_clt = '$myusername' and pwd_clt = '$pwd'  ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    

      
   if($count == 1) {
      
     $_SESSION['id'] = $row['id_clt'];
     print_r($_SESSION['id']);
       
//     header("location: profilclient1.html ");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 






?>

