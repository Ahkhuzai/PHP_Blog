



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../smarty/libs/Smarty.class.php');

// create object
$smarty = new Smarty;  

$pid=$_GET['pid'];
$uid=$_GET['uid'];

require '../RedBeanPHP4_3_4/rb.php';
require 'connect.php';
R::setup( 'mysql:host=localhost;dbname='.$DBNAME, $DBUSERNAME, $DBPASSWORD); 
$query= 'SELECT * FROM posts WHERE id ="'.$pid.'"';
$post=R::getRow($query);


$smarty->assign('subject',$post['subject']);

$smarty->assign('post', $post['post']);

$smarty->assign('url', 'update.php?pid='.$pid.'&uid='.$uid);

if(isset($_POST['updatepost0']))
{ 
    $subject=$_POST['subject0'];
    $post_content=$_POST['post0'];
     if($subject!= "" &&  $post_content!="")
    {  
		$query='UPDATE posts SET subject="'.$subject.'", post="'.$post_content.'" WHERE id ='.$pid;
         R::exec( $query );
    header("Location:main.php?id=".$uid);        
    }
    else
    {
        echo '<script>alert("Please fill in all required information !")</script>';
    }
}

$smarty->display('update.tpl');
?>
