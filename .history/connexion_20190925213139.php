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
    $sql1 = "SELECT id_expert FROM expert WHERE login_exp = '$myusername' and pwd = '$pwd'  ";
    $result1 = mysqli_query($con,$sql1);
    if (!empty($result)){
      echo "empty";
      /*
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
  
   if($count == 1) {
      
     $_SESSION['id'] = $row['id_clt'];
  
       
     header("location: profilclient1.php ");
   }
  }
  else{
    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
    $count1 = mysqli_num_rows($result1);
  
   if($count1 == 1) {
      
     $_SESSION['id'] = $row['id_expert'];
   
     header("location: profilexpertv1.php ");
   }
   else{
     echo "non valide";
   }
*/

  }






?>

