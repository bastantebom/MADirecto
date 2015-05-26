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
                                            <h2 class="left">Borrowers</h2>
					</div>
					<!-- End Box Head -->	
                                        <table id="borrower_list">
                                            <thead>
                                                <tr>
                                                    <td>Lastname</td><td>Firstname</td><td>Mobile Number</td>
                                                    <td>Employer</td><td>Address</td><td>View</td><td>Delete</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                                foreach($list_of_borrower as $borrower){
                                                    echo "<tr>
                                                        <td style='width:70px;'>".$borrower['lastname']."</td><td style='width:70px;'>".$borrower['firstname']."</td><td style='width:90px;'>"
                                                            .$borrower['mobile']."</td><td style='width:140px;'>".$borrower['employer']."</td>"
                                                            ."<td style='width:290px;'>".$borrower['address']."</td>
                                                            <td style='width:20px;'><span class='ui-icon ui-icon-document' data-reveal-id='userDetail' onclick='getBorrower($borrower[borrowerid])'></span></td><td style='width:20px;'> 
                                                            <span class='ui-icon ui-icon-circle-close' onclick='deleteBorrower($borrower[borrowerid])'></span>
                                                            </td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>    
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
                                            <a href="<?php echo base_url('index.php/Borrowers/add')?>" class="add-button"><span>Add new Borrower</span></a>
                                            <input type="hidden" id="baseURL" value="<?php echo base_url()?>" />
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

<!-- POP UP-->
<div id="userDetail" class="reveal-modal">
   <h2>Borrower Details</h2>
   <hr />
   <table>
       <tr>
           <td class="rightDetails">Fullname : </td> <td><input type="text" readonly="readonly" class="name"/></td>
           <td class="leftDetails">Mobile Number : </td> <td><input type="text" readonly="readonly" class="mobile"/></td>
       <tr>
       <tr>
           <td class="rightDetails" colspan="4">Address </td>
       </tr>
       <tr>
           <td class="leftDetails" colspan="4"><textarea readonly="readonly"  class="address"></textarea></td>
       </tr>
       <tr>
           <td class="rightDetails">SSS Number : </td> <td><input type="text" readonly="readonly" class="sss"/></td>
           <td class="leftDetails">Tax Identification Number : </td> <td><input type="text" readonly="readonly" class="tin"/></td>
       <tr>
       <tr>
           <td class="rightDetails">Employed : </td> <td><input type="text" readonly="readonly" class="employed"/></td>
           <td class="leftDetails">Employer : </td> <td><input type="text" readonly="readonly" class="employer"/></td>
       <tr>
       <tr>
           <td class="rightDetails">Occupation : </td> <td><input type="text" readonly="readonly" class="occupation"/></td>
           <td class="leftDetails">Employer Number : </td> <td><input type="text" readonly="readonly" class="employernum"/></td>
       <tr>
        <tr>
           <td class="rightDetails" colspan="4">Employer Address </td>
       </tr>
       <tr>
           <td class="leftDetails" colspan="4"><textarea readonly="readonly"  class="employeradd"></textarea></td>
       </tr>
   </table>
<a class="close-reveal-modals">&#215;</a>
</div>

<!--END of POP UP-->

<?php include "page_part/footer.php"; ?>