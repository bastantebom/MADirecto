<?php
  // This will include the opening tags (HTML, HEAD) 
  include "includes/header.php";
?>
<!-- Custom CSS for the page -->
<link rel="stylesheet" href="<?php echo base_url('css/page/register.css')?>">
</head>
  <body>

    <!-- This will include the navigation -->
    <? include "includes/navigation.php" ?>

 
    <!-- CONTENT  -->
    <div class="container">
      <div id="register" class="panel panel-default">
       <div class="panel-heading">Registration</div>
       <div class="panel-body">
           
        <div class="row">
         <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">Code</label>
           <div class="col-sm-9">
	      <input type="text" id="validation" class="form-control" >
           </div>
         </div>
         <div class="form-group col-sm-6">
             <div class="col-sm-12">
             <div class="entry-vehicle alert-info">czxcx</div>
             </div>
         </div>
        </div>
         <hr/>
         <!--lastname--> 
        <div class="row">
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Lastname</label>
           <div class="col-sm-9">
	      <input type="text" id="lastname" class="form-control" >
           </div>
         </div>
         
         <!--firstname-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Firstname</label>
           <div class="col-sm-9">
	      <input type="text" id="firstname" class="form-control" >
           </div>
         </div>
         
         <!--middlename-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Middlename</label>
           <div class="col-sm-9">
	      <input type="text" id="middlenames" class="form-control" >
           </div>
         </div>
        </div>
         <!--birthdate-->  
        <div class="row"> 
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Birthdate</label>
           <div class="col-sm-9">
	      <input type="text" id="birthdate" class="form-control" >
           </div>
         </div>
            
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Gender</label>
           <div class="col-sm-9">
	      <select id="gender" class="form-control">
                  <option value="M">Male</option>
                  <option value="F">Female</option>
              </select>
           </div>
         </div>
            
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Civil Status</label>
           <div class="col-sm-9">
	      <select id="civil" class="form-control">
                  <option value="1">Single</option>
                  <option value="2">Single with Dependents</option>
                  <option value="3">Married</option>
                  <option value="4">Widow</option>
              </select>
           </div>
         </div>
             
        </div>	
         
        <hr /> 
        <div class="row"> 
         <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">Tax No.</label>
           <div class="col-sm-10">
	      <input type="text" id="tax" class="form-control" >
           </div>
         </div>
            
         <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">SSS No.</label>
           <div class="col-sm-10">
	      <input type="text" id="sss" class="form-control" >
           </div>
         </div>
            
        </div>
        <hr />
        
        <div class="row"> 
         <div class="form-group col-sm-12">
          <label class="col-sm-1 control-label">Address</label>
           <div class="col-sm-11">
	      <input type="text" id="address" class="form-control" >
           </div>
         </div>
         
        </div>
        <div class="row"> 
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Cellphone No.</label>
           <div class="col-sm-9">
	      <input type="text" id="cp" class="form-control" >
           </div>
         </div>
         
         <!--firstname-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Landline No.</label>
           <div class="col-sm-9">
	      <input type="text" id="ln" class="form-control" >
           </div>
         </div>
         
         <!--middlename-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Email Address</label>
           <div class="col-sm-9">
	      <input type="text" id="email" class="form-control" >
           </div>
         </div>
        </div>
        
        <div class="row ">
          <div class="col-sm-12">
            <div class="col-sm-12">
            <a class="btn btn-primary pull-right" href="#" role="button">Register</a>
            </div>
          </div>
        </div>
        
       </div>
      </div>
    </div>
    
    <?php include "includes/js.php" ?>
    <script src="<?php echo base_url('js/page/register.js')?>"></script>
   
<!-- This will include the closing tags -->    
<?php include "includes/bottom.php" ?>