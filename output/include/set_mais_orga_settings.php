<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_mais_orga = array();
	$tdataset_mais_orga[".truncateText"] = true;
	$tdataset_mais_orga[".NumberOfChars"] = 80;
	$tdataset_mais_orga[".ShortName"] = "set_mais_orga";
	$tdataset_mais_orga[".OwnerID"] = "";
	$tdataset_mais_orga[".OriginalTable"] = "set_mais_orga";

//	field labels
$fieldLabelsset_mais_orga = array();
$fieldToolTipsset_mais_orga = array();
$pageTitlesset_mais_orga = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_mais_orga["Malay"] = array();
	$fieldToolTipsset_mais_orga["Malay"] = array();
	$pageTitlesset_mais_orga["Malay"] = array();
	$fieldLabelsset_mais_orga["Malay"]["mid"] = "Mid";
	$fieldToolTipsset_mais_orga["Malay"]["mid"] = "";
	$fieldLabelsset_mais_orga["Malay"]["sector"] = "Sektor";
	$fieldToolTipsset_mais_orga["Malay"]["sector"] = "";
	$fieldLabelsset_mais_orga["Malay"]["department"] = "Bahagian";
	$fieldToolTipsset_mais_orga["Malay"]["department"] = "";
	if (count($fieldToolTipsset_mais_orga["Malay"]))
		$tdataset_mais_orga[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_mais_orga[""] = array();
	$fieldToolTipsset_mais_orga[""] = array();
	$pageTitlesset_mais_orga[""] = array();
	if (count($fieldToolTipsset_mais_orga[""]))
		$tdataset_mais_orga[".isUseToolTips"] = true;
}


	$tdataset_mais_orga[".NCSearch"] = true;



$tdataset_mais_orga[".shortTableName"] = "set_mais_orga";
$tdataset_mais_orga[".nSecOptions"] = 0;
$tdataset_mais_orga[".recsPerRowList"] = 1;
$tdataset_mais_orga[".recsPerRowPrint"] = 1;
$tdataset_mais_orga[".mainTableOwnerID"] = "";
$tdataset_mais_orga[".moveNext"] = 1;
$tdataset_mais_orga[".entityType"] = 0;

$tdataset_mais_orga[".strOriginalTableName"] = "set_mais_orga";




$tdataset_mais_orga[".showAddInPopup"] = false;

$tdataset_mais_orga[".showEditInPopup"] = false;

$tdataset_mais_orga[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_mais_orga[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_mais_orga[".fieldsForRegister"] = array();

$tdataset_mais_orga[".listAjax"] = false;

	$tdataset_mais_orga[".audit"] = false;

	$tdataset_mais_orga[".locking"] = false;



$tdataset_mais_orga[".list"] = true;

$tdataset_mais_orga[".inlineEdit"] = true;
$tdataset_mais_orga[".inlineAdd"] = true;




$tdataset_mais_orga[".delete"] = true;

$tdataset_mais_orga[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_mais_orga[".searchSaving"] = false;
//

if (isMobile()){
	$tdataset_mais_orga[".showSearchPanel"] = true;
}
else
	$tdataset_mais_orga[".showSearchPanel"] = false;

if (isMobile())
	$tdataset_mais_orga[".isUseAjaxSuggest"] = false;
else
	$tdataset_mais_orga[".isUseAjaxSuggest"] = true;

$tdataset_mais_orga[".rowHighlite"] = true;


																				
$tdataset_mais_orga[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_mais_orga[".isUseTimeForSearch"] = false;





$tdataset_mais_orga[".allSearchFields"] = array();
$tdataset_mais_orga[".filterFields"] = array();
$tdataset_mais_orga[".requiredSearchFields"] = array();

$tdataset_mais_orga[".allSearchFields"][] = "sector";
	$tdataset_mais_orga[".allSearchFields"][] = "department";
	




$tdataset_mais_orga[".tableType"] = "list";

$tdataset_mais_orga[".printerPageOrientation"] = 0;
$tdataset_mais_orga[".nPrinterPageScale"] = 100;

$tdataset_mais_orga[".nPrinterSplitRecords"] = 40;

$tdataset_mais_orga[".nPrinterPDFSplitRecords"] = 40;



$tdataset_mais_orga[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataset_mais_orga[".pageSize"] = 50;

$tdataset_mais_orga[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_mais_orga[".strOrderBy"] = $tstrOrderBy;

$tdataset_mais_orga[".orderindexes"] = array();

$tdataset_mais_orga[".sqlHead"] = "SELECT mid,  	sector,  	department";
$tdataset_mais_orga[".sqlFrom"] = "FROM set_mais_orga";
$tdataset_mais_orga[".sqlWhereExpr"] = "";
$tdataset_mais_orga[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_mais_orga[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_mais_orga[".arrGroupsPerPage"] = $arrGPP;

$tdataset_mais_orga[".highlightSearchResults"] = true;

$tableKeysset_mais_orga = array();
$tableKeysset_mais_orga[] = "mid";
$tdataset_mais_orga[".Keys"] = $tableKeysset_mais_orga;

$tdataset_mais_orga[".listFields"] = array();
$tdataset_mais_orga[".listFields"][] = "sector";
$tdataset_mais_orga[".listFields"][] = "department";

$tdataset_mais_orga[".hideMobileList"] = array();


$tdataset_mais_orga[".viewFields"] = array();

$tdataset_mais_orga[".addFields"] = array();

$tdataset_mais_orga[".masterListFields"] = array();
$tdataset_mais_orga[".masterListFields"][] = "mid";
$tdataset_mais_orga[".masterListFields"][] = "sector";
$tdataset_mais_orga[".masterListFields"][] = "department";

$tdataset_mais_orga[".inlineAddFields"] = array();
$tdataset_mais_orga[".inlineAddFields"][] = "sector";
$tdataset_mais_orga[".inlineAddFields"][] = "department";

$tdataset_mais_orga[".editFields"] = array();

$tdataset_mais_orga[".inlineEditFields"] = array();
$tdataset_mais_orga[".inlineEditFields"][] = "sector";
$tdataset_mais_orga[".inlineEditFields"][] = "department";

$tdataset_mais_orga[".exportFields"] = array();

$tdataset_mais_orga[".importFields"] = array();

$tdataset_mais_orga[".printFields"] = array();

//	mid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mid";
	$fdata["GoodName"] = "mid";
	$fdata["ownerTable"] = "set_mais_orga";
	$fdata["Label"] = GetFieldLabel("set_mais_orga","mid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "mid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mid";

	
	
			
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








	$tdataset_mais_orga["mid"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "set_mais_orga";
	$fdata["Label"] = GetFieldLabel("set_mais_orga","sector");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
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




	$tdataset_mais_orga["sector"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "set_mais_orga";
	$fdata["Label"] = GetFieldLabel("set_mais_orga","department");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
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




	$tdataset_mais_orga["department"] = $fdata;


$tables_data["set_mais_orga"]=&$tdataset_mais_orga;
$field_labels["set_mais_orga"] = &$fieldLabelsset_mais_orga;
$fieldToolTips["set_mais_orga"] = &$fieldToolTipsset_mais_orga;
$page_titles["set_mais_orga"] = &$pageTitlesset_mais_orga;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_mais_orga"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["set_mais_orga"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_mais_orga()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mid,  	sector,  	department";
$proto0["m_strFrom"] = "FROM set_mais_orga";
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
	"m_strName" => "mid",
	"m_strTable" => "set_mais_orga",
	"m_srcTableName" => "set_mais_orga"
));

$proto5["m_sql"] = "mid";
$proto5["m_srcTableName"] = "set_mais_orga";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "set_mais_orga",
	"m_srcTableName" => "set_mais_orga"
));

$proto7["m_sql"] = "sector";
$proto7["m_srcTableName"] = "set_mais_orga";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "set_mais_orga",
	"m_srcTableName" => "set_mais_orga"
));

$proto9["m_sql"] = "department";
$proto9["m_srcTableName"] = "set_mais_orga";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "set_mais_orga";
$proto12["m_srcTableName"] = "set_mais_orga";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "mid";
$proto12["m_columns"][] = "sector";
$proto12["m_columns"][] = "department";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "set_mais_orga";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "set_mais_orga";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="set_mais_orga";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_mais_orga = createSqlQuery_set_mais_orga();



			

$tdataset_mais_orga[".sqlquery"] = $queryData_set_mais_orga;

$tableEvents["set_mais_orga"] = new eventsBase;
$tdataset_mais_orga[".hasEvents"] = false;

?>