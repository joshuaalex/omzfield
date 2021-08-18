<?php

	function getConnection()
	{
		// specify your own database credentials
		 
		$host = "127.0.0.1";
		$db_name = "omzfield_services";
		$username = "root";
		$password = "";

		try{
			$conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}catch(PDOException $exception){
			die("Connection error: " . $exception->getMessage());
			die("<h2> Server Error. Contact Administrator</h2>");
		}
	}

	function redirectTo($url)
	{
		if(headers_sent()){
			return "<script>window.location ='".$url."'</script>";
		}
		return header('LOCATION:' . $url);
	}

	function cleanInput($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = addslashes($data);

		return $data;
	}

	function formatAmount($amount)
	{
		return number_format($amount, 2);
	}

	function loadProductIntoCombo($param_cat = '')
	{
		$r = '';
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblproduct";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();
			if($count > 0){

				$r .= "<option value = '-1'>Select Service</option>";

				while ($stmt = $prepared_query ->fetchObject()) {
					if($stmt->productid == $param_cat){
						$r .= "<option value='" . $stmt->productid . "' selected='selected'>" . $stmt->product . "</option>";
						$cat_found = true;
					}else{
						$r .= "<option value='" . $stmt->productid . "'>" . $stmt->product . "</option>";
					}
				}
				
			}else{
				$r .= "<option value = '-1'>No Record Found</option>";
			}
		} catch (Exception $e) {
			return '-1';
			//return $e->getMessage();
		}

		return $r;
	}

	function loadServiceCategoryIntoCombo($param_cat = '', $productid = '-1')
	{
		$r = '';
		$con = getConnection();

		$query = "SELECT * FROM tblservicecategory WHERE status = 'Active'";

		if($productid != '-1'){
			$query = "SELECT * FROM tblservicecategory WHERE productid = '".$productid."' AND status = 'Active'";
		}

		try {			
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();
			if($count > 0){

				$r .= "<option value = '-1'>Select Service Catgeory</option>";

				while ($stmt = $prepared_query ->fetchObject()) {
					if($stmt->categoryid == $param_cat){
						$r .= "<option value='" . $stmt->categoryid . "' selected='selected'>" . $stmt->category . "</option>";
						$cat_found = true;
					}else{
						$r .= "<option value='" . $stmt->categoryid . "'>" . $stmt->category . "</option>";
					}
				}
				
			}else{
				$r .= "<option value = '-1'>No Record Found</option>";
			}
		} catch (Exception $e) {
			return "<option value = '-1'>No Record Found</option>";
			//return $e->getMessage();
		}

		return $r;
	}

	function loadApartmentIntoCombo($param_cat = '')
	{
		$r = '';
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblapartment";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();
			if($count > 0){

				$r .= "<option value = '-1'>Select Apartment</option>";

				while ($stmt = $prepared_query ->fetchObject()) {
					if($stmt->apartmentid == $param_cat){
						$r .= "<option value='" . $stmt->apartmentid . "' selected='selected'>" . $stmt->apartment . "</option>";
						$cat_found = true;
					}else{
						$r .= "<option value='" . $stmt->apartmentid . "'>" . $stmt->apartment . "</option>";
					}
				}
				
			}else{
				$r .= "<option value = '-1'>No Record Found</option>";
			}
		} catch (Exception $e) {
			return '-1';
			//return $e->getMessage();
		}

		return $r;
	}

	function loadApartmentTypeIntoCombo($param_cat = '', $apartmentid = '-1')
	{
		$r = '';
		$con = getConnection();

		$query = "SELECT * FROM tblapartmenttype WHERE status = 'Active'";

		if($apartmentid != '-1'){
			$query = "SELECT * FROM tblapartmenttype WHERE apartmentid = '".$apartmentid."' AND status = 'Active'";
		}

		try {			
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();
			if($count > 0){

				$r .= "<option value = '-1'>Select Apartment Type</option>";

				while ($stmt = $prepared_query ->fetchObject()) {
					if($stmt->typeid == $param_cat){
						$r .= "<option value='" . $stmt->typeid . "' selected='selected'>" . $stmt->type . "</option>";
						$cat_found = true;
					}else{
						$r .= "<option value='" . $stmt->typeid . "'>" . $stmt->type . "</option>";
					}
				}
				
			}else{
				$r .= "<option value = '-1'>No Record Found</option>";
			}
		} catch (Exception $e) {
			return '-1';
			//return $e->getMessage();
		}

		return $r;
	}

	function loadServiceIntoCombo($param_cat = '', $categoryid = '-1', $apartmenttypeid = '-1')
	{
		$r = '';
		$con = getConnection();

		$query = "SELECT * FROM tblservice WHERE status = 'Active'";

		if($categoryid != '-1'){
			$query = "SELECT * FROM tblservice WHERE categoryid = '".$categoryid."' AND status = 'Active'";
		}

		if($apartmenttypeid != '-1'){
			$query = "SELECT * FROM tblservice WHERE apartmenttypeid = '".$apartmenttypeid."' AND status = 'Active'";
		}

		if($categoryid != '-1' && $apartmenttypeid != '-1'){
			$query = "SELECT * FROM tblservice WHERE categoryid = '".$categoryid."' AND apartmenttypeid = '".$apartmenttypeid."' AND status = 'Active'";
		}

		try {			
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();
			if($count > 0){

				$r .= "<option value = '-1'>Select Nature of Service</option>";

				while ($stmt = $prepared_query ->fetchObject()) {
					if($stmt->serviceid == $param_cat){
						$r .= "<option value='" . $stmt->serviceid . "' rel='".$stmt->price."' selected='selected'>" . $stmt->service . "</option>";
						$cat_found = true;
					}else{
						$r .= "<option value='" . $stmt->serviceid . "' rel='".$stmt->price."'>" . $stmt->service . "</option>";
					}
				}
				
			}else{
				$r .= "<option value = '-1'>No Record Found</option>";
			}
		} catch (Exception $e) {
			return '-1';
			//return $e->getMessage();
		}

		return $r;
	}

	function loadStateIntoCombo($param_cat = '')
	{
		$r = '';
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblstate ORDER BY statename ASC";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();
			
			if($count > 0){

				$r .= "<option value = '-1'>Select State</option>";

				while ($stmt = $prepared_query ->fetchObject()) {
					if($stmt->stateid == $param_cat){
						$r .= "<option value='" . $stmt->stateid . "' selected='selected'>" . $stmt->statename . "</option>";
						$cat_found = true;
					}else{
						$r .= "<option value='" . $stmt->stateid . "'>" . $stmt->statename . "</option>";
					}
				}
				
			}else{
				$r .= "<option value = '-1'>No Record Found</option>";
			}
		} catch (Exception $e) {
			return '-1';
			//return $e->getMessage();
		}

		return $r;
	}

	function getpriceByServiceId($serviceid)
	{
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblservice WHERE serviceid='".$serviceid."'";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();			
			if($count == 1){
				$stmt = $prepared_query ->fetchObject();
				return $stmt->price;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
			//return $e->getMessage();
		}
	}

	function getStateById($stateid)
	{
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblstate WHERE stateid='".$stateid."'";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();			
			if($count == 1){
				$stmt = $prepared_query ->fetchObject();
				return $stmt->statename;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
			//return $e->getMessage();
		}
	}

	function getServiceById($serviceid)
	{
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblservice WHERE serviceid='".$serviceid."'";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();			
			if($count == 1){
				$stmt = $prepared_query ->fetchObject();
				return $stmt;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
			//return $e->getMessage();
		}
	}

	function getProductById($productid)
	{
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblproduct WHERE productid='".$productid."'";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();			
			if($count == 1){
				$stmt = $prepared_query ->fetchObject();
				return $stmt;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
			//return $e->getMessage();
		}
	}

	function getServiceCategoryById($categoryid)
	{
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblservicecategory WHERE categoryid='".$categoryid."'";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();			
			if($count == 1){
				$stmt = $prepared_query ->fetchObject();
				return $stmt;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
			//return $e->getMessage();
		}
	}

	function getApartmentById($apartmentid)
	{
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblapartment WHERE apartmentid='".$apartmentid."'";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();			
			if($count == 1){
				$stmt = $prepared_query ->fetchObject();
				return $stmt;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
			//return $e->getMessage();
		}
	}

	function getApartmentTypeById($typeid)
	{
		$con = getConnection();

		try {
			$query = "SELECT * FROM tblapartmenttype WHERE typeid='".$typeid."'";
			$prepared_query = $con->prepare($query);
			$prepared_query->execute();
			$count = $prepared_query->rowCount();			
			if($count == 1){
				$stmt = $prepared_query ->fetchObject();
				return $stmt;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
			//return $e->getMessage();
		}
	}


?>