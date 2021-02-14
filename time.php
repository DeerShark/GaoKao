<?php
$time_now = time();
$time_gaokao = strtotime("2021-6-7"); //高考日期
$days = ceil(($time_gaokao - $time_now)/86400);
if($days>0){
		header("Content-type:application/json");
	    $result=array(
	    "code"=>200,
	    "msg"=>"距离高考还有", //天数前的描述
	    "days"=>$days."天", //单位
	    );
	    exit(json_encode($result));
}elseif($days==0){
		header("Content-type:application/json");
	    $result=array(
	    "code"=>200,
	    "msg"=>"高考日", //祝词前的提示
	    "days"=>"祝你发挥稳定，成败在此一举！", //祝词
	    );
	    exit(json_encode($result));
}elseif($days==-1){
		header("Content-type:application/json");
	    $result=array(
	    "code"=>200,
	    "msg"=>"高考日", //祝词前的提示
	    "days"=>"不要受昨日考试的影响，振作起来！", //祝词
	    );
	    exit(json_encode($result));
}elseif($days<-1){
		header("Content-type:application/json");
	    $result=array(
	    "code"=>200,
	    "msg"=>"2020年高考结束", //祝词前的提示
	    "days"=>"相信你，不要气馁，你已经尽了你的力了！", //祝词
	    );
	    exit(json_encode($result));
}else{
		header("Content-type:application/json");
	    $result=array(
	    "code"=>100,
	    "msg"=>"距离高考还有",
	    "days"=>"完了，获取失败~", //未知错误失败提示
	    );
	    exit(json_encode($result));
}