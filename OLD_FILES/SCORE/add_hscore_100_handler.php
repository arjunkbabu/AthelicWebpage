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
?>

<form>
<table>
	<th> POS </th>
	<th> Chest Number </th>
	<th> TIME (HH.MM.SS) </th>

	<td> Pos 1 </td>
	<td> <input type 
</table>
</form>

<?php
/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
mysqli_close($conn);

?> 
