<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprocedure = array();	
	$tdataprocedure[".truncateText"] = true;
	$tdataprocedure[".NumberOfChars"] = 350; 
	$tdataprocedure[".ShortName"] = "procedure";
	$tdataprocedure[".OwnerID"] = "";
	$tdataprocedure[".OriginalTable"] = "procedure";

//	field labels
$fieldLabelsprocedure = array();
$fieldToolTipsprocedure = array();
$pageTitlesprocedure = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsprocedure["Malay"] = array();
	$fieldToolTipsprocedure["Malay"] = array();
	$pageTitlesprocedure["Malay"] = array();
	$fieldLabelsprocedure["Malay"]["procedureID"] = "Procedure ID";
	$fieldToolTipsprocedure["Malay"]["procedureID"] = "";
	$fieldLabelsprocedure["Malay"]["procedure"] = "Perkara";
	$fieldToolTipsprocedure["Malay"]["procedure"] = "";
	$fieldLabelsprocedure["Malay"]["criteria"] = "Kriteria";
	$fieldToolTipsprocedure["Malay"]["criteria"] = "";
	$fieldLabelsprocedure["Malay"]["refID"] = "Ref ID";
	$fieldToolTipsprocedure["Malay"]["refID"] = "";
	if (count($fieldToolTipsprocedure["Malay"]))
		$tdataprocedure[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprocedure[""] = array();
	$fieldToolTipsprocedure[""] = array();
	$pageTitlesprocedure[""] = array();
	if (count($fieldToolTipsprocedure[""]))
		$tdataprocedure[".isUseToolTips"] = true;
}
	
	
	$tdataprocedure[".NCSearch"] = true;



$tdataprocedure[".shortTableName"] = "procedure";
$tdataprocedure[".nSecOptions"] = 0;
$tdataprocedure[".recsPerRowList"] = 1;
$tdataprocedure[".recsPerRowPrint"] = 1;
$tdataprocedure[".mainTableOwnerID"] = "";
$tdataprocedure[".moveNext"] = 1;
$tdataprocedure[".entityType"] = 0;

$tdataprocedure[".strOriginalTableName"] = "procedure";




$tdataprocedure[".showAddInPopup"] = false;

$tdataprocedure[".showEditInPopup"] = false;

$tdataprocedure[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprocedure[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprocedure[".fieldsForRegister"] = array();

$tdataprocedure[".listAjax"] = false;

	$tdataprocedure[".audit"] = false;

	$tdataprocedure[".locking"] = false;



$tdataprocedure[".list"] = true;

$tdataprocedure[".inlineEdit"] = true;
$tdataprocedure[".inlineAdd"] = true;




$tdataprocedure[".delete"] = true;

$tdataprocedure[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataprocedure[".searchSaving"] = false;
//

$tdataprocedure[".showSearchPanel"] = true;
		$tdataprocedure[".flexibleSearch"] = true;		

if (isMobile())
	$tdataprocedure[".isUseAjaxSuggest"] = false;
else 
	$tdataprocedure[".isUseAjaxSuggest"] = true;

$tdataprocedure[".rowHighlite"] = true;


																																
$tdataprocedure[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprocedure[".isUseTimeForSearch"] = false;




$tdataprocedure[".detailsLinksOnList"] = "1";

$tdataprocedure[".allSearchFields"] = array();
$tdataprocedure[".filterFields"] = array();
$tdataprocedure[".requiredSearchFields"] = array();

$tdataprocedure[".allSearchFields"][] = "procedure";
	$tdataprocedure[".allSearchFields"][] = "criteria";
	

$tdataprocedure[".googleLikeFields"] = array();
$tdataprocedure[".googleLikeFields"][] = "procedure";
$tdataprocedure[".googleLikeFields"][] = "refID";

$tdataprocedure[".panelSearchFields"] = array();
$tdataprocedure[".searchPanelOptions"] = array();
$tdataprocedure[".panelSearchFields"][] = "procedure";
	$tdataprocedure[".panelSearchFields"][] = "criteria";
	
$tdataprocedure[".advSearchFields"] = array();
$tdataprocedure[".advSearchFields"][] = "procedure";
$tdataprocedure[".advSearchFields"][] = "criteria";

$tdataprocedure[".tableType"] = "list";

$tdataprocedure[".printerPageOrientation"] = 0;
$tdataprocedure[".nPrinterPageScale"] = 100;

$tdataprocedure[".nPrinterSplitRecords"] = 40;

$tdataprocedure[".nPrinterPDFSplitRecords"] = 40;



$tdataprocedure[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataprocedure[".pageSize"] = 20;

$tdataprocedure[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprocedure[".strOrderBy"] = $tstrOrderBy;

$tdataprocedure[".orderindexes"] = array();

$tdataprocedure[".sqlHead"] = "SELECT procedureID,  	`procedure`,  	criteria,  	refID";
$tdataprocedure[".sqlFrom"] = "FROM `procedure`";
$tdataprocedure[".sqlWhereExpr"] = "";
$tdataprocedure[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprocedure[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprocedure[".arrGroupsPerPage"] = $arrGPP;


$tableKeysprocedure = array();
$tableKeysprocedure[] = "procedureID";
$tdataprocedure[".Keys"] = $tableKeysprocedure;

$tdataprocedure[".listFields"] = array();
$tdataprocedure[".listFields"][] = "procedure";
$tdataprocedure[".listFields"][] = "criteria";

$tdataprocedure[".hideMobileList"] = array();


$tdataprocedure[".viewFields"] = array();

$tdataprocedure[".addFields"] = array();

$tdataprocedure[".masterListFields"] = array();
$tdataprocedure[".masterListFields"][] = "procedureID";
$tdataprocedure[".masterListFields"][] = "procedure";
$tdataprocedure[".masterListFields"][] = "criteria";
$tdataprocedure[".masterListFields"][] = "refID";

$tdataprocedure[".inlineAddFields"] = array();
$tdataprocedure[".inlineAddFields"][] = "procedure";
$tdataprocedure[".inlineAddFields"][] = "criteria";

$tdataprocedure[".editFields"] = array();

$tdataprocedure[".inlineEditFields"] = array();
$tdataprocedure[".inlineEditFields"][] = "procedure";
$tdataprocedure[".inlineEditFields"][] = "criteria";

$tdataprocedure[".exportFields"] = array();

$tdataprocedure[".importFields"] = array();

$tdataprocedure[".printFields"] = array();

//	procedureID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "procedureID";
	$fdata["GoodName"] = "procedureID";
	$fdata["ownerTable"] = "procedure";
	$fdata["Label"] = GetFieldLabel("procedure","procedureID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "procedureID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedureID";
	
		
		
				
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
	
	
	
	

	

	
	$tdataprocedure["procedureID"] = $fdata;
//	procedure
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "procedure";
	$fdata["GoodName"] = "procedure";
	$fdata["ownerTable"] = "procedure";
	$fdata["Label"] = GetFieldLabel("procedure","procedure"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "procedure"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`procedure`";
	
		
		
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
			
		$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings	

	

	
	$tdataprocedure["procedure"] = $fdata;
//	criteria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "criteria";
	$fdata["GoodName"] = "criteria";
	$fdata["ownerTable"] = "procedure";
	$fdata["Label"] = GetFieldLabel("procedure","criteria"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "criteria"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "criteria";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 200;
			$edata["nCols"] = 500;
	
		
		
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the user's search options list 
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
// the end of search options settings	

	

	
	$tdataprocedure["criteria"] = $fdata;
//	refID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "refID";
	$fdata["GoodName"] = "refID";
	$fdata["ownerTable"] = "procedure";
	$fdata["Label"] = GetFieldLabel("procedure","refID"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataprocedure["refID"] = $fdata;

	
$tables_data["procedure"]=&$tdataprocedure;
$field_labels["procedure"] = &$fieldLabelsprocedure;
$fieldToolTips["procedure"] = &$fieldToolTipsprocedure;
$page_titles["procedure"] = &$pageTitlesprocedure;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["procedure"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["procedure"] = array();


	
				$strOriginalDetailsTable="reference";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="reference";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "reference";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 0;
	
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["procedure"][0] = $masterParams;	
				$masterTablesData["procedure"][0]["masterKeys"] = array();
	$masterTablesData["procedure"][0]["masterKeys"][]="refID";
				$masterTablesData["procedure"][0]["detailKeys"] = array();
	$masterTablesData["procedure"][0]["detailKeys"][]="refID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_procedure()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "procedureID,  	`procedure`,  	criteria,  	refID";
$proto0["m_strFrom"] = "FROM `procedure`";
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
	"m_strName" => "procedureID",
	"m_strTable" => "procedure",
	"m_srcTableName" => "procedure"
));

$proto5["m_sql"] = "procedureID";
$proto5["m_srcTableName"] = "procedure";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "procedure",
	"m_strTable" => "procedure",
	"m_srcTableName" => "procedure"
));

$proto7["m_sql"] = "`procedure`";
$proto7["m_srcTableName"] = "procedure";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "criteria",
	"m_strTable" => "procedure",
	"m_srcTableName" => "procedure"
));

$proto9["m_sql"] = "criteria";
$proto9["m_srcTableName"] = "procedure";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "refID",
	"m_strTable" => "procedure",
	"m_srcTableName" => "procedure"
));

$proto11["m_sql"] = "refID";
$proto11["m_srcTableName"] = "procedure";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "procedure";
$proto14["m_srcTableName"] = "procedure";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "procedureID";
$proto14["m_columns"][] = "procedure";
$proto14["m_columns"][] = "criteria";
$proto14["m_columns"][] = "refID";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "`procedure`";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "procedure";
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
$proto0["m_srcTableName"]="procedure";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_procedure = createSqlQuery_procedure();


	
				
	
$tdataprocedure[".sqlquery"] = $queryData_procedure;

$tableEvents["procedure"] = new eventsBase;
$tdataprocedure[".hasEvents"] = false;

?>