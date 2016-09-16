<?php
$strTableName="web_meeting";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="web_file";

$gstrOrderBy="ORDER BY tahun                               DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("web_meeting");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["web_meeting"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>