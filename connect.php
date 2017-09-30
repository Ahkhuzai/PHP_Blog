<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Assist/Config/RedBeanPHP4_3_4/rb.php';

$DBUSERNAME="root";
$DBPASSWORD="";
$DBNAME="blog";

 R::setup( 'mysql:host=localhost;dbname='.$DBNAME, $DBUSERNAME, $DBPASSWORD);
 
?>