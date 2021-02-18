<?php
	//read JSON
	$jsonData=file_get_contents("localhost/project/signup 2.php");
	//decode JSON
	$data = json_decode($jsondata, true);
    
    //get method for first name
    jsonObj.get("first_name");
    $first_name = jsonObj.get(['first_name']);
    echo $first_name

    //JSON string
	$first_nameJSON = [" "];
	//Convert JSON string to ARRAY
	$first_nameArray = json_decode($first_nameJSON, true);
	print_r($first_nameArray);
	echo $first_nameArray[0][" "]; //accress array data

	// convert JSON string to OBJECT
	$first_nameObject = json_decode($first_nameJSON);
	print_r($first_nameObject);
	echo $first_nameObject[0]->first_name; //access Object

    //get method for last name
    jsonObj.get("last_name");
    $last_name = jsonObj.get(['last_name']);
    echo $last_name

    //JSON string
	$last_nameJSON = [" "];
	//Convert JSON string to ARRAY
	$first_nameArray = json_decode($last_nameJSON, true);
	print_r($last_nameArray);
	echo $last_nameArray[0][" "]; //accress array data

	// convert JSON string to OBJECT
	$last_nameObject = json_decode($last_nameJSON);
	print_r($last_nameObject);
	echo $last_nameObject[0]->last_name; //access Object


    //get method for email
    jsonObj.get("e_mail");
    $e_email = jsonObj.get(['e_mail']);
    echo $e_mail

    //JSON string
	$e_mailJSON = [" "];
	//Convert JSON string to ARRAY
	$e_mailArray = json_decode($e_mailJSON, true);
	print_r($e_mailArray);
	echo $e_mailArray[0][" "]; //accress array data

	// convert JSON string to OBJECT
	$e_mailObject = json_decode($e_mailJSON);
	print_r($e_mailObject);
	echo $e_mailObject[0]->e_mail; //access Object

    //get method for pass
    jsonObj.get("pass");
    $pass = jsonObj.get(['pass']);
    echo $pass

	//JSON string
	$passJSON = [" "];
	 //Convert JSON string to ARRAY
	$passArray = json_decode($passJSON, true);
	print_r($passArray);
	echo $passArray[0][" "]; //accress array data

	// convert JSON string to OBJECT
	$passObject = json_decode($passJSON);
	print_r($passbject);
	echo $passObject[0]->pass; //access Object

    //get method for confirm pass
    jsonObj.get("confirm_pass");
    $confirm_pass = jsonObj.get(['confirm_pass']);
    echo $confirm_pass

	//JSON string
	$confirm_passJSON = [" "];
	 //Convert JSON string to ARRAY
	$confirm_passArray = json_decode($confirm_passJSON, true);
	print_r($confirm_passArray);
	echo $confirm_passArray[0][" "]; //accress array data

	// convert JSON string to OBJECT
	$confirm_passObject = json_decode($passJSON);
	print_r($confirm_passbject);
	echo $confirm_passObject[0]->confirm_pass; //access Object
?>