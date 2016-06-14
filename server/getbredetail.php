<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$result = array('err' => 'ok', 'breType' => '200', 'breRegion' =>'150821103201', 'breCount'=>'12', 'breComment' =>'这是备注','publishDate' =>'2015-2-3 15:04');
echo json_encode($result);
?>