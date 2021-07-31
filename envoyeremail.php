<?php 
session_start();
$con = mysqli_connect('localhost', 'root', '', 'userform');

$name = "";
$errors = array();
$email="issambenothmen90088@gmail.com";
$subject = "Email Verification Code";
            $message = "ya3tik 3asba";
            $sender = "From:etudegestion514@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                echo "envoyer avec succ";
            }else{
                echo"echec envoyer;"
            }
?>