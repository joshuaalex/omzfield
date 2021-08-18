<?php

   	require_once('../application/libraries/helper_functions.php');


    if(!isset($_POST['id'])){
		echo "-1";
		die();
	}

	$servicecategoryid = $_POST['id'];

	if($servicecategoryid != "ok"){		
		echo "-1";
		die();
	}
 
	$result = loadApartmentIntoCombo();
	
	echo $result;
	 
?>