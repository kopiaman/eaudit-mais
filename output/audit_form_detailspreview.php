<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/audit_form_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "Coral1Coral1", "MobileCoral1");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["audit_form_detailspreview"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button1");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

if($mastertable == "audit_plan")
{
	$where = "";
		$formattedValue = make_db_value("planID",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$where .= $pageObject->getFieldSQLDecrypt("planID") . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt("planID") . "=" . $formattedValue;
}

$str = SecuritySQL("Search", $strTableName);
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where, $pageObject->connection);
$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["fid"]));
	
	
	//	ref - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ref", $data, $keylink);
			$row["ref_value"] = $value;
			$format = $pSet->getViewFormat("ref");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ref")))
				$class = ' rnr-field-number';
			$row["ref_class"] = $class;
	//	aDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("aDate", $data, $keylink);
			$row["aDate_value"] = $value;
			$format = $pSet->getViewFormat("aDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("aDate")))
				$class = ' rnr-field-number';
			$row["aDate_class"] = $class;
	//	aStatus - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("aStatus", $data, $keylink);
			$row["aStatus_value"] = $value;
			$format = $pSet->getViewFormat("aStatus");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("aStatus")))
				$class = ' rnr-field-number';
			$row["aStatus_class"] = $class;
	//	aTypeCode - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("aTypeCode", $data, $keylink);
			$row["aTypeCode_value"] = $value;
			$format = $pSet->getViewFormat("aTypeCode");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("aTypeCode")))
				$class = ' rnr-field-number';
			$row["aTypeCode_class"] = $class;
	//	userID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("userID", $data, $keylink);
			$row["userID_value"] = $value;
			$format = $pSet->getViewFormat("userID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("userID")))
				$class = ' rnr-field-number';
			$row["userID_class"] = $class;
	//	userCheck - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("userCheck", $data, $keylink);
			$row["userCheck_value"] = $value;
			$format = $pSet->getViewFormat("userCheck");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("userCheck")))
				$class = ' rnr-field-number';
			$row["userCheck_class"] = $class;
	//	userAuditee - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("userAuditee", $data, $keylink);
			$row["userAuditee_value"] = $value;
			$format = $pSet->getViewFormat("userAuditee");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("userAuditee")))
				$class = ' rnr-field-number';
			$row["userAuditee_class"] = $class;
	//	opt - Custom
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("opt", $data, $keylink);
			$row["opt_value"] = $value;
			$format = $pSet->getViewFormat("opt");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("opt")))
				$class = ' rnr-field-number';
			$row["opt_class"] = $class;
	//	repeatStatus - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("repeatStatus", $data, $keylink);
			$row["repeatStatus_value"] = $value;
			$format = $pSet->getViewFormat("repeatStatus");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("repeatStatus")))
				$class = ' rnr-field-number';
			$row["repeatStatus_class"] = $class;
	//	repeatNo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("repeatNo", $data, $keylink);
			$row["repeatNo_value"] = $value;
			$format = $pSet->getViewFormat("repeatNo");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("repeatNo")))
				$class = ' rnr-field-number';
			$row["repeatNo_class"] = $class;
	//	userApprove - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("userApprove", $data, $keylink);
			$row["userApprove_value"] = $value;
			$format = $pSet->getViewFormat("userApprove");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("userApprove")))
				$class = ' rnr-field-number';
			$row["userApprove_class"] = $class;
	//	planID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("planID", $data, $keylink);
			$row["planID_value"] = $value;
			$format = $pSet->getViewFormat("planID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("planID")))
				$class = ' rnr-field-number';
			$row["planID_class"] = $class;
	//	dateCheck - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateCheck", $data, $keylink);
			$row["dateCheck_value"] = $value;
			$format = $pSet->getViewFormat("dateCheck");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateCheck")))
				$class = ' rnr-field-number';
			$row["dateCheck_class"] = $class;
	//	dateApprove - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateApprove", $data, $keylink);
			$row["dateApprove_value"] = $value;
			$format = $pSet->getViewFormat("dateApprove");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateApprove")))
				$class = ' rnr-field-number';
			$row["dateApprove_class"] = $class;
	//	noteAmend - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("noteAmend", $data, $keylink);
			$row["noteAmend_value"] = $value;
			$format = $pSet->getViewFormat("noteAmend");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("noteAmend")))
				$class = ' rnr-field-number';
			$row["noteAmend_class"] = $class;
	//	noteAmend2 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("noteAmend2", $data, $keylink);
			$row["noteAmend2_value"] = $value;
			$format = $pSet->getViewFormat("noteAmend2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("noteAmend2")))
				$class = ' rnr-field-number';
			$row["noteAmend2_class"] = $class;
	//	dateFollowUp - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateFollowUp", $data, $keylink);
			$row["dateFollowUp_value"] = $value;
			$format = $pSet->getViewFormat("dateFollowUp");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateFollowUp")))
				$class = ' rnr-field-number';
			$row["dateFollowUp_class"] = $class;
	//	dateFollowUp2 - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateFollowUp2", $data, $keylink);
			$row["dateFollowUp2_value"] = $value;
			$format = $pSet->getViewFormat("dateFollowUp2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateFollowUp2")))
				$class = ' rnr-field-number';
			$row["dateFollowUp2_class"] = $class;
	//	dateAnswer - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateAnswer", $data, $keylink);
			$row["dateAnswer_value"] = $value;
			$format = $pSet->getViewFormat("dateAnswer");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateAnswer")))
				$class = ' rnr-field-number';
			$row["dateAnswer_class"] = $class;
	//	dateAnswer2 - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateAnswer2", $data, $keylink);
			$row["dateAnswer2_value"] = $value;
			$format = $pSet->getViewFormat("dateAnswer2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateAnswer2")))
				$class = ' rnr-field-number';
			$row["dateAnswer2_class"] = $class;
	//	dateAnswer3 - Datetime
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateAnswer3", $data, $keylink);
			$row["dateAnswer3_value"] = $value;
			$format = $pSet->getViewFormat("dateAnswer3");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateAnswer3")))
				$class = ' rnr-field-number';
			$row["dateAnswer3_class"] = $class;
	//	dueDate - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dueDate", $data, $keylink);
			$row["dueDate_value"] = $value;
			$format = $pSet->getViewFormat("dueDate");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dueDate")))
				$class = ' rnr-field-number';
			$row["dueDate_class"] = $class;
	//	dueDate2 - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dueDate2", $data, $keylink);
			$row["dueDate2_value"] = $value;
			$format = $pSet->getViewFormat("dueDate2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dueDate2")))
				$class = ' rnr-field-number';
			$row["dueDate2_class"] = $class;
	//	dueDate3 - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dueDate3", $data, $keylink);
			$row["dueDate3_value"] = $value;
			$format = $pSet->getViewFormat("dueDate3");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dueDate3")))
				$class = ' rnr-field-number';
			$row["dueDate3_class"] = $class;
	//	dateFinish - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateFinish", $data, $keylink);
			$row["dateFinish_value"] = $value;
			$format = $pSet->getViewFormat("dateFinish");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateFinish")))
				$class = ' rnr-field-number';
			$row["dateFinish_class"] = $class;
	//	dateSend - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateSend", $data, $keylink);
			$row["dateSend_value"] = $value;
			$format = $pSet->getViewFormat("dateSend");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateSend")))
				$class = ' rnr-field-number';
			$row["dateSend_class"] = $class;
	//	dateRemind - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateRemind", $data, $keylink);
			$row["dateRemind_value"] = $value;
			$format = $pSet->getViewFormat("dateRemind");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateRemind")))
				$class = ' rnr-field-number';
			$row["dateRemind_class"] = $class;
	//	dateRemind2 - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateRemind2", $data, $keylink);
			$row["dateRemind2_value"] = $value;
			$format = $pSet->getViewFormat("dateRemind2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateRemind2")))
				$class = ' rnr-field-number';
			$row["dateRemind2_class"] = $class;
	//	dateRemind3 - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("dateRemind3", $data, $keylink);
			$row["dateRemind3_value"] = $value;
			$format = $pSet->getViewFormat("dateRemind3");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("dateRemind3")))
				$class = ' rnr-field-number';
			$row["dateRemind3_class"] = $class;
	//	replyPeriod - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("replyPeriod", $data, $keylink);
			$row["replyPeriod_value"] = $value;
			$format = $pSet->getViewFormat("replyPeriod");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("replyPeriod")))
				$class = ' rnr-field-number';
			$row["replyPeriod_class"] = $class;
	//	replyPeriod2 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("replyPeriod2", $data, $keylink);
			$row["replyPeriod2_value"] = $value;
			$format = $pSet->getViewFormat("replyPeriod2");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("replyPeriod2")))
				$class = ' rnr-field-number';
			$row["replyPeriod2_class"] = $class;
	//	replyPeriod3 - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("replyPeriod3", $data, $keylink);
			$row["replyPeriod3_value"] = $value;
			$format = $pSet->getViewFormat("replyPeriod3");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("replyPeriod3")))
				$class = ' rnr-field-number';
			$row["replyPeriod3_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("audit_form", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>