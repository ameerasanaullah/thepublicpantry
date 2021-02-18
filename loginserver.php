<?php
	//read JSON
	$jsonData=file_get_contents("localhost/project/login 2.php");
	

	//decode JSON
	$data = json_decode($jsondata, true);

    //get method
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

    //get method
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
?>