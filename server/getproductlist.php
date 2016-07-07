<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$product1 = array('productId'=>'a'.rand(100000,999999), 'productCategory'=>'1', 'productPrice'=>'4.50', 'needFix'=> false);
$product2 = array('productId'=>'a'.rand(100000,999999), 'productCategory'=>'2', 'productPrice'=>'3.23', 'needFix'=> false);
$product3 = array('productId'=>'a'.rand(100000,999999), 'productCategory'=>'3', 'productPrice'=>'5.46', 'needFix'=> true);
$product4 = array('productId'=>'a'.rand(100000,999999), 'productCategory'=>'4', 'productPrice'=>'3.56', 'needFix'=> false);
$product5 = array('productId'=>'a'.rand(100000,999999), 'productCategory'=>'5', 'productPrice'=>'4.32', 'needFix'=> false);
$product6 = array('productId'=>'a'.rand(100000,999999), 'productCategory'=>'5', 'productPrice'=>'2.45', 'needFix'=> true);
$productArray = array($product1,$product2,$product3,$product4,$product5,$product6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'product' => $productArray);
echo json_encode($result);
?>