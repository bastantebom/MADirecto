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
     data: {'validationCode':$('.validation-code-input').val()},			
     success:function(isValid){	
        if(isValid == "-1"){
            $(".entry-vehicle").html("Not a Valid Code");
            $('.entry-vehicle').css('visibility','visible').hide().fadeIn().removeClass('hidden');
        }else{
            //console.log(isValid);
            //Register.getVehicleName(isValid);
            $('.vehicle-cd').val(isValid);
            $(".entry-vehicle").html("Registration code for a " +  Register.getVehicleName(isValid));
            $('.entry-vehicle').css('visibility','visible').hide().fadeIn().removeClass('hidden');
            $('#registerSave').removeClass('disabled');
            $('#registerExisting').removeClass('disabled');
        }
     },
     error:function(isValid){
        alert("Error");
     }
   });  
};

Register.validateCodeExisting=function(){
    //alert("trigger");
   $.ajax({ 
     url:'validateCode',
     type:'POST',
     data: {'validationCode':$('.validation-code-input-existing').val()},			
     success:function(isValid){	
        if(isValid == "-1"){
            $(".entry-vehicle").html("Not a Valid Code");
            $('.entry-vehicle').css('visibility','visible').hide().fadeIn().removeClass('hidden');
        }else{
            //console.log(isValid);
            //Register.getVehicleName(isValid);
            $('.existing-vehicle-code').val(isValid);
            $(".entry-vehicle").html("Registration code for a " +  Register.getVehicleName(isValid));
            $('.entry-vehicle').css('visibility','visible').hide().fadeIn().removeClass('hidden');
            $('#registerSave').removeClass('disabled');
            $('#registerExisting').removeClass('disabled');
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
     url:'check_credential',
     type:'POST',
     async: false,
     data: {'u': u ,'p': p},
     success:function(isExist){
        var user = $.parseJSON(isExist);
        //console.log($.isEmptyObject(user)); 
        if($.isEmptyObject(user)){
           $('#registrationForm').ajaxSubmit({
               success:  function(data){
                     //var newUserParse = $.parseJSON(data);
                     var n = data.indexOf("##");
                     if(n==-1){
                        $(".registration-success").html("<h5>Registration is successful. You can continue as <a href='"+$('#base-url').val()+"index.php/subsidiary/marketing'>   Continue as User </a></h5>");
                     }
                     else{
                       //console.log("-------------------------------------" + newUser.newUser);
                       //var name = newUserParse.newUser.firstname +" "+ newUserParse.newUser.lastname;
                       $(".registration-success").html("<h5>Registration is successful. You can continue as <a href='"+$('#base-url').val()+"index.php/subsidiary/marketing'>   Continue as User </a></h5>");
                     }
                   $("input[type=text]").val("");  
                   $('.registration-success').css('visibility','visible').hide().fadeIn().removeClass('hidden');
                   $('#registerSave').addClass('disabled');
                   $('#registerExisting').addClass('disabled');
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

Register.saveForExisting=function(){
   alert($('.validation-code-input-existing').val() + $('.existing-vehicle-code').val() + $('.existing-id').val());
   $.ajax({ 
     url:'saveExistingUser',
     type:'POST',
     data: {'validationCode':$('.validation-code-input-existing').val(), 'id':$('.existing-id').val(), 'vehicleCode':$('.existing-vehicle-code').val()},			
     success:function(message){	
        $(".registration-success").html("<h5>"+message+"</h5>");
        $('.registration-success').css('visibility','visible').hide().fadeIn().removeClass('hidden');
        $("input[type=text]").val(""); 
        $('#registerSave').addClass('disabled');
        $('#registerExisting').addClass('disabled');
     },
     error:function(message){
        alert("Error");
     }
   });  
};

$(document).ready(function(){
  Register.initialize();	
});
