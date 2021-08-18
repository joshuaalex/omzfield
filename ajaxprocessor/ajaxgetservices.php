<?php

   	require_once('../application/libraries/helper_functions.php');


    if(!isset($_POST['catid']) || !isset($_POST['aprttype'])){
		echo "-1";
		die();
	}

	$categoryid = (isset($_POST['catid'])) ? $_POST['catid'] : '-1' ;
	$apartmentid = (isset($_POST['aprttype'])) ? $_POST['aprttype'] : '-1';

	if($categoryid < 1 && $aprttype < 1){		
		echo "-1";
		die();
	}
 
	$result = loadServiceIntoCombo('', $categoryid, $apartmentid);
	
	echo $result;
	 
?>