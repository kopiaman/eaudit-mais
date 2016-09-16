<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_cat = array();
	$tdataset_cat[".truncateText"] = true;
	$tdataset_cat[".NumberOfChars"] = 80;
	$tdataset_cat[".ShortName"] = "set_cat";
	$tdataset_cat[".OwnerID"] = "";
	$tdataset_cat[".OriginalTable"] = "set_cat";

//	field labels
$fieldLabelsset_cat = array();
$fieldToolTipsset_cat = array();
$pageTitlesset_cat = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_cat["Malay"] = array();
	$fieldToolTipsset_cat["Malay"] = array();
	$pageTitlesset_cat["Malay"] = array();
	$fieldLabelsset_cat["Malay"]["catID"] = "ID";
	$fieldToolTipsset_cat["Malay"]["catID"] = "";
	$fieldLabelsset_cat["Malay"]["catName"] = "Kategori";
	$fieldToolTipsset_cat["Malay"]["catName"] = "";
	if (count($fieldToolTipsset_cat["Malay"]))
		$tdataset_cat[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_cat[""] = array();
	$fieldToolTipsset_cat[""] = array();
	$pageTitlesset_cat[""] = array();
	if (count($fieldToolTipsset_cat[""]))
		$tdataset_cat[".isUseToolTips"] = true;
}


	$tdataset_cat[".NCSearch"] = true;



$tdataset_cat[".shortTableName"] = "set_cat";
$tdataset_cat[".nSecOptions"] = 0;
$tdataset_cat[".recsPerRowList"] = 1;
$tdataset_cat[".recsPerRowPrint"] = 1;
$tdataset_cat[".mainTableOwnerID"] = "";
$tdataset_cat[".moveNext"] = 1;
$tdataset_cat[".entityType"] = 0;

$tdataset_cat[".strOriginalTableName"] = "set_cat";




$tdataset_cat[".showAddInPopup"] = false;

$tdataset_cat[".showEditInPopup"] = false;

$tdataset_cat[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_cat[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_cat[".fieldsForRegister"] = array();

$tdataset_cat[".listAjax"] = false;

	$tdataset_cat[".audit"] = true;

	$tdataset_cat[".locking"] = false;



$tdataset_cat[".list"] = true;

$tdataset_cat[".inlineEdit"] = true;
$tdataset_cat[".inlineAdd"] = true;




$tdataset_cat[".delete"] = true;

$tdataset_cat[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_cat[".searchSaving"] = false;
//

if (isMobile()){
}
else
	$tdataset_cat[".showSearchPanel"] = false;

if (isMobile())
	$tdataset_cat[".isUseAjaxSuggest"] = false;
else
	$tdataset_cat[".isUseAjaxSuggest"] = true;

$tdataset_cat[".rowHighlite"] = true;


																				
$tdataset_cat[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_cat[".isUseTimeForSearch"] = false;





$tdataset_cat[".allSearchFields"] = array();
$tdataset_cat[".filterFields"] = array();
$tdataset_cat[".requiredSearchFields"] = array();



$tdataset_cat[".googleLikeFields"] = array();
$tdataset_cat[".googleLikeFields"][] = "catID";
$tdataset_cat[".googleLikeFields"][] = "catName";



$tdataset_cat[".tableType"] = "list";

$tdataset_cat[".printerPageOrientation"] = 0;
$tdataset_cat[".nPrinterPageScale"] = 100;

$tdataset_cat[".nPrinterSplitRecords"] = 40;

$tdataset_cat[".nPrinterPDFSplitRecords"] = 40;



$tdataset_cat[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataset_cat[".pageSize"] = 20;

$tdataset_cat[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_cat[".strOrderBy"] = $tstrOrderBy;

$tdataset_cat[".orderindexes"] = array();

$tdataset_cat[".sqlHead"] = "SELECT catID,  	catName";
$tdataset_cat[".sqlFrom"] = "FROM set_cat";
$tdataset_cat[".sqlWhereExpr"] = "";
$tdataset_cat[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_cat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_cat[".arrGroupsPerPage"] = $arrGPP;


$tableKeysset_cat = array();
$tableKeysset_cat[] = "catID";
$tdataset_cat[".Keys"] = $tableKeysset_cat;

$tdataset_cat[".listFields"] = array();
$tdataset_cat[".listFields"][] = "catID";
$tdataset_cat[".listFields"][] = "catName";

$tdataset_cat[".hideMobileList"] = array();


$tdataset_cat[".viewFields"] = array();

$tdataset_cat[".addFields"] = array();

$tdataset_cat[".masterListFields"] = array();
$tdataset_cat[".masterListFields"][] = "catID";
$tdataset_cat[".masterListFields"][] = "catName";

$tdataset_cat[".inlineAddFields"] = array();
$tdataset_cat[".inlineAddFields"][] = "catName";

$tdataset_cat[".editFields"] = array();

$tdataset_cat[".inlineEditFields"] = array();
$tdataset_cat[".inlineEditFields"][] = "catID";
$tdataset_cat[".inlineEditFields"][] = "catName";

$tdataset_cat[".exportFields"] = array();

$tdataset_cat[".importFields"] = array();

$tdataset_cat[".printFields"] = array();

//	catID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "catID";
	$fdata["GoodName"] = "catID";
	$fdata["ownerTable"] = "set_cat";
	$fdata["Label"] = GetFieldLabel("set_cat","catID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "catID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catID";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataset_cat["catID"] = $fdata;
//	catName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "catName";
	$fdata["GoodName"] = "catName";
	$fdata["ownerTable"] = "set_cat";
	$fdata["Label"] = GetFieldLabel("set_cat","catName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "catName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catName";

	
	
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
		
		$edata["controlWidth"] = 300;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataset_cat["catName"] = $fdata;


$tables_data["set_cat"]=&$tdataset_cat;
$field_labels["set_cat"] = &$fieldLabelsset_cat;
$fieldToolTips["set_cat"] = &$fieldToolTipsset_cat;
$page_titles["set_cat"] = &$pageTitlesset_cat;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_cat"] = array();
//	set_field
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="set_field";
		$detailsParam["dOriginalTable"] = "set_field";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "set_field";
	$detailsParam["dCaptionTable"] = GetTableCaption("set_field");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["set_cat"][$dIndex] = $detailsParam;

	
		$detailsTablesData["set_cat"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["set_cat"][$dIndex]["masterKeys"][]="catID";

				$detailsTablesData["set_cat"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["set_cat"][$dIndex]["detailKeys"][]="catID";

// tables which are master tables for current table (detail)
$masterTablesData["set_cat"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_cat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "catID,  	catName";
$proto0["m_strFrom"] = "FROM set_cat";
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
	"m_strName" => "catID",
	"m_strTable" => "set_cat",
	"m_srcTableName" => "set_cat"
));

$proto5["m_sql"] = "catID";
$proto5["m_srcTableName"] = "set_cat";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "catName",
	"m_strTable" => "set_cat",
	"m_srcTableName" => "set_cat"
));

$proto7["m_sql"] = "catName";
$proto7["m_srcTableName"] = "set_cat";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "set_cat";
$proto10["m_srcTableName"] = "set_cat";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "catID";
$proto10["m_columns"][] = "catName";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "set_cat";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "set_cat";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="set_cat";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_cat = createSqlQuery_set_cat();



		

$tdataset_cat[".sqlquery"] = $queryData_set_cat;

include_once(getabspath("include/set_cat_events.php"));
$tableEvents["set_cat"] = new eventclass_set_cat;
$tdataset_cat[".hasEvents"] = true;

?>