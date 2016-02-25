

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<meta name="description" content="FOSSMeet is the annual event on Free and Open source software, conducted at National Institute of Technology, Calicut.">
	<meta name="keywords" content="nitc,fossmeet,fsf,gnu,icfoss,concur,NITC,CSEA,FOSSCell">
	<meta name="author" content="Creative Team, FOSSCell NIT Calicut">
	  	
	<link rel="stylesheet" href="css/payment.css">	
	<title>FOSSMeet '16</title>

    
			<script>
				function verifyForm()
					{
						var formD = document.forms["payment_form"];		
						var name = formD["billing_address_first_name"].value;
						var email = formD["customer_email"].value;
						var phoneno = formD["customer_phone"].value;
						var orgname = formD["Field_72942"].value;
						var tshirt = formD["tshirt"].value;
						var tshirt_spec = formD["id_TSHIRT_SPEC"].value;
																
						if(name == null || name == "" || email == null || email == "" || phoneno == null || phoneno == "" || orgname == null || orgname == ""){
							alert("empty fields");
							return false;
						}
						
						if((tshirt == 'Y') && (tshirt_spec == "NA"))
						{
							alert("You have selected for T-Shirt...Please specify the size and continue.");
							return false;
						}
						
						if((tshirt == 'N') && (tshirt_spec != "NA"))
						{
							alert("You have NOT selected for T-Shirt...Please select the size to NA");
							return false;
						}
						
					}
			</script>
</head>
<body>

<p><a href="../reg.php">Click here to go to Home Page</a></p>
<h3 style="text-align:center;">New Registration</h3>
	<form method="POST" action="slip_new_reg.php" id="payment_form" onsubmit="return verifyForm()" name="payment_form">
		
		<ul class="form-fields">			
			<div class="row">
				<li class=" columns small-6 clear">
				  <label for="id_billing_address_first_name">Name:</label>
					<input class="text-input parsley-validated" id="billing_address_first_name" maxlength="20" name="billing_address_first_name" maxlength="20" placeholder="Enter your full name." type="text" required>
				</li>				
			</div>


			<div class="row">
				<li class=" columns small-6 clear ">
				  <label for="id_customer_email">Email Address:</label>
				  <input class="text-input parsley-validated" id="customer_email" maxlength="75" name="customer_email" parsley-required="true" parsley-required-message="Please fill in your email address." parsley-type="email" parsley-type-email-message="Please enter a valid email" placeholder="So we can send you the purchase details." type="email" required>
				</li>				
			</div>
	
	
			<div class="row">
				<li class=" columns small-6 clear  ">
					<label for="id_customer_phone">Phone Number:</label>
						<input class="text-input parsley-validated" id="customer_phone" maxlength="20" name="customer_phone" parsley-maxlength="20"  parsley-required="true" parsley-required-message="Please fill in your phone number." parsley-type="phone" parsley-type-phone-message="Please enter a valid phone number" placeholder="Your phone number" type="tel" required>
				</li>				
			</div>

			<div class="row">
				<li class="columns small-6 clear">
				<div class="text-hint" id="amt_hint">Which type of ticket do you want to buy?</div>
				</li>
				<li class=" columns small-6 clear  ">
				  <label for="id_total_amount">Enter Amount:</label>
				  <select name="total_amount" id="id_total_amount" parsley-type="number" class="parsley-validated" >
					<option value="200">Students of National Institute of Technology, Calicut -- ₹200 </option>
					<option value="500">Students of other Institutes -- ₹500</option>
					<option value="1000" selected>Professionals -- ₹1000</option>
				  </select>
				</li>
			</div>


			<div class="row">
				<li class=" columns small-6 clear  ">
					<label for="id_Field_72942">Institution Name:</label>
						<input id="Field_72942" maxlength="255" name="institution" parsley-required="true" placeholder="" type="text" class="parsley-validated" required>
				</li>				
			</div>

			<div class="row">
				<li class=" columns small-6 clear  ">
				  <label for="id_Field_52247">Food Preference:</label>
					<select name="food" id="id_Field_52247" parsley-required="true" class="parsley-validated" >
						<option value="veg">Vegetarian</option>
						<option value="non_veg">Non Vegetarian</option>
				  </select>
				</li>				
			</div>
			
			<div class="row">
				<li class="columns small-6 clear">
					<div class="text-hint" id="stay_hint">Do you want to avail hospitality?</div>
				</li>
				<li class=" columns small-6 clear  ">
				  <label for="">Stay<i><small></small></i>:</label>
					<select name="stay" id="stay" parsley-required="true" class="parsley-validated" >
							<option value="N">No</option><option value="Y">Yes</option>
					</select>
				</li>
			</div>

			
			<div class="row">
				<li class="columns small-6 clear">
					<div class="text-hint" id="tshirt_hint">Do you want the FOSSMeet '16 official T-Shirts?</div>
				</li>
				<li class=" columns small-6 clear  ">
				  <label for="id_Field_65157">FOSSMeet '16 T-Shirts <i><small>The registration amount does not include the T-Shirt cost.</small></i>:</label>
					<select name="tshirt" id="id_tshirt" parsley-required="true" class="parsley-validated" >
							<option value="N" >No</option><option value="Y">Yes</option>
					</select>
				</li>
			</div>
		
	
			<div class="row" id="optField">
				<li class="columns small-6 clear">
					<div class="text-hint" id="tshirt_spec_hint">The size you require for your FOSSMeet '16 official T-Shirts.</div>
				</li>
				<li class=" columns small-6 clear  ">
				  <label for="TSHIRT_SPEC">Your T-Shirt size: </label>
					<select name="TSHIRT_SPEC" id="id_TSHIRT_SPEC" parsley-required="true" class="parsley-validated">
						<option value="NA">Not Applicable</option>
						<option value="S">Small</option>
						<option value="M">Medium</option>
						<option value="L">Large</option>
						<option value="XL">eXtra Large</option>
						<option value="XXL">XXL</option>
					</select>
				</li>
			</div>

			<li class="columns small-6 clear"><input value="Register" type="submit" class="btn--green btn--full" name="fm16_pay_btn">	
			</li>

		</ul>

	</form>



</body>
</html>