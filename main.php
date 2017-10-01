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

if(isset($_SESSION['userId']))
{
    $usrID= $_SESSION['userId'];
    // create object

    $smarty->assign('url', 'main.php');


    $post = new Post(NULL,NULL,Null);
    $post_data=array();
    $post_data=$post->loadAllPost($usrID);

    if($post_data)
        $smarty->assign('posts', $post_data);
    else 
        $smarty->assign('msg',"You have not post anything yet"); 


    if(isset($_POST['insertNew0']))
        header ("Location:NewPost.php");
    if(isset($_POST['EditPost0']))
        header ("Location:EditPost.php");

    $smarty->display('main.tpl');
}
else 
{
    $smarty->assign('msg', 'You are not registered! ');
    $smarty->display('not_register.tpl'); 
}
?>