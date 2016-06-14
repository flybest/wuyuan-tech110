<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$dis1 = array('disId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'disTitle'=>'发布一条测试信息', 'disReason' => '不清楚', 'disStatue' => '1');
$dis2 = array('disId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'disTitle'=>'发布一条测试信息', 'disReason' => '不清楚', 'disStatue' => '2');
$dis3 = array('disId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'disTitle'=>'发布一条测试信息', 'disReason' => '不清楚', 'disStatue' => '3');
$dis4 = array('disId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'disTitle'=>'发布一条测试信息', 'disReason' => '不清楚', 'disStatue' => '1');
$dis5 = array('disId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'disTitle'=>'发布一条测试信息', 'disReason' => '不清楚', 'disStatue' => '2');
$dis6 = array('disId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'disTitle'=>'发布一条测试信息', 'disReason' => '不清楚', 'disStatue' => '3');
$disArray = array($dis1,$dis2,$dis3,$dis4,$dis5,$dis6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'dis' => $disArray);
echo json_encode($result);
?>