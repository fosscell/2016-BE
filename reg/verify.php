<?php
					
		if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['phone']) and !empty($_POST['amount']) and 
		!empty($_POST['org']) and !empty($_POST['food']) and !empty($_POST['tshirt']) and !empty($_POST['tshirt_spec']) and !empty($_POST['stay']))
		{
					require("../config.php");
					
					$name = $_POST['name'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$amount = $_POST['amount'];
					$org = $_POST['org'];
					$food = $_POST['food'];
					$stay = $_POST['stay'];
					$tshirt = $_POST['tshirt'];
					$tshirt_spec = $_POST['tshirt_spec'];			
					if(strcmp($_POST['tshirt'] ,"N")==0)
						$tshirt_spec = "NA";
					
					
					$users = "SELECT * FROM final WHERE PHONE_NUMBER = '$phone'";
					$usr = mysqli_query($mysqli,$users);
					$row = mysqli_fetch_array($usr);
					if($row['ID'] == NULL)
					{
						$users = "INSERT INTO final VALUES ('DEFAULT','$phone','$email','$name','$amount','$food','$tshirt','$org','$tshirt_spec','$stay')";
						$usr = mysqli_query($mysqli,$users);																								
						echo "Confirmation complete...";
						
						$users = "SELECT * FROM final WHERE PHONE_NUMBER = '$phone'";
						$usr = mysqli_query($mysqli,$users);
						$row = mysqli_fetch_array($usr);
					}
					else
					{
						echo "Already confirmed...";
						//$id = $row['ID'];
						//$users = "UPDATE final SET FOOD_PREFS = '$food', STAY = '$stay', T_SHIRTS = '$tshirt', TSHIRT_SPEC = '$tshirt_spec' WHERE ID = '$id'";
						//$usr = mysqli_query($mysqli,$users);
					}			
		}
		else
		{
			echo "Fill all fields and try again...";
		}
?>
<html>
<head>
</head>

<body>
<div align="center">
				<img src="../img/logo.png" height="120px">
				<p style="font-size: 22px;">FOSSMeet '16 NIT,Calicut</p>			
				
				<img src="../img/sponsor.png" height="90px" width="325px">
				<img src="../img/icfoss.png" height="90px" width="220px"><br><br>			
			</div>
  			<div align="center" class="col-md-6">
					<style>
							.tablerow{
								width: 150px;
								height: 25px;
							}
					</style>
					<table>
						<tr>
							<td class="tablerow">Fossmeet ID</td>
							<td class="tablerow"><strong><?php echo $row['ID'];?></strong></td>
						</tr>
						<tr>
							<td class="tablerow">Name</td>
							<td class="tablerow"><strong><?php echo $name; ?></strong></td>
						</tr>
						<tr>
							<td class="tablerow">Email</td>
							<td class="tablerow"><strong><?php echo $email; ?></strong></td>
						</tr>
						<tr>
							<td class="tablerow">Phone Number</td>
							<td class="tablerow"><strong><?php echo $phone; ?></strong></td>
						</tr>
						<tr>
							<td class="tablerow">Amount Paid</td>
							<td class="tablerow"><strong><?php echo $amount; ?></strong></td>
						</tr>
						<tr>
							<td class="tablerow">Organisation</td>
							<td class="tablerow"><strong><?php echo $org; ?></strong></td>
						</tr>					
						<tr>
							<td class="tablerow">Food Preference</td>
							<td class="tablerow"><strong>
								<?php
									if(strcmp($food,"veg") == 0)
										echo "Vegetarian";
									else
										echo "Non vegetarian";
								?></strong>
							</td>
						</tr>
						<tr>
							<td class="tablerow">Stay</td>
							<td class="tablerow"><strong>
								<?php
									if($stay == 'Y')
										echo "Yes";
									else
										echo "No";
								?></strong>
							</td>
						</tr>
						<tr>
							<td class="tablerow">T-Shirt</td>
							<td class="tablerow"><strong>
								<?php
									if($tshirt == 'Y')
										echo "Yes";
									else
										echo "No";
								?></strong>
							</td>
						</tr>
						<tr>
							<td class="tablerow"><?php
									if($tshirt == 'Y')
										echo "T-Shirt Size";
								
								?></td>
							<td class="tablerow"><strong>
							<?php
								if($tshirt == 'Y')
								{
								if(strcmp($tshirt_spec,"S")==0)
									echo "Small";
								else if(strcmp($tshirt_spec,"M")==0)
									echo "Medium";
								else if(strcmp($tshirt_spec,"L")==0)
									echo "Large";
								else if(strcmp($tshirt_spec,"XL")==0)
									echo "eXtra Large";
								else if(strcmp($tshirt_spec,"XXL")==0)
									echo "XXL";
								else
									echo "NA";
								}
							?></strong>
							</td>
						</tr>
					</table>
			</div>
			<br><strong>REGISTRATION SUCCESSFUL.....&nbsp;&nbsp;<a href='../reg.php'>Click to Return to Home Page</a>.</strong><br><br>
	</body>
</html>