<?php
require_once(getabspath("classes/cipherer.php"));




$tdataweb_meeting = array();
	$tdataweb_meeting[".truncateText"] = true;
	$tdataweb_meeting[".NumberOfChars"] = 80;
	$tdataweb_meeting[".ShortName"] = "web_meeting";
	$tdataweb_meeting[".OwnerID"] = "";
	$tdataweb_meeting[".OriginalTable"] = "web_file";

//	field labels
$fieldLabelsweb_meeting = array();
$fieldToolTipsweb_meeting = array();
$pageTitlesweb_meeting = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsweb_meeting["Malay"] = array();
	$fieldToolTipsweb_meeting["Malay"] = array();
	$pageTitlesweb_meeting["Malay"] = array();
	$fieldLabelsweb_meeting["Malay"]["webID"] = "Web ID";
	$fieldToolTipsweb_meeting["Malay"]["webID"] = "";
	$fieldLabelsweb_meeting["Malay"]["webCategory"] = "Kategori";
	$fieldToolTipsweb_meeting["Malay"]["webCategory"] = "";
	$fieldLabelsweb_meeting["Malay"]["webTitle"] = "Tajuk";
	$fieldToolTipsweb_meeting["Malay"]["webTitle"] = "";
	$fieldLabelsweb_meeting["Malay"]["webAttachment"] = "Attachment";
	$fieldToolTipsweb_meeting["Malay"]["webAttachment"] = "";
	$fieldLabelsweb_meeting["Malay"]["tahun"] = "Tahun";
	$fieldToolTipsweb_meeting["Malay"]["tahun"] = "";
	if (count($fieldToolTipsweb_meeting["Malay"]))
		$tdataweb_meeting[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsweb_meeting[""] = array();
	$fieldToolTipsweb_meeting[""] = array();
	$pageTitlesweb_meeting[""] = array();
	if (count($fieldToolTipsweb_meeting[""]))
		$tdataweb_meeting[".isUseToolTips"] = true;
}


	$tdataweb_meeting[".NCSearch"] = true;



$tdataweb_meeting[".shortTableName"] = "web_meeting";
$tdataweb_meeting[".nSecOptions"] = 0;
$tdataweb_meeting[".recsPerRowList"] = 1;
$tdataweb_meeting[".recsPerRowPrint"] = 1;
$tdataweb_meeting[".mainTableOwnerID"] = "";
$tdataweb_meeting[".moveNext"] = 1;
$tdataweb_meeting[".entityType"] = 1;

$tdataweb_meeting[".strOriginalTableName"] = "web_file";




$tdataweb_meeting[".showAddInPopup"] = true;

$tdataweb_meeting[".showEditInPopup"] = true;

$tdataweb_meeting[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "edit_under_center";
			;
$popupPagesLayoutNames["view"] = "edit_under_center";
$tdataweb_meeting[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataweb_meeting[".fieldsForRegister"] = array();

$tdataweb_meeting[".listAjax"] = false;

	$tdataweb_meeting[".audit"] = false;

	$tdataweb_meeting[".locking"] = false;

$tdataweb_meeting[".edit"] = true;
$tdataweb_meeting[".afterEditAction"] = 1;
$tdataweb_meeting[".closePopupAfterEdit"] = 1;
$tdataweb_meeting[".afterEditActionDetTable"] = "";

$tdataweb_meeting[".add"] = true;
$tdataweb_meeting[".afterAddAction"] = 1;
$tdataweb_meeting[".closePopupAfterAdd"] = 1;
$tdataweb_meeting[".afterAddActionDetTable"] = "";

$tdataweb_meeting[".list"] = true;





$tdataweb_meeting[".delete"] = true;

$tdataweb_meeting[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataweb_meeting[".searchSaving"] = false;
//

if (isMobile()){
	$tdataweb_meeting[".showSearchPanel"] = true;
}
else
	$tdataweb_meeting[".showSearchPanel"] = false;

if (isMobile())
	$tdataweb_meeting[".isUseAjaxSuggest"] = false;
else
	$tdataweb_meeting[".isUseAjaxSuggest"] = true;

$tdataweb_meeting[".rowHighlite"] = true;


																				
$tdataweb_meeting[".addPageEvents"] = false;

// use timepicker for search panel
$tdataweb_meeting[".isUseTimeForSearch"] = false;





$tdataweb_meeting[".allSearchFields"] = array();
$tdataweb_meeting[".filterFields"] = array();
$tdataweb_meeting[".requiredSearchFields"] = array();

$tdataweb_meeting[".allSearchFields"][] = "tahun";
	$tdataweb_meeting[".allSearchFields"][] = "webTitle";
	$tdataweb_meeting[".allSearchFields"][] = "webAttachment";
	

$tdataweb_meeting[".googleLikeFields"] = array();
$tdataweb_meeting[".googleLikeFields"][] = "webID";
$tdataweb_meeting[".googleLikeFields"][] = "webCategory";
$tdataweb_meeting[".googleLikeFields"][] = "tahun";
$tdataweb_meeting[".googleLikeFields"][] = "webTitle";
$tdataweb_meeting[".googleLikeFields"][] = "webAttachment";


$tdataweb_meeting[".advSearchFields"] = array();
$tdataweb_meeting[".advSearchFields"][] = "tahun";
$tdataweb_meeting[".advSearchFields"][] = "webTitle";
$tdataweb_meeting[".advSearchFields"][] = "webAttachment";

$tdataweb_meeting[".tableType"] = "list";

$tdataweb_meeting[".printerPageOrientation"] = 0;
$tdataweb_meeting[".nPrinterPageScale"] = 100;

$tdataweb_meeting[".nPrinterSplitRecords"] = 40;

$tdataweb_meeting[".nPrinterPDFSplitRecords"] = 40;



$tdataweb_meeting[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataweb_meeting[".pageSize"] = 20;

$tdataweb_meeting[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tahun                               DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataweb_meeting[".strOrderBy"] = $tstrOrderBy;

$tdataweb_meeting[".orderindexes"] = array();

$tdataweb_meeting[".sqlHead"] = "SELECT webID,  webCategory,  SUBSTRING(webTitle, -4) AS tahun,  webTitle,  webAttachment";
$tdataweb_meeting[".sqlFrom"] = "FROM web_file";
$tdataweb_meeting[".sqlWhereExpr"] = "webCategory ='Minit Mesyuarat'";
$tdataweb_meeting[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataweb_meeting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataweb_meeting[".arrGroupsPerPage"] = $arrGPP;

$tdataweb_meeting[".highlightSearchResults"] = true;

$tableKeysweb_meeting = array();
$tableKeysweb_meeting[] = "webID";
$tdataweb_meeting[".Keys"] = $tableKeysweb_meeting;

$tdataweb_meeting[".listFields"] = array();
$tdataweb_meeting[".listFields"][] = "tahun";
$tdataweb_meeting[".listFields"][] = "webTitle";
$tdataweb_meeting[".listFields"][] = "webAttachment";

$tdataweb_meeting[".hideMobileList"] = array();


$tdataweb_meeting[".viewFields"] = array();

$tdataweb_meeting[".addFields"] = array();
$tdataweb_meeting[".addFields"][] = "webCategory";
$tdataweb_meeting[".addFields"][] = "webTitle";
$tdataweb_meeting[".addFields"][] = "webAttachment";

$tdataweb_meeting[".masterListFields"] = array();
$tdataweb_meeting[".masterListFields"][] = "webID";
$tdataweb_meeting[".masterListFields"][] = "webCategory";
$tdataweb_meeting[".masterListFields"][] = "tahun";
$tdataweb_meeting[".masterListFields"][] = "webTitle";
$tdataweb_meeting[".masterListFields"][] = "webAttachment";

$tdataweb_meeting[".inlineAddFields"] = array();

$tdataweb_meeting[".editFields"] = array();
$tdataweb_meeting[".editFields"][] = "webCategory";
$tdataweb_meeting[".editFields"][] = "webTitle";
$tdataweb_meeting[".editFields"][] = "webAttachment";

$tdataweb_meeting[".inlineEditFields"] = array();

$tdataweb_meeting[".exportFields"] = array();

$tdataweb_meeting[".importFields"] = array();

$tdataweb_meeting[".printFields"] = array();

//	webID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "webID";
	$fdata["GoodName"] = "webID";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_meeting","webID");
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








	$tdataweb_meeting["webID"] = $fdata;
//	webCategory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "webCategory";
	$fdata["GoodName"] = "webCategory";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_meeting","webCategory");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
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








	$tdataweb_meeting["webCategory"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("web_meeting","tahun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tahun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBSTRING(webTitle, -4)";

	
	
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




	$tdataweb_meeting["tahun"] = $fdata;
//	webTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "webTitle";
	$fdata["GoodName"] = "webTitle";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_meeting","webTitle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 546;

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




	$tdataweb_meeting["webTitle"] = $fdata;
//	webAttachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "webAttachment";
	$fdata["GoodName"] = "webAttachment";
	$fdata["ownerTable"] = "web_file";
	$fdata["Label"] = GetFieldLabel("web_meeting","webAttachment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdataweb_meeting["webAttachment"] = $fdata;


$tables_data["web_meeting"]=&$tdataweb_meeting;
$field_labels["web_meeting"] = &$fieldLabelsweb_meeting;
$fieldToolTips["web_meeting"] = &$fieldToolTipsweb_meeting;
$page_titles["web_meeting"] = &$pageTitlesweb_meeting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["web_meeting"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["web_meeting"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_web_meeting()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "webID,  webCategory,  SUBSTRING(webTitle, -4) AS tahun,  webTitle,  webAttachment";
$proto3["m_strFrom"] = "FROM web_file";
$proto3["m_strWhere"] = "webCategory ='Minit Mesyuarat'";
$proto3["m_strOrderBy"] = "ORDER BY tahun                               DESC";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "webCategory ='Minit Mesyuarat'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "webCategory",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_meeting"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='Minit Mesyuarat'";
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
	"m_srcTableName" => "web_meeting"
));

$proto8["m_sql"] = "webID";
$proto8["m_srcTableName"] = "web_meeting";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "webCategory",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_meeting"
));

$proto10["m_sql"] = "webCategory";
$proto10["m_srcTableName"] = "web_meeting";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "webTitle"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "-4"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUBSTRING";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUBSTRING(webTitle, -4)";
$proto12["m_srcTableName"] = "web_meeting";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "tahun";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "webTitle",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_meeting"
));

$proto16["m_sql"] = "webTitle";
$proto16["m_srcTableName"] = "web_meeting";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "webAttachment",
	"m_strTable" => "web_file",
	"m_srcTableName" => "web_meeting"
));

$proto18["m_sql"] = "webAttachment";
$proto18["m_srcTableName"] = "web_meeting";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "web_file";
$proto21["m_srcTableName"] = "web_meeting";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "webID";
$proto21["m_columns"][] = "webCategory";
$proto21["m_columns"][] = "webTitle";
$proto21["m_columns"][] = "webAttachment";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "web_file";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "web_meeting";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tahun                               "
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto3["m_orderby"][]=$obj;					
$proto3["m_srcTableName"]="web_meeting";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_web_meeting = createSqlQuery_web_meeting();



					

$tdataweb_meeting[".sqlquery"] = $queryData_web_meeting;

$tableEvents["web_meeting"] = new eventsBase;
$tdataweb_meeting[".hasEvents"] = false;

?>