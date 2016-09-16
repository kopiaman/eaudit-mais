<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareport_SKT = array();
	$tdatareport_SKT[".truncateText"] = true;
	$tdatareport_SKT[".NumberOfChars"] = 80;
	$tdatareport_SKT[".ShortName"] = "report_SKT";
	$tdatareport_SKT[".OwnerID"] = "";
	$tdatareport_SKT[".OriginalTable"] = "audit_plan";

//	field labels
$fieldLabelsreport_SKT = array();
$fieldToolTipsreport_SKT = array();
$pageTitlesreport_SKT = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsreport_SKT["Malay"] = array();
	$fieldToolTipsreport_SKT["Malay"] = array();
	$pageTitlesreport_SKT["Malay"] = array();
	$fieldLabelsreport_SKT["Malay"]["aYear"] = "Tahun";
	$fieldToolTipsreport_SKT["Malay"]["aYear"] = "";
	$fieldLabelsreport_SKT["Malay"]["planID"] = "Plan ID";
	$fieldToolTipsreport_SKT["Malay"]["planID"] = "";
	$fieldLabelsreport_SKT["Malay"]["orga"] = "Organisasi";
	$fieldToolTipsreport_SKT["Malay"]["orga"] = "";
	if (count($fieldToolTipsreport_SKT["Malay"]))
		$tdatareport_SKT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreport_SKT[""] = array();
	$fieldToolTipsreport_SKT[""] = array();
	$pageTitlesreport_SKT[""] = array();
	if (count($fieldToolTipsreport_SKT[""]))
		$tdatareport_SKT[".isUseToolTips"] = true;
}


	$tdatareport_SKT[".NCSearch"] = true;



$tdatareport_SKT[".shortTableName"] = "report_SKT";
$tdatareport_SKT[".nSecOptions"] = 0;
$tdatareport_SKT[".recsPerRowList"] = 1;
$tdatareport_SKT[".recsPerRowPrint"] = 1;
$tdatareport_SKT[".mainTableOwnerID"] = "";
$tdatareport_SKT[".moveNext"] = 1;
$tdatareport_SKT[".entityType"] = 1;

$tdatareport_SKT[".strOriginalTableName"] = "audit_plan";




$tdatareport_SKT[".showAddInPopup"] = true;

$tdatareport_SKT[".showEditInPopup"] = true;

$tdatareport_SKT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "edit_under_center";
			;
$popupPagesLayoutNames["edit"] = "edit_under_center";
$tdatareport_SKT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareport_SKT[".fieldsForRegister"] = array();

$tdatareport_SKT[".listAjax"] = false;

	$tdatareport_SKT[".audit"] = false;

	$tdatareport_SKT[".locking"] = false;



$tdatareport_SKT[".list"] = true;






$tdatareport_SKT[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareport_SKT[".searchSaving"] = false;
//

$tdatareport_SKT[".showSearchPanel"] = true;
		$tdatareport_SKT[".flexibleSearch"] = true;

if (isMobile())
	$tdatareport_SKT[".isUseAjaxSuggest"] = false;
else
	$tdatareport_SKT[".isUseAjaxSuggest"] = true;

$tdatareport_SKT[".rowHighlite"] = true;


																				
		$tdatareport_SKT[".isUsebuttonHandlers"] = true;

$tdatareport_SKT[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_SKT[".isUseTimeForSearch"] = false;




$tdatareport_SKT[".detailsLinksOnList"] = "1";

$tdatareport_SKT[".allSearchFields"] = array();
$tdatareport_SKT[".filterFields"] = array();
$tdatareport_SKT[".requiredSearchFields"] = array();



$tdatareport_SKT[".googleLikeFields"] = array();
$tdatareport_SKT[".googleLikeFields"][] = "aYear";
$tdatareport_SKT[".googleLikeFields"][] = "orga";

$tdatareport_SKT[".panelSearchFields"] = array();
$tdatareport_SKT[".searchPanelOptions"] = array();
$tdatareport_SKT[".panelSearchFields"][] = "aYear";
	

$tdatareport_SKT[".tableType"] = "list";

$tdatareport_SKT[".printerPageOrientation"] = 0;
$tdatareport_SKT[".nPrinterPageScale"] = 100;

$tdatareport_SKT[".nPrinterSplitRecords"] = 40;

$tdatareport_SKT[".nPrinterPDFSplitRecords"] = 40;



$tdatareport_SKT[".geocodingEnabled"] = false;







$tdatareport_SKT[".isResizeColumns"] = true;

$tdatareport_SKT[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatareport_SKT[".pageSize"] = 20;

$tdatareport_SKT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareport_SKT[".strOrderBy"] = $tstrOrderBy;

$tdatareport_SKT[".orderindexes"] = array();

$tdatareport_SKT[".sqlHead"] = "SELECT planID,  aYear,  planID AS orga";
$tdatareport_SKT[".sqlFrom"] = "FROM audit_plan";
$tdatareport_SKT[".sqlWhereExpr"] = "";
$tdatareport_SKT[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Step1",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Step2',
					   'tabName'=>"Step2",
					   'nType'=>'2',
					   'nOrder'=>8,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatareport_SKT[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Step1",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Step2',
					  'tabName'=>"Step2",
					  'nType'=>'2',
					  'nOrder'=>8,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatareport_SKT[".arrAddTabs"] = $arrAddTabs;

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
$tdatareport_SKT[".arrViewTabs"] = $arrViewTabs;


$tdatareport_SKT[".addMultistep"] = true;

$tdatareport_SKT[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_SKT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_SKT[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_SKT[".highlightSearchResults"] = true;

$tableKeysreport_SKT = array();
$tableKeysreport_SKT[] = "planID";
$tdatareport_SKT[".Keys"] = $tableKeysreport_SKT;

$tdatareport_SKT[".listFields"] = array();
$tdatareport_SKT[".listFields"][] = "aYear";
$tdatareport_SKT[".listFields"][] = "orga";

$tdatareport_SKT[".hideMobileList"] = array();


$tdatareport_SKT[".viewFields"] = array();

$tdatareport_SKT[".addFields"] = array();

$tdatareport_SKT[".masterListFields"] = array();
$tdatareport_SKT[".masterListFields"][] = "orga";
$tdatareport_SKT[".masterListFields"][] = "planID";
$tdatareport_SKT[".masterListFields"][] = "aYear";

$tdatareport_SKT[".inlineAddFields"] = array();

$tdatareport_SKT[".editFields"] = array();

$tdatareport_SKT[".inlineEditFields"] = array();

$tdatareport_SKT[".exportFields"] = array();

$tdatareport_SKT[".importFields"] = array();

$tdatareport_SKT[".printFields"] = array();

//	planID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "planID";
	$fdata["GoodName"] = "planID";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("report_SKT","planID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "planID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planID";

	
	
			
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








	$tdatareport_SKT["planID"] = $fdata;
//	aYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aYear";
	$fdata["GoodName"] = "aYear";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("report_SKT","aYear");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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








	$tdatareport_SKT["aYear"] = $fdata;
//	orga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "orga";
	$fdata["GoodName"] = "orga";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("report_SKT","orga");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "planID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planID";

	
	
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








	$tdatareport_SKT["orga"] = $fdata;


$tables_data["report_SKT"]=&$tdatareport_SKT;
$field_labels["report_SKT"] = &$fieldLabelsreport_SKT;
$fieldToolTips["report_SKT"] = &$fieldToolTipsreport_SKT;
$page_titles["report_SKT"] = &$pageTitlesreport_SKT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["report_SKT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["report_SKT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_report_SKT()
{
$proto2=array();
$proto2["m_strHead"] = "SELECT";
$proto2["m_strFieldList"] = "planID,  aYear,  planID AS orga";
$proto2["m_strFrom"] = "FROM audit_plan";
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
	"m_strName" => "planID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_SKT"
));

$proto7["m_sql"] = "planID";
$proto7["m_srcTableName"] = "report_SKT";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto2["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_SKT"
));

$proto9["m_sql"] = "aYear";
$proto9["m_srcTableName"] = "report_SKT";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto2["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_SKT"
));

$proto11["m_sql"] = "planID";
$proto11["m_srcTableName"] = "report_SKT";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "orga";
$obj = new SQLFieldListItem($proto11);

$proto2["m_fieldlist"][]=$obj;
$proto2["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "audit_plan";
$proto14["m_srcTableName"] = "report_SKT";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "planID";
$proto14["m_columns"][] = "aTypeCode";
$proto14["m_columns"][] = "subTypeID";
$proto14["m_columns"][] = "aTitle";
$proto14["m_columns"][] = "aYear";
$proto14["m_columns"][] = "jan";
$proto14["m_columns"][] = "feb";
$proto14["m_columns"][] = "mac";
$proto14["m_columns"][] = "apr";
$proto14["m_columns"][] = "may";
$proto14["m_columns"][] = "jun";
$proto14["m_columns"][] = "jul";
$proto14["m_columns"][] = "aug";
$proto14["m_columns"][] = "sep";
$proto14["m_columns"][] = "oct";
$proto14["m_columns"][] = "nov";
$proto14["m_columns"][] = "dece";
$proto14["m_columns"][] = "procedureID";
$proto14["m_columns"][] = "notes";
$proto14["m_columns"][] = "organization";
$proto14["m_columns"][] = "meeting";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "audit_plan";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "report_SKT";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto2["m_fromlist"][]=$obj;
$proto2["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_SKT"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto2["m_groupby"][]=$obj;
$proto2["m_orderby"] = array();
$proto2["m_srcTableName"]="report_SKT";		
$obj = new SQLQuery($proto2);

	return $obj;
}
$queryData_report_SKT = createSqlQuery_report_SKT();



			

$tdatareport_SKT[".sqlquery"] = $queryData_report_SKT;

include_once(getabspath("include/report_SKT_events.php"));
$tableEvents["report_SKT"] = new eventclass_report_SKT;
$tdatareport_SKT[".hasEvents"] = true;

?>