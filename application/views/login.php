<?php
  // This will include the opening tags (HTML, HEAD) 
  include "includes/header.php";
?>
<!-- Custom CSS for the page -->
<link rel="stylesheet" href="<?php echo base_url('css/page/login.css')?>">
</head>
  <body>

    <!-- This will include the navigation --> 
     <?php include "includes/navigation.php" ?>
    <!-- CONTENT  -->
    <div class="container">
      <?php echo form_open('authenticate'); ?>
           <div class="form-signin">
               
               <?php 
                if(validation_errors() != false){
                 echo validation_errors(); 
                 ///validation_errors(
                } 
               ?>
	        <h2 class="form-signin-heading">Login Form</h2>
		        <div class="form-group">
		            <label for="username">Username</label>
		            <input type="text" class="form-control" id="username" required="" autofocus="" name='uname' />
		        </div>    
		    <div class="form-group">
		        <label for="password">Password</label>
			<input type="password" id="password" class="form-control"  required="" name='password' />
		    </div>
	     <button class="btn btn-lg btn-primary btn-block os-login-button" type="submit" name="submit" >Login</button>
             <p class="not-member">Not A member?<a href="<?php echo base_url().'index.php/register/'?>" >Register</a><p>
           </div>       
      <?php echo form_close(); ?>
    </div>
       
<!-- This will include the closing tags -->    
<?php include "includes/bottom.php" ?>