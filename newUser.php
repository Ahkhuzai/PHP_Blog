    <?php
include('../smarty/libs/Smarty.class.php');
require 'User.php';
// create object
$smarty = new Smarty; 

    if(isset($_POST['signup0']))
    {
        $username=$_POST['usrname0'];
        $password=$_POST['usrpass0'];
        $email=$_POST['usremail0'];
        $user = new User($username,$password);
         if(!empty($username) && !empty($password) && !empty($email))
        {
            if($user->neverUsedEmail($email)&& $user->neverUsedUsername($username))
                    
                        if($user->ValidEmail($email))
                        {
                            $user->Email=$email;
                            $id=$user->addNewUser($username,$password,$email);
                            header("Location:main.php?id=".$id);
                        }       
               
        }
       
 }
$smarty->display('newUser.tpl');
    ?>
