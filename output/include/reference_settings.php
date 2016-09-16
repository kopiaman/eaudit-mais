<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareference = array();	
	$tdatareference[".truncateText"] = true;
	$tdatareference[".NumberOfChars"] = 80; 
	$tdatareference[".ShortName"] = "reference";
	$tdatareference[".OwnerID"] = "";
	$tdatareference[".OriginalTable"] = "reference";

//	field labels
$fieldLabelsreference = array();
$fieldToolTipsreference = array();
$pageTitlesreference = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsreference["Malay"] = array();
	$fieldToolTipsreference["Malay"] = array();
	$pageTitlesreference["Malay"] = array();
	$fieldLabelsreference["Malay"]["refID"] = "Ref ID";
	$fieldToolTipsreference["Malay"]["refID"] = "";
	$fieldLabelsreference["Malay"]["refName"] = "Nama Rujukan";
	$fieldToolTipsreference["Malay"]["refName"] = "";
	$fieldLabelsreference["Malay"]["refCode"] = "Kod ";
	$fieldToolTipsreference["Malay"]["refCode"] = "";
	if (count($fieldToolTipsreference["Malay"]))
		$tdatareference[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreference[""] = array();
	$fieldToolTipsreference[""] = array();
	$pageTitlesreference[""] = array();
	$fieldLabelsreference[""]["refID"] = "Ref ID";
	$fieldToolTipsreference[""]["refID"] = "";
	$fieldLabelsreference[""]["refName"] = "Ref Name";
	$fieldToolTipsreference[""]["refName"] = "";
	$fieldLabelsreference[""]["refCode"] = "Ref Code";
	$fieldToolTipsreference[""]["refCode"] = "";
	if (count($fieldToolTipsreference[""]))
		$tdatareference[".isUseToolTips"] = true;
}
	
	
	$tdatareference[".NCSearch"] = true;



$tdatareference[".shortTableName"] = "reference";
$tdatareference[".nSecOptions"] = 0;
$tdatareference[".recsPerRowList"] = 1;
$tdatareference[".recsPerRowPrint"] = 1;
$tdatareference[".mainTableOwnerID"] = "";
$tdatareference[".moveNext"] = 1;
$tdatareference[".entityType"] = 0;

$tdatareference[".strOriginalTableName"] = "reference";




$tdatareference[".showAddInPopup"] = false;

$tdatareference[".showEditInPopup"] = false;

$tdatareference[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareference[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareference[".fieldsForRegister"] = array();

$tdatareference[".listAjax"] = false;

	$tdatareference[".audit"] = false;

	$tdatareference[".locking"] = false;



$tdatareference[".list"] = true;

$tdatareference[".inlineEdit"] = true;
$tdatareference[".inlineAdd"] = true;




$tdatareference[".delete"] = true;

$tdatareference[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareference[".searchSaving"] = false;
//

$tdatareference[".showSearchPanel"] = true;
		$tdatareference[".flexibleSearch"] = true;		

if (isMobile())
	$tdatareference[".isUseAjaxSuggest"] = false;
else 
	$tdatareference[".isUseAjaxSuggest"] = true;

$tdatareference[".rowHighlite"] = true;


								
$tdatareference[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareference[".isUseTimeForSearch"] = false;





$tdatareference[".allSearchFields"] = array();
$tdatareference[".filterFields"] = array();
$tdatareference[".requiredSearchFields"] = array();

$tdatareference[".allSearchFields"][] = "refName";
	$tdatareference[".allSearchFields"][] = "refCode";
	

$tdatareference[".googleLikeFields"] = array();
$tdatareference[".googleLikeFields"][] = "refID";
$tdatareference[".googleLikeFields"][] = "refName";
$tdatareference[".googleLikeFields"][] = "refCode";


$tdatareference[".advSearchFields"] = array();
$tdatareference[".advSearchFields"][] = "refName";
$tdatareference[".advSearchFields"][] = "refCode";

$tdatareference[".tableType"] = "list";

$tdatareference[".printerPageOrientation"] = 0;
$tdatareference[".nPrinterPageScale"] = 100;

$tdatareference[".nPrinterSplitRecords"] = 40;

$tdatareference[".nPrinterPDFSplitRecords"] = 40;



$tdatareference[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatareference[".pageSize"] = 20;

$tdatareference[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareference[".strOrderBy"] = $tstrOrderBy;

$tdatareference[".orderindexes"] = array();

$tdatareference[".sqlHead"] = "SELECT refID,  	refName,  	refCode";
$tdatareference[".sqlFrom"] = "FROM reference";
$tdatareference[".sqlWhereExpr"] = "";
$tdatareference[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareference[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareference[".arrGroupsPerPage"] = $arrGPP;

$tdatareference[".highlightSearchResults"] = true;

$tableKeysreference = array();
$tableKeysreference[] = "refID";
$tdatareference[".Keys"] = $tableKeysreference;

$tdatareference[".listFields"] = array();
$tdatareference[".listFields"][] = "refName";
$tdatareference[".listFields"][] = "refCode";

$tdatareference[".hideMobileList"] = array();


$tdatareference[".viewFields"] = array();

$tdatareference[".addFields"] = array();

$tdatareference[".masterListFields"] = array();
$tdatareference[".masterListFields"][] = "refID";
$tdatareference[".masterListFields"][] = "refName";
$tdatareference[".masterListFields"][] = "refCode";

$tdatareference[".inlineAddFields"] = array();
$tdatareference[".inlineAddFields"][] = "refName";
$tdatareference[".inlineAddFields"][] = "refCode";

$tdatareference[".editFields"] = array();

$tdatareference[".inlineEditFields"] = array();
$tdatareference[".inlineEditFields"][] = "refName";

$tdatareference[".exportFields"] = array();

$tdatareference[".importFields"] = array();

$tdatareference[".printFields"] = array();

//	refID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "refID";
	$fdata["GoodName"] = "refID";
	$fdata["ownerTable"] = "reference";
	$fdata["Label"] = GetFieldLabel("reference","refID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "refID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refID";
	
		
		
				
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
	
	
	
	

	

	
	$tdatareference["refID"] = $fdata;
//	refName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "refName";
	$fdata["GoodName"] = "refName";
	$fdata["ownerTable"] = "reference";
	$fdata["Label"] = GetFieldLabel("reference","refName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "refName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refName";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdatareference["refName"] = $fdata;
//	refCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "refCode";
	$fdata["GoodName"] = "refCode";
	$fdata["ownerTable"] = "reference";
	$fdata["Label"] = GetFieldLabel("reference","refCode"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatareference["refCode"] = $fdata;

	
$tables_data["reference"]=&$tdatareference;
$field_labels["reference"] = &$fieldLabelsreference;
$fieldToolTips["reference"] = &$fieldToolTipsreference;
$page_titles["reference"] = &$pageTitlesreference;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["reference"] = array();
//	reference_detail
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="reference_detail";
		$detailsParam["dOriginalTable"] = "reference_detail";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "reference_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("reference_detail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["reference"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["reference"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["reference"][$dIndex]["masterKeys"][]="refCode";

				$detailsTablesData["reference"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["reference"][$dIndex]["detailKeys"][]="refCode";
	
// tables which are master tables for current table (detail)
$masterTablesData["reference"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_reference()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "refID,  	refName,  	refCode";
$proto0["m_strFrom"] = "FROM reference";
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
	"m_strName" => "refID",
	"m_strTable" => "reference",
	"m_srcTableName" => "reference"
));

$proto5["m_sql"] = "refID";
$proto5["m_srcTableName"] = "reference";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "refName",
	"m_strTable" => "reference",
	"m_srcTableName" => "reference"
));

$proto7["m_sql"] = "refName";
$proto7["m_srcTableName"] = "reference";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "refCode",
	"m_strTable" => "reference",
	"m_srcTableName" => "reference"
));

$proto9["m_sql"] = "refCode";
$proto9["m_srcTableName"] = "reference";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "reference";
$proto12["m_srcTableName"] = "reference";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "refID";
$proto12["m_columns"][] = "refName";
$proto12["m_columns"][] = "refCode";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "reference";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "reference";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="reference";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reference = createSqlQuery_reference();


	
			
	
$tdatareference[".sqlquery"] = $queryData_reference;

$tableEvents["reference"] = new eventsBase;
$tdatareference[".hasEvents"] = false;

?>