<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareport_audit_plan = array();	
	$tdatareport_audit_plan[".truncateText"] = true;
	$tdatareport_audit_plan[".NumberOfChars"] = 80; 
	$tdatareport_audit_plan[".ShortName"] = "report_audit_plan";
	$tdatareport_audit_plan[".OwnerID"] = "";
	$tdatareport_audit_plan[".OriginalTable"] = "website";

//	field labels
$fieldLabelsreport_audit_plan = array();
$fieldToolTipsreport_audit_plan = array();
$pageTitlesreport_audit_plan = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsreport_audit_plan["Malay"] = array();
	$fieldToolTipsreport_audit_plan["Malay"] = array();
	$pageTitlesreport_audit_plan["Malay"] = array();
	$fieldLabelsreport_audit_plan["Malay"]["aType"] = "A Type";
	$fieldToolTipsreport_audit_plan["Malay"]["aType"] = "";
	$fieldLabelsreport_audit_plan["Malay"]["aYear"] = "A Year";
	$fieldToolTipsreport_audit_plan["Malay"]["aYear"] = "";
	$fieldLabelsreport_audit_plan["Malay"]["noPlan"] = "No Plan";
	$fieldToolTipsreport_audit_plan["Malay"]["noPlan"] = "";
	if (count($fieldToolTipsreport_audit_plan["Malay"]))
		$tdatareport_audit_plan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreport_audit_plan[""] = array();
	$fieldToolTipsreport_audit_plan[""] = array();
	$pageTitlesreport_audit_plan[""] = array();
	$fieldLabelsreport_audit_plan[""]["aType"] = "A Type";
	$fieldToolTipsreport_audit_plan[""]["aType"] = "";
	$fieldLabelsreport_audit_plan[""]["aYear"] = "A Year";
	$fieldToolTipsreport_audit_plan[""]["aYear"] = "";
	$fieldLabelsreport_audit_plan[""]["noPlan"] = "No Plan";
	$fieldToolTipsreport_audit_plan[""]["noPlan"] = "";
	if (count($fieldToolTipsreport_audit_plan[""]))
		$tdatareport_audit_plan[".isUseToolTips"] = true;
}
	
	
	$tdatareport_audit_plan[".NCSearch"] = true;



$tdatareport_audit_plan[".shortTableName"] = "report_audit_plan";
$tdatareport_audit_plan[".nSecOptions"] = 0;
$tdatareport_audit_plan[".recsPerRowList"] = 1;
$tdatareport_audit_plan[".recsPerRowPrint"] = 1;
$tdatareport_audit_plan[".mainTableOwnerID"] = "";
$tdatareport_audit_plan[".moveNext"] = 1;
$tdatareport_audit_plan[".entityType"] = 1;

$tdatareport_audit_plan[".strOriginalTableName"] = "website";




$tdatareport_audit_plan[".showAddInPopup"] = true;

$tdatareport_audit_plan[".showEditInPopup"] = true;

$tdatareport_audit_plan[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "edit_under_center";
			;
$popupPagesLayoutNames["edit"] = "edit_under_center";
			;
$popupPagesLayoutNames["view"] = "edit_under_center";
$tdatareport_audit_plan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareport_audit_plan[".fieldsForRegister"] = array();

$tdatareport_audit_plan[".listAjax"] = false;

	$tdatareport_audit_plan[".audit"] = false;

	$tdatareport_audit_plan[".locking"] = false;



$tdatareport_audit_plan[".list"] = true;






$tdatareport_audit_plan[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareport_audit_plan[".searchSaving"] = false;
//

$tdatareport_audit_plan[".showSearchPanel"] = true;
		$tdatareport_audit_plan[".flexibleSearch"] = true;		

if (isMobile())
	$tdatareport_audit_plan[".isUseAjaxSuggest"] = false;
else 
	$tdatareport_audit_plan[".isUseAjaxSuggest"] = true;

$tdatareport_audit_plan[".rowHighlite"] = true;


																		
$tdatareport_audit_plan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_audit_plan[".isUseTimeForSearch"] = false;





$tdatareport_audit_plan[".allSearchFields"] = array();
$tdatareport_audit_plan[".filterFields"] = array();
$tdatareport_audit_plan[".requiredSearchFields"] = array();






$tdatareport_audit_plan[".tableType"] = "list";

$tdatareport_audit_plan[".printerPageOrientation"] = 0;
$tdatareport_audit_plan[".nPrinterPageScale"] = 100;

$tdatareport_audit_plan[".nPrinterSplitRecords"] = 40;

$tdatareport_audit_plan[".nPrinterPDFSplitRecords"] = 40;



$tdatareport_audit_plan[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatareport_audit_plan[".pageSize"] = 4;

$tdatareport_audit_plan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareport_audit_plan[".strOrderBy"] = $tstrOrderBy;

$tdatareport_audit_plan[".orderindexes"] = array();

$tdatareport_audit_plan[".sqlHead"] = "SELECT aType,  aYear,  COUNT(planID) AS noPlan";
$tdatareport_audit_plan[".sqlFrom"] = "FROM audit_plan";
$tdatareport_audit_plan[".sqlWhereExpr"] = "";
$tdatareport_audit_plan[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_audit_plan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_audit_plan[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_audit_plan[".highlightSearchResults"] = true;

$tableKeysreport_audit_plan = array();
$tdatareport_audit_plan[".Keys"] = $tableKeysreport_audit_plan;

$tdatareport_audit_plan[".listFields"] = array();
$tdatareport_audit_plan[".listFields"][] = "aType";
$tdatareport_audit_plan[".listFields"][] = "aYear";
$tdatareport_audit_plan[".listFields"][] = "noPlan";

$tdatareport_audit_plan[".hideMobileList"] = array();


$tdatareport_audit_plan[".viewFields"] = array();

$tdatareport_audit_plan[".addFields"] = array();

$tdatareport_audit_plan[".masterListFields"] = array();
$tdatareport_audit_plan[".masterListFields"][] = "aType";
$tdatareport_audit_plan[".masterListFields"][] = "aYear";
$tdatareport_audit_plan[".masterListFields"][] = "noPlan";

$tdatareport_audit_plan[".inlineAddFields"] = array();

$tdatareport_audit_plan[".editFields"] = array();

$tdatareport_audit_plan[".inlineEditFields"] = array();

$tdatareport_audit_plan[".exportFields"] = array();

$tdatareport_audit_plan[".importFields"] = array();

$tdatareport_audit_plan[".printFields"] = array();

//	aType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aType";
	$fdata["GoodName"] = "aType";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("report_audit_plan","aType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "aType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aType";
	
		
		
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
	
	
	
	

	

	
	$tdatareport_audit_plan["aType"] = $fdata;
//	aYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aYear";
	$fdata["GoodName"] = "aYear";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("report_audit_plan","aYear"); 
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
	
	
	
	

	

	
	$tdatareport_audit_plan["aYear"] = $fdata;
//	noPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "noPlan";
	$fdata["GoodName"] = "noPlan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_audit_plan","noPlan"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "noPlan"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(planID)";
	
		
		
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
	
	
	
	

	

	
	$tdatareport_audit_plan["noPlan"] = $fdata;

	
$tables_data["report_audit_plan"]=&$tdatareport_audit_plan;
$field_labels["report_audit_plan"] = &$fieldLabelsreport_audit_plan;
$fieldToolTips["report_audit_plan"] = &$fieldToolTipsreport_audit_plan;
$page_titles["report_audit_plan"] = &$pageTitlesreport_audit_plan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["report_audit_plan"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["report_audit_plan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_report_audit_plan()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "aType,  aYear,  COUNT(planID) AS noPlan";
$proto3["m_strFrom"] = "FROM audit_plan";
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
	"m_strName" => "aType",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_audit_plan"
));

$proto8["m_sql"] = "aType";
$proto8["m_srcTableName"] = "report_audit_plan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_audit_plan"
));

$proto10["m_sql"] = "aYear";
$proto10["m_srcTableName"] = "report_audit_plan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_audit_plan"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(planID)";
$proto12["m_srcTableName"] = "report_audit_plan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "noPlan";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "audit_plan";
$proto16["m_srcTableName"] = "report_audit_plan";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "planID";
$proto16["m_columns"][] = "aType";
$proto16["m_columns"][] = "aTitle";
$proto16["m_columns"][] = "aYear";
$proto16["m_columns"][] = "jan";
$proto16["m_columns"][] = "feb";
$proto16["m_columns"][] = "mac";
$proto16["m_columns"][] = "apr";
$proto16["m_columns"][] = "may";
$proto16["m_columns"][] = "jun";
$proto16["m_columns"][] = "jul";
$proto16["m_columns"][] = "aug";
$proto16["m_columns"][] = "sep";
$proto16["m_columns"][] = "oct";
$proto16["m_columns"][] = "nov";
$proto16["m_columns"][] = "dece";
$proto16["m_columns"][] = "procedureID";
$proto16["m_columns"][] = "notes";
$proto16["m_columns"][] = "organization";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "audit_plan";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "report_audit_plan";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "aType",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_audit_plan"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto3["m_groupby"][]=$obj;
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "report_audit_plan"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto3["m_groupby"][]=$obj;
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="report_audit_plan";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_report_audit_plan = createSqlQuery_report_audit_plan();


	
			
	
$tdatareport_audit_plan[".sqlquery"] = $queryData_report_audit_plan;

$tableEvents["report_audit_plan"] = new eventsBase;
$tdatareport_audit_plan[".hasEvents"] = false;

?>