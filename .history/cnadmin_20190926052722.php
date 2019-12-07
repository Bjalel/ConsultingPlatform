<?php 

$con = mysqli_connect("localhost","jalel","jlon123","avocat");
if (!$con)
 {
 die('Could not connect');
 }
  
   if (isset($_POST['login']) )
   {
    $myusername=$_POST['login'];
  
   } ;
   if (isset($_POST['password']) )
   {
    $pwd=$_POST['password'];
 
   } ;
   $sql = "SELECT id_admin FROM adminrg WHERE login_admin = '$myusername' and pwd_admin = '$pwd'  ";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
  
   if($count == 1) {
         header("location: admin.html ");
   }
   else
   {echo "access denied";}

   ?>