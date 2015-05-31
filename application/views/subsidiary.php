<?php
  // This will include the opening tags (HTML, HEAD) 
  include "includes/header.php";
?>
<link rel="stylesheet" href="<?php //echo base_url('css/page/subsidiary.css')?>">

<!-- Custom CSS for the page -->

</head>
  <body>

    <!-- This will include the navigation -->
    <? include "includes/navigation.php" ?>

 
    <!-- CONTENT  -->
    <div class="container">
       <div class="col-md-4">
         <div class="row">
           <div class="col-sm-12 col-md-12">
             <div class="thumbnail">
               <image src="<?php echo base_url('css/images/car-dealership.png')?>">
               <div class="caption">
                 <h4>M.A. Directo Car Dealership</h4>
                 <p>...</p>
                 <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
               </div>
             </div>
           </div>
         </div>          
        </div>
        
        <div class="col-md-4">
         <div class="row">
           <div class="col-sm-12 col-md-12">
             <div class="thumbnail">
               <image src="<?php echo base_url('css/images/gallery.png')?>">
               <div class="caption">
                 <h4>M.A. Directo Luzon Car Gallery</h4>
                 <p>...</p>
                 <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
               </div>
             </div>
           </div>
         </div>          
        </div>
        
        <div class="col-md-4">
         <div class="row">
           <div class="col-sm-12 col-md-12">
             <div class="thumbnail">
               <image src="<?php echo base_url('css/images/marketing.png')?>">
               <div class="caption">
                 <h4>M.A. Directo Marketing</h4>
                 <p>Buy our Products and earn your Points to get your Car incentive</p>
                 <p><a href="<?php echo base_url().'index.php/subsidiary/marketing'?>" class="btn btn-primary" role="button">Proceed</a></p>
               </div>
             </div>
           </div>
         </div>          
        </div>
        
    </div>
       
     <?php include "includes/js.php" ?>
    <script src="<?php //echo base_url('js/page/subsidiary.js')?>"></script>
   
<!-- This will include the closing tags -->    
<?php include "includes/bottom.php" ?>