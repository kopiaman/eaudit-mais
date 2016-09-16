<?php
$dalTableaudit_form = array();
$dalTableaudit_form["fid"] = array("type"=>3,"varname"=>"fid");
$dalTableaudit_form["planID"] = array("type"=>3,"varname"=>"planID");
$dalTableaudit_form["ref"] = array("type"=>200,"varname"=>"ref");
$dalTableaudit_form["aDate"] = array("type"=>7,"varname"=>"aDate");
$dalTableaudit_form["aStatus"] = array("type"=>200,"varname"=>"aStatus");
$dalTableaudit_form["aType"] = array("type"=>200,"varname"=>"aType");
$dalTableaudit_form["elementID"] = array("type"=>200,"varname"=>"elementID");
$dalTableaudit_form["userID"] = array("type"=>3,"varname"=>"userID");
$dalTableaudit_form["userCheck"] = array("type"=>3,"varname"=>"userCheck");
$dalTableaudit_form["userAuditee"] = array("type"=>3,"varname"=>"userAuditee");
$dalTableaudit_form["userApprove"] = array("type"=>3,"varname"=>"userApprove");
$dalTableaudit_form["attachment"] = array("type"=>201,"varname"=>"attachment");
$dalTableaudit_form["dueDate"] = array("type"=>7,"varname"=>"dueDate");
$dalTableaudit_form["replyDate"] = array("type"=>7,"varname"=>"replyDate");
$dalTableaudit_form["1stReminder"] = array("type"=>3,"varname"=>"fld1stReminder");
$dalTableaudit_form["2stReminder"] = array("type"=>3,"varname"=>"fld2stReminder");
$dalTableaudit_form["3rdReminder"] = array("type"=>3,"varname"=>"fld3rdReminder");
$dalTableaudit_form["repeatStatus"] = array("type"=>200,"varname"=>"repeatStatus");
$dalTableaudit_form["repeatNo"] = array("type"=>200,"varname"=>"repeatNo");
	$dalTableaudit_form["fid"]["key"]=true;

$dal_info["eaudit_at_localhost__audit_form"] = &$dalTableaudit_form;
?>