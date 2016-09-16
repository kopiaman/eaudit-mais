<?php
$dalTableaudit_form = array();
$dalTableaudit_form["fid"] = array("type"=>3,"varname"=>"fid");
$dalTableaudit_form["planID"] = array("type"=>3,"varname"=>"planID");
$dalTableaudit_form["ref"] = array("type"=>200,"varname"=>"ref");
$dalTableaudit_form["aDate"] = array("type"=>7,"varname"=>"aDate");
$dalTableaudit_form["dateCheck"] = array("type"=>7,"varname"=>"dateCheck");
$dalTableaudit_form["dateApprove"] = array("type"=>7,"varname"=>"dateApprove");
$dalTableaudit_form["dateSend"] = array("type"=>135,"varname"=>"dateSend");
$dalTableaudit_form["aStatus"] = array("type"=>200,"varname"=>"aStatus");
$dalTableaudit_form["aTypeCode"] = array("type"=>200,"varname"=>"aTypeCode");
$dalTableaudit_form["aElementID"] = array("type"=>3,"varname"=>"aElementID");
$dalTableaudit_form["userID"] = array("type"=>3,"varname"=>"userID");
$dalTableaudit_form["userCheck"] = array("type"=>3,"varname"=>"userCheck");
$dalTableaudit_form["userAuditee"] = array("type"=>3,"varname"=>"userAuditee");
$dalTableaudit_form["userApprove"] = array("type"=>3,"varname"=>"userApprove");
$dalTableaudit_form["attachment"] = array("type"=>201,"varname"=>"attachment");
$dalTableaudit_form["dateRemind"] = array("type"=>135,"varname"=>"dateRemind");
$dalTableaudit_form["dateRemind2"] = array("type"=>135,"varname"=>"dateRemind2");
$dalTableaudit_form["dateRemind3"] = array("type"=>135,"varname"=>"dateRemind3");
$dalTableaudit_form["dueDate"] = array("type"=>135,"varname"=>"dueDate");
$dalTableaudit_form["dueDate2"] = array("type"=>135,"varname"=>"dueDate2");
$dalTableaudit_form["dueDate3"] = array("type"=>135,"varname"=>"dueDate3");
$dalTableaudit_form["repeatStatus"] = array("type"=>200,"varname"=>"repeatStatus");
$dalTableaudit_form["repeatNo"] = array("type"=>200,"varname"=>"repeatNo");
$dalTableaudit_form["dateAnswer"] = array("type"=>135,"varname"=>"dateAnswer");
$dalTableaudit_form["dateAnswer2"] = array("type"=>135,"varname"=>"dateAnswer2");
$dalTableaudit_form["dateAnswer3"] = array("type"=>135,"varname"=>"dateAnswer3");
$dalTableaudit_form["dateFollowUp"] = array("type"=>135,"varname"=>"dateFollowUp");
$dalTableaudit_form["dateFollowUp2"] = array("type"=>135,"varname"=>"dateFollowUp2");
$dalTableaudit_form["dateFinish"] = array("type"=>135,"varname"=>"dateFinish");
$dalTableaudit_form["noteAmend"] = array("type"=>201,"varname"=>"noteAmend");
$dalTableaudit_form["noteAmend2"] = array("type"=>201,"varname"=>"noteAmend2");
	$dalTableaudit_form["fid"]["key"]=true;

$dal_info["Tables__audit_form"] = &$dalTableaudit_form;
?>