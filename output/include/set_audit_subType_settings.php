<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_audit_subType = array();
	$tdataset_audit_subType[".truncateText"] = true;
	$tdataset_audit_subType[".NumberOfChars"] = 80;
	$tdataset_audit_subType[".ShortName"] = "set_audit_subType";
	$tdataset_audit_subType[".OwnerID"] = "";
	$tdataset_audit_subType[".OriginalTable"] = "set_audit_subType";

//	field labels
$fieldLabelsset_audit_subType = array();
$fieldToolTipsset_audit_subType = array();
$pageTitlesset_audit_subType = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_audit_subType["Malay"] = array();
	$fieldToolTipsset_audit_subType["Malay"] = array();
	$pageTitlesset_audit_subType["Malay"] = array();
	$fieldLabelsset_audit_subType["Malay"]["subTypeID"] = "Sub Type ID";
	$fieldToolTipsset_audit_subType["Malay"]["subTypeID"] = "";
	$fieldLabelsset_audit_subType["Malay"]["subTypeName"] = "Nama Sub Kategori";
	$fieldToolTipsset_audit_subType["Malay"]["subTypeName"] = "";
	$fieldLabelsset_audit_subType["Malay"]["aTypeCode"] = "Kod Kategori";
	$fieldToolTipsset_audit_subType["Malay"]["aTypeCode"] = "";
	$fieldLabelsset_audit_subType["Malay"]["subTypeCode"] = "Kod Sub Kategori";
	$fieldToolTipsset_audit_subType["Malay"]["subTypeCode"] = "";
	if (count($fieldToolTipsset_audit_subType["Malay"]))
		$tdataset_audit_subType[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_audit_subType[""] = array();
	$fieldToolTipsset_audit_subType[""] = array();
	$pageTitlesset_audit_subType[""] = array();
	if (count($fieldToolTipsset_audit_subType[""]))
		$tdataset_audit_subType[".isUseToolTips"] = true;
}


	$tdataset_audit_subType[".NCSearch"] = true;



$tdataset_audit_subType[".shortTableName"] = "set_audit_subType";
$tdataset_audit_subType[".nSecOptions"] = 0;
$tdataset_audit_subType[".recsPerRowList"] = 1;
$tdataset_audit_subType[".recsPerRowPrint"] = 1;
$tdataset_audit_subType[".mainTableOwnerID"] = "";
$tdataset_audit_subType[".moveNext"] = 1;
$tdataset_audit_subType[".entityType"] = 0;

$tdataset_audit_subType[".strOriginalTableName"] = "set_audit_subType";




$tdataset_audit_subType[".showAddInPopup"] = false;

$tdataset_audit_subType[".showEditInPopup"] = false;

$tdataset_audit_subType[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_audit_subType[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_audit_subType[".fieldsForRegister"] = array();

$tdataset_audit_subType[".listAjax"] = false;

	$tdataset_audit_subType[".audit"] = true;

	$tdataset_audit_subType[".locking"] = false;



$tdataset_audit_subType[".list"] = true;

$tdataset_audit_subType[".inlineEdit"] = true;
$tdataset_audit_subType[".inlineAdd"] = true;




$tdataset_audit_subType[".delete"] = true;

$tdataset_audit_subType[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_audit_subType[".searchSaving"] = false;
//

$tdataset_audit_subType[".showSearchPanel"] = true;
		$tdataset_audit_subType[".flexibleSearch"] = true;

if (isMobile())
	$tdataset_audit_subType[".isUseAjaxSuggest"] = false;
else
	$tdataset_audit_subType[".isUseAjaxSuggest"] = true;

$tdataset_audit_subType[".rowHighlite"] = true;


																																																																																
$tdataset_audit_subType[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_audit_subType[".isUseTimeForSearch"] = false;





$tdataset_audit_subType[".allSearchFields"] = array();
$tdataset_audit_subType[".filterFields"] = array();
$tdataset_audit_subType[".requiredSearchFields"] = array();



$tdataset_audit_subType[".googleLikeFields"] = array();
$tdataset_audit_subType[".googleLikeFields"][] = "subTypeID";
$tdataset_audit_subType[".googleLikeFields"][] = "subTypeName";
$tdataset_audit_subType[".googleLikeFields"][] = "subTypeCode";
$tdataset_audit_subType[".googleLikeFields"][] = "aTypeCode";



$tdataset_audit_subType[".tableType"] = "list";

$tdataset_audit_subType[".printerPageOrientation"] = 0;
$tdataset_audit_subType[".nPrinterPageScale"] = 100;

$tdataset_audit_subType[".nPrinterSplitRecords"] = 40;

$tdataset_audit_subType[".nPrinterPDFSplitRecords"] = 40;



$tdataset_audit_subType[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataset_audit_subType[".pageSize"] = 20;

$tdataset_audit_subType[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_audit_subType[".strOrderBy"] = $tstrOrderBy;

$tdataset_audit_subType[".orderindexes"] = array();

$tdataset_audit_subType[".sqlHead"] = "SELECT subTypeID,  	subTypeName,  	subTypeCode,  	aTypeCode";
$tdataset_audit_subType[".sqlFrom"] = "FROM set_audit_subType";
$tdataset_audit_subType[".sqlWhereExpr"] = "";
$tdataset_audit_subType[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_audit_subType[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_audit_subType[".arrGroupsPerPage"] = $arrGPP;

$tdataset_audit_subType[".highlightSearchResults"] = true;

$tableKeysset_audit_subType = array();
$tableKeysset_audit_subType[] = "subTypeID";
$tdataset_audit_subType[".Keys"] = $tableKeysset_audit_subType;

$tdataset_audit_subType[".listFields"] = array();
$tdataset_audit_subType[".listFields"][] = "subTypeCode";
$tdataset_audit_subType[".listFields"][] = "subTypeName";

$tdataset_audit_subType[".hideMobileList"] = array();


$tdataset_audit_subType[".viewFields"] = array();

$tdataset_audit_subType[".addFields"] = array();

$tdataset_audit_subType[".masterListFields"] = array();
$tdataset_audit_subType[".masterListFields"][] = "subTypeID";
$tdataset_audit_subType[".masterListFields"][] = "subTypeName";
$tdataset_audit_subType[".masterListFields"][] = "subTypeCode";
$tdataset_audit_subType[".masterListFields"][] = "aTypeCode";

$tdataset_audit_subType[".inlineAddFields"] = array();
$tdataset_audit_subType[".inlineAddFields"][] = "subTypeCode";
$tdataset_audit_subType[".inlineAddFields"][] = "subTypeName";

$tdataset_audit_subType[".editFields"] = array();

$tdataset_audit_subType[".inlineEditFields"] = array();
$tdataset_audit_subType[".inlineEditFields"][] = "subTypeCode";
$tdataset_audit_subType[".inlineEditFields"][] = "subTypeName";

$tdataset_audit_subType[".exportFields"] = array();

$tdataset_audit_subType[".importFields"] = array();

$tdataset_audit_subType[".printFields"] = array();

//	subTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "subTypeID";
	$fdata["GoodName"] = "subTypeID";
	$fdata["ownerTable"] = "set_audit_subtype";
	$fdata["Label"] = GetFieldLabel("set_audit_subType","subTypeID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "subTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subTypeID";

	
	
			
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








	$tdataset_audit_subType["subTypeID"] = $fdata;
//	subTypeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "subTypeName";
	$fdata["GoodName"] = "subTypeName";
	$fdata["ownerTable"] = "set_audit_subtype";
	$fdata["Label"] = GetFieldLabel("set_audit_subType","subTypeName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "subTypeName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subTypeName";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 344;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataset_audit_subType["subTypeName"] = $fdata;
//	subTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subTypeCode";
	$fdata["GoodName"] = "subTypeCode";
	$fdata["ownerTable"] = "set_audit_subtype";
	$fdata["Label"] = GetFieldLabel("set_audit_subType","subTypeCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "subTypeCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subTypeCode";

	
	
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

		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataset_audit_subType["subTypeCode"] = $fdata;
//	aTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aTypeCode";
	$fdata["GoodName"] = "aTypeCode";
	$fdata["ownerTable"] = "set_audit_subtype";
	$fdata["Label"] = GetFieldLabel("set_audit_subType","aTypeCode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "aTypeCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aTypeCode";

	
	
			
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








	$tdataset_audit_subType["aTypeCode"] = $fdata;


$tables_data["set_audit_subType"]=&$tdataset_audit_subType;
$field_labels["set_audit_subType"] = &$fieldLabelsset_audit_subType;
$fieldToolTips["set_audit_subType"] = &$fieldToolTipsset_audit_subType;
$page_titles["set_audit_subType"] = &$pageTitlesset_audit_subType;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_audit_subType"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["set_audit_subType"] = array();


	
				$strOriginalDetailsTable="set_audit_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="set_audit_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "set_audit_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["set_audit_subType"][0] = $masterParams;
				$masterTablesData["set_audit_subType"][0]["masterKeys"] = array();
	$masterTablesData["set_audit_subType"][0]["masterKeys"][]="aTypeCode";
				$masterTablesData["set_audit_subType"][0]["detailKeys"] = array();
	$masterTablesData["set_audit_subType"][0]["detailKeys"][]="aTypeCode";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_audit_subType()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "subTypeID,  	subTypeName,  	subTypeCode,  	aTypeCode";
$proto0["m_strFrom"] = "FROM set_audit_subType";
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
	"m_strName" => "subTypeID",
	"m_strTable" => "set_audit_subtype",
	"m_srcTableName" => "set_audit_subType"
));

$proto5["m_sql"] = "subTypeID";
$proto5["m_srcTableName"] = "set_audit_subType";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "subTypeName",
	"m_strTable" => "set_audit_subtype",
	"m_srcTableName" => "set_audit_subType"
));

$proto7["m_sql"] = "subTypeName";
$proto7["m_srcTableName"] = "set_audit_subType";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "subTypeCode",
	"m_strTable" => "set_audit_subtype",
	"m_srcTableName" => "set_audit_subType"
));

$proto9["m_sql"] = "subTypeCode";
$proto9["m_srcTableName"] = "set_audit_subType";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "aTypeCode",
	"m_strTable" => "set_audit_subtype",
	"m_srcTableName" => "set_audit_subType"
));

$proto11["m_sql"] = "aTypeCode";
$proto11["m_srcTableName"] = "set_audit_subType";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "set_audit_subtype";
$proto14["m_srcTableName"] = "set_audit_subType";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "subTypeID";
$proto14["m_columns"][] = "subTypeName";
$proto14["m_columns"][] = "subTypeCode";
$proto14["m_columns"][] = "aTypeCode";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "set_audit_subType";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "set_audit_subType";
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

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="set_audit_subType";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_audit_subType = createSqlQuery_set_audit_subType();



				

$tdataset_audit_subType[".sqlquery"] = $queryData_set_audit_subType;

$tableEvents["set_audit_subType"] = new eventsBase;
$tdataset_audit_subType[".hasEvents"] = false;

?>