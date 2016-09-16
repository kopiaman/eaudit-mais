<?php
require_once(getabspath("classes/cipherer.php"));




$tdatathankyou = array();	
	$tdatathankyou[".truncateText"] = true;
	$tdatathankyou[".NumberOfChars"] = 80; 
	$tdatathankyou[".ShortName"] = "thankyou";
	$tdatathankyou[".OwnerID"] = "";
	$tdatathankyou[".OriginalTable"] = "audit_info";

//	field labels
$fieldLabelsthankyou = array();
$fieldToolTipsthankyou = array();
$pageTitlesthankyou = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsthankyou["English"] = array();
	$fieldToolTipsthankyou["English"] = array();
	$pageTitlesthankyou["English"] = array();
	$fieldLabelsthankyou["English"]["inid"] = "Inid";
	$fieldToolTipsthankyou["English"]["inid"] = "";
	if (count($fieldToolTipsthankyou["English"]))
		$tdatathankyou[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsthankyou[""] = array();
	$fieldToolTipsthankyou[""] = array();
	$pageTitlesthankyou[""] = array();
	$fieldLabelsthankyou[""]["inid"] = "Inid";
	$fieldToolTipsthankyou[""]["inid"] = "";
	if (count($fieldToolTipsthankyou[""]))
		$tdatathankyou[".isUseToolTips"] = true;
}
	
	
	$tdatathankyou[".NCSearch"] = true;



$tdatathankyou[".shortTableName"] = "thankyou";
$tdatathankyou[".nSecOptions"] = 0;
$tdatathankyou[".recsPerRowList"] = 1;
$tdatathankyou[".recsPerRowPrint"] = 1;
$tdatathankyou[".mainTableOwnerID"] = "";
$tdatathankyou[".moveNext"] = 1;
$tdatathankyou[".entityType"] = 1;

$tdatathankyou[".strOriginalTableName"] = "audit_info";




$tdatathankyou[".showAddInPopup"] = false;

$tdatathankyou[".showEditInPopup"] = false;

$tdatathankyou[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatathankyou[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatathankyou[".fieldsForRegister"] = array();

$tdatathankyou[".listAjax"] = false;

	$tdatathankyou[".audit"] = false;

	$tdatathankyou[".locking"] = false;




$tdatathankyou[".view"] = true;





$tdatathankyou[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatathankyou[".searchSaving"] = false;
//

$tdatathankyou[".showSearchPanel"] = true;
		$tdatathankyou[".flexibleSearch"] = true;		

if (isMobile())
	$tdatathankyou[".isUseAjaxSuggest"] = false;
else 
	$tdatathankyou[".isUseAjaxSuggest"] = true;

$tdatathankyou[".rowHighlite"] = true;



$tdatathankyou[".addPageEvents"] = false;

// use timepicker for search panel
$tdatathankyou[".isUseTimeForSearch"] = false;





$tdatathankyou[".allSearchFields"] = array();
$tdatathankyou[".filterFields"] = array();
$tdatathankyou[".requiredSearchFields"] = array();



$tdatathankyou[".googleLikeFields"] = array();
$tdatathankyou[".googleLikeFields"][] = "inid";


$tdatathankyou[".advSearchFields"] = array();
$tdatathankyou[".advSearchFields"][] = "inid";

$tdatathankyou[".tableType"] = "list";

$tdatathankyou[".printerPageOrientation"] = 0;
$tdatathankyou[".nPrinterPageScale"] = 100;

$tdatathankyou[".nPrinterSplitRecords"] = 40;

$tdatathankyou[".nPrinterPDFSplitRecords"] = 40;



$tdatathankyou[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatathankyou[".pageSize"] = 20;

$tdatathankyou[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatathankyou[".strOrderBy"] = $tstrOrderBy;

$tdatathankyou[".orderindexes"] = array();

$tdatathankyou[".sqlHead"] = "SELECT inid";
$tdatathankyou[".sqlFrom"] = "FROM audit_info";
$tdatathankyou[".sqlWhereExpr"] = "";
$tdatathankyou[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatathankyou[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatathankyou[".arrGroupsPerPage"] = $arrGPP;

$tdatathankyou[".highlightSearchResults"] = true;

$tableKeysthankyou = array();
$tableKeysthankyou[] = "inid";
$tdatathankyou[".Keys"] = $tableKeysthankyou;

$tdatathankyou[".listFields"] = array();

$tdatathankyou[".hideMobileList"] = array();


$tdatathankyou[".viewFields"] = array();
$tdatathankyou[".viewFields"][] = "inid";

$tdatathankyou[".addFields"] = array();

$tdatathankyou[".masterListFields"] = array();
$tdatathankyou[".masterListFields"][] = "inid";

$tdatathankyou[".inlineAddFields"] = array();

$tdatathankyou[".editFields"] = array();

$tdatathankyou[".inlineEditFields"] = array();

$tdatathankyou[".exportFields"] = array();

$tdatathankyou[".importFields"] = array();

$tdatathankyou[".printFields"] = array();

//	inid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inid";
	$fdata["GoodName"] = "inid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("thankyou","inid"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "inid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inid";
	
		
		
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
	
	
	
	

	

	
	$tdatathankyou["inid"] = $fdata;

	
$tables_data["thankyou"]=&$tdatathankyou;
$field_labels["thankyou"] = &$fieldLabelsthankyou;
$fieldToolTips["thankyou"] = &$fieldToolTipsthankyou;
$page_titles["thankyou"] = &$pageTitlesthankyou;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["thankyou"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["thankyou"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_thankyou()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inid";
$proto0["m_strFrom"] = "FROM audit_info";
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
			$obj = new SQLField(array(
	"m_strName" => "inid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "thankyou"
));

$proto5["m_sql"] = "inid";
$proto5["m_srcTableName"] = "thankyou";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto7=array();
$proto7["m_link"] = "SQLL_MAIN";
			$proto8=array();
$proto8["m_strName"] = "audit_info";
$proto8["m_srcTableName"] = "thankyou";
$proto8["m_columns"] = array();
$proto8["m_columns"][] = "inid";
$proto8["m_columns"][] = "fid";
$proto8["m_columns"][] = "finding";
$proto8["m_columns"][] = "refyID";
$proto8["m_columns"][] = "suggest";
$proto8["m_columns"][] = "answer";
$proto8["m_columns"][] = "answer2";
$proto8["m_columns"][] = "answer3";
$proto8["m_columns"][] = "iStatus";
$proto8["m_columns"][] = "attachment";
$proto8["m_columns"][] = "reply_attachment";
$proto8["m_columns"][] = "reply_attachment2";
$proto8["m_columns"][] = "reply_attachment3";
$proto8["m_columns"][] = "noteAmend";
$proto8["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto8);

$proto7["m_table"] = $obj;
$proto7["m_sql"] = "audit_info";
$proto7["m_alias"] = "";
$proto7["m_srcTableName"] = "thankyou";
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

$proto7["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto7);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="thankyou";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_thankyou = createSqlQuery_thankyou();


	
	
	
$tdatathankyou[".sqlquery"] = $queryData_thankyou;

$tableEvents["thankyou"] = new eventsBase;
$tdatathankyou[".hasEvents"] = false;

?>