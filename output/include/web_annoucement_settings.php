<?php
require_once(getabspath("classes/cipherer.php"));




$tdataweb_annoucement = array();
	$tdataweb_annoucement[".truncateText"] = true;
	$tdataweb_annoucement[".NumberOfChars"] = 80;
	$tdataweb_annoucement[".ShortName"] = "web_annoucement";
	$tdataweb_annoucement[".OwnerID"] = "";
	$tdataweb_annoucement[".OriginalTable"] = "web_news";

//	field labels
$fieldLabelsweb_annoucement = array();
$fieldToolTipsweb_annoucement = array();
$pageTitlesweb_annoucement = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsweb_annoucement["Malay"] = array();
	$fieldToolTipsweb_annoucement["Malay"] = array();
	$pageTitlesweb_annoucement["Malay"] = array();
	$fieldLabelsweb_annoucement["Malay"]["wnID"] = "Wn ID";
	$fieldToolTipsweb_annoucement["Malay"]["wnID"] = "";
	$fieldLabelsweb_annoucement["Malay"]["wContent"] = "Kandungan";
	$fieldToolTipsweb_annoucement["Malay"]["wContent"] = "";
	$fieldLabelsweb_annoucement["Malay"]["wType"] = "Jenis";
	$fieldToolTipsweb_annoucement["Malay"]["wType"] = "";
	$fieldLabelsweb_annoucement["Malay"]["wDate"] = "Tarikh";
	$fieldToolTipsweb_annoucement["Malay"]["wDate"] = "";
	$fieldLabelsweb_annoucement["Malay"]["wStatus"] = "Status";
	$fieldToolTipsweb_annoucement["Malay"]["wStatus"] = "";
	if (count($fieldToolTipsweb_annoucement["Malay"]))
		$tdataweb_annoucement[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsweb_annoucement[""] = array();
	$fieldToolTipsweb_annoucement[""] = array();
	$pageTitlesweb_annoucement[""] = array();
	if (count($fieldToolTipsweb_annoucement[""]))
		$tdataweb_annoucement[".isUseToolTips"] = true;
}


	$tdataweb_annoucement[".NCSearch"] = true;



$tdataweb_annoucement[".shortTableName"] = "web_annoucement";
$tdataweb_annoucement[".nSecOptions"] = 0;
$tdataweb_annoucement[".recsPerRowList"] = 1;
$tdataweb_annoucement[".recsPerRowPrint"] = 1;
$tdataweb_annoucement[".mainTableOwnerID"] = "";
$tdataweb_annoucement[".moveNext"] = 1;
$tdataweb_annoucement[".entityType"] = 1;

$tdataweb_annoucement[".strOriginalTableName"] = "web_news";




$tdataweb_annoucement[".showAddInPopup"] = true;

$tdataweb_annoucement[".showEditInPopup"] = true;

$tdataweb_annoucement[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "under_center31";
						
	;
$popupPagesLayoutNames["edit"] = "under_center3";
			;
$popupPagesLayoutNames["view"] = "under_center3";
$tdataweb_annoucement[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataweb_annoucement[".fieldsForRegister"] = array();

$tdataweb_annoucement[".listAjax"] = false;

	$tdataweb_annoucement[".audit"] = false;

	$tdataweb_annoucement[".locking"] = false;

$tdataweb_annoucement[".edit"] = true;
$tdataweb_annoucement[".afterEditAction"] = 1;
$tdataweb_annoucement[".closePopupAfterEdit"] = 1;
$tdataweb_annoucement[".afterEditActionDetTable"] = "";

$tdataweb_annoucement[".add"] = true;
$tdataweb_annoucement[".afterAddAction"] = 1;
$tdataweb_annoucement[".closePopupAfterAdd"] = 1;
$tdataweb_annoucement[".afterAddActionDetTable"] = "";

$tdataweb_annoucement[".list"] = true;





$tdataweb_annoucement[".delete"] = true;

$tdataweb_annoucement[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataweb_annoucement[".searchSaving"] = false;
//

if (isMobile()){
}
else
	$tdataweb_annoucement[".showSearchPanel"] = false;

if (isMobile())
	$tdataweb_annoucement[".isUseAjaxSuggest"] = false;
else
	$tdataweb_annoucement[".isUseAjaxSuggest"] = true;

$tdataweb_annoucement[".rowHighlite"] = true;


																				
$tdataweb_annoucement[".addPageEvents"] = false;

// use timepicker for search panel
$tdataweb_annoucement[".isUseTimeForSearch"] = false;





$tdataweb_annoucement[".allSearchFields"] = array();
$tdataweb_annoucement[".filterFields"] = array();
$tdataweb_annoucement[".requiredSearchFields"] = array();



$tdataweb_annoucement[".googleLikeFields"] = array();
$tdataweb_annoucement[".googleLikeFields"][] = "wnID";
$tdataweb_annoucement[".googleLikeFields"][] = "wContent";
$tdataweb_annoucement[".googleLikeFields"][] = "wType";
$tdataweb_annoucement[".googleLikeFields"][] = "wDate";
$tdataweb_annoucement[".googleLikeFields"][] = "wStatus";



$tdataweb_annoucement[".tableType"] = "list";

$tdataweb_annoucement[".printerPageOrientation"] = 0;
$tdataweb_annoucement[".nPrinterPageScale"] = 100;

$tdataweb_annoucement[".nPrinterSplitRecords"] = 40;

$tdataweb_annoucement[".nPrinterPDFSplitRecords"] = 40;



$tdataweb_annoucement[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataweb_annoucement[".pageSize"] = 20;

$tdataweb_annoucement[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataweb_annoucement[".strOrderBy"] = $tstrOrderBy;

$tdataweb_annoucement[".orderindexes"] = array();

$tdataweb_annoucement[".sqlHead"] = "SELECT wnID,  wContent,  wType,  wDate,  wStatus";
$tdataweb_annoucement[".sqlFrom"] = "FROM web_news";
$tdataweb_annoucement[".sqlWhereExpr"] = "wType ='Pengumuman'";
$tdataweb_annoucement[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataweb_annoucement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataweb_annoucement[".arrGroupsPerPage"] = $arrGPP;

$tdataweb_annoucement[".highlightSearchResults"] = true;

$tableKeysweb_annoucement = array();
$tableKeysweb_annoucement[] = "wnID";
$tdataweb_annoucement[".Keys"] = $tableKeysweb_annoucement;

$tdataweb_annoucement[".listFields"] = array();
$tdataweb_annoucement[".listFields"][] = "wStatus";
$tdataweb_annoucement[".listFields"][] = "wDate";
$tdataweb_annoucement[".listFields"][] = "wType";
$tdataweb_annoucement[".listFields"][] = "wContent";

$tdataweb_annoucement[".hideMobileList"] = array();


$tdataweb_annoucement[".viewFields"] = array();

$tdataweb_annoucement[".addFields"] = array();
$tdataweb_annoucement[".addFields"][] = "wStatus";
$tdataweb_annoucement[".addFields"][] = "wDate";
$tdataweb_annoucement[".addFields"][] = "wType";
$tdataweb_annoucement[".addFields"][] = "wContent";

$tdataweb_annoucement[".masterListFields"] = array();
$tdataweb_annoucement[".masterListFields"][] = "wnID";
$tdataweb_annoucement[".masterListFields"][] = "wStatus";
$tdataweb_annoucement[".masterListFields"][] = "wDate";
$tdataweb_annoucement[".masterListFields"][] = "wType";
$tdataweb_annoucement[".masterListFields"][] = "wContent";

$tdataweb_annoucement[".inlineAddFields"] = array();

$tdataweb_annoucement[".editFields"] = array();
$tdataweb_annoucement[".editFields"][] = "wStatus";
$tdataweb_annoucement[".editFields"][] = "wDate";
$tdataweb_annoucement[".editFields"][] = "wContent";

$tdataweb_annoucement[".inlineEditFields"] = array();

$tdataweb_annoucement[".exportFields"] = array();

$tdataweb_annoucement[".importFields"] = array();

$tdataweb_annoucement[".printFields"] = array();

//	wnID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "wnID";
	$fdata["GoodName"] = "wnID";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_annoucement","wnID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "wnID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wnID";

	
	
			
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








	$tdataweb_annoucement["wnID"] = $fdata;
//	wContent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "wContent";
	$fdata["GoodName"] = "wContent";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_annoucement","wContent");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "wContent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wContent";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 105;
			$edata["nCols"] = 642;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataweb_annoucement["wContent"] = $fdata;
//	wType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "wType";
	$fdata["GoodName"] = "wType";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_annoucement","wType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	
	
	
	
		$fdata["strField"] = "wType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wType";

	
	
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








	$tdataweb_annoucement["wType"] = $fdata;
//	wDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "wDate";
	$fdata["GoodName"] = "wDate";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_annoucement","wDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "wDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 100;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataweb_annoucement["wDate"] = $fdata;
//	wStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "wStatus";
	$fdata["GoodName"] = "wStatus";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_annoucement","wStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "wStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wStatus";

	
	
				$fdata["FieldPermissions"] = true;

			
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "On";
	$edata["LookupValues"][] = "Off";

	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 102;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataweb_annoucement["wStatus"] = $fdata;


$tables_data["web_annoucement"]=&$tdataweb_annoucement;
$field_labels["web_annoucement"] = &$fieldLabelsweb_annoucement;
$fieldToolTips["web_annoucement"] = &$fieldToolTipsweb_annoucement;
$page_titles["web_annoucement"] = &$pageTitlesweb_annoucement;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["web_annoucement"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["web_annoucement"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_web_annoucement()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "wnID,  wContent,  wType,  wDate,  wStatus";
$proto3["m_strFrom"] = "FROM web_news";
$proto3["m_strWhere"] = "wType ='Pengumuman'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "wType ='Pengumuman'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "wType",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_annoucement"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='Pengumuman'";
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
	"m_strName" => "wnID",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_annoucement"
));

$proto8["m_sql"] = "wnID";
$proto8["m_srcTableName"] = "web_annoucement";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "wContent",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_annoucement"
));

$proto10["m_sql"] = "wContent";
$proto10["m_srcTableName"] = "web_annoucement";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "wType",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_annoucement"
));

$proto12["m_sql"] = "wType";
$proto12["m_srcTableName"] = "web_annoucement";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "wDate",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_annoucement"
));

$proto14["m_sql"] = "wDate";
$proto14["m_srcTableName"] = "web_annoucement";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "wStatus",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_annoucement"
));

$proto16["m_sql"] = "wStatus";
$proto16["m_srcTableName"] = "web_annoucement";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "web_news";
$proto19["m_srcTableName"] = "web_annoucement";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "wnID";
$proto19["m_columns"][] = "wTitle";
$proto19["m_columns"][] = "wContent";
$proto19["m_columns"][] = "wType";
$proto19["m_columns"][] = "wDate";
$proto19["m_columns"][] = "wStatus";
$proto19["m_columns"][] = "wPic";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "web_news";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "web_annoucement";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="web_annoucement";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_web_annoucement = createSqlQuery_web_annoucement();



					

$tdataweb_annoucement[".sqlquery"] = $queryData_web_annoucement;

$tableEvents["web_annoucement"] = new eventsBase;
$tdataweb_annoucement[".hasEvents"] = false;

?>