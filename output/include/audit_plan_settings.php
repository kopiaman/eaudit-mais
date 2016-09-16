<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaudit_plan = array();
	$tdataaudit_plan[".truncateText"] = true;
	$tdataaudit_plan[".NumberOfChars"] = 200;
	$tdataaudit_plan[".ShortName"] = "audit_plan";
	$tdataaudit_plan[".OwnerID"] = "";
	$tdataaudit_plan[".OriginalTable"] = "audit_plan";

//	field labels
$fieldLabelsaudit_plan = array();
$fieldToolTipsaudit_plan = array();
$pageTitlesaudit_plan = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsaudit_plan["Malay"] = array();
	$fieldToolTipsaudit_plan["Malay"] = array();
	$pageTitlesaudit_plan["Malay"] = array();
	$fieldLabelsaudit_plan["Malay"]["aTitle"] = "Aktiviti";
	$fieldToolTipsaudit_plan["Malay"]["aTitle"] = "";
	$fieldLabelsaudit_plan["Malay"]["jan"] = "Jan";
	$fieldToolTipsaudit_plan["Malay"]["jan"] = "";
	$fieldLabelsaudit_plan["Malay"]["feb"] = "Feb";
	$fieldToolTipsaudit_plan["Malay"]["feb"] = "";
	$fieldLabelsaudit_plan["Malay"]["aYear"] = "Tahun";
	$fieldToolTipsaudit_plan["Malay"]["aYear"] = "";
	$fieldLabelsaudit_plan["Malay"]["mac"] = "Mac";
	$fieldToolTipsaudit_plan["Malay"]["mac"] = "";
	$fieldLabelsaudit_plan["Malay"]["apr"] = "Apr";
	$fieldToolTipsaudit_plan["Malay"]["apr"] = "";
	$fieldLabelsaudit_plan["Malay"]["may"] = "Mei";
	$fieldToolTipsaudit_plan["Malay"]["may"] = "";
	$fieldLabelsaudit_plan["Malay"]["jun"] = "Jun";
	$fieldToolTipsaudit_plan["Malay"]["jun"] = "";
	$fieldLabelsaudit_plan["Malay"]["jul"] = "Jul";
	$fieldToolTipsaudit_plan["Malay"]["jul"] = "";
	$fieldLabelsaudit_plan["Malay"]["aug"] = "Ogo";
	$fieldToolTipsaudit_plan["Malay"]["aug"] = "";
	$fieldLabelsaudit_plan["Malay"]["sep"] = "Sep";
	$fieldToolTipsaudit_plan["Malay"]["sep"] = "";
	$fieldLabelsaudit_plan["Malay"]["oct"] = "Okt";
	$fieldToolTipsaudit_plan["Malay"]["oct"] = "";
	$fieldLabelsaudit_plan["Malay"]["nov"] = "Nov";
	$fieldToolTipsaudit_plan["Malay"]["nov"] = "";
	$fieldLabelsaudit_plan["Malay"]["dece"] = "Dis";
	$fieldToolTipsaudit_plan["Malay"]["dece"] = "";
	$fieldLabelsaudit_plan["Malay"]["procedureID"] = "Rujukan ";
	$fieldToolTipsaudit_plan["Malay"]["procedureID"] = "";
	$fieldLabelsaudit_plan["Malay"]["notes"] = "Catatan";
	$fieldToolTipsaudit_plan["Malay"]["notes"] = "";
	$fieldLabelsaudit_plan["Malay"]["organization"] = "Auditi";
	$fieldToolTipsaudit_plan["Malay"]["organization"] = "";
	$fieldLabelsaudit_plan["Malay"]["planID"] = "Plan ID";
	$fieldToolTipsaudit_plan["Malay"]["planID"] = "";
	$fieldLabelsaudit_plan["Malay"]["meeting"] = "MJKA";
	$fieldToolTipsaudit_plan["Malay"]["meeting"] = "";
	$fieldLabelsaudit_plan["Malay"]["subTypeID"] = "Sub Kategori";
	$fieldToolTipsaudit_plan["Malay"]["subTypeID"] = "";
	$fieldLabelsaudit_plan["Malay"]["aTypeCode"] = "Kategori Auditan";
	$fieldToolTipsaudit_plan["Malay"]["aTypeCode"] = "";
	if (count($fieldToolTipsaudit_plan["Malay"]))
		$tdataaudit_plan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaudit_plan[""] = array();
	$fieldToolTipsaudit_plan[""] = array();
	$pageTitlesaudit_plan[""] = array();
	if (count($fieldToolTipsaudit_plan[""]))
		$tdataaudit_plan[".isUseToolTips"] = true;
}


	$tdataaudit_plan[".NCSearch"] = true;



$tdataaudit_plan[".shortTableName"] = "audit_plan";
$tdataaudit_plan[".nSecOptions"] = 0;
$tdataaudit_plan[".recsPerRowList"] = 1;
$tdataaudit_plan[".recsPerRowPrint"] = 1;
$tdataaudit_plan[".mainTableOwnerID"] = "";
$tdataaudit_plan[".moveNext"] = 1;
$tdataaudit_plan[".entityType"] = 0;

$tdataaudit_plan[".strOriginalTableName"] = "audit_plan";




$tdataaudit_plan[".showAddInPopup"] = true;

$tdataaudit_plan[".showEditInPopup"] = true;

$tdataaudit_plan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "edit_under_center";
$tdataaudit_plan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaudit_plan[".fieldsForRegister"] = array();

$tdataaudit_plan[".listAjax"] = false;

	$tdataaudit_plan[".audit"] = true;

	$tdataaudit_plan[".locking"] = false;

$tdataaudit_plan[".edit"] = true;
$tdataaudit_plan[".afterEditAction"] = 0;
$tdataaudit_plan[".closePopupAfterEdit"] = 1;
$tdataaudit_plan[".afterEditActionDetTable"] = "audit_form";

$tdataaudit_plan[".add"] = true;
$tdataaudit_plan[".afterAddAction"] = 0;
$tdataaudit_plan[".closePopupAfterAdd"] = 1;
$tdataaudit_plan[".afterAddActionDetTable"] = "audit_form";

$tdataaudit_plan[".list"] = true;


$tdataaudit_plan[".import"] = true;

$tdataaudit_plan[".exportTo"] = true;


$tdataaudit_plan[".delete"] = true;

$tdataaudit_plan[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataaudit_plan[".searchSaving"] = false;
//

$tdataaudit_plan[".showSearchPanel"] = true;
		$tdataaudit_plan[".flexibleSearch"] = true;

if (isMobile())
	$tdataaudit_plan[".isUseAjaxSuggest"] = false;
else
	$tdataaudit_plan[".isUseAjaxSuggest"] = true;

$tdataaudit_plan[".rowHighlite"] = true;


																				
$tdataaudit_plan[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaudit_plan[".isUseTimeForSearch"] = false;




$tdataaudit_plan[".detailsLinksOnList"] = "1";

$tdataaudit_plan[".allSearchFields"] = array();
$tdataaudit_plan[".filterFields"] = array();
$tdataaudit_plan[".requiredSearchFields"] = array();

$tdataaudit_plan[".allSearchFields"][] = "aTypeCode";
	$tdataaudit_plan[".allSearchFields"][] = "planID";
	$tdataaudit_plan[".allSearchFields"][] = "subTypeID";
	$tdataaudit_plan[".allSearchFields"][] = "aTitle";
	$tdataaudit_plan[".allSearchFields"][] = "organization";
	$tdataaudit_plan[".allSearchFields"][] = "procedureID";
	$tdataaudit_plan[".allSearchFields"][] = "aYear";
	$tdataaudit_plan[".allSearchFields"][] = "notes";
	$tdataaudit_plan[".allSearchFields"][] = "meeting";
	$tdataaudit_plan[".allSearchFields"][] = "jan";
	$tdataaudit_plan[".allSearchFields"][] = "feb";
	$tdataaudit_plan[".allSearchFields"][] = "mac";
	$tdataaudit_plan[".allSearchFields"][] = "apr";
	$tdataaudit_plan[".allSearchFields"][] = "may";
	$tdataaudit_plan[".allSearchFields"][] = "jun";
	$tdataaudit_plan[".allSearchFields"][] = "jul";
	$tdataaudit_plan[".allSearchFields"][] = "aug";
	$tdataaudit_plan[".allSearchFields"][] = "sep";
	$tdataaudit_plan[".allSearchFields"][] = "oct";
	$tdataaudit_plan[".allSearchFields"][] = "nov";
	$tdataaudit_plan[".allSearchFields"][] = "dece";
	
$tdataaudit_plan[".filterFields"][] = "aTypeCode";
$tdataaudit_plan[".filterFields"][] = "subTypeID";

$tdataaudit_plan[".googleLikeFields"] = array();
$tdataaudit_plan[".googleLikeFields"][] = "aTypeCode";
$tdataaudit_plan[".googleLikeFields"][] = "subTypeID";
$tdataaudit_plan[".googleLikeFields"][] = "aTitle";
$tdataaudit_plan[".googleLikeFields"][] = "aYear";
$tdataaudit_plan[".googleLikeFields"][] = "meeting";

$tdataaudit_plan[".panelSearchFields"] = array();
$tdataaudit_plan[".searchPanelOptions"] = array();
$tdataaudit_plan[".panelSearchFields"][] = "aTitle";
	$tdataaudit_plan[".panelSearchFields"][] = "organization";
	$tdataaudit_plan[".panelSearchFields"][] = "aYear";
	$tdataaudit_plan[".panelSearchFields"][] = "meeting";
	
$tdataaudit_plan[".advSearchFields"] = array();
$tdataaudit_plan[".advSearchFields"][] = "aTypeCode";
$tdataaudit_plan[".advSearchFields"][] = "planID";
$tdataaudit_plan[".advSearchFields"][] = "subTypeID";
$tdataaudit_plan[".advSearchFields"][] = "aTitle";
$tdataaudit_plan[".advSearchFields"][] = "organization";
$tdataaudit_plan[".advSearchFields"][] = "procedureID";
$tdataaudit_plan[".advSearchFields"][] = "aYear";
$tdataaudit_plan[".advSearchFields"][] = "notes";
$tdataaudit_plan[".advSearchFields"][] = "meeting";
$tdataaudit_plan[".advSearchFields"][] = "jan";
$tdataaudit_plan[".advSearchFields"][] = "feb";
$tdataaudit_plan[".advSearchFields"][] = "mac";
$tdataaudit_plan[".advSearchFields"][] = "apr";
$tdataaudit_plan[".advSearchFields"][] = "may";
$tdataaudit_plan[".advSearchFields"][] = "jun";
$tdataaudit_plan[".advSearchFields"][] = "jul";
$tdataaudit_plan[".advSearchFields"][] = "aug";
$tdataaudit_plan[".advSearchFields"][] = "sep";
$tdataaudit_plan[".advSearchFields"][] = "oct";
$tdataaudit_plan[".advSearchFields"][] = "nov";
$tdataaudit_plan[".advSearchFields"][] = "dece";

$tdataaudit_plan[".tableType"] = "list";

$tdataaudit_plan[".printerPageOrientation"] = 0;
$tdataaudit_plan[".nPrinterPageScale"] = 100;

$tdataaudit_plan[".nPrinterSplitRecords"] = 40;

$tdataaudit_plan[".nPrinterPDFSplitRecords"] = 40;



$tdataaudit_plan[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataaudit_plan[".pageSize"] = 20;

$tdataaudit_plan[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY aYear DESC, planID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaudit_plan[".strOrderBy"] = $tstrOrderBy;

$tdataaudit_plan[".orderindexes"] = array();
$tdataaudit_plan[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "aYear");
$tdataaudit_plan[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "planID");

$tdataaudit_plan[".sqlHead"] = "SELECT planID,  aTypeCode,  subTypeID,  aTitle,  aYear,  jan,  feb,  mac,  apr,  may,  jun,  jul,  aug,  sep,  oct,  nov,  dece,  procedureID,  notes,  `organization`,  meeting";
$tdataaudit_plan[".sqlFrom"] = "FROM audit_plan";
$tdataaudit_plan[".sqlWhereExpr"] = "";
$tdataaudit_plan[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "aTypeCode";
	$tabFields[] = "subTypeID";
	$tabFields[] = "aTitle";
	$tabFields[] = "organization";
	$tabFields[] = "aYear";
	$tabFields[] = "meeting";
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Step1",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "jan";
	$tabFields[] = "feb";
	$tabFields[] = "mac";
	$tabFields[] = "apr";
	$tabFields[] = "may";
	$tabFields[] = "jun";
	$tabFields[] = "jul";
	$tabFields[] = "aug";
	$tabFields[] = "sep";
	$tabFields[] = "oct";
	$tabFields[] = "nov";
	$tabFields[] = "dece";
$arrEditTabs[] = array('tabId'=>'Step2',
					   'tabName'=>"Step2",
					   'nType'=>'2',
					   'nOrder'=>8,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataaudit_plan[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "aTypeCode";
	$tabFields[] = "subTypeID";
	$tabFields[] = "aTitle";
	$tabFields[] = "organization";
	$tabFields[] = "aYear";
	$tabFields[] = "meeting";
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Step1",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "jan";
	$tabFields[] = "feb";
	$tabFields[] = "mac";
	$tabFields[] = "apr";
	$tabFields[] = "may";
	$tabFields[] = "jun";
	$tabFields[] = "jul";
	$tabFields[] = "aug";
	$tabFields[] = "sep";
	$tabFields[] = "oct";
	$tabFields[] = "nov";
	$tabFields[] = "dece";
$arrAddTabs[] = array('tabId'=>'Step2',
					  'tabName'=>"Step2",
					  'nType'=>'2',
					  'nOrder'=>9,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataaudit_plan[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Bulan1',
					   'tabName'=>"Bulan",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataaudit_plan[".arrViewTabs"] = $arrViewTabs;


$tdataaudit_plan[".addMultistep"] = true;

$tdataaudit_plan[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaudit_plan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaudit_plan[".arrGroupsPerPage"] = $arrGPP;

$tdataaudit_plan[".highlightSearchResults"] = true;

$tableKeysaudit_plan = array();
$tableKeysaudit_plan[] = "planID";
$tdataaudit_plan[".Keys"] = $tableKeysaudit_plan;

$tdataaudit_plan[".listFields"] = array();
$tdataaudit_plan[".listFields"][] = "aTypeCode";
$tdataaudit_plan[".listFields"][] = "subTypeID";
$tdataaudit_plan[".listFields"][] = "aTitle";
$tdataaudit_plan[".listFields"][] = "organization";
$tdataaudit_plan[".listFields"][] = "aYear";
$tdataaudit_plan[".listFields"][] = "meeting";
$tdataaudit_plan[".listFields"][] = "jan";
$tdataaudit_plan[".listFields"][] = "feb";
$tdataaudit_plan[".listFields"][] = "mac";
$tdataaudit_plan[".listFields"][] = "apr";
$tdataaudit_plan[".listFields"][] = "may";
$tdataaudit_plan[".listFields"][] = "jun";
$tdataaudit_plan[".listFields"][] = "jul";
$tdataaudit_plan[".listFields"][] = "aug";
$tdataaudit_plan[".listFields"][] = "sep";
$tdataaudit_plan[".listFields"][] = "oct";
$tdataaudit_plan[".listFields"][] = "nov";
$tdataaudit_plan[".listFields"][] = "dece";

$tdataaudit_plan[".hideMobileList"] = array();


$tdataaudit_plan[".viewFields"] = array();

$tdataaudit_plan[".addFields"] = array();
$tdataaudit_plan[".addFields"][] = "aTypeCode";
$tdataaudit_plan[".addFields"][] = "subTypeID";
$tdataaudit_plan[".addFields"][] = "aTitle";
$tdataaudit_plan[".addFields"][] = "organization";
$tdataaudit_plan[".addFields"][] = "aYear";
$tdataaudit_plan[".addFields"][] = "meeting";
$tdataaudit_plan[".addFields"][] = "jan";
$tdataaudit_plan[".addFields"][] = "feb";
$tdataaudit_plan[".addFields"][] = "mac";
$tdataaudit_plan[".addFields"][] = "apr";
$tdataaudit_plan[".addFields"][] = "may";
$tdataaudit_plan[".addFields"][] = "jun";
$tdataaudit_plan[".addFields"][] = "jul";
$tdataaudit_plan[".addFields"][] = "aug";
$tdataaudit_plan[".addFields"][] = "sep";
$tdataaudit_plan[".addFields"][] = "oct";
$tdataaudit_plan[".addFields"][] = "nov";
$tdataaudit_plan[".addFields"][] = "dece";

$tdataaudit_plan[".masterListFields"] = array();
$tdataaudit_plan[".masterListFields"][] = "aTypeCode";
$tdataaudit_plan[".masterListFields"][] = "subTypeID";
$tdataaudit_plan[".masterListFields"][] = "planID";
$tdataaudit_plan[".masterListFields"][] = "aTitle";
$tdataaudit_plan[".masterListFields"][] = "procedureID";
$tdataaudit_plan[".masterListFields"][] = "organization";
$tdataaudit_plan[".masterListFields"][] = "notes";
$tdataaudit_plan[".masterListFields"][] = "aYear";
$tdataaudit_plan[".masterListFields"][] = "meeting";
$tdataaudit_plan[".masterListFields"][] = "jan";
$tdataaudit_plan[".masterListFields"][] = "feb";
$tdataaudit_plan[".masterListFields"][] = "mac";
$tdataaudit_plan[".masterListFields"][] = "apr";
$tdataaudit_plan[".masterListFields"][] = "may";
$tdataaudit_plan[".masterListFields"][] = "jun";
$tdataaudit_plan[".masterListFields"][] = "jul";
$tdataaudit_plan[".masterListFields"][] = "aug";
$tdataaudit_plan[".masterListFields"][] = "sep";
$tdataaudit_plan[".masterListFields"][] = "oct";
$tdataaudit_plan[".masterListFields"][] = "nov";
$tdataaudit_plan[".masterListFields"][] = "dece";

$tdataaudit_plan[".inlineAddFields"] = array();

$tdataaudit_plan[".editFields"] = array();
$tdataaudit_plan[".editFields"][] = "aTypeCode";
$tdataaudit_plan[".editFields"][] = "subTypeID";
$tdataaudit_plan[".editFields"][] = "aTitle";
$tdataaudit_plan[".editFields"][] = "organization";
$tdataaudit_plan[".editFields"][] = "aYear";
$tdataaudit_plan[".editFields"][] = "meeting";
$tdataaudit_plan[".editFields"][] = "jan";
$tdataaudit_plan[".editFields"][] = "feb";
$tdataaudit_plan[".editFields"][] = "mac";
$tdataaudit_plan[".editFields"][] = "apr";
$tdataaudit_plan[".editFields"][] = "may";
$tdataaudit_plan[".editFields"][] = "jun";
$tdataaudit_plan[".editFields"][] = "jul";
$tdataaudit_plan[".editFields"][] = "aug";
$tdataaudit_plan[".editFields"][] = "sep";
$tdataaudit_plan[".editFields"][] = "oct";
$tdataaudit_plan[".editFields"][] = "nov";
$tdataaudit_plan[".editFields"][] = "dece";

$tdataaudit_plan[".inlineEditFields"] = array();

$tdataaudit_plan[".exportFields"] = array();
$tdataaudit_plan[".exportFields"][] = "aTypeCode";
$tdataaudit_plan[".exportFields"][] = "subTypeID";
$tdataaudit_plan[".exportFields"][] = "aTitle";
$tdataaudit_plan[".exportFields"][] = "organization";
$tdataaudit_plan[".exportFields"][] = "aYear";
$tdataaudit_plan[".exportFields"][] = "meeting";
$tdataaudit_plan[".exportFields"][] = "jan";
$tdataaudit_plan[".exportFields"][] = "feb";
$tdataaudit_plan[".exportFields"][] = "mac";
$tdataaudit_plan[".exportFields"][] = "apr";
$tdataaudit_plan[".exportFields"][] = "may";
$tdataaudit_plan[".exportFields"][] = "jun";
$tdataaudit_plan[".exportFields"][] = "jul";
$tdataaudit_plan[".exportFields"][] = "aug";
$tdataaudit_plan[".exportFields"][] = "sep";
$tdataaudit_plan[".exportFields"][] = "oct";
$tdataaudit_plan[".exportFields"][] = "nov";
$tdataaudit_plan[".exportFields"][] = "dece";

$tdataaudit_plan[".importFields"] = array();
$tdataaudit_plan[".importFields"][] = "aTypeCode";
$tdataaudit_plan[".importFields"][] = "subTypeID";
$tdataaudit_plan[".importFields"][] = "aTitle";
$tdataaudit_plan[".importFields"][] = "aYear";
$tdataaudit_plan[".importFields"][] = "jan";
$tdataaudit_plan[".importFields"][] = "feb";
$tdataaudit_plan[".importFields"][] = "mac";
$tdataaudit_plan[".importFields"][] = "apr";
$tdataaudit_plan[".importFields"][] = "may";
$tdataaudit_plan[".importFields"][] = "jun";
$tdataaudit_plan[".importFields"][] = "jul";
$tdataaudit_plan[".importFields"][] = "aug";
$tdataaudit_plan[".importFields"][] = "sep";
$tdataaudit_plan[".importFields"][] = "oct";
$tdataaudit_plan[".importFields"][] = "nov";
$tdataaudit_plan[".importFields"][] = "dece";
$tdataaudit_plan[".importFields"][] = "organization";
$tdataaudit_plan[".importFields"][] = "meeting";

$tdataaudit_plan[".printFields"] = array();

//	planID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "planID";
	$fdata["GoodName"] = "planID";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","planID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "planID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planID";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["planID"] = $fdata;
//	aTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aTypeCode";
	$fdata["GoodName"] = "aTypeCode";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","aTypeCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aTypeCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aTypeCode";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_audit_type";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "aTypeCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "subTypeID";

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "planID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

					$fdata["dependentFilterName"] = "subTypeID";
	$fdata["dependentFilters"] = array();
					$fdata["dependentFilters"][] = "subTypeID";
				;
;

	
	
//end of Filters settings


	$tdataaudit_plan["aTypeCode"] = $fdata;
//	subTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subTypeID";
	$fdata["GoodName"] = "subTypeID";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","subTypeID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "subTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subTypeID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_audit_subType";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "subTypeID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "subTypeName";

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "aTypeCode", "lookup" => "aTypeCode" );

	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "planID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["numberOfVisibleItems"] = 10;

			$fdata["parentFilterField"] = "aTypeCode";
	$fdata["parentFilters"] = array();
					$fdata["parentFilters"][] = "aTypeCode";
				;
;
	
	
	
//end of Filters settings


	$tdataaudit_plan["subTypeID"] = $fdata;
//	aTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aTitle";
	$fdata["GoodName"] = "aTitle";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","aTitle");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aTitle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aTitle";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



		$edata["IsRequired"] = true;

		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 153;
			$edata["nCols"] = 524;

	
	
		$edata["controlWidth"] = 500;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["aTitle"] = $fdata;
//	aYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "aYear";
	$fdata["GoodName"] = "aYear";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","aYear");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aYear";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["aYear"] = $fdata;
//	jan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jan";
	$fdata["GoodName"] = "jan";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","jan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["jan"] = $fdata;
//	feb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "feb";
	$fdata["GoodName"] = "feb";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","feb");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "feb";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "feb";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["feb"] = $fdata;
//	mac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mac";
	$fdata["GoodName"] = "mac";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","mac");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mac";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["mac"] = $fdata;
//	apr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "apr";
	$fdata["GoodName"] = "apr";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","apr");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "apr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apr";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["apr"] = $fdata;
//	may
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "may";
	$fdata["GoodName"] = "may";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","may");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "may";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "may";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["may"] = $fdata;
//	jun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "jun";
	$fdata["GoodName"] = "jun";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","jun");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jun";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["jun"] = $fdata;
//	jul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jul";
	$fdata["GoodName"] = "jul";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","jul");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jul";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jul";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["jul"] = $fdata;
//	aug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "aug";
	$fdata["GoodName"] = "aug";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","aug");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aug";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aug";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["aug"] = $fdata;
//	sep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sep";
	$fdata["GoodName"] = "sep";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","sep");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sep";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["sep"] = $fdata;
//	oct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "oct";
	$fdata["GoodName"] = "oct";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","oct");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "oct";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oct";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["oct"] = $fdata;
//	nov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nov";
	$fdata["GoodName"] = "nov";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","nov");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nov";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nov";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["nov"] = $fdata;
//	dece
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dece";
	$fdata["GoodName"] = "dece";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","dece");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dece";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dece";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["dece"] = $fdata;
//	procedureID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "procedureID";
	$fdata["GoodName"] = "procedureID";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","procedureID");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "procedureID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedureID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "procedure";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "procedureID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "procedure";

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

		$edata["SimpleAdd"] = true;


	
		$edata["Multiselect"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["procedureID"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","notes");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 535;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["notes"] = $fdata;
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","organization");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`organization`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["organization"] = $fdata;
//	meeting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "meeting";
	$fdata["GoodName"] = "meeting";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan","meeting");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meeting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meeting";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_plan["meeting"] = $fdata;


$tables_data["audit_plan"]=&$tdataaudit_plan;
$field_labels["audit_plan"] = &$fieldLabelsaudit_plan;
$fieldToolTips["audit_plan"] = &$fieldToolTipsaudit_plan;
$page_titles["audit_plan"] = &$pageTitlesaudit_plan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["audit_plan"] = array();
//	audit_form
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="audit_form";
		$detailsParam["dOriginalTable"] = "audit_form";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "audit_form";
	$detailsParam["dCaptionTable"] = GetTableCaption("audit_form");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "0";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["audit_plan"][$dIndex] = $detailsParam;

	
		$detailsTablesData["audit_plan"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["audit_plan"][$dIndex]["masterKeys"][]="planID";

				$detailsTablesData["audit_plan"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["audit_plan"][$dIndex]["detailKeys"][]="planID";

// tables which are master tables for current table (detail)
$masterTablesData["audit_plan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_audit_plan()
{
$proto6=array();
$proto6["m_strHead"] = "SELECT";
$proto6["m_strFieldList"] = "planID,  aTypeCode,  subTypeID,  aTitle,  aYear,  jan,  feb,  mac,  apr,  may,  jun,  jul,  aug,  sep,  oct,  nov,  dece,  procedureID,  notes,  `organization`,  meeting";
$proto6["m_strFrom"] = "FROM audit_plan";
$proto6["m_strWhere"] = "";
$proto6["m_strOrderBy"] = "ORDER BY aYear DESC, planID";
$proto6["m_strTail"] = "";
			$proto6["cipherer"] = null;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto6["m_where"] = $obj;
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto6["m_having"] = $obj;
$proto6["m_fieldlist"] = array();
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto11["m_sql"] = "planID";
$proto11["m_srcTableName"] = "audit_plan";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto6["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "aTypeCode",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto13["m_sql"] = "aTypeCode";
$proto13["m_srcTableName"] = "audit_plan";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto6["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "subTypeID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto15["m_sql"] = "subTypeID";
$proto15["m_srcTableName"] = "audit_plan";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto6["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "aTitle",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto17["m_sql"] = "aTitle";
$proto17["m_srcTableName"] = "audit_plan";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto6["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto19["m_sql"] = "aYear";
$proto19["m_srcTableName"] = "audit_plan";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto6["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "jan",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto21["m_sql"] = "jan";
$proto21["m_srcTableName"] = "audit_plan";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto6["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "feb",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto23["m_sql"] = "feb";
$proto23["m_srcTableName"] = "audit_plan";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto6["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "mac",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto25["m_sql"] = "mac";
$proto25["m_srcTableName"] = "audit_plan";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto6["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "apr",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto27["m_sql"] = "apr";
$proto27["m_srcTableName"] = "audit_plan";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto6["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "may",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto29["m_sql"] = "may";
$proto29["m_srcTableName"] = "audit_plan";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto6["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "jun",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto31["m_sql"] = "jun";
$proto31["m_srcTableName"] = "audit_plan";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto6["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "jul",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto33["m_sql"] = "jul";
$proto33["m_srcTableName"] = "audit_plan";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto6["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "aug",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto35["m_sql"] = "aug";
$proto35["m_srcTableName"] = "audit_plan";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto6["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "sep",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto37["m_sql"] = "sep";
$proto37["m_srcTableName"] = "audit_plan";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto6["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "oct",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto39["m_sql"] = "oct";
$proto39["m_srcTableName"] = "audit_plan";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto6["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "nov",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto41["m_sql"] = "nov";
$proto41["m_srcTableName"] = "audit_plan";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto6["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "dece",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto43["m_sql"] = "dece";
$proto43["m_srcTableName"] = "audit_plan";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto6["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "procedureID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto45["m_sql"] = "procedureID";
$proto45["m_srcTableName"] = "audit_plan";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto6["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto47["m_sql"] = "notes";
$proto47["m_srcTableName"] = "audit_plan";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto6["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto49["m_sql"] = "`organization`";
$proto49["m_srcTableName"] = "audit_plan";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto6["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "meeting",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto51["m_sql"] = "meeting";
$proto51["m_srcTableName"] = "audit_plan";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto6["m_fieldlist"][]=$obj;
$proto6["m_fromlist"] = array();
												$proto53=array();
$proto53["m_link"] = "SQLL_MAIN";
			$proto54=array();
$proto54["m_strName"] = "audit_plan";
$proto54["m_srcTableName"] = "audit_plan";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "planID";
$proto54["m_columns"][] = "aTypeCode";
$proto54["m_columns"][] = "subTypeID";
$proto54["m_columns"][] = "aTitle";
$proto54["m_columns"][] = "aYear";
$proto54["m_columns"][] = "jan";
$proto54["m_columns"][] = "feb";
$proto54["m_columns"][] = "mac";
$proto54["m_columns"][] = "apr";
$proto54["m_columns"][] = "may";
$proto54["m_columns"][] = "jun";
$proto54["m_columns"][] = "jul";
$proto54["m_columns"][] = "aug";
$proto54["m_columns"][] = "sep";
$proto54["m_columns"][] = "oct";
$proto54["m_columns"][] = "nov";
$proto54["m_columns"][] = "dece";
$proto54["m_columns"][] = "procedureID";
$proto54["m_columns"][] = "notes";
$proto54["m_columns"][] = "organization";
$proto54["m_columns"][] = "meeting";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "audit_plan";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "audit_plan";
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto6["m_fromlist"][]=$obj;
$proto6["m_groupby"] = array();
$proto6["m_orderby"] = array();
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto6["m_orderby"][]=$obj;					
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan"
));

$proto59["m_column"]=$obj;
$proto59["m_bAsc"] = 1;
$proto59["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto59);

$proto6["m_orderby"][]=$obj;					
$proto6["m_srcTableName"]="audit_plan";		
$obj = new SQLQuery($proto6);

	return $obj;
}
$queryData_audit_plan = createSqlQuery_audit_plan();



																					

$tdataaudit_plan[".sqlquery"] = $queryData_audit_plan;

$tableEvents["audit_plan"] = new eventsBase;
$tdataaudit_plan[".hasEvents"] = false;

?>