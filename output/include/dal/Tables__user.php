<?php
$dalTableuser = array();
$dalTableuser["userID"] = array("type"=>3,"varname"=>"userID");
$dalTableuser["fullName"] = array("type"=>200,"varname"=>"fullName");
$dalTableuser["pass"] = array("type"=>200,"varname"=>"pass");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email");
$dalTableuser["department"] = array("type"=>200,"varname"=>"department");
$dalTableuser["aUnit"] = array("type"=>200,"varname"=>"aUnit");
$dalTableuser["role"] = array("type"=>200,"varname"=>"role");
	$dalTableuser["userID"]["key"]=true;

$dal_info["Tables__user"] = &$dalTableuser;
?>