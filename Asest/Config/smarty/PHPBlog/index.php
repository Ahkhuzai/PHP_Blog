<?php
include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;            
       if(isset($_POST['login']))
       {   
           $usrname=$_POST['usrname0'];
           $usrpass= $_POST['usrpass0'];
           if($usrpass!="" && $usrname!="")
           {     
               if($id=validateData($usrname,$usrpass))
                    header("Location:main.php?id=".$id);
           }
           else 
               echo '<script>alert("Please fill in all required information !")</script>';
       }
       else if(isset($_POST['signup']))
           header("Location: newUser.php");
       ///////////////////////////////////////////////////////////////
       function validateData($username , $password)
       {
            require '../PHPBlog/Asest/RedBeanPHP4_3_4/rb.php';
            require '../PHPBlog/connect.php';
            R::setup( 'mysql:host=localhost;dbname='.$DBNAME, $DBUSERNAME, $DBPASSWORD);
            $query= 'SELECT * FROM user WHERE username ="'.$username.'"';
            $user=R::getRow($query);                              
            if($user['userpassword']==$password)           
               return $user['id']; 
            else {
               echo '<script>alert("username and password combinaation does not match our recored!")</script>';
               return false;
            }
        }       
$smarty->display('index.tpl');
?>