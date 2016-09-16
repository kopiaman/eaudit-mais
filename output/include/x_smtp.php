<?php

$smtpAccount='audit';  //audit or kreatiwi

if($smtpAccount=='audit'){
define('SMTPUSER', 'audit@mais.gov.my'); // sec. smtp username
define('SMTPPWD', 'Mais1234'); // sec. password
define('SMTPSERVER', 'smtp.office365.com'); // sec. smtp server
define('SETFROMMAIL', 'audit@mais.gov.my'); // sec. smtp server
define('SETFROMMAILNAME', 'AUDITEE - E-AUDIT '); // sec. smtp server
define('PORT', '587'); // sec. smtp server
}else{
define('SMTPUSER', 'info@kreatiwi.com'); // sec. smtp username
define('SMTPPWD', 'gengmalay86'); // sec. password
define('SMTPSERVER', 'mail.kreatiwi.com'); // sec. smtp server
define('SETFROMMAIL', 'info@kreatiwi.com'); // sec. smtp server
define('SETFROMMAILNAME', 'SE'); // sec. smtp server
define('PORT', '587'); // sec. smtp server	
}

?>
