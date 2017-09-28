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
        require 'connect.php';
        $this->Username=$usrname; 
        $this->Password=$usrpass; 
    }
    
    function validateData()
    {
        if($isConnected = R::testConnection())
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
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    
    function addNewUser($username,$password,$email)
    {
        if($isConnected = R::testConnection())
        {
            if($this->neverUsedEmail($email)&& $this->neverUsedUsername($username))

                if($this->ValidEmail($email))
                {
                    $this->Email=$email;
                    $usero = R::dispense( 'user' );
                    $usero->username = $username;
                    $usero->userpassword = $password;
                    $usero->useremail = $email;
                    $this->ID = R::store( $usero );
                    if($this->ID)
                        return $this->ID;
                    else 
                        return false; 
                } 
                else return false;
            else return false; 
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    
    function ValidEmail($email)
    {
        if($isConnected = R::testConnection())
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            { 
                return false;
            }
            else 
                return true; 
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }   
    
    function neverUsedEmail($email)
    {
        
        if($isConnected = R::testConnection())
        {
            $allemails= R::getAll( 'SELECT useremail FROM user' );

            for($i=0;$i<count($allemails);$i++)
            {
               if($email===$allemails[$i]['useremail'])
               {
               echo "<script> alert('This Email is used before! ')</script>";
               return false;
               }
            }
        
            return true;
        }
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
    
    function neverUsedUsername($username)
    {
        
        if($isConnected = R::testConnection())
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
        
        else
        {
            echo '<script>alert("There are problem with db connection!")</script>';       
            return false;
        }
    }
}
?>