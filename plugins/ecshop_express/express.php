<?php
$type = $_GET["data"];
$type = str_replace('快递','',$type);
$type = str_replace('快运','',$type);
$type = str_replace('速递','',$type);

if ($type == '中国邮政')
{
	$type = 'EMS';
}

$url = 'http://apps.yesnap.com/robot/robot.php?op=express&data=' . urlencode($type) .'&dataType=text';
$powered = ' ';

// 使用 CURL 模式
if (function_exists('curl_init') == 1)
{
	$curl = curl_init();
	curl_setopt ($curl, CURLOPT_URL, $url);
	curl_setopt ($curl, CURLOPT_HEADER,0);
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($curl, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
	curl_setopt ($curl, CURLOPT_TIMEOUT,10);
	$get_content = curl_exec($curl);
	curl_close ($curl);
}else{
	include("snoopy.php");
	$snoopy = new snoopy();
	$snoopy->referer = 'http://www.google.com/';
	$snoopy->fetch($url);
	$get_content = $snoopy->results;
}

print_r($get_content . '<br/>' . $powered);
exit();
?>