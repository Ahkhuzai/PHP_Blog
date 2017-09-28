



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

$smarty->assign('url', 'delete.php?pid='.$pid.'&uid='.$uid);

if(isset($_POST['updatepost0']))
{ 
    $post->DeletePost($pid);
     header("Location:main.php?id=".$uid);        
}

$smarty->display('delete.tpl');
?>
