<?php
/* Smarty version 3.1.30, created on 2017-09-26 05:30:04
  from "C:\MAMP\htdocs\smarty\PHPBlog\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c9e5dcd6ddd3_91371315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb03fc9e6af668c615fc64faad29e8439c0f333a' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\smarty\\PHPBlog\\templates\\main.tpl',
      1 => 1506403800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c9e5dcd6ddd3_91371315 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="../PHPBlog/Asest/js/main.js"><?php echo '</script'; ?>
>
        <title></title>
    </head>
    <body>
    <center> 
        <h1> Welcome <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
 to your Blog </h1>
        <form  action=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 method="post" >
             <input type='submit' id='inserNew' name='insertNew0' value='Insert New Post'/>
        </form>
             </hr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>      
        <h1><?php echo $_smarty_tpl->tpl_vars['post']->value['subject'];?>
</h1><p><?php echo $_smarty_tpl->tpl_vars['post']->value['post'];?>
</p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     
    </center>
    </body>
</html>
<?php }
}