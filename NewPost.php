<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('Assist/Config/smarty/libs/Smarty.class.php');
require_once 'Post.php';

$smarty = new Smarty; 
session_start();
$usrID= $_SESSION['userId'];
//Load Post 
$post = new Post(NULL,NULL,NULL);

if(isset($_POST['inserNewpost0']))
{
    if(!empty($_POST['post0']) && !empty($_POST['subject0']))
    {
        echo "<script>alert('Please fill out all fields')</script>";
        $title=$_POST['subject0'];
        $content=$_POST['post0'];
        echo $title.$content.$usrID."oo";
        $result=$post->addNewPost($title,$content,$usrID);
        if($result)
            header("Location: main.php");
    }
    else
        echo "<script>alert('Please fill out all fields')</script>";
}

$smarty->display('NewPost.tpl');
?>