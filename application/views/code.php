<?php
  // This will include the opening tags (HTML, HEAD) 
  include "includes/header.php";
?>
<!-- Custom CSS for the page -->
<link rel="stylesheet" href="<?php echo base_url('css/page/code.css')?>">
</head>
  <body>

    <!-- This will include the navigation -->
    <? include "includes/navigation.php" ?>

 
    <!-- CONTENT  -->
    <div class="container">
      <div id="register" class="panel panel-default">
       <div class="panel-heading">Validation Code Generator</div>
       <div class="panel-body">
           
       <div class="row">
         <div class="form-group col-sm-12">
          <label class="col-sm-3 control-label">Vehicle to Register</label>
           <div class="col-sm-9">
	      <select id="vehicle" class="form-control">
                  <option value="120,LC">Land Cruiser</option>
                  <option value="60,F">Fortuner</option
                  <option value="60,H">Hilux</option>
                  <option value="60,GL">GL Grandia</option>
                  <option value="55,C">Commuter</option>
                  <option value="50,I">Innova</option>
                  <option value="45,V">Vios</option>
                  <option value="30,T">Tricycle</option>
                  <option value="28,150CC">150cc Rusi Motorcycle</option>
                  <option value="25,125CC">125cc Rusi Motorcycle</option>
                  <option value="23,110CC">110cc Rusi Motorcycle</option>
                  <option value="21,100CC">100cc Rusi Motorcycle</option>
              </select>
           </div>
         </div>
        </div>
           
       <div class="row">
         <div class="form-group col-sm-12">
          <label class="col-sm-3 control-label">Quantity</label>
           <div class="col-sm-9">
	      <select id="quantity" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
              </select>
           </div>
         </div>
        </div>    
         
            
        
        <div class="row ">
          <div class="col-sm-12">
            <div class="col-sm-12">
            <a class="btn btn-primary pull-right" onclick="Code.generate()" role="button">Generate Code</a>
            </div>
          </div>
        </div>
        
        <table id="code-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>User Code</th>
                <th>Name</th>
                <th>Unit</th>
                <th>Entry Number</th>
                <th>Status</th>
            </tr>
        </thead>   
        <tbody>
            <?php
           // var $vehicle="Jeep";
           
            foreach($entries as $entry){
              switch($entry['unitCode']){
                  case "LC":
                    $vehicle = "Land Cruiser";
                    break;
                  case "F":
                    $vehicle = "Fortuner";
                    break;
                  case "H":
                    $vehicle = "Hilux";
                    break;
                  case "GL":
                    $vehicle = "GL Grandia";
                    break;
                  case "C":
                    $vehicle = "Commuter";
                    break;
                  case "I":
                    $vehicle = "Innova";
                    break;
                  case "V":
                    $vehicle = "Vios";
                    break;
                  case "T":
                    $vehicle = "Tricycle";
                    break;
                  case "150CC":
                    $vehicle = "150cc Rusi Motorcycle";
                    break;
                  case "125CC":
                    $vehicle = "125cc Rusi Motorcycle";
                    break;
                  case "110CC":
                    $vehicle = "110cc Rusi Motorcycle";
                    break;
                  case "100CC":
                    $vehicle = "100cc Rusi Motorcycle";
                    break;
              }
              if($entry['use']==0){
                  $status = "Available";
                  $class="success";
              }else{
                   $status="Used";
                   $class="danger"; 
              }
              echo "<tr class='$class'><td>".$entry['userCode']."</td><td>".$entry['userId']."</td><td>".$vehicle."</td><td>".$entry['entryNumber']."</td><td>".$status."</td></tr>";
            }
            ?>
        </tbody>
        </table>
       </div>
      </div>
    </div>
    
    <?php include "includes/js.php" ?>
    <script src="<?php echo base_url('js/page/code.js')?>"></script>
   
<!-- This will include the closing tags -->    
<?php include "includes/bottom.php" ?>