<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$alert1 = array('alertId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'alertTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$alert2 = array('alertId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'alertTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$alert3 = array('alertId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'alertTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$alert4 = array('alertId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'alertTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$alert5 = array('alertId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'alertTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$alert6 = array('alertId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'alertTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$alertArray = array($alert1,$alert2,$alert3,$alert4,$alert5,$alert6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'alerts' => $alertArray);
echo json_encode($result);
?>