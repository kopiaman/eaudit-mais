<?php
$strTableName="audit_form_manual";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="audit_form";

$gstrOrderBy="ORDER BY audit_form.fid DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("audit_form_manual");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["audit_form_manual"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>