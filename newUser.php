    <?php
include('../smarty/libs/Smarty.class.php');
require_once 'User.php';
// create object
$smarty = new Smarty; 
    if(isset($_POST['signup0']))
    {
        $username=$_POST['usrname0'];
        $password=$_POST['usrpass0'];
        $email=$_POST['usremail0'];
        if(!empty($username) && !empty($password) && !empty($email))
        {
            $user = new User($username,$password);
            if($user->neverUsedEmail($email)&& $user->neverUsedUsername($usernames))
                    
                        if(ValidEmail($email))
                        {
                            $user->Email=$email;
                            $user->addNewUser();
                            header("Location:main.php?id=".$id);
                        }       
        }
         else {
             echo "<script> alert('Please fill out all required information ! ')</script>";
         }
 }
$smarty->display('newUser.tpl');
    ?>
