var Register = Register || {};


Register.initialize=function(){
  $("#birthdate").datepicker();
};

$(document).ready(function(){
  Register.initialize();	
});
