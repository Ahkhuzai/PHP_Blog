<?php
/* Smarty version 3.1.30, created on 2017-09-26 13:48:23
  from "C:\MAMP\htdocs\PHPBlog\templates\insertNew.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ca5aa7387ba6_45283692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbcec5df13925e03e87f38b9adbfb49642d26e8' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\PHPBlog\\templates\\insertNew.tpl',
      1 => 1506433691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ca5aa7387ba6_45283692 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="../jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>	
        <!-- add the jQWidgets framework -->
        <?php echo '<script'; ?>
 type="text/javascript" src="../jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"><?php echo '</script'; ?>
>
        <!-- add one or more widgets -->
        <?php echo '<script'; ?>
 type="text/javascript" src="../jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"><?php echo '</script'; ?>
>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="../jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="../jqwidgets-ver5.3.2/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="../jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="Asest/js/insertNew.js"><?php echo '</script'; ?>
>
        <title></title>
    </head>
    <body>
    <center> 
        <form  action=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 method="post" >
            <h1> <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
, Insert your new post here .. </h1>          
            <input type='text' id='subject' name='subject0'/> </br> </br>
            <textarea id='post' name='post0' ></textarea> </br>
            <input type='submit' id='inserNewpost' name='insertNewpost0' value='Insert New Post'/>
            </hr>
        </form>
    </center>
    </body>
</html>
<?php }
}
