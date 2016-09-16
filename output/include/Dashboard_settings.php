<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();	
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsDashboard["Malay"] = array();
	$fieldLabelsDashboard["Malay"]["report_audit_plan_aType"] = "A Type";
	$fieldLabelsDashboard["Malay"]["report_audit_plan_aYear"] = "A Year";
	$fieldLabelsDashboard["Malay"]["report_audit_plan_noPlan"] = "No Plan";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"report_audit_plan", "field"=>"aType" );
$tdataDashboard[".searchFields"]["report_audit_plan_aType"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"report_audit_plan", "field"=>"aYear" );
$tdataDashboard[".searchFields"]["report_audit_plan_aYear"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"report_audit_plan", "field"=>"noPlan" );
$tdataDashboard[".searchFields"]["report_audit_plan_noPlan"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "report_audit_plan_aType";
$tdataDashboard[".allSearchFields"][] = "report_audit_plan_aYear";
$tdataDashboard[".allSearchFields"][] = "report_audit_plan_noPlan";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "report_audit_plan_aType";
$tdataDashboard[".googleLikeFields"][] = "report_audit_plan_aYear";
$tdataDashboard[".googleLikeFields"][] = "report_audit_plan_noPlan";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "report_audit_plan_list", "table" => "report_audit_plan", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";
	
					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	


	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;


$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";


					
$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>