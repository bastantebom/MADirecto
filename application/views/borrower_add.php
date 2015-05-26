<?php include "page_part/header.php"; ?>
<div id="header">
	<div class="shell">
            <img style="width:85px; height: 80px; float: left;"/>
		<!-- Logo + Top Nav -->
		<div id="top">
                    
			<h1><?php echo $company_name ?></h1>
                        
			<?php include "page_part/top_info.php" ?>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<?php include "page_part/admin_menu.php" ?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<?php include "page_part/small_nav.php"; ?>
                <input type="hidden" id="base_url" value="<?php echo base_url()?>" />
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
                                            <h2 class="left">Borrower Information</h2>
					</div>
					<!-- End Box Head -->
                                        <?php if(isset($message)){echo $message;} ?>
                                        <div class="form">
                                             <?php echo form_open('Borrowers/save'); ?>
                                            <h2><b>Personal Details</b></h2><br />
                                            
                                                <p class="inline-field">
                                                        <span class="req"></span>
                                                        <label>Name <span>(Lastname, Firstname, Middlename)<?php echo form_error('borrower[lastname]'); echo form_error('borrower[firstname]'); ?></span></label>
                                                        <input type="text" name="borrower[lastname]"  value="<?php echo set_value('borrower[lastname]')?>" class="field size4" />                                            
                                                        <input type="text" name="borrower[firstname]" value="<?php echo set_value('borrower[firstname]')?>" class="field size4" />
                                                        <input type="text"  name="borrower[middlename]" value="<?php echo set_value('borrower[middlename]')?>" class="field size4" />
                                                </p>
                                                        <span class="req"></span>
                                                        <label>Address <span><?php echo form_error('borrower[address]'); ?></span></label>
                                                        <textarea class="field size1" name="borrower[address]" rows="10" cols="20"><?php echo set_value('borrower[address]')?></textarea>
                                                </p>	
                                                 <p class="inline-field">
                                                        
                                                        <label><span>(SSS Number, TIN)<?php echo form_error('borrower[sss]'); echo form_error('borrower[tin]');?></span></label>
                                                        <input type="text" name="borrower[sss]" value="<?php echo set_value('borrower[sss]')?>" class="field size5" />
                                                        <input type="text" name="borrower[tin]" value="<?php echo set_value('borrower[tin]')?>" class="field size5" />
                                                </p>	
                                                <p class="inline-field">
                                                        <label><span>(Mobile Number, Telephone Number)<?php echo form_error('borrower[mobile]'); ?></span></label>
                                                        <input type="text"  name="borrower[mobile]" value="<?php echo set_value('borrower[mobile]')?>" class="field size5" />
                                                        <input type="text"  name="borrower[telephone]" value="<?php echo set_value('borrower[telephone]')?>" class="field size5" />
                                                </p>	
                                                <h2><b>Employment Details</b></h2>
                                                <hr /><br />
                                                
                                                <p>
                                                        <label>Employed</label>
                                                        <span class="req"><?php echo form_error('borrower[employed]'); ?></span>
                                                        <select name="borrower[employed]" class="field size3">
                                                                <option value="1">Yes</option>
                                                                <option value="2">No</option>
                                                                <option value="3">Self-Employed</option>
                                                        </select>
                                                </p>	
                                                <p>
                            
                                                        <label>Occupation <span></span></label>
                                                        <input type="text" name="borrower[occupation]" value="<?php echo set_value('borrower[occupation]')?>" class="field size1" />
                                                </p>	
                                                <p>

                                                        <label>Salary <span></span></label>
                                                        <input type="text"  name="borrower[salary]" value="<?php echo set_value('borrower[salary]')?>" class="field size5" />
                                                </p>	
                                                
                                                 <p>
                                                        <label>Employer <span><?php echo form_error('borrower[employer]'); ?></span></label>
                                                        <input type="text" name="borrower[employer]" value="<?php echo set_value('borrower[employer]')?>" class="field size1" />
                                                </p>
                                                <p>
                                                        <label>Employer Address <span><?php echo form_error('borrower[employeradd]'); ?></span></label>
                                                        <textarea class="field size1" name="borrower[employeradd]"  rows="5" cols="20"><?php echo set_value('borrower[employeradd]')?></textarea>
                                                </p>	
                                                <p>
                                                        <label>Employee Phone Number <span><?php echo form_error('borrower[employerphone]'); ?></span></label>
                                                        <input type="text" name="borrower[employerphone]" value="<?php echo set_value('borrower[employerphone]')?>" class="field size5" />
                                                </p>	
                                                <div class="buttons">
							<input type="submit" id="saveborrower" class="button" value="submit" />
						</div>
                                              <?php echo form_close(); ?>   
					</div>
					<!-- Table -->
					<span class="messageListener"></span>
				</div>
				<!-- End Box -->
				<!-- Box -->
			</div>
			<!-- End Content -->
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Profile</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content" style="font-weight: bold;height: 20px; ">
                                           
                                    
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<?php include "page_part/footer.php"; ?>