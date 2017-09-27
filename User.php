<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author BASEM
 */
class User {
   
var $Username;
var $Password;
var $Email;
var $ID;
    
   
    function __construct($usrname,$usrpass) {
        require '../RedBeanPHP4_3_4/rb.php';
        require 'connect.php';
        R::setup( 'mysql:host=localhost;dbname='.$DBNAME, $DBUSERNAME, $DBPASSWORD);             
        $this->Username=$usrname; 
        $this->Password=$usrpass; 
    }
    
    function validateData()
    {
        
        $query= 'SELECT * FROM user WHERE username ="'.$this->Username.'"';
        $user=R::getRow($query);                              
        if($user['userpassword']==$this->Password)           
        {
            $this->ID=$user['id'];
            $this->Email=$user['email']; 
            return true; 
        }
        else {
            echo '<script>alert("username and password combinaation does not match our recored!")</script>';
            return false;
        }
      
    }
    
    function addNewUser($username,$password,$email)
    {
       $usero = R::dispense( 'user' );
       $usero->username = $username;
       $usero->userpassword = $password;
       $usero->useremail = $email;
       $this->ID = R::store( $usero );
       return $this->ID;
    }
    
    function ValidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        { 
            return false;
        }
        else 
            return true;    
    }   
    
    function neverUsedEmail($email)
    {
        
        $allemails= R::getAll( 'SELECT email FROM user' );
        
        for($i=0;$i<count($allemails);$i++)
        {
           if($email===$allemails[$i]['email'])
           {
           echo "<script> alert('This Email is used before! ')</script>";
           return false;
           }
        }
        
        return true;
    }
    function neverUsedUsername($username)
    {
        
        $allusrnames= R::getAll( 'SELECT username FROM user' );
        
        for($i=0;$i<count($allusrnames);$i++)
        {
           if($username===$allusrnames[$i]['username'])
          {
            echo "<script> alert('This Username is used before! ')</script>";
            return false;
           }
        }
        
        return true;
    }
    

    
    
    }
?>