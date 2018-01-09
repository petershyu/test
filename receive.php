<?php
$json_str = file_get contents('php://input'); //接收request 的 body
$json_obj = json_decode($json_str); // 轉json格式

$myfile = fopen("log.txt","w+") or die("unable to open file!"); // 設定一個log.txt檔來印訊息
fwrite($myfile, "\xEF\xBB\xBF".$json_str); // 在字串前加入\xEF\xBB\xBF轉成utf8格式
fclose($myflie);
?>
