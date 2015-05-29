<nav class="navbar navbar-default">
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
          <image class="mad-logo" src="<?php echo base_url('css/images/gc.png')?>">
          <p class="mad-company-name">MA Directo Group of Companies</p>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
        <?php if(!isset($user['type'])) { ?>
          <li><a href="<?php echo base_url()?> ">Home</a></li>
          <li><a href="<?php echo base_url().'index.php/Register/'?> ">Register</a></li>
          <li><a href="<?php echo base_url().'index.php/Login/'?> ">Login</a></li>
        <?php } else { ?>
              <li><a href="<?php echo base_url()?> ">Home</a></li>
              <?php if($access['page']=="marketing") { ?>
               <li><a href="<?php echo base_url().'index.php/Register/'?> ">Register</a></li>
              <?php } ?> 
              <?php if($user['type']==1) { ?>
                  <?php if($access['page']=="marketing") { ?>
                   <li><a href="<?php echo base_url().'index.php/Code/'?> ">Code</a></li>
                  <?php } ?>
              <?php } ?>
              <li><a href="<?php echo base_url().'index.php/Authenticate/logout'?> ">Logout</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>