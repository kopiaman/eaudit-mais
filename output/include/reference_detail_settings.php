<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareference_detail = array();
	$tdatareference_detail[".truncateText"] = true;
	$tdatareference_detail[".NumberOfChars"] = 400;
	$tdatareference_detail[".ShortName"] = "reference_detail";
	$tdatareference_detail[".OwnerID"] = "";
	$tdatareference_detail[".OriginalTable"] = "reference_detail";

//	field labels
$fieldLabelsreference_detail = array();
$fieldToolTipsreference_detail = array();
$pageTitlesreference_detail = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsreference_detail["Malay"] = array();
	$fieldToolTipsreference_detail["Malay"] = array();
	$pageTitlesreference_detail["Malay"] = array();
	$fieldLabelsreference_detail["Malay"]["refCode"] = "Kod";
	$fieldToolTipsreference_detail["Malay"]["refCode"] = "";
	$fieldLabelsreference_detail["Malay"]["chapter"] = "Bab";
	$fieldToolTipsreference_detail["Malay"]["chapter"] = "";
	$fieldLabelsreference_detail["Malay"]["refNo"] = "Perkara";
	$fieldToolTipsreference_detail["Malay"]["refNo"] = "";
	$fieldLabelsreference_detail["Malay"]["detail"] = "Penerangan";
	$fieldToolTipsreference_detail["Malay"]["detail"] = "";
	$fieldLabelsreference_detail["Malay"]["refyID"] = "Refy ID";
	$fieldToolTipsreference_detail["Malay"]["refyID"] = "";
	if (count($fieldToolTipsreference_detail["Malay"]))
		$tdatareference_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreference_detail[""] = array();
	$fieldToolTipsreference_detail[""] = array();
	$pageTitlesreference_detail[""] = array();
	if (count($fieldToolTipsreference_detail[""]))
		$tdatareference_detail[".isUseToolTips"] = true;
}


	$tdatareference_detail[".NCSearch"] = true;



$tdatareference_detail[".shortTableName"] = "reference_detail";
$tdatareference_detail[".nSecOptions"] = 0;
$tdatareference_detail[".recsPerRowList"] = 1;
$tdatareference_detail[".recsPerRowPrint"] = 1;
$tdatareference_detail[".mainTableOwnerID"] = "";
$tdatareference_detail[".moveNext"] = 1;
$tdatareference_detail[".entityType"] = 0;

$tdatareference_detail[".strOriginalTableName"] = "reference_detail";




$tdatareference_detail[".showAddInPopup"] = false;

$tdatareference_detail[".showEditInPopup"] = false;

$tdatareference_detail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareference_detail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareference_detail[".fieldsForRegister"] = array();

$tdatareference_detail[".listAjax"] = false;

	$tdatareference_detail[".audit"] = false;

	$tdatareference_detail[".locking"] = false;



$tdatareference_detail[".list"] = true;

$tdatareference_detail[".inlineEdit"] = true;
$tdatareference_detail[".inlineAdd"] = true;

$tdatareference_detail[".import"] = true;



$tdatareference_detail[".delete"] = true;

$tdatareference_detail[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareference_detail[".searchSaving"] = false;
//

$tdatareference_detail[".showSearchPanel"] = true;
		$tdatareference_detail[".flexibleSearch"] = true;

if (isMobile())
	$tdatareference_detail[".isUseAjaxSuggest"] = false;
else
	$tdatareference_detail[".isUseAjaxSuggest"] = true;

$tdatareference_detail[".rowHighlite"] = true;


																				
$tdatareference_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareference_detail[".isUseTimeForSearch"] = false;





$tdatareference_detail[".allSearchFields"] = array();
$tdatareference_detail[".filterFields"] = array();
$tdatareference_detail[".requiredSearchFields"] = array();

$tdatareference_detail[".allSearchFields"][] = "refyID";
	$tdatareference_detail[".allSearchFields"][] = "refCode";
	$tdatareference_detail[".allSearchFields"][] = "chapter";
	$tdatareference_detail[".allSearchFields"][] = "refNo";
	$tdatareference_detail[".allSearchFields"][] = "detail";
	

$tdatareference_detail[".googleLikeFields"] = array();
$tdatareference_detail[".googleLikeFields"][] = "refCode";
$tdatareference_detail[".googleLikeFields"][] = "chapter";
$tdatareference_detail[".googleLikeFields"][] = "refNo";
$tdatareference_detail[".googleLikeFields"][] = "detail";

$tdatareference_detail[".panelSearchFields"] = array();
$tdatareference_detail[".searchPanelOptions"] = array();
$tdatareference_detail[".panelSearchFields"][] = "refCode";
	$tdatareference_detail[".panelSearchFields"][] = "chapter";
	$tdatareference_detail[".panelSearchFields"][] = "refNo";
	$tdatareference_detail[".panelSearchFields"][] = "detail";
	
$tdatareference_detail[".advSearchFields"] = array();
$tdatareference_detail[".advSearchFields"][] = "refyID";
$tdatareference_detail[".advSearchFields"][] = "refCode";
$tdatareference_detail[".advSearchFields"][] = "chapter";
$tdatareference_detail[".advSearchFields"][] = "refNo";
$tdatareference_detail[".advSearchFields"][] = "detail";

$tdatareference_detail[".tableType"] = "list";

$tdatareference_detail[".printerPageOrientation"] = 0;
$tdatareference_detail[".nPrinterPageScale"] = 100;

$tdatareference_detail[".nPrinterSplitRecords"] = 40;

$tdatareference_detail[".nPrinterPDFSplitRecords"] = 40;



$tdatareference_detail[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatareference_detail[".pageSize"] = 20;

$tdatareference_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareference_detail[".strOrderBy"] = $tstrOrderBy;

$tdatareference_detail[".orderindexes"] = array();

$tdatareference_detail[".sqlHead"] = "SELECT refyID,  	refCode,  	chapter,  	refNo,  	detail";
$tdatareference_detail[".sqlFrom"] = "FROM reference_detail";
$tdatareference_detail[".sqlWhereExpr"] = "";
$tdatareference_detail[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareference_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareference_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatareference_detail[".highlightSearchResults"] = true;

$tableKeysreference_detail = array();
$tableKeysreference_detail[] = "refyID";
$tdatareference_detail[".Keys"] = $tableKeysreference_detail;

$tdatareference_detail[".listFields"] = array();
$tdatareference_detail[".listFields"][] = "refCode";
$tdatareference_detail[".listFields"][] = "chapter";
$tdatareference_detail[".listFields"][] = "refNo";
$tdatareference_detail[".listFields"][] = "detail";

$tdatareference_detail[".hideMobileList"] = array();


$tdatareference_detail[".viewFields"] = array();

$tdatareference_detail[".addFields"] = array();

$tdatareference_detail[".masterListFields"] = array();
$tdatareference_detail[".masterListFields"][] = "refyID";
$tdatareference_detail[".masterListFields"][] = "refCode";
$tdatareference_detail[".masterListFields"][] = "chapter";
$tdatareference_detail[".masterListFields"][] = "refNo";
$tdatareference_detail[".masterListFields"][] = "detail";

$tdatareference_detail[".inlineAddFields"] = array();
$tdatareference_detail[".inlineAddFields"][] = "refCode";
$tdatareference_detail[".inlineAddFields"][] = "chapter";
$tdatareference_detail[".inlineAddFields"][] = "refNo";
$tdatareference_detail[".inlineAddFields"][] = "detail";

$tdatareference_detail[".editFields"] = array();

$tdatareference_detail[".inlineEditFields"] = array();
$tdatareference_detail[".inlineEditFields"][] = "refCode";
$tdatareference_detail[".inlineEditFields"][] = "chapter";
$tdatareference_detail[".inlineEditFields"][] = "refNo";
$tdatareference_detail[".inlineEditFields"][] = "detail";

$tdatareference_detail[".exportFields"] = array();

$tdatareference_detail[".importFields"] = array();
$tdatareference_detail[".importFields"][] = "refCode";
$tdatareference_detail[".importFields"][] = "chapter";
$tdatareference_detail[".importFields"][] = "refNo";
$tdatareference_detail[".importFields"][] = "detail";

$tdatareference_detail[".printFields"] = array();

//	refyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "refyID";
	$fdata["GoodName"] = "refyID";
	$fdata["ownerTable"] = "reference_detail";
	$fdata["Label"] = GetFieldLabel("reference_detail","refyID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "refyID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refyID";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatareference_detail["refyID"] = $fdata;
//	refCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "refCode";
	$fdata["GoodName"] = "refCode";
	$fdata["ownerTable"] = "reference_detail";
	$fdata["Label"] = GetFieldLabel("reference_detail","refCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "refCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refCode";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldValue";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 70;

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

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatareference_detail["refCode"] = $fdata;
//	chapter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "chapter";
	$fdata["GoodName"] = "chapter";
	$fdata["ownerTable"] = "reference_detail";
	$fdata["Label"] = GetFieldLabel("reference_detail","chapter");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "chapter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chapter";

	
	
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

		$edata["controlWidth"] = 150;

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




	$tdatareference_detail["chapter"] = $fdata;
//	refNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "refNo";
	$fdata["GoodName"] = "refNo";
	$fdata["ownerTable"] = "reference_detail";
	$fdata["Label"] = GetFieldLabel("reference_detail","refNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "refNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refNo";

	
	
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

		$edata["controlWidth"] = 80;

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




	$tdatareference_detail["refNo"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "reference_detail";
	$fdata["Label"] = GetFieldLabel("reference_detail","detail");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detail";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 200;
			$edata["nCols"] = 600;

	
	
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




	$tdatareference_detail["detail"] = $fdata;


$tables_data["reference_detail"]=&$tdatareference_detail;
$field_labels["reference_detail"] = &$fieldLabelsreference_detail;
$fieldToolTips["reference_detail"] = &$fieldToolTipsreference_detail;
$page_titles["reference_detail"] = &$pageTitlesreference_detail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reference_detail"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["reference_detail"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reference_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "refyID,  	refCode,  	chapter,  	refNo,  	detail";
$proto0["m_strFrom"] = "FROM reference_detail";
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
	"m_strName" => "refyID",
	"m_strTable" => "reference_detail",
	"m_srcTableName" => "reference_detail"
));

$proto5["m_sql"] = "refyID";
$proto5["m_srcTableName"] = "reference_detail";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "refCode",
	"m_strTable" => "reference_detail",
	"m_srcTableName" => "reference_detail"
));

$proto7["m_sql"] = "refCode";
$proto7["m_srcTableName"] = "reference_detail";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "chapter",
	"m_strTable" => "reference_detail",
	"m_srcTableName" => "reference_detail"
));

$proto9["m_sql"] = "chapter";
$proto9["m_srcTableName"] = "reference_detail";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "refNo",
	"m_strTable" => "reference_detail",
	"m_srcTableName" => "reference_detail"
));

$proto11["m_sql"] = "refNo";
$proto11["m_srcTableName"] = "reference_detail";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "detail",
	"m_strTable" => "reference_detail",
	"m_srcTableName" => "reference_detail"
));

$proto13["m_sql"] = "detail";
$proto13["m_srcTableName"] = "reference_detail";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "reference_detail";
$proto16["m_srcTableName"] = "reference_detail";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "refyID";
$proto16["m_columns"][] = "refCode";
$proto16["m_columns"][] = "chapter";
$proto16["m_columns"][] = "refNo";
$proto16["m_columns"][] = "detail";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "reference_detail";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "reference_detail";
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

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="reference_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reference_detail = createSqlQuery_reference_detail();



					

$tdatareference_detail[".sqlquery"] = $queryData_reference_detail;

$tableEvents["reference_detail"] = new eventsBase;
$tdatareference_detail[".hasEvents"] = false;

?>