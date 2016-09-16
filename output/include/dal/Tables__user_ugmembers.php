<?php
$dalTableuser_ugmembers = array();
$dalTableuser_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName");
$dalTableuser_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID");
	$dalTableuser_ugmembers["UserName"]["key"]=true;
	$dalTableuser_ugmembers["GroupID"]["key"]=true;

$dal_info["Tables__user_ugmembers"] = &$dalTableuser_ugmembers;
?>