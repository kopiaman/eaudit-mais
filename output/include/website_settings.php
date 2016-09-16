<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawebsite = array();	
	$tdatawebsite[".truncateText"] = true;
	$tdatawebsite[".NumberOfChars"] = 80; 
	$tdatawebsite[".ShortName"] = "website";
	$tdatawebsite[".OwnerID"] = "";
	$tdatawebsite[".OriginalTable"] = "website";

//	field labels
$fieldLabelswebsite = array();
$fieldToolTipswebsite = array();
$pageTitleswebsite = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelswebsite["Malay"] = array();
	$fieldToolTipswebsite["Malay"] = array();
	$pageTitleswebsite["Malay"] = array();
	$fieldLabelswebsite["Malay"]["webID"] = "Web ID";
	$fieldToolTipswebsite["Malay"]["webID"] = "";
	$fieldLabelswebsite["Malay"]["webCategory"] = "Category";
	$fieldToolTipswebsite["Malay"]["webCategory"] = "";
	$fieldLabelswebsite["Malay"]["webTitle"] = "Tajuk";
	$fieldToolTipswebsite["Malay"]["webTitle"] = "";
	$fieldLabelswebsite["Malay"]["webAttachment"] = "Attachment";
	$fieldToolTipswebsite["Malay"]["webAttachment"] = "";
	if (count($fieldToolTipswebsite["Malay"]))
		$tdatawebsite[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswebsite[""] = array();
	$fieldToolTipswebsite[""] = array();
	$pageTitleswebsite[""] = array();
	$fieldLabelswebsite[""]["webID"] = "Web ID";
	$fieldToolTipswebsite[""]["webID"] = "";
	$fieldLabelswebsite[""]["webCategory"] = "Web Category";
	$fieldToolTipswebsite[""]["webCategory"] = "";
	$fieldLabelswebsite[""]["webTitle"] = "Web Title";
	$fieldToolTipswebsite[""]["webTitle"] = "";
	$fieldLabelswebsite[""]["webAttachment"] = "Web Attachment";
	$fieldToolTipswebsite[""]["webAttachment"] = "";
	if (count($fieldToolTipswebsite[""]))
		$tdatawebsite[".isUseToolTips"] = true;
}
	
	
	$tdatawebsite[".NCSearch"] = true;



$tdatawebsite[".shortTableName"] = "website";
$tdatawebsite[".nSecOptions"] = 0;
$tdatawebsite[".recsPerRowList"] = 1;
$tdatawebsite[".recsPerRowPrint"] = 1;
$tdatawebsite[".mainTableOwnerID"] = "";
$tdatawebsite[".moveNext"] = 1;
$tdatawebsite[".entityType"] = 0;

$tdatawebsite[".strOriginalTableName"] = "website";




$tdatawebsite[".showAddInPopup"] = true;

$tdatawebsite[".showEditInPopup"] = true;

$tdatawebsite[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
			;
$popupPagesLayoutNames["edit"] = "add";
			;
$popupPagesLayoutNames["view"] = "add";
$tdatawebsite[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawebsite[".fieldsForRegister"] = array();

$tdatawebsite[".listAjax"] = false;

	$tdatawebsite[".audit"] = false;

	$tdatawebsite[".locking"] = false;



$tdatawebsite[".list"] = true;

$tdatawebsite[".inlineEdit"] = true;
$tdatawebsite[".inlineAdd"] = true;




$tdatawebsite[".delete"] = true;

$tdatawebsite[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatawebsite[".searchSaving"] = false;
//

$tdatawebsite[".showSearchPanel"] = true;
		$tdatawebsite[".flexibleSearch"] = true;		

if (isMobile())
	$tdatawebsite[".isUseAjaxSuggest"] = false;
else 
	$tdatawebsite[".isUseAjaxSuggest"] = true;

$tdatawebsite[".rowHighlite"] = true;


																		
$tdatawebsite[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebsite[".isUseTimeForSearch"] = false;





$tdatawebsite[".allSearchFields"] = array();
$tdatawebsite[".filterFields"] = array();
$tdatawebsite[".requiredSearchFields"] = array();

$tdatawebsite[".allSearchFields"][] = "webCategory";
	$tdatawebsite[".allSearchFields"][] = "webTitle";
	$tdatawebsite[".allSearchFields"][] = "webAttachment";
	

$tdatawebsite[".googleLikeFields"] = array();
$tdatawebsite[".googleLikeFields"][] = "webID";
$tdatawebsite[".googleLikeFields"][] = "webCategory";
$tdatawebsite[".googleLikeFields"][] = "webTitle";
$tdatawebsite[".googleLikeFields"][] = "webAttachment";


$tdatawebsite[".advSearchFields"] = array();
$tdatawebsite[".advSearchFields"][] = "webCategory";
$tdatawebsite[".advSearchFields"][] = "webTitle";
$tdatawebsite[".advSearchFields"][] = "webAttachment";

$tdatawebsite[".tableType"] = "list";

$tdatawebsite[".printerPageOrientation"] = 0;
$tdatawebsite[".nPrinterPageScale"] = 100;

$tdatawebsite[".nPrinterSplitRecords"] = 40;

$tdatawebsite[".nPrinterPDFSplitRecords"] = 40;



$tdatawebsite[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatawebsite[".pageSize"] = 20;

$tdatawebsite[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawebsite[".strOrderBy"] = $tstrOrderBy;

$tdatawebsite[".orderindexes"] = array();

$tdatawebsite[".sqlHead"] = "SELECT webID,  	webCategory,  	webTitle,  	webAttachment";
$tdatawebsite[".sqlFrom"] = "FROM website";
$tdatawebsite[".sqlWhereExpr"] = "";
$tdatawebsite[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebsite[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebsite[".arrGroupsPerPage"] = $arrGPP;

$tdatawebsite[".highlightSearchResults"] = true;

$tableKeyswebsite = array();
$tableKeyswebsite[] = "webID";
$tdatawebsite[".Keys"] = $tableKeyswebsite;

$tdatawebsite[".listFields"] = array();
$tdatawebsite[".listFields"][] = "webCategory";
$tdatawebsite[".listFields"][] = "webTitle";
$tdatawebsite[".listFields"][] = "webAttachment";

$tdatawebsite[".hideMobileList"] = array();


$tdatawebsite[".viewFields"] = array();

$tdatawebsite[".addFields"] = array();

$tdatawebsite[".masterListFields"] = array();
$tdatawebsite[".masterListFields"][] = "webID";
$tdatawebsite[".masterListFields"][] = "webCategory";
$tdatawebsite[".masterListFields"][] = "webTitle";
$tdatawebsite[".masterListFields"][] = "webAttachment";

$tdatawebsite[".inlineAddFields"] = array();
$tdatawebsite[".inlineAddFields"][] = "webCategory";
$tdatawebsite[".inlineAddFields"][] = "webTitle";
$tdatawebsite[".inlineAddFields"][] = "webAttachment";

$tdatawebsite[".editFields"] = array();

$tdatawebsite[".inlineEditFields"] = array();
$tdatawebsite[".inlineEditFields"][] = "webCategory";
$tdatawebsite[".inlineEditFields"][] = "webTitle";
$tdatawebsite[".inlineEditFields"][] = "webAttachment";

$tdatawebsite[".exportFields"] = array();

$tdatawebsite[".importFields"] = array();

$tdatawebsite[".printFields"] = array();

//	webID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "webID";
	$fdata["GoodName"] = "webID";
	$fdata["ownerTable"] = "website";
	$fdata["Label"] = GetFieldLabel("website","webID"); 
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
	
	
	
	

	

	
	$tdatawebsite["webID"] = $fdata;
//	webCategory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "webCategory";
	$fdata["GoodName"] = "webCategory";
	$fdata["ownerTable"] = "website";
	$fdata["Label"] = GetFieldLabel("website","webCategory"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatawebsite["webCategory"] = $fdata;
//	webTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "webTitle";
	$fdata["GoodName"] = "webTitle";
	$fdata["ownerTable"] = "website";
	$fdata["Label"] = GetFieldLabel("website","webTitle"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatawebsite["webTitle"] = $fdata;
//	webAttachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "webAttachment";
	$fdata["GoodName"] = "webAttachment";
	$fdata["ownerTable"] = "website";
	$fdata["Label"] = GetFieldLabel("website","webAttachment"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatawebsite["webAttachment"] = $fdata;

	
$tables_data["website"]=&$tdatawebsite;
$field_labels["website"] = &$fieldLabelswebsite;
$fieldToolTips["website"] = &$fieldToolTipswebsite;
$page_titles["website"] = &$pageTitleswebsite;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["website"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["website"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_website()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "webID,  	webCategory,  	webTitle,  	webAttachment";
$proto3["m_strFrom"] = "FROM website";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
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
	"m_strTable" => "website",
	"m_srcTableName" => "website"
));

$proto8["m_sql"] = "webID";
$proto8["m_srcTableName"] = "website";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "webCategory",
	"m_strTable" => "website",
	"m_srcTableName" => "website"
));

$proto10["m_sql"] = "webCategory";
$proto10["m_srcTableName"] = "website";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "webTitle",
	"m_strTable" => "website",
	"m_srcTableName" => "website"
));

$proto12["m_sql"] = "webTitle";
$proto12["m_srcTableName"] = "website";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "webAttachment",
	"m_strTable" => "website",
	"m_srcTableName" => "website"
));

$proto14["m_sql"] = "webAttachment";
$proto14["m_srcTableName"] = "website";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "website";
$proto17["m_srcTableName"] = "website";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "webID";
$proto17["m_columns"][] = "webCategory";
$proto17["m_columns"][] = "webTitle";
$proto17["m_columns"][] = "webAttachment";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "website";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "website";
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
$proto3["m_srcTableName"]="website";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_website = createSqlQuery_website();


	
				
	
$tdatawebsite[".sqlquery"] = $queryData_website;

$tableEvents["website"] = new eventsBase;
$tdatawebsite[".hasEvents"] = false;

?>