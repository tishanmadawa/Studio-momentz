
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
	  
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Edit User Details</h2>
			
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
				
				<?php 
				if ($result):
					foreach ($result as $rec ): 
				 	echo form_open('Controller_1/update');?>
					<input type="hidden" name="id" value="<?php echo $rec->id ;?>">
					<div>
						<label>
							<input name="fname" placeholder="first name:" type="text" value="<?php echo $rec->fname ;?>" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input name="lname" placeholder="last name:" type="text" value="<?php echo $rec->lname ;?>" tabindex="2" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input name="email" placeholder="email address:" type="email" value="<?php echo $rec->email ;?>" required>
						</label>
					</div>
										
						

					<div>
						<label>
							<input name="uname" placeholder="Username:" type="text" value="<?php echo $rec->uname ;?>" required>
						</label>
					</div>				
					<div>
						<label>
							<input name="password" placeholder="password" type="password" value="<?php echo $rec->password ;?>" required>
						</label>
					</div>						
					<div>
						<label>
							<input name="cpassword" placeholder="retype password" type="password" value="<?php echo $rec->cpassword ;?>" required>
						</label>
					</div>	
					<div>
						<input class="btn btn-default btn-lg" type="submit" name="submit" value="update"  style="margin-left: 80%;" />
					</div>
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to studiomomentz &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div>
					<?php echo form_close() ?>			
					<?php endforeach; ?>
				<?php endif; ?>
				<!-- /Form -->
			 </div>
		 </div>
		 
		 <div class="clearfix"></div>
	 </div>
</div>





</div>

</div>
<br><br>
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