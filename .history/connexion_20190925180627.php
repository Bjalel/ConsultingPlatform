<?php 

$con = mysqli_connect("localhost","jalel","jlon123","avocat");
if (!$con)
 {
 die('Could not connect');
 }


 session_start();
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = $_POST['login'];
    $pwd = isset($_POST['hh']);
    
    $sql = "SELECT id_clt FROM client WHERE login_clt = '$myusername' and pwd_clt = '$pwd'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
       session_register("myusername");
       $_SESSION['id'] = $row;
       
       header("location: welcome.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 }






?>

