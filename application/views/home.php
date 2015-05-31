<?php
  // This will include the opening tags (HTML, HEAD) 
  include "includes/header.php";
?>
<link rel="stylesheet" href="<?php echo base_url('css/page/home.css')?>">

<!-- Custom CSS for the page -->

</head>
  <body>

    <!-- This will include the navigation -->
    <? include "includes/navigation.php" ?>

 
    <!-- CONTENT  -->
    <div class="container">
        <div class="col-md-10">
            <h2>Our Beneficiaries</h2>
            <ul class="bxslider">
              <li><img src="<?php echo base_url('css/images/beneficiaries/1.jpg')?>" title="This is Caption Text" /></li>
              <li><img src="<?php echo base_url('css/images/beneficiaries/2.jpg')?>" title="This is Caption Text" /></li>
              <li><img src="<?php echo base_url('css/images/beneficiaries/3.jpg')?>" title="This is Caption Text" /></li>
              <li><img src="<?php echo base_url('css/images/beneficiaries/4.jpg')?>" title="This is Caption Text" /></li>
            </ul>
        </div>
        
        <div class="col-md-2">
          <div class="row">
            <h2>News</h2>
            <ul class="bxslider">
              <li><img src="<?php echo base_url('css/images/raffles/1.jpg')?>" /></li>
              <li><img src="<?php echo base_url('css/images/raffles/2.jpg')?>" /></li>
              <li><img src="<?php echo base_url('css/images/raffles/3.jpg')?>" /></li>
            </ul>
          </div>
          <div class="row">
            <h2>Raffle</h2>
            <ul class="bxslider">
              <li><img src="<?php echo base_url('css/images/raffles/1.jpg')?>" /></li>
              <li><img src="<?php echo base_url('css/images/raffles/2.jpg')?>" /></li>
              <li><img src="<?php echo base_url('css/images/raffles/3.jpg')?>" /></li>
            </ul>
          </div>
        </div>
    </div>
       
     <?php include "includes/js.php" ?>
    <script src="<?php echo base_url('js/page/home.js')?>"></script>
   
<!-- This will include the closing tags -->    
<?php include "includes/bottom.php" ?>