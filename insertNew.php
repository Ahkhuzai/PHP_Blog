



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../smarty/libs/Smarty.class.php');
require_once 'Post.php';
// create object
$smarty = new Smarty; 
$uid=$_GET['id'];
$smarty->assign('url', 'insertNew.php?id='.$uid);

if(isset($_POST['insertNewpost0']))
{ 
    $subject=$_POST['subject0'];
    $post_content=$_POST['post0'];
     if(!empty($subject) &&  !empty($post_content))
    {  
    $post = new Post($subject,$post_content,$uid);   
    $post->addNewPost();
    header("Location:main.php?id=".$uid);     
    }
    else
    {
        echo '<script>alert("Please fill in all required information !")</script>';
    }
}

$smarty->display('insertNew.tpl');
?>
