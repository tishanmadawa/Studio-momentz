<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<title>Studio Momentz</title>
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>css/memenu.css"rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/memenu.js></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="header-right">
			  <h6>Follows Us:</h6>
				<ul class="f-icons">
					<li><a href="#" class="facebook"> </a></li>
					<li><a href="#" class="p"> </a></li>
					<li><a href="#" class="twitter"> </a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"> </div>
			<div class="top_left">
				<ul>
					<li class="top_link"><a href="login.html">My Account</a></li>					
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header-top">
	 <div class="header-bottom">
		 <div class="container">			
				<div class="logo">
					<a href="index.html"><img src="<?php echo base_url(); ?>qimages/wed.png"></a>
				</div>
			 <!---->
		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
					<li class="grid"><a href="#">Post Ad</a>
					</li>
					<li class="grid"><a href="#">Advanced Search</a>
					</li>
					<li class="grid"><a href="contact.html">Contact</a></li>
					<li class="grid"><a href="account.html">Sign Up</a></li>
				</ul>
				</ul>
				<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
<!---->
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>new user? <span> create an account </span></h2>
			
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
				
				<?php  echo form_open('Controller_1/add')?>
				
					<div>
						<label>
							<input name="fname" placeholder="first name:" type="text" value="fname" tabindex="1" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input name="lname" placeholder="last name:" type="text" value="lname" tabindex="2" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input name="email" placeholder="email address:" type="email" value="email" required>
						</label>
					</div>
										
						

					<div>
						<label>
							<input name="username" placeholder="Username:" type="text" value="uame" required>
						</label>
					</div>				
					<div>
						<label>
							<input name="password" placeholder="password" type="password" value="password" required>
						</label>
					</div>						
					<div>
						<label>
							<input name="cpassword" placeholder="retype password" type="password" value="cpassword" required>
						</label>
					</div>	
					<div>
						<input class="btn btn-default btn-lg" type="submit" name="submit" value="submit"  style="margin-left: 80%;" />
					</div>
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to studiomomentz &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div>
					<?php echo form_close() ?>
				
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="registration_left">
			 <h2>existing user</h2>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="" method="post">
					<div>
						<label>
							<input placeholder="username:" type="text" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="password" type="password" tabindex="4" required>
						</label>
					</div>						
					<div>
						<input type="submit" name="btn-update" value="sign in" id="register-submit">
					</div>
					<div class="forget">
						<a href="#">forgot your password</a>
					</div>
				</form>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul class="bottom">
				 	<li>Weddingstory.lk is srilankan web-portal which you may meet weddiing professionals and provide useful wedding-related information to help you in planing your big day.</li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account.html">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>					 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Contact Us</h4>
				 <p>Tel:076 - 7188550</p>
				 <p>Email:studiomomentzz@gmail.com</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
<div class="footer" style="color:black">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul class="bottom">
				 	<li>Studio momentz is srilankan web-portal which you may meet weddiing professionals and provide useful wedding-related information to help you in planing your big day.</li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Contact Us</h4>
				 <p>Tel:076 - 7188550</p>
				 <p>Email:studiomomentzz@gmail.com</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
 <div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2016 Studio Momentzz. All Rights Reserved</p>
	  </div>
</div>
</body>
</html>
