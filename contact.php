<html>
		<?php include_once'layout/head.php'?>
		<title>Contact Us</title>
		<style>
		<?php include_once'assets/css/contact.css';?>
		
		</style>
	
		
	
	<body>
	<?php include_once'layout/header.php'?>
		<div class="title">
<h1>Contact Us</h1>
<hr>
</div>
		<div class="contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="con-left">
							<h2>Our Network</h2>
							<hr>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="con-right">
							<h2>Questions, Comments, or Feedback?</h2>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
				<div class="col-sm-4">
					<div class="office">
						<h2>Corporate Office</h2>
						<h1>Delhi</h1>
						<hr>
						<p>1st Floor, Eros Corporate Tower
							Nehru Place
							New Delhi 110 019</p>
							<a href="https://www.google.com/maps/d/embed?mid=1WVr_jY_IVWl2GOCmHQi2aHaBQWxohDDT">Get Direction</a><br><br>
							<p>Tel: +1234567893</p>
							<p>Email: info@fastest.com</p>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="location">
						<h2>Locate other offices</h2>
						<select>
						  <option value="volvo">Gurgaon</option>
						  <option value="saab">Delhi</option>
						  <option value="opel">Jaipur</option>
						  <option value="audi">Uttrakhand</option>
						</select>
						<p>Popular Press Building
							(Opp. Brand Factory)
							35 C, Pandit M.M. Malvia Road
							Tardeo, Mumbai 400 034</p>
							<a href="https://www.google.com/maps/d/embed?mid=1WVr_jY_IVWl2GOCmHQi2aHaBQWxohDDT">Get Direction</a><br><br>
							<p>Tel: +1234567893</p>
							<p>Email: info@fastest.com</p>
						</div>
					</div>
				<div class="col-sm-4">
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
						  <label for="description">Message:</label>
						  <input type="message" class="form-control" id="message" placeholder="Enter Message" name="message">
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" name="remember"> Remember me</label>
						</div>
						<input type="submit" name="contact_submit" value="Submit" class="btn-banner">
					  </form>
				</div>
				</div>
			</div>
		</div>
		<div class="map">
		<iframe src="https://www.google.com/maps/d/embed?mid=1WVr_jY_IVWl2GOCmHQi2aHaBQWxohDDT" width="100%" height="480"></iframe>
		</div>
	</body>
</html>