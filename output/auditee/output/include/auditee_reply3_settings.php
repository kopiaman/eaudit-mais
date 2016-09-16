<?php
require_once(getabspath("classes/cipherer.php"));




$tdataauditee_reply3 = array();	
	$tdataauditee_reply3[".truncateText"] = true;
	$tdataauditee_reply3[".NumberOfChars"] = 80; 
	$tdataauditee_reply3[".ShortName"] = "auditee_reply3";
	$tdataauditee_reply3[".OwnerID"] = "";
	$tdataauditee_reply3[".OriginalTable"] = "audit_info";

//	field labels
$fieldLabelsauditee_reply3 = array();
$fieldToolTipsauditee_reply3 = array();
$pageTitlesauditee_reply3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsauditee_reply3["English"] = array();
	$fieldToolTipsauditee_reply3["English"] = array();
	$pageTitlesauditee_reply3["English"] = array();
	$fieldLabelsauditee_reply3["English"]["inid"] = "Inid";
	$fieldToolTipsauditee_reply3["English"]["inid"] = "";
	$fieldLabelsauditee_reply3["English"]["fid"] = "Fid";
	$fieldToolTipsauditee_reply3["English"]["fid"] = "";
	$fieldLabelsauditee_reply3["English"]["answer"] = "Maklum Balas 1";
	$fieldToolTipsauditee_reply3["English"]["answer"] = "";
	$fieldLabelsauditee_reply3["English"]["reply_attachment"] = "Attachment 1";
	$fieldToolTipsauditee_reply3["English"]["reply_attachment"] = "";
	$fieldLabelsauditee_reply3["English"]["answer2"] = "Maklum Balas 2";
	$fieldToolTipsauditee_reply3["English"]["answer2"] = "";
	$fieldLabelsauditee_reply3["English"]["reply_attachment2"] = "Attachment 2";
	$fieldToolTipsauditee_reply3["English"]["reply_attachment2"] = "";
	$fieldLabelsauditee_reply3["English"]["reply_attachment3"] = "Attachment 3";
	$fieldToolTipsauditee_reply3["English"]["reply_attachment3"] = "";
	$fieldLabelsauditee_reply3["English"]["answer3"] = "Maklum Balas 3";
	$fieldToolTipsauditee_reply3["English"]["answer3"] = "";
	if (count($fieldToolTipsauditee_reply3["English"]))
		$tdataauditee_reply3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsauditee_reply3[""] = array();
	$fieldToolTipsauditee_reply3[""] = array();
	$pageTitlesauditee_reply3[""] = array();
	$fieldLabelsauditee_reply3[""]["inid"] = "Inid";
	$fieldToolTipsauditee_reply3[""]["inid"] = "";
	$fieldLabelsauditee_reply3[""]["answer2"] = "Answer2";
	$fieldToolTipsauditee_reply3[""]["answer2"] = "";
	$fieldLabelsauditee_reply3[""]["reply_attachment2"] = "Reply Attachment2";
	$fieldToolTipsauditee_reply3[""]["reply_attachment2"] = "";
	$fieldLabelsauditee_reply3[""]["reply_attachment3"] = "Reply Attachment3";
	$fieldToolTipsauditee_reply3[""]["reply_attachment3"] = "";
	$fieldLabelsauditee_reply3[""]["answer3"] = "Answer3";
	$fieldToolTipsauditee_reply3[""]["answer3"] = "";
	if (count($fieldToolTipsauditee_reply3[""]))
		$tdataauditee_reply3[".isUseToolTips"] = true;
}
	
	
	$tdataauditee_reply3[".NCSearch"] = true;



$tdataauditee_reply3[".shortTableName"] = "auditee_reply3";
$tdataauditee_reply3[".nSecOptions"] = 0;
$tdataauditee_reply3[".recsPerRowList"] = 1;
$tdataauditee_reply3[".recsPerRowPrint"] = 1;
$tdataauditee_reply3[".mainTableOwnerID"] = "";
$tdataauditee_reply3[".moveNext"] = 1;
$tdataauditee_reply3[".entityType"] = 1;

$tdataauditee_reply3[".strOriginalTableName"] = "audit_info";




$tdataauditee_reply3[".showAddInPopup"] = false;

$tdataauditee_reply3[".showEditInPopup"] = false;

$tdataauditee_reply3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataauditee_reply3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataauditee_reply3[".fieldsForRegister"] = array();

$tdataauditee_reply3[".listAjax"] = false;

	$tdataauditee_reply3[".audit"] = false;

	$tdataauditee_reply3[".locking"] = false;

$tdataauditee_reply3[".edit"] = true;
$tdataauditee_reply3[".afterEditAction"] = 1;
$tdataauditee_reply3[".closePopupAfterEdit"] = 1;
$tdataauditee_reply3[".afterEditActionDetTable"] = "Detail tables not found!";


$tdataauditee_reply3[".list"] = true;






$tdataauditee_reply3[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataauditee_reply3[".searchSaving"] = false;
//

if (isMobile()){
}
else 
	$tdataauditee_reply3[".showSearchPanel"] = false;

if (isMobile())
	$tdataauditee_reply3[".isUseAjaxSuggest"] = false;
else 
	$tdataauditee_reply3[".isUseAjaxSuggest"] = true;

$tdataauditee_reply3[".rowHighlite"] = true;



$tdataauditee_reply3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataauditee_reply3[".isUseTimeForSearch"] = false;





$tdataauditee_reply3[".allSearchFields"] = array();
$tdataauditee_reply3[".filterFields"] = array();
$tdataauditee_reply3[".requiredSearchFields"] = array();



$tdataauditee_reply3[".googleLikeFields"] = array();
$tdataauditee_reply3[".googleLikeFields"][] = "inid";
$tdataauditee_reply3[".googleLikeFields"][] = "reply_attachment";
$tdataauditee_reply3[".googleLikeFields"][] = "answer";
$tdataauditee_reply3[".googleLikeFields"][] = "fid";
$tdataauditee_reply3[".googleLikeFields"][] = "answer2";
$tdataauditee_reply3[".googleLikeFields"][] = "reply_attachment2";
$tdataauditee_reply3[".googleLikeFields"][] = "reply_attachment3";
$tdataauditee_reply3[".googleLikeFields"][] = "answer3";



$tdataauditee_reply3[".tableType"] = "list";

$tdataauditee_reply3[".printerPageOrientation"] = 0;
$tdataauditee_reply3[".nPrinterPageScale"] = 100;

$tdataauditee_reply3[".nPrinterSplitRecords"] = 40;

$tdataauditee_reply3[".nPrinterPDFSplitRecords"] = 40;



$tdataauditee_reply3[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataauditee_reply3[".pageSize"] = 20;

$tdataauditee_reply3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataauditee_reply3[".strOrderBy"] = $tstrOrderBy;

$tdataauditee_reply3[".orderindexes"] = array();

$tdataauditee_reply3[".sqlHead"] = "SELECT inid,  reply_attachment,  answer,  fid,  answer2,  reply_attachment2,  reply_attachment3,  answer3";
$tdataauditee_reply3[".sqlFrom"] = "FROM audit_info";
$tdataauditee_reply3[".sqlWhereExpr"] = "";
$tdataauditee_reply3[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataauditee_reply3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauditee_reply3[".arrGroupsPerPage"] = $arrGPP;

$tdataauditee_reply3[".highlightSearchResults"] = true;

$tableKeysauditee_reply3 = array();
$tableKeysauditee_reply3[] = "inid";
$tdataauditee_reply3[".Keys"] = $tableKeysauditee_reply3;

$tdataauditee_reply3[".listFields"] = array();
$tdataauditee_reply3[".listFields"][] = "answer";
$tdataauditee_reply3[".listFields"][] = "reply_attachment";
$tdataauditee_reply3[".listFields"][] = "answer2";
$tdataauditee_reply3[".listFields"][] = "reply_attachment2";
$tdataauditee_reply3[".listFields"][] = "answer3";
$tdataauditee_reply3[".listFields"][] = "reply_attachment3";

$tdataauditee_reply3[".hideMobileList"] = array();


$tdataauditee_reply3[".viewFields"] = array();

$tdataauditee_reply3[".addFields"] = array();

$tdataauditee_reply3[".masterListFields"] = array();
$tdataauditee_reply3[".masterListFields"][] = "fid";
$tdataauditee_reply3[".masterListFields"][] = "inid";
$tdataauditee_reply3[".masterListFields"][] = "answer";
$tdataauditee_reply3[".masterListFields"][] = "reply_attachment";
$tdataauditee_reply3[".masterListFields"][] = "answer2";
$tdataauditee_reply3[".masterListFields"][] = "reply_attachment2";
$tdataauditee_reply3[".masterListFields"][] = "answer3";
$tdataauditee_reply3[".masterListFields"][] = "reply_attachment3";

$tdataauditee_reply3[".inlineAddFields"] = array();

$tdataauditee_reply3[".editFields"] = array();
$tdataauditee_reply3[".editFields"][] = "answer";
$tdataauditee_reply3[".editFields"][] = "reply_attachment";
$tdataauditee_reply3[".editFields"][] = "answer2";
$tdataauditee_reply3[".editFields"][] = "reply_attachment2";
$tdataauditee_reply3[".editFields"][] = "answer3";
$tdataauditee_reply3[".editFields"][] = "reply_attachment3";

$tdataauditee_reply3[".inlineEditFields"] = array();

$tdataauditee_reply3[".exportFields"] = array();

$tdataauditee_reply3[".importFields"] = array();

$tdataauditee_reply3[".printFields"] = array();

//	inid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inid";
	$fdata["GoodName"] = "inid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","inid"); 
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
	
	
	
	

	

	
	$tdataauditee_reply3["inid"] = $fdata;
//	reply_attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reply_attachment";
	$fdata["GoodName"] = "reply_attachment";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","reply_attachment"); 
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
	
	
	
	

	

	
	$tdataauditee_reply3["reply_attachment"] = $fdata;
//	answer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "answer";
	$fdata["GoodName"] = "answer";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","answer"); 
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
	
	
	
	

	

	
	$tdataauditee_reply3["answer"] = $fdata;
//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","fid"); 
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
	
	
	
	

	

	
	$tdataauditee_reply3["fid"] = $fdata;
//	answer2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "answer2";
	$fdata["GoodName"] = "answer2";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","answer2"); 
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
	
	
	
	

	

	
	$tdataauditee_reply3["answer2"] = $fdata;
//	reply_attachment2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reply_attachment2";
	$fdata["GoodName"] = "reply_attachment2";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","reply_attachment2"); 
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
	
	
	
	

	

	
	$tdataauditee_reply3["reply_attachment2"] = $fdata;
//	reply_attachment3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reply_attachment3";
	$fdata["GoodName"] = "reply_attachment3";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","reply_attachment3"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "reply_attachment3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reply_attachment3";
	
		
		
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
	
	
	
	

	

	
	$tdataauditee_reply3["reply_attachment3"] = $fdata;
//	answer3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "answer3";
	$fdata["GoodName"] = "answer3";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("auditee_reply3","answer3"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "answer3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "answer3";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 163;
			$edata["nCols"] = 592;
	
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataauditee_reply3["answer3"] = $fdata;

	
$tables_data["auditee_reply3"]=&$tdataauditee_reply3;
$field_labels["auditee_reply3"] = &$fieldLabelsauditee_reply3;
$fieldToolTips["auditee_reply3"] = &$fieldToolTipsauditee_reply3;
$page_titles["auditee_reply3"] = &$pageTitlesauditee_reply3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["auditee_reply3"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["auditee_reply3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_auditee_reply3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inid,  reply_attachment,  answer,  fid,  answer2,  reply_attachment2,  reply_attachment3,  answer3";
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
	"m_srcTableName" => "auditee_reply3"
));

$proto5["m_sql"] = "inid";
$proto5["m_srcTableName"] = "auditee_reply3";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply3"
));

$proto7["m_sql"] = "reply_attachment";
$proto7["m_srcTableName"] = "auditee_reply3";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "answer",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply3"
));

$proto9["m_sql"] = "answer";
$proto9["m_srcTableName"] = "auditee_reply3";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply3"
));

$proto11["m_sql"] = "fid";
$proto11["m_srcTableName"] = "auditee_reply3";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "answer2",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply3"
));

$proto13["m_sql"] = "answer2";
$proto13["m_srcTableName"] = "auditee_reply3";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment2",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply3"
));

$proto15["m_sql"] = "reply_attachment2";
$proto15["m_srcTableName"] = "auditee_reply3";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment3",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply3"
));

$proto17["m_sql"] = "reply_attachment3";
$proto17["m_srcTableName"] = "auditee_reply3";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "answer3",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "auditee_reply3"
));

$proto19["m_sql"] = "answer3";
$proto19["m_srcTableName"] = "auditee_reply3";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "audit_info";
$proto22["m_srcTableName"] = "auditee_reply3";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "inid";
$proto22["m_columns"][] = "fid";
$proto22["m_columns"][] = "finding";
$proto22["m_columns"][] = "refyID";
$proto22["m_columns"][] = "suggest";
$proto22["m_columns"][] = "answer";
$proto22["m_columns"][] = "answer2";
$proto22["m_columns"][] = "answer3";
$proto22["m_columns"][] = "iStatus";
$proto22["m_columns"][] = "attachment";
$proto22["m_columns"][] = "reply_attachment";
$proto22["m_columns"][] = "reply_attachment2";
$proto22["m_columns"][] = "reply_attachment3";
$proto22["m_columns"][] = "noteAmend";
$proto22["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "audit_info";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "auditee_reply3";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="auditee_reply3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_auditee_reply3 = createSqlQuery_auditee_reply3();


	
								
	
$tdataauditee_reply3[".sqlquery"] = $queryData_auditee_reply3;

include_once(getabspath("include/auditee_reply3_events.php"));
$tableEvents["auditee_reply3"] = new eventclass_auditee_reply3;
$tdataauditee_reply3[".hasEvents"] = true;

?>