
<?php include('function.php'); ?>

<!-- ........................... -->

<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;


?>


<!-- ................................................... -->

<?php


$cn=mysqli_connect("localhost","root","","travel");

$s= "select * from enquiry ORDER BY Enquiryid DESC LIMIT 1";

$result=mysqli_query($cn,$s);

$print = mysqli_fetch_row($result);


?>

<?php
require('config.php');

if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=> $print[6],
		"currency"=>"usd",
		"description"=>"Booking Hotel",
		"source"=>$token,
	));

	include('index.php'); 
	
	
}
?>