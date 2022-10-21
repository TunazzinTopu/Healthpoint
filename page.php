<?php
session_start();

include 'dbConnect.php';


mysqli_close($link);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>HomePage</title>
		
		
		
		<link rel ="stylesheet" type="text/css" href="css/style.css"/>
      
        	
        <link type ="text/css" rel="stylesheet" href="css/mystylesheet.css"/>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		rel="stylesheet">
		
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		rel="stylesheet">
		
        
    </head>
    <body>
	
	  <?php

  include 'header.php';

  ?>
  
	<div class="body"
	    <div class ="container">
		     <div class="services">
			 <h1>Our Services</h1>
			 </div>
			 <div class="row">
			     <div class="col-md-3 text-center">
				    
					<div class="icon">
					
					<i class="fa fa-ambulance"></i>
					</div>
					<h3> Ambulance </h3>
					<h6>Service Details!</h6>
					<p>
					-Qualified background checked medics <br>
				    -Standard Ambulance with the proper equipment <br>
                    -Stretchers are available for carrying patience <br>
                    -Payment: After service completion respective customers will pay through online or COD. After payment please make sure, you have received the SMS containing the money receipt.
Pricing may vary depending on the distance of travel
Waiting for charge will be approximately BDT 700/Hour</p>
					
				    </div>	
					
					
					<div class="col-md-3 text-center">
				    
					<div class="icon">
					
					<i class="fa fa-medkit"></i>
					</div>
					<h3> Medkit </h3>
					<h6> Medicine Service!</h6>
					<p>High quality customer service, speed and ease of purchase - you can recognize us from these qualitites. For us the customer is always number one. We welcome all kinds of customers - from large organizations to individuals.</p>
					
					</div>
					
					<div class="col-md-3 text-center">
				    
					<div class="icon">
					
					<i class="fa fa-heartbeat"></i>
					</div>
					<h3> Free checkup </h3>
					<h6>BOOK YOU FREE CHECKUP NOW!</h6>
					<p>
					:Height / weight check <br>
					:Blood pressure check <br>
					:Cholesterol level check <br>
					:Blood sugar test <br>
					:Throat check <br>
					:Electrocardiogram <br> 
					:Chest x-ray <br>
					CALL US AT 01521325408 FOR MORE INFO</p>
					</div>
					
				
					
					
		
			 
			 
			 	
					<div class="col-md-3 text-center">
				    
					<div class="icon">
					
					<i class="fa fa-hospital-o"></i>
					</div>
					<h3> 24/7 </h3>
					<h6>Day and night Hospital!</h6>
					<p>First time in Bangladesh and 24hours 7days in a week, We are introducing a convenient and simple emergency medical service platform. It is a location-based service that makes hiring an on-demand ambulance easy from mobile or desktop. With the tap of a button on smartphone device, hire an ambulance during emergency to pick up your critically ill patient and take him or her to the desired hospitals or clinics.
We help saving lives. We are aiming to transform the health space by bringing transparency in the ecosystem and ensuring faster ambulance response time. </p>
					</div>
				</div>	
			 
		</div>
		</div>
		</div>
		
		  <section>
    <?php

    include 'footer.php';

    ?>


  </section>
      
    </body>
</html>