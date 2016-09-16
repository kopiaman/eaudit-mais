<?php
require_once(getabspath("classes/cipherer.php"));




$tdataweb_news = array();
	$tdataweb_news[".truncateText"] = true;
	$tdataweb_news[".NumberOfChars"] = 80;
	$tdataweb_news[".ShortName"] = "web_news";
	$tdataweb_news[".OwnerID"] = "";
	$tdataweb_news[".OriginalTable"] = "web_news";

//	field labels
$fieldLabelsweb_news = array();
$fieldToolTipsweb_news = array();
$pageTitlesweb_news = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsweb_news["Malay"] = array();
	$fieldToolTipsweb_news["Malay"] = array();
	$pageTitlesweb_news["Malay"] = array();
	$fieldLabelsweb_news["Malay"]["wnID"] = "Wn ID";
	$fieldToolTipsweb_news["Malay"]["wnID"] = "";
	$fieldLabelsweb_news["Malay"]["wContent"] = "Kandungan";
	$fieldToolTipsweb_news["Malay"]["wContent"] = "";
	$fieldLabelsweb_news["Malay"]["wType"] = "Jenis";
	$fieldToolTipsweb_news["Malay"]["wType"] = "";
	$fieldLabelsweb_news["Malay"]["wDate"] = "Tarikh";
	$fieldToolTipsweb_news["Malay"]["wDate"] = "";
	$fieldLabelsweb_news["Malay"]["wStatus"] = "Status";
	$fieldToolTipsweb_news["Malay"]["wStatus"] = "";
	$fieldLabelsweb_news["Malay"]["wPic"] = "Gambar";
	$fieldToolTipsweb_news["Malay"]["wPic"] = "";
	$fieldLabelsweb_news["Malay"]["wTitle"] = "Tajuk";
	$fieldToolTipsweb_news["Malay"]["wTitle"] = "";
	if (count($fieldToolTipsweb_news["Malay"]))
		$tdataweb_news[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsweb_news[""] = array();
	$fieldToolTipsweb_news[""] = array();
	$pageTitlesweb_news[""] = array();
	if (count($fieldToolTipsweb_news[""]))
		$tdataweb_news[".isUseToolTips"] = true;
}


	$tdataweb_news[".NCSearch"] = true;



$tdataweb_news[".shortTableName"] = "web_news";
$tdataweb_news[".nSecOptions"] = 0;
$tdataweb_news[".recsPerRowList"] = 1;
$tdataweb_news[".recsPerRowPrint"] = 1;
$tdataweb_news[".mainTableOwnerID"] = "";
$tdataweb_news[".moveNext"] = 1;
$tdataweb_news[".entityType"] = 0;

$tdataweb_news[".strOriginalTableName"] = "web_news";




$tdataweb_news[".showAddInPopup"] = true;

$tdataweb_news[".showEditInPopup"] = true;

$tdataweb_news[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "under_center31";
						
	;
$popupPagesLayoutNames["edit"] = "under_center3";
			;
$popupPagesLayoutNames["view"] = "under_center3";
$tdataweb_news[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataweb_news[".fieldsForRegister"] = array();

$tdataweb_news[".listAjax"] = false;

	$tdataweb_news[".audit"] = false;

	$tdataweb_news[".locking"] = false;

$tdataweb_news[".edit"] = true;
$tdataweb_news[".afterEditAction"] = 1;
$tdataweb_news[".closePopupAfterEdit"] = 1;
$tdataweb_news[".afterEditActionDetTable"] = "";

$tdataweb_news[".add"] = true;
$tdataweb_news[".afterAddAction"] = 1;
$tdataweb_news[".closePopupAfterAdd"] = 1;
$tdataweb_news[".afterAddActionDetTable"] = "";

$tdataweb_news[".list"] = true;





$tdataweb_news[".delete"] = true;

$tdataweb_news[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataweb_news[".searchSaving"] = false;
//

if (isMobile()){
}
else
	$tdataweb_news[".showSearchPanel"] = false;

if (isMobile())
	$tdataweb_news[".isUseAjaxSuggest"] = false;
else
	$tdataweb_news[".isUseAjaxSuggest"] = true;

$tdataweb_news[".rowHighlite"] = true;


																				
$tdataweb_news[".addPageEvents"] = false;

// use timepicker for search panel
$tdataweb_news[".isUseTimeForSearch"] = false;





$tdataweb_news[".allSearchFields"] = array();
$tdataweb_news[".filterFields"] = array();
$tdataweb_news[".requiredSearchFields"] = array();



$tdataweb_news[".googleLikeFields"] = array();
$tdataweb_news[".googleLikeFields"][] = "wnID";
$tdataweb_news[".googleLikeFields"][] = "wTitle";
$tdataweb_news[".googleLikeFields"][] = "wContent";
$tdataweb_news[".googleLikeFields"][] = "wType";
$tdataweb_news[".googleLikeFields"][] = "wDate";
$tdataweb_news[".googleLikeFields"][] = "wStatus";
$tdataweb_news[".googleLikeFields"][] = "wPic";



$tdataweb_news[".tableType"] = "list";

$tdataweb_news[".printerPageOrientation"] = 0;
$tdataweb_news[".nPrinterPageScale"] = 100;

$tdataweb_news[".nPrinterSplitRecords"] = 40;

$tdataweb_news[".nPrinterPDFSplitRecords"] = 40;



$tdataweb_news[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataweb_news[".pageSize"] = 20;

$tdataweb_news[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataweb_news[".strOrderBy"] = $tstrOrderBy;

$tdataweb_news[".orderindexes"] = array();

$tdataweb_news[".sqlHead"] = "SELECT wnID,  wTitle,  wContent,  wType,  wDate,  wStatus,  wPic";
$tdataweb_news[".sqlFrom"] = "FROM web_news";
$tdataweb_news[".sqlWhereExpr"] = "wType ='Berita'";
$tdataweb_news[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataweb_news[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataweb_news[".arrGroupsPerPage"] = $arrGPP;

$tdataweb_news[".highlightSearchResults"] = true;

$tableKeysweb_news = array();
$tableKeysweb_news[] = "wnID";
$tdataweb_news[".Keys"] = $tableKeysweb_news;

$tdataweb_news[".listFields"] = array();
$tdataweb_news[".listFields"][] = "wStatus";
$tdataweb_news[".listFields"][] = "wDate";
$tdataweb_news[".listFields"][] = "wType";
$tdataweb_news[".listFields"][] = "wTitle";
$tdataweb_news[".listFields"][] = "wContent";

$tdataweb_news[".hideMobileList"] = array();


$tdataweb_news[".viewFields"] = array();

$tdataweb_news[".addFields"] = array();
$tdataweb_news[".addFields"][] = "wTitle";
$tdataweb_news[".addFields"][] = "wStatus";
$tdataweb_news[".addFields"][] = "wDate";
$tdataweb_news[".addFields"][] = "wType";
$tdataweb_news[".addFields"][] = "wContent";
$tdataweb_news[".addFields"][] = "wPic";

$tdataweb_news[".masterListFields"] = array();
$tdataweb_news[".masterListFields"][] = "wnID";
$tdataweb_news[".masterListFields"][] = "wStatus";
$tdataweb_news[".masterListFields"][] = "wDate";
$tdataweb_news[".masterListFields"][] = "wType";
$tdataweb_news[".masterListFields"][] = "wPic";
$tdataweb_news[".masterListFields"][] = "wTitle";
$tdataweb_news[".masterListFields"][] = "wContent";

$tdataweb_news[".inlineAddFields"] = array();

$tdataweb_news[".editFields"] = array();
$tdataweb_news[".editFields"][] = "wTitle";
$tdataweb_news[".editFields"][] = "wStatus";
$tdataweb_news[".editFields"][] = "wDate";
$tdataweb_news[".editFields"][] = "wContent";
$tdataweb_news[".editFields"][] = "wPic";

$tdataweb_news[".inlineEditFields"] = array();

$tdataweb_news[".exportFields"] = array();

$tdataweb_news[".importFields"] = array();

$tdataweb_news[".printFields"] = array();

//	wnID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "wnID";
	$fdata["GoodName"] = "wnID";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_news","wnID");
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








	$tdataweb_news["wnID"] = $fdata;
//	wTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "wTitle";
	$fdata["GoodName"] = "wTitle";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_news","wTitle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "wTitle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wTitle";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 632;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataweb_news["wTitle"] = $fdata;
//	wContent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "wContent";
	$fdata["GoodName"] = "wContent";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_news","wContent");
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

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 300;
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








	$tdataweb_news["wContent"] = $fdata;
//	wType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "wType";
	$fdata["GoodName"] = "wType";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_news","wType");
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








	$tdataweb_news["wType"] = $fdata;
//	wDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "wDate";
	$fdata["GoodName"] = "wDate";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_news","wDate");
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








	$tdataweb_news["wDate"] = $fdata;
//	wStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "wStatus";
	$fdata["GoodName"] = "wStatus";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_news","wStatus");
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








	$tdataweb_news["wStatus"] = $fdata;
//	wPic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "wPic";
	$fdata["GoodName"] = "wPic";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_news","wPic");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "wPic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wPic";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpeg";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 5;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 300;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 900;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataweb_news["wPic"] = $fdata;


$tables_data["web_news"]=&$tdataweb_news;
$field_labels["web_news"] = &$fieldLabelsweb_news;
$fieldToolTips["web_news"] = &$fieldToolTipsweb_news;
$page_titles["web_news"] = &$pageTitlesweb_news;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["web_news"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["web_news"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_web_news()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "wnID,  wTitle,  wContent,  wType,  wDate,  wStatus,  wPic";
$proto3["m_strFrom"] = "FROM web_news";
$proto3["m_strWhere"] = "wType ='Berita'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "wType ='Berita'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "wType",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_news"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='Berita'";
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
	"m_srcTableName" => "web_news"
));

$proto8["m_sql"] = "wnID";
$proto8["m_srcTableName"] = "web_news";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "wTitle",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_news"
));

$proto10["m_sql"] = "wTitle";
$proto10["m_srcTableName"] = "web_news";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "wContent",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_news"
));

$proto12["m_sql"] = "wContent";
$proto12["m_srcTableName"] = "web_news";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "wType",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_news"
));

$proto14["m_sql"] = "wType";
$proto14["m_srcTableName"] = "web_news";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "wDate",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_news"
));

$proto16["m_sql"] = "wDate";
$proto16["m_srcTableName"] = "web_news";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "wStatus",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_news"
));

$proto18["m_sql"] = "wStatus";
$proto18["m_srcTableName"] = "web_news";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "wPic",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_news"
));

$proto20["m_sql"] = "wPic";
$proto20["m_srcTableName"] = "web_news";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "web_news";
$proto23["m_srcTableName"] = "web_news";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "wnID";
$proto23["m_columns"][] = "wTitle";
$proto23["m_columns"][] = "wContent";
$proto23["m_columns"][] = "wType";
$proto23["m_columns"][] = "wDate";
$proto23["m_columns"][] = "wStatus";
$proto23["m_columns"][] = "wPic";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "web_news";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "web_news";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="web_news";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_web_news = createSqlQuery_web_news();



							

$tdataweb_news[".sqlquery"] = $queryData_web_news;

$tableEvents["web_news"] = new eventsBase;
$tdataweb_news[".hasEvents"] = false;

?>