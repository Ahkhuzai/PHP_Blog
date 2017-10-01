<?php
include('Assist/Config/smarty/libs/Smarty.class.php');
require 'User.php';
// create object
$smarty = new Smarty; 
session_start();

if(isset($_SESSION['userId']))
    session_destroy();
if(isset($_POST['login']))
{
    if(!empty($_POST['usrpass0']) && !empty($_POST['usremail0']))
    {
        $email= $_POST['usremail0'];
        $password=$_POST['usrpass0'];
        
        $user = new User($email,$password);
        $result=$user->validate($email,$password);
        
        if($result)
        {
            $_SESSION['userId']= $result;          
            header("Location:main.php");
        }
        else 
            echo "<script> alert('The email and password combination does not match our records!')</script>";
        
    }
}

if(isset($_POST['signup']))
{
    header("Location:signup.php");
}

$smarty->display('index.tpl');

?>