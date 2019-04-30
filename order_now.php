<?php 

include_once('common_front.php')

?>

<div class="kd-subheader">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="subheader-info">
				<h1>Order Now</h1>
				</div>
		    </div>
	    </div>
    </div>
</div>


<!--form--->


<div class="container">
	<div class="row">
		<div class="col-md-9">
		<div class="header">
			<h1>Place your order </h1>
			<form method="POST" action="insert_order.php" onsubmit = "return validate()">
			  <div class="row">
			
			     <div class="col-md-6">
				    <input type="text" value="" placeholder="Full name"  id="name" name="name" class="form-control">
					<p id="p1"></p>
				</div>
				<div class="col-md-6">
				    <input type="text" value="" placeholder="Address" id="address" name="address" class="form-control">
					<p id="p2"></p>
				</div>
				</div><!--row-->
				
				
				<div class="row">
			
			     <div class="col-md-6">
				    <input type="text" value="" placeholder="Phone number" id="phone"name="phone" class="form-control">
					<p id="p3"></p>
				</div>
				<div class="col-md-6">
				    <input type="text" value="" placeholder="email address" id="email" name="email" class="form-control">
					<p id="p4"></p>
				</div>
				</div><!--row-->
				<div class="row">
			
			     <div class="col-md-6">
				    <input type="text" value="" placeholder="Date of Journey" id="journey_date" name="date" class="form-control">
					<p id="p5"></p>
				</div>
				<div class="col-md-6">
				    <input type="text" value="" placeholder="Number of People" id="people" name="people" class="form-control">
					<p id="p6"></p>
				</div>
				</div><!--row-->
				 
				
			<button type="submit" class="btn thbg-color btn-block">Submit Order</button>
			
			</form>
		</div> <!--header-->
		</div><!--col-md-9-->
		<div class="col-md-3">
		
              <div class="widget">
                <div class="title"><h2>Contact</h2></div>
                <ul>
                    <li><i class="fa fa-map-marker"></i> Level 4, Shyamoli Square, Dhaka - 1207</li>
                    <li><i class="fa fa-phone-square"></i> 8801716441700</li>
                    <li><i class="fa fa-envelope"></i> admin@thesoftking.com</li>
                  </ul>
              </div>
           </div>  <!--col-md-3-->


            
		</div>
	</div>
</div>
<script>
 function validate() {
	 
	 var flag = true;
	 var name = $('#name').val();
	 var address = $('#address').val();
	 var phone = $('#phone').val();
	 var email = $('#email').val();
	// var journey_date = $('#journey_date').val();
	 var people = $('#people').val();
	 
	 var regexName = /^[a-zA-Z ]{2,30}$/;
	var regexNumber = /^\d+$/;
	var regexemail = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;
	
   if (name == '' || (!name.match(regexName)) )
   {
	 $('#p1').html("*For your Name please use alphabets only*");
	 flag = false;
   }
   
   
   if (address == '' )
   {
	   $('#p2').html("*Address cannot be empty*");
	   flag = false;
   }
	
	if (phone == '' || (!phone.match(regexPhone)) )
	{
		$('#p3').html("*For Your Phone number use Numbers only*");
		flag = false;
	}
	
	if (email == '' || (!email.match(regexEmail)) )
	{
		$('#p4').html("*For Your email enter correct format*");
		flag = false;
	}
	
	/*if (journey_date == '' ) 
	{
		$('#p5').html("*Journey date cannot be empty*");
		flag = false;
	} */
	
	if (people == '' || (!people(regexNumber)) )
	{
		$('#p6').html("*Please enter numbers only*");
		flag = false;
		
	}
	
	if (flag == false)
	{
		return false;
	}
	else
	{
		return true;
	}
	
 }

$(document).ready(function() {
    $("#journey_date").datepicker();
    
    $("button").click(function() {
        var departing = $("#journey_date").val();
        
       
    });
});
</script>
</body>
</html>


