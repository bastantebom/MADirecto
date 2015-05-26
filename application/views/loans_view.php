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
                                            <h2 class="left">Loans</h2>
					</div>
					<!-- End Box Head -->	
                                        <?php
                                       
                                        ?>
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
					
					<div class="box-content" style="font-weight: bold; ">
						<label>Login As:</label> <u><span style="color: #8c3521;"><?php //echo  $_SESSION['name']; ?></span></u><br />
                                                <label>User Type:</label> <u><span style="color: #8c3521;"><?php //echo  $_SESSION['utype']; ?></span></u>
                                                
						<!-- End Sort -->
						
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