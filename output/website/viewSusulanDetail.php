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
     
     
    <table width="1020" border="0" cellpadding="0">
       <tr>
         <th scope="col"><h3 style="color:#00CC00"><i class="fa fa-circle fa-4x"></i><br>
         SELESAI </h3></th>
       </tr>
    </table>
    <table width="1020" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="450" scope="col">TAJUK</th>
        <th width="100" align="center" scope="col">BIL ISU</th>
        <th width="450" align="center" scope="col" bgcolor="#00CC00">PENEMUAN</th>
      </tr>
      <?php 


	    
	   $i=1;do{ 
	   
	   
	  $planID=$done['planID'];
$sql_isu= " 
SELECT
audit_form.fid,
audit_form.planID,
audit_info.finding
FROM audit_form
INNER JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_form.planID=$planID AND (audit_form.aStatus='Selesai' OR audit_form.aStatus='Selesai(KIV)')";
$query_isu=mysql_query($sql_isu,$conn);
$isu=mysql_fetch_array($query_isu); ?>
          <tr>
            <td align="center" valign="top"><span class="text-center"><?php echo $i; ?></span></td>
            <td valign="top"><span class="text-center"><?php 
			echo $done['tajuk'] ?></span></td>
            
         
            <td align="center" valign="top"><?php echo $done['bilIsu']; ?></td>
            <td align="center" valign="top"><?php 
			$f=1;
			echo '<ol>';
			do{
			
			echo '<li style="text-align:left">'.$isu['finding'].'</li>' ;
			
			$f++;
			}while($isu=mysql_fetch_array($query_isu));
			echo '</ol>';?></td>
          </tr><?php $i++; }while($done=mysql_fetch_array($query_done))  ?>
          <tr>
            <th colspan="2" align="right" valign="top">JUMLAH ISU</th>
            <td align="center" valign="top"><?php echo $total['selesai'] ?></td>
            <td align="center" valign="top">&nbsp;</td>
          </tr>   
          
    </table>
    
  
  
     
    <p>&nbsp;</p>
    <table width="1020" border="0" cellpadding="0">
       <tr>
         <th scope="col"><h3 ><i class="fa fa-circle fa-4x" style="color:#FFFF00"></i><br/>DALAM TINDAKAN </h3></th>
      </tr>
     </table>
    <table width="1020" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="450" scope="col">TAJUK</th>
        <th width="100" align="center" scope="col">BIL ISU</th>
        <th width="450" align="center" scope="col" bgcolor="#FFFF00">PENEMUAN</th>
      </tr>
      <?php 


	    
	   $i=1;do{ 
	   
	   
	  $planID=$sedang['planID'];
$sql_isu= " 
SELECT
audit_form.fid,
audit_form.planID,
audit_info.finding
FROM audit_form
INNER JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_form.planID=$planID 
AND audit_form.aStatus!='Selesai' AND audit_form.aStatus!='Selesai(KIV)' 
AND audit_form.aStatus!='Peringatan 1' AND audit_form.aStatus!='Peringatan 2'";
$query_isu=mysql_query($sql_isu,$conn);
$isu=mysql_fetch_array($query_isu); ?>
      <tr>
        <td align="center" valign="top"><span class="text-center"><?php echo $i; ?></span></td>
        <td valign="top"><span class="text-center"><?php echo $sedang['tajuk'] ?></span></td>
        <td align="center" valign="top"><?php echo $sedang['bilIsu']; ?></td>
        <td align="center" valign="top"><?php 
			$f=1;
			echo '<ol>';
			do{
			
			echo '<li style="text-align:left">'.$isu['finding'].'</li>' ;
			
			$f++;
			}while($isu=mysql_fetch_array($query_isu));
			echo '</ol>';?></td>
      </tr>  <?php $i++; }while($sedang=mysql_fetch_array($query_sedang))  ?>
      <tr>
        <th colspan="2" align="right" valign="top">JUMLAH ISU</th>
        <td align="center" valign="top"><?php echo $total['sedang'] ?></td>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    
    </table>
    
    
    
    <h3 align="center" style="color:#FF0000"><i class="fa fa-circle fa-4x"></i><br>BELUM AMBIL TINDAKAN </h3>
    <table width="1020" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="450" scope="col">TAJUK</th>
        <th width="100" align="center" scope="col">BIL ISU</th>
        <th width="450" align="center" scope="col" bgcolor="#FF0000">PENEMUAN</th>
      </tr>
      <?php 


	    
	   $i=1;do{ 
	   
	   
	  $planID=$tidak['planID'];
$sql_isu= " 
SELECT
audit_form.fid,
audit_form.planID,
audit_info.finding
FROM audit_form
INNER JOIN audit_info ON audit_form.fid = audit_info.fid
WHERE audit_form.planID=$planID 
AND audit_form.aStatus='Peringatan 1' OR audit_form.aStatus='Peringatan 2'";
$query_isu=mysql_query($sql_isu,$conn);
$isu=mysql_fetch_array($query_isu);  ?>
      <tr>
        <td align="center" valign="top"><span class="text-center"><?php echo $i; ?></span></td>
        <td valign="top"><span class="text-center"><?php echo $tidak['tajuk'] ?></span></td>
        <td align="center" valign="top"><?php echo $tidak['bilIsu']; ?></td>
        <td align="center" valign="top"><?php 
			$f=1;
			echo '<ol>';
			do{
			
			echo '<li style="text-align:left">'.$isu['finding'].'</li>' ;
			
			$f++;
			}while($isu=mysql_fetch_array($query_isu));
			echo '</ol>';?></td>
      </tr> <?php $i++; }while($tidak=mysql_fetch_array($query_tidak))  ?>
      <tr>
        <th colspan="2" align="right" valign="top">JUMLAH ISU</th>
        <td align="center" valign="top"><?php echo $total['tidak'] ?></td>
        <td align="center" valign="top">&nbsp;</td>
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