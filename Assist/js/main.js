/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#signup").jqxButton({ width: '120px', height: '35px', theme: 'energyblue'});
        });
$(document).ready(function () {
    $("#login").jqxButton({ width: '120px', height: '35px', theme: 'energyblue'});
        });
$(document).ready(function () {              
  $("#usremail").jqxInput({placeHolder: "Enter Email", height: 25, width: 200, minLength: 1,theme: 'energyblue' });
  
   $("#usremail").blur(function(){
       var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
       if ($(this).val() == '') {
            alert("Please enter an email"); 
        }
        else if (!filter.test($(this).val()))
            alert("Please enter a valid email");       
        else 
            ;
    } );
  
  });     
$(document).ready(function () {              
    $("#usrpass").jqxInput({placeHolder: "Enter Password", height: 25, width: 200, minLength: 1, theme: 'energyblue' });  
       $("#usrpass").blur(function(){
       if ($(this).val() == '') {
            alert("Please enter password"); 
        }
    } );  
});
