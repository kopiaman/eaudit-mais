<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaudit_form_manual = array();
	$tdataaudit_form_manual[".truncateText"] = true;
	$tdataaudit_form_manual[".NumberOfChars"] = 80;
	$tdataaudit_form_manual[".ShortName"] = "audit_form_manual";
	$tdataaudit_form_manual[".OwnerID"] = "";
	$tdataaudit_form_manual[".OriginalTable"] = "audit_form";

//	field labels
$fieldLabelsaudit_form_manual = array();
$fieldToolTipsaudit_form_manual = array();
$pageTitlesaudit_form_manual = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsaudit_form_manual["Malay"] = array();
	$fieldToolTipsaudit_form_manual["Malay"] = array();
	$pageTitlesaudit_form_manual["Malay"] = array();
	$fieldLabelsaudit_form_manual["Malay"]["fid"] = "Fid";
	$fieldToolTipsaudit_form_manual["Malay"]["fid"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["ref"] = "No Rujukan";
	$fieldToolTipsaudit_form_manual["Malay"]["ref"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["aDate"] = "Tarikh Daftar";
	$fieldToolTipsaudit_form_manual["Malay"]["aDate"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["aStatus"] = "Status";
	$fieldToolTipsaudit_form_manual["Malay"]["aStatus"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["userID"] = "Penyedia";
	$fieldToolTipsaudit_form_manual["Malay"]["userID"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["userCheck"] = "Penyemak";
	$fieldToolTipsaudit_form_manual["Malay"]["userCheck"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["userAuditee"] = "Auditi";
	$fieldToolTipsaudit_form_manual["Malay"]["userAuditee"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["opt"] = "Butang Tindakan";
	$fieldToolTipsaudit_form_manual["Malay"]["opt"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["attachment"] = "Attachment";
	$fieldToolTipsaudit_form_manual["Malay"]["attachment"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["bulan"] = "Bulan";
	$fieldToolTipsaudit_form_manual["Malay"]["bulan"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["tahun"] = "Tahun";
	$fieldToolTipsaudit_form_manual["Malay"]["tahun"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["repeatStatus"] = "Kes Ulangan";
	$fieldToolTipsaudit_form_manual["Malay"]["repeatStatus"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["repeatNo"] = "Bil Ulangan";
	$fieldToolTipsaudit_form_manual["Malay"]["repeatNo"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["userApprove"] = "Pelulus";
	$fieldToolTipsaudit_form_manual["Malay"]["userApprove"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["planID"] = "Rancangan";
	$fieldToolTipsaudit_form_manual["Malay"]["planID"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateCheck"] = "Tarikh Semak";
	$fieldToolTipsaudit_form_manual["Malay"]["dateCheck"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateApprove"] = "Tarikh Lulus";
	$fieldToolTipsaudit_form_manual["Malay"]["dateApprove"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["noteAmend"] = "Catatan";
	$fieldToolTipsaudit_form_manual["Malay"]["noteAmend"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["noteAmend2"] = "Pindaan Pelulus";
	$fieldToolTipsaudit_form_manual["Malay"]["noteAmend2"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["sector"] = "Sektor";
	$fieldToolTipsaudit_form_manual["Malay"]["sector"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["department"] = "Bahagian";
	$fieldToolTipsaudit_form_manual["Malay"]["department"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["paid"] = "PAID";
	$fieldToolTipsaudit_form_manual["Malay"]["paid"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["agency"] = "Agensi";
	$fieldToolTipsaudit_form_manual["Malay"]["agency"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateFollowUp"] = "Tarikh Susulan 1";
	$fieldToolTipsaudit_form_manual["Malay"]["dateFollowUp"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateFollowUp2"] = "Tarikh Susulan 2";
	$fieldToolTipsaudit_form_manual["Malay"]["dateFollowUp2"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateAnswer"] = "Tarikh MBalas Auditi";
	$fieldToolTipsaudit_form_manual["Malay"]["dateAnswer"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateAnswer2"] = "Tarikh MBalas Auditi 2";
	$fieldToolTipsaudit_form_manual["Malay"]["dateAnswer2"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateAnswer3"] = "Tarikh MBalas Auditi 3";
	$fieldToolTipsaudit_form_manual["Malay"]["dateAnswer3"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dueDate"] = "T/A Maklum Balas";
	$fieldToolTipsaudit_form_manual["Malay"]["dueDate"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dueDate2"] = "T/A Peringatan 1";
	$fieldToolTipsaudit_form_manual["Malay"]["dueDate2"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dueDate3"] = "T/A Peringatan 2";
	$fieldToolTipsaudit_form_manual["Malay"]["dueDate3"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateFinish"] = "Tarikh Selesai/Tutup";
	$fieldToolTipsaudit_form_manual["Malay"]["dateFinish"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateSend"] = "Tarikh Hantar Query";
	$fieldToolTipsaudit_form_manual["Malay"]["dateSend"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateRemind"] = "Tarikh Diberi Peringatan Mesra";
	$fieldToolTipsaudit_form_manual["Malay"]["dateRemind"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateRemind2"] = "Tarikh Diberi Peringatan 1";
	$fieldToolTipsaudit_form_manual["Malay"]["dateRemind2"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["dateRemind3"] = "Tarikh Diberi Peringatan 2";
	$fieldToolTipsaudit_form_manual["Malay"]["dateRemind3"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["replyPeriod"] = "M/B 1";
	$fieldToolTipsaudit_form_manual["Malay"]["replyPeriod"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["replyPeriod2"] = "M/B 2";
	$fieldToolTipsaudit_form_manual["Malay"]["replyPeriod2"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["replyPeriod3"] = "M/B 3";
	$fieldToolTipsaudit_form_manual["Malay"]["replyPeriod3"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["aElementID"] = "Elemen Audit";
	$fieldToolTipsaudit_form_manual["Malay"]["aElementID"] = "";
	$fieldLabelsaudit_form_manual["Malay"]["aTypeCode"] = "Kategori Auditan";
	$fieldToolTipsaudit_form_manual["Malay"]["aTypeCode"] = "";
	if (count($fieldToolTipsaudit_form_manual["Malay"]))
		$tdataaudit_form_manual[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaudit_form_manual[""] = array();
	$fieldToolTipsaudit_form_manual[""] = array();
	$pageTitlesaudit_form_manual[""] = array();
	if (count($fieldToolTipsaudit_form_manual[""]))
		$tdataaudit_form_manual[".isUseToolTips"] = true;
}


	$tdataaudit_form_manual[".NCSearch"] = true;



$tdataaudit_form_manual[".shortTableName"] = "audit_form_manual";
$tdataaudit_form_manual[".nSecOptions"] = 0;
$tdataaudit_form_manual[".recsPerRowList"] = 1;
$tdataaudit_form_manual[".recsPerRowPrint"] = 1;
$tdataaudit_form_manual[".mainTableOwnerID"] = "";
$tdataaudit_form_manual[".moveNext"] = 1;
$tdataaudit_form_manual[".entityType"] = 1;

$tdataaudit_form_manual[".strOriginalTableName"] = "audit_form";




$tdataaudit_form_manual[".showAddInPopup"] = true;

$tdataaudit_form_manual[".showEditInPopup"] = true;

$tdataaudit_form_manual[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_under_center";
						
	;
$popupPagesLayoutNames["edit"] = "edit_under_center";
$tdataaudit_form_manual[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaudit_form_manual[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataaudit_form_manual[".listAjax"] = true;
else
	$tdataaudit_form_manual[".listAjax"] = false;

	$tdataaudit_form_manual[".audit"] = true;

	$tdataaudit_form_manual[".locking"] = false;

$tdataaudit_form_manual[".edit"] = true;
$tdataaudit_form_manual[".afterEditAction"] = 0;
$tdataaudit_form_manual[".closePopupAfterEdit"] = 1;
$tdataaudit_form_manual[".afterEditActionDetTable"] = "audit_info";

$tdataaudit_form_manual[".add"] = true;
$tdataaudit_form_manual[".afterAddAction"] = 0;
$tdataaudit_form_manual[".closePopupAfterAdd"] = 1;
$tdataaudit_form_manual[".afterAddActionDetTable"] = "audit_info";

$tdataaudit_form_manual[".list"] = true;

$tdataaudit_form_manual[".view"] = true;


$tdataaudit_form_manual[".exportTo"] = true;


$tdataaudit_form_manual[".delete"] = true;

$tdataaudit_form_manual[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataaudit_form_manual[".searchSaving"] = false;
//

$tdataaudit_form_manual[".showSearchPanel"] = true;
		$tdataaudit_form_manual[".flexibleSearch"] = true;

if (isMobile())
	$tdataaudit_form_manual[".isUseAjaxSuggest"] = false;
else
	$tdataaudit_form_manual[".isUseAjaxSuggest"] = true;

$tdataaudit_form_manual[".rowHighlite"] = true;


																						
$tdataaudit_form_manual[".isUsebuttonHandlers"] = true;

$tdataaudit_form_manual[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaudit_form_manual[".isUseTimeForSearch"] = false;




$tdataaudit_form_manual[".detailsLinksOnList"] = "1";

$tdataaudit_form_manual[".allSearchFields"] = array();
$tdataaudit_form_manual[".filterFields"] = array();
$tdataaudit_form_manual[".requiredSearchFields"] = array();

$tdataaudit_form_manual[".allSearchFields"][] = "sector";
	$tdataaudit_form_manual[".allSearchFields"][] = "replyPeriod2";
	$tdataaudit_form_manual[".allSearchFields"][] = "replyPeriod";
	$tdataaudit_form_manual[".allSearchFields"][] = "agency";
	$tdataaudit_form_manual[".allSearchFields"][] = "paid";
	$tdataaudit_form_manual[".allSearchFields"][] = "department";
	$tdataaudit_form_manual[".allSearchFields"][] = "replyPeriod3";
	$tdataaudit_form_manual[".allSearchFields"][] = "planID";
	$tdataaudit_form_manual[".allSearchFields"][] = "aTypeCode";
	$tdataaudit_form_manual[".allSearchFields"][] = "ref";
	$tdataaudit_form_manual[".allSearchFields"][] = "aStatus";
	$tdataaudit_form_manual[".allSearchFields"][] = "bulan";
	$tdataaudit_form_manual[".allSearchFields"][] = "tahun";
	$tdataaudit_form_manual[".allSearchFields"][] = "userID";
	$tdataaudit_form_manual[".allSearchFields"][] = "userCheck";
	$tdataaudit_form_manual[".allSearchFields"][] = "userApprove";
	$tdataaudit_form_manual[".allSearchFields"][] = "userAuditee";
	$tdataaudit_form_manual[".allSearchFields"][] = "repeatStatus";
	$tdataaudit_form_manual[".allSearchFields"][] = "aDate";
	$tdataaudit_form_manual[".allSearchFields"][] = "dateCheck";
	$tdataaudit_form_manual[".allSearchFields"][] = "dateApprove";
	$tdataaudit_form_manual[".allSearchFields"][] = "dueDate";
	$tdataaudit_form_manual[".allSearchFields"][] = "dateAnswer";
	$tdataaudit_form_manual[".allSearchFields"][] = "dateAnswer2";
	$tdataaudit_form_manual[".allSearchFields"][] = "dateAnswer3";
	$tdataaudit_form_manual[".allSearchFields"][] = "dueDate2";
	$tdataaudit_form_manual[".allSearchFields"][] = "dueDate3";
	$tdataaudit_form_manual[".allSearchFields"][] = "dateFinish";
	
$tdataaudit_form_manual[".filterFields"][] = "aTypeCode";

$tdataaudit_form_manual[".googleLikeFields"] = array();
$tdataaudit_form_manual[".googleLikeFields"][] = "aTypeCode";
$tdataaudit_form_manual[".googleLikeFields"][] = "dateAnswer";
$tdataaudit_form_manual[".googleLikeFields"][] = "dateAnswer2";
$tdataaudit_form_manual[".googleLikeFields"][] = "dateAnswer3";
$tdataaudit_form_manual[".googleLikeFields"][] = "dueDate";
$tdataaudit_form_manual[".googleLikeFields"][] = "dueDate2";
$tdataaudit_form_manual[".googleLikeFields"][] = "dueDate3";
$tdataaudit_form_manual[".googleLikeFields"][] = "dateFinish";
$tdataaudit_form_manual[".googleLikeFields"][] = "replyPeriod";
$tdataaudit_form_manual[".googleLikeFields"][] = "replyPeriod2";
$tdataaudit_form_manual[".googleLikeFields"][] = "replyPeriod3";

$tdataaudit_form_manual[".panelSearchFields"] = array();
$tdataaudit_form_manual[".searchPanelOptions"] = array();
$tdataaudit_form_manual[".panelSearchFields"][] = "agency";
	$tdataaudit_form_manual[".panelSearchFields"][] = "department";
	$tdataaudit_form_manual[".panelSearchFields"][] = "sector";
	$tdataaudit_form_manual[".panelSearchFields"][] = "paid";
	$tdataaudit_form_manual[".panelSearchFields"][] = "bulan";
	$tdataaudit_form_manual[".panelSearchFields"][] = "aStatus";
	$tdataaudit_form_manual[".panelSearchFields"][] = "tahun";
	$tdataaudit_form_manual[".panelSearchFields"][] = "userID";
	$tdataaudit_form_manual[".panelSearchFields"][] = "userAuditee";
	$tdataaudit_form_manual[".panelSearchFields"][] = "aDate";
	
$tdataaudit_form_manual[".advSearchFields"] = array();
$tdataaudit_form_manual[".advSearchFields"][] = "sector";
$tdataaudit_form_manual[".advSearchFields"][] = "replyPeriod2";
$tdataaudit_form_manual[".advSearchFields"][] = "replyPeriod";
$tdataaudit_form_manual[".advSearchFields"][] = "agency";
$tdataaudit_form_manual[".advSearchFields"][] = "paid";
$tdataaudit_form_manual[".advSearchFields"][] = "department";
$tdataaudit_form_manual[".advSearchFields"][] = "replyPeriod3";
$tdataaudit_form_manual[".advSearchFields"][] = "planID";
$tdataaudit_form_manual[".advSearchFields"][] = "aTypeCode";
$tdataaudit_form_manual[".advSearchFields"][] = "ref";
$tdataaudit_form_manual[".advSearchFields"][] = "aStatus";
$tdataaudit_form_manual[".advSearchFields"][] = "bulan";
$tdataaudit_form_manual[".advSearchFields"][] = "tahun";
$tdataaudit_form_manual[".advSearchFields"][] = "userID";
$tdataaudit_form_manual[".advSearchFields"][] = "userCheck";
$tdataaudit_form_manual[".advSearchFields"][] = "userApprove";
$tdataaudit_form_manual[".advSearchFields"][] = "userAuditee";
$tdataaudit_form_manual[".advSearchFields"][] = "repeatStatus";
$tdataaudit_form_manual[".advSearchFields"][] = "aDate";
$tdataaudit_form_manual[".advSearchFields"][] = "dateCheck";
$tdataaudit_form_manual[".advSearchFields"][] = "dateApprove";
$tdataaudit_form_manual[".advSearchFields"][] = "dueDate";
$tdataaudit_form_manual[".advSearchFields"][] = "dateAnswer";
$tdataaudit_form_manual[".advSearchFields"][] = "dateAnswer2";
$tdataaudit_form_manual[".advSearchFields"][] = "dateAnswer3";
$tdataaudit_form_manual[".advSearchFields"][] = "dueDate2";
$tdataaudit_form_manual[".advSearchFields"][] = "dueDate3";
$tdataaudit_form_manual[".advSearchFields"][] = "dateFinish";

$tdataaudit_form_manual[".tableType"] = "list";

$tdataaudit_form_manual[".printerPageOrientation"] = 0;
$tdataaudit_form_manual[".nPrinterPageScale"] = 100;

$tdataaudit_form_manual[".nPrinterSplitRecords"] = 40;

$tdataaudit_form_manual[".nPrinterPDFSplitRecords"] = 40;



$tdataaudit_form_manual[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataaudit_form_manual[".pageSize"] = 20;

$tdataaudit_form_manual[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY audit_form.fid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaudit_form_manual[".strOrderBy"] = $tstrOrderBy;

$tdataaudit_form_manual[".orderindexes"] = array();
$tdataaudit_form_manual[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "audit_form.fid");

$tdataaudit_form_manual[".sqlHead"] = "SELECT audit_form.fid,  audit_form.`ref`,  audit_form.aDate,  MONTH(aDate) AS bulan,  YEAR(aDate) AS tahun,  audit_form.aStatus,  audit_form.aTypeCode,  audit_form.aElementID,  audit_form.userID,  audit_form.userCheck,  audit_form.userAuditee,  audit_form.fid AS opt,  audit_form.attachment,  audit_form.repeatStatus,  audit_form.repeatNo,  audit_form.userApprove,  audit_form.planID,  audit_form.dateCheck,  audit_form.dateApprove,  audit_form.noteAmend,  audit_form.noteAmend2,  auditee.sector,  auditee.department,  auditee.paid,  auditee.agency,  audit_form.dateFollowUp,  audit_form.dateFollowUp2,  audit_form.dateAnswer,  audit_form.dateAnswer2,  audit_form.dateAnswer3,  audit_form.dueDate,  audit_form.dueDate2,  audit_form.dueDate3,  audit_form.dateFinish,  audit_form.dateSend,  audit_form.dateRemind,  audit_form.dateRemind2,  audit_form.dateRemind3,  DATEDIFF(audit_form.dateApprove, audit_form.dateAnswer) AS replyPeriod,  DATEDIFF(audit_form.dateFollowUp, audit_form.dateAnswer2) AS replyPeriod2,  DATEDIFF(audit_form.dateFollowUp2, audit_form.dateAnswer3) AS replyPeriod3";
$tdataaudit_form_manual[".sqlFrom"] = "FROM audit_form  LEFT OUTER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$tdataaudit_form_manual[".sqlWhereExpr"] = "audit_form.noteAmend ='Daftar Query Manual'";
$tdataaudit_form_manual[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "planID";
	$tabFields[] = "aStatus";
	$tabFields[] = "userID";
	$tabFields[] = "userCheck";
	$tabFields[] = "userApprove";
	$tabFields[] = "userAuditee";
	$tabFields[] = "repeatStatus";
	$tabFields[] = "repeatNo";
$arrEditTabs[] = array('tabId'=>'Daftar_Query1',
					   'tabName'=>"Daftar Query",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "aDate";
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
$arrEditTabs[] = array('tabId'=>'Peringatan1',
					   'tabName'=>"Tarikh",
					   'nType'=>'1',
					   'nOrder'=>10,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataaudit_form_manual[".arrEditTabs"] = $arrEditTabs;


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
$arrAddTabs[] = array('tabId'=>'Daftar_Query1',
					  'tabName'=>"Daftar Query",
					  'nType'=>'1',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "aDate";
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
$arrAddTabs[] = array('tabId'=>'Peringatan1',
					  'tabName'=>"Tarikh",
					  'nType'=>'1',
					  'nOrder'=>10,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "noteAmend";
$arrAddTabs[] = array('tabId'=>'Pindaan__Catatan1',
					  'tabName'=>"Pindaan/ Catatan",
					  'nType'=>'1',
					  'nOrder'=>25,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataaudit_form_manual[".arrAddTabs"] = $arrAddTabs;

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
$arrViewTabs[] = array('tabId'=>'Pindaan__Catatan1',
					   'tabName'=>"Pindaan/ Catatan",
					   'nType'=>'1',
					   'nOrder'=>29,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataaudit_form_manual[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaudit_form_manual[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaudit_form_manual[".arrGroupsPerPage"] = $arrGPP;


$tableKeysaudit_form_manual = array();
$tableKeysaudit_form_manual[] = "fid";
$tdataaudit_form_manual[".Keys"] = $tableKeysaudit_form_manual;

$tdataaudit_form_manual[".listFields"] = array();
$tdataaudit_form_manual[".listFields"][] = "ref";
$tdataaudit_form_manual[".listFields"][] = "planID";
$tdataaudit_form_manual[".listFields"][] = "aTypeCode";
$tdataaudit_form_manual[".listFields"][] = "aStatus";
$tdataaudit_form_manual[".listFields"][] = "userID";
$tdataaudit_form_manual[".listFields"][] = "userCheck";
$tdataaudit_form_manual[".listFields"][] = "userApprove";
$tdataaudit_form_manual[".listFields"][] = "userAuditee";
$tdataaudit_form_manual[".listFields"][] = "aDate";
$tdataaudit_form_manual[".listFields"][] = "dueDate";
$tdataaudit_form_manual[".listFields"][] = "dueDate2";
$tdataaudit_form_manual[".listFields"][] = "dueDate3";
$tdataaudit_form_manual[".listFields"][] = "replyPeriod";
$tdataaudit_form_manual[".listFields"][] = "replyPeriod2";
$tdataaudit_form_manual[".listFields"][] = "replyPeriod3";

$tdataaudit_form_manual[".hideMobileList"] = array();


$tdataaudit_form_manual[".viewFields"] = array();
$tdataaudit_form_manual[".viewFields"][] = "planID";
$tdataaudit_form_manual[".viewFields"][] = "aTypeCode";
$tdataaudit_form_manual[".viewFields"][] = "ref";
$tdataaudit_form_manual[".viewFields"][] = "aStatus";
$tdataaudit_form_manual[".viewFields"][] = "userID";
$tdataaudit_form_manual[".viewFields"][] = "userCheck";
$tdataaudit_form_manual[".viewFields"][] = "userApprove";
$tdataaudit_form_manual[".viewFields"][] = "userAuditee";
$tdataaudit_form_manual[".viewFields"][] = "repeatStatus";
$tdataaudit_form_manual[".viewFields"][] = "repeatNo";
$tdataaudit_form_manual[".viewFields"][] = "aDate";
$tdataaudit_form_manual[".viewFields"][] = "dateCheck";
$tdataaudit_form_manual[".viewFields"][] = "dateApprove";
$tdataaudit_form_manual[".viewFields"][] = "dateSend";
$tdataaudit_form_manual[".viewFields"][] = "dueDate";
$tdataaudit_form_manual[".viewFields"][] = "dateRemind";
$tdataaudit_form_manual[".viewFields"][] = "dateAnswer";
$tdataaudit_form_manual[".viewFields"][] = "dateFollowUp";
$tdataaudit_form_manual[".viewFields"][] = "dateAnswer2";
$tdataaudit_form_manual[".viewFields"][] = "dateFollowUp2";
$tdataaudit_form_manual[".viewFields"][] = "dateAnswer3";
$tdataaudit_form_manual[".viewFields"][] = "dateRemind2";
$tdataaudit_form_manual[".viewFields"][] = "dueDate2";
$tdataaudit_form_manual[".viewFields"][] = "dateRemind3";
$tdataaudit_form_manual[".viewFields"][] = "dueDate3";
$tdataaudit_form_manual[".viewFields"][] = "dateFinish";

$tdataaudit_form_manual[".addFields"] = array();
$tdataaudit_form_manual[".addFields"][] = "planID";
$tdataaudit_form_manual[".addFields"][] = "aStatus";
$tdataaudit_form_manual[".addFields"][] = "userID";
$tdataaudit_form_manual[".addFields"][] = "userCheck";
$tdataaudit_form_manual[".addFields"][] = "userApprove";
$tdataaudit_form_manual[".addFields"][] = "userAuditee";
$tdataaudit_form_manual[".addFields"][] = "repeatStatus";
$tdataaudit_form_manual[".addFields"][] = "repeatNo";
$tdataaudit_form_manual[".addFields"][] = "aDate";
$tdataaudit_form_manual[".addFields"][] = "dateSend";
$tdataaudit_form_manual[".addFields"][] = "dueDate";
$tdataaudit_form_manual[".addFields"][] = "dateRemind";
$tdataaudit_form_manual[".addFields"][] = "dateAnswer";
$tdataaudit_form_manual[".addFields"][] = "dateFollowUp";
$tdataaudit_form_manual[".addFields"][] = "dateAnswer2";
$tdataaudit_form_manual[".addFields"][] = "dateFollowUp2";
$tdataaudit_form_manual[".addFields"][] = "dateAnswer3";
$tdataaudit_form_manual[".addFields"][] = "dateRemind2";
$tdataaudit_form_manual[".addFields"][] = "dueDate2";
$tdataaudit_form_manual[".addFields"][] = "dateRemind3";
$tdataaudit_form_manual[".addFields"][] = "dueDate3";
$tdataaudit_form_manual[".addFields"][] = "dateFinish";
$tdataaudit_form_manual[".addFields"][] = "noteAmend";

$tdataaudit_form_manual[".masterListFields"] = array();
$tdataaudit_form_manual[".masterListFields"][] = "replyPeriod2";
$tdataaudit_form_manual[".masterListFields"][] = "replyPeriod";
$tdataaudit_form_manual[".masterListFields"][] = "agency";
$tdataaudit_form_manual[".masterListFields"][] = "paid";
$tdataaudit_form_manual[".masterListFields"][] = "department";
$tdataaudit_form_manual[".masterListFields"][] = "sector";
$tdataaudit_form_manual[".masterListFields"][] = "replyPeriod3";
$tdataaudit_form_manual[".masterListFields"][] = "fid";
$tdataaudit_form_manual[".masterListFields"][] = "planID";
$tdataaudit_form_manual[".masterListFields"][] = "aTypeCode";
$tdataaudit_form_manual[".masterListFields"][] = "aElementID";
$tdataaudit_form_manual[".masterListFields"][] = "ref";
$tdataaudit_form_manual[".masterListFields"][] = "aStatus";
$tdataaudit_form_manual[".masterListFields"][] = "bulan";
$tdataaudit_form_manual[".masterListFields"][] = "userID";
$tdataaudit_form_manual[".masterListFields"][] = "tahun";
$tdataaudit_form_manual[".masterListFields"][] = "userCheck";
$tdataaudit_form_manual[".masterListFields"][] = "attachment";
$tdataaudit_form_manual[".masterListFields"][] = "userApprove";
$tdataaudit_form_manual[".masterListFields"][] = "userAuditee";
$tdataaudit_form_manual[".masterListFields"][] = "repeatStatus";
$tdataaudit_form_manual[".masterListFields"][] = "repeatNo";
$tdataaudit_form_manual[".masterListFields"][] = "aDate";
$tdataaudit_form_manual[".masterListFields"][] = "opt";
$tdataaudit_form_manual[".masterListFields"][] = "dateCheck";
$tdataaudit_form_manual[".masterListFields"][] = "dateApprove";
$tdataaudit_form_manual[".masterListFields"][] = "dateSend";
$tdataaudit_form_manual[".masterListFields"][] = "dueDate";
$tdataaudit_form_manual[".masterListFields"][] = "dateRemind";
$tdataaudit_form_manual[".masterListFields"][] = "dateAnswer";
$tdataaudit_form_manual[".masterListFields"][] = "dateFollowUp";
$tdataaudit_form_manual[".masterListFields"][] = "dateAnswer2";
$tdataaudit_form_manual[".masterListFields"][] = "dateFollowUp2";
$tdataaudit_form_manual[".masterListFields"][] = "dateAnswer3";
$tdataaudit_form_manual[".masterListFields"][] = "dateRemind2";
$tdataaudit_form_manual[".masterListFields"][] = "dueDate2";
$tdataaudit_form_manual[".masterListFields"][] = "dateRemind3";
$tdataaudit_form_manual[".masterListFields"][] = "dueDate3";
$tdataaudit_form_manual[".masterListFields"][] = "dateFinish";
$tdataaudit_form_manual[".masterListFields"][] = "noteAmend";
$tdataaudit_form_manual[".masterListFields"][] = "noteAmend2";

$tdataaudit_form_manual[".inlineAddFields"] = array();

$tdataaudit_form_manual[".editFields"] = array();
$tdataaudit_form_manual[".editFields"][] = "planID";
$tdataaudit_form_manual[".editFields"][] = "aStatus";
$tdataaudit_form_manual[".editFields"][] = "userID";
$tdataaudit_form_manual[".editFields"][] = "userCheck";
$tdataaudit_form_manual[".editFields"][] = "userApprove";
$tdataaudit_form_manual[".editFields"][] = "userAuditee";
$tdataaudit_form_manual[".editFields"][] = "repeatStatus";
$tdataaudit_form_manual[".editFields"][] = "repeatNo";
$tdataaudit_form_manual[".editFields"][] = "aDate";
$tdataaudit_form_manual[".editFields"][] = "dateSend";
$tdataaudit_form_manual[".editFields"][] = "dueDate";
$tdataaudit_form_manual[".editFields"][] = "dateRemind";
$tdataaudit_form_manual[".editFields"][] = "dateAnswer";
$tdataaudit_form_manual[".editFields"][] = "dateFollowUp";
$tdataaudit_form_manual[".editFields"][] = "dateAnswer2";
$tdataaudit_form_manual[".editFields"][] = "dateFollowUp2";
$tdataaudit_form_manual[".editFields"][] = "dateAnswer3";
$tdataaudit_form_manual[".editFields"][] = "dateRemind2";
$tdataaudit_form_manual[".editFields"][] = "dueDate2";
$tdataaudit_form_manual[".editFields"][] = "dateRemind3";
$tdataaudit_form_manual[".editFields"][] = "dueDate3";
$tdataaudit_form_manual[".editFields"][] = "dateFinish";

$tdataaudit_form_manual[".inlineEditFields"] = array();

$tdataaudit_form_manual[".exportFields"] = array();
$tdataaudit_form_manual[".exportFields"][] = "replyPeriod2";
$tdataaudit_form_manual[".exportFields"][] = "replyPeriod";
$tdataaudit_form_manual[".exportFields"][] = "replyPeriod3";
$tdataaudit_form_manual[".exportFields"][] = "fid";
$tdataaudit_form_manual[".exportFields"][] = "planID";
$tdataaudit_form_manual[".exportFields"][] = "aTypeCode";
$tdataaudit_form_manual[".exportFields"][] = "ref";
$tdataaudit_form_manual[".exportFields"][] = "bulan";
$tdataaudit_form_manual[".exportFields"][] = "aStatus";
$tdataaudit_form_manual[".exportFields"][] = "userID";
$tdataaudit_form_manual[".exportFields"][] = "tahun";
$tdataaudit_form_manual[".exportFields"][] = "userCheck";
$tdataaudit_form_manual[".exportFields"][] = "userApprove";
$tdataaudit_form_manual[".exportFields"][] = "attachment";
$tdataaudit_form_manual[".exportFields"][] = "userAuditee";
$tdataaudit_form_manual[".exportFields"][] = "repeatStatus";
$tdataaudit_form_manual[".exportFields"][] = "repeatNo";
$tdataaudit_form_manual[".exportFields"][] = "aDate";
$tdataaudit_form_manual[".exportFields"][] = "dateCheck";
$tdataaudit_form_manual[".exportFields"][] = "dateApprove";
$tdataaudit_form_manual[".exportFields"][] = "dateSend";
$tdataaudit_form_manual[".exportFields"][] = "dueDate";
$tdataaudit_form_manual[".exportFields"][] = "dateRemind";
$tdataaudit_form_manual[".exportFields"][] = "dateFollowUp";
$tdataaudit_form_manual[".exportFields"][] = "dateFollowUp2";
$tdataaudit_form_manual[".exportFields"][] = "dateRemind2";
$tdataaudit_form_manual[".exportFields"][] = "dueDate2";
$tdataaudit_form_manual[".exportFields"][] = "dateRemind3";
$tdataaudit_form_manual[".exportFields"][] = "dueDate3";
$tdataaudit_form_manual[".exportFields"][] = "dateFinish";

$tdataaudit_form_manual[".importFields"] = array();

$tdataaudit_form_manual[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","fid");
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








	$tdataaudit_form_manual["fid"] = $fdata;
//	ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ref";
	$fdata["GoodName"] = "ref";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","ref");
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




	$tdataaudit_form_manual["ref"] = $fdata;
//	aDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aDate";
	$fdata["GoodName"] = "aDate";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","aDate");
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
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataaudit_form_manual["aDate"] = $fdata;
//	bulan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bulan";
	$fdata["GoodName"] = "bulan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","bulan");
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




	$tdataaudit_form_manual["bulan"] = $fdata;
//	tahun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tahun";
	$fdata["GoodName"] = "tahun";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","tahun");
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




	$tdataaudit_form_manual["tahun"] = $fdata;
//	aStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "aStatus";
	$fdata["GoodName"] = "aStatus";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","aStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataaudit_form_manual["aStatus"] = $fdata;
//	aTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "aTypeCode";
	$fdata["GoodName"] = "aTypeCode";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","aTypeCode");
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


	$tdataaudit_form_manual["aTypeCode"] = $fdata;
//	aElementID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "aElementID";
	$fdata["GoodName"] = "aElementID";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","aElementID");
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








	$tdataaudit_form_manual["aElementID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","userID");
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
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataaudit_form_manual["userID"] = $fdata;
//	userCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "userCheck";
	$fdata["GoodName"] = "userCheck";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","userCheck");
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
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataaudit_form_manual["userCheck"] = $fdata;
//	userAuditee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "userAuditee";
	$fdata["GoodName"] = "userAuditee";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","userAuditee");
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
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataaudit_form_manual["userAuditee"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.fid";

	
	
			
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








	$tdataaudit_form_manual["opt"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","attachment");
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








	$tdataaudit_form_manual["attachment"] = $fdata;
//	repeatStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "repeatStatus";
	$fdata["GoodName"] = "repeatStatus";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","repeatStatus");
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




	$tdataaudit_form_manual["repeatStatus"] = $fdata;
//	repeatNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "repeatNo";
	$fdata["GoodName"] = "repeatNo";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","repeatNo");
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








	$tdataaudit_form_manual["repeatNo"] = $fdata;
//	userApprove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "userApprove";
	$fdata["GoodName"] = "userApprove";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","userApprove");
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




	$tdataaudit_form_manual["userApprove"] = $fdata;
//	planID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "planID";
	$fdata["GoodName"] = "planID";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","planID");
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




	$tdataaudit_form_manual["planID"] = $fdata;
//	dateCheck
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dateCheck";
	$fdata["GoodName"] = "dateCheck";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateCheck");
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




	$tdataaudit_form_manual["dateCheck"] = $fdata;
//	dateApprove
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dateApprove";
	$fdata["GoodName"] = "dateApprove";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateApprove");
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




	$tdataaudit_form_manual["dateApprove"] = $fdata;
//	noteAmend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "noteAmend";
	$fdata["GoodName"] = "noteAmend";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","noteAmend");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	
	
	
	
		$fdata["strField"] = "noteAmend";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.noteAmend";

	
	
			
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








	$tdataaudit_form_manual["noteAmend"] = $fdata;
//	noteAmend2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "noteAmend2";
	$fdata["GoodName"] = "noteAmend2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","noteAmend2");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "noteAmend2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audit_form.noteAmend2";

	
	
			
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








	$tdataaudit_form_manual["noteAmend2"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","sector");
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




	$tdataaudit_form_manual["sector"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","department");
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




	$tdataaudit_form_manual["department"] = $fdata;
//	paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "paid";
	$fdata["GoodName"] = "paid";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","paid");
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




	$tdataaudit_form_manual["paid"] = $fdata;
//	agency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "agency";
	$fdata["GoodName"] = "agency";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","agency");
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




	$tdataaudit_form_manual["agency"] = $fdata;
//	dateFollowUp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "dateFollowUp";
	$fdata["GoodName"] = "dateFollowUp";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateFollowUp");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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








	$tdataaudit_form_manual["dateFollowUp"] = $fdata;
//	dateFollowUp2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "dateFollowUp2";
	$fdata["GoodName"] = "dateFollowUp2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateFollowUp2");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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








	$tdataaudit_form_manual["dateFollowUp2"] = $fdata;
//	dateAnswer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "dateAnswer";
	$fdata["GoodName"] = "dateAnswer";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateAnswer");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataaudit_form_manual["dateAnswer"] = $fdata;
//	dateAnswer2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "dateAnswer2";
	$fdata["GoodName"] = "dateAnswer2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateAnswer2");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataaudit_form_manual["dateAnswer2"] = $fdata;
//	dateAnswer3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "dateAnswer3";
	$fdata["GoodName"] = "dateAnswer3";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateAnswer3");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataaudit_form_manual["dateAnswer3"] = $fdata;
//	dueDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "dueDate";
	$fdata["GoodName"] = "dueDate";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dueDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 1;

	
	
	
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




	$tdataaudit_form_manual["dueDate"] = $fdata;
//	dueDate2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dueDate2";
	$fdata["GoodName"] = "dueDate2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dueDate2");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 10;
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




	$tdataaudit_form_manual["dueDate2"] = $fdata;
//	dueDate3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "dueDate3";
	$fdata["GoodName"] = "dueDate3";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dueDate3");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
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

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 10;
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




	$tdataaudit_form_manual["dueDate3"] = $fdata;
//	dateFinish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "dateFinish";
	$fdata["GoodName"] = "dateFinish";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateFinish");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
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

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 10;
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




	$tdataaudit_form_manual["dateFinish"] = $fdata;
//	dateSend
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "dateSend";
	$fdata["GoodName"] = "dateSend";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateSend");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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








	$tdataaudit_form_manual["dateSend"] = $fdata;
//	dateRemind
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "dateRemind";
	$fdata["GoodName"] = "dateRemind";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateRemind");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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








	$tdataaudit_form_manual["dateRemind"] = $fdata;
//	dateRemind2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "dateRemind2";
	$fdata["GoodName"] = "dateRemind2";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateRemind2");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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








	$tdataaudit_form_manual["dateRemind2"] = $fdata;
//	dateRemind3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "dateRemind3";
	$fdata["GoodName"] = "dateRemind3";
	$fdata["ownerTable"] = "audit_form";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","dateRemind3");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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








	$tdataaudit_form_manual["dateRemind3"] = $fdata;
//	replyPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "replyPeriod";
	$fdata["GoodName"] = "replyPeriod";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","replyPeriod");
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




	$tdataaudit_form_manual["replyPeriod"] = $fdata;
//	replyPeriod2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "replyPeriod2";
	$fdata["GoodName"] = "replyPeriod2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","replyPeriod2");
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




	$tdataaudit_form_manual["replyPeriod2"] = $fdata;
//	replyPeriod3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "replyPeriod3";
	$fdata["GoodName"] = "replyPeriod3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("audit_form_manual","replyPeriod3");
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




	$tdataaudit_form_manual["replyPeriod3"] = $fdata;


$tables_data["audit_form_manual"]=&$tdataaudit_form_manual;
$field_labels["audit_form_manual"] = &$fieldLabelsaudit_form_manual;
$fieldToolTips["audit_form_manual"] = &$fieldToolTipsaudit_form_manual;
$page_titles["audit_form_manual"] = &$pageTitlesaudit_form_manual;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["audit_form_manual"] = array();
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
		
	$detailsTablesData["audit_form_manual"][$dIndex] = $detailsParam;

	
		$detailsTablesData["audit_form_manual"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["audit_form_manual"][$dIndex]["masterKeys"][]="fid";

				$detailsTablesData["audit_form_manual"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["audit_form_manual"][$dIndex]["detailKeys"][]="fid";

// tables which are master tables for current table (detail)
$masterTablesData["audit_form_manual"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_audit_form_manual()
{
$proto2=array();
$proto2["m_strHead"] = "SELECT";
$proto2["m_strFieldList"] = "audit_form.fid,  audit_form.`ref`,  audit_form.aDate,  MONTH(aDate) AS bulan,  YEAR(aDate) AS tahun,  audit_form.aStatus,  audit_form.aTypeCode,  audit_form.aElementID,  audit_form.userID,  audit_form.userCheck,  audit_form.userAuditee,  audit_form.fid AS opt,  audit_form.attachment,  audit_form.repeatStatus,  audit_form.repeatNo,  audit_form.userApprove,  audit_form.planID,  audit_form.dateCheck,  audit_form.dateApprove,  audit_form.noteAmend,  audit_form.noteAmend2,  auditee.sector,  auditee.department,  auditee.paid,  auditee.agency,  audit_form.dateFollowUp,  audit_form.dateFollowUp2,  audit_form.dateAnswer,  audit_form.dateAnswer2,  audit_form.dateAnswer3,  audit_form.dueDate,  audit_form.dueDate2,  audit_form.dueDate3,  audit_form.dateFinish,  audit_form.dateSend,  audit_form.dateRemind,  audit_form.dateRemind2,  audit_form.dateRemind3,  DATEDIFF(audit_form.dateApprove, audit_form.dateAnswer) AS replyPeriod,  DATEDIFF(audit_form.dateFollowUp, audit_form.dateAnswer2) AS replyPeriod2,  DATEDIFF(audit_form.dateFollowUp2, audit_form.dateAnswer3) AS replyPeriod3";
$proto2["m_strFrom"] = "FROM audit_form  LEFT OUTER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$proto2["m_strWhere"] = "audit_form.noteAmend ='Daftar Query Manual'";
$proto2["m_strOrderBy"] = "ORDER BY audit_form.fid DESC";
$proto2["m_strTail"] = "";
			$proto2["cipherer"] = null;
$proto3=array();
$proto3["m_sql"] = "audit_form.noteAmend ='Daftar Query Manual'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "noteAmend",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "='Daftar Query Manual'";
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
	"m_srcTableName" => "audit_form_manual"
));

$proto7["m_sql"] = "audit_form.fid";
$proto7["m_srcTableName"] = "audit_form_manual";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto2["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ref",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto9["m_sql"] = "audit_form.`ref`";
$proto9["m_srcTableName"] = "audit_form_manual";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto2["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "aDate",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto11["m_sql"] = "audit_form.aDate";
$proto11["m_srcTableName"] = "audit_form_manual";
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
$proto13["m_srcTableName"] = "audit_form_manual";
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
$proto16["m_srcTableName"] = "audit_form_manual";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "tahun";
$obj = new SQLFieldListItem($proto16);

$proto2["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "aStatus",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto19["m_sql"] = "audit_form.aStatus";
$proto19["m_srcTableName"] = "audit_form_manual";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto2["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "aTypeCode",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto21["m_sql"] = "audit_form.aTypeCode";
$proto21["m_srcTableName"] = "audit_form_manual";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto2["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "aElementID",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto23["m_sql"] = "audit_form.aElementID";
$proto23["m_srcTableName"] = "audit_form_manual";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto2["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto25["m_sql"] = "audit_form.userID";
$proto25["m_srcTableName"] = "audit_form_manual";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto2["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "userCheck",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto27["m_sql"] = "audit_form.userCheck";
$proto27["m_srcTableName"] = "audit_form_manual";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto2["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "userAuditee",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto29["m_sql"] = "audit_form.userAuditee";
$proto29["m_srcTableName"] = "audit_form_manual";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto2["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto31["m_sql"] = "audit_form.fid";
$proto31["m_srcTableName"] = "audit_form_manual";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto31);

$proto2["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto33["m_sql"] = "audit_form.attachment";
$proto33["m_srcTableName"] = "audit_form_manual";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto2["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "repeatStatus",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto35["m_sql"] = "audit_form.repeatStatus";
$proto35["m_srcTableName"] = "audit_form_manual";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto2["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "repeatNo",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto37["m_sql"] = "audit_form.repeatNo";
$proto37["m_srcTableName"] = "audit_form_manual";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto2["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "userApprove",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto39["m_sql"] = "audit_form.userApprove";
$proto39["m_srcTableName"] = "audit_form_manual";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto2["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "planID",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto41["m_sql"] = "audit_form.planID";
$proto41["m_srcTableName"] = "audit_form_manual";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto2["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "dateCheck",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto43["m_sql"] = "audit_form.dateCheck";
$proto43["m_srcTableName"] = "audit_form_manual";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto2["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "dateApprove",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto45["m_sql"] = "audit_form.dateApprove";
$proto45["m_srcTableName"] = "audit_form_manual";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto2["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "noteAmend",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto47["m_sql"] = "audit_form.noteAmend";
$proto47["m_srcTableName"] = "audit_form_manual";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto2["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "noteAmend2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto49["m_sql"] = "audit_form.noteAmend2";
$proto49["m_srcTableName"] = "audit_form_manual";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto2["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form_manual"
));

$proto51["m_sql"] = "auditee.sector";
$proto51["m_srcTableName"] = "audit_form_manual";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto2["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form_manual"
));

$proto53["m_sql"] = "auditee.department";
$proto53["m_srcTableName"] = "audit_form_manual";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto2["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "paid",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form_manual"
));

$proto55["m_sql"] = "auditee.paid";
$proto55["m_srcTableName"] = "audit_form_manual";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto2["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "agency",
	"m_strTable" => "auditee",
	"m_srcTableName" => "audit_form_manual"
));

$proto57["m_sql"] = "auditee.agency";
$proto57["m_srcTableName"] = "audit_form_manual";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto2["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "dateFollowUp",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto59["m_sql"] = "audit_form.dateFollowUp";
$proto59["m_srcTableName"] = "audit_form_manual";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto2["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "dateFollowUp2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto61["m_sql"] = "audit_form.dateFollowUp2";
$proto61["m_srcTableName"] = "audit_form_manual";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto2["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAnswer",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto63["m_sql"] = "audit_form.dateAnswer";
$proto63["m_srcTableName"] = "audit_form_manual";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto2["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAnswer2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto65["m_sql"] = "audit_form.dateAnswer2";
$proto65["m_srcTableName"] = "audit_form_manual";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto2["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "dateAnswer3",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto67["m_sql"] = "audit_form.dateAnswer3";
$proto67["m_srcTableName"] = "audit_form_manual";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto2["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "dueDate",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto69["m_sql"] = "audit_form.dueDate";
$proto69["m_srcTableName"] = "audit_form_manual";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto2["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "dueDate2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto71["m_sql"] = "audit_form.dueDate2";
$proto71["m_srcTableName"] = "audit_form_manual";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto2["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "dueDate3",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto73["m_sql"] = "audit_form.dueDate3";
$proto73["m_srcTableName"] = "audit_form_manual";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto2["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "dateFinish",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto75["m_sql"] = "audit_form.dateFinish";
$proto75["m_srcTableName"] = "audit_form_manual";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto2["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "dateSend",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto77["m_sql"] = "audit_form.dateSend";
$proto77["m_srcTableName"] = "audit_form_manual";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto2["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "dateRemind",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto79["m_sql"] = "audit_form.dateRemind";
$proto79["m_srcTableName"] = "audit_form_manual";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto2["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "dateRemind2",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto81["m_sql"] = "audit_form.dateRemind2";
$proto81["m_srcTableName"] = "audit_form_manual";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto2["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "dateRemind3",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
));

$proto83["m_sql"] = "audit_form.dateRemind3";
$proto83["m_srcTableName"] = "audit_form_manual";
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
$proto85["m_srcTableName"] = "audit_form_manual";
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
$proto89["m_srcTableName"] = "audit_form_manual";
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
$proto93["m_srcTableName"] = "audit_form_manual";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "replyPeriod3";
$obj = new SQLFieldListItem($proto93);

$proto2["m_fieldlist"][]=$obj;
$proto2["m_fromlist"] = array();
												$proto97=array();
$proto97["m_link"] = "SQLL_MAIN";
			$proto98=array();
$proto98["m_strName"] = "audit_form";
$proto98["m_srcTableName"] = "audit_form_manual";
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
$proto97["m_srcTableName"] = "audit_form_manual";
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
$proto102["m_srcTableName"] = "audit_form_manual";
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
$proto101["m_srcTableName"] = "audit_form_manual";
$proto103=array();
$proto103["m_sql"] = "audit_form.userAuditee = auditee.aid";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userAuditee",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "audit_form_manual"
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
	"m_srcTableName" => "audit_form_manual"
));

$proto105["m_column"]=$obj;
$proto105["m_bAsc"] = 0;
$proto105["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto105);

$proto2["m_orderby"][]=$obj;					
$proto2["m_srcTableName"]="audit_form_manual";		
$obj = new SQLQuery($proto2);

	return $obj;
}
$queryData_audit_form_manual = createSqlQuery_audit_form_manual();



																																									

$tdataaudit_form_manual[".sqlquery"] = $queryData_audit_form_manual;

include_once(getabspath("include/audit_form_manual_events.php"));
$tableEvents["audit_form_manual"] = new eventclass_audit_form_manual;
$tdataaudit_form_manual[".hasEvents"] = true;

$query = &$queryData_audit_form_manual;
$table = "audit_form_manual";
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