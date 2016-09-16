<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_audit_aType_element = array();	
	$tdataset_audit_aType_element[".truncateText"] = true;
	$tdataset_audit_aType_element[".NumberOfChars"] = 80; 
	$tdataset_audit_aType_element[".ShortName"] = "set_audit_aType_element";
	$tdataset_audit_aType_element[".OwnerID"] = "";
	$tdataset_audit_aType_element[".OriginalTable"] = "set_field";

//	field labels
$fieldLabelsset_audit_aType_element = array();
$fieldToolTipsset_audit_aType_element = array();
$pageTitlesset_audit_aType_element = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_audit_aType_element["Malay"] = array();
	$fieldToolTipsset_audit_aType_element["Malay"] = array();
	$pageTitlesset_audit_aType_element["Malay"] = array();
	$fieldLabelsset_audit_aType_element["Malay"]["fieldID"] = "Field ID";
	$fieldToolTipsset_audit_aType_element["Malay"]["fieldID"] = "";
	$fieldLabelsset_audit_aType_element["Malay"]["catID"] = "Cat ID";
	$fieldToolTipsset_audit_aType_element["Malay"]["catID"] = "";
	$fieldLabelsset_audit_aType_element["Malay"]["fieldName"] = "Nama";
	$fieldToolTipsset_audit_aType_element["Malay"]["fieldName"] = "";
	$fieldLabelsset_audit_aType_element["Malay"]["fieldValue"] = "Singkatan";
	$fieldToolTipsset_audit_aType_element["Malay"]["fieldValue"] = "";
	if (count($fieldToolTipsset_audit_aType_element["Malay"]))
		$tdataset_audit_aType_element[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_audit_aType_element[""] = array();
	$fieldToolTipsset_audit_aType_element[""] = array();
	$pageTitlesset_audit_aType_element[""] = array();
	if (count($fieldToolTipsset_audit_aType_element[""]))
		$tdataset_audit_aType_element[".isUseToolTips"] = true;
}
	
	
	$tdataset_audit_aType_element[".NCSearch"] = true;



$tdataset_audit_aType_element[".shortTableName"] = "set_audit_aType_element";
$tdataset_audit_aType_element[".nSecOptions"] = 0;
$tdataset_audit_aType_element[".recsPerRowList"] = 1;
$tdataset_audit_aType_element[".recsPerRowPrint"] = 1;
$tdataset_audit_aType_element[".mainTableOwnerID"] = "";
$tdataset_audit_aType_element[".moveNext"] = 1;
$tdataset_audit_aType_element[".entityType"] = 1;

$tdataset_audit_aType_element[".strOriginalTableName"] = "set_field";




$tdataset_audit_aType_element[".showAddInPopup"] = false;

$tdataset_audit_aType_element[".showEditInPopup"] = false;

$tdataset_audit_aType_element[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_audit_aType_element[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_audit_aType_element[".fieldsForRegister"] = array();

$tdataset_audit_aType_element[".listAjax"] = false;

	$tdataset_audit_aType_element[".audit"] = false;

	$tdataset_audit_aType_element[".locking"] = false;



$tdataset_audit_aType_element[".list"] = true;






$tdataset_audit_aType_element[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_audit_aType_element[".searchSaving"] = false;
//

if (isMobile()){
	$tdataset_audit_aType_element[".showSearchPanel"] = true;
}
else 
	$tdataset_audit_aType_element[".showSearchPanel"] = false;

if (isMobile())
	$tdataset_audit_aType_element[".isUseAjaxSuggest"] = false;
else 
	$tdataset_audit_aType_element[".isUseAjaxSuggest"] = true;

$tdataset_audit_aType_element[".rowHighlite"] = true;


																							
$tdataset_audit_aType_element[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_audit_aType_element[".isUseTimeForSearch"] = false;




$tdataset_audit_aType_element[".detailsLinksOnList"] = "1";

$tdataset_audit_aType_element[".allSearchFields"] = array();
$tdataset_audit_aType_element[".filterFields"] = array();
$tdataset_audit_aType_element[".requiredSearchFields"] = array();

$tdataset_audit_aType_element[".allSearchFields"][] = "fieldName";
	$tdataset_audit_aType_element[".allSearchFields"][] = "fieldValue";
	



$tdataset_audit_aType_element[".advSearchFields"] = array();
$tdataset_audit_aType_element[".advSearchFields"][] = "fieldName";
$tdataset_audit_aType_element[".advSearchFields"][] = "fieldValue";

$tdataset_audit_aType_element[".tableType"] = "list";

$tdataset_audit_aType_element[".printerPageOrientation"] = 0;
$tdataset_audit_aType_element[".nPrinterPageScale"] = 100;

$tdataset_audit_aType_element[".nPrinterSplitRecords"] = 40;

$tdataset_audit_aType_element[".nPrinterPDFSplitRecords"] = 40;



$tdataset_audit_aType_element[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataset_audit_aType_element[".pageSize"] = 20;

$tdataset_audit_aType_element[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_audit_aType_element[".strOrderBy"] = $tstrOrderBy;

$tdataset_audit_aType_element[".orderindexes"] = array();

$tdataset_audit_aType_element[".sqlHead"] = "SELECT fieldID,  catID,  fieldName,  fieldValue";
$tdataset_audit_aType_element[".sqlFrom"] = "FROM set_field";
$tdataset_audit_aType_element[".sqlWhereExpr"] = "catID =1";
$tdataset_audit_aType_element[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_audit_aType_element[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_audit_aType_element[".arrGroupsPerPage"] = $arrGPP;


$tableKeysset_audit_aType_element = array();
$tableKeysset_audit_aType_element[] = "fieldID";
$tdataset_audit_aType_element[".Keys"] = $tableKeysset_audit_aType_element;

$tdataset_audit_aType_element[".listFields"] = array();
$tdataset_audit_aType_element[".listFields"][] = "fieldName";
$tdataset_audit_aType_element[".listFields"][] = "fieldValue";

$tdataset_audit_aType_element[".hideMobileList"] = array();


$tdataset_audit_aType_element[".viewFields"] = array();

$tdataset_audit_aType_element[".addFields"] = array();

$tdataset_audit_aType_element[".masterListFields"] = array();
$tdataset_audit_aType_element[".masterListFields"][] = "fieldID";
$tdataset_audit_aType_element[".masterListFields"][] = "catID";
$tdataset_audit_aType_element[".masterListFields"][] = "fieldName";
$tdataset_audit_aType_element[".masterListFields"][] = "fieldValue";

$tdataset_audit_aType_element[".inlineAddFields"] = array();
$tdataset_audit_aType_element[".inlineAddFields"][] = "fieldName";
$tdataset_audit_aType_element[".inlineAddFields"][] = "fieldValue";

$tdataset_audit_aType_element[".editFields"] = array();

$tdataset_audit_aType_element[".inlineEditFields"] = array();
$tdataset_audit_aType_element[".inlineEditFields"][] = "fieldName";
$tdataset_audit_aType_element[".inlineEditFields"][] = "fieldValue";

$tdataset_audit_aType_element[".exportFields"] = array();

$tdataset_audit_aType_element[".importFields"] = array();

$tdataset_audit_aType_element[".printFields"] = array();

//	fieldID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fieldID";
	$fdata["GoodName"] = "fieldID";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType_element","fieldID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "fieldID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldID";
	
		
		
				
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
			
		$edata["controlWidth"] = 143;
	
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
	
	
	
	

	

	
	$tdataset_audit_aType_element["fieldID"] = $fdata;
//	catID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "catID";
	$fdata["GoodName"] = "catID";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType_element","catID"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "catID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catID";
	
		
		
				
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
			
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_aType_element["catID"] = $fdata;
//	fieldName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fieldName";
	$fdata["GoodName"] = "fieldName";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType_element","fieldName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fieldName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldName";
	
		
		
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
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdataset_audit_aType_element["fieldName"] = $fdata;
//	fieldValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fieldValue";
	$fdata["GoodName"] = "fieldValue";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType_element","fieldValue"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fieldValue"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldValue";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdataset_audit_aType_element["fieldValue"] = $fdata;

	
$tables_data["set_audit_aType_element"]=&$tdataset_audit_aType_element;
$field_labels["set_audit_aType_element"] = &$fieldLabelsset_audit_aType_element;
$fieldToolTips["set_audit_aType_element"] = &$fieldToolTipsset_audit_aType_element;
$page_titles["set_audit_aType_element"] = &$pageTitlesset_audit_aType_element;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_audit_aType_element"] = array();
//	set_audit_type
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="set_audit_type";
		$detailsParam["dOriginalTable"] = "set_audit_type";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "set_audit_type";
	$detailsParam["dCaptionTable"] = GetTableCaption("set_audit_type");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["set_audit_aType_element"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["set_audit_aType_element"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["set_audit_aType_element"][$dIndex]["masterKeys"][]="fieldName";

				$detailsTablesData["set_audit_aType_element"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["set_audit_aType_element"][$dIndex]["detailKeys"][]="aType";
	
// tables which are master tables for current table (detail)
$masterTablesData["set_audit_aType_element"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_audit_aType_element()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fieldID,  catID,  fieldName,  fieldValue";
$proto0["m_strFrom"] = "FROM set_field";
$proto0["m_strWhere"] = "catID =1";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "catID =1";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "catID",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType_element"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=1";
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
	"m_strName" => "fieldID",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType_element"
));

$proto5["m_sql"] = "fieldID";
$proto5["m_srcTableName"] = "set_audit_aType_element";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "catID",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType_element"
));

$proto7["m_sql"] = "catID";
$proto7["m_srcTableName"] = "set_audit_aType_element";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldName",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType_element"
));

$proto9["m_sql"] = "fieldName";
$proto9["m_srcTableName"] = "set_audit_aType_element";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldValue",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType_element"
));

$proto11["m_sql"] = "fieldValue";
$proto11["m_srcTableName"] = "set_audit_aType_element";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "set_field";
$proto14["m_srcTableName"] = "set_audit_aType_element";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "fieldID";
$proto14["m_columns"][] = "catID";
$proto14["m_columns"][] = "fieldName";
$proto14["m_columns"][] = "fieldValue";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "set_field";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "set_audit_aType_element";
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
$proto0["m_srcTableName"]="set_audit_aType_element";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_audit_aType_element = createSqlQuery_set_audit_aType_element();


	
				
	
$tdataset_audit_aType_element[".sqlquery"] = $queryData_set_audit_aType_element;

$tableEvents["set_audit_aType_element"] = new eventsBase;
$tdataset_audit_aType_element[".hasEvents"] = false;

?>