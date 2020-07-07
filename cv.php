<html>
		<?php include_once'layout/head.php'?>
		<title>Submit CV</title>
		<style>
		<?php include_once'assets/css/cv.css';?>
		
		</style>
	
		
	
	<body>
	<?php include_once'layout/header.php'?>
		<div class="title">
<h1>Submit Your CV</h1>
<hr>
</div>
		
		<div class="container">
		<div class="row">
				
				<p>Only a select few mandates being handled by us are posted on our website and other online platforms. A vast majority of jobs aren’t in the public domain. Be a part of our searchable centralized database by sending us your details.</p>
				
				<div class="col-sm-8">
				 <h2>(*) Mandatory fields</h2>
					<div class="form">
					
					  <form action="/action_page.php">
						<div class="form-group">
						  <label for="name">Name:</label>
						  <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
						</div>
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="Email" class="form-control" id="email" placeholder="Enter Email" name="email">
						</div>
						<div class="form-group">
						  <label for="mobile">Mobile No:</label>
						  <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile">
						</div>
						<div class="form-group">
						  <label for="description">Company:</label>
						  <input type="message" class="form-control" id="Company Name:" placeholder="Enter Company Name:" name="Company Name:">
						</div>
						<div class="form-group">
						  <label for="mobile">Designation:</label>
						  <input type="mobile" class="form-control" id="Designation" placeholder="Enter Designation Name" name="mobile">
						</div>
						<div class="form-group">
						  <label for="mobile">Experience:</label>
						  <input type="mobile" class="form-control" id="Designation" placeholder="(In Years):" name="mobile">
						</div>
						<div class="form-group">
						  <label for="mobile">Current/Last Annual Salary:</label>
						  <input type="mobile" class="form-control" id="Designation" placeholder="INR*" name="mobile">
						</div>
							<input type="file" name="fileupload" value="fileupload" id="fileupload"> 

						<input type="submit" name="contact_submit" value="Submit" class="btn-banner">
					

					  </form>
				</div>
				</div>
			</div>
		</div>
		<?php include_once'layout/footer.php'?>
	</body>
</html>