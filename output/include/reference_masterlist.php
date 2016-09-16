<?php
function DisplayMasterTableInfo_reference($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "reference";
	$xt->eventsObject = getEventObject($tName);
	
	include_once(getabspath('classes/listpage.php'));
	include_once(getabspath('classes/listpage_simple.php'));
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "procedure")
	{
		$keysAssoc["refID"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("refID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("reference","refID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["refID"]));
	
	$xt->assign("refID_mastervalue", $viewControls->showDBValue("refID", $data, $keylink));
	$format = $settings->getViewFormat("refID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("refID")))
		$class = ' rnr-field-number';
		
	$xt->assign("refID_class", $class); // add class for field header as field value
	$xt->assign("reference_mastervalue", $viewControls->showDBValue("reference", $data, $keylink));
	$format = $settings->getViewFormat("reference");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("reference")))
		$class = ' rnr-field-number';
		
	$xt->assign("reference_class", $class); // add class for field header as field value
	$xt->assign("refNo_mastervalue", $viewControls->showDBValue("refNo", $data, $keylink));
	$format = $settings->getViewFormat("refNo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("refNo")))
		$class = ' rnr-field-number';
		
	$xt->assign("refNo_class", $class); // add class for field header as field value

	$layout = GetPageLayout("reference", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("reference", "masterlist"));
}

?>