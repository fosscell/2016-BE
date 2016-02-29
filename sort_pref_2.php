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
		<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="apple-mobile-web-app-capable" content="yes" />

		<title>FOSSMeet '16</title>
		<link rel="shortcut icon" type="image/png" href="//fossmeet.in/img/logo16.png" />
				
	</head>
	<body>
	<?php
			$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
			$qry = "SELECT * FROM ws_prefs";
			$rslt = $mysqli->query($qry);
			
			$a=0;$b=0;$c=0;$d=0;$e=0;$f=0;$g=0;$h=0;$i=0;$j=0;$k=0;$l=0;$m=0;$n=0;$o=0;$p=0;$q=0;$r=0;$s=0;$t=0;$u=0;$v=0;$w=0;
			if ($rslt->num_rows < 0) {
				echo "Error getting record: " . $mysqli->error;
			} 
			else{
				//echo "Total results: " . $rslt->num_rows . "<br>";
				
				$PREFS[300][23] = "";
				$var1 = 0;				
				while($var1 < 10){
					
					
					while($row = $rslt->fetch_assoc()){
									
						$prefones = ltrim($row['PREFS'],';');
						$the_prefs = explode(";",$prefones);
												
						switch($the_prefs[$var1]){									
							case "29": 			$PREFS[$b++][1] = $row['MOJO_ID'];  break;
							case "1": 			$PREFS[$c++][2] = $row['MOJO_ID']; break;
							case "27": 			$PREFS[$d++][3] = $row['MOJO_ID']; break;
							case "SUMOHAN": 	$PREFS[$e++][4] = $row['MOJO_ID']; break;
							case "30": 			$PREFS[$f++][5] = $row['MOJO_ID']; break;
							case "16":  		$PREFS[$g++][6] = $row['MOJO_ID'];  break;
							case "2": 			$PREFS[$h++][7] = $row['MOJO_ID']; break;
							case "11": 			$PREFS[$i++][8] = $row['MOJO_ID']; break;
							case "9":  			$PREFS[$j++][9] = $row['MOJO_ID']; break;
							case "22": 			$PREFS[$k++][10] = $row['MOJO_ID']; break;
							case "19":	  		$PREFS[$l++][11] = $row['MOJO_ID']; break;
							case "13": 			$PREFS[$m++][12] = $row['MOJO_ID']; break;
							case "24":  		$PREFS[$n++][13] = $row['MOJO_ID']; break;
							case "42":  		$PREFS[$o++][14] = $row['MOJO_ID']; break;
							case "205": 		$PREFS[$p++][15] = $row['MOJO_ID']; break;
							case "36": 			$PREFS[$q++][16] = $row['MOJO_ID']; break;
							case "MEDIAWIKI": 	$PREFS[$r++][17] = $row['MOJO_ID']; break;
							case "43":  		$PREFS[$s++][18] = $row['MOJO_ID']; break;
							case "CONCUR": 		$PREFS[$t++][19] = $row['MOJO_ID']; break;
							case "40": 			$PREFS[$u++][20] = $row['MOJO_ID']; break;
							case "ASD":  		$PREFS[$v++][21] = $row['MOJO_ID']; break;   
							case "25":  		$PREFS[$w++][22] = $row['MOJO_ID']; break; 													
							case "no":			$PREFS[$a++][23] = $row['MOJO_ID']; break;	
						}						
											
					}
				$rslt = $mysqli->query($qry);	
				$var1++;
				}	
				
				try{
					$response = $api->paymentsList();
				}
				catch (Exception $e){
					print('Error: ' . $e->getMessage());
				}
				
				echo "<table><tr><th>Getting Started with Contributing to Open Source - Tapasweni Pathak &amp; Vaishali Thakkar</th><th>ReST APIs 101 : Introduction - Shahul Hameed</th><th>Contributing to Linux Kernel Workshop - Vaishali Thakkar &amp; Tapasweni Pathak</th><th>Introduction to LaTeX and friends - Sasi Kumar</th><th>Crowdfunding - Is this really the way to go? - Anish Sheela</th><th>GNUKhata, a Professional quality free accounting software - Krishnakant Mane</th><th>Programming the NetBSD kernel - Cherry G Mathew</th><th>Building your own hackable keyboard - Abhas Abhinav</th></tr>";
				
				for($i = 0; $i < 300; $i++){
					echo "<tr>";
					for($j = 9; $j <= 16; $j++){
						if(!empty($PREFS[$i][$j])){
							$len = count($response);
							for($k=0;$k<$len;$k++){
								if($PREFS[$i][$j] == $response[$k]['payment_id']){
									echo "<td>" . $response[$k]['buyer_name'] . "<br>" . $response[$k]['buyer_phone'] . "</td>";
								}
							}
							
							//print_r($response[$key]);
							
						}
						else{ 
							echo "<td> </td>";
						}
					}
					echo "</tr>";
				}
				echo "</table>";
			}		
		
	?>
	</body>
</html>
