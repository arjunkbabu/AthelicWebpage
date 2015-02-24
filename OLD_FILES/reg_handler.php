<?PHP
echo "Welcome to the registration handler";

	$servername = "localhost";
	$username = "root";
	$password = "password";
	
	$v_name = $_POST["student_name"]; echo $v_name;
	$v_roll = $_POST["student_rollno"]; echo $v_roll;
	$v_batch = $_POST["student_batch"]; echo $v_batch;
	$v_gender = $_POST["student_gender"]; echo $v_gender;
	$v_phone = $_POST["student_phone"]; echo $v_phone;
	$v_email = $_POST["email"]; echo $v_email;
	$v_ev1 = $_POST["event_one"];
	$v_ev2 = $_POST["event_two"];
	$v_ev3 = $_POST["event_three"];
	
	
	$conn = new mysqli($servername, $username, $password);
	
	if($conn)  
	    echo "Database connection established!";
	else
	    echo "Database connection failed!";
	  
	$stud_reg_query = "INSERT INTO `sports_db`.`STUDENT` 
			(`roll`, `name`, `batch`, `gender`, `phone`, `email`) 
		VALUES ('$v_roll', '$v_name', '$v_batch', '$v_gender', 
			'$v_phone', '$v_email')";
                            
       
        $event_reg_query = "INSERT INTO `sports_db`.`REGISTRATION` (`roll` ,
								`event_id`)
					VALUES ('$v_roll', $v_ev1), 
						('$v_roll', $v_ev2),
						('$v_roll', $v_ev3)";
						
	if (mysqli_query($conn, $stud_reg_query))	{
		echo "<br>Student record created successfully";
	}
	else	{
		echo "<br>Error: Student record".mysqli_error($conn);
	}
 
	if (mysqli_query($conn, $event_reg_query))	{
		echo "<br>Event registration record created successfully";
	}
	else	{
		echo "<br>Error: Event registration record".mysqli_error($conn);
	}
		
mysqli_close($conn);
?>
