<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajumlah_audit_bahagian = array();
	$tdatajumlah_audit_bahagian[".ShortName"] = "jumlah_audit_bahagian";
	$tdatajumlah_audit_bahagian[".OwnerID"] = "";
	$tdatajumlah_audit_bahagian[".OriginalTable"] = "audit_form";

//	field labels
$fieldLabelsjumlah_audit_bahagian = array();
$fieldToolTipsjumlah_audit_bahagian = array();
$pageTitlesjumlah_audit_bahagian = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsjumlah_audit_bahagian["Malay"] = array();
	$fieldToolTipsjumlah_audit_bahagian["Malay"] = array();
	$pageTitlesjumlah_audit_bahagian["Malay"] = array();
	$fieldLabelsjumlah_audit_bahagian["Malay"]["jumlahAudit"] = "Jumlah Audit";
	$fieldToolTipsjumlah_audit_bahagian["Malay"]["jumlahAudit"] = "";
	$fieldLabelsjumlah_audit_bahagian["Malay"]["sector"] = "Sector";
	$fieldToolTipsjumlah_audit_bahagian["Malay"]["sector"] = "";
	if (count($fieldToolTipsjumlah_audit_bahagian["Malay"]))
		$tdatajumlah_audit_bahagian[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjumlah_audit_bahagian[""] = array();
	$fieldToolTipsjumlah_audit_bahagian[""] = array();
	$pageTitlesjumlah_audit_bahagian[""] = array();
	if (count($fieldToolTipsjumlah_audit_bahagian[""]))
		$tdatajumlah_audit_bahagian[".isUseToolTips"] = true;
}


	$tdatajumlah_audit_bahagian[".NCSearch"] = true;

	$tdatajumlah_audit_bahagian[".ChartRefreshTime"] = 0;


$tdatajumlah_audit_bahagian[".shortTableName"] = "jumlah_audit_bahagian";
$tdatajumlah_audit_bahagian[".nSecOptions"] = 0;
$tdatajumlah_audit_bahagian[".recsPerRowList"] = 1;
$tdatajumlah_audit_bahagian[".recsPerRowPrint"] = 1;
$tdatajumlah_audit_bahagian[".mainTableOwnerID"] = "";
$tdatajumlah_audit_bahagian[".moveNext"] = 1;
$tdatajumlah_audit_bahagian[".entityType"] = 3;

$tdatajumlah_audit_bahagian[".strOriginalTableName"] = "audit_form";




$tdatajumlah_audit_bahagian[".showAddInPopup"] = false;

$tdatajumlah_audit_bahagian[".showEditInPopup"] = false;

$tdatajumlah_audit_bahagian[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajumlah_audit_bahagian[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajumlah_audit_bahagian[".fieldsForRegister"] = array();

$tdatajumlah_audit_bahagian[".listAjax"] = false;

	$tdatajumlah_audit_bahagian[".audit"] = false;

	$tdatajumlah_audit_bahagian[".locking"] = false;


$tdatajumlah_audit_bahagian[".add"] = true;
$tdatajumlah_audit_bahagian[".afterAddAction"] = 1;
$tdatajumlah_audit_bahagian[".closePopupAfterAdd"] = 1;
$tdatajumlah_audit_bahagian[".afterAddActionDetTable"] = "";

$tdatajumlah_audit_bahagian[".list"] = true;

$tdatajumlah_audit_bahagian[".inlineAdd"] = true;





$tdatajumlah_audit_bahagian[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajumlah_audit_bahagian[".searchSaving"] = false;
//

$tdatajumlah_audit_bahagian[".showSearchPanel"] = true;
		$tdatajumlah_audit_bahagian[".flexibleSearch"] = true;

if (isMobile())
	$tdatajumlah_audit_bahagian[".isUseAjaxSuggest"] = false;
else
	$tdatajumlah_audit_bahagian[".isUseAjaxSuggest"] = true;



																				
$tdatajumlah_audit_bahagian[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajumlah_audit_bahagian[".isUseTimeForSearch"] = false;





$tdatajumlah_audit_bahagian[".allSearchFields"] = array();
$tdatajumlah_audit_bahagian[".filterFields"] = array();
$tdatajumlah_audit_bahagian[".requiredSearchFields"] = array();

$tdatajumlah_audit_bahagian[".allSearchFields"][] = "jumlahAudit";
	$tdatajumlah_audit_bahagian[".allSearchFields"][] = "sector";
	

$tdatajumlah_audit_bahagian[".googleLikeFields"] = array();
$tdatajumlah_audit_bahagian[".googleLikeFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".googleLikeFields"][] = "sector";


$tdatajumlah_audit_bahagian[".advSearchFields"] = array();
$tdatajumlah_audit_bahagian[".advSearchFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".advSearchFields"][] = "sector";

$tdatajumlah_audit_bahagian[".tableType"] = "chart";

$tdatajumlah_audit_bahagian[".printerPageOrientation"] = 0;
$tdatajumlah_audit_bahagian[".nPrinterPageScale"] = 100;

$tdatajumlah_audit_bahagian[".nPrinterSplitRecords"] = 40;

$tdatajumlah_audit_bahagian[".nPrinterPDFSplitRecords"] = 40;



$tdatajumlah_audit_bahagian[".geocodingEnabled"] = false;



// chart settings
$tdatajumlah_audit_bahagian[".chartType"] = "2DColumn";
// end of chart settings







// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajumlah_audit_bahagian[".strOrderBy"] = $tstrOrderBy;

$tdatajumlah_audit_bahagian[".orderindexes"] = array();

$tdatajumlah_audit_bahagian[".sqlHead"] = "SELECT COUNT(audit_form.fid) AS jumlahAudit,  auditee.sector";
$tdatajumlah_audit_bahagian[".sqlFrom"] = "FROM audit_form  INNER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$tdatajumlah_audit_bahagian[".sqlWhereExpr"] = "auditee.sector !=\"\"";
$tdatajumlah_audit_bahagian[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajumlah_audit_bahagian[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajumlah_audit_bahagian[".arrGroupsPerPage"] = $arrGPP;

$tdatajumlah_audit_bahagian[".highlightSearchResults"] = true;

$tableKeysjumlah_audit_bahagian = array();
$tdatajumlah_audit_bahagian[".Keys"] = $tableKeysjumlah_audit_bahagian;

$tdatajumlah_audit_bahagian[".listFields"] = array();
$tdatajumlah_audit_bahagian[".listFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".listFields"][] = "sector";

$tdatajumlah_audit_bahagian[".hideMobileList"] = array();


$tdatajumlah_audit_bahagian[".viewFields"] = array();
$tdatajumlah_audit_bahagian[".viewFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".viewFields"][] = "sector";

$tdatajumlah_audit_bahagian[".addFields"] = array();

$tdatajumlah_audit_bahagian[".masterListFields"] = array();
$tdatajumlah_audit_bahagian[".masterListFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".masterListFields"][] = "sector";

$tdatajumlah_audit_bahagian[".inlineAddFields"] = array();

$tdatajumlah_audit_bahagian[".editFields"] = array();

$tdatajumlah_audit_bahagian[".inlineEditFields"] = array();

$tdatajumlah_audit_bahagian[".exportFields"] = array();
$tdatajumlah_audit_bahagian[".exportFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".exportFields"][] = "sector";

$tdatajumlah_audit_bahagian[".importFields"] = array();
$tdatajumlah_audit_bahagian[".importFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".importFields"][] = "sector";

$tdatajumlah_audit_bahagian[".printFields"] = array();
$tdatajumlah_audit_bahagian[".printFields"][] = "jumlahAudit";
$tdatajumlah_audit_bahagian[".printFields"][] = "sector";

//	jumlahAudit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jumlahAudit";
	$fdata["GoodName"] = "jumlahAudit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("jumlah_audit_bahagian","jumlahAudit");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jumlahAudit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(audit_form.fid)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatajumlah_audit_bahagian["jumlahAudit"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "auditee";
	$fdata["Label"] = GetFieldLabel("jumlah_audit_bahagian","sector");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "auditee.sector";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatajumlah_audit_bahagian["sector"] = $fdata;

	$tdatajumlah_audit_bahagian[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">jumlah_audit_bahagian</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatajumlah_audit_bahagian[".chartXml"] .= '<attr value="0">
			<attr value="name">jumlahAudit</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatajumlah_audit_bahagian[".chartXml"] .= '</attr>';
	$tdatajumlah_audit_bahagian[".chartXml"] .= '<attr value="1">
		<attr value="name">sector</attr>
	</attr>';
	$tdatajumlah_audit_bahagian[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatajumlah_audit_bahagian[".chartXml"] .= '<attr value="scolor11">0000FF</attr>
			<attr value="scolor12">0000FF</attr>';

	$tdatajumlah_audit_bahagian[".chartXml"] .= '<attr value="head">'.xmlencode("Jumlah Audit Bahagian").'</attr>
<attr value="foot">'.xmlencode("Sektor").'</attr>
<attr value="y_axis_label">'.xmlencode("planID").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatajumlah_audit_bahagian[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatajumlah_audit_bahagian[".chartXml"] .= '<attr value="0">
		<attr value="name">jumlahAudit</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jumlah_audit_bahagian","jumlahAudit")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatajumlah_audit_bahagian[".chartXml"] .= '<attr value="1">
		<attr value="name">sector</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("jumlah_audit_bahagian","sector")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatajumlah_audit_bahagian[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">jumlah_audit_bahagian</attr>
<attr value="short_table_name">jumlah_audit_bahagian</attr>
</attr>

</chart>';

$tables_data["jumlah_audit_bahagian"]=&$tdatajumlah_audit_bahagian;
$field_labels["jumlah_audit_bahagian"] = &$fieldLabelsjumlah_audit_bahagian;
$fieldToolTips["jumlah_audit_bahagian"] = &$fieldToolTipsjumlah_audit_bahagian;
$page_titles["jumlah_audit_bahagian"] = &$pageTitlesjumlah_audit_bahagian;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jumlah_audit_bahagian"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["jumlah_audit_bahagian"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jumlah_audit_bahagian()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(audit_form.fid) AS jumlahAudit,  auditee.sector";
$proto0["m_strFrom"] = "FROM audit_form  INNER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$proto0["m_strWhere"] = "auditee.sector !=\"\"";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "auditee.sector !=\"\"";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "auditee",
	"m_srcTableName" => "jumlah_audit_bahagian"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!=\"\"";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_COUNT";
$proto6["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "jumlah_audit_bahagian"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "COUNT(audit_form.fid)";
$proto5["m_srcTableName"] = "jumlah_audit_bahagian";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "jumlahAudit";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "auditee",
	"m_srcTableName" => "jumlah_audit_bahagian"
));

$proto8["m_sql"] = "auditee.sector";
$proto8["m_srcTableName"] = "jumlah_audit_bahagian";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "audit_form";
$proto11["m_srcTableName"] = "jumlah_audit_bahagian";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "fid";
$proto11["m_columns"][] = "planID";
$proto11["m_columns"][] = "ref";
$proto11["m_columns"][] = "aDate";
$proto11["m_columns"][] = "dateCheck";
$proto11["m_columns"][] = "dateApprove";
$proto11["m_columns"][] = "dateSend";
$proto11["m_columns"][] = "aStatus";
$proto11["m_columns"][] = "aTypeCode";
$proto11["m_columns"][] = "aElementID";
$proto11["m_columns"][] = "userID";
$proto11["m_columns"][] = "userCheck";
$proto11["m_columns"][] = "userAuditee";
$proto11["m_columns"][] = "userApprove";
$proto11["m_columns"][] = "attachment";
$proto11["m_columns"][] = "dateRemind";
$proto11["m_columns"][] = "dateRemind2";
$proto11["m_columns"][] = "dateRemind3";
$proto11["m_columns"][] = "dueDate";
$proto11["m_columns"][] = "dueDate2";
$proto11["m_columns"][] = "dueDate3";
$proto11["m_columns"][] = "repeatStatus";
$proto11["m_columns"][] = "repeatNo";
$proto11["m_columns"][] = "dateAnswer";
$proto11["m_columns"][] = "dateAnswer2";
$proto11["m_columns"][] = "dateAnswer3";
$proto11["m_columns"][] = "dateFollowUp";
$proto11["m_columns"][] = "dateFollowUp2";
$proto11["m_columns"][] = "dateFinish";
$proto11["m_columns"][] = "noteAmend";
$proto11["m_columns"][] = "noteAmend2";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "audit_form";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "jumlah_audit_bahagian";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
												$proto14=array();
$proto14["m_link"] = "SQLL_INNERJOIN";
			$proto15=array();
$proto15["m_strName"] = "auditee";
$proto15["m_srcTableName"] = "jumlah_audit_bahagian";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "aid";
$proto15["m_columns"][] = "fullname";
$proto15["m_columns"][] = "umail";
$proto15["m_columns"][] = "tel";
$proto15["m_columns"][] = "sector";
$proto15["m_columns"][] = "department";
$proto15["m_columns"][] = "paid";
$proto15["m_columns"][] = "agency";
$proto15["m_columns"][] = "pos";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN auditee ON audit_form.userAuditee = auditee.aid";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "jumlah_audit_bahagian";
$proto16=array();
$proto16["m_sql"] = "audit_form.userAuditee = auditee.aid";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userAuditee",
	"m_strTable" => "audit_form",
	"m_srcTableName" => "jumlah_audit_bahagian"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= auditee.aid";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "auditee",
	"m_srcTableName" => "jumlah_audit_bahagian"
));

$proto18["m_column"]=$obj;
$obj = new SQLGroupByItem($proto18);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="jumlah_audit_bahagian";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jumlah_audit_bahagian = createSqlQuery_jumlah_audit_bahagian();



		

$tdatajumlah_audit_bahagian[".sqlquery"] = $queryData_jumlah_audit_bahagian;

$tableEvents["jumlah_audit_bahagian"] = new eventsBase;
$tdatajumlah_audit_bahagian[".hasEvents"] = false;

?>