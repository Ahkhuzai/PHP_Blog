<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('Asest/Config/smarty/libs/Smarty.class.php');
require_once 'Post.php';

$uid=$_GET['id'];

// create object
$smarty = new Smarty; 

//$smarty->assign('Name', $username);
$smarty->assign('url', 'insertNew.php?id='.$uid);

$post=new Post(NULL, NULL, NULL);
$post_data=$post->loadAllPost($uid);

$smarty->assign('posts', $post_data);


$smarty->display('main.tpl');
?>