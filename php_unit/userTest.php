<?php
require '../Blog/User.php';

class userTest extends \PHPUnit_Framework_TestCase
{
    public function testAddNewUser()
    {
        $user=new User(NULL,NULL);
        ///////////////// Add New User ////////////////////     
        //correct info 
        $email = "Ahlam.alkhuzai@gmail.com";
        $password = "3124";
        $name = "Alkhuzai Ahlam";
        
        $result = $user->addNewUser($email, $password,$name);
        $post_data= R::getRow( 'SELECT * FROM user where email="'.$email.'"' );
        $dbid=$post_data['id'];
        $this->assertEquals($dbid,$result);
        
        // missing name or passwprd or email
        $result = $user->addNewUser(NULL, $password,$name);
        $this->assertEquals(false,$result);
        
        $result = $user->addNewUser($email, Null,$name);
        $this->assertEquals(false,$result);
        
        $result = $user->addNewUser($email, $password,Null);
        $this->assertEquals(false,$result);
        
        $result = $user->addNewUser(Null, Null,Null);
        $this->assertEquals(false,$result);
        
        // duplcate email address 
        $result = $user->addNewUser($email, $password,$name);
        $this->assertEquals(false,$result); 

    }  
    function testNeverUsed()
    {
        $user=new User(NULL,NULL);
        $email = "ahalkhuzai@gmail.com";
            //wrong info
        $result=$user->neverUsed($email);
        $this->assertEquals(false,$result);
	//correct 
	$result=$user->neverUsed("ahalkhuzai0@gmail.com");
        $this->assertEquals(true,$result);
        
        $result=$user->neverUsed(Null);
        $this->assertEquals(false,$result);
        
    }
    function testValidEmail()
    {
        $user=new User(NULL,NULL);
        $result = $user->validEmail("ah@gmail.com");
        $this->assertEquals(true,$result); 
        
        $result = $user->validEmail("ah@");
        $this->assertEquals(false,$result); 
        
        $result = $user->validEmail("ahgmail.com");
        $this->assertEquals(false,$result); 
        
        $result = $user->validEmail(NULL);
        $this->assertEquals(false,$result);
    }
    function testValidate()
    {
        $user=new User(NULL,NULL);
        $email = "ahalkhuzai@gmail.com";
        $password = "3124"; 
                
        $result=$user->validate($email,$password);
        $id=$user->ID;
        $this->assertEquals($id,$result);
	//wrong pass 
	$result=$user->validate($email,"312456");
        $this->assertEquals(false,$result);
	//wrong user
	$result=$user->validate("ahalkhuzai",Null);
        $this->assertEquals(false,$result);
      
    }

}
?>