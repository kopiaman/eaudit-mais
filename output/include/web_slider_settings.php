<?php
require_once(getabspath("classes/cipherer.php"));




$tdataweb_slider = array();
	$tdataweb_slider[".truncateText"] = true;
	$tdataweb_slider[".NumberOfChars"] = 80;
	$tdataweb_slider[".ShortName"] = "web_slider";
	$tdataweb_slider[".OwnerID"] = "";
	$tdataweb_slider[".OriginalTable"] = "web_news";

//	field labels
$fieldLabelsweb_slider = array();
$fieldToolTipsweb_slider = array();
$pageTitlesweb_slider = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsweb_slider["Malay"] = array();
	$fieldToolTipsweb_slider["Malay"] = array();
	$pageTitlesweb_slider["Malay"] = array();
	$fieldLabelsweb_slider["Malay"]["wnID"] = "Wn ID";
	$fieldToolTipsweb_slider["Malay"]["wnID"] = "";
	$fieldLabelsweb_slider["Malay"]["wType"] = "Jenis";
	$fieldToolTipsweb_slider["Malay"]["wType"] = "";
	$fieldLabelsweb_slider["Malay"]["wStatus"] = "Status";
	$fieldToolTipsweb_slider["Malay"]["wStatus"] = "";
	$fieldLabelsweb_slider["Malay"]["wPic"] = "Gambar Slider";
	$fieldToolTipsweb_slider["Malay"]["wPic"] = "";
	$fieldLabelsweb_slider["Malay"]["wTitle"] = "Tajuk";
	$fieldToolTipsweb_slider["Malay"]["wTitle"] = "";
	$fieldLabelsweb_slider["Malay"]["wDate"] = "Tarikh";
	$fieldToolTipsweb_slider["Malay"]["wDate"] = "";
	$fieldLabelsweb_slider["Malay"]["wContent"] = "Keterangan";
	$fieldToolTipsweb_slider["Malay"]["wContent"] = "";
	if (count($fieldToolTipsweb_slider["Malay"]))
		$tdataweb_slider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsweb_slider[""] = array();
	$fieldToolTipsweb_slider[""] = array();
	$pageTitlesweb_slider[""] = array();
	if (count($fieldToolTipsweb_slider[""]))
		$tdataweb_slider[".isUseToolTips"] = true;
}


	$tdataweb_slider[".NCSearch"] = true;



$tdataweb_slider[".shortTableName"] = "web_slider";
$tdataweb_slider[".nSecOptions"] = 0;
$tdataweb_slider[".recsPerRowList"] = 1;
$tdataweb_slider[".recsPerRowPrint"] = 1;
$tdataweb_slider[".mainTableOwnerID"] = "";
$tdataweb_slider[".moveNext"] = 1;
$tdataweb_slider[".entityType"] = 1;

$tdataweb_slider[".strOriginalTableName"] = "web_news";




$tdataweb_slider[".showAddInPopup"] = true;

$tdataweb_slider[".showEditInPopup"] = true;

$tdataweb_slider[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "under_center31";
						
	;
$popupPagesLayoutNames["edit"] = "under_center3";
			;
$popupPagesLayoutNames["view"] = "under_center3";
$tdataweb_slider[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataweb_slider[".fieldsForRegister"] = array();

$tdataweb_slider[".listAjax"] = false;

	$tdataweb_slider[".audit"] = false;

	$tdataweb_slider[".locking"] = false;

$tdataweb_slider[".edit"] = true;
$tdataweb_slider[".afterEditAction"] = 1;
$tdataweb_slider[".closePopupAfterEdit"] = 1;
$tdataweb_slider[".afterEditActionDetTable"] = "";

$tdataweb_slider[".add"] = true;
$tdataweb_slider[".afterAddAction"] = 1;
$tdataweb_slider[".closePopupAfterAdd"] = 1;
$tdataweb_slider[".afterAddActionDetTable"] = "";

$tdataweb_slider[".list"] = true;





$tdataweb_slider[".delete"] = true;

$tdataweb_slider[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataweb_slider[".searchSaving"] = false;
//

if (isMobile()){
}
else
	$tdataweb_slider[".showSearchPanel"] = false;

if (isMobile())
	$tdataweb_slider[".isUseAjaxSuggest"] = false;
else
	$tdataweb_slider[".isUseAjaxSuggest"] = true;

$tdataweb_slider[".rowHighlite"] = true;


																				
$tdataweb_slider[".addPageEvents"] = false;

// use timepicker for search panel
$tdataweb_slider[".isUseTimeForSearch"] = false;





$tdataweb_slider[".allSearchFields"] = array();
$tdataweb_slider[".filterFields"] = array();
$tdataweb_slider[".requiredSearchFields"] = array();



$tdataweb_slider[".googleLikeFields"] = array();
$tdataweb_slider[".googleLikeFields"][] = "wnID";
$tdataweb_slider[".googleLikeFields"][] = "wTitle";
$tdataweb_slider[".googleLikeFields"][] = "wType";
$tdataweb_slider[".googleLikeFields"][] = "wStatus";
$tdataweb_slider[".googleLikeFields"][] = "wPic";
$tdataweb_slider[".googleLikeFields"][] = "wDate";
$tdataweb_slider[".googleLikeFields"][] = "wContent";



$tdataweb_slider[".tableType"] = "list";

$tdataweb_slider[".printerPageOrientation"] = 0;
$tdataweb_slider[".nPrinterPageScale"] = 100;

$tdataweb_slider[".nPrinterSplitRecords"] = 40;

$tdataweb_slider[".nPrinterPDFSplitRecords"] = 40;



$tdataweb_slider[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataweb_slider[".pageSize"] = 20;

$tdataweb_slider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataweb_slider[".strOrderBy"] = $tstrOrderBy;

$tdataweb_slider[".orderindexes"] = array();

$tdataweb_slider[".sqlHead"] = "SELECT wnID,  wTitle,  wType,  wStatus,  wPic,  wDate,  wContent";
$tdataweb_slider[".sqlFrom"] = "FROM web_news";
$tdataweb_slider[".sqlWhereExpr"] = "wType ='Slider'";
$tdataweb_slider[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataweb_slider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataweb_slider[".arrGroupsPerPage"] = $arrGPP;

$tdataweb_slider[".highlightSearchResults"] = true;

$tableKeysweb_slider = array();
$tableKeysweb_slider[] = "wnID";
$tdataweb_slider[".Keys"] = $tableKeysweb_slider;

$tdataweb_slider[".listFields"] = array();
$tdataweb_slider[".listFields"][] = "wDate";
$tdataweb_slider[".listFields"][] = "wStatus";
$tdataweb_slider[".listFields"][] = "wTitle";
$tdataweb_slider[".listFields"][] = "wType";
$tdataweb_slider[".listFields"][] = "wContent";

$tdataweb_slider[".hideMobileList"] = array();


$tdataweb_slider[".viewFields"] = array();

$tdataweb_slider[".addFields"] = array();
$tdataweb_slider[".addFields"][] = "wDate";
$tdataweb_slider[".addFields"][] = "wStatus";
$tdataweb_slider[".addFields"][] = "wTitle";
$tdataweb_slider[".addFields"][] = "wType";
$tdataweb_slider[".addFields"][] = "wPic";
$tdataweb_slider[".addFields"][] = "wContent";

$tdataweb_slider[".masterListFields"] = array();
$tdataweb_slider[".masterListFields"][] = "wnID";
$tdataweb_slider[".masterListFields"][] = "wDate";
$tdataweb_slider[".masterListFields"][] = "wStatus";
$tdataweb_slider[".masterListFields"][] = "wTitle";
$tdataweb_slider[".masterListFields"][] = "wContent";
$tdataweb_slider[".masterListFields"][] = "wType";
$tdataweb_slider[".masterListFields"][] = "wPic";

$tdataweb_slider[".inlineAddFields"] = array();

$tdataweb_slider[".editFields"] = array();
$tdataweb_slider[".editFields"][] = "wDate";
$tdataweb_slider[".editFields"][] = "wStatus";
$tdataweb_slider[".editFields"][] = "wTitle";
$tdataweb_slider[".editFields"][] = "wPic";
$tdataweb_slider[".editFields"][] = "wContent";

$tdataweb_slider[".inlineEditFields"] = array();

$tdataweb_slider[".exportFields"] = array();

$tdataweb_slider[".importFields"] = array();

$tdataweb_slider[".printFields"] = array();

//	wnID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "wnID";
	$fdata["GoodName"] = "wnID";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_slider","wnID");
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








	$tdataweb_slider["wnID"] = $fdata;
//	wTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "wTitle";
	$fdata["GoodName"] = "wTitle";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_slider","wTitle");
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








	$tdataweb_slider["wTitle"] = $fdata;
//	wType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "wType";
	$fdata["GoodName"] = "wType";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_slider","wType");
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








	$tdataweb_slider["wType"] = $fdata;
//	wStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "wStatus";
	$fdata["GoodName"] = "wStatus";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_slider","wStatus");
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








	$tdataweb_slider["wStatus"] = $fdata;
//	wPic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "wPic";
	$fdata["GoodName"] = "wPic";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_slider","wPic");
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 500;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 1000;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataweb_slider["wPic"] = $fdata;
//	wDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "wDate";
	$fdata["GoodName"] = "wDate";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_slider","wDate");
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








	$tdataweb_slider["wDate"] = $fdata;
//	wContent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "wContent";
	$fdata["GoodName"] = "wContent";
	$fdata["ownerTable"] = "web_news";
	$fdata["Label"] = GetFieldLabel("web_slider","wContent");
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

	
	
	
				$edata["nRows"] = 58;
			$edata["nCols"] = 643;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataweb_slider["wContent"] = $fdata;


$tables_data["web_slider"]=&$tdataweb_slider;
$field_labels["web_slider"] = &$fieldLabelsweb_slider;
$fieldToolTips["web_slider"] = &$fieldToolTipsweb_slider;
$page_titles["web_slider"] = &$pageTitlesweb_slider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["web_slider"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["web_slider"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_web_slider()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "wnID,  wTitle,  wType,  wStatus,  wPic,  wDate,  wContent";
$proto3["m_strFrom"] = "FROM web_news";
$proto3["m_strWhere"] = "wType ='Slider'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "wType ='Slider'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "wType",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_slider"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='Slider'";
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
	"m_srcTableName" => "web_slider"
));

$proto8["m_sql"] = "wnID";
$proto8["m_srcTableName"] = "web_slider";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "wTitle",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_slider"
));

$proto10["m_sql"] = "wTitle";
$proto10["m_srcTableName"] = "web_slider";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "wType",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_slider"
));

$proto12["m_sql"] = "wType";
$proto12["m_srcTableName"] = "web_slider";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "wStatus",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_slider"
));

$proto14["m_sql"] = "wStatus";
$proto14["m_srcTableName"] = "web_slider";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "wPic",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_slider"
));

$proto16["m_sql"] = "wPic";
$proto16["m_srcTableName"] = "web_slider";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "wDate",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_slider"
));

$proto18["m_sql"] = "wDate";
$proto18["m_srcTableName"] = "web_slider";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "wContent",
	"m_strTable" => "web_news",
	"m_srcTableName" => "web_slider"
));

$proto20["m_sql"] = "wContent";
$proto20["m_srcTableName"] = "web_slider";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "web_news";
$proto23["m_srcTableName"] = "web_slider";
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
$proto22["m_srcTableName"] = "web_slider";
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
$proto3["m_srcTableName"]="web_slider";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_web_slider = createSqlQuery_web_slider();



							

$tdataweb_slider[".sqlquery"] = $queryData_web_slider;

$tableEvents["web_slider"] = new eventsBase;
$tdataweb_slider[".hasEvents"] = false;

?>