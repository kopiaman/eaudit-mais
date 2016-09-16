<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaudit_info = array();
	$tdataaudit_info[".truncateText"] = true;
	$tdataaudit_info[".NumberOfChars"] = 350;
	$tdataaudit_info[".ShortName"] = "audit_info";
	$tdataaudit_info[".OwnerID"] = "";
	$tdataaudit_info[".OriginalTable"] = "audit_info";

//	field labels
$fieldLabelsaudit_info = array();
$fieldToolTipsaudit_info = array();
$pageTitlesaudit_info = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsaudit_info["Malay"] = array();
	$fieldToolTipsaudit_info["Malay"] = array();
	$pageTitlesaudit_info["Malay"] = array();
	$fieldLabelsaudit_info["Malay"]["inid"] = "Inid";
	$fieldToolTipsaudit_info["Malay"]["inid"] = "";
	$fieldLabelsaudit_info["Malay"]["fid"] = "Fid";
	$fieldToolTipsaudit_info["Malay"]["fid"] = "";
	$fieldLabelsaudit_info["Malay"]["finding"] = "Penemuan";
	$fieldToolTipsaudit_info["Malay"]["finding"] = "";
	$fieldLabelsaudit_info["Malay"]["suggest"] = "Syor";
	$fieldToolTipsaudit_info["Malay"]["suggest"] = "";
	$fieldLabelsaudit_info["Malay"]["answer"] = "Maklum Balas ";
	$fieldToolTipsaudit_info["Malay"]["answer"] = "";
	$fieldLabelsaudit_info["Malay"]["iStatus"] = "Status";
	$fieldToolTipsaudit_info["Malay"]["iStatus"] = "";
	$fieldLabelsaudit_info["Malay"]["attachment"] = "Attachment";
	$fieldToolTipsaudit_info["Malay"]["attachment"] = "";
	$fieldLabelsaudit_info["Malay"]["refyID"] = "Rujukan";
	$fieldToolTipsaudit_info["Malay"]["refyID"] = "";
	$fieldLabelsaudit_info["Malay"]["reply_attachment"] = "Fail ";
	$fieldToolTipsaudit_info["Malay"]["reply_attachment"] = "";
	$fieldLabelsaudit_info["Malay"]["answer2"] = "Maklum Balas 2";
	$fieldToolTipsaudit_info["Malay"]["answer2"] = "";
	$fieldLabelsaudit_info["Malay"]["reply_attachment2"] = "Fail 2";
	$fieldToolTipsaudit_info["Malay"]["reply_attachment2"] = "";
	$fieldLabelsaudit_info["Malay"]["answer3"] = "Maklum Balas 3";
	$fieldToolTipsaudit_info["Malay"]["answer3"] = "";
	$fieldLabelsaudit_info["Malay"]["reply_attachment3"] = "Fail 3";
	$fieldToolTipsaudit_info["Malay"]["reply_attachment3"] = "";
	$fieldLabelsaudit_info["Malay"]["noteAmend"] = "Susulan 1";
	$fieldToolTipsaudit_info["Malay"]["noteAmend"] = "";
	$fieldLabelsaudit_info["Malay"]["noteAmend2"] = "Susulan 2";
	$fieldToolTipsaudit_info["Malay"]["noteAmend2"] = "";
	if (count($fieldToolTipsaudit_info["Malay"]))
		$tdataaudit_info[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaudit_info[""] = array();
	$fieldToolTipsaudit_info[""] = array();
	$pageTitlesaudit_info[""] = array();
	$fieldLabelsaudit_info[""]["inid"] = "Inid";
	$fieldToolTipsaudit_info[""]["inid"] = "";
	if (count($fieldToolTipsaudit_info[""]))
		$tdataaudit_info[".isUseToolTips"] = true;
}


	$tdataaudit_info[".NCSearch"] = true;



$tdataaudit_info[".shortTableName"] = "audit_info";
$tdataaudit_info[".nSecOptions"] = 0;
$tdataaudit_info[".recsPerRowList"] = 1;
$tdataaudit_info[".recsPerRowPrint"] = 1;
$tdataaudit_info[".mainTableOwnerID"] = "";
$tdataaudit_info[".moveNext"] = 1;
$tdataaudit_info[".entityType"] = 0;

$tdataaudit_info[".strOriginalTableName"] = "audit_info";




$tdataaudit_info[".showAddInPopup"] = true;

$tdataaudit_info[".showEditInPopup"] = true;

$tdataaudit_info[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "under_center8";
			;
$popupPagesLayoutNames["view"] = "under_center8";
$tdataaudit_info[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaudit_info[".fieldsForRegister"] = array();

$tdataaudit_info[".listAjax"] = false;

	$tdataaudit_info[".audit"] = true;

	$tdataaudit_info[".locking"] = false;

$tdataaudit_info[".edit"] = true;
$tdataaudit_info[".afterEditAction"] = 1;
$tdataaudit_info[".closePopupAfterEdit"] = 1;
$tdataaudit_info[".afterEditActionDetTable"] = "";

$tdataaudit_info[".add"] = true;
$tdataaudit_info[".afterAddAction"] = 1;
$tdataaudit_info[".closePopupAfterAdd"] = 1;
$tdataaudit_info[".afterAddActionDetTable"] = "";

$tdataaudit_info[".list"] = true;





$tdataaudit_info[".delete"] = true;

$tdataaudit_info[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataaudit_info[".searchSaving"] = false;
//

$tdataaudit_info[".showSearchPanel"] = true;
		$tdataaudit_info[".flexibleSearch"] = true;

if (isMobile())
	$tdataaudit_info[".isUseAjaxSuggest"] = false;
else
	$tdataaudit_info[".isUseAjaxSuggest"] = true;

$tdataaudit_info[".rowHighlite"] = true;


																																																																																																																																												
$tdataaudit_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaudit_info[".isUseTimeForSearch"] = false;




$tdataaudit_info[".detailsLinksOnList"] = "1";

$tdataaudit_info[".allSearchFields"] = array();
$tdataaudit_info[".filterFields"] = array();
$tdataaudit_info[".requiredSearchFields"] = array();



$tdataaudit_info[".googleLikeFields"] = array();
$tdataaudit_info[".googleLikeFields"][] = "inid";
$tdataaudit_info[".googleLikeFields"][] = "fid";
$tdataaudit_info[".googleLikeFields"][] = "finding";
$tdataaudit_info[".googleLikeFields"][] = "refyID";
$tdataaudit_info[".googleLikeFields"][] = "suggest";
$tdataaudit_info[".googleLikeFields"][] = "answer";
$tdataaudit_info[".googleLikeFields"][] = "answer2";
$tdataaudit_info[".googleLikeFields"][] = "answer3";
$tdataaudit_info[".googleLikeFields"][] = "iStatus";
$tdataaudit_info[".googleLikeFields"][] = "attachment";
$tdataaudit_info[".googleLikeFields"][] = "reply_attachment";
$tdataaudit_info[".googleLikeFields"][] = "reply_attachment2";
$tdataaudit_info[".googleLikeFields"][] = "reply_attachment3";
$tdataaudit_info[".googleLikeFields"][] = "noteAmend";
$tdataaudit_info[".googleLikeFields"][] = "noteAmend2";



$tdataaudit_info[".tableType"] = "list";

$tdataaudit_info[".printerPageOrientation"] = 0;
$tdataaudit_info[".nPrinterPageScale"] = 100;

$tdataaudit_info[".nPrinterSplitRecords"] = 40;

$tdataaudit_info[".nPrinterPDFSplitRecords"] = 40;



$tdataaudit_info[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataaudit_info[".pageSize"] = 20;

$tdataaudit_info[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaudit_info[".strOrderBy"] = $tstrOrderBy;

$tdataaudit_info[".orderindexes"] = array();

$tdataaudit_info[".sqlHead"] = "SELECT inid,  	fid,  	finding,  	refyID,  	suggest,  	answer,  	answer2,  	answer3,  	iStatus,  	attachment,  	reply_attachment,  	reply_attachment2,  	reply_attachment3,  	noteAmend,  	noteAmend2";
$tdataaudit_info[".sqlFrom"] = "FROM audit_info";
$tdataaudit_info[".sqlWhereExpr"] = "";
$tdataaudit_info[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaudit_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaudit_info[".arrGroupsPerPage"] = $arrGPP;


$tableKeysaudit_info = array();
$tableKeysaudit_info[] = "inid";
$tdataaudit_info[".Keys"] = $tableKeysaudit_info;

$tdataaudit_info[".listFields"] = array();
$tdataaudit_info[".listFields"][] = "finding";
$tdataaudit_info[".listFields"][] = "refyID";
$tdataaudit_info[".listFields"][] = "suggest";
$tdataaudit_info[".listFields"][] = "attachment";
$tdataaudit_info[".listFields"][] = "answer";
$tdataaudit_info[".listFields"][] = "reply_attachment";
$tdataaudit_info[".listFields"][] = "noteAmend";
$tdataaudit_info[".listFields"][] = "answer2";
$tdataaudit_info[".listFields"][] = "reply_attachment2";
$tdataaudit_info[".listFields"][] = "noteAmend2";
$tdataaudit_info[".listFields"][] = "answer3";
$tdataaudit_info[".listFields"][] = "reply_attachment3";

$tdataaudit_info[".hideMobileList"] = array();


$tdataaudit_info[".viewFields"] = array();

$tdataaudit_info[".addFields"] = array();
$tdataaudit_info[".addFields"][] = "finding";
$tdataaudit_info[".addFields"][] = "refyID";
$tdataaudit_info[".addFields"][] = "suggest";
$tdataaudit_info[".addFields"][] = "attachment";
$tdataaudit_info[".addFields"][] = "noteAmend";
$tdataaudit_info[".addFields"][] = "noteAmend2";

$tdataaudit_info[".masterListFields"] = array();
$tdataaudit_info[".masterListFields"][] = "inid";
$tdataaudit_info[".masterListFields"][] = "fid";
$tdataaudit_info[".masterListFields"][] = "noteAmend";
$tdataaudit_info[".masterListFields"][] = "noteAmend2";
$tdataaudit_info[".masterListFields"][] = "finding";
$tdataaudit_info[".masterListFields"][] = "iStatus";
$tdataaudit_info[".masterListFields"][] = "refyID";
$tdataaudit_info[".masterListFields"][] = "suggest";
$tdataaudit_info[".masterListFields"][] = "attachment";
$tdataaudit_info[".masterListFields"][] = "answer";
$tdataaudit_info[".masterListFields"][] = "reply_attachment";
$tdataaudit_info[".masterListFields"][] = "answer2";
$tdataaudit_info[".masterListFields"][] = "reply_attachment2";
$tdataaudit_info[".masterListFields"][] = "answer3";
$tdataaudit_info[".masterListFields"][] = "reply_attachment3";

$tdataaudit_info[".inlineAddFields"] = array();

$tdataaudit_info[".editFields"] = array();
$tdataaudit_info[".editFields"][] = "finding";
$tdataaudit_info[".editFields"][] = "refyID";
$tdataaudit_info[".editFields"][] = "suggest";
$tdataaudit_info[".editFields"][] = "attachment";
$tdataaudit_info[".editFields"][] = "noteAmend";
$tdataaudit_info[".editFields"][] = "noteAmend2";

$tdataaudit_info[".inlineEditFields"] = array();

$tdataaudit_info[".exportFields"] = array();

$tdataaudit_info[".importFields"] = array();

$tdataaudit_info[".printFields"] = array();

//	inid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inid";
	$fdata["GoodName"] = "inid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","inid");
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








	$tdataaudit_info["inid"] = $fdata;
//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","fid");
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








	$tdataaudit_info["fid"] = $fdata;
//	finding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "finding";
	$fdata["GoodName"] = "finding";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","finding");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "finding";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finding";

	
	
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

	
	



		$edata["IsRequired"] = true;

		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 550;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["finding"] = $fdata;
//	refyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "refyID";
	$fdata["GoodName"] = "refyID";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","refyID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "refyID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refyID";

	
	
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
	$edata["LookupTable"] = "reference_detail";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "refyID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "detail";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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








	$tdataaudit_info["refyID"] = $fdata;
//	suggest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "suggest";
	$fdata["GoodName"] = "suggest";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","suggest");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "suggest";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "suggest";

	
	
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

	
	



		$edata["IsRequired"] = true;

		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 550;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["suggest"] = $fdata;
//	answer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "answer";
	$fdata["GoodName"] = "answer";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","answer");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "answer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "answer";

	
	
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








	$tdataaudit_info["answer"] = $fdata;
//	answer2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "answer2";
	$fdata["GoodName"] = "answer2";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","answer2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["answer2"] = $fdata;
//	answer3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "answer3";
	$fdata["GoodName"] = "answer3";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","answer3");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["answer3"] = $fdata;
//	iStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "iStatus";
	$fdata["GoodName"] = "iStatus";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","iStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "iStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iStatus";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
		
	$edata["LinkField"] = "fieldName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;








	$tdataaudit_info["iStatus"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","attachment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "attachment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attachment";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
									
	
	
	
	
	
	
	
	
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
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 10;

		$edata["maxFileSize"] = 5000;

	
	
	
	
	
		$edata["controlWidth"] = 143;

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








	$tdataaudit_info["attachment"] = $fdata;
//	reply_attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reply_attachment";
	$fdata["GoodName"] = "reply_attachment";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","reply_attachment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["reply_attachment"] = $fdata;
//	reply_attachment2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "reply_attachment2";
	$fdata["GoodName"] = "reply_attachment2";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","reply_attachment2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["reply_attachment2"] = $fdata;
//	reply_attachment3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "reply_attachment3";
	$fdata["GoodName"] = "reply_attachment3";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","reply_attachment3");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["reply_attachment3"] = $fdata;
//	noteAmend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "noteAmend";
	$fdata["GoodName"] = "noteAmend";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","noteAmend");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "noteAmend";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noteAmend";

	
	
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

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 550;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["noteAmend"] = $fdata;
//	noteAmend2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "noteAmend2";
	$fdata["GoodName"] = "noteAmend2";
	$fdata["ownerTable"] = "audit_info";
	$fdata["Label"] = GetFieldLabel("audit_info","noteAmend2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "noteAmend2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noteAmend2";

	
	
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

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 550;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_info["noteAmend2"] = $fdata;


$tables_data["audit_info"]=&$tdataaudit_info;
$field_labels["audit_info"] = &$fieldLabelsaudit_info;
$fieldToolTips["audit_info"] = &$fieldToolTipsaudit_info;
$page_titles["audit_info"] = &$pageTitlesaudit_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["audit_info"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["audit_info"] = array();


	
				$strOriginalDetailsTable="audit_form";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="audit_form";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "audit_form";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 0;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["audit_info"][0] = $masterParams;
				$masterTablesData["audit_info"][0]["masterKeys"] = array();
	$masterTablesData["audit_info"][0]["masterKeys"][]="fid";
				$masterTablesData["audit_info"][0]["detailKeys"] = array();
	$masterTablesData["audit_info"][0]["detailKeys"][]="fid";
		
	
				$strOriginalDetailsTable="audit_form";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="audit_form_manual";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "audit_form_manual";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 0;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["audit_info"][1] = $masterParams;
				$masterTablesData["audit_info"][1]["masterKeys"] = array();
	$masterTablesData["audit_info"][1]["masterKeys"][]="fid";
				$masterTablesData["audit_info"][1]["detailKeys"] = array();
	$masterTablesData["audit_info"][1]["detailKeys"][]="fid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_audit_info()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "inid,  	fid,  	finding,  	refyID,  	suggest,  	answer,  	answer2,  	answer3,  	iStatus,  	attachment,  	reply_attachment,  	reply_attachment2,  	reply_attachment3,  	noteAmend,  	noteAmend2";
$proto3["m_strFrom"] = "FROM audit_info";
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
	"m_strName" => "inid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto8["m_sql"] = "inid";
$proto8["m_srcTableName"] = "audit_info";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto10["m_sql"] = "fid";
$proto10["m_srcTableName"] = "audit_info";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "finding",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto12["m_sql"] = "finding";
$proto12["m_srcTableName"] = "audit_info";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "refyID",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto14["m_sql"] = "refyID";
$proto14["m_srcTableName"] = "audit_info";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "suggest",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto16["m_sql"] = "suggest";
$proto16["m_srcTableName"] = "audit_info";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "answer",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto18["m_sql"] = "answer";
$proto18["m_srcTableName"] = "audit_info";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "answer2",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto20["m_sql"] = "answer2";
$proto20["m_srcTableName"] = "audit_info";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "answer3",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto22["m_sql"] = "answer3";
$proto22["m_srcTableName"] = "audit_info";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "iStatus",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto24["m_sql"] = "iStatus";
$proto24["m_srcTableName"] = "audit_info";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto26["m_sql"] = "attachment";
$proto26["m_srcTableName"] = "audit_info";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto28["m_sql"] = "reply_attachment";
$proto28["m_srcTableName"] = "audit_info";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment2",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto30["m_sql"] = "reply_attachment2";
$proto30["m_srcTableName"] = "audit_info";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto3["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "reply_attachment3",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto32["m_sql"] = "reply_attachment3";
$proto32["m_srcTableName"] = "audit_info";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto3["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "noteAmend",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto34["m_sql"] = "noteAmend";
$proto34["m_srcTableName"] = "audit_info";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto3["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "noteAmend2",
	"m_strTable" => "audit_info",
	"m_srcTableName" => "audit_info"
));

$proto36["m_sql"] = "noteAmend2";
$proto36["m_srcTableName"] = "audit_info";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "audit_info";
$proto39["m_srcTableName"] = "audit_info";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "inid";
$proto39["m_columns"][] = "fid";
$proto39["m_columns"][] = "finding";
$proto39["m_columns"][] = "refyID";
$proto39["m_columns"][] = "suggest";
$proto39["m_columns"][] = "answer";
$proto39["m_columns"][] = "answer2";
$proto39["m_columns"][] = "answer3";
$proto39["m_columns"][] = "iStatus";
$proto39["m_columns"][] = "attachment";
$proto39["m_columns"][] = "reply_attachment";
$proto39["m_columns"][] = "reply_attachment2";
$proto39["m_columns"][] = "reply_attachment3";
$proto39["m_columns"][] = "noteAmend";
$proto39["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "audit_info";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "audit_info";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="audit_info";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_audit_info = createSqlQuery_audit_info();



															

$tdataaudit_info[".sqlquery"] = $queryData_audit_info;

$tableEvents["audit_info"] = new eventsBase;
$tdataaudit_info[".hasEvents"] = false;

?>