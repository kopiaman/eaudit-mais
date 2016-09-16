<?php include_once('head.php'); 

$aYear=$_GET['aYear'];
$orga=$_GET['orga'];

$sql_aktiviti= "
SELECT
audit_plan.planID AS planID,
audit_plan.aTitle AS tajuk,
COUNT(audit_form.aStatus) AS bilIsu,
SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0)) AS selesai,
SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0)) AS sedang,
SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0)) AS tidak
FROM audit_form
INNER JOIN audit_plan ON audit_form.planID = audit_plan.planID
LEFT JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_plan.aYear=$aYear
GROUP BY audit_form.planID";
$query_aktiviti=mysql_query($sql_aktiviti,$conn);
$aktiviti=mysql_fetch_array($query_aktiviti);


$sql_done= "
SELECT
audit_form.fid,
audit_plan.planID AS planID,
audit_plan.aTitle AS tajuk,
COUNT(audit_form.aStatus) AS bilIsu,
SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0)) AS selesai,
SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0)) AS sedang,
SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0)) AS tidak
FROM audit_form
INNER JOIN audit_plan ON audit_form.planID = audit_plan.planID
LEFT JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_plan.aYear=$aYear AND (audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)')
GROUP BY audit_form.planID";
$query_done=mysql_query($sql_done,$conn);
$done=mysql_fetch_array($query_done);



$sql_sedang= "
SELECT
audit_form.fid,
audit_plan.planID AS planID,
audit_plan.aTitle AS tajuk,
COUNT(audit_form.aStatus) AS bilIsu,
SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0)) AS selesai,
SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0)) AS sedang,
SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0)) AS tidak
FROM audit_form
INNER JOIN audit_plan ON audit_form.planID = audit_plan.planID
LEFT JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_plan.aYear=$aYear AND (audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2')
GROUP BY audit_form.planID";
$query_sedang=mysql_query($sql_sedang,$conn);
$sedang=mysql_fetch_array($query_sedang);


$sql_tidak= "
SELECT
audit_form.fid,
audit_plan.planID AS planID,
audit_plan.aTitle AS tajuk,
COUNT(audit_form.aStatus) AS bilIsu,
SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0)) AS selesai,
SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0)) AS sedang,
SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0)) AS tidak
FROM audit_form
INNER JOIN audit_plan ON audit_form.planID = audit_plan.planID
LEFT JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_plan.aYear=$aYear AND (audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2')
GROUP BY audit_form.planID";
$query_tidak=mysql_query($sql_tidak,$conn);
$tidak=mysql_fetch_array($query_tidak);

$sql_Totalaktiviti= "
SELECT
audit_plan.planID AS planID,
audit_plan.aTitle AS tajuk,
COUNT(audit_form.aStatus) AS bilIsu,
SUM(IF(audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)', 1, 0)) AS selesai,
SUM(IF(audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2', 1, 0)) AS sedang,
SUM(IF(audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2', 1, 0)) AS tidak
FROM audit_form
INNER JOIN audit_plan ON audit_form.planID = audit_plan.planID
LEFT JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_plan.aYear=$aYear";
$query_Totalaktiviti=mysql_query($sql_Totalaktiviti,$conn);
$total=mysql_fetch_array($query_Totalaktiviti);

?>
<body role="document">
<section id="contactArea">
  <div class="container">
   
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td  align="center" valign="top"><h1><span class="text-center">
     RINGKASAN AUDITAN SUSULAN MENGIKUT AUDITI <?php echo $aYear ?></span>   </h1>
           <h2><?php echo $orga ?></h2>
      
        </td>
      </tr>
    </table>
     
        <h3 align="center" style="color:#00CC00"><i class="fa fa-circle fa-4x"></i><br>SELESAI </h3>
    <table width="888" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="700" scope="col">TAJUK</th>
        <th width="100" align="center" scope="col" bgcolor="#00CC00">BIL ISU</th>
      </tr>
      <?php 
	    
	   $i=1;do{ 
	    $fid=$done['fid'];
		$sql_auditee= " 
		SELECT
		auditee.agency,
		auditee.paid,
		auditee.department,
		auditee.sector
		FROM audit_form
		INNER JOIN auditee ON audit_form.userAuditee = auditee.aid
		WHERE audit_form.fid=$fid
		
		";
		$query_auditee=mysql_query($sql_auditee,$conn);
		$auditee=mysql_fetch_array($query_auditee); ?>
          <tr>
            <td align="center" valign="top"><span class="text-center"><?php echo $i; ?></span></td>
            <td valign="top"><span class="text-center"><?php echo $done['tajuk'] ?></span></td>
            
            <td align="center" valign="top"><?php echo $done['selesai'] ?></td>
          </tr> <?php $i++; }while($done=mysql_fetch_array($query_done))  ?>
          <tr>
            <th colspan="2" align="right" valign="top">JUMLAH ISU</th>
            <td align="center" valign="top"><?php echo $total['selesai'] ?></td>
          </tr>   
         
        </table>
    
    
 
    
    
 
   
  
    <h3 align="center" ><i class="fa fa-circle fa-4x" style="color:#FFFF00"></i><br>DALAM TINDAKAN </h3>
    <table width="888" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="700" scope="col">TAJUK</th>
        <th width="100" align="center" scope="col" bgcolor="#FFFF00">BIL ISU</th>
      </tr>
      <?php 

	    $s=1;do{ 
	    $planID=$sedang['planID'];
		$sql_auditee= " 
		SELECT
		audit_form.fid,
		audit_form.planID,
		audit_info.finding,
		auditee.fullname,
		auditee.sector,
		auditee.department,
		auditee.agency,
		auditee.paid
		FROM audit_form
		INNER JOIN audit_info ON audit_form.fid = audit_info.fid
		INNER JOIN auditee ON audit_form.userAuditee = auditee.aid
		WHERE (audit_form.planID =$planID)  
		AND audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' 
		AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2'
		GROUP BY auditee.aid ";
		$query_auditee=mysql_query($sql_auditee,$conn);
		$auditee=mysql_fetch_array($query_auditee);
		
		 ?>
      <tr>
        <td align="center" valign="top"><span class="text-center"><?php echo $s; ?></span></td>
        <td valign="top"><span class="text-center"><?php echo $sedang['tajuk'] ?></span></td>
        <td align="center" valign="top"><?php echo $sedang['sedang']; ?></td>
      </tr><?php $s++; }while($sedang=mysql_fetch_array($query_sedang))  ?>
      <tr>
        <th colspan="2" align="right" valign="top">JUMLAH ISU</th>
        <td align="center" valign="top"><?php echo $total['sedang'] ?></td>
      </tr>
      
    </table>
    
    
    
    
    <h3 align="center" style="color:#FF0000"><i class="fa fa-circle fa-4x"></i><br>BELUM AMBIL TINDAKAN </h3>
    <table width="888" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="700" scope="col">TAJUK</th>
        <th width="100" align="center" scope="col" bgcolor="#FF0000">BIL ISU</th>
      </tr>
      <?php 

	   $t=1;do{ 
	   	
		$planID=$tidak['planID'];
	   	$sql_auditee= " 
		SELECT
		audit_form.fid,
		audit_form.planID,
		audit_info.finding,
		auditee.fullname,
		auditee.sector,
		auditee.department,
		auditee.agency,
		auditee.paid
		FROM audit_form
		INNER JOIN audit_info ON audit_form.fid = audit_info.fid
		INNER JOIN auditee ON audit_form.userAuditee = auditee.aid
		WHERE (audit_form.planID =$planID)  
		AND (audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2')
		GROUP BY auditee.aid ";
		$query_auditee=mysql_query($sql_auditee,$conn);
		$auditee=mysql_fetch_array($query_auditee);

		
		?>
      <tr>
        <td align="center" valign="top"><span class="text-center"><?php echo $t; ?></span></td>
        <td valign="top"><span class="text-center"><?php echo $tidak['tajuk'] ?></span></td>
        <td align="center" valign="top"><?php  echo $tidak['tidak'];  ?></td>
      </tr>      <?php $t++; }while($tidak=mysql_fetch_array($query_tidak))  ?>
      <tr>
        <th colspan="2" align="right" valign="top">JUMLAH ISU</th>
        <td align="center" valign="top"><?php echo $total['tidak'] ?></td>
      </tr>

    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="1050" border="0" cellpadding="0">
      <tr>
        <th scope="col">Nota: Dokumen ini adalah cetakan komputer. Tandatangan tidak diperlukan.</th>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
</section>

</body>
</html>