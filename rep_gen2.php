<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sports_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}

$sql = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch` 
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 101) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql);
?>
<table>
<?php
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	echo "<tr>";
	    	echo "<td>" . $row["name"] . "</td>" . "<td>". $row["roll"] . "</td>" . "<td>". $row["batch"] . "</td>";
	    	echo "</tr>";
	    
	    //    echo "Name: " . $row["name"]. " - Name: " . $row["roll"]. " " . $row["batch"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}	
?>
</table>
<?


mysqli_close($conn);
?> 


