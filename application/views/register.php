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
         <div role="tabpanel">

      <!-- Nav tabs -->
           <ul class="nav nav-tabs" role="tablist">
             <li role="presentation" class=""><a href="#notlogin" aria-controls="home" role="tab" data-toggle="tab">Register as New User</a></li>
             <?php if(isset($user['type'])){ ?>
             <li role="presentation"><a href="#login" aria-controls="profile" role="tab" data-toggle="tab">Register as Login User</a></li>
             <?php } ?>
           </ul>

  <!-- Tab panes -->
           <div class="tab-content">
             <div role="tabpanel" class="tab-pane fade" id="notlogin"><?php include "includes/registrationForm.php"; ?></div>
             <div role="tabpanel" class="tab-pane fade" id="login"><?php include "includes/registrationExistingUser.php"; ?></div>
           </div>

          </div>
        
       </div>
      </div>
    </div>
    
    <?php
    include "includes/js.php";
    include "includes/messages.php";
    ?>
    <script src="<?php echo base_url('js/page/register.js')?>"></script>
   
<!-- This will include the closing tags -->    
<?php include "includes/bottom.php" ?>