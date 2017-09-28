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
        require 'connect.php';   
        $this->subject=$subject;
        $this->content=$content;
        $this->writer_ID=$uid;   
    }
    
    function addNewPost()
    {   if($isConnected = R::testConnection())
        {
            $post = R::dispense( 'posts' ); 
            $post->subject = $this->subject;
            $post->post = $this->content;
            $post->uid = $this->writer_ID;
            $idi = R::store( $post );
            $this->ID=$idi;
            R::close();
            if($idi)
                return true;
            else 
                return false;
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    function loadPost($pid)
    {    
        if($isConnected = R::testConnection())
        {
            $query= 'SELECT * FROM posts WHERE id ="'.$pid.'"';
            $post=R::getRow($query); 
            R::close();
            $this->writer_ID=$post['uid'];
            if($post)
                return $post;
            else 
                return false;
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    function UpdatePost($subject,$post_content)
    {
        if($isConnected = R::testConnection())
        {
            $query='UPDATE posts SET subject="'.$subject.'", post="'.$post_content.'" WHERE id ='.$this->ID;
            $r=R::exec( $query );
            if($r)
                return $r;   
            else 
                return false;
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    
    function DeletePost($pid)
    {
        if($isConnected = R::testConnection())
        {
            $query='delete from posts WHERE id ='.$this->ID;
            $r=R::exec( $query );
            if($r)
                return $r;   
            else 
                return false;
        }
         else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    
    function loadAllPost($uid)
    {
        if($isConnected = R::testConnection())
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
            $post_data[$i]=array('subject'=>$subjects[$i] , 'post'=>$posts[$i],
                'url_update'=>'update.php?pid='.$ids[$i].'&uid='.$uid,'url_delete'=>'delete.php?pid='.$ids[$i].'&uid='.$uid);
        }
        if($post_data)
            return $post_data;   
        else 
            return false;
        }
         else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        } 
    }
}

?>