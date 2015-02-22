<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sports_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$fetchquery = "SELECT  `roll` ,  `batch` FROM  `STUDENT` WHERE 1 ";
//$chestupquery = "UPDATE  `STUDENT` SET  `CHEST` =776 WHERE  `roll` LIKE  \"am.en.u4bca12546\"";

$result = mysqli_query($conn, $fetchquery);

$cse = 100; $csa = 200; $me = 300; $ece = 400; $eee = 500;

$val = 0;

$rr = 0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "<br> id: " . $row["roll"]. " - Name: " . $row["batch"];
		
		$rr = $row["roll"];
		
		if( $row["batch"] == "u_cse" )	{
			if( $cse == 199 )	{
				$cse = 1100;
			}
			else	{
				$cse++;
			}
			$val = $cse;
		}
		else if( $row["batch"] == "u_csa" )	{
			if( $csa == 299 )	{
				$csa = 2200;
			}
			else	{
				$csa++;
			}
			$val = $csa;
		}
		else if( $row["batch"] == "u_me" )	{
			if( $me == 399 )	{
				$me = 3300;
			}
			else	{
				$me++;
			}
			$val = $me;
		}
		else if( $row["batch"] == "u_ece" )	{
			if( $ece == 499 )	{
				$ece = 4400;
			}
			else	{
				$ece++;
			}
			$val = $ece;
		}
		else if( $row["batch"] == "u_eee" )	{
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
    }
    
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
