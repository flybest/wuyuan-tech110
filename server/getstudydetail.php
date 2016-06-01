<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$result = array('err' => 'ok', 'infoTitle' =>'测试信息','infoSource'=>'应急办','infoAuthor'=>'赵文静','infoCategory'=>'设施农业','publishDate'=>'2016','infoContent'=>'测试测试');
echo json_encode($result);
?>