<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareport_kewangan = array();	
	$tdatareport_kewangan[".truncateText"] = true;
	$tdatareport_kewangan[".NumberOfChars"] = 80; 
	$tdatareport_kewangan[".ShortName"] = "report_kewangan";
	$tdatareport_kewangan[".OwnerID"] = "";
	$tdatareport_kewangan[".OriginalTable"] = "audit_form";

//	field labels
$fieldLabelsreport_kewangan = array();
$fieldToolTipsreport_kewangan = array();
$pageTitlesreport_kewangan = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsreport_kewangan["Malay"] = array();
	$fieldToolTipsreport_kewangan["Malay"] = array();
	$pageTitlesreport_kewangan["Malay"] = array();
	$fieldLabelsreport_kewangan["Malay"]["draf"] = "Draf";
	$fieldToolTipsreport_kewangan["Malay"]["draf"] = "";
	$fieldLabelsreport_kewangan["Malay"]["baru"] = "Baru";
	$fieldToolTipsreport_kewangan["Malay"]["baru"] = "";
	$fieldLabelsreport_kewangan["Malay"]["susulan"] = "Susulan";
	$fieldToolTipsreport_kewangan["Malay"]["susulan"] = "";
	$fieldLabelsreport_kewangan["Malay"]["selesai"] = "Selesai";
	$fieldToolTipsreport_kewangan["Malay"]["selesai"] = "";
	if (count($fieldToolTipsreport_kewangan["Malay"]))
		$tdatareport_kewangan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreport_kewangan[""] = array();
	$fieldToolTipsreport_kewangan[""] = array();
	$pageTitlesreport_kewangan[""] = array();
	$fieldLabelsreport_kewangan[""]["draf"] = "Draf";
	$fieldToolTipsreport_kewangan[""]["draf"] = "";
	$fieldLabelsreport_kewangan[""]["baru"] = "Baru";
	$fieldToolTipsreport_kewangan[""]["baru"] = "";
	$fieldLabelsreport_kewangan[""]["susulan"] = "Susulan";
	$fieldToolTipsreport_kewangan[""]["susulan"] = "";
	$fieldLabelsreport_kewangan[""]["selesai"] = "Selesai";
	$fieldToolTipsreport_kewangan[""]["selesai"] = "";
	if (count($fieldToolTipsreport_kewangan[""]))
		$tdatareport_kewangan[".isUseToolTips"] = true;
}
	
	
	$tdatareport_kewangan[".NCSearch"] = true;



$tdatareport_kewangan[".shortTableName"] = "report_kewangan";
$tdatareport_kewangan[".nSecOptions"] = 0;
$tdatareport_kewangan[".recsPerRowList"] = 1;
$tdatareport_kewangan[".recsPerRowPrint"] = 1;
$tdatareport_kewangan[".mainTableOwnerID"] = "";
$tdatareport_kewangan[".moveNext"] = 1;
$tdatareport_kewangan[".entityType"] = 1;

$tdatareport_kewangan[".strOriginalTableName"] = "audit_form";




$tdatareport_kewangan[".showAddInPopup"] = true;

$tdatareport_kewangan[".showEditInPopup"] = true;

$tdatareport_kewangan[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
			;
$popupPagesLayoutNames["edit"] = "add_under_center";
			;
$popupPagesLayoutNames["view"] = "add_under_center";
$tdatareport_kewangan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareport_kewangan[".fieldsForRegister"] = array();

$tdatareport_kewangan[".listAjax"] = false;

	$tdatareport_kewangan[".audit"] = true;

	$tdatareport_kewangan[".locking"] = false;


$tdatareport_kewangan[".add"] = true;
$tdatareport_kewangan[".afterAddAction"] = 1;
$tdatareport_kewangan[".closePopupAfterAdd"] = 1;
$tdatareport_kewangan[".afterAddActionDetTable"] = "";

$tdatareport_kewangan[".list"] = true;



$tdatareport_kewangan[".exportTo"] = true;



$tdatareport_kewangan[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareport_kewangan[".searchSaving"] = false;
//

$tdatareport_kewangan[".showSearchPanel"] = true;
		$tdatareport_kewangan[".flexibleSearch"] = true;		

if (isMobile())
	$tdatareport_kewangan[".isUseAjaxSuggest"] = false;
else 
	$tdatareport_kewangan[".isUseAjaxSuggest"] = true;

$tdatareport_kewangan[".rowHighlite"] = true;


																								
$tdatareport_kewangan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_kewangan[".isUseTimeForSearch"] = false;




$tdatareport_kewangan[".detailsLinksOnList"] = "1";

$tdatareport_kewangan[".allSearchFields"] = array();
$tdatareport_kewangan[".filterFields"] = array();
$tdatareport_kewangan[".requiredSearchFields"] = array();

$tdatareport_kewangan[".allSearchFields"][] = "draf";
	$tdatareport_kewangan[".allSearchFields"][] = "baru";
	$tdatareport_kewangan[".allSearchFields"][] = "susulan";
	$tdatareport_kewangan[".allSearchFields"][] = "selesai";
	

$tdatareport_kewangan[".googleLikeFields"] = array();
$tdatareport_kewangan[".googleLikeFields"][] = "draf";
$tdatareport_kewangan[".googleLikeFields"][] = "baru";
$tdatareport_kewangan[".googleLikeFields"][] = "susulan";
$tdatareport_kewangan[".googleLikeFields"][] = "selesai";


$tdatareport_kewangan[".advSearchFields"] = array();
$tdatareport_kewangan[".advSearchFields"][] = "draf";
$tdatareport_kewangan[".advSearchFields"][] = "baru";
$tdatareport_kewangan[".advSearchFields"][] = "susulan";
$tdatareport_kewangan[".advSearchFields"][] = "selesai";

$tdatareport_kewangan[".tableType"] = "list";

$tdatareport_kewangan[".printerPageOrientation"] = 0;
$tdatareport_kewangan[".nPrinterPageScale"] = 100;

$tdatareport_kewangan[".nPrinterSplitRecords"] = 40;

$tdatareport_kewangan[".nPrinterPDFSplitRecords"] = 40;



$tdatareport_kewangan[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatareport_kewangan[".pageSize"] = 20;

$tdatareport_kewangan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareport_kewangan[".strOrderBy"] = $tstrOrderBy;

$tdatareport_kewangan[".orderindexes"] = array();

$tdatareport_kewangan[".sqlHead"] = "SELECT coalesce(sum(audit_form.aStatus='Draf'), 0) AS draf,  coalesce(sum(audit_form.aStatus='Baru'), 0) AS baru,  coalesce(sum(audit_form.aStatus='Susulan'), 0) AS susulan,  coalesce(sum(audit_form.aStatus='Selesai'), 0) AS selesai";
$tdatareport_kewangan[".sqlFrom"] = "FROM audit_form";
$tdatareport_kewangan[".sqlWhereExpr"] = "aType ='KEWANGAN'";
$tdatareport_kewangan[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Step1 : Daftar Query",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Step31',
					   'tabName'=>"Step 2: Tempoh Peringatan",
					   'nType'=>'2',
					   'nOrder'=>15,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdatareport_kewangan[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Step1 : Daftar Query",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Step31',
					  'tabName'=>"Step 2: Tempoh Peringatan",
					  'nType'=>'2',
					  'nOrder'=>15,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdatareport_kewangan[".arrAddTabs"] = $arrAddTabs;

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
					   'tabName'=>"Peringatan",
					   'nType'=>'1',
					   'nOrder'=>16,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatareport_kewangan[".arrViewTabs"] = $arrViewTabs;

$tdatareport_kewangan[".addMultistep"] = true;

$tdatareport_kewangan[".editMultistep"] = true;



//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_kewangan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_kewangan[".arrGroupsPerPage"] = $arrGPP;


$tableKeysreport_kewangan = array();
$tdatareport_kewangan[".Keys"] = $tableKeysreport_kewangan;

$tdatareport_kewangan[".listFields"] = array();
$tdatareport_kewangan[".listFields"][] = "draf";
$tdatareport_kewangan[".listFields"][] = "baru";
$tdatareport_kewangan[".listFields"][] = "susulan";
$tdatareport_kewangan[".listFields"][] = "selesai";

$tdatareport_kewangan[".hideMobileList"] = array();


$tdatareport_kewangan[".viewFields"] = array();
$tdatareport_kewangan[".viewFields"][] = "draf";
$tdatareport_kewangan[".viewFields"][] = "baru";
$tdatareport_kewangan[".viewFields"][] = "susulan";
$tdatareport_kewangan[".viewFields"][] = "selesai";

$tdatareport_kewangan[".addFields"] = array();

$tdatareport_kewangan[".masterListFields"] = array();
$tdatareport_kewangan[".masterListFields"][] = "draf";
$tdatareport_kewangan[".masterListFields"][] = "baru";
$tdatareport_kewangan[".masterListFields"][] = "susulan";
$tdatareport_kewangan[".masterListFields"][] = "selesai";

$tdatareport_kewangan[".inlineAddFields"] = array();

$tdatareport_kewangan[".editFields"] = array();

$tdatareport_kewangan[".inlineEditFields"] = array();

$tdatareport_kewangan[".exportFields"] = array();
$tdatareport_kewangan[".exportFields"][] = "draf";
$tdatareport_kewangan[".exportFields"][] = "baru";
$tdatareport_kewangan[".exportFields"][] = "susulan";
$tdatareport_kewangan[".exportFields"][] = "selesai";

$tdatareport_kewangan[".importFields"] = array();
$tdatareport_kewangan[".importFields"][] = "draf";
$tdatareport_kewangan[".importFields"][] = "baru";
$tdatareport_kewangan[".importFields"][] = "susulan";
$tdatareport_kewangan[".importFields"][] = "selesai";

$tdatareport_kewangan[".printFields"] = array();
$tdatareport_kewangan[".printFields"][] = "draf";
$tdatareport_kewangan[".printFields"][] = "baru";
$tdatareport_kewangan[".printFields"][] = "susulan";
$tdatareport_kewangan[".printFields"][] = "selesai";

//	draf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "draf";
	$fdata["GoodName"] = "draf";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_kewangan","draf"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "draf"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coalesce(sum(audit_form.aStatus='Draf'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatareport_kewangan["draf"] = $fdata;
//	baru
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "baru";
	$fdata["GoodName"] = "baru";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_kewangan","baru"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "baru"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coalesce(sum(audit_form.aStatus='Baru'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatareport_kewangan["baru"] = $fdata;
//	susulan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "susulan";
	$fdata["GoodName"] = "susulan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_kewangan","susulan"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "susulan"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coalesce(sum(audit_form.aStatus='Susulan'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatareport_kewangan["susulan"] = $fdata;
//	selesai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "selesai";
	$fdata["GoodName"] = "selesai";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_kewangan","selesai"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "selesai"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coalesce(sum(audit_form.aStatus='Selesai'), 0)";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatareport_kewangan["selesai"] = $fdata;

	
$tables_data["report_kewangan"]=&$tdatareport_kewangan;
$field_labels["report_kewangan"] = &$fieldLabelsreport_kewangan;
$fieldToolTips["report_kewangan"] = &$fieldToolTipsreport_kewangan;
$page_titles["report_kewangan"] = &$pageTitlesreport_kewangan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["report_kewangan"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["report_kewangan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_report_kewangan()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "coalesce(sum(audit_form.aStatus='Draf'), 0) AS draf,  coalesce(sum(audit_form.aStatus='Baru'), 0) AS baru,  coalesce(sum(audit_form.aStatus='Susulan'), 0) AS susulan,  coalesce(sum(audit_form.aStatus='Selesai'), 0) AS selesai";
$proto3["m_strFrom"] = "FROM audit_form";
$proto3["m_strWhere"] = "aType ='KEWANGAN'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "aType ='KEWANGAN'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "aType",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "report_kewangan"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='KEWANGAN'";
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
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(audit_form.aStatus='Draf')"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "coalesce(sum(audit_form.aStatus='Draf'), 0)";
$proto8["m_srcTableName"] = "report_kewangan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "draf";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(audit_form.aStatus='Baru')"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "coalesce(sum(audit_form.aStatus='Baru'), 0)";
$proto12["m_srcTableName"] = "report_kewangan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "baru";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(audit_form.aStatus='Susulan')"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "coalesce(sum(audit_form.aStatus='Susulan'), 0)";
$proto16["m_srcTableName"] = "report_kewangan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "susulan";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(audit_form.aStatus='Selesai')"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "coalesce";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "coalesce(sum(audit_form.aStatus='Selesai'), 0)";
$proto20["m_srcTableName"] = "report_kewangan";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "selesai";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "audit_form";
$proto25["m_srcTableName"] = "report_kewangan";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "fid";
$proto25["m_columns"][] = "planID";
$proto25["m_columns"][] = "ref";
$proto25["m_columns"][] = "aDate";
$proto25["m_columns"][] = "dateCheck";
$proto25["m_columns"][] = "dateApprove";
$proto25["m_columns"][] = "dateSend";
$proto25["m_columns"][] = "aStatus";
$proto25["m_columns"][] = "aType";
$proto25["m_columns"][] = "elementID";
$proto25["m_columns"][] = "userID";
$proto25["m_columns"][] = "userCheck";
$proto25["m_columns"][] = "userAuditee";
$proto25["m_columns"][] = "userApprove";
$proto25["m_columns"][] = "attachment";
$proto25["m_columns"][] = "dateRemind";
$proto25["m_columns"][] = "dateRemind2";
$proto25["m_columns"][] = "dateRemind3";
$proto25["m_columns"][] = "dueDate";
$proto25["m_columns"][] = "dueDate2";
$proto25["m_columns"][] = "dueDate3";
$proto25["m_columns"][] = "repeatStatus";
$proto25["m_columns"][] = "repeatNo";
$proto25["m_columns"][] = "dateAnswer";
$proto25["m_columns"][] = "dateAnswer2";
$proto25["m_columns"][] = "dateAnswer3";
$proto25["m_columns"][] = "dateFollowUp";
$proto25["m_columns"][] = "dateFollowUp2";
$proto25["m_columns"][] = "dateFinish";
$proto25["m_columns"][] = "noteAmend";
$proto25["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "audit_form";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "report_kewangan";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="report_kewangan";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_report_kewangan = createSqlQuery_report_kewangan();


	
				
	
$tdatareport_kewangan[".sqlquery"] = $queryData_report_kewangan;

include_once(getabspath("include/report_kewangan_events.php"));
$tableEvents["report_kewangan"] = new eventclass_report_kewangan;
$tdatareport_kewangan[".hasEvents"] = true;

?>