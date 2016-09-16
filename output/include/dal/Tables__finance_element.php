<?php
$dalTablefinance_element = array();
$dalTablefinance_element["eid"] = array("type"=>3,"varname"=>"eid");
$dalTablefinance_element["inid"] = array("type"=>3,"varname"=>"inid");
$dalTablefinance_element["receiptNo"] = array("type"=>200,"varname"=>"receiptNo");
$dalTablefinance_element["detail"] = array("type"=>200,"varname"=>"detail");
$dalTablefinance_element["amount"] = array("type"=>14,"varname"=>"amount");
$dalTablefinance_element["note"] = array("type"=>201,"varname"=>"note");
$dalTablefinance_element["attachment"] = array("type"=>201,"varname"=>"attachment");
	$dalTablefinance_element["eid"]["key"]=true;

$dal_info["Tables__finance_element"] = &$dalTablefinance_element;
?>