<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "user";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("user", " " . "User");
$table = "audit_form";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("audit_form", " " . "Daftar Query");
$table = "audit_info";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("audit_info", " " . "PENEMUAN");
$table = "set_cat";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("set_cat", " " . "Set Cat");
$table = "set_field";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("set_field", " " . "Set Field");
$table = "set_audit_element";
$mask="";
	$mask .= "A";
		$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("set_audit_element", " " . "Elemen");
$table = "auditee";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("auditee", " " . "Auditee");
$table = "set_mais_orga";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("set_mais_orga", " " . "Set Mais Orga");
$table = "audit_plan";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("audit_plan", " " . "Rancangan Audit");
$table = "all";
$mask="";
	$mask .= "A";
			$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("all", " " . "All");
$table = "web_file";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("web_file", " " . "Web File");
$table = "main";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("main", " " . "Main");
$table = "jumlah_audit_bahagian";
$mask="";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("jumlah_audit_bahagian", " " . "Jumlah Audit Bahagian");
$table = "reference_detail";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("reference_detail", " " . "Reference Detail");
$table = "finding";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("finding", " " . "Finding");
$table = "web_news";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("web_news", " " . "Web News");
$table = "report_SKT";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("report_SKT", " " . "Report SKT");
$table = "report_susulan";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("report_susulan", " " . "Report Susulan");
$table = "web_annoucement";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("web_annoucement", " " . "Web Annoucement");
$table = "web_slider";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("web_slider", " " . "Web Slider");
$table = "web_meeting";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("web_meeting", " " . "Web Meeting");
$table = "set_audit_subType";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("set_audit_subType", " " . "Sub Kategori");
$table = "set_audit_type";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("set_audit_type", " " . "Set Audit Type");
$table = "audit_form_manual";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("audit_form_manual", " " . "Audit Form Manual");




$layout = new TLayout("ug_rights2", "Coral1Coral1", "MobileCoral1");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugrightbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugrightsblock", 
	"block"=>"rights_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();
$layout->container_properties["uggroup"] = array(  );
$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup", 
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroup"] = "1";

$layout->blocks["left"][] = "uggroup";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();
$layout->container_properties["hmenu"] = array(  );
$layout->containers["hmenu"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["hmenu"] = "hmenu";

$layout->blocks["top"][] = "hmenu";
$page_layouts["admin_rights_list"] = $layout;

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



require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
