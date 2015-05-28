<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" title="MA Directo Group of Companies">
          <image class="mad-logo" src="<?php echo base_url('css/images/Official Logo.jpg')?>">
          <p class="mad-company-name">MA Directo Group of Companies</p>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url()?> ">Home</a></li>
        <li><a href="<?php echo base_url().'index.php/Register/'?> ">Register</a></li>
        <?php 
        if(isset($user)){ 
         if($user['type']==1){ 
        ?>     
           <li><a href="<?php echo base_url().'index.php/Code/'?> ">Code</a></li>
        <?php    
         }
        ?> 
        <li><a href="<?php echo base_url().'index.php/Authenticate/logout'?> ">Logout</a></li>
        <?php } else {?>
        <li><a href="<?php echo base_url().'index.php/Login/'?> ">Login</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>