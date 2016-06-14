<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$cap1 = array('capId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'capTitle'=>'隆兴昌镇和丰村需小麦种', 'capDemand' => '矮秆3抗1号156公斤');
$cap2 = array('capId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'capTitle'=>'发布一条测试信息', 'capDemand' => '不清楚');
$cap3 = array('capId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'capTitle'=>'发布一条测试信息', 'capDemand' => '不清楚');
$cap4 = array('capId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'capTitle'=>'发布一条测试信息', 'capDemand' => '不清楚');
$cap5 = array('capId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'capTitle'=>'发布一条测试信息', 'capDemand' => '不清楚');
$cap6 = array('capId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'capTitle'=>'发布一条测试信息', 'capDemand' => '不清楚');
$capArray = array($cap1,$cap2,$cap3,$cap4,$cap5,$cap6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'cap' => $capArray);
echo json_encode($result);
?>