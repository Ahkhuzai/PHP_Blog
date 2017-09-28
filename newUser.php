    <?php
include('Asest/Config/smarty/libs/Smarty.class.php');
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
            echo $id=$user->addNewUser($username,$password,$email);
            if($id)
            header("Location:main.php?id=".$id);
        }     
 }
 
$smarty->display('newUser.tpl');
    ?>
