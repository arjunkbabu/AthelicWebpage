<?php
/*
$servername = "localhost";
$username = "athletics";
$password = "amrita_108";
$dbname = "athletics";
*/

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fetchquery = "SELECT `roll`,`CHEST`,`batch` FROM `STUDENT` WHERE `CHEST` > 1000";
//$chestupquery = "UPDATE  `STUDENT` SET  `CHEST` =776 WHERE  `roll` LIKE  \"am.en.u4bca12546\"";

$result = mysqli_query($conn, $fetchquery);

//$cse = 185; $csa = 241; $me = 368; $ece = 499; $eee = 563;
$cse = 1001; $csa = 2001; $me = 3001; $ece = 4001; $eee = 5001;

$val = 0;

$rr = 0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	if( $row["chest"] == 0 )	{

		echo "<br> id: " . $row["roll"]. " - Name: " . $row["batch"];
		
		$rr = $row["roll"];
		
		if( $row["batch"] == "u_cse" 
			or $row["batch"] == "p_cyb"
			or $row["batch"] == "p_elr"
			or $row["batch"] == "p_wna")	{
			if( $cse == 199 )	{
				$cse = 1001;
			}
			else	{
				$cse++;
			}
			$val = $cse;
		}
		else if( $row["batch"] == "u_bca" or $row["batch"] == "u_bcs"
			or $row["batch"] == "u_mca"
			or $row["batch"] == "u_mcs" )	{
			//bca, bsc, mca, msc
			if( $csa == 299 )	{
				$csa = 2200;
			}
			else	{
				$csa++;
			}
			$val = $csa;
		}
		else if( $row["batch"] == "u_me"
			or $row["batch"] == "p_rba"
			or $row["batch"] == "p_thf" )	{
			if( $me == 399 )	{
				$me = 3300;
			}
			else	{
				$me++;
			}
			$val = $me;
		}
		else if( $row["batch"] == "u_ece"
			or $row["batch"] == "p_vlsi" )	{
			if( $ece == 499 )	{
				$ece = 4400;
			}
			else	{
				$ece++;
			}
			$val = $ece;
		}
		else if( $row["batch"] == "u_eee"
			or $row["batch"] == "p_cni"
			or $row["batch"] == "p_pwe" )	{
			if( $eee == 599 )	{
				$eee = 5500;
			}
			else	{
				$eee++;
			}
			$val = $eee;
		}
		
		$chestupquery = "UPDATE  `STUDENT` SET  `CHEST` = $val WHERE  `roll` LIKE  '$rr'";	
		$res = mysqli_query($conn, $chestupquery);
		
		echo "<br> HI ".$res." ".$val." ".$rr;
	} //end of if
    }
    
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
