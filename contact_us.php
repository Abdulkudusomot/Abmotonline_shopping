<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="contact_us.css">
<link rel="stylesheet" href="style1.css">
	<title> Contact Us</title>
	
</head>
<body>
<?php
      include_once 'header.php';
   ?>

<div class="container">
	<form action="action_page.php">
		<label for="fname">First name</label>
		<input type="text"  id="fname"  name="lastname"  placeholder="Your last name... ">
			<label for="country"> Country </label>
			   <select id="country"  name="country">
						<option value="Nigeria"> Nigeria </option>
						<option value="Nigeria"> Canada </option>
						<option value="Nigeria"> USA </option>
						<option value="Nigeria"> India </option>
						<option value="Nigeria"> Korean </option>	
				</select>
		<label for="subject">subject</label>
			<textarea  id="subject"  name="subject"  placeholder="write something..." style="height:200px">
			</textarea>
<input type="submit"  value="submit">	

</form>			
</div>


		
</body>









<style>

	.footer{
		position: fixed;
		left:0;
		bottom:0;
		width: 100%;
		height: 25px;
		background-color:yellow;
		color: white;
		text-align: center;
		
	}
</style>
<div class="footer">
     <p>Copyright © ABMOT Online Shopping 2023</p>
</div>

 
</html>