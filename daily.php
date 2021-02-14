<?php
//获取每日英语
header("Content-type:application/json");
$url = "http://sentence.iciba.com/index.php?callback=&c=dailysentence&m=getdetail&title=".date("Y-m-d");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
$notice = curl_exec($ch);
echo $notice;
?>