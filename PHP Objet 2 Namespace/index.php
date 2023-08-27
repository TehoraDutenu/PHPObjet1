<?php
require_once "Class/Stripe/Payment.php";
require_once "Class/Paypal/Payment.php";
require_once "Class/Users/User.php";

use \Class\Paypal\Payment as PaypalPayment;
use \Class\Stripe\Payment;

$paymentPaypal = new PaypalPayment();
$paymentStripe = new Payment();


var_dump($paymentPaypal, $paymentStripe);
