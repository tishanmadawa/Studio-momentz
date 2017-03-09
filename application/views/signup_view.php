
<!DOCTYPE html>
<html>
<head>
<title>Booking</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js""></script>


<!-- Custom Theme files -->
<!--theme-style-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script type='text/javascript' src="<?php echo base_url(); ?>js/simpleCart.min.js""></script>

<!-- start menu -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/memenu.css">

<script type='text/javascript' src="<?php echo base_url(); ?>js/memenu.js""></script>

<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body style="background-color: ;"> 
<!--header-->	
<?php include 'nav.php' ?>
<!---->
<!--pages-starts-->
	<div class="pages">
		<div style="font-family:arial;   border-radius: 5px; margin-left:5%; margin-top:10px; height:60px; width:90%; align:center; padding:10px; " >
	
	</div>
	



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup/index", $attributes);?>
			<legend>Signup</legend>
			
			<div class="form-group">
				<label for="name">First Name</label>
				<input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>			
		
			<div class="form-group">
				<label for="name">Last Name</label>
				<input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
				<span class="text-danger"><?php echo form_error('lname'); ?></span>
			</div>
		
			<div class="form-group">
				<label for="email">Email ID</label>
				<input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>

			<div class="form-group">
				<label for="name">User Name</label>
				<input class="form-control" name="uname" placeholder="User Name" type="text" value="<?php echo set_value('uname'); ?>" />
				<span class="text-danger"><?php echo form_error('uname'); ?></span>
			</div>

			<div class="form-group">
				<label for="subject">Password</label>
				<input class="form-control" name="password" placeholder="Password" type="password" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>

			<div class="form-group">
				<label for="subject">Confirm Password</label>
				<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>

			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Signup</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="<?php echo base_url(); ?>index.php/login">Login Here</a>
		</div>
	</div>
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