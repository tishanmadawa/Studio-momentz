

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

    <div class="container-fluid" style="  border-radius: 5px; margin-left:5%; margin-top:10px; height:60px; width:90%; align:center; padding:10px; " >
    </div>


  <div class="col-md-3">
        
    </div>

   <div class="col-md-12">
        
        <div class="box">
            
            <table class="table table-bordered table-inverse" style="background-color: #A2B9B4;">
                <tr><th> Package</th><th> Price </th><th> No of Photoes </th><th> No of Camera men </th><th> Flashes </th><th> Video Hours</th></tr>
                
                <?php foreach($table as $row){?>
                
                        <tr>
                            <td><?php echo $row['Package'];?></td>
                            <td><?php echo $row['Price'];?></td>
                            <td><?php echo $row['NoofPhotoes'];?></td>
                            <td><?php echo $row['NoofCameramen'];?></td>
                            <td><?php echo $row['Flashes'];?></td>
                            <td><?php echo $row['VideoHours'];?></td>
                          
                            <!--<td><a href="<?php echo base_url();?>index.php/Controller/loadedit/$row['id']" style="color:#fff"> Edit  </a></td>-->
                           
                        </tr>
                <?php }?>

                
                    
                
            </table>
            
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