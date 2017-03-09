<?php

if($this->session->userdata('user')=='admin'){


?>

<div class="top_bg" style="background-color: #5050ff;">
		
	<div class="container">
		<div class="header_top-sec">
		<div style="margin-top: -2px;position: absolute;">
				<h2 style="font-family:vivaldi;font-size:75px;color:white;"><strong>Studio Momentz</strong></h2>
		</div>
			<div class="header-right" >
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
			<p>Logged in as <?php echo $this->session->userdata('username'); ?></p>
				<ul>
					<li class="top_link"><a href="/aa/index.php/Controller_1/edit">My Account</a></li>					
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
					<a href="/aa/index.php"><img src="<?php echo base_url(); ?>/images/wed.png"></a>
				</div>			
				
			 <!---->
		 
			 <div class="top-nav" style="margin-top: -100px;float:right;">
				
			 
				<ul class="memenu skyblue"><li class="active"><a href="/aa/index.php">Home</a></li>
				<li><a href="#">Booking</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<ul>
										<li><a href="/aa/index.php/booking/view" >Add Booking</a></li>
										<li><a href="/aa/index.php/booking/eventView">Booking Details</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">Album</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<ul>
										<li><a href="/aa/index.php/album/gallery" >view Album</a></li>
										<li><a href="/aa/index.php/album">add Album</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">Packages</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<ul>
										<li><a href="/aa/index.php/Controller/loadview" >view Packages</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</li>

										<li><a href="/aa/index.php/controller_1/userView">user</a>

					
					
					</li>
					

					<li class="grid"><a href="/aa/index.php/login/out">LogOut</a></li>
				</ul>
				</ul>



								<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>

<?php
}else if($this->session->userdata('user')=='user'){


?>

<div class="top_bg" style="background-color: #5050ff;">
		
	<div class="container">
		<div class="header_top-sec">
		<div style="margin-top: -2px;position: absolute;">
				<h2 style="font-family:vivaldi;font-size:75px;color:white;"><strong>Studio Momentz</strong></h2>
		</div>
			<div class="header-right" >
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
			<p>Logged in as <?php echo $this->session->userdata('username'); ?></p>
				<ul>
					<li class="top_link"><a href="/aa/index.php/Controller_1/edit">My Account</a></li>					
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
					<a href="/aa/index.php"><img src="<?php echo base_url(); ?>/images/wed.png"></a>
				</div>			
				
			 <!---->
		 
			 <div class="top-nav" style="margin-top: -100px;float:right;">
				
			 
				<ul class="memenu skyblue"><li class="active"><a href="/aa/index.php">Home</a></li>
				<li><a href="/aa/index.php/booking/view">Booking</a>
						
					</li>
					<li><a href="/aa/index.php/album/gallery">Album</a>
						
					</li>
					<li><a href="/aa/index.php/ContrOller">Packages</a>
						
					</li>


					
					</li>
					

					<li class="grid"><a href="/aa/index.php/login/out">LogOut</a></li>
				</ul>
				</ul>



								<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>

<?php
}else{

?>



<div class="top_bg" style="background-color: #5050ff;">
		
	<div class="container">
		<div class="header_top-sec">
		<div style="margin-top: -2px;position: absolute;">
				<h2 style="font-family:vivaldi;font-size:75px;color:white;"><strong>Studio Momentz</strong></h2>
		</div>
			<div class="header-right" >
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
					<li class="top_link"><a href="/aa/index.php/login">My Account</a></li>					
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
					<a href="/aa/index.php"><img src="<?php echo base_url(); ?>/images/wed.png"></a>
				</div>			
				
			 <!---->
		 
			 <div class="top-nav" style="margin-top: -100px;float:right;">
				
			 
				<ul class="memenu skyblue"><li class="active"><a href="/aa/index.php">Home</a></li>
					<li><a href="/aa/index.php/album/gallery">Album</a>
						
					</li>
					<li><a href="/aa/index.php/ContrOller">Packages</a>
						
					</li>


					
					
					</li>

					<li class="grid"><a href="/aa/index.php/signup">Sign Up</a></li>
				</ul>
				</ul>



								<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>

<?php

}
?>