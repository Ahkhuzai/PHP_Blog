



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('Asest/Config/smarty/libs/Smarty.class.php');
require_once 'Post.php';

// create object
$smarty = new Smarty; 
$post=new Post(NULL, NULL, NULL);

$pid=$_GET['pid'];
$uid=$_GET['uid'];

$post->ID=$pid;
$post->writer_ID=$uid;

$PostToUpdate=$post->loadPost($pid);

$smarty->assign('subject',$PostToUpdate['subject']);

$smarty->assign('post', $PostToUpdate['post']);

$smarty->assign('url', 'update.php?pid='.$pid.'&uid='.$uid);

if(isset($_POST['updatepost0']))
{ 
    $subject=$_POST['subject0'];
    $post_content=$_POST['post0'];
    
     if($subject!= "" &&  $post_content!="")
    {  
        $post->UpdatePost($subject,$post_content);
        
        header("Location:main.php?id=".$uid);        
    }
    else
    {
        echo '<script>alert("Please fill in all required information !")</script>';
    }
}

$smarty->display('update.tpl');
?>
