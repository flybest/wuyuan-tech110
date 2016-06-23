<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";
$attach1 = array('display'=>"一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attach2 = array('display'=>"另一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attachArray = array($attach1,$attach2);

$result = array('err' => 'ok', 'teqStatue' =>4, 'teaStatue' =>2, 'teqTitle' =>'测试信息', 'teqAuthor'=>'赵文静', 'teqDate'=>'2016','teqContent'=>'测试测试','teqFullContent'=>'测试测试full', 'teaAuthor'=>'文静', 'teaDate'=>'2016-2','teaContent'=>'测试回复', 'teqTel'=>'13811100233', 'attach'=>$attachArray);
echo json_encode($result);
?>