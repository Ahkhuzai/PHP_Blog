<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author BASEM
 */
class Post {
    //put your code here
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
    
    function loadAllPost($uid)
    {      
        if($isConnected = R::testConnection())
        {
            try{
                $post= R::getAll( 'SELECT * FROM post where uid='.$uid );            
                $subjects=array();
                $posts=array();
                $ids=array();
                for($i=0;$i<count($post);$i++)
                {
                    $subjects[$i]= $post[$i]['title'];
                    $posts[$i]= $post[$i]['content'];
                    $ids[$i]=$post[$i]['id'];
                }
                $post_data=array();
                for($i=0;$i<count($subjects);$i++)
                {
                    $post_data[$i]=array('subject'=>$subjects[$i] , 'post'=>$posts[$i],'url_edit'=>"edit.php?pid=".$ids[$i]);
                }   
               
                if($post_data)
                    return $post_data;   
                else 
                    return false;
            }catch(Exception $e)
            {
                return false;
            }
        }     
         else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        } 
    }
    
    ////////////
    
    function loadPost($pid)
    {
        if($isConnected = R::testConnection())
        {
            try{
                $post_data= R::getRow( 'SELECT * FROM post where id='.$pid );             
                if($post_data)
                    return $post_data;   
                else 
                    return false;
            }catch(Exception $e)
            {
                return false;
            }
        }     
         else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        } 
    }
    
    ///////////
    
    function delete($pid)
    {
        if($isConnected = R::testConnection())
        {
            try{
                $query='delete from post WHERE id ='.$pid;
                $r=R::exec( $query );

                if($r)
                    return $r;   
                else 
                    return false;
            }catch(Exception $e){
                return false;
            }
        }
         else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    
    function update($title,$content,$pid)
    {
        if($isConnected = R::testConnection())
        {
            try{
                $query='UPDATE post SET title="'.$title.'", content="'.$content.'" WHERE id ='.$pid;
                $r=R::exec( $query );
                if($r)
                    return $r;   
                else 
                    return false;
            }catch(Exception $e)
            {
                return false;
            }
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }

    
    function addNewPost($title,$content,$usrID)
    {
        if($isConnected = R::testConnection())
        {
            try{
                $post = R::dispense( 'post' ); 
                $post->title = $title;
                $post->content = $content;
                $post->uid = $usrID;
                $id = R::store( $post );
                if($id)
                    return $id;   
                else 
                    return false;
            }catch(Exception $e)
            {
             
                return false;
            }
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
}
?>
