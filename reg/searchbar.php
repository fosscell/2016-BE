<?php

	require_once("../config.php");

		$users = "SELECT * FROM instamojo_responses";
		$usr = mysqli_query($mysqli,$users);
		$a = array();
		while($row = mysqli_fetch_array($usr)){
			$a[] = $row['BUYER_NAME'];
			$id[] = $row['ID'];
			$mob[] = $row['PHONE_NUMBER'];
		}
			
		$q = $_REQUEST["q"];

		$hint = "";

		if ($q !== "") {
			$q = strtolower($q);
			$len=strlen($q);
			$i = 0;
			
			foreach($a as $name) {
				if (stristr($q, substr($name, 0, $len))) {
					if ($hint === "") {
						$hint = ""?>						
						<form method="post" action="." onsubmit="return search_person(this)">
							<input type='hidden' name="key" value='<?php echo $id[$i]; ?>'>
							<input type='submit' name="<?php echo $id[$i]; ?>" class="btn btn-info" style='width: 300px;' value='<?php echo $name; ?>'>
							<span> <strong><?php echo $mob[$i];?></strong></span>
							<br><br>						
						</form>						
						<?php "";
					} else {
						$hint .= ""?>
						<form method="post" action="." onsubmit="return search_person(this)">
							<input type='hidden' name="key" value='<?php echo $id[$i]; ?>'>
							<input type='submit' name="<?php echo $id[$i]; ?>" class="btn btn-info" style='width: 300px;' value='<?php echo $name; ?>'>
							<span> <strong><?php echo $mob[$i];?></strong></span>
							<br><br>
						</form>		
						<?php "";
					}
				}
				$i++;
			}
		}

		
?>