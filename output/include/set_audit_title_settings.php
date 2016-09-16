<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_audit_title = array();	
	$tdataset_audit_title[".truncateText"] = true;
	$tdataset_audit_title[".NumberOfChars"] = 80; 
	$tdataset_audit_title[".ShortName"] = "set_audit_title";
	$tdataset_audit_title[".OwnerID"] = "";
	$tdataset_audit_title[".OriginalTable"] = "set_audit_title";

//	field labels
$fieldLabelsset_audit_title = array();
$fieldToolTipsset_audit_title = array();
$pageTitlesset_audit_title = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsset_audit_title["Malay"] = array();
	$fieldToolTipsset_audit_title["Malay"] = array();
	$pageTitlesset_audit_title["Malay"] = array();
	$fieldLabelsset_audit_title["Malay"]["tid"] = "Tid";
	$fieldToolTipsset_audit_title["Malay"]["tid"] = "";
	$fieldLabelsset_audit_title["Malay"]["aTitle"] = "Aktiviti";
	$fieldToolTipsset_audit_title["Malay"]["aTitle"] = "";
	$fieldLabelsset_audit_title["Malay"]["jan"] = "Jan";
	$fieldToolTipsset_audit_title["Malay"]["jan"] = "";
	$fieldLabelsset_audit_title["Malay"]["feb"] = "Feb";
	$fieldToolTipsset_audit_title["Malay"]["feb"] = "";
	$fieldLabelsset_audit_title["Malay"]["aYear"] = "Tahun";
	$fieldToolTipsset_audit_title["Malay"]["aYear"] = "";
	$fieldLabelsset_audit_title["Malay"]["mac"] = "Mac";
	$fieldToolTipsset_audit_title["Malay"]["mac"] = "";
	$fieldLabelsset_audit_title["Malay"]["apr"] = "Apr";
	$fieldToolTipsset_audit_title["Malay"]["apr"] = "";
	$fieldLabelsset_audit_title["Malay"]["may"] = "Mei";
	$fieldToolTipsset_audit_title["Malay"]["may"] = "";
	$fieldLabelsset_audit_title["Malay"]["jun"] = "Jun";
	$fieldToolTipsset_audit_title["Malay"]["jun"] = "";
	$fieldLabelsset_audit_title["Malay"]["jul"] = "Jul";
	$fieldToolTipsset_audit_title["Malay"]["jul"] = "";
	$fieldLabelsset_audit_title["Malay"]["aug"] = "Ogo";
	$fieldToolTipsset_audit_title["Malay"]["aug"] = "";
	$fieldLabelsset_audit_title["Malay"]["sep"] = "Sep";
	$fieldToolTipsset_audit_title["Malay"]["sep"] = "";
	$fieldLabelsset_audit_title["Malay"]["oct"] = "Okt";
	$fieldToolTipsset_audit_title["Malay"]["oct"] = "";
	$fieldLabelsset_audit_title["Malay"]["nov"] = "Nov";
	$fieldToolTipsset_audit_title["Malay"]["nov"] = "";
	$fieldLabelsset_audit_title["Malay"]["dece"] = "Dis";
	$fieldToolTipsset_audit_title["Malay"]["dece"] = "";
	$fieldLabelsset_audit_title["Malay"]["procedureID"] = "Rujukan ";
	$fieldToolTipsset_audit_title["Malay"]["procedureID"] = "";
	$fieldLabelsset_audit_title["Malay"]["notes"] = "Catatan";
	$fieldToolTipsset_audit_title["Malay"]["notes"] = "";
	$fieldLabelsset_audit_title["Malay"]["organization"] = "Organisasi";
	$fieldToolTipsset_audit_title["Malay"]["organization"] = "";
	$fieldLabelsset_audit_title["Malay"]["aType"] = "Kategori Audit";
	$fieldToolTipsset_audit_title["Malay"]["aType"] = "";
	if (count($fieldToolTipsset_audit_title["Malay"]))
		$tdataset_audit_title[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_audit_title[""] = array();
	$fieldToolTipsset_audit_title[""] = array();
	$pageTitlesset_audit_title[""] = array();
	$fieldLabelsset_audit_title[""]["tid"] = "Tid";
	$fieldToolTipsset_audit_title[""]["tid"] = "";
	$fieldLabelsset_audit_title[""]["aTitle"] = "A Title";
	$fieldToolTipsset_audit_title[""]["aTitle"] = "";
	$fieldLabelsset_audit_title[""]["jan"] = "Jan";
	$fieldToolTipsset_audit_title[""]["jan"] = "";
	$fieldLabelsset_audit_title[""]["feb"] = "Feb";
	$fieldToolTipsset_audit_title[""]["feb"] = "";
	$fieldLabelsset_audit_title[""]["aYear"] = "A Year";
	$fieldToolTipsset_audit_title[""]["aYear"] = "";
	$fieldLabelsset_audit_title[""]["mac"] = "Mac";
	$fieldToolTipsset_audit_title[""]["mac"] = "";
	$fieldLabelsset_audit_title[""]["apr"] = "Apr";
	$fieldToolTipsset_audit_title[""]["apr"] = "";
	$fieldLabelsset_audit_title[""]["may"] = "May";
	$fieldToolTipsset_audit_title[""]["may"] = "";
	$fieldLabelsset_audit_title[""]["jun"] = "Jun";
	$fieldToolTipsset_audit_title[""]["jun"] = "";
	$fieldLabelsset_audit_title[""]["jul"] = "Jul";
	$fieldToolTipsset_audit_title[""]["jul"] = "";
	$fieldLabelsset_audit_title[""]["aug"] = "Aug";
	$fieldToolTipsset_audit_title[""]["aug"] = "";
	$fieldLabelsset_audit_title[""]["sep"] = "Sep";
	$fieldToolTipsset_audit_title[""]["sep"] = "";
	$fieldLabelsset_audit_title[""]["oct"] = "Oct";
	$fieldToolTipsset_audit_title[""]["oct"] = "";
	$fieldLabelsset_audit_title[""]["nov"] = "Nov";
	$fieldToolTipsset_audit_title[""]["nov"] = "";
	$fieldLabelsset_audit_title[""]["dece"] = "Dece";
	$fieldToolTipsset_audit_title[""]["dece"] = "";
	$fieldLabelsset_audit_title[""]["procedureID"] = "Procedure ID";
	$fieldToolTipsset_audit_title[""]["procedureID"] = "";
	$fieldLabelsset_audit_title[""]["notes"] = "Notes";
	$fieldToolTipsset_audit_title[""]["notes"] = "";
	$fieldLabelsset_audit_title[""]["organization"] = "Organization";
	$fieldToolTipsset_audit_title[""]["organization"] = "";
	$fieldLabelsset_audit_title[""]["aType"] = "A Type";
	$fieldToolTipsset_audit_title[""]["aType"] = "";
	if (count($fieldToolTipsset_audit_title[""]))
		$tdataset_audit_title[".isUseToolTips"] = true;
}
	
	
	$tdataset_audit_title[".NCSearch"] = true;



$tdataset_audit_title[".shortTableName"] = "set_audit_title";
$tdataset_audit_title[".nSecOptions"] = 0;
$tdataset_audit_title[".recsPerRowList"] = 1;
$tdataset_audit_title[".recsPerRowPrint"] = 1;
$tdataset_audit_title[".mainTableOwnerID"] = "";
$tdataset_audit_title[".moveNext"] = 1;
$tdataset_audit_title[".entityType"] = 0;

$tdataset_audit_title[".strOriginalTableName"] = "set_audit_title";




$tdataset_audit_title[".showAddInPopup"] = true;

$tdataset_audit_title[".showEditInPopup"] = true;

$tdataset_audit_title[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "edit_under_center";
$tdataset_audit_title[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_audit_title[".fieldsForRegister"] = array();

$tdataset_audit_title[".listAjax"] = false;

	$tdataset_audit_title[".audit"] = false;

	$tdataset_audit_title[".locking"] = false;

$tdataset_audit_title[".edit"] = true;
$tdataset_audit_title[".afterEditAction"] = 1;
$tdataset_audit_title[".closePopupAfterEdit"] = 1;
$tdataset_audit_title[".afterEditActionDetTable"] = "";

$tdataset_audit_title[".add"] = true;
$tdataset_audit_title[".afterAddAction"] = 1;
$tdataset_audit_title[".closePopupAfterAdd"] = 1;
$tdataset_audit_title[".afterAddActionDetTable"] = "";

$tdataset_audit_title[".list"] = true;


$tdataset_audit_title[".import"] = true;

$tdataset_audit_title[".exportTo"] = true;


$tdataset_audit_title[".delete"] = true;

$tdataset_audit_title[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_audit_title[".searchSaving"] = false;
//

$tdataset_audit_title[".showSearchPanel"] = true;
		$tdataset_audit_title[".flexibleSearch"] = true;		

if (isMobile())
	$tdataset_audit_title[".isUseAjaxSuggest"] = false;
else 
	$tdataset_audit_title[".isUseAjaxSuggest"] = true;

$tdataset_audit_title[".rowHighlite"] = true;


					
$tdataset_audit_title[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_audit_title[".isUseTimeForSearch"] = false;





$tdataset_audit_title[".allSearchFields"] = array();
$tdataset_audit_title[".filterFields"] = array();
$tdataset_audit_title[".requiredSearchFields"] = array();

$tdataset_audit_title[".allSearchFields"][] = "aType";
	$tdataset_audit_title[".allSearchFields"][] = "aTitle";
	$tdataset_audit_title[".allSearchFields"][] = "organization";
	$tdataset_audit_title[".allSearchFields"][] = "procedureID";
	$tdataset_audit_title[".allSearchFields"][] = "aYear";
	


$tdataset_audit_title[".panelSearchFields"] = array();
$tdataset_audit_title[".searchPanelOptions"] = array();
$tdataset_audit_title[".panelSearchFields"][] = "aType";
	$tdataset_audit_title[".panelSearchFields"][] = "aTitle";
	$tdataset_audit_title[".panelSearchFields"][] = "organization";
	$tdataset_audit_title[".panelSearchFields"][] = "procedureID";
	$tdataset_audit_title[".panelSearchFields"][] = "aYear";
	

$tdataset_audit_title[".tableType"] = "list";

$tdataset_audit_title[".printerPageOrientation"] = 0;
$tdataset_audit_title[".nPrinterPageScale"] = 100;

$tdataset_audit_title[".nPrinterSplitRecords"] = 40;

$tdataset_audit_title[".nPrinterPDFSplitRecords"] = 40;



$tdataset_audit_title[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataset_audit_title[".pageSize"] = 20;

$tdataset_audit_title[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_audit_title[".strOrderBy"] = $tstrOrderBy;

$tdataset_audit_title[".orderindexes"] = array();

$tdataset_audit_title[".sqlHead"] = "SELECT tid,  	aType,  	aTitle,  	aYear,  	jan,  	feb,  	mac,  	apr,  	may,  	jun,  	jul,  	aug,  	sep,  	oct,  	nov,  	dece,  	procedureID,  	notes,  	`organization`";
$tdataset_audit_title[".sqlFrom"] = "FROM set_audit_title";
$tdataset_audit_title[".sqlWhereExpr"] = "";
$tdataset_audit_title[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "aType";
	$tabFields[] = "aTitle";
	$tabFields[] = "organization";
	$tabFields[] = "procedureID";
	$tabFields[] = "notes";
	$tabFields[] = "aYear";
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Step1",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "jan";
	$tabFields[] = "feb";
	$tabFields[] = "mac";
	$tabFields[] = "apr";
	$tabFields[] = "may";
	$tabFields[] = "jun";
	$tabFields[] = "jul";
	$tabFields[] = "aug";
	$tabFields[] = "sep";
	$tabFields[] = "oct";
	$tabFields[] = "nov";
	$tabFields[] = "dece";
$arrEditTabs[] = array('tabId'=>'Step2',
					   'tabName'=>"Step2",
					   'nType'=>'2',
					   'nOrder'=>8,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataset_audit_title[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "aType";
	$tabFields[] = "aTitle";
	$tabFields[] = "procedureID";
	$tabFields[] = "organization";
	$tabFields[] = "notes";
	$tabFields[] = "aYear";
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Step1",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "jan";
	$tabFields[] = "feb";
	$tabFields[] = "mac";
	$tabFields[] = "apr";
	$tabFields[] = "may";
	$tabFields[] = "jun";
	$tabFields[] = "jul";
	$tabFields[] = "aug";
	$tabFields[] = "sep";
	$tabFields[] = "oct";
	$tabFields[] = "nov";
	$tabFields[] = "dece";
$arrAddTabs[] = array('tabId'=>'Step2',
					  'tabName'=>"Step2",
					  'nType'=>'2',
					  'nOrder'=>8,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataset_audit_title[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Bulan1',
					   'tabName'=>"Bulan",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataset_audit_title[".arrViewTabs"] = $arrViewTabs;

$tdataset_audit_title[".addMultistep"] = true;

$tdataset_audit_title[".editMultistep"] = true;



//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_audit_title[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_audit_title[".arrGroupsPerPage"] = $arrGPP;

$tdataset_audit_title[".highlightSearchResults"] = true;

$tableKeysset_audit_title = array();
$tableKeysset_audit_title[] = "tid";
$tdataset_audit_title[".Keys"] = $tableKeysset_audit_title;

$tdataset_audit_title[".listFields"] = array();
$tdataset_audit_title[".listFields"][] = "aType";
$tdataset_audit_title[".listFields"][] = "aTitle";
$tdataset_audit_title[".listFields"][] = "organization";
$tdataset_audit_title[".listFields"][] = "procedureID";
$tdataset_audit_title[".listFields"][] = "notes";
$tdataset_audit_title[".listFields"][] = "aYear";
$tdataset_audit_title[".listFields"][] = "jan";
$tdataset_audit_title[".listFields"][] = "feb";
$tdataset_audit_title[".listFields"][] = "mac";
$tdataset_audit_title[".listFields"][] = "apr";
$tdataset_audit_title[".listFields"][] = "may";
$tdataset_audit_title[".listFields"][] = "jun";
$tdataset_audit_title[".listFields"][] = "jul";
$tdataset_audit_title[".listFields"][] = "aug";
$tdataset_audit_title[".listFields"][] = "sep";
$tdataset_audit_title[".listFields"][] = "oct";
$tdataset_audit_title[".listFields"][] = "nov";
$tdataset_audit_title[".listFields"][] = "dece";

$tdataset_audit_title[".hideMobileList"] = array();


$tdataset_audit_title[".viewFields"] = array();

$tdataset_audit_title[".addFields"] = array();
$tdataset_audit_title[".addFields"][] = "aType";
$tdataset_audit_title[".addFields"][] = "aTitle";
$tdataset_audit_title[".addFields"][] = "procedureID";
$tdataset_audit_title[".addFields"][] = "organization";
$tdataset_audit_title[".addFields"][] = "notes";
$tdataset_audit_title[".addFields"][] = "aYear";
$tdataset_audit_title[".addFields"][] = "jan";
$tdataset_audit_title[".addFields"][] = "feb";
$tdataset_audit_title[".addFields"][] = "mac";
$tdataset_audit_title[".addFields"][] = "apr";
$tdataset_audit_title[".addFields"][] = "may";
$tdataset_audit_title[".addFields"][] = "jun";
$tdataset_audit_title[".addFields"][] = "jul";
$tdataset_audit_title[".addFields"][] = "aug";
$tdataset_audit_title[".addFields"][] = "sep";
$tdataset_audit_title[".addFields"][] = "oct";
$tdataset_audit_title[".addFields"][] = "nov";
$tdataset_audit_title[".addFields"][] = "dece";

$tdataset_audit_title[".masterListFields"] = array();
$tdataset_audit_title[".masterListFields"][] = "aType";
$tdataset_audit_title[".masterListFields"][] = "organization";
$tdataset_audit_title[".masterListFields"][] = "tid";
$tdataset_audit_title[".masterListFields"][] = "aTitle";
$tdataset_audit_title[".masterListFields"][] = "procedureID";
$tdataset_audit_title[".masterListFields"][] = "notes";
$tdataset_audit_title[".masterListFields"][] = "aYear";
$tdataset_audit_title[".masterListFields"][] = "jan";
$tdataset_audit_title[".masterListFields"][] = "feb";
$tdataset_audit_title[".masterListFields"][] = "mac";
$tdataset_audit_title[".masterListFields"][] = "apr";
$tdataset_audit_title[".masterListFields"][] = "may";
$tdataset_audit_title[".masterListFields"][] = "jun";
$tdataset_audit_title[".masterListFields"][] = "jul";
$tdataset_audit_title[".masterListFields"][] = "aug";
$tdataset_audit_title[".masterListFields"][] = "sep";
$tdataset_audit_title[".masterListFields"][] = "oct";
$tdataset_audit_title[".masterListFields"][] = "nov";
$tdataset_audit_title[".masterListFields"][] = "dece";

$tdataset_audit_title[".inlineAddFields"] = array();

$tdataset_audit_title[".editFields"] = array();
$tdataset_audit_title[".editFields"][] = "aType";
$tdataset_audit_title[".editFields"][] = "aTitle";
$tdataset_audit_title[".editFields"][] = "organization";
$tdataset_audit_title[".editFields"][] = "procedureID";
$tdataset_audit_title[".editFields"][] = "notes";
$tdataset_audit_title[".editFields"][] = "aYear";
$tdataset_audit_title[".editFields"][] = "jan";
$tdataset_audit_title[".editFields"][] = "feb";
$tdataset_audit_title[".editFields"][] = "mac";
$tdataset_audit_title[".editFields"][] = "apr";
$tdataset_audit_title[".editFields"][] = "may";
$tdataset_audit_title[".editFields"][] = "jun";
$tdataset_audit_title[".editFields"][] = "jul";
$tdataset_audit_title[".editFields"][] = "aug";
$tdataset_audit_title[".editFields"][] = "sep";
$tdataset_audit_title[".editFields"][] = "oct";
$tdataset_audit_title[".editFields"][] = "nov";
$tdataset_audit_title[".editFields"][] = "dece";

$tdataset_audit_title[".inlineEditFields"] = array();

$tdataset_audit_title[".exportFields"] = array();
$tdataset_audit_title[".exportFields"][] = "aType";
$tdataset_audit_title[".exportFields"][] = "organization";
$tdataset_audit_title[".exportFields"][] = "tid";
$tdataset_audit_title[".exportFields"][] = "aTitle";
$tdataset_audit_title[".exportFields"][] = "procedureID";
$tdataset_audit_title[".exportFields"][] = "notes";
$tdataset_audit_title[".exportFields"][] = "aYear";
$tdataset_audit_title[".exportFields"][] = "jan";
$tdataset_audit_title[".exportFields"][] = "feb";
$tdataset_audit_title[".exportFields"][] = "mac";
$tdataset_audit_title[".exportFields"][] = "apr";
$tdataset_audit_title[".exportFields"][] = "may";
$tdataset_audit_title[".exportFields"][] = "jun";
$tdataset_audit_title[".exportFields"][] = "jul";
$tdataset_audit_title[".exportFields"][] = "aug";
$tdataset_audit_title[".exportFields"][] = "sep";
$tdataset_audit_title[".exportFields"][] = "oct";
$tdataset_audit_title[".exportFields"][] = "nov";
$tdataset_audit_title[".exportFields"][] = "dece";

$tdataset_audit_title[".importFields"] = array();
$tdataset_audit_title[".importFields"][] = "aType";
$tdataset_audit_title[".importFields"][] = "aTitle";
$tdataset_audit_title[".importFields"][] = "aYear";
$tdataset_audit_title[".importFields"][] = "jan";
$tdataset_audit_title[".importFields"][] = "feb";
$tdataset_audit_title[".importFields"][] = "mac";
$tdataset_audit_title[".importFields"][] = "apr";
$tdataset_audit_title[".importFields"][] = "may";
$tdataset_audit_title[".importFields"][] = "jun";
$tdataset_audit_title[".importFields"][] = "jul";
$tdataset_audit_title[".importFields"][] = "aug";
$tdataset_audit_title[".importFields"][] = "sep";
$tdataset_audit_title[".importFields"][] = "oct";
$tdataset_audit_title[".importFields"][] = "nov";
$tdataset_audit_title[".importFields"][] = "dece";
$tdataset_audit_title[".importFields"][] = "notes";
$tdataset_audit_title[".importFields"][] = "organization";

$tdataset_audit_title[".printFields"] = array();

//	tid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tid";
	$fdata["GoodName"] = "tid";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","tid"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tid";
	
		
		
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
	
	
	
	

	

	
	$tdataset_audit_title["tid"] = $fdata;
//	aType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aType";
	$fdata["GoodName"] = "aType";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","aType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "aType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aType";
	
		
		
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
		
		
			
	$edata["LinkField"] = "fieldName";
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataset_audit_title["aType"] = $fdata;
//	aTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aTitle";
	$fdata["GoodName"] = "aTitle";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","aTitle"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "aTitle"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aTitle";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 542;
	
		
		
		$edata["controlWidth"] = 500;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataset_audit_title["aTitle"] = $fdata;
//	aYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aYear";
	$fdata["GoodName"] = "aYear";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","aYear"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "aYear"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aYear";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataset_audit_title["aYear"] = $fdata;
//	jan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jan";
	$fdata["GoodName"] = "jan";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","jan"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jan"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jan";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["jan"] = $fdata;
//	feb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "feb";
	$fdata["GoodName"] = "feb";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","feb"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "feb"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "feb";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["feb"] = $fdata;
//	mac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mac";
	$fdata["GoodName"] = "mac";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","mac"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "mac"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mac";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["mac"] = $fdata;
//	apr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "apr";
	$fdata["GoodName"] = "apr";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","apr"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "apr"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apr";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["apr"] = $fdata;
//	may
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "may";
	$fdata["GoodName"] = "may";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","may"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "may"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "may";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["may"] = $fdata;
//	jun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "jun";
	$fdata["GoodName"] = "jun";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","jun"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jun"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jun";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["jun"] = $fdata;
//	jul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "jul";
	$fdata["GoodName"] = "jul";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","jul"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "jul"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jul";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["jul"] = $fdata;
//	aug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "aug";
	$fdata["GoodName"] = "aug";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","aug"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "aug"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aug";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["aug"] = $fdata;
//	sep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sep";
	$fdata["GoodName"] = "sep";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","sep"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sep"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sep";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["sep"] = $fdata;
//	oct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "oct";
	$fdata["GoodName"] = "oct";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","oct"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "oct"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oct";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["oct"] = $fdata;
//	nov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nov";
	$fdata["GoodName"] = "nov";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","nov"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "nov"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nov";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["nov"] = $fdata;
//	dece
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dece";
	$fdata["GoodName"] = "dece";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","dece"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dece"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dece";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 30;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["dece"] = $fdata;
//	procedureID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "procedureID";
	$fdata["GoodName"] = "procedureID";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","procedureID"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "procedureID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedureID";
	
		
		
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
	$edata["LookupTable"] = "procedure";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
		
		
			
	$edata["LinkField"] = "procedureID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "procedure";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		$edata["AllowToAdd"] = true; 
	
				
	
	
		$edata["Multiselect"] = true; 
	
		
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

	

	
	$tdataset_audit_title["procedureID"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","notes"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "notes"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";
	
		
		
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
	
		
		
		$edata["controlWidth"] = 535;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataset_audit_title["notes"] = $fdata;
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "set_audit_title";
	$fdata["Label"] = GetFieldLabel("set_audit_title","organization"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "organization"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`organization`";
	
		
		
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

	

	
	$tdataset_audit_title["organization"] = $fdata;

	
$tables_data["set_audit_title"]=&$tdataset_audit_title;
$field_labels["set_audit_title"] = &$fieldLabelsset_audit_title;
$fieldToolTips["set_audit_title"] = &$fieldToolTipsset_audit_title;
$page_titles["set_audit_title"] = &$pageTitlesset_audit_title;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_audit_title"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["set_audit_title"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_audit_title()
{
$proto2=array();
$proto2["m_strHead"] = "SELECT";
$proto2["m_strFieldList"] = "tid,  	aType,  	aTitle,  	aYear,  	jan,  	feb,  	mac,  	apr,  	may,  	jun,  	jul,  	aug,  	sep,  	oct,  	nov,  	dece,  	procedureID,  	notes,  	`organization`";
$proto2["m_strFrom"] = "FROM set_audit_title";
$proto2["m_strWhere"] = "";
$proto2["m_strOrderBy"] = "";
$proto2["m_strTail"] = "";
			$proto2["cipherer"] = null;
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

$proto2["m_where"] = $obj;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto2["m_having"] = $obj;
$proto2["m_fieldlist"] = array();
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tid",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto7["m_sql"] = "tid";
$proto7["m_srcTableName"] = "set_audit_title";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto2["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "aType",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto9["m_sql"] = "aType";
$proto9["m_srcTableName"] = "set_audit_title";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto2["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "aTitle",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto11["m_sql"] = "aTitle";
$proto11["m_srcTableName"] = "set_audit_title";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto2["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "aYear",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto13["m_sql"] = "aYear";
$proto13["m_srcTableName"] = "set_audit_title";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto2["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "jan",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto15["m_sql"] = "jan";
$proto15["m_srcTableName"] = "set_audit_title";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto2["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "feb",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto17["m_sql"] = "feb";
$proto17["m_srcTableName"] = "set_audit_title";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto2["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "mac",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto19["m_sql"] = "mac";
$proto19["m_srcTableName"] = "set_audit_title";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto2["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "apr",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto21["m_sql"] = "apr";
$proto21["m_srcTableName"] = "set_audit_title";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto2["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "may",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto23["m_sql"] = "may";
$proto23["m_srcTableName"] = "set_audit_title";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto2["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "jun",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto25["m_sql"] = "jun";
$proto25["m_srcTableName"] = "set_audit_title";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto2["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "jul",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto27["m_sql"] = "jul";
$proto27["m_srcTableName"] = "set_audit_title";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto2["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "aug",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto29["m_sql"] = "aug";
$proto29["m_srcTableName"] = "set_audit_title";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto2["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "sep",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto31["m_sql"] = "sep";
$proto31["m_srcTableName"] = "set_audit_title";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto2["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "oct",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto33["m_sql"] = "oct";
$proto33["m_srcTableName"] = "set_audit_title";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto2["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "nov",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto35["m_sql"] = "nov";
$proto35["m_srcTableName"] = "set_audit_title";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto2["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "dece",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto37["m_sql"] = "dece";
$proto37["m_srcTableName"] = "set_audit_title";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto2["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "procedureID",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto39["m_sql"] = "procedureID";
$proto39["m_srcTableName"] = "set_audit_title";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto2["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto41["m_sql"] = "notes";
$proto41["m_srcTableName"] = "set_audit_title";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto2["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "set_audit_title",
	"m_srcTableName" => "set_audit_title"
));

$proto43["m_sql"] = "`organization`";
$proto43["m_srcTableName"] = "set_audit_title";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto2["m_fieldlist"][]=$obj;
$proto2["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "set_audit_title";
$proto46["m_srcTableName"] = "set_audit_title";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "tid";
$proto46["m_columns"][] = "aType";
$proto46["m_columns"][] = "aTitle";
$proto46["m_columns"][] = "aYear";
$proto46["m_columns"][] = "jan";
$proto46["m_columns"][] = "feb";
$proto46["m_columns"][] = "mac";
$proto46["m_columns"][] = "apr";
$proto46["m_columns"][] = "may";
$proto46["m_columns"][] = "jun";
$proto46["m_columns"][] = "jul";
$proto46["m_columns"][] = "aug";
$proto46["m_columns"][] = "sep";
$proto46["m_columns"][] = "oct";
$proto46["m_columns"][] = "nov";
$proto46["m_columns"][] = "dece";
$proto46["m_columns"][] = "procedureID";
$proto46["m_columns"][] = "notes";
$proto46["m_columns"][] = "organization";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "set_audit_title";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "set_audit_title";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto2["m_fromlist"][]=$obj;
$proto2["m_groupby"] = array();
$proto2["m_orderby"] = array();
$proto2["m_srcTableName"]="set_audit_title";		
$obj = new SQLQuery($proto2);

	return $obj;
}
$queryData_set_audit_title = createSqlQuery_set_audit_title();


	
																			
	
$tdataset_audit_title[".sqlquery"] = $queryData_set_audit_title;

$tableEvents["set_audit_title"] = new eventsBase;
$tdataset_audit_title[".hasEvents"] = false;

?>