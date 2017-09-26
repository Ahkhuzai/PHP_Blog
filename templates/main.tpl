<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="../jqwidgets-ver5.3.2/scripts/jquery-1.11.0.min.js"></script>	
        <!-- add the jQWidgets framework -->
        <script type="text/javascript" src="../jqwidgets-ver5.3.2/jqwidgets/jqxcore.js"></script>
        <!-- add one or more widgets -->
        <script type="text/javascript" src="../jqwidgets-ver5.3.2/jqwidgets/jqxbuttons.js"></script>
        <!-- add the jQWidgets base styles and one of the theme stylesheets -->
        <link rel="stylesheet" href="../jqwidgets-ver5.3.2/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="../jqwidgets-ver5.3.2/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
        <script type="text/javascript" src="../jqwidgets-ver5.3.2/jqwidgets/jqxinput.js"></script>
        <script type="text/javascript" src="Asest/js/main.js"></script>
        <title></title>
    </head>
    <body>
    <center> 
        <h1> Welcome {$Name} to your Blog </h1>
        <form  action={$url} method="post" >
             <input type='submit' id='inserNew' name='insertNew0' value='Insert New Post'/>
        </form>
             </hr>
        {foreach $posts as $post }      
        {strip} 
 <hr>		
              <h1>{$post.subject}</h1>      
              <p>{$post.post}</p>
			 
			  <a href={$post.url}> To Update this post .. </a>
			 
        {/strip}
        {/foreach}
     
    </center>
    </body>
</html>
