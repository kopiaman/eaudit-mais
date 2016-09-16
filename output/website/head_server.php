<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="image/favicon.ico">
    <title>BORANG AUDIT DALAMAN</title>
 
    <!--[if IE]>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
body{
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
}
.plainTable { border-collapse:collapse; padding:10px; }

</style>
<?php 
require_once('../include/dbcommon.php');
$host="localhost"; $user="kreatiwi_user"; $pwd="gengmalay86";$sys_dbname="kreatiwi_eaudit";

$conn = mysql_connect($host, $user, $pwd) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($sys_dbname, $conn);

include_once('inc_function.php');
?>