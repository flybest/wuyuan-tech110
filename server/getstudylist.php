<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$info1 = array('infoId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'infoTitle'=>'发布一条测试信息');
$info2 = array('infoId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'infoTitle'=>'发布一条测试信息');
$info3 = array('infoId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'infoTitle'=>'发布一条测试信息');
$info4 = array('infoId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'infoTitle'=>'发布一条测试信息');
$info5 = array('infoId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'infoTitle'=>'发布一条测试信息');
$info6 = array('infoId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'infoTitle'=>'发布一条测试信息');
$infoArray = array($info1,$info2,$info3,$info4,$info5,$info6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'info' => $infoArray);
echo json_encode($result);
?>