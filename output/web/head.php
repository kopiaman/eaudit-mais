<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="image/favicon.ico">
    <title>E-AUDIT Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
   <link href="css/lightbox.min.css" rel="stylesheet">
     <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/unslider.css" rel="stylesheet">

   

    <!--[if IE]>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php 
require_once('../include/dbcommon.php');
$host="localhost"; $user="eaudit"; $pwd="haisiti";$sys_dbname="eaudit";
//$host="localhost"; $user="kreatiwi_user"; $pwd="gengmalay86";$sys_dbname="kreatiwi_eaudit";
$conn = mysql_connect($host, $user, $pwd) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($sys_dbname, $conn);


include_once('inc_function.php');
?>