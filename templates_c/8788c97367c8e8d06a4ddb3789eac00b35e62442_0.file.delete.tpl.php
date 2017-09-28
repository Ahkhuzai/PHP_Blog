<?php
/* Smarty version 3.1.30, created on 2017-09-28 10:56:21
  from "C:\xampp\htdocs\MyCopy\templates\delete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ccb9355ac3c4_41155727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8788c97367c8e8d06a4ddb3789eac00b35e62442' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyCopy\\templates\\delete.tpl',
      1 => 1506579121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ccb9355ac3c4_41155727 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="Asest/js/update.js"><?php echo '</script'; ?>
>
        <title></title>
    </head>
    <body>
    <center> 
        <form  action=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 method="post" >
            <h1> update your new post here .. </h1>          
            <input type='text' id='subject' name='subject0' value='<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
'/> </br> </br>
            <textarea id='post' name='post0' ><?php echo $_smarty_tpl->tpl_vars['post']->value;?>
</textarea> </br>
            <input type='submit' id='updatepost' name='updatepost0' value="Delete this post"/>
            </hr>
        </form>
    </center>
    </body>
</html>

<?php }
}
