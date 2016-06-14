<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$bre1 = array('breId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'breTitle'=>'隆兴昌镇和丰村存栏猪1400头');
$bre2 = array('breId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'breTitle'=>'发布一条测试信息');
$bre3 = array('breId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'breTitle'=>'发布一条测试信息');
$bre4 = array('breId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'breTitle'=>'发布一条测试信息');
$bre5 = array('breId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'breTitle'=>'发布一条测试信息');
$bre6 = array('breId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'breTitle'=>'发布一条测试信息');
$breArray = array($bre1,$bre2,$bre3,$bre4,$bre5,$bre6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'bre' => $breArray);
echo json_encode($result);
?>