<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' => '321', 'description' => 'hitam');
$result = $myStripe->editproduct($data);
	echo "<pre>"; print_r($result);