<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamain = array();
$tdatamain[".ShortName"] = "main";

//	field labels
$fieldLabelsmain = array();
$pageTitlesmain = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsmain["Malay"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmain[""] = array();
}

//	search fields
$tdatamain[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"jumlah_audit_bahagian", "field"=>"jumlahAudit" );
$tdatamain[".searchFields"]["jumlah_audit_bahagian_jumlahAudit"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"jumlah_audit_bahagian", "field"=>"sector" );
$tdatamain[".searchFields"]["jumlah_audit_bahagian_sector"] = $dashField;

// all search fields
$tdatamain[".allSearchFields"] = array();
$tdatamain[".allSearchFields"][] = "jumlah_audit_bahagian_jumlahAudit";
$tdatamain[".allSearchFields"][] = "jumlah_audit_bahagian_sector";

// good like search fields
$tdatamain[".googleLikeFields"] = array();
$tdatamain[".googleLikeFields"][] = "jumlah_audit_bahagian_jumlahAudit";
$tdatamain[".googleLikeFields"][] = "jumlah_audit_bahagian_sector";

$tdatamain[".dashElements"] = array();

	$dbelement = array( "elementName" => "jumlah_audit_bahagian_chart", "table" => "jumlah_audit_bahagian", "type" => 1);
	$dbelement["cellName"] = "cell_1_0";

			

	$tdatamain[".dashElements"][] = $dbelement;

$tdatamain[".shortTableName"] = "main";
$tdatamain[".entityType"] = 4;


$tableEvents["main"] = new eventsBase;
$tdatamain[".hasEvents"] = false;


$tdatamain[".tableType"] = "dashboard";


																				
$tdatamain[".addPageEvents"] = false;

$tables_data["main"]=&$tdatamain;
$field_labels["main"] = &$fieldLabelsmain;
$page_titles["main"] = &$pageTitlesmain;

?>