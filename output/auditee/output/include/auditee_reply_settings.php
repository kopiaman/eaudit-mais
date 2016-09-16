<?php
require_once(getabspath("classes/cipherer.php"));




$tdataauditee_reply = array();	
	$tdataauditee_reply[".truncateText"] = true;
	$tdataauditee_reply[".NumberOfChars"] = 80; 
	$tdataauditee_reply[".ShortName"] = "auditee_reply";
	$tdataauditee_reply[".OwnerID"] = "";
	$tdataauditee_reply[".OriginalTable"] = "audit_info";

//	field labels
$fieldLabelsauditee_reply = array();
$fieldToolTipsauditee_reply = array();
$pageTitlesauditee_reply = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsauditee_reply["English"] = array();
	$fieldToolTipsauditee_reply["English"] = array();
	$pageTitlesauditee_reply["English"] = array();
	$fieldLabelsauditee_reply["English"]["inid"] = "Inid";
	$fieldToolTipsauditee_reply["English"]["inid"] = "";
	$fieldLabelsauditee_reply["English"]["fid"] = "Fid";
	$fieldToolTipsauditee_reply["English"]["fid"] = "";
	$fieldLabelsauditee_reply["English"]["answer"] = "Maklum Balas ";
	$fieldToolTipsauditee_reply["English"]["answer"] = "";
	$fieldLabelsauditee_reply["English"]["reply_attachment"] = "Attachment";
	$fieldToolTipsauditee_reply["English"]["reply_attachment"] = "";
	if (count($fieldToolTipsauditee_reply["English"]))
		$tdataauditee_reply[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsauditee_reply[""] = array();
	$fieldToolTipsauditee_reply[""] = array();
	$pageTitlesauditee_reply[""] = array();
	$fieldLabelsauditee_reply[""]["inid"] = "Inid";
	$fieldToolTipsauditee_reply[""]["inid"] = "";
	if (count($fieldToolTipsauditee_reply[""]))
		$tdataauditee_reply[".isUseToolTips"] = true;
}
	
	
	$tdataauditee_reply[".NCSearch"] = true;



$tdataauditee_reply[".shortTableName"] = "auditee_reply";
$tdataauditee_reply[".nSecOptions"] = 0;
$tdataauditee_reply[".recsPerRowList"] = 1;
$tdataauditee_reply[".recsPerRowPrint"] = 1;
$tdataauditee_reply[".mainTableOwnerID"] = "";
$tdataauditee_reply[".moveNext"] = 1;
$tdataauditee_reply[".entityType"] = 1;

$tdataauditee_reply[".strOriginalTableName"] = "audit_info";




$tdataauditee_reply[".showAddInPopup"] = false;

$tdataauditee_reply[".showEditInPopup"] = false;

$tdataauditee_reply[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataauditee_reply[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataauditee_reply[".fieldsForRegister"] = array();

$tdataauditee_reply[".listAjax"] = false;

	$tdataauditee_reply[".audit"] = false;

	$tdataauditee_reply[".locking"] = false;

$tdataauditee_reply[".edit"] = true;
$tdataauditee_reply[".afterEditAction"] = 1;
$tdataauditee_reply[".closePopupAfterEdit"] = 1;
$tdataauditee_reply[".afterEditActionDetTable"] = "Detail tables not found!";


$tdataauditee_reply[".list"] = true;






$tdataauditee_reply[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataauditee_reply[".searchSaving"] = false;
//

if (isMobile()){
}
else 
	$tdataauditee_reply[".showSearchPanel"] = false;

if (isMobile())
	$tdataauditee_reply[".isUseAjaxSuggest"] = false;
else 
	$tdataauditee_reply[".isUseAjaxSuggest"] = true;

$tdataauditee_reply[".rowHighlite"] = true;



$tdataauditee_reply[".addPageEvents"] = false;

// use timepicker for search panel
$tdataauditee_reply[".isUseTimeForSearch"] = false;





$tdataauditee_reply[".allSearchFields"] = array();
$tdataauditee_reply[".filterFields"] = array();
$tdataauditee_reply[".requiredSearchFields"] = array();



$tdataauditee_reply[".googleLikeFields"] = array();
$tdataauditee_reply[".googleLikeFields"][] = "inid";
$tdataauditee_reply[".googleLikeFields"][] = "reply_attachment";
$tdataauditee_reply[".googleLikeFields"][] = "answer";
$tdataauditee_reply[".googleLikeFields"][] = "fid";



$tdataauditee_reply[".tableType"] = "list";

$tdataauditee_reply[".printerPageOrientation"] = 0;
$tdataauditee_reply[".nPrinterPageScale"] = 100;

$tdataauditee_reply[".nPrinterSplitRecords"] = 40;

$tdataauditee_reply[".nPrinterPDFSplitRecords"] = 40;



$tdataauditee_reply[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataauditee_reply[".pageSize"] = 20;

$tdataauditee_reply[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataauditee_reply[".strOrderBy"] = $tstrOrderBy;

$tdataauditee_reply[".orderindexes"] = array();

$tdataauditee_reply[".sqlHead"] = "SELECT inid,  reply_attachment,  answer,  fid";
$tdataauditee_reply[".sqlFrom"] = "FROM audit_info";
$tdataauditee_reply[".sqlWhereExpr"] = "";
$tdataauditee_reply[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataauditee_reply[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauditee_reply[".arrGroupsPerPage"] = $arrGPP;

$tdataauditee_reply[".highlightSearchResults"] = true;

$tableKeysauditee_reply = array();
$tableKeysauditee_reply[] = "inid";
$tdataauditee_reply[".Keys"] = $tableKeysauditee_reply;

$tdataauditee_reply[".listFields"] = array();
$tdataauditee_reply[".listFields"][] = "answer";
$tdataauditee_reply[".listFields"][] = "reply_attachment";

$tdataauditee_reply[".hideMobileList"] = array();


$tdataauditee_reply[".viewFields"] = array();

$tdataauditee_reply[".addFields"] = array();

$tdataauditee_reply[".masterListFields"] = array();
$tdataauditee_reply[".masterListFields"][] = "fid";
$tdataauditee_reply[".masterListFields"][] = "inid";
$tdataauditee_reply[".masterListFields"][] = "answer";
$tdataauditee_reply[".masterListFields"][] = "reply_attachment";

$tdataauditee_reply[".inlineAddFields"] = array();

$tdataauditee_reply[".editFields"] = array();
$tdataauditee_reply[".editFields"][] = "answer";
$tdataauditee_reply[".editFields"][] = "reply_attachment";

$tdataauditee_reply[".inlineEditFields"] = array();

$tdataauditee_reply[".exportFields"] = array();

$tdataauditee_reply[".importFields"] = array();

$tdataauditee_reply[".printFields"] = array();

//	inid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inid";
	$fdata["GoodName"] = "inid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply","inid"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "inid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inid";
	
		
		
				
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
	
	
	
	

	

	
	$tdataauditee_reply["inid"] = $fdata;
//	reply_attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reply_attachment";
	$fdata["GoodName"] = "reply_attachment";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply","reply_attachment"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "reply_attachment"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reply_attachment";
	
		
		
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
	
		$edata["maxNumberOfFiles"] = 0;
	
		$edata["maxFileSize"] = 2000;
	
		
		
		
		
		
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
	
	
	
	

	

	
	$tdataauditee_reply["reply_attachment"] = $fdata;
//	answer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "answer";
	$fdata["GoodName"] = "answer";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply","answer"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "answer"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "answer";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 223;
			$edata["nCols"] = 602;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataauditee_reply["answer"] = $fdata;
//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply","fid"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "fid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fid";
	
		
		
				
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
	
	
	
	

	

	
	$tdataauditee_reply["fid"] = $fdata;

	
$tables_data["auditee_reply"]=&$tdataauditee_reply;
$field_labels["auditee_reply"] = &$fieldLabelsauditee_reply;
$fieldToolTips["auditee_reply"] = &$fieldToolTipsauditee_reply;
$page_titles["auditee_reply"] = &$pageTitlesauditee_reply;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["auditee_reply"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["auditee_reply"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_auditee_reply()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inid,  reply_attachment,  answer,  fid";
$proto0["m_strFrom"] = "FROM audit_info";
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
	"m_strName" => "inid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply"
));

$proto5["m_sql"] = "inid";
$proto5["m_srcTableName"] = "auditee_reply";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply"
));

$proto7["m_sql"] = "reply_attachment";
$proto7["m_srcTableName"] = "auditee_reply";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "answer",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply"
));

$proto9["m_sql"] = "answer";
$proto9["m_srcTableName"] = "auditee_reply";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply"
));

$proto11["m_sql"] = "fid";
$proto11["m_srcTableName"] = "auditee_reply";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "audit_info";
$proto14["m_srcTableName"] = "auditee_reply";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "inid";
$proto14["m_columns"][] = "fid";
$proto14["m_columns"][] = "finding";
$proto14["m_columns"][] = "refyID";
$proto14["m_columns"][] = "suggest";
$proto14["m_columns"][] = "answer";
$proto14["m_columns"][] = "answer2";
$proto14["m_columns"][] = "answer3";
$proto14["m_columns"][] = "iStatus";
$proto14["m_columns"][] = "attachment";
$proto14["m_columns"][] = "reply_attachment";
$proto14["m_columns"][] = "reply_attachment2";
$proto14["m_columns"][] = "reply_attachment3";
$proto14["m_columns"][] = "noteAmend";
$proto14["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "audit_info";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "auditee_reply";
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
$proto0["m_srcTableName"]="auditee_reply";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_auditee_reply = createSqlQuery_auditee_reply();


	
				
	
$tdataauditee_reply[".sqlquery"] = $queryData_auditee_reply;

include_once(getabspath("include/auditee_reply_events.php"));
$tableEvents["auditee_reply"] = new eventclass_auditee_reply;
$tdataauditee_reply[".hasEvents"] = true;

?>