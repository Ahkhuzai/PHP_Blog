<?php
/* Smarty version 3.1.30, created on 2017-09-25 18:18:41
  from "C:\MAMP\htdocs\smarty\PHPBlog\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c94881487cf3_94097012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c3f29dd6b2ce4c544ecfc67cd7a7734a64848c' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\smarty\\PHPBlog\\templates\\index.tpl',
      1 => 1506363173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c94881487cf3_94097012 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php echo '<script'; ?>
 type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>	
        <!-- add the jQWidgets framework -->
        <?php echo '<script'; ?>
 type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
        <!-- add one or more widgets -->
        <?php echo '<script'; ?>
 type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="../PHPBlog/Asest/js/index.js"><?php echo '</script'; ?>
>
        <title></title>
    </head>
    <body>
    <center> 
        <form  action="http://localhost/smarty/PHPBlog/index.php" method="post" >
            <input type="text" id="usrname" name="usrname0"/>
            </br>
            </br>
            <input type="password" id="usrpass" name="usrpass0"/>
            </br>
            </br>
            <input type="submit" value="Login"  name = "login" id='login' class='btn'/> 
            <input type="submit" value="New User" name = "signup" id='signup' class='btn'/>
            </form>
    </center>
    </body>
</html><?php }
}
