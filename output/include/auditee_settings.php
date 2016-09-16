<?php
require_once(getabspath("classes/cipherer.php"));




$tdataauditee = array();
	$tdataauditee[".truncateText"] = true;
	$tdataauditee[".NumberOfChars"] = 80;
	$tdataauditee[".ShortName"] = "auditee";
	$tdataauditee[".OwnerID"] = "";
	$tdataauditee[".OriginalTable"] = "auditee";

//	field labels
$fieldLabelsauditee = array();
$fieldToolTipsauditee = array();
$pageTitlesauditee = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsauditee["Malay"] = array();
	$fieldToolTipsauditee["Malay"] = array();
	$pageTitlesauditee["Malay"] = array();
	$fieldLabelsauditee["Malay"]["aid"] = "Aid";
	$fieldToolTipsauditee["Malay"]["aid"] = "";
	$fieldLabelsauditee["Malay"]["fullname"] = "Nama Penuh";
	$fieldToolTipsauditee["Malay"]["fullname"] = "";
	$fieldLabelsauditee["Malay"]["umail"] = "Email";
	$fieldToolTipsauditee["Malay"]["umail"] = "";
	$fieldLabelsauditee["Malay"]["tel"] = "Tel";
	$fieldToolTipsauditee["Malay"]["tel"] = "";
	$fieldLabelsauditee["Malay"]["sector"] = "Sektor";
	$fieldToolTipsauditee["Malay"]["sector"] = "";
	$fieldLabelsauditee["Malay"]["department"] = "Bahagian";
	$fieldToolTipsauditee["Malay"]["department"] = "";
	$fieldLabelsauditee["Malay"]["paid"] = "PAID";
	$fieldToolTipsauditee["Malay"]["paid"] = "";
	$fieldLabelsauditee["Malay"]["agency"] = "Agensi";
	$fieldToolTipsauditee["Malay"]["agency"] = "";
	$fieldLabelsauditee["Malay"]["pos"] = "Jawatan";
	$fieldToolTipsauditee["Malay"]["pos"] = "";
	if (count($fieldToolTipsauditee["Malay"]))
		$tdataauditee[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsauditee[""] = array();
	$fieldToolTipsauditee[""] = array();
	$pageTitlesauditee[""] = array();
	if (count($fieldToolTipsauditee[""]))
		$tdataauditee[".isUseToolTips"] = true;
}


	$tdataauditee[".NCSearch"] = true;



$tdataauditee[".shortTableName"] = "auditee";
$tdataauditee[".nSecOptions"] = 0;
$tdataauditee[".recsPerRowList"] = 1;
$tdataauditee[".recsPerRowPrint"] = 1;
$tdataauditee[".mainTableOwnerID"] = "";
$tdataauditee[".moveNext"] = 1;
$tdataauditee[".entityType"] = 0;

$tdataauditee[".strOriginalTableName"] = "auditee";




$tdataauditee[".showAddInPopup"] = true;

$tdataauditee[".showEditInPopup"] = true;

$tdataauditee[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "under_center2";
			;
$popupPagesLayoutNames["view"] = "under_center2";
$tdataauditee[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataauditee[".fieldsForRegister"] = array();

$tdataauditee[".listAjax"] = false;

	$tdataauditee[".audit"] = true;

	$tdataauditee[".locking"] = false;

$tdataauditee[".edit"] = true;
$tdataauditee[".afterEditAction"] = 1;
$tdataauditee[".closePopupAfterEdit"] = 1;
$tdataauditee[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataauditee[".add"] = true;
$tdataauditee[".afterAddAction"] = 1;
$tdataauditee[".closePopupAfterAdd"] = 1;
$tdataauditee[".afterAddActionDetTable"] = "";

$tdataauditee[".list"] = true;

$tdataauditee[".inlineAdd"] = true;




$tdataauditee[".delete"] = true;

$tdataauditee[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataauditee[".searchSaving"] = false;
//

$tdataauditee[".showSearchPanel"] = true;
	
if (isMobile())
	$tdataauditee[".isUseAjaxSuggest"] = false;
else
	$tdataauditee[".isUseAjaxSuggest"] = true;

$tdataauditee[".rowHighlite"] = true;


																				
$tdataauditee[".addPageEvents"] = false;

// use timepicker for search panel
$tdataauditee[".isUseTimeForSearch"] = false;





$tdataauditee[".allSearchFields"] = array();
$tdataauditee[".filterFields"] = array();
$tdataauditee[".requiredSearchFields"] = array();

$tdataauditee[".allSearchFields"][] = "aid";
	$tdataauditee[".allSearchFields"][] = "fullname";
	$tdataauditee[".allSearchFields"][] = "umail";
	$tdataauditee[".allSearchFields"][] = "tel";
	$tdataauditee[".allSearchFields"][] = "pos";
	$tdataauditee[".allSearchFields"][] = "sector";
	$tdataauditee[".allSearchFields"][] = "department";
	$tdataauditee[".allSearchFields"][] = "paid";
	$tdataauditee[".allSearchFields"][] = "agency";
	

$tdataauditee[".googleLikeFields"] = array();
$tdataauditee[".googleLikeFields"][] = "pos";

$tdataauditee[".panelSearchFields"] = array();
$tdataauditee[".searchPanelOptions"] = array();
$tdataauditee[".panelSearchFields"][] = "fullname";
		$tdataauditee[".searchPanelOptions"]["fullname"] = "";
$tdataauditee[".panelSearchFields"][] = "sector";
		$tdataauditee[".searchPanelOptions"]["sector"] = "";
$tdataauditee[".panelSearchFields"][] = "department";
		$tdataauditee[".searchPanelOptions"]["department"] = "";
$tdataauditee[".panelSearchFields"][] = "paid";
		$tdataauditee[".searchPanelOptions"]["paid"] = "Equals";
$tdataauditee[".panelSearchFields"][] = "agency";
		$tdataauditee[".searchPanelOptions"]["agency"] = "Equals";

$tdataauditee[".advSearchFields"] = array();
$tdataauditee[".advSearchFields"][] = "fullname";
$tdataauditee[".advSearchFields"][] = "pos";
$tdataauditee[".advSearchFields"][] = "sector";
$tdataauditee[".advSearchFields"][] = "department";
$tdataauditee[".advSearchFields"][] = "paid";
$tdataauditee[".advSearchFields"][] = "agency";

$tdataauditee[".tableType"] = "list";

$tdataauditee[".printerPageOrientation"] = 0;
$tdataauditee[".nPrinterPageScale"] = 100;

$tdataauditee[".nPrinterSplitRecords"] = 40;

$tdataauditee[".nPrinterPDFSplitRecords"] = 40;



$tdataauditee[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataauditee[".pageSize"] = 20;

$tdataauditee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataauditee[".strOrderBy"] = $tstrOrderBy;

$tdataauditee[".orderindexes"] = array();

$tdataauditee[".sqlHead"] = "SELECT aid,  	fullname,  	umail,  	tel,  	sector,  	department,  	paid,  	agency,  	pos";
$tdataauditee[".sqlFrom"] = "FROM auditee";
$tdataauditee[".sqlWhereExpr"] = "";
$tdataauditee[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataauditee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauditee[".arrGroupsPerPage"] = $arrGPP;


$tableKeysauditee = array();
$tableKeysauditee[] = "aid";
$tdataauditee[".Keys"] = $tableKeysauditee;

$tdataauditee[".listFields"] = array();
$tdataauditee[".listFields"][] = "fullname";
$tdataauditee[".listFields"][] = "umail";
$tdataauditee[".listFields"][] = "tel";
$tdataauditee[".listFields"][] = "pos";
$tdataauditee[".listFields"][] = "sector";
$tdataauditee[".listFields"][] = "department";
$tdataauditee[".listFields"][] = "paid";
$tdataauditee[".listFields"][] = "agency";

$tdataauditee[".hideMobileList"] = array();


$tdataauditee[".viewFields"] = array();

$tdataauditee[".addFields"] = array();
$tdataauditee[".addFields"][] = "fullname";
$tdataauditee[".addFields"][] = "umail";
$tdataauditee[".addFields"][] = "tel";
$tdataauditee[".addFields"][] = "pos";
$tdataauditee[".addFields"][] = "sector";
$tdataauditee[".addFields"][] = "department";
$tdataauditee[".addFields"][] = "paid";
$tdataauditee[".addFields"][] = "agency";

$tdataauditee[".masterListFields"] = array();
$tdataauditee[".masterListFields"][] = "aid";
$tdataauditee[".masterListFields"][] = "fullname";
$tdataauditee[".masterListFields"][] = "umail";
$tdataauditee[".masterListFields"][] = "tel";
$tdataauditee[".masterListFields"][] = "pos";
$tdataauditee[".masterListFields"][] = "sector";
$tdataauditee[".masterListFields"][] = "department";
$tdataauditee[".masterListFields"][] = "paid";
$tdataauditee[".masterListFields"][] = "agency";

$tdataauditee[".inlineAddFields"] = array();
$tdataauditee[".inlineAddFields"][] = "fullname";
$tdataauditee[".inlineAddFields"][] = "umail";
$tdataauditee[".inlineAddFields"][] = "tel";
$tdataauditee[".inlineAddFields"][] = "pos";
$tdataauditee[".inlineAddFields"][] = "sector";
$tdataauditee[".inlineAddFields"][] = "department";
$tdataauditee[".inlineAddFields"][] = "paid";
$tdataauditee[".inlineAddFields"][] = "agency";

$tdataauditee[".editFields"] = array();
$tdataauditee[".editFields"][] = "fullname";
$tdataauditee[".editFields"][] = "umail";
$tdataauditee[".editFields"][] = "tel";
$tdataauditee[".editFields"][] = "pos";
$tdataauditee[".editFields"][] = "sector";
$tdataauditee[".editFields"][] = "department";
$tdataauditee[".editFields"][] = "paid";
$tdataauditee[".editFields"][] = "agency";

$tdataauditee[".inlineEditFields"] = array();

$tdataauditee[".exportFields"] = array();

$tdataauditee[".importFields"] = array();

$tdataauditee[".printFields"] = array();

//	aid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aid";
	$fdata["GoodName"] = "aid";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","aid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "aid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aid";

	
	
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




	$tdataauditee["aid"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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

		$edata["controlWidth"] = 346;

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
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdataauditee["fullname"] = $fdata;
//	umail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "umail";
	$fdata["GoodName"] = "umail";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","umail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "umail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "umail";

	
	
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

		$edata["controlWidth"] = 346;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Email %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataauditee["umail"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel";

	
	
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




	$tdataauditee["tel"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","sector");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_mais_orga";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "sector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sector";

	
	$edata["LookupOrderBy"] = "sector";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "department";

	
	
		$edata["SelectSize"] = 1;
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_mais_orga";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "sector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sector";

	
	$edata["LookupOrderBy"] = "mid";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "department";

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_mais_orga";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "sector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sector";

	
	$edata["LookupOrderBy"] = "sector";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "department";

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdataauditee["sector"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","department");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department";

	
	
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
	$edata["LookupTable"] = "set_mais_orga";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "department";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "department";

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "sector", "lookup" => "sector" );

	
	

	
	
		$edata["SelectSize"] = 1;
	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdataauditee["department"] = $fdata;
//	paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paid";
	$fdata["GoodName"] = "paid";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","paid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "paid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paid";

	
	
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
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataauditee["paid"] = $fdata;
//	agency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "agency";
	$fdata["GoodName"] = "agency";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","agency");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "agency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agency";

	
	
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
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataauditee["agency"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("auditee","pos");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "pos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos";

	
	
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

		$edata["controlWidth"] = 336;

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




	$tdataauditee["pos"] = $fdata;


$tables_data["auditee"]=&$tdataauditee;
$field_labels["auditee"] = &$fieldLabelsauditee;
$fieldToolTips["auditee"] = &$fieldToolTipsauditee;
$page_titles["auditee"] = &$pageTitlesauditee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["auditee"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["auditee"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_auditee()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "aid,  	fullname,  	umail,  	tel,  	sector,  	department,  	paid,  	agency,  	pos";
$proto3["m_strFrom"] = "FROM auditee";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto3["m_where"] = $obj;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "aid",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto8["m_sql"] = "aid";
$proto8["m_srcTableName"] = "auditee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto10["m_sql"] = "fullname";
$proto10["m_srcTableName"] = "auditee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "umail",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto12["m_sql"] = "umail";
$proto12["m_srcTableName"] = "auditee";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto14["m_sql"] = "tel";
$proto14["m_srcTableName"] = "auditee";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto16["m_sql"] = "sector";
$proto16["m_srcTableName"] = "auditee";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto18["m_sql"] = "department";
$proto18["m_srcTableName"] = "auditee";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "paid",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto20["m_sql"] = "paid";
$proto20["m_srcTableName"] = "auditee";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "agency",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto22["m_sql"] = "agency";
$proto22["m_srcTableName"] = "auditee";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pos",
	"m_strTable" => "auditee",
	"m_srcTableName" => "auditee"
));

$proto24["m_sql"] = "pos";
$proto24["m_srcTableName"] = "auditee";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "auditee";
$proto27["m_srcTableName"] = "auditee";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "aid";
$proto27["m_columns"][] = "fullname";
$proto27["m_columns"][] = "umail";
$proto27["m_columns"][] = "tel";
$proto27["m_columns"][] = "sector";
$proto27["m_columns"][] = "department";
$proto27["m_columns"][] = "paid";
$proto27["m_columns"][] = "agency";
$proto27["m_columns"][] = "pos";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "auditee";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "auditee";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="auditee";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_auditee = createSqlQuery_auditee();



									

$tdataauditee[".sqlquery"] = $queryData_auditee;

$tableEvents["auditee"] = new eventsBase;
$tdataauditee[".hasEvents"] = false;

?>