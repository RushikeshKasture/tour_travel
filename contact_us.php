<?php
include_once('common_front.php');

?>


<div class="kd-subheader">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="subheader-info">
				<h1>Contact Us</h1>
				</div>
		    </div>
	    </div>
    </div>
</div>


<!--form--->


<div class="container">
	<div class="row">
		<div class="col-md-9">
		<div class="header ct">
			<h1>Get in Touch with Us </h1>
			<form method="POST" onsubmit="validate()"action="">
			  <div class="row">
			
			     <div class="col-md-6">
				    <input type="text" value="" placeholder="Full name" id="fullname" name="name" class="form-control">
				</div>
				<div class="col-md-6">
				    <input type="text" value="" placeholder="Address" id="add" name="address" class="form-control">
				</div>
				</div><!--row-->
				
				
				<div class="row">
			
			     <div class="col-md-6">
				    <input type="text" value="" placeholder="Phone number" id="num" name="phone" class="form-control">
				</div>
				<div class="col-md-6">
				    <input type="text" value="" placeholder="email address" name="email" id="email" class="form-control">
				</div>
				</div><!--row-->
				<div class="row">
			
			     <div class="col-md-12">
				 <textarea name="message" rows="6" class="form-control" id="text" placeholder="add your comment"></textarea>
				    
				</div>
				
				</div><!--row-->
				 
				
			<button type="submit" class="btn thbg-color btn-block">Send</button>
			
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



<!--validations for contact us form --->
<script>


function validate() { 

   

	var regexName = /^[a-zA-Z ]{2,30}$/ ;

	var inputName1 = document.getElementById('fullname').value;
	
	var flag = true;

		if (inputName1 == '' || (!inputName1.match(regexName)) )
		{
			alert('Please Enter Name');
			flag = false;
		}
			
	
	var inputName2 = document.getElementById('add').value;
	
		  if (inputName2 == '')
		  {
			
			alert('Please Enter Address');
			flag = false;		
		  }
		

	  
	var regexPhone = /^\d+$/;  
	var inputName3 = document.getElementById('num').value; 
	      
		  if (inputName3 == '' || (!inputName3(regexPhone)) )
		  {
			  
			alert('Please Enter Phone');
             flag = false;			
		  }
		  
		  
		  
		 var regexemail = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ 
		
		    var inputName4 = document.getElementById('email').value;
			
				
				  if (inputName4 =='' || (!inputName4(regexemail)))
				  
			   {
			   alert('Enter Email');
			   flag = false;
			   }
			   


		  		
		    var inputName5 = document.getElementById('text').value;
			
				
				  if (inputName5 =='')
				  
			   {
			   alert('Text space cannot be empty');
			   flag = false;
			   }
		
		  
	if(flag == false){
		return false;
	}else{
		return true;
	}
}




</script>

</body>
</html>
