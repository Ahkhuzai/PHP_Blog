<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../libs/Smarty.class.php');

// create object
$smarty = new Smarty;  

$uid=$_GET['id'];
require '../PHPBlog/Asest/RedBeanPHP4_3_4/rb.php';
require '../PHPBlog/connect.php';
R::setup( 'mysql:host=localhost;dbname='.$DBNAME, $DBUSERNAME, $DBPASSWORD); 
$query= 'SELECT * FROM user WHERE id ="'.$uid.'"';
$user=R::getRow($query);

$smarty->assign('Name', $user['username']);
$smarty->assign('url', 'insertNew.php?id='.$uid);

$post= R::getAll( 'SELECT * FROM posts where uid='.$uid );
$subjects=array();
$posts=array();
for($i=0;$i<count($post);$i++)
{
    $subjects[$i]= $post[$i]['subject'];
    $posts[$i]= $post[$i]['post'];
}
$post_data=array();

for($i=0;$i<count($subjects);$i++)
{
    $post_data[$i]=array('subject'=>$subjects[$i] , 'post'=>$posts[$i]);
}

$smarty->assign('posts', $post_data);


$smarty->display('main.tpl');
?>