<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$notice1 = array('noticeId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'noticeTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$notice2 = array('noticeId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'noticeTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$notice3 = array('noticeId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'noticeTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$notice4 = array('noticeId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'noticeTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$notice5 = array('noticeId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'noticeTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$notice6 = array('noticeId'=>'a'.rand(100000,999999), 'publishDate'=>'2016-03-12', 'noticeTitle'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-disaster/server/img/muwu.jpg');
$noticeArray = array($notice1,$notice2,$notice3,$notice4,$notice5,$notice6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'notices' => $noticeArray);
echo json_encode($result);
?>