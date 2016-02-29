<?php
require_once("config.php");
$valid_passwords = array ($user_id => $no_pass);
$valid_users = array_keys($valid_passwords);
$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);
if (!$validated) {
  header('WWW-Authenticate: Basic realm="admin cPanel"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

?>
<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
		<title>FOSSMeet '16</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<script>
			function showHint(str) 
				{
					document.getElementById("person_details").innerHTML = "";
					document.getElementById("check_api").value = "";
					
					if (str.length == 0) { 
						document.getElementById("txtHint").innerHTML = "";
						return;
					} else {
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
								document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
							}
						}
						xmlhttp.open("GET", "./reg/searchbar.php?q=" + str, true);
						xmlhttp.send();
					}
				}
				
			function search_person(form)
				{									
					var name = form['key'].value;
					if(form[name].value == "")
						return false;
		
					var xmlhttp = new XMLHttpRequest();
					var formdata = new FormData(form);
					xmlhttp.onreadystatechange = function() 
					{	
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
						{											
							var retval = xmlhttp.responseText;						
							document.getElementById("person_details").innerHTML = retval;
							document.getElementById("txtHint").innerHTML = "";
							document.getElementById("check_api").value = "";							
						}
					}
					xmlhttp.open("POST", "./reg/search_person.php", true);				
					xmlhttp.send(formdata);					
					return false;
				}
						
				
			function enable_disable_tshirt_spec(val)
				{		
						if(val == 1)
							document.getElementById('tspec').style.display = "block";						
						else{
							document.getElementById('tspec').style.display = "none";
							
						}
				}							
			function validate_confirm()
				{
						var formD = document.forms["id_user_verification"];		
						var food = formD["id_food"].value;
						var stay = formD["id_stay"].value;
						var tshirt = formD["id_tshirt"].value;
						var tshirt_spec = formD["id_tshirt_spec"].value;
																
						if(food=="" || stay=="" || tshirt=="")
						{
							alert("Fill in the Empty fields and try again...");
							return false;
						}
						
						if((tshirt == 'Y') && (tshirt_spec == "NA"))
						{
							alert("You have selected for T-Shirt...Please specify the size and continue.");
							return false;
						}
						
						if(tshirt == 'N')
						{
							formD["id_tshirt_spec"].value = "NA";
						}
				}			
		</script>
		
	</head>
	<body>
		
		
		<div class="row">
			<div class="col-md-6">
					<h3>Verify Online Payment with  MOJO ID(20 characters)</h3>
					<form method="POST" target="_blank" action="http://admin.fossmeet.in/ban_pay.php">
						<input type="text" name="q" id="check_api">
						<input type="Submit" value="SHOW">
					</form>
			</div>			
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-6">
				<div class="input-group">
					<form action="./reg/new_reg.php" method="get">			
						<input type="submit" value="New Registration"><b style="color: blue">&nbsp;&nbsp;&nbsp;(Registration allowed only once for each person)</b>
					</form>					
				</div>
			</div>
		</div>
		
		<div>
			<div class="row">
				<div class="col-sm-4">
					<h3>Verify Users</h3>								
				</div>
				
				<div class="col-sm-4">
					<h3>Show all verified users</h3>
					<form method="POST" target="_blank" action="./reg/show_final.php" name="listusers" id="listusers">			
						<input type="Submit" value="SHOW">
					</form>
				</div>
			</div>
			
			<!---search -->
			<div class="row">
			  <div class="col-lg-4">
				<div class="input-group">
					<form>
						<input type="text" onkeyup="showHint(this.value)" style="width: 400px;" class="form-control" placeholder="Search by name..." autofocus>
					</form>										 
				</div>
			  </div>
			</div>
		</div>
		
		<span id="txtHint"></span>
		<span id="person_details"></span>
	</body>
</html>
