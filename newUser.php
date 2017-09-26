    <?php
include('../smarty/libs/Smarty.class.php');
// create object
$smarty = new Smarty; 
    require '../RedBeanPHP4_3_4/rb.php';
    require 'connect.php';
    if(isset($_POST['signup0']))
    {
        $username=$_POST['usrname0'];
        $password=$_POST['usrpass0'];
        $email=$_POST['usremail0'];

        R::setup( 'mysql:host=localhost;dbname='.$DBNAME, $DBUSERNAME, $DBPASSWORD); 
        if(!isEmpty($username) && !isEmpty($password) && !isEmpty($email))
        {
            if(neverUsedUsrName($email,'useremail'))
                    if(neverUsedUsrName($username,'username'))
                        if(ValidEmail($email))
                        {
                            $post = R::dispense( 'user' );
                            $post->username = $username;
                            $post->userpassword = $password;
                            $post->useremail = $email;
                            $id = R::store( $post );
                            header("Location:main.php?id=".$id);
                        }
                        else
                            echo "<script> alert('Invalid email format')</script>";
                    else {
                        echo "<script> alert('This user name has been used before')</script>";
                    }
                else
                { echo "<script> alert('This Email has been used before')</script>";
                }
        }
         else {
             echo "<script> alert('Please fill out all required information ! ')</script>";
         }
 }
 
 ///////////////////////////////////////////////////////////////////////////////
    function isEmpty($text)
    {
        if($text=="")
            return true;
        else 
            return false;
    }
    function ValidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        { 
            return false;
        }
        else 
            return true;    
    }   
    ////////////////////////////////////////////////////////////////////////////
    function neverUsedUsrName($username,$column_name)
    {
        
        $allusrnames= R::getAll( 'SELECT '.$column_name.' FROM user' );
        
        for($i=0;$i<count($allusrnames);$i++)
        {
           if($username===$allusrnames[$i][$column_name])
           return false;
        }
        
        return true;
    }
$smarty->display('newUser.tpl');
    ?>