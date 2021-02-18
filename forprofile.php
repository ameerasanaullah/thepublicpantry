<?php

	var_dump($_POST);
	// Use Post method to retrieve data onto users table
	$id = $_POST["id"];
	$postid = $_POST["postid"];
	$userid = $_POST["userid"];
	$e_mail = $_POST["e_mail"];
	$post_content= $_POST["post_content"];
	$n_post = $_POST["n_post"];
	
    $host = "localhost";
    $user_name = "root";
    $pass_word = "";
	$data_base = "mypantry_db";

	// Create connection to database 
    $connection = new mysqli($host, $user_name, $pass_word, $data_base);

	// If error display 
    if ($connection->connect_error) {
        die ("Failure connecting: ".$connection->connect_error);
    }
	// Insert variables into users database table 
	//$sql = "INSERT INTO users (id, postid, userid, e_mail, post_content,n_post) VALUES ('0','0','0', 'e_mail','post_content', 'n_post')";
	
	$user_count = "SELECT COUNT * FROM users WHERE e_mail = '$e_mail' AND post_content = '$post_content' AND n_post = '$n_post'";
	
    if($connection->query($sql) === true) {
        echo "Success";
    }
    else {
        echo "Error: ".$sql."<br>".$connection->error;
    }

    echo "connected";
	
    $connection->close();
?>