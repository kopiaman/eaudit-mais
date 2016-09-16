<?php
$dalTablewebsite = array();
$dalTablewebsite["webID"] = array("type"=>3,"varname"=>"webID");
$dalTablewebsite["webCategory"] = array("type"=>200,"varname"=>"webCategory");
$dalTablewebsite["webTitle"] = array("type"=>200,"varname"=>"webTitle");
$dalTablewebsite["webAttachment"] = array("type"=>201,"varname"=>"webAttachment");
	$dalTablewebsite["webID"]["key"]=true;

$dal_info["Tables__website"] = &$dalTablewebsite;
?>