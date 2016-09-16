<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_audit_element = array();
	$tdataset_audit_element[".truncateText"] = true;
	$tdataset_audit_element[".NumberOfChars"] = 80;
	$tdataset_audit_element[".ShortName"] = "set_audit_element";
	$tdataset_audit_element[".OwnerID"] = "";
	$tdataset_audit_element[".OriginalTable"] = "set_audit_element";

//	field labels
$fieldLabelsset_audit_element = array();
$fieldToolTipsset_audit_element = array();
$pageTitlesset_audit_element = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_audit_element["Malay"] = array();
	$fieldToolTipsset_audit_element["Malay"] = array();
	$pageTitlesset_audit_element["Malay"] = array();
	$fieldLabelsset_audit_element["Malay"]["aSub"] = "Elemen";
	$fieldToolTipsset_audit_element["Malay"]["aSub"] = "";
	$fieldLabelsset_audit_element["Malay"]["aSubNo"] = "No Rujukan";
	$fieldToolTipsset_audit_element["Malay"]["aSubNo"] = "";
	$fieldLabelsset_audit_element["Malay"]["aElementID"] = "A Element ID";
	$fieldToolTipsset_audit_element["Malay"]["aElementID"] = "";
	$fieldLabelsset_audit_element["Malay"]["aTypeCode"] = "A Type Code";
	$fieldToolTipsset_audit_element["Malay"]["aTypeCode"] = "";
	if (count($fieldToolTipsset_audit_element["Malay"]))
		$tdataset_audit_element[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_audit_element[""] = array();
	$fieldToolTipsset_audit_element[""] = array();
	$pageTitlesset_audit_element[""] = array();
	if (count($fieldToolTipsset_audit_element[""]))
		$tdataset_audit_element[".isUseToolTips"] = true;
}


	$tdataset_audit_element[".NCSearch"] = true;



$tdataset_audit_element[".shortTableName"] = "set_audit_element";
$tdataset_audit_element[".nSecOptions"] = 0;
$tdataset_audit_element[".recsPerRowList"] = 1;
$tdataset_audit_element[".recsPerRowPrint"] = 1;
$tdataset_audit_element[".mainTableOwnerID"] = "";
$tdataset_audit_element[".moveNext"] = 1;
$tdataset_audit_element[".entityType"] = 0;

$tdataset_audit_element[".strOriginalTableName"] = "set_audit_element";




$tdataset_audit_element[".showAddInPopup"] = false;

$tdataset_audit_element[".showEditInPopup"] = false;

$tdataset_audit_element[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_audit_element[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_audit_element[".fieldsForRegister"] = array();

$tdataset_audit_element[".listAjax"] = false;

	$tdataset_audit_element[".audit"] = false;

	$tdataset_audit_element[".locking"] = false;



$tdataset_audit_element[".list"] = true;

$tdataset_audit_element[".inlineAdd"] = true;




$tdataset_audit_element[".delete"] = true;

$tdataset_audit_element[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_audit_element[".searchSaving"] = false;
//

$tdataset_audit_element[".showSearchPanel"] = true;
		$tdataset_audit_element[".flexibleSearch"] = true;

if (isMobile())
	$tdataset_audit_element[".isUseAjaxSuggest"] = false;
else
	$tdataset_audit_element[".isUseAjaxSuggest"] = true;

$tdataset_audit_element[".rowHighlite"] = true;


																				
$tdataset_audit_element[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_audit_element[".isUseTimeForSearch"] = false;





$tdataset_audit_element[".allSearchFields"] = array();
$tdataset_audit_element[".filterFields"] = array();
$tdataset_audit_element[".requiredSearchFields"] = array();



$tdataset_audit_element[".googleLikeFields"] = array();
$tdataset_audit_element[".googleLikeFields"][] = "aElementID";
$tdataset_audit_element[".googleLikeFields"][] = "aTypeCode";
$tdataset_audit_element[".googleLikeFields"][] = "aSub";
$tdataset_audit_element[".googleLikeFields"][] = "aSubNo";



$tdataset_audit_element[".tableType"] = "list";

$tdataset_audit_element[".printerPageOrientation"] = 0;
$tdataset_audit_element[".nPrinterPageScale"] = 100;

$tdataset_audit_element[".nPrinterSplitRecords"] = 40;

$tdataset_audit_element[".nPrinterPDFSplitRecords"] = 40;



$tdataset_audit_element[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataset_audit_element[".pageSize"] = 40;

$tdataset_audit_element[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_audit_element[".strOrderBy"] = $tstrOrderBy;

$tdataset_audit_element[".orderindexes"] = array();

$tdataset_audit_element[".sqlHead"] = "SELECT aElementID,  	aTypeCode,  	aSub,  	aSubNo";
$tdataset_audit_element[".sqlFrom"] = "FROM set_audit_element";
$tdataset_audit_element[".sqlWhereExpr"] = "";
$tdataset_audit_element[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_audit_element[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_audit_element[".arrGroupsPerPage"] = $arrGPP;

$tdataset_audit_element[".highlightSearchResults"] = true;

$tableKeysset_audit_element = array();
$tableKeysset_audit_element[] = "aElementID";
$tdataset_audit_element[".Keys"] = $tableKeysset_audit_element;

$tdataset_audit_element[".listFields"] = array();
$tdataset_audit_element[".listFields"][] = "aSubNo";
$tdataset_audit_element[".listFields"][] = "aSub";

$tdataset_audit_element[".hideMobileList"] = array();


$tdataset_audit_element[".viewFields"] = array();

$tdataset_audit_element[".addFields"] = array();

$tdataset_audit_element[".masterListFields"] = array();
$tdataset_audit_element[".masterListFields"][] = "aTypeCode";
$tdataset_audit_element[".masterListFields"][] = "aElementID";
$tdataset_audit_element[".masterListFields"][] = "aSubNo";
$tdataset_audit_element[".masterListFields"][] = "aSub";

$tdataset_audit_element[".inlineAddFields"] = array();
$tdataset_audit_element[".inlineAddFields"][] = "aSubNo";
$tdataset_audit_element[".inlineAddFields"][] = "aSub";

$tdataset_audit_element[".editFields"] = array();

$tdataset_audit_element[".inlineEditFields"] = array();

$tdataset_audit_element[".exportFields"] = array();

$tdataset_audit_element[".importFields"] = array();

$tdataset_audit_element[".printFields"] = array();

//	aElementID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aElementID";
	$fdata["GoodName"] = "aElementID";
	$fdata["ownerTable"] = "set_audit_element";
	$fdata["Label"] = GetFieldLabel("set_audit_element","aElementID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "aElementID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aElementID";

	
	
			
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








	$tdataset_audit_element["aElementID"] = $fdata;
//	aTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aTypeCode";
	$fdata["GoodName"] = "aTypeCode";
	$fdata["ownerTable"] = "set_audit_element";
	$fdata["Label"] = GetFieldLabel("set_audit_element","aTypeCode");
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataset_audit_element["aTypeCode"] = $fdata;
//	aSub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aSub";
	$fdata["GoodName"] = "aSub";
	$fdata["ownerTable"] = "set_audit_element";
	$fdata["Label"] = GetFieldLabel("set_audit_element","aSub");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
	
	
	
		$fdata["strField"] = "aSub";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aSub";

	
	
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








	$tdataset_audit_element["aSub"] = $fdata;
//	aSubNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aSubNo";
	$fdata["GoodName"] = "aSubNo";
	$fdata["ownerTable"] = "set_audit_element";
	$fdata["Label"] = GetFieldLabel("set_audit_element","aSubNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
	
	
	
		$fdata["strField"] = "aSubNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aSubNo";

	
	
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

		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataset_audit_element["aSubNo"] = $fdata;


$tables_data["set_audit_element"]=&$tdataset_audit_element;
$field_labels["set_audit_element"] = &$fieldLabelsset_audit_element;
$fieldToolTips["set_audit_element"] = &$fieldToolTipsset_audit_element;
$page_titles["set_audit_element"] = &$pageTitlesset_audit_element;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_audit_element"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["set_audit_element"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_audit_element()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aElementID,  	aTypeCode,  	aSub,  	aSubNo";
$proto0["m_strFrom"] = "FROM set_audit_element";
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
	"m_strName" => "aElementID",
	"m_strTable" => "set_audit_element",
	"m_srcTableName" => "set_audit_element"
));

$proto5["m_sql"] = "aElementID";
$proto5["m_srcTableName"] = "set_audit_element";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "aTypeCode",
	"m_strTable" => "set_audit_element",
	"m_srcTableName" => "set_audit_element"
));

$proto7["m_sql"] = "aTypeCode";
$proto7["m_srcTableName"] = "set_audit_element";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "aSub",
	"m_strTable" => "set_audit_element",
	"m_srcTableName" => "set_audit_element"
));

$proto9["m_sql"] = "aSub";
$proto9["m_srcTableName"] = "set_audit_element";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "aSubNo",
	"m_strTable" => "set_audit_element",
	"m_srcTableName" => "set_audit_element"
));

$proto11["m_sql"] = "aSubNo";
$proto11["m_srcTableName"] = "set_audit_element";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "set_audit_element";
$proto14["m_srcTableName"] = "set_audit_element";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "aElementID";
$proto14["m_columns"][] = "aTypeCode";
$proto14["m_columns"][] = "aSub";
$proto14["m_columns"][] = "aSubNo";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "set_audit_element";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "set_audit_element";
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
$proto0["m_srcTableName"]="set_audit_element";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_audit_element = createSqlQuery_set_audit_element();



				

$tdataset_audit_element[".sqlquery"] = $queryData_set_audit_element;

$tableEvents["set_audit_element"] = new eventsBase;
$tdataset_audit_element[".hasEvents"] = false;

?>