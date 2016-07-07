<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$result = array('err' => 'ok', 'market' =>'1','productCategory'=>'2', 'productPrice'=>'4.50');
echo json_encode($result);
?>