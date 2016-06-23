<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$teqa1 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'隆兴昌镇和丰村0', 'teqStatue' => 1, 'teaStatue' => 1, 'teqUsername'=>'cs');
$teqa2 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'发布一条测试信息1', 'teqStatue' => 2, 'teaStatue' => 1, 'teqUsername'=>'cs');
$teqa3 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'发布一条测试信息2', 'teqStatue' => 3, 'teaStatue' => 1, 'teqUsername'=>'cs');
$teqa4 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'发布一条测试信息3', 'teqStatue' => 4, 'teaStatue' => 1, 'teqUsername'=>'cs');
$teqa5 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'发布一条测试信息4', 'teqStatue' => 4, 'teaStatue' => 2, 'teqUsername'=>'cs');
$teqa6 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'发布一条测试信息5', 'teqStatue' => 4, 'teaStatue' => 2, 'teqUsername'=>'cs');
$teqa7 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'发布一条测试信息6', 'teqStatue' => 5, 'teaStatue' => 3, 'teqUsername'=>'cs');
$teqa8 = array('teqaId'=>'a'.rand(100000,999999), 'teqDate'=>'2016-03-12', 'teqTitle'=>'发布一条测试信息7', 'teqStatue' => 5, 'teaStatue' => 3, 'teqUsername'=>'cs');
$teqaArray = array($teqa1,$teqa2,$teqa3,$teqa4,$teqa5,$teqa6,$teqa7,$teqa8);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>8, 'teqa' => $teqaArray);
echo json_encode($result);
?>