<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$result = array('err' => 'ok', 'plaType' => '1', 'plaCategory' => '3', 'plaRegion' =>'150821103201', 'plaArea'=>'12', 'plaComment' =>'这是备注','publishDate' =>'2015-2-3 15:04');
echo json_encode($result);
?>