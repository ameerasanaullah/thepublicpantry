<?php
	var_dump($_POST);

	if(isset($response['name'])) $e_mail= $response['e_mail'];
	if(isset($response['pass'])) $pass = $response['pass'];
	
	// Use Post method to retrieve data onto users table
	$e_mail = $_POST["e_mail"];
	$pass= $_POST["pass"];
	
    $host = "localhost";
    $user_name = "root";
    $pass_word = "";
	$data_base = "mypantry_db	";

	// Create connection to database 
    $connection = new mysqli($host, $user_name, $pass_word, $data_base);

	// If error display 
    if ($connection->connect_error) {
        die ("Failure connecting: ".$connection->connect_error);
    }
	// Insert variables into users database table 
	// $sql = "INSERT INTO users (id, userid, first_name, last_name, gender, e_mail, pass, confirm_pass) VALUES ('0','0','$first_name', '$last_name','$gender', '$e_mail', '$pass', '$confirm_pass')";
	
	// Check if user exists (if count is greater than 0, they exist)
	//$user_count
	$user_count = "SELECT COUNT * FROM users WHERE e_mail = '$e_mail' AND pass = '$pass'";

    if($connection->query($sql) === true) {
		echo "Successfully Connecting";
		if ($user_count > 0) {
			echo "User $username exists";
		} else {
		 	echo "User not found.";
	    }
	}
	
    else {
        echo "Error: ".$sql."<br>".$connection->error;
	}
	
    $connection->close();
?> -->
<!--Written by Ameera Sanaullah -->