<?php
require_once(getabspath("classes/cipherer.php"));




$tdataweb_file = array();
	$tdataweb_file[".truncateText"] = true;
	$tdataweb_file[".NumberOfChars"] = 80;
	$tdataweb_file[".ShortName"] = "web_file";
	$tdataweb_file[".OwnerID"] = "";
	$tdataweb_file[".OriginalTable"] = "web_file";

//	field labels
$fieldLabelsweb_file = array();
$fieldToolTipsweb_file = array();
$pageTitlesweb_file = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsweb_file["Malay"] = array();
	$fieldToolTipsweb_file["Malay"] = array();
	$pageTitlesweb_file["Malay"] = array();
	$fieldLabelsweb_file["Malay"]["webID"] = "Web ID";
	$fieldToolTipsweb_file["Malay"]["webID"] = "";
	$fieldLabelsweb_file["Malay"]["webCategory"] = "Category";
	$fieldToolTipsweb_file["Malay"]["webCategory"] = "";
	$fieldLabelsweb_file["Malay"]["webTitle"] = "Tajuk";
	$fieldToolTipsweb_file["Malay"]["webTitle"] = "";
	$fieldLabelsweb_file["Malay"]["webAttachment"] = "Attachment";
	$fieldToolTipsweb_file["Malay"]["webAttachment"] = "";
	if (count($fieldToolTipsweb_file["Malay"]))
		$tdataweb_file[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsweb_file[""] = array();
	$fieldToolTipsweb_file[""] = array();
	$pageTitlesweb_file[""] = array();
	if (count($fieldToolTipsweb_file[""]))
		$tdataweb_file[".isUseToolTips"] = true;
}


	$tdataweb_file[".NCSearch"] = true;



$tdataweb_file[".shortTableName"] = "web_file";
$tdataweb_file[".nSecOptions"] = 0;
$tdataweb_file[".recsPerRowList"] = 1;
$tdataweb_file[".recsPerRowPrint"] = 1;
$tdataweb_file[".mainTableOwnerID"] = "";
$tdataweb_file[".moveNext"] = 1;
$tdataweb_file[".entityType"] = 0;

$tdataweb_file[".strOriginalTableName"] = "web_file";




$tdataweb_file[".showAddInPopup"] = true;

$tdataweb_file[".showEditInPopup"] = true;

$tdataweb_file[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "edit_under_center";
			;
$popupPagesLayoutNames["edit"] = "edit_under_center";
			;
$popupPagesLayoutNames["view"] = "edit_under_center";
$tdataweb_file[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataweb_file[".fieldsForRegister"] = array();

$tdataweb_file[".listAjax"] = false;

	$tdataweb_file[".audit"] = false;

	$tdataweb_file[".locking"] = false;



$tdataweb_file[".list"] = true;

$tdataweb_file[".inlineEdit"] = true;
$tdataweb_file[".inlineAdd"] = true;




$tdataweb_file[".delete"] = true;

$tdataweb_file[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataweb_file[".searchSaving"] = false;
//

if (isMobile()){
	$tdataweb_file[".showSearchPanel"] = true;
}
else
	$tdataweb_file[".showSearchPanel"] = false;

if (isMobile())
	$tdataweb_file[".isUseAjaxSuggest"] = false;
else
	$tdataweb_file[".isUseAjaxSuggest"] = true;

$tdataweb_file[".rowHighlite"] = true;


																				
$tdataweb_file[".addPageEvents"] = false;

// use timepicker for search panel
$tdataweb_file[".isUseTimeForSearch"] = false;





$tdataweb_file[".allSearchFields"] = array();
$tdataweb_file[".filterFields"] = array();
$tdataweb_file[".requiredSearchFields"] = array();

$tdataweb_file[".allSearchFields"][] = "webCategory";
	$tdataweb_file[".allSearchFields"][] = "webTitle";
	$tdataweb_file[".allSearchFields"][] = "webAttachment";
	

$tdataweb_file[".googleLikeFields"] = array();
$tdataweb_file[".googleLikeFields"][] = "webID";
$tdataweb_file[".googleLikeFields"][] = "webCategory";
$tdataweb_file[".googleLikeFields"][] = "webTitle";
$tdataweb_file[".googleLikeFields"][] = "webAttachment";


$tdataweb_file[".advSearchFields"] = array();
$tdataweb_file[".advSearchFields"][] = "webCategory";
$tdataweb_file[".advSearchFields"][] = "webTitle";
$tdataweb_file[".advSearchFields"][] = "webAttachment";

$tdataweb_file[".tableType"] = "list";

$tdataweb_file[".printerPageOrientation"] = 0;
$tdataweb_file[".nPrinterPageScale"] = 100;

$tdataweb_file[".nPrinterSplitRecords"] = 40;

$tdataweb_file[".nPrinterPDFSplitRecords"] = 40;



$tdataweb_file[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataweb_file[".pageSize"] = 20;

$tdataweb_file[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataweb_file[".strOrderBy"] = $tstrOrderBy;

$tdataweb_file[".orderindexes"] = array();

$tdataweb_file[".sqlHead"] = "SELECT webID,  webCategory,  webTitle,  webAttachment";
$tdataweb_file[".sqlFrom"] = "FROM web_file";
$tdataweb_file[".sqlWhereExpr"] = "webCategory !='Minit Mesyuarat'";
$tdataweb_file[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataweb_file[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataweb_file[".arrGroupsPerPage"] = $arrGPP;

$tdataweb_file[".highlightSearchResults"] = true;

$tableKeysweb_file = array();
$tableKeysweb_file[] = "webID";
$tdataweb_file[".Keys"] = $tableKeysweb_file;

$tdataweb_file[".listFields"] = array();
$tdataweb_file[".listFields"][] = "webCategory";
$tdataweb_file[".listFields"][] = "webTitle";
$tdataweb_file[".listFields"][] = "webAttachment";

$tdataweb_file[".hideMobileList"] = array();


$tdataweb_file[".viewFields"] = array();

$tdataweb_file[".addFields"] = array();

$tdataweb_file[".masterListFields"] = array();
$tdataweb_file[".masterListFields"][] = "webID";
$tdataweb_file[".masterListFields"][] = "webCategory";
$tdataweb_file[".masterListFields"][] = "webTitle";
$tdataweb_file[".masterListFields"][] = "webAttachment";

$tdataweb_file[".inlineAddFields"] = array();
$tdataweb_file[".inlineAddFields"][] = "webCategory";
$tdataweb_file[".inlineAddFields"][] = "webTitle";
$tdataweb_file[".inlineAddFields"][] = "webAttachment";

$tdataweb_file[".editFields"] = array();

$tdataweb_file[".inlineEditFields"] = array();
$tdataweb_file[".inlineEditFields"][] = "webCategory";
$tdataweb_file[".inlineEditFields"][] = "webTitle";
$tdataweb_file[".inlineEditFields"][] = "webAttachment";

$tdataweb_file[".exportFields"] = array();

$tdataweb_file[".importFields"] = array();

$tdataweb_file[".printFields"] = array();

//	webID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "webID";
	$fdata["GoodName"] = "webID";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_file","webID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "webID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "webID";

	
	
			
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








	$tdataweb_file["webID"] = $fdata;
//	webCategory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "webCategory";
	$fdata["GoodName"] = "webCategory";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_file","webCategory");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "webCategory";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "webCategory";

	
	
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
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataweb_file["webCategory"] = $fdata;
//	webTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "webTitle";
	$fdata["GoodName"] = "webTitle";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_file","webTitle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "webTitle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "webTitle";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 224;

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




	$tdataweb_file["webTitle"] = $fdata;
//	webAttachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "webAttachment";
	$fdata["GoodName"] = "webAttachment";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_file","webAttachment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "webAttachment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "webAttachment";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|ppt";
						$edata["acceptFileTypes"] .= "|pptx";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataweb_file["webAttachment"] = $fdata;


$tables_data["web_file"]=&$tdataweb_file;
$field_labels["web_file"] = &$fieldLabelsweb_file;
$fieldToolTips["web_file"] = &$fieldToolTipsweb_file;
$page_titles["web_file"] = &$pageTitlesweb_file;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["web_file"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["web_file"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_web_file()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "webID,  webCategory,  webTitle,  webAttachment";
$proto3["m_strFrom"] = "FROM web_file";
$proto3["m_strWhere"] = "webCategory !='Minit Mesyuarat'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "webCategory !='Minit Mesyuarat'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "webCategory",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_file"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "!='Minit Mesyuarat'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto3["m_where"] = $obj;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "webID",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_file"
));

$proto8["m_sql"] = "webID";
$proto8["m_srcTableName"] = "web_file";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "webCategory",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_file"
));

$proto10["m_sql"] = "webCategory";
$proto10["m_srcTableName"] = "web_file";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "webTitle",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_file"
));

$proto12["m_sql"] = "webTitle";
$proto12["m_srcTableName"] = "web_file";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "webAttachment",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_file"
));

$proto14["m_sql"] = "webAttachment";
$proto14["m_srcTableName"] = "web_file";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "web_file";
$proto17["m_srcTableName"] = "web_file";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "webID";
$proto17["m_columns"][] = "webCategory";
$proto17["m_columns"][] = "webTitle";
$proto17["m_columns"][] = "webAttachment";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "web_file";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "web_file";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="web_file";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_web_file = createSqlQuery_web_file();



				

$tdataweb_file[".sqlquery"] = $queryData_web_file;

$tableEvents["web_file"] = new eventsBase;
$tdataweb_file[".hasEvents"] = false;

?>