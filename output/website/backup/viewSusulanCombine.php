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
    LAPORAN RINGKASAN AUDITAN SUSULAN  <?php echo $aYear ?></span>   </h1>
           <h2><?php echo $orga ?></h2>
      
        </td>
      </tr>
    </table>
    <table width="1026" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="700" scope="col">TAJUK</th>
        <th width="80" align="center" scope="col">BIL ISU</th>
        <th width="80" align="center" scope="col" bgcolor="#00CC00">SELESAI</th>
        <th width="80" align="center" scope="col" bgcolor="#FFFF00">DALAM TINDAKAN</th>
        <th width="80" align="center" scope="col" bgcolor="#FF0000">BELUM AMBIL TINDAKAN</th>
        <th width="300" scope="col">AUDITI</th>
      </tr>
      <?php 
	    
	   $i=1;do{ 
	   
	   $planID=$aktiviti['planID']; 
	   
		$sql_auditee= " 
		SELECT
		
		audit_form.fid,
		audit_form.planID,
		audit_info.finding,
		auditee.aid,
		auditee.fullname,
		auditee.sector,
		auditee.department,
		auditee.agency,
		auditee.paid
		FROM audit_form
		LEFT JOIN audit_info ON audit_form.fid = audit_info.fid
		LEFT JOIN auditee ON audit_form.userAuditee = auditee.aid
		WHERE audit_form.planID =$planID 
		GROUP BY auditee.aid ";
		$query_auditee=mysql_query($sql_auditee,$conn);
		$auditee=mysql_fetch_array($query_auditee); 
	   
		 ?>
<tr>
            <td align="center" valign="top"><span class="text-center"><?php echo $i; ?></span></td>
            <td valign="top"><span class="text-center"><?php echo $aktiviti['tajuk'] ?></span></td>
            
            <td align="center" valign="top"><?php echo $aktiviti['bilIsu']; ?></td>
            <td align="center" valign="top"><?php echo $aktiviti['selesai'] ?></td>
             <td align="center" valign="top"><?php echo $aktiviti['sedang']; ?></td>
             <td align="center" valign="top"><?php  echo $aktiviti['tidak'];  ?></td>
            <td valign="top">
            <?php
            echo '<ol>';
			do{
			if($auditee['aid']){
			echo '<li style="text-align:left">'.$auditee['agency'].$auditee['sector'].$auditee['department'].$auditee['paid'].'</li>' ;
			};
			
			}while($auditee=mysql_fetch_array($query_auditee));
			echo '</ol>';?>
            
            
            </td>
          </tr><?php $i++; }while($aktiviti=mysql_fetch_array($query_aktiviti))  ?>
<tr>
  <td colspan="2" align="center" valign="top">&nbsp;</td>
  <td align="center" valign="top"><?php echo $total['bilIsu'] ?></td>
  <td align="center" valign="top"><?php echo $total['selesai'] ?></td>
  <td align="center" valign="top"><?php echo $total['sedang'] ?></td>
  <td align="center" valign="top"><?php echo $total['tidak'] ?></td>
  <td valign="top"></td>
</tr>   

        </table>
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