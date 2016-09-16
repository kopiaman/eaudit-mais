<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_audit_aType = array();	
	$tdataset_audit_aType[".truncateText"] = true;
	$tdataset_audit_aType[".NumberOfChars"] = 80; 
	$tdataset_audit_aType[".ShortName"] = "set_audit_aType";
	$tdataset_audit_aType[".OwnerID"] = "";
	$tdataset_audit_aType[".OriginalTable"] = "set_field";

//	field labels
$fieldLabelsset_audit_aType = array();
$fieldToolTipsset_audit_aType = array();
$pageTitlesset_audit_aType = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_audit_aType["Malay"] = array();
	$fieldToolTipsset_audit_aType["Malay"] = array();
	$pageTitlesset_audit_aType["Malay"] = array();
	$fieldLabelsset_audit_aType["Malay"]["fieldID"] = "Field ID";
	$fieldToolTipsset_audit_aType["Malay"]["fieldID"] = "";
	$fieldLabelsset_audit_aType["Malay"]["catID"] = "Cat ID";
	$fieldToolTipsset_audit_aType["Malay"]["catID"] = "";
	$fieldLabelsset_audit_aType["Malay"]["fieldName"] = "Nama";
	$fieldToolTipsset_audit_aType["Malay"]["fieldName"] = "";
	$fieldLabelsset_audit_aType["Malay"]["fieldValue"] = "Singkatan";
	$fieldToolTipsset_audit_aType["Malay"]["fieldValue"] = "";
	if (count($fieldToolTipsset_audit_aType["Malay"]))
		$tdataset_audit_aType[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_audit_aType[""] = array();
	$fieldToolTipsset_audit_aType[""] = array();
	$pageTitlesset_audit_aType[""] = array();
	if (count($fieldToolTipsset_audit_aType[""]))
		$tdataset_audit_aType[".isUseToolTips"] = true;
}
	
	
	$tdataset_audit_aType[".NCSearch"] = true;



$tdataset_audit_aType[".shortTableName"] = "set_audit_aType";
$tdataset_audit_aType[".nSecOptions"] = 0;
$tdataset_audit_aType[".recsPerRowList"] = 1;
$tdataset_audit_aType[".recsPerRowPrint"] = 1;
$tdataset_audit_aType[".mainTableOwnerID"] = "";
$tdataset_audit_aType[".moveNext"] = 1;
$tdataset_audit_aType[".entityType"] = 1;

$tdataset_audit_aType[".strOriginalTableName"] = "set_field";




$tdataset_audit_aType[".showAddInPopup"] = false;

$tdataset_audit_aType[".showEditInPopup"] = false;

$tdataset_audit_aType[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_audit_aType[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_audit_aType[".fieldsForRegister"] = array();

$tdataset_audit_aType[".listAjax"] = false;

	$tdataset_audit_aType[".audit"] = false;

	$tdataset_audit_aType[".locking"] = false;



$tdataset_audit_aType[".list"] = true;

$tdataset_audit_aType[".inlineEdit"] = true;
$tdataset_audit_aType[".inlineAdd"] = true;





$tdataset_audit_aType[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_audit_aType[".searchSaving"] = false;
//

if (isMobile()){
	$tdataset_audit_aType[".showSearchPanel"] = true;
}
else 
	$tdataset_audit_aType[".showSearchPanel"] = false;

if (isMobile())
	$tdataset_audit_aType[".isUseAjaxSuggest"] = false;
else 
	$tdataset_audit_aType[".isUseAjaxSuggest"] = true;

$tdataset_audit_aType[".rowHighlite"] = true;


																							
$tdataset_audit_aType[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_audit_aType[".isUseTimeForSearch"] = false;




$tdataset_audit_aType[".detailsLinksOnList"] = "1";

$tdataset_audit_aType[".allSearchFields"] = array();
$tdataset_audit_aType[".filterFields"] = array();
$tdataset_audit_aType[".requiredSearchFields"] = array();

$tdataset_audit_aType[".allSearchFields"][] = "fieldName";
	$tdataset_audit_aType[".allSearchFields"][] = "fieldValue";
	



$tdataset_audit_aType[".advSearchFields"] = array();
$tdataset_audit_aType[".advSearchFields"][] = "fieldName";
$tdataset_audit_aType[".advSearchFields"][] = "fieldValue";

$tdataset_audit_aType[".tableType"] = "list";

$tdataset_audit_aType[".printerPageOrientation"] = 0;
$tdataset_audit_aType[".nPrinterPageScale"] = 100;

$tdataset_audit_aType[".nPrinterSplitRecords"] = 40;

$tdataset_audit_aType[".nPrinterPDFSplitRecords"] = 40;



$tdataset_audit_aType[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataset_audit_aType[".pageSize"] = 20;

$tdataset_audit_aType[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_audit_aType[".strOrderBy"] = $tstrOrderBy;

$tdataset_audit_aType[".orderindexes"] = array();

$tdataset_audit_aType[".sqlHead"] = "SELECT fieldID,  catID,  fieldName,  fieldValue";
$tdataset_audit_aType[".sqlFrom"] = "FROM set_field";
$tdataset_audit_aType[".sqlWhereExpr"] = "catID =1";
$tdataset_audit_aType[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_audit_aType[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_audit_aType[".arrGroupsPerPage"] = $arrGPP;


$tableKeysset_audit_aType = array();
$tableKeysset_audit_aType[] = "fieldID";
$tdataset_audit_aType[".Keys"] = $tableKeysset_audit_aType;

$tdataset_audit_aType[".listFields"] = array();
$tdataset_audit_aType[".listFields"][] = "fieldName";
$tdataset_audit_aType[".listFields"][] = "fieldValue";

$tdataset_audit_aType[".hideMobileList"] = array();


$tdataset_audit_aType[".viewFields"] = array();

$tdataset_audit_aType[".addFields"] = array();

$tdataset_audit_aType[".masterListFields"] = array();
$tdataset_audit_aType[".masterListFields"][] = "fieldID";
$tdataset_audit_aType[".masterListFields"][] = "catID";
$tdataset_audit_aType[".masterListFields"][] = "fieldName";
$tdataset_audit_aType[".masterListFields"][] = "fieldValue";

$tdataset_audit_aType[".inlineAddFields"] = array();
$tdataset_audit_aType[".inlineAddFields"][] = "fieldName";
$tdataset_audit_aType[".inlineAddFields"][] = "fieldValue";

$tdataset_audit_aType[".editFields"] = array();

$tdataset_audit_aType[".inlineEditFields"] = array();
$tdataset_audit_aType[".inlineEditFields"][] = "fieldName";
$tdataset_audit_aType[".inlineEditFields"][] = "fieldValue";

$tdataset_audit_aType[".exportFields"] = array();

$tdataset_audit_aType[".importFields"] = array();

$tdataset_audit_aType[".printFields"] = array();

//	fieldID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fieldID";
	$fdata["GoodName"] = "fieldID";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType","fieldID"); 
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
	
	
	
	

	

	
	$tdataset_audit_aType["fieldID"] = $fdata;
//	catID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "catID";
	$fdata["GoodName"] = "catID";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType","catID"); 
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
	
	
	
	

	

	
	$tdataset_audit_aType["catID"] = $fdata;
//	fieldName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fieldName";
	$fdata["GoodName"] = "fieldName";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType","fieldName"); 
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

	

	
	$tdataset_audit_aType["fieldName"] = $fdata;
//	fieldValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fieldValue";
	$fdata["GoodName"] = "fieldValue";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_audit_aType","fieldValue"); 
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

	

	
	$tdataset_audit_aType["fieldValue"] = $fdata;

	
$tables_data["set_audit_aType"]=&$tdataset_audit_aType;
$field_labels["set_audit_aType"] = &$fieldLabelsset_audit_aType;
$fieldToolTips["set_audit_aType"] = &$fieldToolTipsset_audit_aType;
$page_titles["set_audit_aType"] = &$pageTitlesset_audit_aType;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_audit_aType"] = array();
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
	$detailsParam["previewOnAdd"] = 1;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["set_audit_aType"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["set_audit_aType"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["set_audit_aType"][$dIndex]["masterKeys"][]="fieldName";

				$detailsTablesData["set_audit_aType"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["set_audit_aType"][$dIndex]["detailKeys"][]="aType";
	
// tables which are master tables for current table (detail)
$masterTablesData["set_audit_aType"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_audit_aType()
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
	"m_srcTableName" => "set_audit_aType"
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
	"m_srcTableName" => "set_audit_aType"
));

$proto5["m_sql"] = "fieldID";
$proto5["m_srcTableName"] = "set_audit_aType";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "catID",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType"
));

$proto7["m_sql"] = "catID";
$proto7["m_srcTableName"] = "set_audit_aType";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldName",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType"
));

$proto9["m_sql"] = "fieldName";
$proto9["m_srcTableName"] = "set_audit_aType";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldValue",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_audit_aType"
));

$proto11["m_sql"] = "fieldValue";
$proto11["m_srcTableName"] = "set_audit_aType";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "set_field";
$proto14["m_srcTableName"] = "set_audit_aType";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "fieldID";
$proto14["m_columns"][] = "catID";
$proto14["m_columns"][] = "fieldName";
$proto14["m_columns"][] = "fieldValue";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "set_field";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "set_audit_aType";
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
$proto0["m_srcTableName"]="set_audit_aType";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_audit_aType = createSqlQuery_set_audit_aType();


	
				
	
$tdataset_audit_aType[".sqlquery"] = $queryData_set_audit_aType;

$tableEvents["set_audit_aType"] = new eventsBase;
$tdataset_audit_aType[".hasEvents"] = false;

?>