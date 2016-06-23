<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$teg1 = array('tegId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'tegTitle'=>'隆兴昌镇和丰村', 'tegStatue' => 1);
$teg2 = array('tegId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'tegTitle'=>'发布一条测试信息', 'tegStatue' => 2);
$teg3 = array('tegId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'tegTitle'=>'发布一条测试信息', 'tegStatue' => 3);
$teg4 = array('tegId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'tegTitle'=>'发布一条测试信息', 'tegStatue' => 4);
$teg5 = array('tegId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'tegTitle'=>'发布一条测试信息', 'tegStatue' => 5);
$teg6 = array('tegId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'tegTitle'=>'发布一条测试信息', 'tegStatue' => 1);
$tegArray = array($teg1,$teg2,$teg3,$teg4,$teg5,$teg6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'teg' => $tegArray);
echo json_encode($result);
?>