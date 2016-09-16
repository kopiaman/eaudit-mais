<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='Ke_Penyemak')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Ke_Penyemak($params);
}
if($buttId=='Ke_Pelulus')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Ke_Pelulus($params);
}
if($buttId=='Ke_Auditee')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Ke_Auditee($params);
}
if($buttId=='Pindaan_Draf')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Pindaan_Draf($params);
}
if($buttId=='Pindaan_Draf1')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Pindaan_Draf1($params);
}
if($buttId=='Draf_Dipinda')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Draf_Dipinda($params);
}
if($buttId=='Pindaan_Disemak')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Pindaan_Disemak($params);
}
if($buttId=='_______SELESAI')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler________SELESAI($params);
}
if($buttId=='___X___SUSULAN')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler____X___SUSULAN($params);
}
if($buttId=='___Soft_Reminder')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler____Soft_Reminder($params);
}
if($buttId=='___Peringatan_1')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler____Peringatan_1($params);
}
if($buttId=='_____Peringatan_2')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler______Peringatan_2($params);
}
if($buttId=='__Hantar_Query')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler___Hantar_Query($params);
}
if($buttId=='Borang')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_Borang($params);
}
if($buttId=='LAPORAN')
{
	require_once("include/report_susulan_variables.php");
	$cipherer = new RunnerCipherer("report_susulan");
	buttonHandler_LAPORAN($params);
}
if($buttId=='TERPERINCI')
{
	require_once("include/report_susulan_variables.php");
	$cipherer = new RunnerCipherer("report_susulan");
	buttonHandler_TERPERINCI($params);
}
if($buttId=='____X___SELESAI_KIV_')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler_____X___SELESAI_KIV_($params);
}
if($buttId=='SEMUA')
{
	require_once("include/report_SKT_variables.php");
	$cipherer = new RunnerCipherer("report_SKT");
	buttonHandler_SEMUA($params);
}
if($buttId=='_X__SELESAI_KIV_')
{
	require_once("include/audit_form_variables.php");
	$cipherer = new RunnerCipherer("audit_form");
	buttonHandler__X__SELESAI_KIV_($params);
}
if($buttId=='New_Button')
{
	require_once("include/audit_form_manual_variables.php");
	$cipherer = new RunnerCipherer("audit_form_manual");
	buttonHandler_New_Button($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_Ke_Penyemak($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_penyemak="SELECT email,fullName FROM user WHERE userID='$data[userCheck]'";
$query_penyemak=db_query($sql_penyemak,$conn);
$penyemak=db_fetch_array($query_penyemak);

$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

		$sql_isu="SELECT
		COUNT(audit_info.inid) AS no FROM audit_form INNER JOIN audit_info ON audit_form.fid = audit_info.fid 
		WHERE audit_form.fid=$fid";
		$query_isu=db_query($sql_isu,$conn);$isu=db_fetch_array($query_isu);

if($isu['no']!=0){

	$sql_up= "UPDATE audit_form SET aStatus ='Draf-Dihantar' WHERE  fid=$fid ";
	$query_up=db_exec($sql_up,$conn);
  		//send to penyemak
		$to2=$penyemak['email'];
		$subject2 ="SEMAKAN - Pemerhatian Audit : $data[ref]  ";
		$headers2 ="From: " . $_SESSION['email'] . "\r\n";
		$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";

		$message2 ="<html><body>";
		$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
		$message2 .=" Mohon semakan Pemerhatian Audit berikut :-  <br/> <br/>";
		$message2 .="No. Query: $data[ref] <br/> <br/>";
		$message2 .="LINK : <a href='$url' target='_blank'> $url</a> <br/> <br/>";
		$message2 .="Sekian, Terima Kasih <br/><br/>";

		$message2 .='" مڠهارڤ كريضأن الله "';
		$message2 .="<br/>";
		$message2.='"أمانه، ڤريهاتين دان مسرا " ';

		$message2 .= "</p></body></html>";
		//$mailto=mail($to2, $subject2, $message2, $headers2);
	
		include("include/x_smtp.php");
		include("include/x_smtp_send.php");

$result["response"]="Draf Berjaya Dihantar!";

}else{

$result["response"]="TIDAK BERJAYA HANTAR DRAF KERANA ISU PENEMUAN TIDAK DI ISI!";
};


;
	echo my_json_encode($result);
}
function buttonHandler_Ke_Pelulus($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_approver="SELECT email,fullName FROM user WHERE userID='$data[userApprove]'";
$query_approver=db_query($sql_approver,$conn);
$approver=db_fetch_array($query_approver);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//send to KETUA AUDIT DALAM,  dan cc kepada auditor
$to2=$approver['email'];

$headers2 ="From: " . $_SESSION['email'] . "\r\n";
$headers2 .="CC: " . $auditor['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";

$subject2 ="KELULUSAN - Pemerhatian Audit :$data[ref]  ";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
$message2 .="<p> Mohon semakan/kelulusan Pemerhatian Audit berikut :-<br/>  <br/>";
$message2 .="No. Query: $data[ref] <br/><br/>";
$message2 .="LINK : <a href='$url' target='_blank'> $url</a> <br/><br/>";
$message2 .="Sekian, Terima Kasih <br/><br/>";


$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';
$message2 .= "</body></html>";

//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

$dateCheck=date('Y-m-d');
$sql_up= "UPDATE audit_form SET aStatus ='Draf-Disemak', dateCheck='$dateCheck' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn);

;
	echo my_json_encode($result);
}
function buttonHandler_Ke_Auditee($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_approver="SELECT email,fullName FROM user WHERE userID='$data[userApprove]'";
$query_approver=db_query($sql_approver,$conn);
$approver=db_fetch_array($query_approver);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$sql_penyemak="SELECT email,fullName FROM user WHERE userID='$data[userCheck]'";
$query_penyemak=db_query($sql_penyemak,$conn);
$penyemak=db_fetch_array($query_penyemak);

$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//send to auditee dan cc ke auditor
$to2=$auditor['email'];

$headers2 ="From: " . $approver['email'] . "\r\n";
$headers2 .="CC: " . $penyemak['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";

$subject2 ="DILULUSKAN- Pemerhatian Audit: $data[ref] ";

$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
$message2 .="No. Query: $data[ref] <br/>";
$message2 .="<p> Merujuk perkara di atas, Daftar query telah diluluskan, sila pastikan perkara berikut:-  <br/><br/>";
$message2 .=" 1) Kemas Kini Tarikh Akhir Maklum Balas Auditi  <br/><br/>";
$message2 .=" 2) Hantar Memo/Surat Kepada Auditi <br/><br/>";
$message2 .="LINK : <a href='$url' target='_blank'> $url</a> <br/><br/>";
$message2 .="Sekian, Terima Kasih <br/><br/>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";
//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");
$dateApprove=date('Y-m-d');  


/*
// satu jam ada 3600 s, sehari 3600 * 24 jam = 86400 second, ) 
$reminderDayPeriod=8;
$reminderTime=32400; //kul 9 pg
$addDate=strtotime($dateApprove) + (86400*$reminderDayPeriod+$reminderTime) ;
$firstReminder=date('Y-m-d H:i:s',$addDate);
*/

$sql_up= "UPDATE audit_form SET aStatus ='Lulus',dateApprove='$dateApprove' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); ;
	echo my_json_encode($result);
}
function buttonHandler_Pindaan_Draf($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//hantar notifikasi pindaan

$to2=$auditor['email'];

if($data['noteAmend']!="" OR $data['noteAmend']!==NULL){

$headers2 ="From: " . $_SESSION['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";

$subject2 ="PINDAAN SEMULA - Pemerhatian Audit : $data[ref] ";
$message2 ="<html><body>";

$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";

$message2 .="<p> Sila semak pindaan Pemerhatian Audit berikut :-  <br/><br/>";
$message2 .="No. Query: $data[ref] <br/><br/>";
$message2 .="KOMEN: ' $data[noteAmend] '<br/><br/>";
$message2 .="LINK : <a href='$url' target='_blank'> $url</a> <br/><br/>";
$message2 .="Sekian, Terima Kasih <br/><br/><br/>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";

//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

$sql_up= "UPDATE audit_form SET aStatus ='Draf-Perlu Pindaan' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn);

$result["response"]="Proses Permintaan Pindaan Draf Berjaya dihantar ke Auditor";

}else{

$result["response"]="TIDAK BERJAYA PROSES Kerana ruang komen/catatan pindaan tidak di isi";
};    ;
	echo my_json_encode($result);
}
function buttonHandler_Pindaan_Draf1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_leader="SELECT email,fullName FROM user WHERE userID='$data[userCheck]'";
$query_leader=db_query($sql_leader,$conn);
$leader=db_fetch_array($query_leader);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];


//hantar notifikasi pindaan

$to2=$auditor['email'];

if($data['noteAmend2']!="" OR $data['noteAmend2']!==NULL){

$headers2 ="From: " . $_SESSION['email'] . "\r\n";
$headers2 .="CC: " . $leader['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";


$subject2 ="PINDAAN SEMULA - Pemerhatian Audit  : $data[ref] ";
$message2 ="<html><body>";

$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";

$message2 .="<p> Sila semak pindaan Pemerhatian Audit berikut :-  <br/><br/>";
$message2 .="No. Query: $data[ref] <br/><br/>";
$message2 .="KOMEN: ' $data[noteAmend2] '<br/><br/>";
$message2 .="LINK : <a href='$url' target='_blank'> $url</a> <br/><br/>";
$message2 .="Sekian, Terima Kasih <br/><br/><br/>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";

//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

$sql_up= "UPDATE audit_form SET aStatus ='Draf-Perlu Pindaan' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn);

$result["response"]="Proses Permintaan Pindaan Draf Berjaya dihantar ke Auditor";

}else{

$result["response"]="TIDAK BERJAYA PROSES Kerana ruang komen/catatan pindaan tidak di isi";
}; ;
	echo my_json_encode($result);
}
function buttonHandler_Draf_Dipinda($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;
$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_penyemak="SELECT email,fullName FROM user WHERE userID='$data[userCheck]'";
$query_penyemak=db_query($sql_penyemak,$conn);
$penyemak=db_fetch_array($query_penyemak);

$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//send to penyemak
$to2=$penyemak['email'];
$headers2 ="From: " . $_SESSION['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";

$subject2 ="PINDAAN - Pemerhatian Audit : $data[ref] ";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
$message2 .="<p> Sila semak pindaan Pemerhatian Audit berikut :-  <br/><br/>";
$message2 .="No. Query: $data[ref] <br/><br/>";
$message2 .="LINK : <a href='$url' target='_blank'> $url</a> <br/><br/>";
$message2 .="Sekian, Terima Kasih <br/><br/>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";
//$mailto=mail($to2, $subject2, $message2, $headers2);
		include("include/x_smtp.php");
		include("include/x_smtp_send.php");
$sql_up= "UPDATE audit_form SET aStatus ='Draf-Dipinda' WHERE fid=$fid ";
$query_up=db_exec($sql_up,$conn);

;
	echo my_json_encode($result);
}
function buttonHandler_Pindaan_Disemak($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_approver="SELECT email,fullName FROM user WHERE userID='$data[userApprove]'";
$query_approver=db_query($sql_approver,$conn);
$approver=db_fetch_array($query_approver);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//send to KETUA AUDIT DALAM,  dan cc kepada auditor
$to2=$approver['email'];
$headers2 ="From: " . $_SESSION['email'] . "\r\n";
$headers2 .="CC: " . $auditor['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";


$subject2 ="PINDAAN DISEMAK -Pemerhatian Audit : $data[ref] ";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
$message2 .="<p> Mohon semakan/kelulusan pindaan Pemerhatian Audit berikut :-  <br/><br/>";
$message2 .="No. Query: $data[ref] <br/><br/>";
$message2 .="LINK : <a href='$url' target='_blank'> $url</a> <br/><br/>";
$message2 .="Sekian, Terima Kasih <br/><br/>";



$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";

//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

$dateCheck=date('Y-m-d');
$sql_up= "UPDATE audit_form SET aStatus ='Draf-Dipinda-Disemak',dateCheck='$dateCheck' WHERE fid=$fid ";
$query_up=db_exec($sql_up,$conn);

;
	echo my_json_encode($result);
}
function buttonHandler________SELESAI($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$sql_penyemak="SELECT email,fullName FROM user WHERE userID='$data[userCheck]'";
$query_penyemak=db_query($sql_penyemak,$conn);
$penyemak=db_fetch_array($query_penyemak);

$sql_approver="SELECT email,fullName FROM user WHERE userID='$data[userApprove]'";
$query_approver=db_query($sql_approver,$conn);
$approver=db_fetch_array($query_approver);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//send to auditee dan cc ke auditor
$to2=$approver['email'];
$subject2 ="PEMERHATIAN AUDIT : $data[ref] - SELESAI ";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 ="CC: " . $penyemak['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
$message2 .="<p> Kepada $penyemak[fullName], </p>";
$message2 .="<p> Sukacita dimaklumkan, status borang $data[ref] telah diset sebagai SELESAI <br/><br/>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";
//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

$dateFinish=date('Y-m-d H:i:s');  

$sql_up= "UPDATE audit_form SET aStatus ='Selesai',dateFinish='$dateFinish' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); ;
	echo my_json_encode($result);
}
function buttonHandler____X___SUSULAN($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;


$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_auditee="SELECT umail AS email,fullname AS fullName FROM auditee WHERE aid='$data[userAuditee]'";
$query_auditee=db_query($sql_auditee,$conn);
$auditee=db_fetch_array($query_auditee);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$today=date('Y-m-d H:i:s');
$iStatus=$data['aStatus'];

$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

$dueDate=date("d-M-Y", strtotime($data[dueDate]));	

//1) set status susulan baru terharap maklum balas,  2) update tarikh followup /susulan
if($iStatus=='Maklum Balas 1'){
$newStatus='Susulan 1'; 
$dateFollowUp="dateFollowUp='$today'";
}else if($iStatus=='Maklum Balas 2'){
$newStatus='Susulan 2'; 
$dateFollowUp="dateFollowUp2='$today'";
}else{$newStatus=$iStatus;};

//send to auditee
$to2=$auditee['email'];
$subject2 ="PEMERHATIAN AUDIT - ($newStatus) : $data[ref] ";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";

$message2 .="<p> Daripada <br> Ketua Audit Dalam </p>";
$message2 .="<p> Kepada <br> $auditee[fullName] <br> $data[sector] $data[department] $data[paid] $data[agency]  </p>";
$message2 .=" <p> Tuan/Puan";

$message2 .=" <strong> PEMERHATIAN AUDIT - ( $newStatus ) </strong> <br/> </p>";

$message2 .="<p> Sila beri maklumbalas yang lebih lengkap berdasarkan komen yang diberikan:-  <br/>";
$message2 .="<p> Sila klik link berikut untuk borang maklum balas:-   <br/>";
$message2 .=" <a href='$url/website/replyForm.php?fid=$fid' target='_blank'>KLIK SINI</a>  </p>";

$message2 .="<p> Adalah dimaklumankan pihak tuan/puan perlu memberikan maklumbalas sebelum $dueDate. </p>";
$message2 .=" <p>3) Untuk makluman, prestasi tempoh maklumbalas oleh auditi turut diebentangkan dalam Mesyuarat Jawatankuasa Audit
yang turut dianggotai oleh Pengerusi dan Setiausaha MAIS. Sehubungan itu tuan/puan dipohon dapat memberikan reputasi 
terbaik bahagian tuan/puan. </p>
";
$message2 .=" <p>Kerjasama dan keprihatinan pihak tuan/puan dalam perkara ini didahului dengan ucapan ribuan terma kasih. </p>";
$message2 .=" <p>Sekian,  </p>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";
//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

/*
// satu jam ada 3600 s, sehari 3600 * 24 jam = 86400 second, ) 
$reminderDayPeriod=8;
$reminderTime=32400; //kul 9 pg ( 60*60*9)
$addDate=strtotime($today) + (86400*$reminderDayPeriod+$reminderTime) ;
$firstReminder=date('Y-m-d H:i:s',$addDate);
*/

$sql_up= "UPDATE audit_form SET aStatus ='$newStatus',$dateFollowUp WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); ;
	echo my_json_encode($result);
}
function buttonHandler____Soft_Reminder($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];


$sql_auditee="SELECT umail AS email,fullname AS fullName FROM auditee WHERE aid='$data[userAuditee]'";
$query_auditee=db_query($sql_auditee,$conn);
$auditee=db_fetch_array($query_auditee);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$dueDate=date("d-M-Y", strtotime($data[dueDate]));	

$url=$set['url'];

//send to auditee dan cc ke auditor
$to2=$auditee['email'];
$subject2 ="Peringatan Mesra : Pemerhatian Audit - $data[ref]";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";


$message2 .="<p> Daripada <br> Ketua Audit Dalam, MAIS </p>";
$message2 .="<p> Kepada <br> $auditee[fullName] <br> $data[department] <br> $data[sector]  $data[paid] $data[agency]  </p>";
$message2 .=" <p> Tuan/Puan <br><br>";
$message2 .=" <strong> PERINGATAN MESRA : PEMERHATIAN AUDIT - $data[ref]  </strong> <br/> </p>";
$message2 .=" <p> Dengan segala hormatnya izinkan saya merujuk perkara di atas. </p> ";
$message2 .=" <p>2) Borang maklumbalas online boleh diakses di link berikut:- <br> ";
$message2 .=" <a href='$url/website/replyForm.php?fid=$fid'>KLIK SINI</a>  </p> ";
$message2 .="<p> Adalah dimaklumankan pihak tuan/puan perlu memberikan maklumbalas sebelum <strong> $dueDate </strong>. </p>";
$message2 .=" <p>3) Untuk makluman, prestasi tempoh maklumbalas oleh auditi turut dibentangkan dalam Mesyuarat Jawatankuasa Audit
yang turut dianggotai oleh Pengerusi dan Setiausaha MAIS. Sehubungan itu tuan/puan dipohon dapat memberikan reputasi 
terbaik bahagian tuan/puan. </p>
";
$message2 .=" <p>Kerjasama dan keprihatinan pihak tuan/puan dalam perkara ini didahului dengan ucapan ribuan terma kasih. </p>";
$message2 .=" <p>Sekian,  </p>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';


$message2 .= "</body></html>";

//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");
$today=date('Y-m-d H:i:s');  

/*
// satu jam ada 3600 s, sehari 3600 * 24 jam = 86400 second, ) 
$reminderDayPeriod=8;
$reminderTime=32400; //kul 9 pg
$addDate=strtotime($dateApprove) + (86400*$reminderDayPeriod+$reminderTime) ;
$firstReminder=date('Y-m-d H:i:s',$addDate);
*/

$sql_up= "UPDATE audit_form SET aStatus ='Peringatan Mesra',dateRemind='$today' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); ;
	echo my_json_encode($result);
}
function buttonHandler____Peringatan_1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];


$sql_auditee="SELECT umail AS email,fullname AS fullName FROM auditee WHERE aid='$data[userAuditee]'";
$query_auditee=db_query($sql_auditee,$conn);
$auditee=db_fetch_array($query_auditee);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

$dueDate=date("d-M-Y", strtotime($data[dueDate2]));	

if($data['dueDate2']!="" OR $data['dueDate2']!==NULL){

//send to auditee dan cc ke auditor
$to2=$auditee['email'];
$subject2 =" PERINGATAN PERTAMA :  Pemerhatian Audit - $data[ref]";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";


$message2 .="<p> Daripada <br> Ketua Audit Dalam , MAIS</p>";
$message2 .="<p> Kepada <br> $auditee[fullName] <br> $data[department] <br> $data[sector]  $data[paid] $data[agency]  </p>";
$message2 .=" <p> Tuan/Puan <br><br>";
$message2 .=" <strong> PERINGATAN PERTAMA : PEMERHATIAN AUDIT - $data[aType]  </strong> <br/> </p>";
$message2 .=" <p> Dengan segala hormatnya izinkan saya merujuk perkara di atas. </p> ";
$message2 .=" <p>2) Borang maklumbalas online boleh diakses di link berikut:- <br> ";
$message2 .=" <a href='$url/website/replyForm.php?fid=$fid'>KLIK SINI</a>  </p> ";
$message2 .="<p>2) Dukacitanya, kami masih belum mendapat maklum balas daripada pihak tuan selepas tempoh yang diberikan. </p>
 Untuk itu, pihak kami memberikan tempoh masa tambahan sebelum <strong >$dueDate. </strong> </p>";
$message2 .=" <p>3) Untuk makluman, prestasi tempoh maklumbalas oleh auditi turut dibentangkan dalam Mesyuarat Jawatankuasa Audit
yang turut dianggotai oleh Pengerusi dan Setiausaha MAIS. Sehubungan itu tuan/puan dipohon dapat memberikan reputasi 
terbaik bahagian tuan/puan. </p>
";
$message2 .=" <p>Kerjasama dan keprihatinan pihak tuan/puan dalam perkara ini didahului dengan ucapan ribuan terma kasih. </p>";
$message2 .=" <p>Sekian,  </p>";


$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";
//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");
$today=date('Y-m-d H:i:s');  

/*
// satu jam ada 3600 s, sehari 3600 * 24 jam = 86400 second, ) 
$reminderDayPeriod=8;
$reminderTime=32400; //kul 9 pg
$addDate=strtotime($dateApprove) + (86400*$reminderDayPeriod+$reminderTime) ;
$firstReminder=date('Y-m-d H:i:s',$addDate);
*/

$sql_up= "UPDATE audit_form SET aStatus ='Peringatan 1',dateRemind2='$today' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); 

$result["response"]="Peringatan 1 Berjaya Dihantar";

}else{

$result["response"]="TIDAK BERJAYA HANTAR QUERY KERANA TARIKH AKHIR PERINGATAN 1 TIDAK DI ISI!";
};
	echo my_json_encode($result);
}
function buttonHandler______Peringatan_2($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];


$sql_auditee="SELECT umail AS email,fullname AS fullName FROM auditee WHERE aid='$data[userAuditee]'";
$query_auditee=db_query($sql_auditee,$conn);
$auditee=db_fetch_array($query_auditee);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

$dueDate=date("d-M-Y", strtotime($data[dueDate3]));	

if($data['dueDate3']!="" OR $data['dueDate3']!==NULL){

//send to auditee dan cc ke auditor
$to2=$auditee['email'];
$subject2 ="PERINGATAN KEDUA : Pemerhatian Audit - $data[ref]";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";


$message2 .="<p> Daripada <br> Ketua Audit Dalam, MAIS</p>";
$message2 .="<p> Kepada <br> $auditee[fullName] <br> $data[department] <br> $data[sector] $data[paid] $data[agency]  </p>";
$message2 .=" <p> Tuan/Puan <br/><br/>";
$message2 .=" <strong> PERINGATAN KEDUA : PEMERHATIAN AUDIT - $data[aType]  $data[ref]</strong> <br/> </p>";
$message2 .=" <p> Dengan segala hormatnya izinkan saya merujuk perkara di atas. </p> ";
$message2 .=" <p>2) Borang maklumbalas online boleh diakses di link berikut:- <br> ";
$message2 .=" <a href='$url/website/replyForm.php?fid=$fid'>KLIK SINI</a>  </p> ";
$message2 .="<p>2) Dukacitanya, kami masih belum mendapat maklum balas daripada pihak tuan selepas PERINGATAN PERTAMA. </p>
 Untuk itu, pihak kami memberikan tempoh masa tambahan sebelum  <strong>  $dueDate. </strong> </p>";
$message2 .=" <p>3) Untuk makluman, prestasi tempoh maklumbalas oleh auditi turut dibentangkan dalam Mesyuarat Jawatankuasa Audit
yang turut dianggotai oleh Pengerusi dan Setiausaha MAIS. Sehubungan itu tuan/puan dipohon dapat memberikan reputasi 
terbaik bahagian tuan/puan. </p>
";
$message2 .=" <p>Kerjasama dan keprihatinan pihak tuan/puan dalam perkara ini didahului dengan ucapan ribuan terma kasih. </p>";
$message2 .=" <p>Sekian,  </p>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";
//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");
$today=date('Y-m-d H:i:s');  

/*
// satu jam ada 3600 s, sehari 3600 * 24 jam = 86400 second, ) 
$reminderDayPeriod=8;
$reminderTime=32400; //kul 9 pg
$addDate=strtotime($dateApprove) + (86400*$reminderDayPeriod+$reminderTime) ;
$firstReminder=date('Y-m-d H:i:s',$addDate);
*/

$sql_up= "UPDATE audit_form SET aStatus ='Peringatan 2',dateRemind3='$today' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); 

$result["response"]="Peringatan 2 Berjaya Dihantar";

}else{

$result["response"]="TIDAK BERJAYA HANTAR QUERY KERANA TARIKH AKHIR PERINGATAN 2 TIDAK DI ISI!";
};
	echo my_json_encode($result);
}
function buttonHandler___Hantar_Query($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$dueDate=date("d-M-Y", strtotime($data[dueDate]));	


$sql_auditee="SELECT umail AS email,fullname AS fullName FROM auditee WHERE aid='$data[userAuditee]'";
$query_auditee=db_query($sql_auditee,$conn);
$auditee=db_fetch_array($query_auditee);

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];


if($data['dueDate']!="" OR $data['dueDate']!==NULL){

//send to auditee dan cc ke auditor
$to2=$auditee['email'];
$subject2 ="Pemerhatian Audit :  $data[ref]";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";

$message2 .="<p> Daripada <br> Ketua Audit Dalam, MAIS </p>";
$message2 .="<p> Kepada <br> $auditee[fullName] <br> $data[sector] $data[department] $data[paid] $data[agency]  </p>";
$message2 .=" <p> Tuan/Puan<br> <br> ";
$message2 .=" <strong>  PEMERHATIAN AUDIT -$data[aType] : $data[ref]  </strong> <br/> </p>";
$message2 .=" <p> Dengan segala hormatnya izinkan saya merujuk perkara di atas. </p> ";
$message2 .=" <p>2) Borang maklumbalas online boleh diakses di link berikut:- <br> ";

$message2 .=" <a href='$url/website/replyForm.php?fid=$fid'>KLIK SINI</a>  </p> ";
$message2 .="<p>  Adalah dimaklumkan pihak tuan/puan perlu memberikan maklumbalas sebelum <strong> $dueDate </strong>. </p>";
$message2 .=" <p>3) Untuk makluman, prestasi tempoh maklumbalas oleh auditi turut dibentangkan dalam Mesyuarat Jawatankuasa Audit
yang turut dianggotai oleh Pengerusi dan Setiausaha MAIS. Sehubungan itu tuan/puan dipohon dapat memberikan reputasi 
terbaik bahagian tuan/puan. </p>
";
$message2 .=" <p>Kerjasama dan keprihatinan pihak tuan/puan dalam perkara ini didahului dengan ucapan ribuan terma kasih. </p>";
$message2 .=" <p>Sekian,  </p>";


$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';


$message2 .= "</body></html>";

//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");
$today=date('Y-m-d H:i:s');  

/*
// satu jam ada 3600 s, sehari 3600 * 24 jam = 86400 second, ) 
$reminderDayPeriod=8;
$reminderTime=32400; //kul 9 pg
$addDate=strtotime($dateApprove) + (86400*$reminderDayPeriod+$reminderTime) ;
$firstReminder=date('Y-m-d H:i:s',$addDate);
*/

$sql_up= "UPDATE audit_form SET aStatus ='Query Dihantar',dateSend='$today' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); 

$result["response"]="Query Berjaya Dihantar";

}else{

$result["response"]="TIDAK BERJAYA HANTAR QUERY KERANA TARIKH AKHIR MAKLUM BALAS TIDAK DI ISI!";
};
	echo my_json_encode($result);
}
function buttonHandler_Borang($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['fid']=$data['fid'] ;;
	echo my_json_encode($result);
}
function buttonHandler_LAPORAN($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['aYear']=$data['aYear'] ;;
	echo my_json_encode($result);
}
function buttonHandler_TERPERINCI($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['aYear']=$data['aYear'] ;;
	echo my_json_encode($result);
}
function buttonHandler_____X___SELESAI_KIV_($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;

$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$sql_penyemak="SELECT email,fullName FROM user WHERE userID='$data[userCheck]'";
$query_penyemak=db_query($sql_penyemak,$conn);
$penyemak=db_fetch_array($query_penyemak);

$sql_approver="SELECT email,fullName FROM user WHERE userID='$data[userApprove]'";
$query_approver=db_query($sql_approver,$conn);
$approver=db_fetch_array($query_approver);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//send to auditee dan cc ke auditor
$to2=$approver['email'];
$subject2 ="PEMERHATIAN AUDIT  : $data[ref] -SELESAI(KIV) ";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 ="CC: " . $penyemak['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
$message2 .="<p> Kepada $penyemak[fullName], </p>";
$message2 .="<p> Untuk makluman, status borang $data[ref] telah diset sebagai SELESAI(KIV) <br/> <br/>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";
//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

$dateFinish=date('Y-m-d H:i:s');  

$sql_up= "UPDATE audit_form SET aStatus ='Selesai(KIV)',dateFinish='$dateFinish' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); ;
	echo my_json_encode($result);
}
function buttonHandler_SEMUA($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['aYear']=$data['aYear'] ;;
	echo my_json_encode($result);
}
function buttonHandler__X__SELESAI_KIV_($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	global $conn;
$data = $button->getCurrentRecord();

$fid=$data['fid'];

$sql_auditor="SELECT email,fullName FROM user WHERE userID='$data[userID]'";
$query_auditor=db_query($sql_auditor,$conn);
$auditor=db_fetch_array($query_auditor);

$sql_penyemak="SELECT email,fullName FROM user WHERE userID='$data[userCheck]'";
$query_penyemak=db_query($sql_penyemak,$conn);
$penyemak=db_fetch_array($query_penyemak);

$sql_approver="SELECT email,fullName FROM user WHERE userID='$data[userApprove]'";
$query_approver=db_query($sql_approver,$conn);
$approver=db_fetch_array($query_approver);


$sql_set="SELECT fieldName AS url FROM set_field WHERE fieldValue='mail-url'";
$query_set=db_query($sql_set,$conn);
$set=db_fetch_array($query_set);

$url=$set['url'];

//send to auditee dan cc ke auditor
$to2=$approver['email'];
$subject2 ="PEMERHATIAN AUDIT  : $data[ref] -SELESAI(KIV) ";
$headers2 ="From: " . $auditor['email'] . "\r\n";
$headers2 ="CC: " . $penyemak['email'] . "\r\n";
$headers2 .="Content-type: text/html;charset=UTF-8" ."  \r\n";
$message2 ="<html><body>";
$message2 .="السلام عليكم ورحمة الله وبركاته  <br/><br/>";
$message2 .="<p> Kepada $penyemak[fullName], </p>";
$message2 .="<p> Untuk makluman, status borang $data[ref] telah diset sebagai SELESAI(KIV) <br/> <br/>";

$message2 .='" مڠهارڤ كريضأن الله "';
$message2 .="<br/>";
$message2.='"أمانه، ڤريهاتين دان مسرا " ';

$message2 .= "</body></html>";

//$mailto=mail($to2, $subject2, $message2, $headers2);
include("include/x_smtp.php");
include("include/x_smtp_send.php");

$dateFinish=date('Y-m-d H:i:s');  

$sql_up= "UPDATE audit_form SET aStatus ='Selesai(KIV)',dateFinish='$dateFinish' WHERE  fid=$fid ";
$query_up=db_exec($sql_up,$conn); ;
	echo my_json_encode($result);
}
function buttonHandler_New_Button($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$data = $button->getCurrentRecord();
$result['fid']=$data['fid'] ;;
	echo my_json_encode($result);
}
?>
