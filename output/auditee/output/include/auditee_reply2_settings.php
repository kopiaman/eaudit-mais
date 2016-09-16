<?php
require_once(getabspath("classes/cipherer.php"));




$tdataauditee_reply2 = array();	
	$tdataauditee_reply2[".truncateText"] = true;
	$tdataauditee_reply2[".NumberOfChars"] = 80; 
	$tdataauditee_reply2[".ShortName"] = "auditee_reply2";
	$tdataauditee_reply2[".OwnerID"] = "";
	$tdataauditee_reply2[".OriginalTable"] = "audit_info";

//	field labels
$fieldLabelsauditee_reply2 = array();
$fieldToolTipsauditee_reply2 = array();
$pageTitlesauditee_reply2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsauditee_reply2["English"] = array();
	$fieldToolTipsauditee_reply2["English"] = array();
	$pageTitlesauditee_reply2["English"] = array();
	$fieldLabelsauditee_reply2["English"]["inid"] = "Inid";
	$fieldToolTipsauditee_reply2["English"]["inid"] = "";
	$fieldLabelsauditee_reply2["English"]["fid"] = "Fid";
	$fieldToolTipsauditee_reply2["English"]["fid"] = "";
	$fieldLabelsauditee_reply2["English"]["answer"] = "Maklum Balas ";
	$fieldToolTipsauditee_reply2["English"]["answer"] = "";
	$fieldLabelsauditee_reply2["English"]["reply_attachment"] = "Attachment ";
	$fieldToolTipsauditee_reply2["English"]["reply_attachment"] = "";
	$fieldLabelsauditee_reply2["English"]["answer2"] = "Maklum Balas ";
	$fieldToolTipsauditee_reply2["English"]["answer2"] = "";
	$fieldLabelsauditee_reply2["English"]["reply_attachment2"] = "Attachment ";
	$fieldToolTipsauditee_reply2["English"]["reply_attachment2"] = "";
	$fieldLabelsauditee_reply2["English"]["noteAmend"] = "Ulasan";
	$fieldToolTipsauditee_reply2["English"]["noteAmend"] = "";
	if (count($fieldToolTipsauditee_reply2["English"]))
		$tdataauditee_reply2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsauditee_reply2[""] = array();
	$fieldToolTipsauditee_reply2[""] = array();
	$pageTitlesauditee_reply2[""] = array();
	$fieldLabelsauditee_reply2[""]["inid"] = "Inid";
	$fieldToolTipsauditee_reply2[""]["inid"] = "";
	$fieldLabelsauditee_reply2[""]["answer2"] = "Answer2";
	$fieldToolTipsauditee_reply2[""]["answer2"] = "";
	$fieldLabelsauditee_reply2[""]["reply_attachment2"] = "Reply Attachment2";
	$fieldToolTipsauditee_reply2[""]["reply_attachment2"] = "";
	$fieldLabelsauditee_reply2[""]["noteAmend"] = "Note Amend";
	$fieldToolTipsauditee_reply2[""]["noteAmend"] = "";
	if (count($fieldToolTipsauditee_reply2[""]))
		$tdataauditee_reply2[".isUseToolTips"] = true;
}
	
	
	$tdataauditee_reply2[".NCSearch"] = true;



$tdataauditee_reply2[".shortTableName"] = "auditee_reply2";
$tdataauditee_reply2[".nSecOptions"] = 0;
$tdataauditee_reply2[".recsPerRowList"] = 1;
$tdataauditee_reply2[".recsPerRowPrint"] = 1;
$tdataauditee_reply2[".mainTableOwnerID"] = "";
$tdataauditee_reply2[".moveNext"] = 1;
$tdataauditee_reply2[".entityType"] = 1;

$tdataauditee_reply2[".strOriginalTableName"] = "audit_info";




$tdataauditee_reply2[".showAddInPopup"] = false;

$tdataauditee_reply2[".showEditInPopup"] = false;

$tdataauditee_reply2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataauditee_reply2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataauditee_reply2[".fieldsForRegister"] = array();

$tdataauditee_reply2[".listAjax"] = false;

	$tdataauditee_reply2[".audit"] = false;

	$tdataauditee_reply2[".locking"] = false;

$tdataauditee_reply2[".edit"] = true;
$tdataauditee_reply2[".afterEditAction"] = 1;
$tdataauditee_reply2[".closePopupAfterEdit"] = 1;
$tdataauditee_reply2[".afterEditActionDetTable"] = "Detail tables not found!";


$tdataauditee_reply2[".list"] = true;






$tdataauditee_reply2[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataauditee_reply2[".searchSaving"] = false;
//

if (isMobile()){
}
else 
	$tdataauditee_reply2[".showSearchPanel"] = false;

if (isMobile())
	$tdataauditee_reply2[".isUseAjaxSuggest"] = false;
else 
	$tdataauditee_reply2[".isUseAjaxSuggest"] = true;

$tdataauditee_reply2[".rowHighlite"] = true;



$tdataauditee_reply2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataauditee_reply2[".isUseTimeForSearch"] = false;





$tdataauditee_reply2[".allSearchFields"] = array();
$tdataauditee_reply2[".filterFields"] = array();
$tdataauditee_reply2[".requiredSearchFields"] = array();



$tdataauditee_reply2[".googleLikeFields"] = array();
$tdataauditee_reply2[".googleLikeFields"][] = "inid";
$tdataauditee_reply2[".googleLikeFields"][] = "reply_attachment";
$tdataauditee_reply2[".googleLikeFields"][] = "answer";
$tdataauditee_reply2[".googleLikeFields"][] = "fid";
$tdataauditee_reply2[".googleLikeFields"][] = "answer2";
$tdataauditee_reply2[".googleLikeFields"][] = "reply_attachment2";
$tdataauditee_reply2[".googleLikeFields"][] = "noteAmend";



$tdataauditee_reply2[".tableType"] = "list";

$tdataauditee_reply2[".printerPageOrientation"] = 0;
$tdataauditee_reply2[".nPrinterPageScale"] = 100;

$tdataauditee_reply2[".nPrinterSplitRecords"] = 40;

$tdataauditee_reply2[".nPrinterPDFSplitRecords"] = 40;



$tdataauditee_reply2[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataauditee_reply2[".pageSize"] = 20;

$tdataauditee_reply2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataauditee_reply2[".strOrderBy"] = $tstrOrderBy;

$tdataauditee_reply2[".orderindexes"] = array();

$tdataauditee_reply2[".sqlHead"] = "SELECT inid,  reply_attachment,  answer,  fid,  answer2,  reply_attachment2,  noteAmend";
$tdataauditee_reply2[".sqlFrom"] = "FROM audit_info";
$tdataauditee_reply2[".sqlWhereExpr"] = "";
$tdataauditee_reply2[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataauditee_reply2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauditee_reply2[".arrGroupsPerPage"] = $arrGPP;

$tdataauditee_reply2[".highlightSearchResults"] = true;

$tableKeysauditee_reply2 = array();
$tableKeysauditee_reply2[] = "inid";
$tdataauditee_reply2[".Keys"] = $tableKeysauditee_reply2;

$tdataauditee_reply2[".listFields"] = array();
$tdataauditee_reply2[".listFields"][] = "answer";
$tdataauditee_reply2[".listFields"][] = "reply_attachment";
$tdataauditee_reply2[".listFields"][] = "noteAmend";
$tdataauditee_reply2[".listFields"][] = "answer2";
$tdataauditee_reply2[".listFields"][] = "reply_attachment2";

$tdataauditee_reply2[".hideMobileList"] = array();


$tdataauditee_reply2[".viewFields"] = array();

$tdataauditee_reply2[".addFields"] = array();

$tdataauditee_reply2[".masterListFields"] = array();
$tdataauditee_reply2[".masterListFields"][] = "noteAmend";
$tdataauditee_reply2[".masterListFields"][] = "fid";
$tdataauditee_reply2[".masterListFields"][] = "inid";
$tdataauditee_reply2[".masterListFields"][] = "answer";
$tdataauditee_reply2[".masterListFields"][] = "reply_attachment";
$tdataauditee_reply2[".masterListFields"][] = "answer2";
$tdataauditee_reply2[".masterListFields"][] = "reply_attachment2";

$tdataauditee_reply2[".inlineAddFields"] = array();

$tdataauditee_reply2[".editFields"] = array();
$tdataauditee_reply2[".editFields"][] = "noteAmend";
$tdataauditee_reply2[".editFields"][] = "answer";
$tdataauditee_reply2[".editFields"][] = "reply_attachment";
$tdataauditee_reply2[".editFields"][] = "answer2";
$tdataauditee_reply2[".editFields"][] = "reply_attachment2";

$tdataauditee_reply2[".inlineEditFields"] = array();

$tdataauditee_reply2[".exportFields"] = array();

$tdataauditee_reply2[".importFields"] = array();

$tdataauditee_reply2[".printFields"] = array();

//	inid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inid";
	$fdata["GoodName"] = "inid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply2","inid"); 
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
	
	
	
	

	

	
	$tdataauditee_reply2["inid"] = $fdata;
//	reply_attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reply_attachment";
	$fdata["GoodName"] = "reply_attachment";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply2","reply_attachment"); 
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
	
	
	
	

	

	
	$tdataauditee_reply2["reply_attachment"] = $fdata;
//	answer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "answer";
	$fdata["GoodName"] = "answer";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply2","answer"); 
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
	
	
	
	

	

	
	$tdataauditee_reply2["answer"] = $fdata;
//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply2","fid"); 
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
	
	
	
	

	

	
	$tdataauditee_reply2["fid"] = $fdata;
//	answer2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "answer2";
	$fdata["GoodName"] = "answer2";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply2","answer2"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "answer2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "answer2";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 153;
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
	
	
	
	

	

	
	$tdataauditee_reply2["answer2"] = $fdata;
//	reply_attachment2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reply_attachment2";
	$fdata["GoodName"] = "reply_attachment2";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply2","reply_attachment2"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "reply_attachment2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reply_attachment2";
	
		
		
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
	
	
	
	

	

	
	$tdataauditee_reply2["reply_attachment2"] = $fdata;
//	noteAmend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "noteAmend";
	$fdata["GoodName"] = "noteAmend";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply2","noteAmend"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "noteAmend"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noteAmend";
	
		
		
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
	
	
	
	

	

	
	$tdataauditee_reply2["noteAmend"] = $fdata;

	
$tables_data["auditee_reply2"]=&$tdataauditee_reply2;
$field_labels["auditee_reply2"] = &$fieldLabelsauditee_reply2;
$fieldToolTips["auditee_reply2"] = &$fieldToolTipsauditee_reply2;
$page_titles["auditee_reply2"] = &$pageTitlesauditee_reply2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["auditee_reply2"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["auditee_reply2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_auditee_reply2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inid,  reply_attachment,  answer,  fid,  answer2,  reply_attachment2,  noteAmend";
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
	"m_srcTableName" => "auditee_reply2"
));

$proto5["m_sql"] = "inid";
$proto5["m_srcTableName"] = "auditee_reply2";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply2"
));

$proto7["m_sql"] = "reply_attachment";
$proto7["m_srcTableName"] = "auditee_reply2";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "answer",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply2"
));

$proto9["m_sql"] = "answer";
$proto9["m_srcTableName"] = "auditee_reply2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply2"
));

$proto11["m_sql"] = "fid";
$proto11["m_srcTableName"] = "auditee_reply2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "answer2",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply2"
));

$proto13["m_sql"] = "answer2";
$proto13["m_srcTableName"] = "auditee_reply2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment2",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply2"
));

$proto15["m_sql"] = "reply_attachment2";
$proto15["m_srcTableName"] = "auditee_reply2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "noteAmend",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply2"
));

$proto17["m_sql"] = "noteAmend";
$proto17["m_srcTableName"] = "auditee_reply2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "audit_info";
$proto20["m_srcTableName"] = "auditee_reply2";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "inid";
$proto20["m_columns"][] = "fid";
$proto20["m_columns"][] = "finding";
$proto20["m_columns"][] = "refyID";
$proto20["m_columns"][] = "suggest";
$proto20["m_columns"][] = "answer";
$proto20["m_columns"][] = "answer2";
$proto20["m_columns"][] = "answer3";
$proto20["m_columns"][] = "iStatus";
$proto20["m_columns"][] = "attachment";
$proto20["m_columns"][] = "reply_attachment";
$proto20["m_columns"][] = "reply_attachment2";
$proto20["m_columns"][] = "reply_attachment3";
$proto20["m_columns"][] = "noteAmend";
$proto20["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "audit_info";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "auditee_reply2";
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
$proto0["m_srcTableName"]="auditee_reply2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_auditee_reply2 = createSqlQuery_auditee_reply2();


	
							
	
$tdataauditee_reply2[".sqlquery"] = $queryData_auditee_reply2;

include_once(getabspath("include/auditee_reply2_events.php"));
$tableEvents["auditee_reply2"] = new eventclass_auditee_reply2;
$tdataauditee_reply2[".hasEvents"] = true;

?>