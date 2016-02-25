<?php

			require_once("../config.php");
			
			$id = $_POST['key'];
			
			$users = "SELECT * FROM instamojo_responses WHERE ID = '$id'";
			$usr = mysqli_query($mysqli,$users);			
			$row = mysqli_fetch_array($usr);
			
?>

			<div align="left" class="col-sm-offset-4 col-sm-4">		
				<form name="register" id="id_user_verification" action="./reg/verify.php" method="post" onsubmit="return validate_confirm();">												
						<style>
							.tablerow{
								width: 150px;
								height: 25px;
							}
						</style>
						<table>
							<tr>
								<td class="tablerow"><strong>ID</strong></td>
								<td class="tablerow"><span><?php if(isset($_POST['key']))echo $row['ID']; ?></span></td>
							</tr>
							<tr>
								<td class="tablerow"><strong>Full Name</strong></td>
								<td class="tablerow"><span><?php if(isset($_POST['key']))echo $row['BUYER_NAME']; ?>
									<input type="hidden" id="id_name" name="name" value="<?php if(isset($_POST['key']))echo $row['BUYER_NAME']; ?>">
								</span></td>
							</tr>
							<tr>
								<td class="tablerow"><strong>Email</strong></td>
								<td class="tablerow"><span><?php if(isset($_POST['key']))echo $row['E_MAIL']; ?>
									<input type="hidden" id="id_email" name="email" value="<?php if(isset($_POST['key']))echo $row['E_MAIL']; ?>">
								</span></td>
							</tr>
							<tr>
								<td class="tablerow"><strong>Mobile</strong></td>
								<td class="tablerow"><span><?php if(isset($_POST['key']))echo $row['PHONE_NUMBER']; ?>
									<input type="hidden" id="id_phone" name="phone" value="<?php if(isset($_POST['key']))echo $row['PHONE_NUMBER']; ?>">
								</span></td>
							</tr>
							<tr>
								<td class="tablerow"><strong>Amount Paid</strong></td>
								<td class="tablerow"><span><?php if(isset($_POST['key']))echo $row['AMOUNT_PAID']; ?>
									<input type="hidden" id="id_amount" name="amount" value="<?php if(isset($_POST['key']))echo $row['AMOUNT_PAID']; ?>">
								</span></td>
							</tr>
							<tr>
								<td class="tablerow"><strong>Organisation</strong></td>
								<td class="tablerow"><span><?php if(isset($_POST['key']))echo $row['ORG_NAME']; ?>
									<input type="hidden" id="id_org" name="org" value="<?php if(isset($_POST['key']))echo $row['ORG_NAME']; ?>">
								</span></td>
							</tr>					
						</table>												
						<br>
											
						<label for="fstay">FOOD PREFERENCE&nbsp;&nbsp;</label>						
							<input type="radio" id="id_food" name="food" value="veg" <?php 	if(isset($_POST['key']))
											{	if(strcmp($row['FOOD_PREFS'],"veg") == 0)
												 echo "checked";
											}
											?>>&nbsp; Veg 
							<input type="radio" id="id_food" name="food" value="non_veg"<?php 	if(isset($_POST['key']))
											{	if(strcmp($row['FOOD_PREFS'],"non_veg") == 0)
												 echo "checked";
											}
											?>>&nbsp; Non-veg<br>
							<br>
						<label for="fstay">Do you wish to avail stay?&nbsp;&nbsp;</label>						
							<input type="radio" id="id_stay" name="stay" value="Y">Yes&nbsp;&nbsp;
							<input type="radio" id="id_stay" name="stay" value="N" checked >No<br>
							<br>
						
						
                        <label for="fstay">T-Shirts&nbsp;&nbsp;</label>						
							<input type="radio" id="id_tshirt" name="tshirt" value="Y" onclick="return enable_disable_tshirt_spec(1);" <?php 	if(isset($_POST['key']))
											{	if($row['T_SHIRTS'] != 'N')
												 echo "checked";
											}
											?>>Yes&nbsp;&nbsp;
							<input type="radio" id="id_tshirt" name="tshirt" value="N" onclick="return enable_disable_tshirt_spec(0);" <?php 	if(isset($_POST['key']))
											{	if($row['T_SHIRTS'] == 'N')
												 echo "checked";
											}
											?>>No
							<br><br>
						
						<div id="tspec" style="display:<?php 	if(isset($_POST['key']))
											{	if($row['T_SHIRTS'] == 'N')
												 echo "none";
											}
											?>;">						
							<label for="fevents"><strong>T-Shirt Specification</strong><span></span>
								<br>
								<input id="id_tshirt_spec" name="tshirt_spec" type="radio" value="S" <?php 	if(isset($_POST['key']))
												{	if(strcmp($row['TSHIRT_SPEC'],"S") == 0)
													 echo "checked";
												}
												?>>&nbsp;Small<br>
								<input id="id_tshirt_spec" name="tshirt_spec" type="radio" value="M" <?php 	if(isset($_POST['key']))
												{	if(strcmp($row['TSHIRT_SPEC'],"M") == 0)
													 echo "checked";
												}
												?>>&nbsp;Medium<br>
								<input id="id_tshirt_spec" name="tshirt_spec" type="radio" value="L" <?php 		if(isset($_POST['key']))
												{	if(strcmp($row['TSHIRT_SPEC'],"L") == 0)
													 echo "checked";
												}
												?>>&nbsp;Large<br>
								<input id="id_tshirt_spec" name="tshirt_spec" type="radio" value="XL" <?php 	if(isset($_POST['key']))
												{	if(strcmp($row['TSHIRT_SPEC'],"XL") == 0)
													 echo "checked";
												}
												?>>&nbsp;Extra Large<br>
								<input id="id_tshirt_spec" name="tshirt_spec" type="radio" value="XXL" <?php 	if(isset($_POST['key']))
												{	if(strcmp($row['TSHIRT_SPEC'],"XXL") == 0)
													 echo "checked";
												}
												?>>&nbsp;XXL<br>
								<input id="id_tshirt_spec" name="tshirt_spec" type="radio" value="NA" <?php 	if(isset($_POST['key']))
											{	if($row['T_SHIRTS'] == 'N')
												 echo "checked";
											}
											?>>&nbsp;NA<br>
							</label> <br><br>
						</div>
							<strong><input type="submit" style="color: blue;" value="CONFIRM">&nbsp;&nbsp;<b style="color: blue"></b></strong>
						<br> 
						
					
				</form>
				</div>