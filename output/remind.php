<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('classes/remindpwdpage.php');
require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

$reminded = false;
$sentMailResults = array();

$cipherer = RunnerCipherer::getForLogin();

$xt = new Xtempl();
$sessPrefix = 'remind';
$id = postvalue("id")!=="" ? postvalue("id") : 1;
$cEmailField = "email";




$layout = new TLayout("remind5", "Office1Avenue1", "MobileAvenue1");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"remindheader", 
	"block"=>"remindheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"remindfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"remindbuttons", 
	"block"=>"remindbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";

$layout->blocks["top"][] = "fields";
$page_layouts["remind"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$onFly = postvalue("onFly");
if($onFly == 2) 
    $id = 1;

//array of params for classes
$params = array("id" =>$id, "pageType" => PAGE_REMIND);
$params['xt'] = &$xt;
$params["tName"]= NOT_TABLE_BASED_TNAME;
$params["templatefile"] = "remind.htm";
$params["needSearchClauseObj"] = false;
$params["captchaValue"] = postvalue("value_captcha_" . $id);

$pageObject = new RemindPasswordPage($params);
$pageObject->init();

$xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRemind"');

$strUsernameEmail="";
$strEmail="";
$strMessage="";

if (@$_POST["btnSubmit"] == "Remind")
{
	//	Before Process event
	if($globalEvents->exists("BeforeProcessRemind"))
		$globalEvents->BeforeProcessRemind( $pageObject );
	
	$strUsernameEmail = postvalue("username_email");
		
	if( $pageObject->checkCaptcha() )
	{
		$tosearch=false;
		
		$value=$strUsernameEmail;
		if((string)$value!="")
			$tosearch=true;
			
		if($cipherer->isFieldEncrypted($cUserNameField))
			$value = $cipherer->MakeDBValue($cUserNameField, $value, "", true);
		else
		{
			if(NeedQuotes($cUserNameFieldType))
				$value = $pageObject->connection->prepareString($value);
			else
				$value=(0+$value);
		}
		 
		$fullcUserNameField = $pageObject->getFieldSQLDecrypt($cUserNameField);
		$sWhere="(".$fullcUserNameField."=".$value;
		
		$value = $strUsernameEmail;
		if($cipherer->isFieldEncrypted($cEmailField))
			$value = $cipherer->MakeDBValue($cEmailField, $value, "", true);
		else
		{
			if(NeedQuotes($cEmailFieldType))
				$value = $pageObject->connection->prepareString($value);
			else
				$value=(0+$value);
		}
		$fullcEmailField = $pageObject->getFieldSQLDecrypt($cEmailField);
		$sWhere.= " or ".$fullcEmailField."=".$value.")";
	
		if($tosearch && $globalEvents->exists("BeforeRemindPassword"))
			$tosearch = $globalEvents->BeforeRemindPassword($strUsernameEmail,$strUsernameEmail, $pageObject);
		
		if($tosearch)
		{
				$fullcPasswordField = $pageObject->getFieldSQLDecrypt($cPasswordField);
			$selectClause = "select ".$fullcUserNameField
				." as ".$pageObject->connection->addFieldWrappers($cUserNameField)
				.",".$fullcPasswordField." as ".$pageObject->connection->addFieldWrappers($cPasswordField);
			
			// prevent aliases mixing
			if( $cUserNameField != $cEmailField )
				$selectClause.= ",".$fullcEmailField." as ".$pageObject->connection->addFieldWrappers($cEmailField);

				
			$strSQL = $selectClause." from ".$pageObject->connection->addTableWrappers("user")." where ".$sWhere;
			
			$data = $cipherer->DecryptFetchedArray( $pageObject->connection->query( $strSQL )->fetchAssoc() );
			if($data)
			{
				$password=$data[$cPasswordField];
				$strUsername = $data[$cUserNameField];
					if(!$cipherer->isFieldEncrypted($cPasswordField))
				{
					$password=generatePassword(10);
					$pageObject->connection->exec("update ".$pageObject->connection->addTableWrappers("user")
						." set ".$pageObject->connection->addFieldWrappers($cPasswordField)."='".md5($password)."' where ".$sWhere);
				}
	
	
				$url = GetSiteUrl();
				$url.= $_SERVER["SCRIPT_NAME"];
				$url2 = str_replace("remind.","login.",$url)."?username=".rawurlencode($data[$cUserNameField]);
				$message = "";
							


$layout = new TLayout("remind_success3", "Office1Avenue1", "MobileAvenue1");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"remindheader", 
	"block"=>"remindheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"weresent_message", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"remindsucbuttons", 
	"block"=>"", "substyle"=>2  );

$layout->skins["fields"] = "fields";

$layout->blocks["top"][] = "fields";
$page_layouts["remind_success"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");


				$message.= "Password reminder"."\r\n";
				$message.= "You asked to remind your username and password at"." ".$url2."\r\n";
				$message.= "Nama Pengguna".": ".$data[$cUserNameField]."\r\n";
				$message.= "Katalaluan".": ".$password."\r\n";
				$sentMailResults = runner_mail(array('to' => $data[$cEmailField], 'subject' => "Password reminder", 'body' => $message));
				if($sentMailResults['mailed'])
				{
					$pageObject->updatePageLayoutAndCSS('', 'success');
					
					$reminded = true;
					if($globalEvents->exists("AfterRemindPassword"))
						$globalEvents->AfterRemindPassword($strUsernameEmail,$strUsernameEmail, $pageObject);
					
					$loginlink_attrs = "href=\"".GetTableLink("login");
					$loginlink_attrs.="?username=".rawurlencode($strUsernameEmail);
					$loginlink_attrs.="\"";
					$loginlink_attrs.=' id="ProceedToLogin"';
					
					$xt->assign("loginlink_attrs",$loginlink_attrs);
					$xt->assign("body",true);
					if (postvalue("onFly") != 2)
						return $pageObject->display(GetTemplateName("", "remind_success")); // return $pageObject->display for .net compatibility
				}	
			}
		}
		
		if(!$reminded)
		{
			if($sentMailResults['message'])
				$strMessage = $sentMailResults['message'];
			else
				$strMessage = "Pengguna"." ".$strUsernameEmail." "." tidak berdaftar.";
		}

	}
	else
	{
		$strMessage = "Invalid security code.";
	}
}

// submit on popup page
if (postvalue("onFly") == 2)
{
	if(@$strMessage) {
		$returnJSON['message'] = $strMessage;
	}
	if ( !$pageObject->checkCaptcha() ) {
		$returnJSON['message'] = "Invalid security code.";
	}
	if ($reminded) {
		$pageObject->templatefile = GetTemplateName("", "remind_success");
		$xt->assign("id",$id);
		$xt->assign("footer",false);
		$xt->assign("header",false);
		$xt->assign("body",true);
		$pageObject->displayAJAX($pageObject->templatefile, $id+1);
		exit();
	}
	echo printJSON($returnJSON);
	exit();
}

if( $pageObject->captchaExists() )
{
	$pageObject->displayCaptcha();
}

$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->body["end"] .= "<script>";
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$pageObject->addButtonHandlers();

$xt->assign("submit_attrs","onclick='document.forms.form1.submit();return false;'");

$xt->assign("username_email_label",true);
$is508=isEnableSection508();
if($is508)
{
	$xt->assign_section("username_email_label","<label for=\"username_email\">","</label>");
}
$xt->assign("username_email_attrs",($is508==true ? "id=\"username_email\" " : "")."value=\"".runner_htmlspecialchars($strUsernameEmail)."\"");

if(@$strMessage)
{
	$xt->assign("message","<div class='message rnr-error'>".$strMessage."</div>");
	$xt->assign("message_block",true);
}

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->body["begin"] .="<script language = JavaScript>
function OnKeyDown()
{
	e = window.event;
	if (e.keyCode == 13)
	{
		e.cancel = true;
		document.forms[0].submit();
	}	
}
</script>
<form method=post action=\"".GetTableLink("remind")."\" id=form1 name=form1>
<input type=hidden name=btnSubmit value=\"Remind\">
<input type=\"Hidden\" name=\"searchby\" value=\"".$strSearchBy."\">";
$pageObject->body["end"] .= "</form>
	<script language=\"JavaScript\">
	".$pageObject->PrepareJS()."
	</script>";

$xt->assignbyref("body",$pageObject->body);

if($globalEvents->exists("BeforeShowRemindPwd"))
	$globalEvents->BeforeShowRemindPwd($xt,$pageObject->templatefile, $pageObject);

// load popup page
if (postvalue("onFly") == 1)
{
	$xt->assign("message_block",true);
	$xt->assign("message","<div id='remind_message' class='message rnr-error'></div>");
	$xt->displayBrickHidden("message");
	$xt->assign("id",$id);
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);	
	$xt->assign("backlink_attrs", 'style="display:none"');
	$xt->assign("submit_attrs","id='submitRemind'");
	
	$pageObject->displayAJAX($pageObject->templatefile, $id+1);
	exit();
}

$pageObject->display($pageObject->templatefile);
