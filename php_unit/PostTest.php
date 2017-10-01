<?php
require_once '../Blog/Post.php';
class PostTest extends \PHPUnit_Framework_TestCase
{   
    function testLoadAllPost()
    {     
        $post=new Post(NULL,NULL,Null);
        $array=array(array('subject'=>"title" , 'post'=>"content",'url_edit'=>"edit.php?pid=1"),
                     array('subject'=>"title2" , 'post'=>"content2",'url_edit'=>"edit.php?pid=2")
            );

        $result=$post->loadAllPost(1);
        $this->assertEquals($array,$result);
        
        $result=$post->loadAllPost(null);
        $this->assertEquals(false,$result);
    }
  
    function testLoadPost()
    {
        $id=1;
        $post=new Post(NULL,NULL,Null);
        
        $post_data= R::getRow( 'SELECT * FROM post where id='.$id );
        $result=$post->loadPost($id);
        $this->assertEquals($post_data,$result);
        
        $result=$post->loadPost(Null);
        $this->assertEquals(false,$result);
    }
    
    function testUpdate()
    {
        $id=1;
        $post=new Post(NULL,NULL,Null);
        $result=$post->update("updated title","updated content",$id);
        $this->assertEquals(true,$result);
        
        $post_data= R::getRow( 'SELECT * FROM post where id='.$id );
        $array = array('id'=>$id,'title'=>'updated title','content'=>'updated content','uid'=>1);
        $this->assertEquals($array,$post_data);
        
        $result=$post->update("updated title",NULL,NULL);
        $this->assertEquals(false,$result);
    }
    
    function testAddPostAndDelete()
    {
        $post=new Post(NULL,NULL,Null);
        
        $id=$post->addNewPost("title", "content", 1);
        $this->assertEquals(true,$id);
        
        $post_data= R::getRow( 'SELECT * FROM post where id='.$id );
        $result_post=$post->loadPost($id);
        $this->assertEquals($post_data,$result_post);
        
        $result=$post->addNewPost(null, "updated content", 1);
        $this->assertEquals(false,$result);
        
        $result = $post->delete($id);
        $this->assertEquals(true,$result);
        //not exist post
        $result = $post->delete($id);
        $this->assertEquals(false,$result);
    }
}
?>