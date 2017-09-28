<?php
/* Smarty version 3.1.30, created on 2017-09-28 10:50:27
  from "C:\xampp\htdocs\MyCopy\templates\newUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ccb7d3b78355_48313696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537ea7638482d80b958894f4737faefc35ed087b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyCopy\\templates\\newUser.tpl',
      1 => 1506510037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ccb7d3b78355_48313696 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="Asest/js/newUser.js"><?php echo '</script'; ?>
>
        <title></title>
    </head>
    <body>
    <center> 
  <form  action="newUser.php" method="post" >
            <input type="text" id="usrname" name="usrname0" class="inputFromusr"/>
            </br>
            </br>
            <input type="password" id="usrpass" name="usrpass0" class="inputFromusr"/>
            </br>
            </br>
            <input type="text" id="usremail" name="usremail0" class="inputFromusr"/>
            </br>
            </br>
            <input type="submit" value="Sign Up" name = "signup0" id='signup' class='btn'/>
            </form>
    </center>
    </body>
</html>
<?php }
}
