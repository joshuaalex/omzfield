<?php

   	require_once('../application/libraries/helper_functions.php');


    if(!isset($_POST['id'])){
		echo "-1";
		die();
	}

	$productid = $_POST['id'];

	if(strlen($productid) < 1){		
		echo "-1";
		die();
	}
 
	$result = loadServiceCategoryIntoCombo('', $productid);
	
	echo $result;
	 
?>