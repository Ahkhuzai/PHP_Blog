<?php
require '../Blog/User.php';
require '../Blog/Post.php';

class userTest extends \PHPUnit_Framework_TestCase
{
     public function testUserFunctions()
     {
     
        $user=new User(NULL,NULL);
	//correct info
        $result=$user->validate("ahalkhuzai@gmail.com","3124");
        $this->assertEquals(1,$result);
	//wrong pass 
	$result=$user->validate("ahalkhuzai@gmail.com","312456");
        $this->assertEquals(false,$result);
	//wrong user
	$result=$user->validate("ahalkhuzai",Null);
        $this->assertEquals(false,$result);
      
        /////////////////// NeverUsed Function /////////////
        //correct info
        $result=$user->neverUsed("ahlam.alkhuzai@gmail.com");
        $this->assertEquals(true,$result);
	//wrong pass 
	$result=$user->neverUsed("ahalkhuzai@gmail.com");
        $this->assertEquals(false,$result);
        
        $result=$user->neverUsed(Null);
        $this->assertEquals(false,$result);
        
        ///////////////// Add New User ////////////////////
        
        //correct info 
        $email = "Ahlam.alkhuzai@gmail.com";
        $password = "3124";
        $name = "Alkhuzai Ahlam";
        $result = $user->addNewUser($email, $password,$name);

        $this->assertEquals(true,$result);
        
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
        
        ////////////// valid email 
        $result = $user->validEmail("ah@gmail.com");
        $this->assertEquals(true,$result); 
        
        $result = $user->validEmail("ah@");
        $this->assertEquals(false,$result); 
        
        $result = $user->validEmail("ahgmail.com");
        $this->assertEquals(false,$result); 
        
        $result = $user->validEmail(NULL);
        $this->assertEquals(false,$result);
        
      
         /////////////////////////
        $post=new Post(NULL,NULL,Null);
        
        //////////////add new//////////////////
        $id=$post->addNewPost("title", "content", 1);
        $this->assertEquals(true,$id);
        
        $post_data= R::getRow( 'SELECT * FROM post where id='.$id );
        $result_post=$post->loadPost($id);
        $this->assertEquals($post_data,$result_post);
        
        $result=$post->addNewPost(null, "updated content", 1);
        $this->assertEquals(false,$result);
        
	//correct info
        $array=array(array('subject'=>"title" , 'post'=>"content",'url_edit'=>"edit.php?pid=".$id));
        
        $result=$post->loadAllPost(1);
        $this->assertEquals($array,$result);
        
        $result=$post->loadAllPost(null);
        $this->assertEquals(false,$result);
       
        $post_data= R::getRow( 'SELECT * FROM post where id='.$id );
        $result=$post->loadPost($id);
        $this->assertEquals($post_data,$result);
        
        $result=$post->loadPost(Null);
        $this->assertEquals(false,$result);
        
        //////////update //////////////////
        $result=$post->update("updated title","updated content",$id);
        $this->assertEquals(true,$result);
        
        $post_data= R::getRow( 'SELECT * FROM post where id='.$id );
        $array = array('id'=>$id,'title'=>'updated title','content'=>'updated content','uid'=>1);
        $this->assertEquals($array,$post_data);
        
        $result=$post->update("updated title",NULL,NULL);
        $this->assertEquals(false,$result);
        
      //////////////delete//////////////////////
        
        $result = $post->delete($id);
        $this->assertEquals(true,$result);
        //not exist post
        $result = $post->delete($id);
        $this->assertEquals(false,$result);
        

     }    
}
?>