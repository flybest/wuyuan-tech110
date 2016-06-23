<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";
$attach1 = array('display'=>"一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attach2 = array('display'=>"另一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attachArray = array($attach1,$attach2);

$result = array('err' => 'ok', 'tegTitle' =>'测试信息','tegAuthor'=>'赵文静','tegCategory'=>'1','publishDate'=>'2016','tegContent'=>'测试测试','tegFullContent'=>'测试测试', 'attach'=>$attachArray);
echo json_encode($result);
?>