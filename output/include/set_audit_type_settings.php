<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_audit_type = array();
	$tdataset_audit_type[".truncateText"] = true;
	$tdataset_audit_type[".NumberOfChars"] = 80;
	$tdataset_audit_type[".ShortName"] = "set_audit_type";
	$tdataset_audit_type[".OwnerID"] = "";
	$tdataset_audit_type[".OriginalTable"] = "set_audit_type";

//	field labels
$fieldLabelsset_audit_type = array();
$fieldToolTipsset_audit_type = array();
$pageTitlesset_audit_type = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_audit_type["Malay"] = array();
	$fieldToolTipsset_audit_type["Malay"] = array();
	$pageTitlesset_audit_type["Malay"] = array();
	$fieldLabelsset_audit_type["Malay"]["aTypeID"] = "A Type ID";
	$fieldToolTipsset_audit_type["Malay"]["aTypeID"] = "";
	$fieldLabelsset_audit_type["Malay"]["aName"] = "Nama Kategori";
	$fieldToolTipsset_audit_type["Malay"]["aName"] = "";
	$fieldLabelsset_audit_type["Malay"]["aTypeCode"] = "Kod Kategori";
	$fieldToolTipsset_audit_type["Malay"]["aTypeCode"] = "";
	if (count($fieldToolTipsset_audit_type["Malay"]))
		$tdataset_audit_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_audit_type[""] = array();
	$fieldToolTipsset_audit_type[""] = array();
	$pageTitlesset_audit_type[""] = array();
	if (count($fieldToolTipsset_audit_type[""]))
		$tdataset_audit_type[".isUseToolTips"] = true;
}


	$tdataset_audit_type[".NCSearch"] = true;



$tdataset_audit_type[".shortTableName"] = "set_audit_type";
$tdataset_audit_type[".nSecOptions"] = 0;
$tdataset_audit_type[".recsPerRowList"] = 1;
$tdataset_audit_type[".recsPerRowPrint"] = 1;
$tdataset_audit_type[".mainTableOwnerID"] = "";
$tdataset_audit_type[".moveNext"] = 1;
$tdataset_audit_type[".entityType"] = 0;

$tdataset_audit_type[".strOriginalTableName"] = "set_audit_type";




$tdataset_audit_type[".showAddInPopup"] = false;

$tdataset_audit_type[".showEditInPopup"] = false;

$tdataset_audit_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_audit_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_audit_type[".fieldsForRegister"] = array();

$tdataset_audit_type[".listAjax"] = false;

	$tdataset_audit_type[".audit"] = true;

	$tdataset_audit_type[".locking"] = false;



$tdataset_audit_type[".list"] = true;

$tdataset_audit_type[".inlineEdit"] = true;
$tdataset_audit_type[".inlineAdd"] = true;




$tdataset_audit_type[".delete"] = true;

$tdataset_audit_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_audit_type[".searchSaving"] = false;
//

$tdataset_audit_type[".showSearchPanel"] = true;
		$tdataset_audit_type[".flexibleSearch"] = true;

if (isMobile())
	$tdataset_audit_type[".isUseAjaxSuggest"] = false;
else
	$tdataset_audit_type[".isUseAjaxSuggest"] = true;

$tdataset_audit_type[".rowHighlite"] = true;


																				
$tdataset_audit_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_audit_type[".isUseTimeForSearch"] = false;




$tdataset_audit_type[".detailsLinksOnList"] = "1";

$tdataset_audit_type[".allSearchFields"] = array();
$tdataset_audit_type[".filterFields"] = array();
$tdataset_audit_type[".requiredSearchFields"] = array();



$tdataset_audit_type[".googleLikeFields"] = array();
$tdataset_audit_type[".googleLikeFields"][] = "aTypeID";
$tdataset_audit_type[".googleLikeFields"][] = "aName";
$tdataset_audit_type[".googleLikeFields"][] = "aTypeCode";



$tdataset_audit_type[".tableType"] = "list";

$tdataset_audit_type[".printerPageOrientation"] = 0;
$tdataset_audit_type[".nPrinterPageScale"] = 100;

$tdataset_audit_type[".nPrinterSplitRecords"] = 40;

$tdataset_audit_type[".nPrinterPDFSplitRecords"] = 40;



$tdataset_audit_type[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataset_audit_type[".pageSize"] = 20;

$tdataset_audit_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_audit_type[".strOrderBy"] = $tstrOrderBy;

$tdataset_audit_type[".orderindexes"] = array();

$tdataset_audit_type[".sqlHead"] = "SELECT aTypeID,  	aName,  	aTypeCode";
$tdataset_audit_type[".sqlFrom"] = "FROM set_audit_type";
$tdataset_audit_type[".sqlWhereExpr"] = "";
$tdataset_audit_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_audit_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_audit_type[".arrGroupsPerPage"] = $arrGPP;

$tdataset_audit_type[".highlightSearchResults"] = true;

$tableKeysset_audit_type = array();
$tableKeysset_audit_type[] = "aTypeID";
$tdataset_audit_type[".Keys"] = $tableKeysset_audit_type;

$tdataset_audit_type[".listFields"] = array();
$tdataset_audit_type[".listFields"][] = "aTypeCode";
$tdataset_audit_type[".listFields"][] = "aName";

$tdataset_audit_type[".hideMobileList"] = array();


$tdataset_audit_type[".viewFields"] = array();

$tdataset_audit_type[".addFields"] = array();

$tdataset_audit_type[".masterListFields"] = array();
$tdataset_audit_type[".masterListFields"][] = "aTypeID";
$tdataset_audit_type[".masterListFields"][] = "aName";
$tdataset_audit_type[".masterListFields"][] = "aTypeCode";

$tdataset_audit_type[".inlineAddFields"] = array();
$tdataset_audit_type[".inlineAddFields"][] = "aTypeCode";
$tdataset_audit_type[".inlineAddFields"][] = "aName";

$tdataset_audit_type[".editFields"] = array();

$tdataset_audit_type[".inlineEditFields"] = array();
$tdataset_audit_type[".inlineEditFields"][] = "aName";

$tdataset_audit_type[".exportFields"] = array();

$tdataset_audit_type[".importFields"] = array();

$tdataset_audit_type[".printFields"] = array();

//	aTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aTypeID";
	$fdata["GoodName"] = "aTypeID";
	$fdata["ownerTable"] = "set_audit_type";
	$fdata["Label"] = GetFieldLabel("set_audit_type","aTypeID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "aTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aTypeID";

	
	
			
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








	$tdataset_audit_type["aTypeID"] = $fdata;
//	aName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aName";
	$fdata["GoodName"] = "aName";
	$fdata["ownerTable"] = "set_audit_type";
	$fdata["Label"] = GetFieldLabel("set_audit_type","aName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "aName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aName";

	
	
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








	$tdataset_audit_type["aName"] = $fdata;
//	aTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aTypeCode";
	$fdata["GoodName"] = "aTypeCode";
	$fdata["ownerTable"] = "set_audit_type";
	$fdata["Label"] = GetFieldLabel("set_audit_type","aTypeCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
	
	
	
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataset_audit_type["aTypeCode"] = $fdata;


$tables_data["set_audit_type"]=&$tdataset_audit_type;
$field_labels["set_audit_type"] = &$fieldLabelsset_audit_type;
$fieldToolTips["set_audit_type"] = &$fieldToolTipsset_audit_type;
$page_titles["set_audit_type"] = &$pageTitlesset_audit_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_audit_type"] = array();
//	set_audit_subType
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="set_audit_subType";
		$detailsParam["dOriginalTable"] = "set_audit_subType";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "set_audit_subType";
	$detailsParam["dCaptionTable"] = GetTableCaption("set_audit_subType");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["set_audit_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["set_audit_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["set_audit_type"][$dIndex]["masterKeys"][]="aTypeCode";

				$detailsTablesData["set_audit_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["set_audit_type"][$dIndex]["detailKeys"][]="aTypeCode";

// tables which are master tables for current table (detail)
$masterTablesData["set_audit_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_audit_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aTypeID,  	aName,  	aTypeCode";
$proto0["m_strFrom"] = "FROM set_audit_type";
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
	"m_strName" => "aTypeID",
	"m_strTable" => "set_audit_type",
	"m_srcTableName" => "set_audit_type"
));

$proto5["m_sql"] = "aTypeID";
$proto5["m_srcTableName"] = "set_audit_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "aName",
	"m_strTable" => "set_audit_type",
	"m_srcTableName" => "set_audit_type"
));

$proto7["m_sql"] = "aName";
$proto7["m_srcTableName"] = "set_audit_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "aTypeCode",
	"m_strTable" => "set_audit_type",
	"m_srcTableName" => "set_audit_type"
));

$proto9["m_sql"] = "aTypeCode";
$proto9["m_srcTableName"] = "set_audit_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "set_audit_type";
$proto12["m_srcTableName"] = "set_audit_type";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "aTypeID";
$proto12["m_columns"][] = "aName";
$proto12["m_columns"][] = "aTypeCode";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "set_audit_type";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "set_audit_type";
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
$proto0["m_srcTableName"]="set_audit_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_audit_type = createSqlQuery_set_audit_type();



			

$tdataset_audit_type[".sqlquery"] = $queryData_set_audit_type;

$tableEvents["set_audit_type"] = new eventsBase;
$tdataset_audit_type[".hasEvents"] = false;

?>