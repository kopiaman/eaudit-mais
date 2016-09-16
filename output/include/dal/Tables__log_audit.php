<?php
$dalTablelog_audit = array();
$dalTablelog_audit["id"] = array("type"=>3,"varname"=>"id");
$dalTablelog_audit["datetime"] = array("type"=>135,"varname"=>"datetime");
$dalTablelog_audit["ip"] = array("type"=>200,"varname"=>"ip");
$dalTablelog_audit["user"] = array("type"=>200,"varname"=>"user");
$dalTablelog_audit["table"] = array("type"=>200,"varname"=>"table");
$dalTablelog_audit["action"] = array("type"=>200,"varname"=>"action");
$dalTablelog_audit["description"] = array("type"=>201,"varname"=>"description");
	$dalTablelog_audit["id"]["key"]=true;

$dal_info["Tables__log_audit"] = &$dalTablelog_audit;
?>