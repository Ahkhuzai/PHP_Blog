



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

if(isset($_POST['insertNewpost0']))
{ 
    $subject=$_POST['subject0'];
    $post_content=$_POST['post0'];
     if($subject!= "" &&  $post_content!="")
    {  
         
     $post = R::dispense( 'posts' );
     
    $post->subject = $subject;
    $post->post =  $post_content;
    $post->uid = $uid;
    print_r($post);
    $idi = R::store( $post );
    header("Location:main.php?id=".$uid);
         
    }
    else
    {
        echo '<script>alert("Please fill in all required information !")</script>';
    }
}

$smarty->display('insertNew.tpl');
?>
