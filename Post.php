<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author Ahlam
 */
class Post {
    
    var $ID;
    var $subject;
    var $content;
    var $writer_ID; 
    
    function __construct($subject,$content,$uid) {
        require '../RedBeanPHP4_3_4/rb.php';
        require 'connect.php';
        R::setup( 'mysql:host=localhost;dbname='.$DBNAME, $DBUSERNAME, $DBPASSWORD);     
        $this->subject=$subject;
        $this->content=$content;
        $this->writer_ID=$uid;
        
    }
    
    function addNewPost()
    {   
        $post = R::dispense( 'posts' ); 
        $post->subject = $this->subject;
        $post->post = $this->content;
        $post->uid = $this->writer_ID;
        $idi = R::store( $post );
        $this->ID=$idi;
        R::close();
        return true;
    }
    function loadPost($pid)
    {    
        $query= 'SELECT * FROM posts WHERE id ="'.$pid.'"';
        $post=R::getRow($query); 
        R::close();
        $this->writer_ID=$post['uid'];
        return $post;
    }
    function UpdatePost($subject,$post_content)
    {
        echo $query='UPDATE posts SET subject="'.$subject.'", post="'.$post_content.'" WHERE id ='.$this->ID;
        $r=R::exec( $query );
        return $r;   
    }
    
    function loadAllPost($uid)
    {
        $post= R::getAll( 'SELECT * FROM posts where uid='.$uid );
        $subjects=array();
        $posts=array();
        $ids=array();
        for($i=0;$i<count($post);$i++)
        {
            $subjects[$i]= $post[$i]['subject'];
            $posts[$i]= $post[$i]['post'];
            $ids[$i]=$post[$i]['id'];
        }
        $post_data=array();
        for($i=0;$i<count($subjects);$i++)
        {
            $post_data[$i]=array('subject'=>$subjects[$i] , 'post'=>$posts[$i],'url'=>'update.php?pid='.$ids[$i].'&uid='.$uid);
        }
        return $post_data;
    }
}

?>