<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"></script>	
        <!-- add the jQWidgets framework -->
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
        <!-- add one or more widgets -->
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
        <script type="text/javascript" src="Assist/Config/jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"></script>
        <script type="text/javascript" src="Assist/js/signup.js"></script>
        <title> PHP Blog</title>
    </head>
    <body>
    <center> 
        <form  action="signup.php" method="post" >
            <input type="text" id="usremail" name="usremail0"/>
            </br>
            </br>
            <input type="password" id="usrpass" name="usrpass0"/>
            </br>
            </br>
            <input type="text" id="usrname" name="usrname0"/>
            </br>
            </br>
            <input type="submit" value="Sign Up" name = "signup" id='signup' class='btn' />
            </form>
    </center>
    </body>
</html>
