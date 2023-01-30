<?php
require('stripe-php-master/init.php');

$publishableKey="Public key";

$secretKey="secret key";


\Stripe\Stripe::setApiKey($secretKey);

?>