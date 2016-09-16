<?php
$dalTableaudit_plan = array();
$dalTableaudit_plan["planID"] = array("type"=>3,"varname"=>"planID");
$dalTableaudit_plan["aTypeCode"] = array("type"=>200,"varname"=>"aTypeCode");
$dalTableaudit_plan["subTypeID"] = array("type"=>3,"varname"=>"subTypeID");
$dalTableaudit_plan["aTitle"] = array("type"=>201,"varname"=>"aTitle");
$dalTableaudit_plan["aYear"] = array("type"=>200,"varname"=>"aYear");
$dalTableaudit_plan["jan"] = array("type"=>3,"varname"=>"jan");
$dalTableaudit_plan["feb"] = array("type"=>3,"varname"=>"feb");
$dalTableaudit_plan["mac"] = array("type"=>3,"varname"=>"mac");
$dalTableaudit_plan["apr"] = array("type"=>3,"varname"=>"apr");
$dalTableaudit_plan["may"] = array("type"=>3,"varname"=>"may");
$dalTableaudit_plan["jun"] = array("type"=>3,"varname"=>"jun");
$dalTableaudit_plan["jul"] = array("type"=>3,"varname"=>"jul");
$dalTableaudit_plan["aug"] = array("type"=>3,"varname"=>"aug");
$dalTableaudit_plan["sep"] = array("type"=>3,"varname"=>"sep");
$dalTableaudit_plan["oct"] = array("type"=>3,"varname"=>"oct");
$dalTableaudit_plan["nov"] = array("type"=>3,"varname"=>"nov");
$dalTableaudit_plan["dece"] = array("type"=>3,"varname"=>"dece");
$dalTableaudit_plan["procedureID"] = array("type"=>200,"varname"=>"procedureID");
$dalTableaudit_plan["notes"] = array("type"=>201,"varname"=>"notes");
$dalTableaudit_plan["organization"] = array("type"=>200,"varname"=>"organization");
$dalTableaudit_plan["meeting"] = array("type"=>200,"varname"=>"meeting");
	$dalTableaudit_plan["planID"]["key"]=true;

$dal_info["Tables__audit_plan"] = &$dalTableaudit_plan;
?>