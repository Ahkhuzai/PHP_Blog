<?php
include('Assist/Config/smarty/libs/Smarty.class.php');
require 'User.php';
// create object
$smarty = new Smarty; 

if(isset($_POST['signup']))
{
    if(!empty($_POST['usremail0']) && !empty($_POST['usrpass0']) && !empty($_POST['usrname0']))
    {
        $email = $_POST['usremail0'];
        $password = $_POST['usrpass0'];
        $name = $_POST['usrname0'];
        $user = new User($email,$password);
        $neverUsed = $user->neverUsed($email);
        if($neverUsed)
        {
            if($user->ValidEmail($email))
            {
                $result = $user->addNewUser($email,$password,$name);
                if($result)
                {
                    echo '<script>alert("You have successfully registered!")</script>';
                    session_start();
                    $_SESSION['userId']= $result;
                    header("Location: main.php");
                }
            }
            else 
                echo '<script>alert("The email is not written in a valid format!")</script>';
        }
    }
}

$smarty->display('signup.tpl');

?>