<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaudit_form = array();
	$tdataaudit_form[".truncateText"] = true;
	$tdataaudit_form[".NumberOfChars"] = 80;
	$tdataaudit_form[".ShortName"] = "audit_form";
	$tdataaudit_form[".OwnerID"] = "";
	$tdataaudit_form[".OriginalTable"] = "audit_form";

//	field labels
$fieldLabelsaudit_form = array();
$fieldToolTipsaudit_form = array();
$pageTitlesaudit_form = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsaudit_form["Malay"] = array();
	$fieldToolTipsaudit_form["Malay"] = array();
	$pageTitlesaudit_form["Malay"] = array();
	$fieldLabelsaudit_form["Malay"]["fid"] = "Fid";
	$fieldToolTipsaudit_form["Malay"]["fid"] = "";
	$fieldLabelsaudit_form["Malay"]["ref"] = "No Rujukan";
	$fieldToolTipsaudit_form["Malay"]["ref"] = "";
	$fieldLabelsaudit_form["Malay"]["aDate"] = "Tarikh Daftar";
	$fieldToolTipsaudit_form["Malay"]["aDate"] = "";
	$fieldLabelsaudit_form["Malay"]["aStatus"] = "Status";
	$fieldToolTipsaudit_form["Malay"]["aStatus"] = "";
	$fieldLabelsaudit_form["Malay"]["userID"] = "Penyedia";
	$fieldToolTipsaudit_form["Malay"]["userID"] = "";
	$fieldLabelsaudit_form["Malay"]["userCheck"] = "Penyemak";
	$fieldToolTipsaudit_form["Malay"]["userCheck"] = "";
	$fieldLabelsaudit_form["Malay"]["userAuditee"] = "Auditi";
	$fieldToolTipsaudit_form["Malay"]["userAuditee"] = "";
	$fieldLabelsaudit_form["Malay"]["opt"] = "Butang Tindakan";
	$fieldToolTipsaudit_form["Malay"]["opt"] = "";
	$fieldLabelsaudit_form["Malay"]["attachment"] = "Attachment";
	$fieldToolTipsaudit_form["Malay"]["attachment"] = "";
	$fieldLabelsaudit_form["Malay"]["bulan"] = "Bulan";
	$fieldToolTipsaudit_form["Malay"]["bulan"] = "";
	$fieldLabelsaudit_form["Malay"]["tahun"] = "Tahun";
	$fieldToolTipsaudit_form["Malay"]["tahun"] = "";
	$fieldLabelsaudit_form["Malay"]["repeatStatus"] = "Kes Ulangan";
	$fieldToolTipsaudit_form["Malay"]["repeatStatus"] = "";
	$fieldLabelsaudit_form["Malay"]["repeatNo"] = "Bil Ulangan";
	$fieldToolTipsaudit_form["Malay"]["repeatNo"] = "";
	$fieldLabelsaudit_form["Malay"]["userApprove"] = "Pelulus";
	$fieldToolTipsaudit_form["Malay"]["userApprove"] = "";
	$fieldLabelsaudit_form["Malay"]["planID"] = "Rancangan";
	$fieldToolTipsaudit_form["Malay"]["planID"] = "";
	$fieldLabelsaudit_form["Malay"]["dateCheck"] = "Tarikh Semak";
	$fieldToolTipsaudit_form["Malay"]["dateCheck"] = "";
	$fieldLabelsaudit_form["Malay"]["dateApprove"] = "Tarikh Lulus";
	$fieldToolTipsaudit_form["Malay"]["dateApprove"] = "";
	$fieldLabelsaudit_form["Malay"]["noteAmend"] = "Pindaan Penyemak";
	$fieldToolTipsaudit_form["Malay"]["noteAmend"] = "";
	$fieldLabelsaudit_form["Malay"]["noteAmend2"] = "Pindaan Pelulus";
	$fieldToolTipsaudit_form["Malay"]["noteAmend2"] = "";
	$fieldLabelsaudit_form["Malay"]["sector"] = "Sektor";
	$fieldToolTipsaudit_form["Malay"]["sector"] = "";
	$fieldLabelsaudit_form["Malay"]["department"] = "Bahagian";
	$fieldToolTipsaudit_form["Malay"]["department"] = "";
	$fieldLabelsaudit_form["Malay"]["paid"] = "PAID";
	$fieldToolTipsaudit_form["Malay"]["paid"] = "";
	$fieldLabelsaudit_form["Malay"]["agency"] = "Agensi";
	$fieldToolTipsaudit_form["Malay"]["agency"] = "";
	$fieldLabelsaudit_form["Malay"]["dateFollowUp"] = "Tarikh Susulan 1";
	$fieldToolTipsaudit_form["Malay"]["dateFollowUp"] = "";
	$fieldLabelsaudit_form["Malay"]["dateFollowUp2"] = "Tarikh Susulan 2";
	$fieldToolTipsaudit_form["Malay"]["dateFollowUp2"] = "";
	$fieldLabelsaudit_form["Malay"]["dateAnswer"] = "Tarikh MBalas Auditi";
	$fieldToolTipsaudit_form["Malay"]["dateAnswer"] = "";
	$fieldLabelsaudit_form["Malay"]["dateAnswer2"] = "Tarikh MBalas Auditi 2";
	$fieldToolTipsaudit_form["Malay"]["dateAnswer2"] = "";
	$fieldLabelsaudit_form["Malay"]["dateAnswer3"] = "Tarikh MBalas Auditi 3";
	$fieldToolTipsaudit_form["Malay"]["dateAnswer3"] = "";
	$fieldLabelsaudit_form["Malay"]["dueDate"] = "T/A Maklum Balas";
	$fieldToolTipsaudit_form["Malay"]["dueDate"] = "";
	$fieldLabelsaudit_form["Malay"]["dueDate2"] = "T/A Peringatan 1";
	$fieldToolTipsaudit_form["Malay"]["dueDate2"] = "";
	$fieldLabelsaudit_form["Malay"]["dueDate3"] = "T/A Peringatan 2";
	$fieldToolTipsaudit_form["Malay"]["dueDate3"] = "";
	$fieldLabelsaudit_form["Malay"]["dateFinish"] = "Tarikh Selesai/Tutup";
	$fieldToolTipsaudit_form["Malay"]["dateFinish"] = "";
	$fieldLabelsaudit_form["Malay"]["dateSend"] = "Tarikh Hantar Query";
	$fieldToolTipsaudit_form["Malay"]["dateSend"] = "";
	$fieldLabelsaudit_form["Malay"]["dateRemind"] = "Tarikh Diberi Peringatan Mesra";
	$fieldToolTipsaudit_form["Malay"]["dateRemind"] = "";
	$fieldLabelsaudit_form["Malay"]["dateRemind2"] = "Tarikh Diberi Peringatan 1";
	$fieldToolTipsaudit_form["Malay"]["dateRemind2"] = "";
	$fieldLabelsaudit_form["Malay"]["dateRemind3"] = "Tarikh Diberi Peringatan 2";
	$fieldToolTipsaudit_form["Malay"]["dateRemind3"] = "";
	$fieldLabelsaudit_form["Malay"]["replyPeriod"] = "M/B 1";
	$fieldToolTipsaudit_form["Malay"]["replyPeriod"] = "";
	$fieldLabelsaudit_form["Malay"]["replyPeriod2"] = "M/B 2";
	$fieldToolTipsaudit_form["Malay"]["replyPeriod2"] = "";
	$fieldLabelsaudit_form["Malay"]["replyPeriod3"] = "M/B 3";
	$fieldToolTipsaudit_form["Malay"]["replyPeriod3"] = "";
	$fieldLabelsaudit_form["Malay"]["aElementID"] = "Elemen Audit";
	$fieldToolTipsaudit_form["Malay"]["aElementID"] = "";
	$fieldLabelsaudit_form["Malay"]["aTypeCode"] = "Kategori Auditan";
	$fieldToolTipsaudit_form["Malay"]["aTypeCode"] = "";
	if (count($fieldToolTipsaudit_form["Malay"]))
		$tdataaudit_form[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaudit_form[""] = array();
	$fieldToolTipsaudit_form[""] = array();
	$pageTitlesaudit_form[""] = array();
	if (count($fieldToolTipsaudit_form[""]))
		$tdataaudit_form[".isUseToolTips"] = true;
}


	$tdataaudit_form[".NCSearch"] = true;



$tdataaudit_form[".shortTableName"] = "audit_form";
$tdataaudit_form[".nSecOptions"] = 0;
$tdataaudit_form[".recsPerRowList"] = 1;
$tdataaudit_form[".recsPerRowPrint"] = 1;
$tdataaudit_form[".mainTableOwnerID"] = "";
$tdataaudit_form[".moveNext"] = 1;
$tdataaudit_form[".entityType"] = 0;

$tdataaudit_form[".strOriginalTableName"] = "audit_form";




$tdataaudit_form[".showAddInPopup"] = true;

$tdataaudit_form[".showEditInPopup"] = true;

$tdataaudit_form[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "edit_under_center";
$tdataaudit_form[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaudit_form[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataaudit_form[".listAjax"] = true;
else
	$tdataaudit_form[".listAjax"] = false;

	$tdataaudit_form[".audit"] = true;

	$tdataaudit_form[".locking"] = false;

$tdataaudit_form[".edit"] = true;
$tdataaudit_form[".afterEditAction"] = 0;
$tdataaudit_form[".closePopupAfterEdit"] = 1;
$tdataaudit_form[".afterEditActionDetTable"] = "audit_info";

$tdataaudit_form[".add"] = true;
$tdataaudit_form[".afterAddAction"] = 0;
$tdataaudit_form[".closePopupAfterAdd"] = 1;
$tdataaudit_form[".afterAddActionDetTable"] = "audit_info";

$tdataaudit_form[".list"] = true;

$tdataaudit_form[".view"] = true;


$tdataaudit_form[".exportTo"] = true;


$tdataaudit_form[".delete"] = true;

$tdataaudit_form[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataaudit_form[".searchSaving"] = false;
//

$tdataaudit_form[".showSearchPanel"] = true;
		$tdataaudit_form[".flexibleSearch"] = true;

if (isMobile())
	$tdataaudit_form[".isUseAjaxSuggest"] = false;
else
	$tdataaudit_form[".isUseAjaxSuggest"] = true;

$tdataaudit_form[".rowHighlite"] = true;


			
			
			
			
			
			
			
			
			
			
			
			
			
			
											
							
				$tdataaudit_form[".isUsebuttonHandlers"] = true;

$tdataaudit_form[".addPageEvents"] = true;

// use timepicker for search panel
$tdataaudit_form[".isUseTimeForSearch"] = false;




$tdataaudit_form[".detailsLinksOnList"] = "1";

$tdataaudit_form[".allSearchFields"] = array();
$tdataaudit_form[".filterFields"] = array();
$tdataaudit_form[".requiredSearchFields"] = array();

$tdataaudit_form[".allSearchFields"][] = "aTypeCode";
	$tdataaudit_form[".allSearchFields"][] = "replyPeriod";
	$tdataaudit_form[".allSearchFields"][] = "replyPeriod2";
	$tdataaudit_form[".allSearchFields"][] = "replyPeriod3";
	$tdataaudit_form[".allSearchFields"][] = "ref";
	$tdataaudit_form[".allSearchFields"][] = "aStatus";
	$tdataaudit_form[".allSearchFields"][] = "planID";
	$tdataaudit_form[".allSearchFields"][] = "bulan";
	$tdataaudit_form[".allSearchFields"][] = "tahun";
	$tdataaudit_form[".allSearchFields"][] = "userID";
	$tdataaudit_form[".allSearchFields"][] = "userCheck";
	$tdataaudit_form[".allSearchFields"][] = "userApprove";
	$tdataaudit_form[".allSearchFields"][] = "userAuditee";
	$tdataaudit_form[".allSearchFields"][] = "aDate";
	$tdataaudit_form[".allSearchFields"][] = "dateCheck";
	$tdataaudit_form[".allSearchFields"][] = "dateApprove";
	$tdataaudit_form[".allSearchFields"][] = "dueDate";
	$tdataaudit_form[".allSearchFields"][] = "dueDate2";
	$tdataaudit_form[".allSearchFields"][] = "dueDate3";
	$tdataaudit_form[".allSearchFields"][] = "repeatStatus";
	$tdataaudit_form[".allSearchFields"][] = "sector";
	$tdataaudit_form[".allSearchFields"][] = "department";
	$tdataaudit_form[".allSearchFields"][] = "paid";
	$tdataaudit_form[".allSearchFields"][] = "agency";
	$tdataaudit_form[".allSearchFields"][] = "dateAnswer";
	$tdataaudit_form[".allSearchFields"][] = "dateAnswer2";
	$tdataaudit_form[".allSearchFields"][] = "dateAnswer3";
	$tdataaudit_form[".allSearchFields"][] = "dateFinish";
	
$tdataaudit_form[".filterFields"][] = "aTypeCode";

$tdataaudit_form[".googleLikeFields"] = array();
$tdataaudit_form[".googleLikeFields"][] = "aTypeCode";
$tdataaudit_form[".googleLikeFields"][] = "dateAnswer";
$tdataaudit_form[".googleLikeFields"][] = "dateAnswer2";
$tdataaudit_form[".googleLikeFields"][] = "dateAnswer3";
$tdataaudit_form[".googleLikeFields"][] = "dueDate";
$tdataaudit_form[".googleLikeFields"][] = "dueDate2";
$tdataaudit_form[".googleLikeFields"][] = "dueDate3";
$tdataaudit_form[".googleLikeFields"][] = "dateFinish";
$tdataaudit_form[".googleLikeFields"][] = "replyPeriod";
$tdataaudit_form[".googleLikeFields"][] = "replyPeriod2";
$tdataaudit_form[".googleLikeFields"][] = "replyPeriod3";

$tdataaudit_form[".panelSearchFields"] = array();
$tdataaudit_form[".searchPanelOptions"] = array();
$tdataaudit_form[".panelSearchFields"][] = "aStatus";
	$tdataaudit_form[".panelSearchFields"][] = "bulan";
	$tdataaudit_form[".panelSearchFields"][] = "tahun";
	$tdataaudit_form[".panelSearchFields"][] = "userID";
	$tdataaudit_form[".panelSearchFields"][] = "userAuditee";
	$tdataaudit_form[".panelSearchFields"][] = "aDate";
	$tdataaudit_form[".panelSearchFields"][] = "sector";
	$tdataaudit_form[".panelSearchFields"][] = "department";
	$tdataaudit_form[".panelSearchFields"][] = "paid";
	$tdataaudit_form[".panelSearchFields"][] = "agency";
	
$tdataaudit_form[".advSearchFields"] = array();
$tdataaudit_form[".advSearchFields"][] = "aTypeCode";
$tdataaudit_form[".advSearchFields"][] = "replyPeriod";
$tdataaudit_form[".advSearchFields"][] = "replyPeriod2";
$tdataaudit_form[".advSearchFields"][] = "replyPeriod3";
$tdataaudit_form[".advSearchFields"][] = "ref";
$tdataaudit_form[".advSearchFields"][] = "aStatus";
$tdataaudit_form[".advSearchFields"][] = "planID";
$tdataaudit_form[".advSearchFields"][] = "bulan";
$tdataaudit_form[".advSearchFields"][] = "tahun";
$tdataaudit_form[".advSearchFields"][] = "userID";
$tdataaudit_form[".advSearchFields"][] = "userCheck";
$tdataaudit_form[".advSearchFields"][] = "userApprove";
$tdataaudit_form[".advSearchFields"][] = "userAuditee";
$tdataaudit_form[".advSearchFields"][] = "aDate";
$tdataaudit_form[".advSearchFields"][] = "dateCheck";
$tdataaudit_form[".advSearchFields"][] = "dateApprove";
$tdataaudit_form[".advSearchFields"][] = "dueDate";
$tdataaudit_form[".advSearchFields"][] = "dueDate2";
$tdataaudit_form[".advSearchFields"][] = "dueDate3";
$tdataaudit_form[".advSearchFields"][] = "repeatStatus";
$tdataaudit_form[".advSearchFields"][] = "sector";
$tdataaudit_form[".advSearchFields"][] = "department";
$tdataaudit_form[".advSearchFields"][] = "paid";
$tdataaudit_form[".advSearchFields"][] = "agency";
$tdataaudit_form[".advSearchFields"][] = "dateAnswer";
$tdataaudit_form[".advSearchFields"][] = "dateAnswer2";
$tdataaudit_form[".advSearchFields"][] = "dateAnswer3";
$tdataaudit_form[".advSearchFields"][] = "dateFinish";

$tdataaudit_form[".tableType"] = "list";

$tdataaudit_form[".printerPageOrientation"] = 0;
$tdataaudit_form[".nPrinterPageScale"] = 100;

$tdataaudit_form[".nPrinterSplitRecords"] = 40;

$tdataaudit_form[".nPrinterPDFSplitRecords"] = 40;



$tdataaudit_form[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataaudit_form[".pageSize"] = 20;

$tdataaudit_form[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY audit_form.fid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaudit_form[".strOrderBy"] = $tstrOrderBy;

$tdataaudit_form[".orderindexes"] = array();
$tdataaudit_form[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "audit_form.fid");

$tdataaudit_form[".sqlHead"] = "SELECT audit_form.fid,  audit_form.`ref`,  audit_form.aDate,  MONTH(aDate) AS bulan,  YEAR(aDate) AS tahun,  audit_form.aStatus,  audit_form.aTypeCode,  audit_form.aElementID,  audit_form.userID,  audit_form.userCheck,  audit_form.userAuditee,  audit_form.fid AS opt,  audit_form.attachment,  audit_form.repeatStatus,  audit_form.repeatNo,  audit_form.userApprove,  audit_form.planID,  audit_form.dateCheck,  audit_form.dateApprove,  audit_form.noteAmend,  audit_form.noteAmend2,  auditee.sector,  auditee.department,  auditee.paid,  auditee.agency,  audit_form.dateFollowUp,  audit_form.dateFollowUp2,  audit_form.dateAnswer,  audit_form.dateAnswer2,  audit_form.dateAnswer3,  audit_form.dueDate,  audit_form.dueDate2,  audit_form.dueDate3,  audit_form.dateFinish,  audit_form.dateSend,  audit_form.dateRemind,  audit_form.dateRemind2,  audit_form.dateRemind3,  DATEDIFF(audit_form.dateApprove, audit_form.dateAnswer) AS replyPeriod,  DATEDIFF(audit_form.dateFollowUp, audit_form.dateAnswer2) AS replyPeriod2,  DATEDIFF(audit_form.dateFollowUp2, audit_form.dateAnswer3) AS replyPeriod3";
$tdataaudit_form[".sqlFrom"] = "FROM audit_form  LEFT OUTER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$tdataaudit_form[".sqlWhereExpr"] = "audit_form.noteAmend IS NULL || audit_form.noteAmend='' || audit_form.noteAmend!='Daftar Query Manual'";
$tdataaudit_form[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "planID";
	$tabFields[] = "userID";
	$tabFields[] = "userCheck";
	$tabFields[] = "userApprove";
	$tabFields[] = "userAuditee";
	$tabFields[] = "repeatStatus";
	$tabFields[] = "repeatNo";
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Pendaftaran",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "aDate";
	$tabFields[] = "dueDate";
	$tabFields[] = "dueDate2";
	$tabFields[] = "dueDate3";
	$tabFields[] = "dateFinish";
$arrEditTabs[] = array('tabId'=>'Tarikh1',
					   'tabName'=>"Tarikh",
					   'nType'=>'2',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "noteAmend";
	$tabFields[] = "noteAmend2";
$arrEditTabs[] = array('tabId'=>'Pindaan1',
					   'tabName'=>"Pindaan /Catatan",
					   'nType'=>'2',
					   'nOrder'=>15,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataaudit_form[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "planID";
	$tabFields[] = "aStatus";
	$tabFields[] = "userID";
	$tabFields[] = "userCheck";
	$tabFields[] = "userApprove";
	$tabFields[] = "userAuditee";
	$tabFields[] = "repeatStatus";
	$tabFields[] = "repeatNo";
	$tabFields[] = "aDate";
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Pendaftaran",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataaudit_form[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "planID";
	$tabFields[] = "aTypeCode";
	$tabFields[] = "ref";
	$tabFields[] = "aStatus";
	$tabFields[] = "userID";
	$tabFields[] = "userCheck";
	$tabFields[] = "userApprove";
	$tabFields[] = "userAuditee";
	$tabFields[] = "repeatStatus";
	$tabFields[] = "repeatNo";
$arrViewTabs[] = array('tabId'=>'Daftar_Query1',
					   'tabName'=>"Daftar Query",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "aDate";
	$tabFields[] = "dateCheck";
	$tabFields[] = "dateApprove";
	$tabFields[] = "dateSend";
	$tabFields[] = "dueDate";
	$tabFields[] = "dateRemind";
	$tabFields[] = "dateAnswer";
	$tabFields[] = "dateFollowUp";
	$tabFields[] = "dateAnswer2";
	$tabFields[] = "dateFollowUp2";
	$tabFields[] = "dateAnswer3";
	$tabFields[] = "dateRemind2";
	$tabFields[] = "dueDate2";
	$tabFields[] = "dateRemind3";
	$tabFields[] = "dueDate3";
	$tabFields[] = "dateFinish";
$arrViewTabs[] = array('tabId'=>'Peringatan1',
					   'tabName'=>"Tarikh",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "noteAmend";
	$tabFields[] = "noteAmend2";
$arrViewTabs[] = array('tabId'=>'Pindaan__Catatan1',
					   'tabName'=>"Pindaan/ Catatan",
					   'nType'=>'1',
					   'nOrder'=>29,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataaudit_form[".arrViewTabs"] = $arrViewTabs;


$tdataaudit_form[".addMultistep"] = true;

$tdataaudit_form[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaudit_form[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaudit_form[".arrGroupsPerPage"] = $arrGPP;


$tableKeysaudit_form = array();
$tableKeysaudit_form[] = "fid";
$tdataaudit_form[".Keys"] = $tableKeysaudit_form;

$tdataaudit_form[".listFields"] = array();
$tdataaudit_form[".listFields"][] = "ref";
$tdataaudit_form[".listFields"][] = "planID";
$tdataaudit_form[".listFields"][] = "aTypeCode";
$tdataaudit_form[".listFields"][] = "aStatus";
$tdataaudit_form[".listFields"][] = "userID";
$tdataaudit_form[".listFields"][] = "userCheck";
$tdataaudit_form[".listFields"][] = "userApprove";
$tdataaudit_form[".listFields"][] = "userAuditee";
$tdataaudit_form[".listFields"][] = "aDate";
$tdataaudit_form[".listFields"][] = "dueDate";
$tdataaudit_form[".listFields"][] = "dueDate2";
$tdataaudit_form[".listFields"][] = "dueDate3";
$tdataaudit_form[".listFields"][] = "replyPeriod";
$tdataaudit_form[".listFields"][] = "replyPeriod2";
$tdataaudit_form[".listFields"][] = "replyPeriod3";
$tdataaudit_form[".listFields"][] = "opt";

$tdataaudit_form[".hideMobileList"] = array();


$tdataaudit_form[".viewFields"] = array();
$tdataaudit_form[".viewFields"][] = "planID";
$tdataaudit_form[".viewFields"][] = "aTypeCode";
$tdataaudit_form[".viewFields"][] = "ref";
$tdataaudit_form[".viewFields"][] = "aStatus";
$tdataaudit_form[".viewFields"][] = "userID";
$tdataaudit_form[".viewFields"][] = "userCheck";
$tdataaudit_form[".viewFields"][] = "userApprove";
$tdataaudit_form[".viewFields"][] = "userAuditee";
$tdataaudit_form[".viewFields"][] = "repeatStatus";
$tdataaudit_form[".viewFields"][] = "repeatNo";
$tdataaudit_form[".viewFields"][] = "aDate";
$tdataaudit_form[".viewFields"][] = "dateCheck";
$tdataaudit_form[".viewFields"][] = "dateApprove";
$tdataaudit_form[".viewFields"][] = "dateSend";
$tdataaudit_form[".viewFields"][] = "dueDate";
$tdataaudit_form[".viewFields"][] = "dateRemind";
$tdataaudit_form[".viewFields"][] = "dateAnswer";
$tdataaudit_form[".viewFields"][] = "dateFollowUp";
$tdataaudit_form[".viewFields"][] = "dateAnswer2";
$tdataaudit_form[".viewFields"][] = "dateFollowUp2";
$tdataaudit_form[".viewFields"][] = "dateAnswer3";
$tdataaudit_form[".viewFields"][] = "dateRemind2";
$tdataaudit_form[".viewFields"][] = "dueDate2";
$tdataaudit_form[".viewFields"][] = "dateRemind3";
$tdataaudit_form[".viewFields"][] = "dueDate3";
$tdataaudit_form[".viewFields"][] = "dateFinish";
$tdataaudit_form[".viewFields"][] = "noteAmend";
$tdataaudit_form[".viewFields"][] = "noteAmend2";

$tdataaudit_form[".addFields"] = array();
$tdataaudit_form[".addFields"][] = "planID";
$tdataaudit_form[".addFields"][] = "aStatus";
$tdataaudit_form[".addFields"][] = "userID";
$tdataaudit_form[".addFields"][] = "userCheck";
$tdataaudit_form[".addFields"][] = "userApprove";
$tdataaudit_form[".addFields"][] = "userAuditee";
$tdataaudit_form[".addFields"][] = "repeatStatus";
$tdataaudit_form[".addFields"][] = "repeatNo";
$tdataaudit_form[".addFields"][] = "aDate";

$tdataaudit_form[".masterListFields"] = array();
$tdataaudit_form[".masterListFields"][] = "noteAmend2";
$tdataaudit_form[".masterListFields"][] = "replyPeriod2";
$tdataaudit_form[".masterListFields"][] = "replyPeriod";
$tdataaudit_form[".masterListFields"][] = "dateRemind3";
$tdataaudit_form[".masterListFields"][] = "dateRemind2";
$tdataaudit_form[".masterListFields"][] = "dateRemind";
$tdataaudit_form[".masterListFields"][] = "aTypeCode";
$tdataaudit_form[".masterListFields"][] = "aElementID";
$tdataaudit_form[".masterListFields"][] = "dateSend";
$tdataaudit_form[".masterListFields"][] = "dateFinish";
$tdataaudit_form[".masterListFields"][] = "dueDate3";
$tdataaudit_form[".masterListFields"][] = "dueDate2";
$tdataaudit_form[".masterListFields"][] = "dueDate";
$tdataaudit_form[".masterListFields"][] = "dateAnswer3";
$tdataaudit_form[".masterListFields"][] = "dateAnswer2";
$tdataaudit_form[".masterListFields"][] = "dateAnswer";
$tdataaudit_form[".masterListFields"][] = "dateFollowUp2";
$tdataaudit_form[".masterListFields"][] = "dateFollowUp";
$tdataaudit_form[".masterListFields"][] = "agency";
$tdataaudit_form[".masterListFields"][] = "noteAmend";
$tdataaudit_form[".masterListFields"][] = "replyPeriod3";
$tdataaudit_form[".masterListFields"][] = "sector";
$tdataaudit_form[".masterListFields"][] = "department";
$tdataaudit_form[".masterListFields"][] = "paid";
$tdataaudit_form[".masterListFields"][] = "planID";
$tdataaudit_form[".masterListFields"][] = "fid";
$tdataaudit_form[".masterListFields"][] = "aStatus";
$tdataaudit_form[".masterListFields"][] = "ref";
$tdataaudit_form[".masterListFields"][] = "bulan";
$tdataaudit_form[".masterListFields"][] = "tahun";
$tdataaudit_form[".masterListFields"][] = "userID";
$tdataaudit_form[".masterListFields"][] = "userCheck";
$tdataaudit_form[".masterListFields"][] = "userApprove";
$tdataaudit_form[".masterListFields"][] = "attachment";
$tdataaudit_form[".masterListFields"][] = "userAuditee";
$tdataaudit_form[".masterListFields"][] = "aDate";
$tdataaudit_form[".masterListFields"][] = "dateCheck";
$tdataaudit_form[".masterListFields"][] = "dateApprove";
$tdataaudit_form[".masterListFields"][] = "opt";
$tdataaudit_form[".masterListFields"][] = "repeatStatus";
$tdataaudit_form[".masterListFields"][] = "repeatNo";

$tdataaudit_form[".inlineAddFields"] = array();

$tdataaudit_form[".editFields"] = array();
$tdataaudit_form[".editFields"][] = "planID";
$tdataaudit_form[".editFields"][] = "userID";
$tdataaudit_form[".editFields"][] = "userCheck";
$tdataaudit_form[".editFields"][] = "userApprove";
$tdataaudit_form[".editFields"][] = "userAuditee";
$tdataaudit_form[".editFields"][] = "repeatStatus";
$tdataaudit_form[".editFields"][] = "repeatNo";
$tdataaudit_form[".editFields"][] = "aDate";
$tdataaudit_form[".editFields"][] = "dueDate";
$tdataaudit_form[".editFields"][] = "dueDate2";
$tdataaudit_form[".editFields"][] = "dueDate3";
$tdataaudit_form[".editFields"][] = "dateFinish";
$tdataaudit_form[".editFields"][] = "noteAmend";
$tdataaudit_form[".editFields"][] = "noteAmend2";

$tdataaudit_form[".inlineEditFields"] = array();

$tdataaudit_form[".exportFields"] = array();
$tdataaudit_form[".exportFields"][] = "aTypeCode";
$tdataaudit_form[".exportFields"][] = "fid";
$tdataaudit_form[".exportFields"][] = "ref";
$tdataaudit_form[".exportFields"][] = "planID";
$tdataaudit_form[".exportFields"][] = "aStatus";
$tdataaudit_form[".exportFields"][] = "bulan";
$tdataaudit_form[".exportFields"][] = "tahun";
$tdataaudit_form[".exportFields"][] = "userID";
$tdataaudit_form[".exportFields"][] = "userCheck";
$tdataaudit_form[".exportFields"][] = "attachment";
$tdataaudit_form[".exportFields"][] = "userApprove";
$tdataaudit_form[".exportFields"][] = "userAuditee";
$tdataaudit_form[".exportFields"][] = "aDate";
$tdataaudit_form[".exportFields"][] = "dateCheck";
$tdataaudit_form[".exportFields"][] = "dateApprove";
$tdataaudit_form[".exportFields"][] = "dateSend";
$tdataaudit_form[".exportFields"][] = "dueDate";
$tdataaudit_form[".exportFields"][] = "dateRemind";
$tdataaudit_form[".exportFields"][] = "dateRemind2";
$tdataaudit_form[".exportFields"][] = "dateRemind3";
$tdataaudit_form[".exportFields"][] = "dueDate2";
$tdataaudit_form[".exportFields"][] = "dueDate3";
$tdataaudit_form[".exportFields"][] = "dateFollowUp";
$tdataaudit_form[".exportFields"][] = "dateFollowUp2";
$tdataaudit_form[".exportFields"][] = "dateFinish";
$tdataaudit_form[".exportFields"][] = "replyPeriod";
$tdataaudit_form[".exportFields"][] = "replyPeriod2";
$tdataaudit_form[".exportFields"][] = "replyPeriod3";
$tdataaudit_form[".exportFields"][] = "opt";
$tdataaudit_form[".exportFields"][] = "repeatStatus";
$tdataaudit_form[".exportFields"][] = "repeatNo";

$tdataaudit_form[".importFields"] = array();

$tdataaudit_form[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","fid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.fid";

	
	
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








	$tdataaudit_form["fid"] = $fdata;
//	ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ref";
	$fdata["GoodName"] = "ref";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.`ref`";

	
	
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




	$tdataaudit_form["ref"] = $fdata;
//	aDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aDate";
	$fdata["GoodName"] = "aDate";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","aDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.aDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 144;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 144;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 20;

	
	
	
		$edata["controlWidth"] = 144;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
	// the end of search options settings




	$tdataaudit_form["aDate"] = $fdata;
//	bulan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bulan";
	$fdata["GoodName"] = "bulan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form","bulan");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bulan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTH(aDate)";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["bulan"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form","tahun");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tahun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "YEAR(aDate)";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["tahun"] = $fdata;
//	aStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "aStatus";
	$fdata["GoodName"] = "aStatus";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","aStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.aStatus";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "fieldValue";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "fieldValue";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataaudit_form["aStatus"] = $fdata;
//	aTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "aTypeCode";
	$fdata["GoodName"] = "aTypeCode";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","aTypeCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aTypeCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.aTypeCode";

	
	
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
	$edata["LookupTable"] = "set_audit_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "aTypeCode";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aName";

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataaudit_form["aTypeCode"] = $fdata;
//	aElementID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "aElementID";
	$fdata["GoodName"] = "aElementID";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","aElementID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "aElementID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.aElementID";

	
	
			
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
	$edata["LookupTable"] = "set_audit_element";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "aElementID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aSubNo";

	
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








	$tdataaudit_form["aElementID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.userID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "userID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullName";

	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "userID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullName";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
	// the end of search options settings




	$tdataaudit_form["userID"] = $fdata;
//	userCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "userCheck";
	$fdata["GoodName"] = "userCheck";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","userCheck");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userCheck";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.userCheck";

	
	
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "userID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




// the field's search options settings
	
	// the end of search options settings




	$tdataaudit_form["userCheck"] = $fdata;
//	userAuditee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "userAuditee";
	$fdata["GoodName"] = "userAuditee";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","userAuditee");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userAuditee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.userAuditee";

	
	
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
	$edata["LookupTable"] = "auditee";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "aid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullName";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




// the field's search options settings
	
	// the end of search options settings




	$tdataaudit_form["userAuditee"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.fid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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








	$tdataaudit_form["opt"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","attachment");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "attachment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.attachment";

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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["attachment"] = $fdata;
//	repeatStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "repeatStatus";
	$fdata["GoodName"] = "repeatStatus";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","repeatStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "repeatStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.repeatStatus";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Ya";
	$edata["LookupValues"][] = "Tidak";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["repeatStatus"] = $fdata;
//	repeatNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "repeatNo";
	$fdata["GoodName"] = "repeatNo";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","repeatNo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "repeatNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.repeatNo";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["repeatNo"] = $fdata;
//	userApprove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "userApprove";
	$fdata["GoodName"] = "userApprove";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","userApprove");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userApprove";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.userApprove";

	
	
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "userID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 144;

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["userApprove"] = $fdata;
//	planID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "planID";
	$fdata["GoodName"] = "planID";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","planID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "planID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.planID";

	
	
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
	$edata["LookupTable"] = "audit_plan";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "planID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aTitle";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["planID"] = $fdata;
//	dateCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dateCheck";
	$fdata["GoodName"] = "dateCheck";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateCheck");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateCheck";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateCheck";

	
	
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
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 144;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dateCheck"] = $fdata;
//	dateApprove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dateApprove";
	$fdata["GoodName"] = "dateApprove";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateApprove");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateApprove";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateApprove";

	
	
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
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 144;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dateApprove"] = $fdata;
//	noteAmend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "noteAmend";
	$fdata["GoodName"] = "noteAmend";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","noteAmend");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "noteAmend";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.noteAmend";

	
	
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
			$edata["nCols"] = 334;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["noteAmend"] = $fdata;
//	noteAmend2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "noteAmend2";
	$fdata["GoodName"] = "noteAmend2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","noteAmend2");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "noteAmend2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.noteAmend2";

	
	
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
			$edata["nCols"] = 334;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["noteAmend2"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form","sector");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "auditee.sector";

	
	
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
	$edata["LookupTable"] = "set_mais_orga";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "sector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sector";

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["sector"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form","department");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "auditee.department";

	
	
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
	$edata["LookupTable"] = "set_mais_orga";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "department";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "department";

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["department"] = $fdata;
//	paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "paid";
	$fdata["GoodName"] = "paid";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form","paid");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "paid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "auditee.paid";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["paid"] = $fdata;
//	agency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "agency";
	$fdata["GoodName"] = "agency";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form","agency");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "agency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "auditee.agency";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["agency"] = $fdata;
//	dateFollowUp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "dateFollowUp";
	$fdata["GoodName"] = "dateFollowUp";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateFollowUp");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateFollowUp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateFollowUp";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["dateFollowUp"] = $fdata;
//	dateFollowUp2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "dateFollowUp2";
	$fdata["GoodName"] = "dateFollowUp2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateFollowUp2");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateFollowUp2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateFollowUp2";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["dateFollowUp2"] = $fdata;
//	dateAnswer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "dateAnswer";
	$fdata["GoodName"] = "dateAnswer";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateAnswer");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "dateAnswer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateAnswer";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dateAnswer"] = $fdata;
//	dateAnswer2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "dateAnswer2";
	$fdata["GoodName"] = "dateAnswer2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateAnswer2");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "dateAnswer2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateAnswer2";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dateAnswer2"] = $fdata;
//	dateAnswer3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "dateAnswer3";
	$fdata["GoodName"] = "dateAnswer3";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateAnswer3");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "dateAnswer3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateAnswer3";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dateAnswer3"] = $fdata;
//	dueDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "dueDate";
	$fdata["GoodName"] = "dueDate";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dueDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dueDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dueDate";

	
	
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
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 144;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dueDate"] = $fdata;
//	dueDate2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dueDate2";
	$fdata["GoodName"] = "dueDate2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dueDate2");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dueDate2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dueDate2";

	
	
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
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 144;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dueDate2"] = $fdata;
//	dueDate3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "dueDate3";
	$fdata["GoodName"] = "dueDate3";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dueDate3");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dueDate3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dueDate3";

	
	
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
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 144;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dueDate3"] = $fdata;
//	dateFinish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "dateFinish";
	$fdata["GoodName"] = "dateFinish";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateFinish");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateFinish";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateFinish";

	
	
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
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 144;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["dateFinish"] = $fdata;
//	dateSend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "dateSend";
	$fdata["GoodName"] = "dateSend";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateSend");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateSend";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateSend";

	
	
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

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["dateSend"] = $fdata;
//	dateRemind
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "dateRemind";
	$fdata["GoodName"] = "dateRemind";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateRemind");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateRemind";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateRemind";

	
	
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

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["dateRemind"] = $fdata;
//	dateRemind2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "dateRemind2";
	$fdata["GoodName"] = "dateRemind2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateRemind2");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateRemind2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateRemind2";

	
	
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

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["dateRemind2"] = $fdata;
//	dateRemind3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "dateRemind3";
	$fdata["GoodName"] = "dateRemind3";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form","dateRemind3");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dateRemind3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.dateRemind3";

	
	
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

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataaudit_form["dateRemind3"] = $fdata;
//	replyPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "replyPeriod";
	$fdata["GoodName"] = "replyPeriod";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form","replyPeriod");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "replyPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(audit_form.dateApprove, audit_form.dateAnswer)";

	
	
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
		
		$edata["controlWidth"] = 24;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["replyPeriod"] = $fdata;
//	replyPeriod2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "replyPeriod2";
	$fdata["GoodName"] = "replyPeriod2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form","replyPeriod2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "replyPeriod2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(audit_form.dateFollowUp, audit_form.dateAnswer2)";

	
	
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
		
		$edata["controlWidth"] = 24;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["replyPeriod2"] = $fdata;
//	replyPeriod3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "replyPeriod3";
	$fdata["GoodName"] = "replyPeriod3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form","replyPeriod3");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "replyPeriod3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATEDIFF(audit_form.dateFollowUp2, audit_form.dateAnswer3)";

	
	
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
		
		$edata["controlWidth"] = 14;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataaudit_form["replyPeriod3"] = $fdata;


$tables_data["audit_form"]=&$tdataaudit_form;
$field_labels["audit_form"] = &$fieldLabelsaudit_form;
$fieldToolTips["audit_form"] = &$fieldToolTipsaudit_form;
$page_titles["audit_form"] = &$pageTitlesaudit_form;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["audit_form"] = array();
//	audit_info
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="audit_info";
		$detailsParam["dOriginalTable"] = "audit_info";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "audit_info";
	$detailsParam["dCaptionTable"] = GetTableCaption("audit_info");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "0";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["audit_form"][$dIndex] = $detailsParam;

	
		$detailsTablesData["audit_form"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["audit_form"][$dIndex]["masterKeys"][]="fid";

				$detailsTablesData["audit_form"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["audit_form"][$dIndex]["detailKeys"][]="fid";

// tables which are master tables for current table (detail)
$masterTablesData["audit_form"] = array();


	
				$strOriginalDetailsTable="audit_plan";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="audit_plan";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "audit_plan";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 0;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["audit_form"][0] = $masterParams;
				$masterTablesData["audit_form"][0]["masterKeys"] = array();
	$masterTablesData["audit_form"][0]["masterKeys"][]="planID";
				$masterTablesData["audit_form"][0]["detailKeys"] = array();
	$masterTablesData["audit_form"][0]["detailKeys"][]="planID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_audit_form()
{
$proto2=array();
$proto2["m_strHead"] = "SELECT";
$proto2["m_strFieldList"] = "audit_form.fid,  audit_form.`ref`,  audit_form.aDate,  MONTH(aDate) AS bulan,  YEAR(aDate) AS tahun,  audit_form.aStatus,  audit_form.aTypeCode,  audit_form.aElementID,  audit_form.userID,  audit_form.userCheck,  audit_form.userAuditee,  audit_form.fid AS opt,  audit_form.attachment,  audit_form.repeatStatus,  audit_form.repeatNo,  audit_form.userApprove,  audit_form.planID,  audit_form.dateCheck,  audit_form.dateApprove,  audit_form.noteAmend,  audit_form.noteAmend2,  auditee.sector,  auditee.department,  auditee.paid,  auditee.agency,  audit_form.dateFollowUp,  audit_form.dateFollowUp2,  audit_form.dateAnswer,  audit_form.dateAnswer2,  audit_form.dateAnswer3,  audit_form.dueDate,  audit_form.dueDate2,  audit_form.dueDate3,  audit_form.dateFinish,  audit_form.dateSend,  audit_form.dateRemind,  audit_form.dateRemind2,  audit_form.dateRemind3,  DATEDIFF(audit_form.dateApprove, audit_form.dateAnswer) AS replyPeriod,  DATEDIFF(audit_form.dateFollowUp, audit_form.dateAnswer2) AS replyPeriod2,  DATEDIFF(audit_form.dateFollowUp2, audit_form.dateAnswer3) AS replyPeriod3";
$proto2["m_strFrom"] = "FROM audit_form  LEFT OUTER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$proto2["m_strWhere"] = "audit_form.noteAmend IS NULL || audit_form.noteAmend='' || audit_form.noteAmend!='Daftar Query Manual'";
$proto2["m_strOrderBy"] = "ORDER BY audit_form.fid DESC";
$proto2["m_strTail"] = "";
			$proto2["cipherer"] = null;
$proto3=array();
$proto3["m_sql"] = "audit_form.noteAmend IS NULL || audit_form.noteAmend='' || audit_form.noteAmend!='Daftar Query Manual'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "noteAmend",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "IS NULL || audit_form.noteAmend='' || audit_form.noteAmend!='Daftar Query Manual'";
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
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto7["m_sql"] = "audit_form.fid";
$proto7["m_srcTableName"] = "audit_form";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto2["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ref",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto9["m_sql"] = "audit_form.`ref`";
$proto9["m_srcTableName"] = "audit_form";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto2["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "aDate",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto11["m_sql"] = "audit_form.aDate";
$proto11["m_srcTableName"] = "audit_form";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto2["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "aDate"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "MONTH(aDate)";
$proto13["m_srcTableName"] = "audit_form";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "bulan";
$obj = new SQLFieldListItem($proto13);

$proto2["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "aDate"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "YEAR";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "YEAR(aDate)";
$proto16["m_srcTableName"] = "audit_form";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "tahun";
$obj = new SQLFieldListItem($proto16);

$proto2["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "aStatus",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto19["m_sql"] = "audit_form.aStatus";
$proto19["m_srcTableName"] = "audit_form";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto2["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "aTypeCode",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto21["m_sql"] = "audit_form.aTypeCode";
$proto21["m_srcTableName"] = "audit_form";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto2["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "aElementID",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto23["m_sql"] = "audit_form.aElementID";
$proto23["m_srcTableName"] = "audit_form";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto2["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto25["m_sql"] = "audit_form.userID";
$proto25["m_srcTableName"] = "audit_form";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto2["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "userCheck",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto27["m_sql"] = "audit_form.userCheck";
$proto27["m_srcTableName"] = "audit_form";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto2["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "userAuditee",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto29["m_sql"] = "audit_form.userAuditee";
$proto29["m_srcTableName"] = "audit_form";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto2["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto31["m_sql"] = "audit_form.fid";
$proto31["m_srcTableName"] = "audit_form";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto31);

$proto2["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto33["m_sql"] = "audit_form.attachment";
$proto33["m_srcTableName"] = "audit_form";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto2["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "repeatStatus",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto35["m_sql"] = "audit_form.repeatStatus";
$proto35["m_srcTableName"] = "audit_form";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto2["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "repeatNo",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto37["m_sql"] = "audit_form.repeatNo";
$proto37["m_srcTableName"] = "audit_form";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto2["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "userApprove",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto39["m_sql"] = "audit_form.userApprove";
$proto39["m_srcTableName"] = "audit_form";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto2["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto41["m_sql"] = "audit_form.planID";
$proto41["m_srcTableName"] = "audit_form";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto2["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "dateCheck",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto43["m_sql"] = "audit_form.dateCheck";
$proto43["m_srcTableName"] = "audit_form";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto2["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "dateApprove",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto45["m_sql"] = "audit_form.dateApprove";
$proto45["m_srcTableName"] = "audit_form";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto2["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "noteAmend",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto47["m_sql"] = "audit_form.noteAmend";
$proto47["m_srcTableName"] = "audit_form";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto2["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "noteAmend2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto49["m_sql"] = "audit_form.noteAmend2";
$proto49["m_srcTableName"] = "audit_form";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto2["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form"
));

$proto51["m_sql"] = "auditee.sector";
$proto51["m_srcTableName"] = "audit_form";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto2["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form"
));

$proto53["m_sql"] = "auditee.department";
$proto53["m_srcTableName"] = "audit_form";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto2["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "paid",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form"
));

$proto55["m_sql"] = "auditee.paid";
$proto55["m_srcTableName"] = "audit_form";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto2["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "agency",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form"
));

$proto57["m_sql"] = "auditee.agency";
$proto57["m_srcTableName"] = "audit_form";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto2["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "dateFollowUp",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto59["m_sql"] = "audit_form.dateFollowUp";
$proto59["m_srcTableName"] = "audit_form";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto2["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "dateFollowUp2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto61["m_sql"] = "audit_form.dateFollowUp2";
$proto61["m_srcTableName"] = "audit_form";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto2["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAnswer",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto63["m_sql"] = "audit_form.dateAnswer";
$proto63["m_srcTableName"] = "audit_form";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto2["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAnswer2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto65["m_sql"] = "audit_form.dateAnswer2";
$proto65["m_srcTableName"] = "audit_form";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto2["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAnswer3",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto67["m_sql"] = "audit_form.dateAnswer3";
$proto67["m_srcTableName"] = "audit_form";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto2["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "dueDate",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto69["m_sql"] = "audit_form.dueDate";
$proto69["m_srcTableName"] = "audit_form";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto2["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "dueDate2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto71["m_sql"] = "audit_form.dueDate2";
$proto71["m_srcTableName"] = "audit_form";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto2["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "dueDate3",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto73["m_sql"] = "audit_form.dueDate3";
$proto73["m_srcTableName"] = "audit_form";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto2["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "dateFinish",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto75["m_sql"] = "audit_form.dateFinish";
$proto75["m_srcTableName"] = "audit_form";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto2["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "dateSend",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto77["m_sql"] = "audit_form.dateSend";
$proto77["m_srcTableName"] = "audit_form";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto2["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "dateRemind",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto79["m_sql"] = "audit_form.dateRemind";
$proto79["m_srcTableName"] = "audit_form";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto2["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "dateRemind2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto81["m_sql"] = "audit_form.dateRemind2";
$proto81["m_srcTableName"] = "audit_form";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto2["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "dateRemind3",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto83["m_sql"] = "audit_form.dateRemind3";
$proto83["m_srcTableName"] = "audit_form";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto2["m_fieldlist"][]=$obj;
						$proto85=array();
			$proto86=array();
$proto86["m_functiontype"] = "SQLF_CUSTOM";
$proto86["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.dateApprove"
));

$proto86["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.dateAnswer"
));

$proto86["m_arguments"][]=$obj;
$proto86["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto86);

$proto85["m_sql"] = "DATEDIFF(audit_form.dateApprove, audit_form.dateAnswer)";
$proto85["m_srcTableName"] = "audit_form";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "replyPeriod";
$obj = new SQLFieldListItem($proto85);

$proto2["m_fieldlist"][]=$obj;
						$proto89=array();
			$proto90=array();
$proto90["m_functiontype"] = "SQLF_CUSTOM";
$proto90["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.dateFollowUp"
));

$proto90["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.dateAnswer2"
));

$proto90["m_arguments"][]=$obj;
$proto90["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto90);

$proto89["m_sql"] = "DATEDIFF(audit_form.dateFollowUp, audit_form.dateAnswer2)";
$proto89["m_srcTableName"] = "audit_form";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "replyPeriod2";
$obj = new SQLFieldListItem($proto89);

$proto2["m_fieldlist"][]=$obj;
						$proto93=array();
			$proto94=array();
$proto94["m_functiontype"] = "SQLF_CUSTOM";
$proto94["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.dateFollowUp2"
));

$proto94["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "audit_form.dateAnswer3"
));

$proto94["m_arguments"][]=$obj;
$proto94["m_strFunctionName"] = "DATEDIFF";
$obj = new SQLFunctionCall($proto94);

$proto93["m_sql"] = "DATEDIFF(audit_form.dateFollowUp2, audit_form.dateAnswer3)";
$proto93["m_srcTableName"] = "audit_form";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "replyPeriod3";
$obj = new SQLFieldListItem($proto93);

$proto2["m_fieldlist"][]=$obj;
$proto2["m_fromlist"] = array();
												$proto97=array();
$proto97["m_link"] = "SQLL_MAIN";
			$proto98=array();
$proto98["m_strName"] = "audit_form";
$proto98["m_srcTableName"] = "audit_form";
$proto98["m_columns"] = array();
$proto98["m_columns"][] = "fid";
$proto98["m_columns"][] = "planID";
$proto98["m_columns"][] = "ref";
$proto98["m_columns"][] = "aDate";
$proto98["m_columns"][] = "dateCheck";
$proto98["m_columns"][] = "dateApprove";
$proto98["m_columns"][] = "dateSend";
$proto98["m_columns"][] = "aStatus";
$proto98["m_columns"][] = "aTypeCode";
$proto98["m_columns"][] = "aElementID";
$proto98["m_columns"][] = "userID";
$proto98["m_columns"][] = "userCheck";
$proto98["m_columns"][] = "userAuditee";
$proto98["m_columns"][] = "userApprove";
$proto98["m_columns"][] = "attachment";
$proto98["m_columns"][] = "dateRemind";
$proto98["m_columns"][] = "dateRemind2";
$proto98["m_columns"][] = "dateRemind3";
$proto98["m_columns"][] = "dueDate";
$proto98["m_columns"][] = "dueDate2";
$proto98["m_columns"][] = "dueDate3";
$proto98["m_columns"][] = "repeatStatus";
$proto98["m_columns"][] = "repeatNo";
$proto98["m_columns"][] = "dateAnswer";
$proto98["m_columns"][] = "dateAnswer2";
$proto98["m_columns"][] = "dateAnswer3";
$proto98["m_columns"][] = "dateFollowUp";
$proto98["m_columns"][] = "dateFollowUp2";
$proto98["m_columns"][] = "dateFinish";
$proto98["m_columns"][] = "noteAmend";
$proto98["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto98);

$proto97["m_table"] = $obj;
$proto97["m_sql"] = "audit_form";
$proto97["m_alias"] = "";
$proto97["m_srcTableName"] = "audit_form";
$proto99=array();
$proto99["m_sql"] = "";
$proto99["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto99["m_column"]=$obj;
$proto99["m_contained"] = array();
$proto99["m_strCase"] = "";
$proto99["m_havingmode"] = false;
$proto99["m_inBrackets"] = false;
$proto99["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto99);

$proto97["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto97);

$proto2["m_fromlist"][]=$obj;
												$proto101=array();
$proto101["m_link"] = "SQLL_LEFTJOIN";
			$proto102=array();
$proto102["m_strName"] = "auditee";
$proto102["m_srcTableName"] = "audit_form";
$proto102["m_columns"] = array();
$proto102["m_columns"][] = "aid";
$proto102["m_columns"][] = "fullname";
$proto102["m_columns"][] = "umail";
$proto102["m_columns"][] = "tel";
$proto102["m_columns"][] = "sector";
$proto102["m_columns"][] = "department";
$proto102["m_columns"][] = "paid";
$proto102["m_columns"][] = "agency";
$proto102["m_columns"][] = "pos";
$obj = new SQLTable($proto102);

$proto101["m_table"] = $obj;
$proto101["m_sql"] = "LEFT OUTER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$proto101["m_alias"] = "";
$proto101["m_srcTableName"] = "audit_form";
$proto103=array();
$proto103["m_sql"] = "audit_form.userAuditee = auditee.aid";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userAuditee",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto103["m_column"]=$obj;
$proto103["m_contained"] = array();
$proto103["m_strCase"] = "= auditee.aid";
$proto103["m_havingmode"] = false;
$proto103["m_inBrackets"] = false;
$proto103["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto103);

$proto101["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto101);

$proto2["m_fromlist"][]=$obj;
$proto2["m_groupby"] = array();
$proto2["m_orderby"] = array();
												$proto105=array();
						$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form"
));

$proto105["m_column"]=$obj;
$proto105["m_bAsc"] = 0;
$proto105["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto105);

$proto2["m_orderby"][]=$obj;					
$proto2["m_srcTableName"]="audit_form";		
$obj = new SQLQuery($proto2);

	return $obj;
}
$queryData_audit_form = createSqlQuery_audit_form();



																																									

$tdataaudit_form[".sqlquery"] = $queryData_audit_form;

include_once(getabspath("include/audit_form_events.php"));
$tableEvents["audit_form"] = new eventclass_audit_form;
$tdataaudit_form[".hasEvents"] = true;

$query = &$queryData_audit_form;
$table = "audit_form";
// here goes EVENT_INIT_TABLE event
global $conn;

//1 -Auditor, 2-teamleader , 3-audithead, 4-mjka
switch ($_SESSION['GroupID'])
	{
	case 1:   //auditor sahaja tgk record dia
		$query->addWhere("userID=".$_SESSION['userID']."");
		break;

	case 2:   //team leader boleh tgk orang bawah dan juga yg dia punya
	//	$query->addWhere("userCheck=".$_SESSION['userID']." OR userID=" .$_SESSION['userID']." " );
	  $query->addWhere("userCheck=$_SESSION[userID] OR userID=$_SESSION[userID] " );
		break;

	case 3:   //head audit boleh tgk yang dianak luluskan sahaja serta boleh buat sendiri semua query
		$query->addWhere("userApprove=".$_SESSION['userID']."   
			OR userID=" .$_SESSION['userID']."
			OR userCheck=" .$_SESSION['userID']."
 " );break;
	};


require_once("include/phpmailer/PHPMailerAutoload.php");
;
unset($query);
?>