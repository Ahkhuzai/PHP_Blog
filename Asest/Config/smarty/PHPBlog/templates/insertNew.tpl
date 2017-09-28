<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"></script>	
        <!-- add the jQWidgets framework -->
        <script type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
        <!-- add one or more widgets -->
        <script type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
        <script type="text/javascript" src="../PHPBlog/Asest/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"></script>
        <script type="text/javascript" src="../PHPBlog/Asest/js/insertNew.js"></script>
        <title></title>
    </head>
    <body>
    <center> 
        <form  action={$url} method="post" >
            <h1> {$Name}, Insert your new post here .. </h1>          
            <input type='text' id='subject' name='subject0'/> </br> </br>
            <textarea id='post' name='post0' ></textarea> </br>
            <input type='submit' id='inserNewpost' name='insertNewpost0' value='Insert New Post'/>
            </hr>
        </form>
    </center>
    </body>
</html>
