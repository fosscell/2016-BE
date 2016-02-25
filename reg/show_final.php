
<html>
	<head>
	</head>
	<body>
	<style>
		.table-col-17910{
			width: 80px;
			height: 25px;
		}
		
		.table-col-1{
			width: 115px;
			height: 25px;
		}
		
		.table-col-3{
			width: 250px;
			height: 25px;
		}
		
		.table-col-8{
			width: 300px;
			height: 25px;
		}
		
		.table-col-2{
			width: 200px;
			height: 25px;
		}
	</style>
		<table>
			<tr>
				<td class="table-col-17910"><strong>ID</strong></td>
				<td class="table-col-2"><strong>NAME</strong></td>
				<td class="table-col-3"><strong>E_MAIL</strong></td>
				<td class="table-col-1"><strong>PHONE</strong></td>
				<td class="table-col-8"><strong>ORG_NAME</strong></td>
				<td class="table-col-17910"><strong>AMOUNT</strong></td>
				<td class="table-col-1"><strong>FOOD</strong></td>
				<td class="table-col-17910"><strong>TSHIRT</strong></td>				
				<td class="table-col-17910"><strong>SIZE</strong></td>
				<td class="table-col-17910"><strong>STAY</strong></td>
			</tr>	
				<?php
									
							require("../config.php");
																							
									$users = "SELECT * FROM final";
									$usr = mysqli_query($mysqli,$users);
									
									while($row = mysqli_fetch_array($usr))
									{
									?>
										<tr>
											<td class="table-col-17910"><?php echo $row['ID']; ?></td>
											<td class="table-col-2"><?php echo $row['BUYER_NAME']; ?></td>
											<td class="table-col-3"><?php echo $row['E_MAIL']; ?></td>
											<td class="table-col-1"><?php echo $row['PHONE_NUMBER']; ?></td>
											<td class="table-col-8"><?php echo $row['ORG_NAME']; ?></td>
											<td class="table-col-17910"><?php echo $row['AMOUNT_PAID']; ?></td>
											<td class="table-col-1"><?php echo $row['FOOD_PREFS']; ?></td>
											<td class="table-col-17910"><?php echo $row['T_SHIRTS']; ?></td>											
											<td class="table-col-17910"><?php echo $row['TSHIRT_SPEC']; ?></td>
											<td class="table-col-17910"><?php echo $row['STAY']; ?></td>
										</tr>									
									<?php
									}
									
									mysqli_close($mysqli);
									
					
				?>


	</table>

	</body>
</html>