<?php 
	require_once('../application/libraries/helper_functions.php'); 

	if(isset($_POST)){

		$fname = cleanInput($_POST['name']);
		$phone = cleanInput($_POST['phone']);
		$email = cleanInput($_POST['email']);
		$state = cleanInput($_POST['state']);
		$address = cleanInput($_POST['address']);
		$product = cleanInput($_POST['product']);
		$servicecat = (isset($_POST['servicecategory'])) ? cleanInput($_POST['servicecategory']) : '-1';
		$apartment = (isset($_POST['apartment'])) ? cleanInput($_POST['apartment']) : '-1';
		$apartmenttype = (isset($_POST['apartmenttype'])) ? cleanInput($_POST['apartmenttype']) : '-1';
		$service = (isset($_POST['service'])) ? cleanInput($_POST['service']) : '-1';
		$acqty = (isset($_POST['AcQty'])) ? cleanInput($_POST['AcQty']) : NULL;
		$prefdate = cleanInput($_POST['date_desire']);
		$preftime = cleanInput($_POST['time_desire']);
		$addinfo = (isset($_POST['message']) && strlen($_POST['message']) > 3) ? cleanInput($_POST['message']) : NULL;

		$amount = 0;
		$statename = '';
		$productdesc = '';
		$servicecategorydesc = '';
		$apartmentdesc = '';
		$servicedesc = '';
		$pdate = '';

		//print_r($_POST); die();

		if(strlen($fname) > 5 && strlen($phone) > 5 && strlen($email) > 10 && $state != '-1' && strlen($address) > 10 && $product != '-1' && $servicecat != '-1' && $apartment != '-1' && $apartmenttype != '-1' && $service != '-1' && strlen($prefdate) == '10' && strlen($preftime) > 4){

			$_SESSION['cus_info'] = $_POST;

			$price = getpriceByServiceId($service);
			$statename = getStateById($state);
			$productdesc = getProductById($product);
			$servicecategorydesc = getServiceCategoryById($servicecat);
			$apt = getApartmentById($apartment);
			$apttype = getApartmentTypeById($apartmenttype);
			$apartmentdesc = $apt->apartment." (".$apttype->type.")";
			$servicedesc = getServiceById($service);

			$date = $prefdate;
			$d = new DateTime($date);
			$pdate = $d->format('F d, Y');

			if($price != false){
				if($acqty != NULL){
					$amount = ($price * $acqty) * 100;
				}else{
					$amount = $price * 100;
				}

			}else{
				echo '-3';
				die();
			}

		}else{
			echo '-2';
			die();
    	}

	}else{

		echo '-1';
		die();

	}
?>

<section style="margin-top: 10px;margin-bottom: 100px;">
	<div class="row">
		<div class="container">
			<h3 class="text-center">Invoice Summary</h3>
			<hr/>
			<h4>Customer Information</h4>
			<hr/>
			<p>Full Name: <?php echo $fname; ?></p>
			<p>Email Address: <?php echo $email; ?></p>
			<p>Phone Number: <?php echo $phone; ?></p>
			<p>(State) / Address: <?php echo "(".$statename.") / ". $address; ?></p>
			<hr/>
			<h4>Order Summary</h4>
			<hr/>
			<p>Service Needs: <?php echo $productdesc->product; ?></p>
			<p>Service Category: <?php echo $servicecategorydesc->category; ?></p>
			<p>Apartment: <?php echo $apartmentdesc; ?></p>
			<p>Nature of Service: <?php echo $servicedesc->service; ?></p>
			<p>Preferred Date/Time of Delivery: <?php echo $pdate." @ ".$preftime; ?></p>
			<?php
				if($addinfo != NULL){
					echo '<p>Additional Info: '.$addinfo.' </p>';
				}
			?>
			<br/><br/><br/>
			<script src="https://js.paystack.co/v1/inline.js"></script>
			<script type="text/javascript">
				//10000
				var email = <?php echo(json_encode($email)); ?>;
				var amount = <?php echo(json_encode($amount)); ?>;
				var phone = <?php echo(json_encode($phone)); ?>;
			</script>
  			<p class="text-center"><button type="button" class="btn btn-info btn-lg" onclick="payWithPaystack(email, amount, phone)"> Proceed to Payment </button></p>
  			<!--<form action="/process" method="POST" class="text-center" >
			  <script
			    src="https://js.paystack.co/v1/inline.js" 
			    data-key="pk_test_4bf4b6b86f72e1a49a9091931757316477a3b5be"
			    data-email="jj@email.com"
			    data-amount="10000"
			    data-ref="1234567890"
			  >
			  </script>
			</form>-->
		</div>
	</div>
</section>