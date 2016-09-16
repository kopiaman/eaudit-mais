<?php
$strTableName="audit_plan";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="audit_plan";

$gstrOrderBy="ORDER BY aYear DESC, planID";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("audit_plan");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["audit_plan"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>