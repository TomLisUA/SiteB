<?php
require_once __DIR__ . '/function.php';
use Paypal\payment;
$Order = new payment\Order();
$ssl = $Order->isSsl()?'https://':'http://';
$imageUrl = $ssl.$_SERVER['HTTP_HOST'].'/checkout.png';
// var_dump($imageUrl);die;
header("Content-Type:image/png");  
echo file_get_contents($imageUrl); 