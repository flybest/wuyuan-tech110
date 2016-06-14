<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$pla1 = array('plaId'=>'a'.rand(100000,999999), 'plaType'=>'1', 'publishDate'=>'2016-03-12', 'plaTitle'=>'隆兴昌镇和丰村种植小麦200亩');
$pla2 = array('plaId'=>'a'.rand(100000,999999), 'plaType'=>'2', 'publishDate'=>'2016-03-12', 'plaTitle'=>'发布一条测试信息');
$pla3 = array('plaId'=>'a'.rand(100000,999999), 'plaType'=>'2', 'publishDate'=>'2016-03-12', 'plaTitle'=>'发布一条测试信息');
$pla4 = array('plaId'=>'a'.rand(100000,999999), 'plaType'=>'1', 'publishDate'=>'2016-03-12', 'plaTitle'=>'发布一条测试信息');
$pla5 = array('plaId'=>'a'.rand(100000,999999), 'plaType'=>'1', 'publishDate'=>'2016-03-12', 'plaTitle'=>'发布一条测试信息');
$pla6 = array('plaId'=>'a'.rand(100000,999999), 'plaType'=>'2', 'publishDate'=>'2016-03-12', 'plaTitle'=>'发布一条测试信息');
$plaArray = array($pla1,$pla2,$pla3,$pla4,$pla5,$pla6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'pla' => $plaArray);
echo json_encode($result);
?>