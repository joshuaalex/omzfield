<?php

   	require_once('../application/libraries/helper_functions.php');


    if(!isset($_POST['id'])){
		echo "-1";
		die();
	}

	$apartmentid = $_POST['id'];

	if(strlen($apartmentid) < 1){		
		echo "-1";
		die();
	}
 
	$result = loadApartmentTypeIntoCombo('', $apartmentid);
	
	echo $result;
	 
?>