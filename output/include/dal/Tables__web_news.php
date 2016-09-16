<?php
$dalTableweb_news = array();
$dalTableweb_news["wnID"] = array("type"=>3,"varname"=>"wnID");
$dalTableweb_news["wTitle"] = array("type"=>200,"varname"=>"wTitle");
$dalTableweb_news["wContent"] = array("type"=>201,"varname"=>"wContent");
$dalTableweb_news["wType"] = array("type"=>200,"varname"=>"wType");
$dalTableweb_news["wDate"] = array("type"=>7,"varname"=>"wDate");
$dalTableweb_news["wStatus"] = array("type"=>200,"varname"=>"wStatus");
$dalTableweb_news["wPic"] = array("type"=>201,"varname"=>"wPic");
	$dalTableweb_news["wnID"]["key"]=true;

$dal_info["Tables__web_news"] = &$dalTableweb_news;
?>