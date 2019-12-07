<?php 

$con = mysqli_connect("localhost","jalel","jlon123","avocat");
if (!$con)
 {
 die('Could not connect');
 }
 session_start();
 $id_sender=$_SESSION['id'];

if(!empty($_POST)) 
{
    $sujet=$_POST['sujet'];
    $desc=$_POST['desc'];
    $num=$_POST['num'];

        $query ="insert into msg (object,id_sender,id_dest,contenu)  values ('$sujet','$id_sender','$num','$desc') " ;
        if (mysqli_query($con, $query))
         {
            echo "success";
            header('Location: profilclient1.php');
           } else {
            echo "error " ;
        }      


    }
    else
    {
        echo"prob";
    }



?>