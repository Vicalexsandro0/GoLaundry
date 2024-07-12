<?php 

// Get the user id 
$member_number = $_REQUEST['member_number']; 

// Database connection 
$con = mysqli_connect("localhost", "root", "", "golaundry"); 

if ($member_number !== "") { 
	
 
	$query = mysqli_query($con, "SELECT first_name, 
	last_name, phone_number, address FROM members WHERE member_number='$member_number'"); 

	$row = mysqli_fetch_array($query); 


	$first_name = $row["first_name"]; 

	$last_name = $row["last_name"]; 

    $phone_number = $row["phone_number"]; 

    $address = $row["address"]; 
} 

// Store it in a array 
$result = array("$first_name", "$last_name", "$phone_number", $address); 

// Send in JSON encoded form 
$myJSON = json_encode($result); 
echo $myJSON; 
