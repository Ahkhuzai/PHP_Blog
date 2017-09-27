<?php
/* Smarty version 3.1.30, created on 2017-09-27 07:01:02
  from "C:\MAMP\htdocs\MyCopy\templates\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cb4cae506b82_17205976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18666e2afa2fc3c15d3b23ab17f15217e751741e' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\MyCopy\\templates\\update.tpl',
      1 => 1506495610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cb4cae506b82_17205976 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input type='submit' id='updatepost' name='updatepost0' value="Update"/>
            </hr>
        </form>
    </center>
    </body>
</html>
<?php }
}
