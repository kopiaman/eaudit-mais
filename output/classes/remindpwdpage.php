<?php
class RemindPasswordPage extends RunnerPage
{
	
	function RemindPasswordPage(&$params)
	{
		parent::RunnerPage($params);
		$this->pSet = new ProjectSettings("user", $this->pageType);
		$this->pSetEdit = $this->pSet;
		
		$this->formBricks["header"] = "remindheader";
		$this->formBricks["footer"] = "remindbuttons";
		$this->assignFormFooterAndHeaderBricks( true );	
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}	
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}
	
	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */	
	function captchaExists()
	{
		$captchaSettings = GetGlobalData("CaptchaSettings", false);
		return $captchaSettings["isEnabledOnRemind"];
	}

	function getCaptchaId() {
		return "remind";
	}

}
?>