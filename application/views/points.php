<?php

  // This will include the opening tags (HTML, HEAD) 
  include "includes/header.php";
?>
<!-- Custom CSS for the page -->
<link rel="stylesheet" href="<?php echo base_url('css/page/points.css')?>">
</head>
  <body>

    <!-- This will include the navigation -->
    <? include "includes/navigation.php" ?>

 
    <!-- CONTENT  -->
    <div class="container">
      <div id="register" class="panel panel-default">
       <div class="panel-heading">View Points</div>
       <div class="panel-body">
           
        <div class="row">   
         <div class="form-group col-sm-6">
          <label class="col-sm-3 control-label">Participating Vehicle</label>
           <div class="col-sm-9">
	      <select class="vehicle-list form-control" onchange="Points.getDiagramAndPoints()">
                <?php  
                  foreach($vehicles as $vehicle){
                   echo "<option></option>";
                    switch($vehicle['unitCode']){
                            case "LC":
                            $vehicleName = "Land Cruiser";
                            break;
                            case "F":
                            $vehicleName = "Fortuner";
                            break;
                            case "H":
                            $vehicleName = "Hilux";
                            break;
                            case "GL":
                            $vehicleName = "GL Grandia";
                            break;
                            case "C":
                            $vehicleName = "Commuter";
                            break;
                            case "I":
                            $vehicleName = "Innova";
                            break;
                            case "V":
                            $vehicleName = "Vios";
                            break;
                            case "T":
                            $vehicleName = "Tricycle";
                            break;
                            case "150CC":
                            $vehicleName = "150cc Rusi Motorcycle";
                            break;
                            case "125CC":
                            $vehicleName = "125cc Rusi Motorcycle";
                            break;
                            case "110CC":
                            $vehicleName = "110cc Rusi Motorcycle";
                            break;
                            case "100CC":
                            $vehicleName = "100cc Rusi Motorcycle";
                            break;
                     }
                   echo "<option value='$vehicle[unitCode]'>$vehicleName</option>";
                  }
                  
               ?>   
              </select>
           </div>
         </div>
        </div>
        
        <div class="row col-md-12">   
          <div class="col-md-8 diagram-wrapper">
              
          </div> 
            
          <div class="col-md-4 points-wrapper">
              
              <div class="col-md-12 ep">
                  <h3>Earn Points</h3>
                  <h4>0</h4>
              </div> 
              
              <div class="col-md-12 bp">
                  <h3>Bonus Points</h3>
                  <h4>0</h4>
              </div> 
              
               <div class="col-md-12 tp">
                  <h3>Total Points</h3>
                  <h4>0</h4>
              </div> 
          </div>   
        </div>
           
       </div>
      </div>
    </div>
    <input type="hidden" id="points-user-id" value="<?php echo $user['id'] ?>">
    <?php
    include "includes/js.php";
    include "includes/messages.php";
    ?>
    <script src="<?php echo base_url('js/page/points.js')?>"></script>
   
<!-- This will include the closing tags -->    
<?php include "includes/bottom.php" ?>   