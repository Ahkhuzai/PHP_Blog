<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('Assist/Config/smarty/libs/Smarty.class.php');
require_once 'Post.php';

$smarty = new Smarty; 
$smarty->assign('url', 'main.php');
session_start();
$usrID= $_SESSION['userId'];
$pid=$_GET['pid'];
//Load Post 
$post = new Post(NULL,NULL,NULL);
$post_data=$post->loadPost($pid);
if($post_data)
{
    $smarty->assign('subject',$post_data['title']);

    $smarty->assign('post', $post_data['content']);

    $smarty->assign('url','edit.php?pid='.$pid);
}
 else {
    header("Location:main.php");
}
//Edit Post 

if(isset($_POST['updatepost0']))
{
    if(!empty($_POST['subject0']) && !empty($_POST['post0']))
    {
        $title=$_POST['subject0'];
        $content=$_POST['post0'];
        $result=$post->update($title,$content,$pid);
        if($result)
            header("Location:main.php");
    }
    else 
        echo '<script>alert("Please fill all fields!")</script>'; 
}  
if(isset($_POST['deletepost0']))
{
    $result=$post->delete($pid);
    if($result)
       header("Location:main.php");
}

$smarty->display('edit.tpl');
?>