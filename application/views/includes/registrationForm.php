          <div class="col-sm-12">
             <div class="registration-success alert-info hidden"></div>
          </div> 
         <?php echo form_open('register/save', array('id'=>'registrationForm')); ?>
         <h3>Validation Code</h3>  
         <hr/>
         <div class="row">
         <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">Code</label>
           <div class="col-sm-9">
	      <div class="input-group">
               <input type="text" class="form-control validation-code-input" name="validation-code" placeholder="Validation Code">
               <span class="input-group-btn">
                 <button class="btn btn-default validate-button" onclick="Register.validateCode()" type="button">Validate</button>
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
         <h3>Personal Information</h3>  
         <hr/>
        
         <!--lastname--> 
        <div class="row">
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Lastname</label>
           <div class="col-sm-9">
	      <input type="text" id="lastname" name="user[lastname]" value="<?php echo set_value('borrower[lastname]')?>" class="form-control" >
           </div>
         </div>
         
         <!--firstname-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Firstname</label>
           <div class="col-sm-9">
	      <input type="text" id="firstname" name="user[firstname]" value="<?php echo set_value('borrower[lastname]')?>" class="form-control" >
           </div>
         </div>
         
         <!--middlename-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Middlename</label>
           <div class="col-sm-9">
	      <input type="text" id="middlenames" name="user[middlename]" value="<?php echo set_value('borrower[lastname]')?>" class="form-control" >
           </div>
         </div>
        </div>
         <!--birthdate-->  
        <div class="row"> 
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Birthdate</label>
           <div class="col-sm-9">
	      <input type="text" id="birthdate" name="user[birthday]" value="<?php echo set_value('borrower[lastname]')?>" class="form-control" >
           </div>
         </div>
            
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Gender</label>
           <div class="col-sm-9">
	      <select id="gender" name="user[gender]" class="form-control">
                  <option value="1">Male</option>
                  <option value="0">Female</option>
              </select>
           </div>
         </div>
            
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Civil Status</label>
           <div class="col-sm-9">
	      <select id="civil" name="user[civil]" class="form-control">
                  <option value="S">Single</option>
                  <option value="SW">Single with Dependents</option>
                  <option value="M">Married</option>
                  <option value="W">Widow</option>
              </select>
           </div>
         </div>
             
        </div>	
         
        <hr /> 
        <div class="row"> 
         <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">Tax No.</label>
           <div class="col-sm-10">
	      <input type="text" id="tax" name="user[tax]" value="<?php echo set_value('user[tax]')?>" class="form-control" >
           </div>
         </div>
            
         <div class="form-group col-sm-6">
          <label class="col-sm-2 control-label">SSS No.</label>
           <div class="col-sm-10">
	      <input type="text" id="sss" name="user[sss]" value="<?php echo set_value('user[sss]')?>" class="form-control" >
           </div>
         </div>
            
        </div>
        <h3>Contact Information</h3>
        <hr />
        
        <div class="row"> 
         <div class="form-group col-sm-12">
          <label class="col-sm-1 control-label">Address</label>
           <div class="col-sm-11">
	      <input type="text" id="address" name="user[address]" value="<?php echo set_value('user[address]')?>" class="form-control" >
           </div>
         </div>
         
        </div>
        <div class="row"> 
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Cellphone No.</label>
           <div class="col-sm-9">
	      <input type="text" id="cp" name="user[cp]" value="<?php echo set_value('user[cp]')?>" class="form-control" >
           </div>
         </div>
         
         <!--firstname-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Landline No.</label>
           <div class="col-sm-9">
	      <input type="text" id="ln" name="user[telephone]" value="<?php echo set_value('user[telephone]')?>" class="form-control" >
           </div>
         </div>
         
         <!--middlename-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Email Address</label>
           <div class="col-sm-9">
	      <input type="text" id="email" name="user[email]" value="<?php echo set_value('user[email]')?>" class="form-control" >
           </div>
         </div>
        </div>
         <h3>Login Information</h3>
        <hr />
       
        <!--middlename--> 
        <div class="row"> 
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Username</label>
           <div class="col-sm-9">
	      <input type="text" id="username" name="user[username]" value="<?php echo set_value('user[username]')?>" class="form-control" >
           </div>
         </div>
        
       
       <!--middlename-->  
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Password</label>
           <div class="col-sm-9">
	      <input type="password" id="password" name="user[password]" value="<?php echo set_value('user[password]')?>" class="form-control" >
           </div>
         </div>
       
         <div class="form-group col-sm-4">
          <label class="col-sm-3 control-label">Confirm Password</label>
           <div class="col-sm-9">
	      <input type="password" id="confirmpassword" class="form-control" >
           </div>
         </div>
        </div>
        
        <input type="hidden" id="type" name="user[type]" value="0" class="form-control" >
        <input type="hidden" id="date" name="user[date]" class="form-control" >
        <input type="hidden" class="vehicle-cd" name="vehicle-cde" class="form-control" >
        <input type="hidden" id="base-url" class="form-control" value="<?php echo base_url()?>" /> 
        
        <div class="row ">
          <div class="col-sm-12">
            <div class="col-sm-12">
            <button id="registerSave" class="btn btn-primary pull-right disabled" onclick="Register.saveUser()" type="button">Register</button>
            </div>
          </div>
        </div>
        </form>