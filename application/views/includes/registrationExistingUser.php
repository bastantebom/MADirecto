<div class="col-sm-12">
    <div class="registration-success alert-info hidden"></div>
</div> 
<h3>Validation Code</h3>   
<div class="row">
         <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">Code</label>
           <div class="col-sm-10">
	      <div class="input-group">
               <input type="text" class="form-control validation-code-input-existing" name="validation-code" placeholder="Validation Code">
               <span class="input-group-btn">
                 <button class="btn btn-default validate-button" onclick="Register.validateCodeExisting()" type="button">Validate</button>
               </span>
              </div><!-- /input-group -->
           </div>
         </div>
         <div class="form-group col-sm-6">
             <div class="col-sm-12">
             <div class="entry-vehicle alert-info hidden"></div>
             </div>
         </div>
</div>

<div class="row">
        <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">Name</label>
           <div class="col-sm-10">
	      <input type="text" id="nameExisting" value="<?php if(isset($user)){ echo $user['firstname']. " " .$user['lastname']; } ?>" class="form-control" >
           </div>
         </div>
</div>

<input type="hidden" class="existing-id" name="idExistingE"  value="<?php if(isset($user)){ echo $user['id'];} ?>" class="form-control" >
<input type="hidden" class="existing-vehicle-code" name="vehiclecdE" class="form-control" >

<div class="row ">
          <div class="col-sm-12">
            <div class="col-sm-12">
            <button id="registerExisting" class="btn btn-primary pull-right disabled" onclick="Register.saveForExisting()" type="button">Register</button>
            </div>
          </div>
</div>

