<?PHP
	//SCRIPT TO RETRIEVE DATA FROM DATABASE
	
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "sports_db";
	
	echo "You're about to see the registration report!";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//echo $conn;

if($conn)	{
	echo "Connection Established! ";
}
else {
    echo "Connection failed: " . mysqli_connect_error();
}

$sql = "SELECT * FROM  `sports_db`.`STUDENT` where batch = 'bca' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

	echo "<br> Name: ".$row["name"];
	echo "<br> Roll: ".$row["roll"];
	echo "<br>";
    }

} 
else {
    echo "0 results";
}

mysqli_close($conn);
?>
