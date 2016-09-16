<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["set_field"]["user.seksyen"]["edit"] = array("table" => "user", "field" => "seksyen", "page" => "edit");
	$lookupTableLinks["set_field"]["user.unit"]["edit"] = array("table" => "user", "field" => "unit", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form.aStatus"]["edit"] = array("table" => "audit_form", "field" => "aStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form.aStatus"]["search"] = array("table" => "audit_form", "field" => "aStatus", "page" => "search");
	$lookupTableLinks["set_audit_type"]["audit_form.aTypeCode"]["edit"] = array("table" => "audit_form", "field" => "aTypeCode", "page" => "edit");
	$lookupTableLinks["set_audit_element"]["audit_form.aElementID"]["edit"] = array("table" => "audit_form", "field" => "aElementID", "page" => "edit");
	$lookupTableLinks["user"]["audit_form.userID"]["edit"] = array("table" => "audit_form", "field" => "userID", "page" => "edit");
	$lookupTableLinks["user"]["audit_form.userID"]["search"] = array("table" => "audit_form", "field" => "userID", "page" => "search");
	$lookupTableLinks["user"]["audit_form.userCheck"]["edit"] = array("table" => "audit_form", "field" => "userCheck", "page" => "edit");
	$lookupTableLinks["auditee"]["audit_form.userAuditee"]["edit"] = array("table" => "audit_form", "field" => "userAuditee", "page" => "edit");
	$lookupTableLinks["user"]["audit_form.userApprove"]["edit"] = array("table" => "audit_form", "field" => "userApprove", "page" => "edit");
	$lookupTableLinks["audit_plan"]["audit_form.planID"]["edit"] = array("table" => "audit_form", "field" => "planID", "page" => "edit");
	$lookupTableLinks["set_mais_orga"]["audit_form.sector"]["edit"] = array("table" => "audit_form", "field" => "sector", "page" => "edit");
	$lookupTableLinks["set_mais_orga"]["audit_form.department"]["edit"] = array("table" => "audit_form", "field" => "department", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form.paid"]["edit"] = array("table" => "audit_form", "field" => "paid", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form.agency"]["edit"] = array("table" => "audit_form", "field" => "agency", "page" => "edit");
	$lookupTableLinks["reference_detail"]["audit_info.refyID"]["edit"] = array("table" => "audit_info", "field" => "refyID", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_info.iStatus"]["edit"] = array("table" => "audit_info", "field" => "iStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["admin_members.seksyen"]["edit"] = array("table" => "admin_members", "field" => "seksyen", "page" => "edit");
	$lookupTableLinks["set_field"]["admin_members.unit"]["edit"] = array("table" => "admin_members", "field" => "unit", "page" => "edit");
	$lookupTableLinks["set_field"]["admin_users.seksyen"]["edit"] = array("table" => "admin_users", "field" => "seksyen", "page" => "edit");
	$lookupTableLinks["set_field"]["admin_users.unit"]["edit"] = array("table" => "admin_users", "field" => "unit", "page" => "edit");
	$lookupTableLinks["set_mais_orga"]["auditee.sector"]["edit"] = array("table" => "auditee", "field" => "sector", "page" => "edit");
	$lookupTableLinks["set_mais_orga"]["auditee.sector"]["add"] = array("table" => "auditee", "field" => "sector", "page" => "add");
	$lookupTableLinks["set_mais_orga"]["auditee.sector"]["search"] = array("table" => "auditee", "field" => "sector", "page" => "search");
	$lookupTableLinks["set_mais_orga"]["auditee.department"]["edit"] = array("table" => "auditee", "field" => "department", "page" => "edit");
	$lookupTableLinks["set_field"]["auditee.paid"]["edit"] = array("table" => "auditee", "field" => "paid", "page" => "edit");
	$lookupTableLinks["set_field"]["auditee.agency"]["edit"] = array("table" => "auditee", "field" => "agency", "page" => "edit");
	$lookupTableLinks["set_audit_type"]["audit_plan.aTypeCode"]["edit"] = array("table" => "audit_plan", "field" => "aTypeCode", "page" => "edit");
	$lookupTableLinks["set_audit_subtype"]["audit_plan.subTypeID"]["edit"] = array("table" => "audit_plan", "field" => "subTypeID", "page" => "edit");
	$lookupTableLinks["procedure"]["audit_plan.procedureID"]["edit"] = array("table" => "audit_plan", "field" => "procedureID", "page" => "edit");
	$lookupTableLinks["set_field"]["web_file.webCategory"]["edit"] = array("table" => "web_file", "field" => "webCategory", "page" => "edit");
	$lookupTableLinks["set_field"]["reference_detail.refCode"]["edit"] = array("table" => "reference_detail", "field" => "refCode", "page" => "edit");
	$lookupTableLinks["set_audit_type"]["finding.aTypeCode"]["edit"] = array("table" => "finding", "field" => "aTypeCode", "page" => "edit");
	$lookupTableLinks["audit_plan"]["report_susulan.planID"]["edit"] = array("table" => "report_susulan", "field" => "planID", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form_manual.aStatus"]["edit"] = array("table" => "audit_form_manual", "field" => "aStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form_manual.aStatus"]["add"] = array("table" => "audit_form_manual", "field" => "aStatus", "page" => "add");
	$lookupTableLinks["set_field"]["audit_form_manual.aStatus"]["search"] = array("table" => "audit_form_manual", "field" => "aStatus", "page" => "search");
	$lookupTableLinks["set_audit_type"]["audit_form_manual.aTypeCode"]["edit"] = array("table" => "audit_form_manual", "field" => "aTypeCode", "page" => "edit");
	$lookupTableLinks["set_audit_element"]["audit_form_manual.aElementID"]["edit"] = array("table" => "audit_form_manual", "field" => "aElementID", "page" => "edit");
	$lookupTableLinks["user"]["audit_form_manual.userID"]["edit"] = array("table" => "audit_form_manual", "field" => "userID", "page" => "edit");
	$lookupTableLinks["user"]["audit_form_manual.userID"]["search"] = array("table" => "audit_form_manual", "field" => "userID", "page" => "search");
	$lookupTableLinks["user"]["audit_form_manual.userCheck"]["edit"] = array("table" => "audit_form_manual", "field" => "userCheck", "page" => "edit");
	$lookupTableLinks["auditee"]["audit_form_manual.userAuditee"]["edit"] = array("table" => "audit_form_manual", "field" => "userAuditee", "page" => "edit");
	$lookupTableLinks["user"]["audit_form_manual.userApprove"]["edit"] = array("table" => "audit_form_manual", "field" => "userApprove", "page" => "edit");
	$lookupTableLinks["audit_plan"]["audit_form_manual.planID"]["edit"] = array("table" => "audit_form_manual", "field" => "planID", "page" => "edit");
	$lookupTableLinks["set_mais_orga"]["audit_form_manual.sector"]["edit"] = array("table" => "audit_form_manual", "field" => "sector", "page" => "edit");
	$lookupTableLinks["set_mais_orga"]["audit_form_manual.department"]["edit"] = array("table" => "audit_form_manual", "field" => "department", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form_manual.paid"]["edit"] = array("table" => "audit_form_manual", "field" => "paid", "page" => "edit");
	$lookupTableLinks["set_field"]["audit_form_manual.agency"]["edit"] = array("table" => "audit_form_manual", "field" => "agency", "page" => "edit");
}

?>