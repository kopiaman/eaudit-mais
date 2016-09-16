<?php
$dalTableuser_ugrights = array();
$dalTableuser_ugrights["TableName"] = array("type"=>200,"varname"=>"TableName");
$dalTableuser_ugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID");
$dalTableuser_ugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask");
	$dalTableuser_ugrights["TableName"]["key"]=true;
	$dalTableuser_ugrights["GroupID"]["key"]=true;

$dal_info["Tables__user_ugrights"] = &$dalTableuser_ugrights;
?>