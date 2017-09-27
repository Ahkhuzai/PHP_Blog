<?php
include('../smarty/libs/Smarty.class.php');
require_once("User.php");
// create object
$smarty = new Smarty; 
 

       if(isset($_POST['login']))
       {   
           $usrname=$_POST['usrname0'];
           $usrpass= $_POST['usrpass0'];
           if(!empty($usrpass) && !empty($usrname))
           {   
               $user = new User($usrname,$usrpass);
             
               if($user->validateData())
               {
                    $id=$user->ID;
                    header("Location:main.php?id=".$id);
               }
           }
           else 
               echo '<script>alert("Please fill in all required information !")</script>';
       }
       else if(isset($_POST['signup']))
           header("Location: newUser.php");
       
///////////////////////////////////////////////////////////////
       
$smarty->display('index.tpl');
?>