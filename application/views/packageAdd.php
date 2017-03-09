

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
<body style="background-color:; ";
}"> 
<!--header-->   


                
             <?php include 'nav.php' ?>



<!---->
 <div class="col-md-2">
 </div>

 <div class="col-md-2">
        <a href="<?php echo base_url(); ?>index.php/Controller/loadview">
            <div class="box" style="background: #6FCEE4; color:#fff; font-size: 1em;">
                <center><i class="fa fa-book"></i></center>
                <center>VIEW ALL</center>
            </div>
        </a>
    </div>
    
    <div class="col-md-2">
        <a href="<?php echo base_url(); ?>index.php/Controller/loadaddnew">
            <div class="box" style="background: #A2B9B4; color:#fff; font-size: 1em;">
                <center><i class="fa fa-book"></i></center>
                <center>ADD A NEW PACKAGE</center>
            </div>
        </a>
    </div>
    
    <div class="col-md-2">
        <a href="<?php echo base_url(); ?>index.php/Controller/loadsearch">
            <div class="box" style="background: #6FCEE4; color:#fff; font-size: 1em;">
                <center><i class="fa fa-book"></i></center>
                <center>SEARCH</center>
            </div>
        </a>
    </div>
    
    <br>
     <div class="col-md-2">
     </div>
    <div class="col-md-6">
        
        <div class="box">
            
            <div id="container" class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-0">
                        <br>
                        <h2 class="text-center">Enter Package Details </h2>
                        <br><br>
                            <form method="post" action="<?php echo base_url(); ?>index.php/Controller/submit_data" >
                                <label for="Package">Package Name</label>
                                <input type="text" class="form-control" name="Package" required >
                                <br>
                                <label for="Price">Price</label>
                                <input type="text" class="form-control" name="Price" required>
                                <br>
                                <label for="NoofPhotoes">No of Photos</label>
                                <input type="text" class="form-control" name="NoofPhoto" required>
                                <br>
                                <label for="NoofCameramen">No of Camera men</label>
                                <input type="text" class="form-control" name="NoofCameramen" required>
                                <br>
                                <label for="Flashes">Flashes</label>
                                <input type="text" class="form-control" name="Flashes" required>
                                <br>
                                <label for="VideoHours">Video Hours </label>
                                <input type="text" class="form-control" name="VideoHours" required>
                                <br>
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                <br><br>
                            </form>
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