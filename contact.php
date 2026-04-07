<?php
  require("includes/config.php");
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>Shop Sphere|Contact Us</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <?php 
			include 'includes/header.php'; 
		?>
        
        <div class="container"><br><br><br><br>
			<div class="row">
				<div class="col-sm-10">
				  <h1>LIVE SUPPORT</h1>
				  <h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
				  <div>
					 <p class = "text-justify">At Shop Sphere, we are committed to providing you with continuous support whenever you need it. Our dedicated support team is available around the clock to assist with your orders, answer your questions, and ensure a smooth shopping experience.
						<br><br>
						Whether you need help tracking an order, choosing the right product, or resolving an issue, we're here to help—anytime, anywhere. Your satisfaction is our priority, and we strive to deliver fast, friendly, and reliable assistance at all times.
					 </p>
				  </div>
				</div>
				<div class="col-sm-2">
				 <img align="right" src="img/contact.png" alt="contact us">
				</div>
			</div><br>
    

			<div class="row">
				<div class="col-sm-8">
					<h2>CONTACT US</h2>
					
					<form action="contact_script.php" method="POST">
					<?php
                        if(isset($_GET["m"])){
                            echo $_GET['m'];
                           }
                    ?>					
						<div class="form-group">
							<input type="text" name="name" class="form-control" required="required" placeholder="Name" >
						</div>
						
						<div class="form-group">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email">
						</div>
						
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Your Message Here"></textarea>
						</div>
								
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Submit">
						</div>
					</form>
				</div>
							
				<div class="col-sm-4">
				   <h2>Contact Information:</h2>
					<p>Shop Sphere Pvt Ltd</p>
					<p>No. 123, Main Street, <br>
						Nugegoda, <br>
						Colombo 10250, <br>
						Sri Lanka</p>
					<p>USA</p>
					<p>Phone:(+94) 71 234 568</p>
					<p>Fax:(000) 11 234 5678</p>
					<p>Email: info@shopsphere.com</p>
					<p>Follow on: Facebook, Twitter</p>		
				</div>
			</div>
		</div>
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>
