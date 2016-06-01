<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$result = array('err' => 'ok', 'taskContent' =>'请上传一张现场的照片，如果危险区域较大，可以到外围安全区域拍照。','statue'=>0);
echo json_encode($result);
?>