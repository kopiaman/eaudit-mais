<?php
$dalTableauditee = array();
$dalTableauditee["aid"] = array("type"=>3,"varname"=>"aid");
$dalTableauditee["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTableauditee["umail"] = array("type"=>200,"varname"=>"umail");
$dalTableauditee["tel"] = array("type"=>200,"varname"=>"tel");
$dalTableauditee["sector"] = array("type"=>200,"varname"=>"sector");
$dalTableauditee["department"] = array("type"=>200,"varname"=>"department");
$dalTableauditee["paid"] = array("type"=>200,"varname"=>"paid");
$dalTableauditee["agency"] = array("type"=>200,"varname"=>"agency");
$dalTableauditee["pos"] = array("type"=>200,"varname"=>"pos");
	$dalTableauditee["aid"]["key"]=true;

$dal_info["Tables__auditee"] = &$dalTableauditee;
?>