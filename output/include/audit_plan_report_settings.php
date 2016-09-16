<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaudit_plan_report = array();	
	$tdataaudit_plan_report[".truncateText"] = true;
	$tdataaudit_plan_report[".NumberOfChars"] = 80; 
	$tdataaudit_plan_report[".ShortName"] = "audit_plan_report";
	$tdataaudit_plan_report[".OwnerID"] = "";
	$tdataaudit_plan_report[".OriginalTable"] = "website";

//	field labels
$fieldLabelsaudit_plan_report = array();
$fieldToolTipsaudit_plan_report = array();
$pageTitlesaudit_plan_report = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsaudit_plan_report["Malay"] = array();
	$fieldToolTipsaudit_plan_report["Malay"] = array();
	$pageTitlesaudit_plan_report["Malay"] = array();
	$fieldLabelsaudit_plan_report["Malay"]["aType"] = "A Type";
	$fieldToolTipsaudit_plan_report["Malay"]["aType"] = "";
	$fieldLabelsaudit_plan_report["Malay"]["aYear"] = "A Year";
	$fieldToolTipsaudit_plan_report["Malay"]["aYear"] = "";
	$fieldLabelsaudit_plan_report["Malay"]["noPlan"] = "No Plan";
	$fieldToolTipsaudit_plan_report["Malay"]["noPlan"] = "";
	if (count($fieldToolTipsaudit_plan_report["Malay"]))
		$tdataaudit_plan_report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaudit_plan_report[""] = array();
	$fieldToolTipsaudit_plan_report[""] = array();
	$pageTitlesaudit_plan_report[""] = array();
	$fieldLabelsaudit_plan_report[""]["aType"] = "A Type";
	$fieldToolTipsaudit_plan_report[""]["aType"] = "";
	$fieldLabelsaudit_plan_report[""]["aYear"] = "A Year";
	$fieldToolTipsaudit_plan_report[""]["aYear"] = "";
	$fieldLabelsaudit_plan_report[""]["noPlan"] = "No Plan";
	$fieldToolTipsaudit_plan_report[""]["noPlan"] = "";
	if (count($fieldToolTipsaudit_plan_report[""]))
		$tdataaudit_plan_report[".isUseToolTips"] = true;
}
	
	
	$tdataaudit_plan_report[".NCSearch"] = true;



$tdataaudit_plan_report[".shortTableName"] = "audit_plan_report";
$tdataaudit_plan_report[".nSecOptions"] = 0;
$tdataaudit_plan_report[".recsPerRowList"] = 1;
$tdataaudit_plan_report[".recsPerRowPrint"] = 1;
$tdataaudit_plan_report[".mainTableOwnerID"] = "";
$tdataaudit_plan_report[".moveNext"] = 1;
$tdataaudit_plan_report[".entityType"] = 1;

$tdataaudit_plan_report[".strOriginalTableName"] = "website";




$tdataaudit_plan_report[".showAddInPopup"] = true;

$tdataaudit_plan_report[".showEditInPopup"] = true;

$tdataaudit_plan_report[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
			;
$popupPagesLayoutNames["edit"] = "add";
			;
$popupPagesLayoutNames["view"] = "add";
$tdataaudit_plan_report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaudit_plan_report[".fieldsForRegister"] = array();

$tdataaudit_plan_report[".listAjax"] = false;

	$tdataaudit_plan_report[".audit"] = false;

	$tdataaudit_plan_report[".locking"] = false;



$tdataaudit_plan_report[".list"] = true;






$tdataaudit_plan_report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataaudit_plan_report[".searchSaving"] = false;
//

$tdataaudit_plan_report[".showSearchPanel"] = true;
		$tdataaudit_plan_report[".flexibleSearch"] = true;		

if (isMobile())
	$tdataaudit_plan_report[".isUseAjaxSuggest"] = false;
else 
	$tdataaudit_plan_report[".isUseAjaxSuggest"] = true;

$tdataaudit_plan_report[".rowHighlite"] = true;


					
$tdataaudit_plan_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaudit_plan_report[".isUseTimeForSearch"] = false;





$tdataaudit_plan_report[".allSearchFields"] = array();
$tdataaudit_plan_report[".filterFields"] = array();
$tdataaudit_plan_report[".requiredSearchFields"] = array();

$tdataaudit_plan_report[".allSearchFields"][] = "aType";
	$tdataaudit_plan_report[".allSearchFields"][] = "aYear";
	$tdataaudit_plan_report[".allSearchFields"][] = "noPlan";
	

$tdataaudit_plan_report[".googleLikeFields"] = array();
$tdataaudit_plan_report[".googleLikeFields"][] = "aType";
$tdataaudit_plan_report[".googleLikeFields"][] = "aYear";
$tdataaudit_plan_report[".googleLikeFields"][] = "noPlan";


$tdataaudit_plan_report[".advSearchFields"] = array();
$tdataaudit_plan_report[".advSearchFields"][] = "aType";
$tdataaudit_plan_report[".advSearchFields"][] = "aYear";
$tdataaudit_plan_report[".advSearchFields"][] = "noPlan";

$tdataaudit_plan_report[".tableType"] = "list";

$tdataaudit_plan_report[".printerPageOrientation"] = 0;
$tdataaudit_plan_report[".nPrinterPageScale"] = 100;

$tdataaudit_plan_report[".nPrinterSplitRecords"] = 40;

$tdataaudit_plan_report[".nPrinterPDFSplitRecords"] = 40;



$tdataaudit_plan_report[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataaudit_plan_report[".pageSize"] = 20;

$tdataaudit_plan_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaudit_plan_report[".strOrderBy"] = $tstrOrderBy;

$tdataaudit_plan_report[".orderindexes"] = array();

$tdataaudit_plan_report[".sqlHead"] = "SELECT aType,  aYear,  COUNT(planID) AS noPlan";
$tdataaudit_plan_report[".sqlFrom"] = "FROM audit_plan";
$tdataaudit_plan_report[".sqlWhereExpr"] = "";
$tdataaudit_plan_report[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaudit_plan_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaudit_plan_report[".arrGroupsPerPage"] = $arrGPP;

$tdataaudit_plan_report[".highlightSearchResults"] = true;

$tableKeysaudit_plan_report = array();
$tdataaudit_plan_report[".Keys"] = $tableKeysaudit_plan_report;

$tdataaudit_plan_report[".listFields"] = array();
$tdataaudit_plan_report[".listFields"][] = "aType";
$tdataaudit_plan_report[".listFields"][] = "aYear";
$tdataaudit_plan_report[".listFields"][] = "noPlan";

$tdataaudit_plan_report[".hideMobileList"] = array();


$tdataaudit_plan_report[".viewFields"] = array();

$tdataaudit_plan_report[".addFields"] = array();

$tdataaudit_plan_report[".masterListFields"] = array();
$tdataaudit_plan_report[".masterListFields"][] = "aType";
$tdataaudit_plan_report[".masterListFields"][] = "aYear";
$tdataaudit_plan_report[".masterListFields"][] = "noPlan";

$tdataaudit_plan_report[".inlineAddFields"] = array();

$tdataaudit_plan_report[".editFields"] = array();

$tdataaudit_plan_report[".inlineEditFields"] = array();

$tdataaudit_plan_report[".exportFields"] = array();

$tdataaudit_plan_report[".importFields"] = array();

$tdataaudit_plan_report[".printFields"] = array();

//	aType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aType";
	$fdata["GoodName"] = "aType";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan_report","aType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataaudit_plan_report["aType"] = $fdata;
//	aYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aYear";
	$fdata["GoodName"] = "aYear";
	$fdata["ownerTable"] = "audit_plan";
	$fdata["Label"] = GetFieldLabel("audit_plan_report","aYear"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataaudit_plan_report["aYear"] = $fdata;
//	noPlan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "noPlan";
	$fdata["GoodName"] = "noPlan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_plan_report","noPlan"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataaudit_plan_report["noPlan"] = $fdata;

	
$tables_data["audit_plan_report"]=&$tdataaudit_plan_report;
$field_labels["audit_plan_report"] = &$fieldLabelsaudit_plan_report;
$fieldToolTips["audit_plan_report"] = &$fieldToolTipsaudit_plan_report;
$page_titles["audit_plan_report"] = &$pageTitlesaudit_plan_report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["audit_plan_report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["audit_plan_report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_audit_plan_report()
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
	"m_srcTableName" => "audit_plan_report"
));

$proto8["m_sql"] = "aType";
$proto8["m_srcTableName"] = "audit_plan_report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan_report"
));

$proto10["m_sql"] = "aYear";
$proto10["m_srcTableName"] = "audit_plan_report";
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
	"m_srcTableName" => "audit_plan_report"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(planID)";
$proto12["m_srcTableName"] = "audit_plan_report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "noPlan";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "audit_plan";
$proto16["m_srcTableName"] = "audit_plan_report";
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
$proto15["m_srcTableName"] = "audit_plan_report";
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
	"m_srcTableName" => "audit_plan_report"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto3["m_groupby"][]=$obj;
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "audit_plan",
	"m_srcTableName" => "audit_plan_report"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto3["m_groupby"][]=$obj;
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="audit_plan_report";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_audit_plan_report = createSqlQuery_audit_plan_report();


	
			
	
$tdataaudit_plan_report[".sqlquery"] = $queryData_audit_plan_report;

$tableEvents["audit_plan_report"] = new eventsBase;
$tdataaudit_plan_report[".hasEvents"] = false;

?>