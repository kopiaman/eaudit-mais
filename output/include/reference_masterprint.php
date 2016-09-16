<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_reference($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "reference";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "procedure" )
	{
		$keysAssoc["refID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("refID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("refID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("refID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("reference","refID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
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

	$layout = GetPageLayout("reference", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("reference", "masterprint"));
}

?>