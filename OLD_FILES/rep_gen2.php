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

$sql_m101 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch` 
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 101) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_m101);
?>
<table>
<?php
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    echo "<br> 100 m MALE <br>";
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
<?php

$sql_f201 = "SELECT  `STUDENT`.`name` ,  `STUDENT`.`roll` ,  `STUDENT`.`batch` 
FROM  `STUDENT` WHERE  `STUDENT`.`roll` IN ( SELECT  `REGISTRATION`.`roll` FROM  `REGISTRATION` 
WHERE  `event_id` = 201) order by `STUDENT`.`batch`";

$result = mysqli_query($conn, $sql_f201);
?>
<table>
<?php
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    echo "<br> 100 m FEMALE <br>";
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


