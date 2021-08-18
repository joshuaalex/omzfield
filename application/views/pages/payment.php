
<?php require_once('application/libraries/helper_functions.php'); ?>

<section style="margin-top: 100px;margin-bottom: 100px;">
	<div class="row">
		<div class="container">
			<h2 class="text-center">Pay Online</h2>
			<p class="text-center">Please click the button below to make payment.</p>
			<br/>
			<script src="https://js.paystack.co/v1/inline.js"></script>
			<script src="<?php echo base_url();?>assets/js/myscript.js"></script>
  			<!--<p><button type="button" onclick="payWithPaystack()"> Pay </button></p>-->
  			<form action="/process" method="POST" class="text-center" >
			  <script
			    src="https://js.paystack.co/v1/inline.js" 
			    data-key="pk_test_4bf4b6b86f72e1a49a9091931757316477a3b5be"
			    data-email="customer@email.com"
			    data-amount="10000"
			    data-ref="1234567890"
			  >
			  </script>
			</form>
		</div>
	</div>
</section>