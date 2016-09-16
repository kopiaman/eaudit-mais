<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareport_susulan = array();
	$tdatareport_susulan[".truncateText"] = true;
	$tdatareport_susulan[".NumberOfChars"] = 80;
	$tdatareport_susulan[".ShortName"] = "report_susulan";
	$tdatareport_susulan[".OwnerID"] = "";
	$tdatareport_susulan[".OriginalTable"] = "audit_form";

//	field labels
$fieldLabelsreport_susulan = array();
$fieldToolTipsreport_susulan = array();
$pageTitlesreport_susulan = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsreport_susulan["Malay"] = array();
	$fieldToolTipsreport_susulan["Malay"] = array();
	$pageTitlesreport_susulan["Malay"] = array();
	$fieldLabelsreport_susulan["Malay"]["planID"] = "Rancangan";
	$fieldToolTipsreport_susulan["Malay"]["planID"] = "";
	$fieldLabelsreport_susulan["Malay"]["fid"] = "Fid";
	$fieldToolTipsreport_susulan["Malay"]["fid"] = "";
	$fieldLabelsreport_susulan["Malay"]["aYear"] = "Tahun";
	$fieldToolTipsreport_susulan["Malay"]["aYear"] = "";
	$fieldLabelsreport_susulan["Malay"]["bilPlan"] = "Bil Plan Aktiviti";
	$fieldToolTipsreport_susulan["Malay"]["bilPlan"] = "";
	$fieldLabelsreport_susulan["Malay"]["bilQuery"] = "Bil Query";
	$fieldToolTipsreport_susulan["Malay"]["bilQuery"] = "";
	$fieldLabelsreport_susulan["Malay"]["opt"] = "Laporan";
	$fieldToolTipsreport_susulan["Malay"]["opt"] = "";
	$fieldLabelsreport_susulan["Malay"]["selesai"] = "Query Selesai";
	$fieldToolTipsreport_susulan["Malay"]["selesai"] = "";
	$fieldLabelsreport_susulan["Malay"]["sedang"] = "Query Dalam Proses";
	$fieldToolTipsreport_susulan["Malay"]["sedang"] = "";
	$fieldLabelsreport_susulan["Malay"]["tidak"] = "Query Belum Tindakan";
	$fieldToolTipsreport_susulan["Malay"]["tidak"] = "";
	if (count($fieldToolTipsreport_susulan["Malay"]))
		$tdatareport_susulan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreport_susulan[""] = array();
	$fieldToolTipsreport_susulan[""] = array();
	$pageTitlesreport_susulan[""] = array();
	if (count($fieldToolTipsreport_susulan[""]))
		$tdatareport_susulan[".isUseToolTips"] = true;
}


	$tdatareport_susulan[".NCSearch"] = true;



$tdatareport_susulan[".shortTableName"] = "report_susulan";
$tdatareport_susulan[".nSecOptions"] = 0;
$tdatareport_susulan[".recsPerRowList"] = 1;
$tdatareport_susulan[".recsPerRowPrint"] = 1;
$tdatareport_susulan[".mainTableOwnerID"] = "";
$tdatareport_susulan[".moveNext"] = 1;
$tdatareport_susulan[".entityType"] = 1;

$tdatareport_susulan[".strOriginalTableName"] = "audit_form";




$tdatareport_susulan[".showAddInPopup"] = false;

$tdatareport_susulan[".showEditInPopup"] = true;

$tdatareport_susulan[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["edit"] = "under_center2";
			;
$popupPagesLayoutNames["view"] = "under_center2";
$tdatareport_susulan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareport_susulan[".fieldsForRegister"] = array();

$tdatareport_susulan[".listAjax"] = false;

	$tdatareport_susulan[".audit"] = false;

	$tdatareport_susulan[".locking"] = false;



$tdatareport_susulan[".list"] = true;



$tdatareport_susulan[".exportTo"] = true;



$tdatareport_susulan[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareport_susulan[".searchSaving"] = false;
//

if (isMobile()){
}
else
	$tdatareport_susulan[".showSearchPanel"] = false;

if (isMobile())
	$tdatareport_susulan[".isUseAjaxSuggest"] = false;
else
	$tdatareport_susulan[".isUseAjaxSuggest"] = true;

$tdatareport_susulan[".rowHighlite"] = true;


																	
			
				$tdatareport_susulan[".isUsebuttonHandlers"] = true;

$tdatareport_susulan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_susulan[".isUseTimeForSearch"] = false;




$tdatareport_susulan[".detailsLinksOnList"] = "1";

$tdatareport_susulan[".allSearchFields"] = array();
$tdatareport_susulan[".filterFields"] = array();
$tdatareport_susulan[".requiredSearchFields"] = array();



$tdatareport_susulan[".googleLikeFields"] = array();
$tdatareport_susulan[".googleLikeFields"][] = "fid";
$tdatareport_susulan[".googleLikeFields"][] = "planID";
$tdatareport_susulan[".googleLikeFields"][] = "aYear";
$tdatareport_susulan[".googleLikeFields"][] = "bilPlan";
$tdatareport_susulan[".googleLikeFields"][] = "bilQuery";
$tdatareport_susulan[".googleLikeFields"][] = "selesai";
$tdatareport_susulan[".googleLikeFields"][] = "sedang";
$tdatareport_susulan[".googleLikeFields"][] = "tidak";
$tdatareport_susulan[".googleLikeFields"][] = "opt";



$tdatareport_susulan[".tableType"] = "list";

$tdatareport_susulan[".printerPageOrientation"] = 0;
$tdatareport_susulan[".nPrinterPageScale"] = 100;

$tdatareport_susulan[".nPrinterSplitRecords"] = 40;

$tdatareport_susulan[".nPrinterPDFSplitRecords"] = 40;



$tdatareport_susulan[".geocodingEnabled"] = false;








$tdatareport_susulan[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatareport_susulan[".pageSize"] = 20;

$tdatareport_susulan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareport_susulan[".strOrderBy"] = $tstrOrderBy;

$tdatareport_susulan[".orderindexes"] = array();

$tdatareport_susulan[".sqlHead"] = "SELECT audit_form.fid,  audit_form.planID,  audit_plan.aYear,  COUNT(audit_plan.planID) AS bilPlan,  COUNT(audit_form.fid) AS bilQuery,  SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0)) AS selesai,  SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0)) AS sedang,  SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0)) AS tidak,  audit_form.fid AS opt";
$tdatareport_susulan[".sqlFrom"] = "FROM audit_form  RIGHT OUTER JOIN audit_plan ON audit_plan.planID = audit_form.planID";
$tdatareport_susulan[".sqlWhereExpr"] = "";
$tdatareport_susulan[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Pendaftaran",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Tarikh1',
					   'tabName'=>"Tarikh",
					   'nType'=>'2',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Pindaan1',
					   'tabName'=>"Pindaan /Catatan",
					   'nType'=>'2',
					   'nOrder'=>18,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatareport_susulan[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Pendaftaran",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatareport_susulan[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Daftar_Query1',
					   'tabName'=>"Daftar Query",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Peringatan1',
					   'tabName'=>"Tarikh",
					   'nType'=>'1',
					   'nOrder'=>13,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Pindaan__Catatan1',
					   'tabName'=>"Pindaan/ Catatan",
					   'nType'=>'1',
					   'nOrder'=>30,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatareport_susulan[".arrViewTabs"] = $arrViewTabs;


$tdatareport_susulan[".addMultistep"] = true;

$tdatareport_susulan[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_susulan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_susulan[".arrGroupsPerPage"] = $arrGPP;


$tableKeysreport_susulan = array();
$tableKeysreport_susulan[] = "fid";
$tdatareport_susulan[".Keys"] = $tableKeysreport_susulan;

$tdatareport_susulan[".listFields"] = array();
$tdatareport_susulan[".listFields"][] = "aYear";
$tdatareport_susulan[".listFields"][] = "bilPlan";
$tdatareport_susulan[".listFields"][] = "opt";

$tdatareport_susulan[".hideMobileList"] = array();


$tdatareport_susulan[".viewFields"] = array();

$tdatareport_susulan[".addFields"] = array();

$tdatareport_susulan[".masterListFields"] = array();
$tdatareport_susulan[".masterListFields"][] = "planID";
$tdatareport_susulan[".masterListFields"][] = "fid";
$tdatareport_susulan[".masterListFields"][] = "aYear";
$tdatareport_susulan[".masterListFields"][] = "bilPlan";
$tdatareport_susulan[".masterListFields"][] = "bilQuery";
$tdatareport_susulan[".masterListFields"][] = "tidak";
$tdatareport_susulan[".masterListFields"][] = "sedang";
$tdatareport_susulan[".masterListFields"][] = "selesai";
$tdatareport_susulan[".masterListFields"][] = "opt";

$tdatareport_susulan[".inlineAddFields"] = array();

$tdatareport_susulan[".editFields"] = array();

$tdatareport_susulan[".inlineEditFields"] = array();

$tdatareport_susulan[".exportFields"] = array();
$tdatareport_susulan[".exportFields"][] = "aYear";
$tdatareport_susulan[".exportFields"][] = "bilPlan";

$tdatareport_susulan[".importFields"] = array();

$tdatareport_susulan[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("report_susulan","fid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.fid";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["fid"] = $fdata;
//	planID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "planID";
	$fdata["GoodName"] = "planID";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("report_susulan","planID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "planID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.planID";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "audit_plan";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "planID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aTitle";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["planID"] = $fdata;
//	aYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aYear";
	$fdata["GoodName"] = "aYear";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("report_susulan","aYear");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_plan.aYear";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["aYear"] = $fdata;
//	bilPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bilPlan";
	$fdata["GoodName"] = "bilPlan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_susulan","bilPlan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bilPlan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(audit_plan.planID)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["bilPlan"] = $fdata;
//	bilQuery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "bilQuery";
	$fdata["GoodName"] = "bilQuery";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_susulan","bilQuery");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "bilQuery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(audit_form.fid)";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["bilQuery"] = $fdata;
//	selesai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "selesai";
	$fdata["GoodName"] = "selesai";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_susulan","selesai");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "selesai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0))";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["selesai"] = $fdata;
//	sedang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sedang";
	$fdata["GoodName"] = "sedang";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_susulan","sedang");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sedang";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0))";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["sedang"] = $fdata;
//	tidak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tidak";
	$fdata["GoodName"] = "tidak";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_susulan","tidak");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "tidak";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0))";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["tidak"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("report_susulan","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.fid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatareport_susulan["opt"] = $fdata;


$tables_data["report_susulan"]=&$tdatareport_susulan;
$field_labels["report_susulan"] = &$fieldLabelsreport_susulan;
$fieldToolTips["report_susulan"] = &$fieldToolTipsreport_susulan;
$page_titles["report_susulan"] = &$pageTitlesreport_susulan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["report_susulan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["report_susulan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_report_susulan()
{
$proto2=array();
$proto2["m_strHead"] = "SELECT";
$proto2["m_strFieldList"] = "audit_form.fid,  audit_form.planID,  audit_plan.aYear,  COUNT(audit_plan.planID) AS bilPlan,  COUNT(audit_form.fid) AS bilQuery,  SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0)) AS selesai,  SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0)) AS sedang,  SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0)) AS tidak,  audit_form.fid AS opt";
$proto2["m_strFrom"] = "FROM audit_form  RIGHT OUTER JOIN audit_plan ON audit_plan.planID = audit_form.planID";
$proto2["m_strWhere"] = "";
$proto2["m_strOrderBy"] = "";
$proto2["m_strTail"] = "";
			$proto2["cipherer"] = null;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto2["m_where"] = $obj;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto2["m_having"] = $obj;
$proto2["m_fieldlist"] = array();
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "report_susulan"
));

$proto7["m_sql"] = "audit_form.fid";
$proto7["m_srcTableName"] = "report_susulan";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto2["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "report_susulan"
));

$proto9["m_sql"] = "audit_form.planID";
$proto9["m_srcTableName"] = "report_susulan";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto2["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_susulan"
));

$proto11["m_sql"] = "audit_plan.aYear";
$proto11["m_srcTableName"] = "report_susulan";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto2["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_COUNT";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_susulan"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "COUNT(audit_plan.planID)";
$proto13["m_srcTableName"] = "report_susulan";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "bilPlan";
$obj = new SQLFieldListItem($proto13);

$proto2["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "report_susulan"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(audit_form.fid)";
$proto16["m_srcTableName"] = "report_susulan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "bilQuery";
$obj = new SQLFieldListItem($proto16);

$proto2["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_SUM";
$proto20["m_arguments"] = array();
						$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto21);

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0))";
$proto19["m_srcTableName"] = "report_susulan";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "selesai";
$obj = new SQLFieldListItem($proto19);

$proto2["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_SUM";
$proto26["m_arguments"] = array();
						$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2'"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto27);

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0))";
$proto25["m_srcTableName"] = "report_susulan";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "sedang";
$obj = new SQLFieldListItem($proto25);

$proto2["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_SUM";
$proto32["m_arguments"] = array();
						$proto33=array();
$proto33["m_functiontype"] = "SQLF_CUSTOM";
$proto33["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2'"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto33["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "IF";
$obj = new SQLFunctionCall($proto33);

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0))";
$proto31["m_srcTableName"] = "report_susulan";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "tidak";
$obj = new SQLFieldListItem($proto31);

$proto2["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "report_susulan"
));

$proto37["m_sql"] = "audit_form.fid";
$proto37["m_srcTableName"] = "report_susulan";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto37);

$proto2["m_fieldlist"][]=$obj;
$proto2["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "audit_form";
$proto40["m_srcTableName"] = "report_susulan";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "fid";
$proto40["m_columns"][] = "planID";
$proto40["m_columns"][] = "ref";
$proto40["m_columns"][] = "aDate";
$proto40["m_columns"][] = "dateCheck";
$proto40["m_columns"][] = "dateApprove";
$proto40["m_columns"][] = "dateSend";
$proto40["m_columns"][] = "aStatus";
$proto40["m_columns"][] = "aTypeCode";
$proto40["m_columns"][] = "aElementID";
$proto40["m_columns"][] = "userID";
$proto40["m_columns"][] = "userCheck";
$proto40["m_columns"][] = "userAuditee";
$proto40["m_columns"][] = "userApprove";
$proto40["m_columns"][] = "attachment";
$proto40["m_columns"][] = "dateRemind";
$proto40["m_columns"][] = "dateRemind2";
$proto40["m_columns"][] = "dateRemind3";
$proto40["m_columns"][] = "dueDate";
$proto40["m_columns"][] = "dueDate2";
$proto40["m_columns"][] = "dueDate3";
$proto40["m_columns"][] = "repeatStatus";
$proto40["m_columns"][] = "repeatNo";
$proto40["m_columns"][] = "dateAnswer";
$proto40["m_columns"][] = "dateAnswer2";
$proto40["m_columns"][] = "dateAnswer3";
$proto40["m_columns"][] = "dateFollowUp";
$proto40["m_columns"][] = "dateFollowUp2";
$proto40["m_columns"][] = "dateFinish";
$proto40["m_columns"][] = "noteAmend";
$proto40["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "audit_form";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "report_susulan";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto2["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_RIGHTJOIN";
			$proto44=array();
$proto44["m_strName"] = "audit_plan";
$proto44["m_srcTableName"] = "report_susulan";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "planID";
$proto44["m_columns"][] = "aTypeCode";
$proto44["m_columns"][] = "subTypeID";
$proto44["m_columns"][] = "aTitle";
$proto44["m_columns"][] = "aYear";
$proto44["m_columns"][] = "jan";
$proto44["m_columns"][] = "feb";
$proto44["m_columns"][] = "mac";
$proto44["m_columns"][] = "apr";
$proto44["m_columns"][] = "may";
$proto44["m_columns"][] = "jun";
$proto44["m_columns"][] = "jul";
$proto44["m_columns"][] = "aug";
$proto44["m_columns"][] = "sep";
$proto44["m_columns"][] = "oct";
$proto44["m_columns"][] = "nov";
$proto44["m_columns"][] = "dece";
$proto44["m_columns"][] = "procedureID";
$proto44["m_columns"][] = "notes";
$proto44["m_columns"][] = "organization";
$proto44["m_columns"][] = "meeting";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "RIGHT OUTER JOIN audit_plan ON audit_plan.planID = audit_form.planID";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "report_susulan";
$proto45=array();
$proto45["m_sql"] = "audit_plan.planID = audit_form.planID";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_susulan"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= audit_form.planID";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto2["m_fromlist"][]=$obj;
$proto2["m_groupby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_susulan"
));

$proto47["m_column"]=$obj;
$obj = new SQLGroupByItem($proto47);

$proto2["m_groupby"][]=$obj;
$proto2["m_orderby"] = array();
$proto2["m_srcTableName"]="report_susulan";		
$obj = new SQLQuery($proto2);

	return $obj;
}
$queryData_report_susulan = createSqlQuery_report_susulan();



									

$tdatareport_susulan[".sqlquery"] = $queryData_report_susulan;

include_once(getabspath("include/report_susulan_events.php"));
$tableEvents["report_susulan"] = new eventclass_report_susulan;
$tdatareport_susulan[".hasEvents"] = true;

?>