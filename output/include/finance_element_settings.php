<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafinance_element = array();	
	$tdatafinance_element[".truncateText"] = true;
	$tdatafinance_element[".NumberOfChars"] = 80; 
	$tdatafinance_element[".ShortName"] = "finance_element";
	$tdatafinance_element[".OwnerID"] = "";
	$tdatafinance_element[".OriginalTable"] = "finance_element";

//	field labels
$fieldLabelsfinance_element = array();
$fieldToolTipsfinance_element = array();
$pageTitlesfinance_element = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsfinance_element["Malay"] = array();
	$fieldToolTipsfinance_element["Malay"] = array();
	$pageTitlesfinance_element["Malay"] = array();
	$fieldLabelsfinance_element["Malay"]["eid"] = "Eid";
	$fieldToolTipsfinance_element["Malay"]["eid"] = "";
	$fieldLabelsfinance_element["Malay"]["receiptNo"] = "No Resit";
	$fieldToolTipsfinance_element["Malay"]["receiptNo"] = "";
	$fieldLabelsfinance_element["Malay"]["detail"] = "Info";
	$fieldToolTipsfinance_element["Malay"]["detail"] = "";
	$fieldLabelsfinance_element["Malay"]["amount"] = "RM";
	$fieldToolTipsfinance_element["Malay"]["amount"] = "";
	$fieldLabelsfinance_element["Malay"]["note"] = "Catatatan";
	$fieldToolTipsfinance_element["Malay"]["note"] = "";
	$fieldLabelsfinance_element["Malay"]["attachment"] = "Attachment";
	$fieldToolTipsfinance_element["Malay"]["attachment"] = "";
	$fieldLabelsfinance_element["Malay"]["inid"] = "Inid";
	$fieldToolTipsfinance_element["Malay"]["inid"] = "";
	if (count($fieldToolTipsfinance_element["Malay"]))
		$tdatafinance_element[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfinance_element[""] = array();
	$fieldToolTipsfinance_element[""] = array();
	$pageTitlesfinance_element[""] = array();
	if (count($fieldToolTipsfinance_element[""]))
		$tdatafinance_element[".isUseToolTips"] = true;
}
	
	
	$tdatafinance_element[".NCSearch"] = true;



$tdatafinance_element[".shortTableName"] = "finance_element";
$tdatafinance_element[".nSecOptions"] = 0;
$tdatafinance_element[".recsPerRowList"] = 1;
$tdatafinance_element[".recsPerRowPrint"] = 1;
$tdatafinance_element[".mainTableOwnerID"] = "";
$tdatafinance_element[".moveNext"] = 1;
$tdatafinance_element[".entityType"] = 0;

$tdatafinance_element[".strOriginalTableName"] = "finance_element";




$tdatafinance_element[".showAddInPopup"] = false;

$tdatafinance_element[".showEditInPopup"] = false;

$tdatafinance_element[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafinance_element[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafinance_element[".fieldsForRegister"] = array();

$tdatafinance_element[".listAjax"] = false;

	$tdatafinance_element[".audit"] = false;

	$tdatafinance_element[".locking"] = false;



$tdatafinance_element[".list"] = true;

$tdatafinance_element[".inlineEdit"] = true;
$tdatafinance_element[".inlineAdd"] = true;




$tdatafinance_element[".delete"] = true;

$tdatafinance_element[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafinance_element[".searchSaving"] = false;
//

$tdatafinance_element[".showSearchPanel"] = true;
		$tdatafinance_element[".flexibleSearch"] = true;		

if (isMobile())
	$tdatafinance_element[".isUseAjaxSuggest"] = false;
else 
	$tdatafinance_element[".isUseAjaxSuggest"] = true;

$tdatafinance_element[".rowHighlite"] = true;


																																																																								
$tdatafinance_element[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafinance_element[".isUseTimeForSearch"] = false;





$tdatafinance_element[".allSearchFields"] = array();
$tdatafinance_element[".filterFields"] = array();
$tdatafinance_element[".requiredSearchFields"] = array();

$tdatafinance_element[".allSearchFields"][] = "receiptNo";
	$tdatafinance_element[".allSearchFields"][] = "detail";
	$tdatafinance_element[".allSearchFields"][] = "amount";
	$tdatafinance_element[".allSearchFields"][] = "note";
	$tdatafinance_element[".allSearchFields"][] = "attachment";
	

$tdatafinance_element[".googleLikeFields"] = array();
$tdatafinance_element[".googleLikeFields"][] = "eid";
$tdatafinance_element[".googleLikeFields"][] = "inid";
$tdatafinance_element[".googleLikeFields"][] = "receiptNo";
$tdatafinance_element[".googleLikeFields"][] = "detail";
$tdatafinance_element[".googleLikeFields"][] = "amount";
$tdatafinance_element[".googleLikeFields"][] = "note";
$tdatafinance_element[".googleLikeFields"][] = "attachment";


$tdatafinance_element[".advSearchFields"] = array();
$tdatafinance_element[".advSearchFields"][] = "receiptNo";
$tdatafinance_element[".advSearchFields"][] = "detail";
$tdatafinance_element[".advSearchFields"][] = "amount";
$tdatafinance_element[".advSearchFields"][] = "note";
$tdatafinance_element[".advSearchFields"][] = "attachment";

$tdatafinance_element[".tableType"] = "list";

$tdatafinance_element[".printerPageOrientation"] = 0;
$tdatafinance_element[".nPrinterPageScale"] = 100;

$tdatafinance_element[".nPrinterSplitRecords"] = 40;

$tdatafinance_element[".nPrinterPDFSplitRecords"] = 40;



$tdatafinance_element[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf

$tdatafinance_element[".totalsFields"] = array();
$tdatafinance_element[".totalsFields"][] = array(
	"fName" => "amount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');

$tdatafinance_element[".pageSize"] = 20;

$tdatafinance_element[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafinance_element[".strOrderBy"] = $tstrOrderBy;

$tdatafinance_element[".orderindexes"] = array();

$tdatafinance_element[".sqlHead"] = "SELECT eid,  	inid,  	receiptNo,  	detail,  	amount,  	note,  	attachment";
$tdatafinance_element[".sqlFrom"] = "FROM finance_element";
$tdatafinance_element[".sqlWhereExpr"] = "";
$tdatafinance_element[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafinance_element[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafinance_element[".arrGroupsPerPage"] = $arrGPP;


$tableKeysfinance_element = array();
$tableKeysfinance_element[] = "eid";
$tdatafinance_element[".Keys"] = $tableKeysfinance_element;

$tdatafinance_element[".listFields"] = array();
$tdatafinance_element[".listFields"][] = "receiptNo";
$tdatafinance_element[".listFields"][] = "detail";
$tdatafinance_element[".listFields"][] = "amount";
$tdatafinance_element[".listFields"][] = "note";
$tdatafinance_element[".listFields"][] = "attachment";

$tdatafinance_element[".hideMobileList"] = array();


$tdatafinance_element[".viewFields"] = array();

$tdatafinance_element[".addFields"] = array();

$tdatafinance_element[".masterListFields"] = array();
$tdatafinance_element[".masterListFields"][] = "eid";
$tdatafinance_element[".masterListFields"][] = "inid";
$tdatafinance_element[".masterListFields"][] = "receiptNo";
$tdatafinance_element[".masterListFields"][] = "detail";
$tdatafinance_element[".masterListFields"][] = "amount";
$tdatafinance_element[".masterListFields"][] = "note";
$tdatafinance_element[".masterListFields"][] = "attachment";

$tdatafinance_element[".inlineAddFields"] = array();
$tdatafinance_element[".inlineAddFields"][] = "receiptNo";
$tdatafinance_element[".inlineAddFields"][] = "detail";
$tdatafinance_element[".inlineAddFields"][] = "amount";
$tdatafinance_element[".inlineAddFields"][] = "note";
$tdatafinance_element[".inlineAddFields"][] = "attachment";

$tdatafinance_element[".editFields"] = array();

$tdatafinance_element[".inlineEditFields"] = array();
$tdatafinance_element[".inlineEditFields"][] = "receiptNo";
$tdatafinance_element[".inlineEditFields"][] = "detail";
$tdatafinance_element[".inlineEditFields"][] = "amount";
$tdatafinance_element[".inlineEditFields"][] = "note";
$tdatafinance_element[".inlineEditFields"][] = "attachment";

$tdatafinance_element[".exportFields"] = array();

$tdatafinance_element[".importFields"] = array();
$tdatafinance_element[".importFields"][] = "eid";
$tdatafinance_element[".importFields"][] = "inid";
$tdatafinance_element[".importFields"][] = "receiptNo";
$tdatafinance_element[".importFields"][] = "detail";
$tdatafinance_element[".importFields"][] = "amount";
$tdatafinance_element[".importFields"][] = "note";
$tdatafinance_element[".importFields"][] = "attachment";

$tdatafinance_element[".printFields"] = array();

//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "finance_element";
	$fdata["Label"] = GetFieldLabel("finance_element","eid"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "eid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eid";
	
		
		
				
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 143;
	
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
	
	
	
	

	

	
	$tdatafinance_element["eid"] = $fdata;
//	inid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inid";
	$fdata["GoodName"] = "inid";
	$fdata["ownerTable"] = "finance_element";
	$fdata["Label"] = GetFieldLabel("finance_element","inid"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
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
	
	
	
	

	

	
	$tdatafinance_element["inid"] = $fdata;
//	receiptNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "receiptNo";
	$fdata["GoodName"] = "receiptNo";
	$fdata["ownerTable"] = "finance_element";
	$fdata["Label"] = GetFieldLabel("finance_element","receiptNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "receiptNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "receiptNo";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatafinance_element["receiptNo"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "finance_element";
	$fdata["Label"] = GetFieldLabel("finance_element","detail"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
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
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatafinance_element["detail"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "finance_element";
	$fdata["Label"] = GetFieldLabel("finance_element","amount"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "amount"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "amount";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Currency");
	
		
		
		
		
		
		
		
		
		
		
		
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
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatafinance_element["amount"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "finance_element";
	$fdata["Label"] = GetFieldLabel("finance_element","note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "note";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatafinance_element["note"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "finance_element";
	$fdata["Label"] = GetFieldLabel("finance_element","attachment"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "attachment"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attachment";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
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
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 0;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatafinance_element["attachment"] = $fdata;

	
$tables_data["finance_element"]=&$tdatafinance_element;
$field_labels["finance_element"] = &$fieldLabelsfinance_element;
$fieldToolTips["finance_element"] = &$fieldToolTipsfinance_element;
$page_titles["finance_element"] = &$pageTitlesfinance_element;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["finance_element"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["finance_element"] = array();


	
				$strOriginalDetailsTable="audit_info";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="audit_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "audit_info";
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
					$masterTablesData["finance_element"][0] = $masterParams;	
				$masterTablesData["finance_element"][0]["masterKeys"] = array();
	$masterTablesData["finance_element"][0]["masterKeys"][]="inid";
				$masterTablesData["finance_element"][0]["detailKeys"] = array();
	$masterTablesData["finance_element"][0]["detailKeys"][]="inid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_finance_element()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eid,  	inid,  	receiptNo,  	detail,  	amount,  	note,  	attachment";
$proto0["m_strFrom"] = "FROM finance_element";
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
	"m_strName" => "eid",
	"m_strTable" => "finance_element",
	"m_srcTableName" => "finance_element"
));

$proto5["m_sql"] = "eid";
$proto5["m_srcTableName"] = "finance_element";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "inid",
	"m_strTable" => "finance_element",
	"m_srcTableName" => "finance_element"
));

$proto7["m_sql"] = "inid";
$proto7["m_srcTableName"] = "finance_element";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "receiptNo",
	"m_strTable" => "finance_element",
	"m_srcTableName" => "finance_element"
));

$proto9["m_sql"] = "receiptNo";
$proto9["m_srcTableName"] = "finance_element";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "detail",
	"m_strTable" => "finance_element",
	"m_srcTableName" => "finance_element"
));

$proto11["m_sql"] = "detail";
$proto11["m_srcTableName"] = "finance_element";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "finance_element",
	"m_srcTableName" => "finance_element"
));

$proto13["m_sql"] = "amount";
$proto13["m_srcTableName"] = "finance_element";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "finance_element",
	"m_srcTableName" => "finance_element"
));

$proto15["m_sql"] = "note";
$proto15["m_srcTableName"] = "finance_element";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "finance_element",
	"m_srcTableName" => "finance_element"
));

$proto17["m_sql"] = "attachment";
$proto17["m_srcTableName"] = "finance_element";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "finance_element";
$proto20["m_srcTableName"] = "finance_element";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "eid";
$proto20["m_columns"][] = "inid";
$proto20["m_columns"][] = "receiptNo";
$proto20["m_columns"][] = "detail";
$proto20["m_columns"][] = "amount";
$proto20["m_columns"][] = "note";
$proto20["m_columns"][] = "attachment";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "finance_element";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "finance_element";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="finance_element";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_finance_element = createSqlQuery_finance_element();


	
							
	
$tdatafinance_element[".sqlquery"] = $queryData_finance_element;

$tableEvents["finance_element"] = new eventsBase;
$tdatafinance_element[".hasEvents"] = false;

?>