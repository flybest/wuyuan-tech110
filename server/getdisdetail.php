<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$attach1 = array('display'=>"一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attach2 = array('display'=>"另一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attachArray = array($attach1,$attach2);

$result = array('err' => 'ok', 'disInfoStatue' =>'2', 'disType' => '3', 'disRegion' =>'150821103200', 'disReason'=>'未知原因', 'disComment' =>'备注', 'feedback' =>'这里是一大堆的测试备注这里是一大堆的测试备注这里是一大堆的测试备注这里是一大堆的测试备注这里是一大堆的测试备注这里是一大堆的测试备注这里是一大堆的测试备注', 'handleProc' =>'测试', 'handleUnit' =>'农牧业局', 'publishDate' =>'2015-2-3 15:04', 'disBuildings' =>'12', 'disPlants' =>'小麦', 'disAnimals' =>'鸡', 'disAnimalCount' =>'23', 'disAnimal' =>'牛', 'disPlantArea' =>'45', 'disPlant' =>'花', 'attach'=>$attachArray);
echo json_encode($result);
?>