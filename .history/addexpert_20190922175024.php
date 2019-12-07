<?php 

$con = mysqli_connect("localhost","jalel","jlon123","avocat");
if (!$con)
 {
 die('Could not connect');
 }

if(!empty($_POST)) 
{
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $mail=$_POST['mail'];
    $pwd=$_POST['pwd'];
    $pwd1=$_POST['pwd1'];
    $tel=$_POST['tel'];
    $login=$_POST['login'];
    if($pwd == $pwd1)
    {
        $query ="insert into expert (nom_exp,pre_exp,tel_exp,mail_exp,login,pwd)  values ('$prenom','$nom','$tel','$mail','$login','$pwd') " ;
        if (mysqli_query($con, $query)) {
            echo "success";
           } else {
            echo "error " ;
        }      
    }
    else
    {
        echo "la mot de passe n est pas la même ";
    }
}

mysqli_close($con);



?>

