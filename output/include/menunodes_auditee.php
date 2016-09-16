<?php

function getMenuNodes_auditee($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["auditee"] = array();
		
	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "auditee_reply";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Auditee Reply";
	$menuNodesObject->menuNodes["auditee"][] = $menuNode;
}
?>
