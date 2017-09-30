<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User {

var $Name;
var $Password;
var $Email;
var $ID;

function __construct($usremail,$usrpass)
{
    require 'connect.php';
    $this->Email=$usremail; 
    $this->Password=$usrpass; 
}

function validate($email,$password)
{
    $isConnected = R::testConnection();
    if($isConnected)
    {
        try{
            $query= 'SELECT * FROM user where email ="'.$email.'"';
            $user=R::getRow($query); 
            if($user)
            {
                if($user['password']==$password)           
                {
                    $this->ID=$user['id'];
                    $this->Name=$user['name']; 
                    return $this->ID; 
                }
                else 
                    return false; 
            }
            else 
                return false;
        }catch(Exception $e){
            return false;
        }
    }
    else 
    {
        echo '<script>alert("There are problem with db connection!")</script>';
        return false;
    }       
}

/////////////

function neverUsed($email)
{
    $isConnected = R::testConnection();
    if($isConnected)
    {
        try{
            $allemails= R::getAll( 'SELECT email FROM user' );
            for($i=0;$i<count($allemails);$i++)
            {
                if($email===$allemails[$i]['email'])
                {
                   echo "<script> alert('This Email is used before! ')</script>";
                   return false;
                }
            }  
            if(!empty($email))
                return true;
            else 
                return false;
        }catch(Exception $e){
            echo $e->getMessage();
           return false;
        }
    }
    else 
    {
        echo '<script>alert("There are problem with db connection!")</script>';
        return false;
    }
}

////////////

function addNewUser($email,$password,$name)
{
    if($isConnected = R::testConnection())
    {
        try {
            $usero = R::dispense( 'user' );
            $usero->name = $name;
            $usero->password = $password;
            $usero->email = $email;
            $this->ID = R::store( $usero );
            if($this->ID)
                return $this->ID;
            else 
                return false; 
        } catch (Exception $e ) {
        //echo $e->getMessage();
        return false;
        }
    } 
    else
    {
        echo '<script>alert("There are problem with db connection!")</script>';       
        return false;
    }   
}
/////////////////////
function validEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    { 
        return false;
    }
    else 
         return true; 
}
}
?>
