<?php
require_once(getabspath("classes/cipherer.php"));




$tdataall = array();
	$tdataall[".truncateText"] = true;
	$tdataall[".NumberOfChars"] = 80;
	$tdataall[".ShortName"] = "all";
	$tdataall[".OwnerID"] = "";
	$tdataall[".OriginalTable"] = "audit_form";

//	field labels
$fieldLabelsall = array();
$fieldToolTipsall = array();
$pageTitlesall = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsall["Malay"] = array();
	$fieldToolTipsall["Malay"] = array();
	$pageTitlesall["Malay"] = array();
	$fieldLabelsall["Malay"]["fid"] = "Fid";
	$fieldToolTipsall["Malay"]["fid"] = "";
	$fieldLabelsall["Malay"]["isu"] = "Isu";
	$fieldToolTipsall["Malay"]["isu"] = "";
	if (count($fieldToolTipsall["Malay"]))
		$tdataall[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsall[""] = array();
	$fieldToolTipsall[""] = array();
	$pageTitlesall[""] = array();
	if (count($fieldToolTipsall[""]))
		$tdataall[".isUseToolTips"] = true;
}


	$tdataall[".NCSearch"] = true;



$tdataall[".shortTableName"] = "all";
$tdataall[".nSecOptions"] = 0;
$tdataall[".recsPerRowList"] = 1;
$tdataall[".recsPerRowPrint"] = 1;
$tdataall[".mainTableOwnerID"] = "";
$tdataall[".moveNext"] = 1;
$tdataall[".entityType"] = 1;

$tdataall[".strOriginalTableName"] = "audit_form";




$tdataall[".showAddInPopup"] = false;

$tdataall[".showEditInPopup"] = false;

$tdataall[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataall[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataall[".fieldsForRegister"] = array();

$tdataall[".listAjax"] = false;

	$tdataall[".audit"] = false;

	$tdataall[".locking"] = false;


$tdataall[".add"] = true;
$tdataall[".afterAddAction"] = 1;
$tdataall[".closePopupAfterAdd"] = 1;
$tdataall[".afterAddActionDetTable"] = "";

$tdataall[".list"] = true;

$tdataall[".inlineAdd"] = true;





$tdataall[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataall[".searchSaving"] = false;
//

$tdataall[".showSearchPanel"] = true;
		$tdataall[".flexibleSearch"] = true;

if (isMobile())
	$tdataall[".isUseAjaxSuggest"] = false;
else
	$tdataall[".isUseAjaxSuggest"] = true;

$tdataall[".rowHighlite"] = true;


																				
$tdataall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataall[".isUseTimeForSearch"] = false;




$tdataall[".detailsLinksOnList"] = "1";

$tdataall[".allSearchFields"] = array();
$tdataall[".filterFields"] = array();
$tdataall[".requiredSearchFields"] = array();

$tdataall[".allSearchFields"][] = "isu";
	$tdataall[".allSearchFields"][] = "fid";
	

$tdataall[".googleLikeFields"] = array();
$tdataall[".googleLikeFields"][] = "isu";
$tdataall[".googleLikeFields"][] = "fid";


$tdataall[".advSearchFields"] = array();
$tdataall[".advSearchFields"][] = "isu";
$tdataall[".advSearchFields"][] = "fid";

$tdataall[".tableType"] = "list";

$tdataall[".printerPageOrientation"] = 0;
$tdataall[".nPrinterPageScale"] = 100;

$tdataall[".nPrinterSplitRecords"] = 40;

$tdataall[".nPrinterPDFSplitRecords"] = 40;



$tdataall[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataall[".pageSize"] = 20;

$tdataall[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataall[".strOrderBy"] = $tstrOrderBy;

$tdataall[".orderindexes"] = array();

$tdataall[".sqlHead"] = "SELECT COUNT(audit_info.inid) AS isu,  audit_form.fid";
$tdataall[".sqlFrom"] = "FROM audit_form  INNER JOIN audit_info ON audit_form.fid = audit_info.fid";
$tdataall[".sqlWhereExpr"] = "";
$tdataall[".sqlTail"] = "";

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
					   'nOrder'=>14,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataall[".arrEditTabs"] = $arrEditTabs;


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
					  'nOrder'=>14,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataall[".arrAddTabs"] = $arrAddTabs;

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
					   'nOrder'=>15,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataall[".arrViewTabs"] = $arrViewTabs;


$tdataall[".addMultistep"] = true;

$tdataall[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataall[".arrGroupsPerPage"] = $arrGPP;


$tableKeysall = array();
$tdataall[".Keys"] = $tableKeysall;

$tdataall[".listFields"] = array();
$tdataall[".listFields"][] = "isu";
$tdataall[".listFields"][] = "fid";

$tdataall[".hideMobileList"] = array();


$tdataall[".viewFields"] = array();
$tdataall[".viewFields"][] = "isu";
$tdataall[".viewFields"][] = "fid";

$tdataall[".addFields"] = array();

$tdataall[".masterListFields"] = array();
$tdataall[".masterListFields"][] = "isu";
$tdataall[".masterListFields"][] = "fid";

$tdataall[".inlineAddFields"] = array();

$tdataall[".editFields"] = array();

$tdataall[".inlineEditFields"] = array();

$tdataall[".exportFields"] = array();
$tdataall[".exportFields"][] = "isu";
$tdataall[".exportFields"][] = "fid";

$tdataall[".importFields"] = array();
$tdataall[".importFields"][] = "isu";
$tdataall[".importFields"][] = "fid";

$tdataall[".printFields"] = array();
$tdataall[".printFields"][] = "isu";
$tdataall[".printFields"][] = "fid";

//	isu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "isu";
	$fdata["GoodName"] = "isu";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("all","isu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "isu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(audit_info.inid)";

	
	
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




	$tdataall["isu"] = $fdata;
//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("all","fid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.fid";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataall["fid"] = $fdata;


$tables_data["all"]=&$tdataall;
$field_labels["all"] = &$fieldLabelsall;
$fieldToolTips["all"] = &$fieldToolTipsall;
$page_titles["all"] = &$pageTitlesall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(audit_info.inid) AS isu,  audit_form.fid";
$proto0["m_strFrom"] = "FROM audit_form  INNER JOIN audit_info ON audit_form.fid = audit_info.fid";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_COUNT";
$proto6["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "inid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "all"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "COUNT(audit_info.inid)";
$proto5["m_srcTableName"] = "all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "isu";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "all"
));

$proto8["m_sql"] = "audit_form.fid";
$proto8["m_srcTableName"] = "all";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "audit_form";
$proto11["m_srcTableName"] = "all";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "fid";
$proto11["m_columns"][] = "planID";
$proto11["m_columns"][] = "ref";
$proto11["m_columns"][] = "aDate";
$proto11["m_columns"][] = "dateCheck";
$proto11["m_columns"][] = "dateApprove";
$proto11["m_columns"][] = "dateSend";
$proto11["m_columns"][] = "aStatus";
$proto11["m_columns"][] = "aTypeCode";
$proto11["m_columns"][] = "aElementID";
$proto11["m_columns"][] = "userID";
$proto11["m_columns"][] = "userCheck";
$proto11["m_columns"][] = "userAuditee";
$proto11["m_columns"][] = "userApprove";
$proto11["m_columns"][] = "attachment";
$proto11["m_columns"][] = "dateRemind";
$proto11["m_columns"][] = "dateRemind2";
$proto11["m_columns"][] = "dateRemind3";
$proto11["m_columns"][] = "dueDate";
$proto11["m_columns"][] = "dueDate2";
$proto11["m_columns"][] = "dueDate3";
$proto11["m_columns"][] = "repeatStatus";
$proto11["m_columns"][] = "repeatNo";
$proto11["m_columns"][] = "dateAnswer";
$proto11["m_columns"][] = "dateAnswer2";
$proto11["m_columns"][] = "dateAnswer3";
$proto11["m_columns"][] = "dateFollowUp";
$proto11["m_columns"][] = "dateFollowUp2";
$proto11["m_columns"][] = "dateFinish";
$proto11["m_columns"][] = "noteAmend";
$proto11["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "audit_form";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "all";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
												$proto14=array();
$proto14["m_link"] = "SQLL_INNERJOIN";
			$proto15=array();
$proto15["m_strName"] = "audit_info";
$proto15["m_srcTableName"] = "all";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "inid";
$proto15["m_columns"][] = "fid";
$proto15["m_columns"][] = "finding";
$proto15["m_columns"][] = "refyID";
$proto15["m_columns"][] = "suggest";
$proto15["m_columns"][] = "answer";
$proto15["m_columns"][] = "answer2";
$proto15["m_columns"][] = "answer3";
$proto15["m_columns"][] = "iStatus";
$proto15["m_columns"][] = "attachment";
$proto15["m_columns"][] = "reply_attachment";
$proto15["m_columns"][] = "reply_attachment2";
$proto15["m_columns"][] = "reply_attachment3";
$proto15["m_columns"][] = "noteAmend";
$proto15["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN audit_info ON audit_form.fid = audit_info.fid";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "all";
$proto16=array();
$proto16["m_sql"] = "audit_form.fid = audit_info.fid";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "all"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= audit_info.fid";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_all = createSqlQuery_all();



		

$tdataall[".sqlquery"] = $queryData_all;

$tableEvents["all"] = new eventsBase;
$tdataall[".hasEvents"] = false;

?>