var Register = Register || {};


Register.initialize=function(){
  $("#birthdate").datepicker();
  var d = new Date();

  var month = d.getMonth()+1;
  var day = d.getDate();

    $('#date').val(d.getFullYear() + '/' +
    (month<10 ? '0' : '') + month + '/' +
    (day<10 ? '0' : '') + day);
};

Register.validateCode=function(){
    //alert("trigger");
   $.ajax({ 
     url:'validateCode',
     type:'POST',
     data: {'validationCode':$('#validation-code-input').val()},			
     success:function(isValid){	
        if(isValid == "-1"){
            $(".entry-vehicle").html("Not a Valid Code");
            $('.entry-vehicle').css('visibility','visible').hide().fadeIn().removeClass('hidden');
        }else{
            //console.log(isValid);
            //Register.getVehicleName(isValid);
            $('#vehicle-cd').val(isValid);
            $(".entry-vehicle").html("Registration code for a " +  Register.getVehicleName(isValid));
            $('.entry-vehicle').css('visibility','visible').hide().fadeIn().removeClass('hidden');
            $('#registerSave').removeClass('disabled');
        }
     },
     error:function(isValid){
        alert("Error");
     }
   });  
};

Register.getVehicleName=function(car){
 var vehicle;
   switch(car){
     case "LC":
       vehicle = "Land Cruiser";
       break;
     case "F":
       vehicle = "Fortuner";
       break;
     case "H":
       vehicle = "Hilux";
       break;
     case "GL":
       vehicle = "GL Grandia";
       break;
     case "C":
       vehicle = "Commuter";
       break;
     case "I":
       vehicle = "Innova";
       break;
     case "V":
       vehicle = "Vios";
       break;
     case "T":
       vehicle = "Tricycle";
       break;
     case "150CC":
       vehicle = "150cc Rusi Motorcycle";
       break;
     case "125CC":
       vehicle = "125cc Rusi Motorcycle";
       break;
     case "110CC":
       vehicle = "110cc Rusi Motorcycle";
       break;
     case "100CC":
       vehicle = "100cc Rusi Motorcycle";
       break;
  }
  return vehicle;
};

Register.checkCredentialUse=function(){
 var p = $("#password").val();
 var c = $("#confirmpassword").val();
 var u = $("#username").val();
 
 //alert(c + p);
 
 if(c.trim()==p.trim()){
  $.ajax({ 
     url:'checkCredential',
     type:'POST',
     async: false,
     data: {'u': u ,'p': p},			
     success:function(isExist){
        var user = $.parseJSON(isExist);
        //console.log($.isEmptyObject(user)); 
        if($.isEmptyObject(user)){
           $('#registrationForm').ajaxSubmit({
               success:  function(data){
                     var newUserParse = $.parseJSON(data);
                     if($.isEmptyObject(newUserParse.newUser)){
                       $(".registration-success").html("<h5>Registration is successful.</h5>");  
                     }
                     else{
                      // console.log("-------------------------------------" + newUser.newUser);
                       var name = newUserParse.newUser.firstname +" "+ newUserParse.newUser.lastname;
                       $(".registration-success").html("<h5>Registration is successful. You can continue as <a href='"+$('#base-url').val()+"index.php/Subsidiary/marketing'> " +  name + "</a></h5>");
                     }
                   $("input[type=text]").val("");  
                   $('.registration-success').css('visibility','visible').hide().fadeIn().removeClass('hidden');
               },
               error: function(data){
                   console.log(data);
               }
           });
        }else{
            $("#messageContainer").html("");
            $("#messageContainer").html("Password and Username already exist");
            $("#message").modal('toggle'); 
       }
     },
     error:function(isExist){
        alert("Error");
     }
   }); 
 }else {
   //return false;
   $("#messageContainer").html("");
   $("#messageContainer").html("Password and Confirm Password didn't match!");
   $("#message").modal('toggle');
 }   
};

Register.saveUser=function(){
 Register.checkCredentialUse();
};

$(document).ready(function(){
  Register.initialize();	
});
