<?php
/* require_once "Class/Stripe/Payment.php";
require_once "Class/Paypal/Payment.php";
require_once "Class/Users/User.php"; */


// - Charger automatiquement les require
/* spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($path)) {
        require $path;
        var_dump($path);
    }
}); */


require '../vendor/autoload.php';

use \Class\Paypal\Payment as PaypalPayment;
use \Class\Stripe\Payment;

$paymentPaypal = new PaypalPayment();

$paymentStripe = new Payment();


var_dump($paymentPaypal, $paymentStripe);
