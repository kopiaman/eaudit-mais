<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafinding = array();
	$tdatafinding[".truncateText"] = true;
	$tdatafinding[".NumberOfChars"] = 80;
	$tdatafinding[".ShortName"] = "finding";
	$tdatafinding[".OwnerID"] = "";
	$tdatafinding[".OriginalTable"] = "finding";

//	field labels
$fieldLabelsfinding = array();
$fieldToolTipsfinding = array();
$pageTitlesfinding = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsfinding["Malay"] = array();
	$fieldToolTipsfinding["Malay"] = array();
	$pageTitlesfinding["Malay"] = array();
	$fieldLabelsfinding["Malay"]["fid"] = "Fid";
	$fieldToolTipsfinding["Malay"]["fid"] = "";
	$fieldLabelsfinding["Malay"]["finding"] = "Penemuan";
	$fieldToolTipsfinding["Malay"]["finding"] = "";
	$fieldLabelsfinding["Malay"]["aTypeCode"] = "Jenis Auditan";
	$fieldToolTipsfinding["Malay"]["aTypeCode"] = "";
	if (count($fieldToolTipsfinding["Malay"]))
		$tdatafinding[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfinding[""] = array();
	$fieldToolTipsfinding[""] = array();
	$pageTitlesfinding[""] = array();
	if (count($fieldToolTipsfinding[""]))
		$tdatafinding[".isUseToolTips"] = true;
}


	$tdatafinding[".NCSearch"] = true;



$tdatafinding[".shortTableName"] = "finding";
$tdatafinding[".nSecOptions"] = 0;
$tdatafinding[".recsPerRowList"] = 1;
$tdatafinding[".recsPerRowPrint"] = 1;
$tdatafinding[".mainTableOwnerID"] = "";
$tdatafinding[".moveNext"] = 1;
$tdatafinding[".entityType"] = 0;

$tdatafinding[".strOriginalTableName"] = "finding";




$tdatafinding[".showAddInPopup"] = true;

$tdatafinding[".showEditInPopup"] = true;

$tdatafinding[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "edit_under_center";
$tdatafinding[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafinding[".fieldsForRegister"] = array();

$tdatafinding[".listAjax"] = false;

	$tdatafinding[".audit"] = false;

	$tdatafinding[".locking"] = false;

$tdatafinding[".edit"] = true;
$tdatafinding[".afterEditAction"] = 1;
$tdatafinding[".closePopupAfterEdit"] = 1;
$tdatafinding[".afterEditActionDetTable"] = "";

$tdatafinding[".add"] = true;
$tdatafinding[".afterAddAction"] = 1;
$tdatafinding[".closePopupAfterAdd"] = 1;
$tdatafinding[".afterAddActionDetTable"] = "";

$tdatafinding[".list"] = true;





$tdatafinding[".delete"] = true;

$tdatafinding[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafinding[".searchSaving"] = false;
//

$tdatafinding[".showSearchPanel"] = true;
		$tdatafinding[".flexibleSearch"] = true;

if (isMobile())
	$tdatafinding[".isUseAjaxSuggest"] = false;
else
	$tdatafinding[".isUseAjaxSuggest"] = true;

$tdatafinding[".rowHighlite"] = true;


																				
$tdatafinding[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafinding[".isUseTimeForSearch"] = false;





$tdatafinding[".allSearchFields"] = array();
$tdatafinding[".filterFields"] = array();
$tdatafinding[".requiredSearchFields"] = array();

$tdatafinding[".allSearchFields"][] = "finding";
	

$tdatafinding[".googleLikeFields"] = array();
$tdatafinding[".googleLikeFields"][] = "finding";
$tdatafinding[".googleLikeFields"][] = "aTypeCode";

$tdatafinding[".panelSearchFields"] = array();
$tdatafinding[".searchPanelOptions"] = array();
$tdatafinding[".panelSearchFields"][] = "finding";
	
$tdatafinding[".advSearchFields"] = array();
$tdatafinding[".advSearchFields"][] = "finding";

$tdatafinding[".tableType"] = "list";

$tdatafinding[".printerPageOrientation"] = 0;
$tdatafinding[".nPrinterPageScale"] = 100;

$tdatafinding[".nPrinterSplitRecords"] = 40;

$tdatafinding[".nPrinterPDFSplitRecords"] = 40;



$tdatafinding[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatafinding[".pageSize"] = 20;

$tdatafinding[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY fid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafinding[".strOrderBy"] = $tstrOrderBy;

$tdatafinding[".orderindexes"] = array();
$tdatafinding[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "fid");

$tdatafinding[".sqlHead"] = "SELECT fid,  finding,  aTypeCode";
$tdatafinding[".sqlFrom"] = "FROM finding";
$tdatafinding[".sqlWhereExpr"] = "";
$tdatafinding[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafinding[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafinding[".arrGroupsPerPage"] = $arrGPP;

$tdatafinding[".highlightSearchResults"] = true;

$tableKeysfinding = array();
$tableKeysfinding[] = "fid";
$tdatafinding[".Keys"] = $tableKeysfinding;

$tdatafinding[".listFields"] = array();
$tdatafinding[".listFields"][] = "finding";

$tdatafinding[".hideMobileList"] = array();


$tdatafinding[".viewFields"] = array();

$tdatafinding[".addFields"] = array();
$tdatafinding[".addFields"][] = "finding";

$tdatafinding[".masterListFields"] = array();
$tdatafinding[".masterListFields"][] = "fid";
$tdatafinding[".masterListFields"][] = "finding";
$tdatafinding[".masterListFields"][] = "aTypeCode";

$tdatafinding[".inlineAddFields"] = array();

$tdatafinding[".editFields"] = array();
$tdatafinding[".editFields"][] = "finding";

$tdatafinding[".inlineEditFields"] = array();

$tdatafinding[".exportFields"] = array();

$tdatafinding[".importFields"] = array();

$tdatafinding[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "finding";
	$fdata["Label"] = GetFieldLabel("finding","fid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fid";

	
	
			
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








	$tdatafinding["fid"] = $fdata;
//	finding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "finding";
	$fdata["GoodName"] = "finding";
	$fdata["ownerTable"] = "finding";
	$fdata["Label"] = GetFieldLabel("finding","finding");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "finding";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finding";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 400;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdatafinding["finding"] = $fdata;
//	aTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aTypeCode";
	$fdata["GoodName"] = "aTypeCode";
	$fdata["ownerTable"] = "finding";
	$fdata["Label"] = GetFieldLabel("finding","aTypeCode");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_audit_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "aTypeCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafinding["aTypeCode"] = $fdata;


$tables_data["finding"]=&$tdatafinding;
$field_labels["finding"] = &$fieldLabelsfinding;
$fieldToolTips["finding"] = &$fieldToolTipsfinding;
$page_titles["finding"] = &$pageTitlesfinding;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["finding"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["finding"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_finding()
{
$proto2=array();
$proto2["m_strHead"] = "SELECT";
$proto2["m_strFieldList"] = "fid,  finding,  aTypeCode";
$proto2["m_strFrom"] = "FROM finding";
$proto2["m_strWhere"] = "";
$proto2["m_strOrderBy"] = "ORDER BY fid DESC";
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
	"m_strName" => "fid",
	"m_strTable" => "finding",
	"m_srcTableName" => "finding"
));

$proto7["m_sql"] = "fid";
$proto7["m_srcTableName"] = "finding";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto2["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "finding",
	"m_strTable" => "finding",
	"m_srcTableName" => "finding"
));

$proto9["m_sql"] = "finding";
$proto9["m_srcTableName"] = "finding";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto2["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "aTypeCode",
	"m_strTable" => "finding",
	"m_srcTableName" => "finding"
));

$proto11["m_sql"] = "aTypeCode";
$proto11["m_srcTableName"] = "finding";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto2["m_fieldlist"][]=$obj;
$proto2["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "finding";
$proto14["m_srcTableName"] = "finding";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "fid";
$proto14["m_columns"][] = "finding";
$proto14["m_columns"][] = "aTypeCode";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "finding";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "finding";
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
$proto2["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "finding",
	"m_srcTableName" => "finding"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 0;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto2["m_orderby"][]=$obj;					
$proto2["m_srcTableName"]="finding";		
$obj = new SQLQuery($proto2);

	return $obj;
}
$queryData_finding = createSqlQuery_finding();



			

$tdatafinding[".sqlquery"] = $queryData_finding;

$tableEvents["finding"] = new eventsBase;
$tdatafinding[".hasEvents"] = false;

?>