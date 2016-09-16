<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php include_once('head.php'); 

$aYear=$_GET['aYear'];
$orga=$_GET['orga'];

$sql_aType= "
SELECT
audit_plan.aTypeCode,
set_audit_type.aName,
audit_plan.subTypeID,
set_audit_subtype.subTypeName,
set_audit_subtype.subTypeCode
FROM audit_plan
LEFT OUTER JOIN set_audit_type ON audit_plan.aTypeCode = set_audit_type.aTypeCode
LEFT JOIN set_audit_subtype ON audit_plan.subTypeID = set_audit_subtype.subTypeID
WHERE (audit_plan.aYear =$aYear)
GROUP BY audit_plan.subTypeID 
";
$query_aType=mysql_query($sql_aType,$conn);
$planType=mysql_fetch_array($query_aType);

function plan($planBulan,$acBulan){
	
	  if($planBulan==1){ //jika plan sahaja
     $i= 'bgcolor="#CCCCCC"';		
	  }return $i;
}

function actual($planBulan, $actBulan){
	
		
	if($actBulan!=0){  //iika lambat
	$i= '<i class="fa fa-check fa-2x"></i>';	
	};return $i;
}

?>
<body role="document">
<section id="contactArea">
  <div class="container">
   
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td  align="center" valign="top"><h1><span class="text-center">
        SASARAN KERJA TAHUNAN <?php echo $aYear ?></span></h1></td>
      </tr>
    </table>
   
     <?php do{  ?>
    <br/><br/>
    <h2>
	<?php 
     $aTypeCode=$planType['aTypeCode'];$subTypeID=$planType['subTypeID'];
     $aTypeName=$planType['aName'];  $subTypeName=$planType['subTypeName'];$subTypeCode=$planType['subTypeCode'];
     echo $aTypeName.'<br/>';
	 echo $subTypeCode.' '.$subTypeName; ?>
     </h2>
    
    
    <table width="1260" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="20" scope="col">BIL</th>
        <th width="700" scope="col">AKTIVITI</th>
        <th width="100" scope="col">Mesyuarat MJKA</th>
        <th width="100" scope="col">Auditi</th>
        <th width="30" scope="col">JAN</th>
        <th width="30" scope="col">FEB</th>
        <th width="30" scope="col">MAC</th>
        <th width="30" scope="col">APR</th>
        <th width="30" scope="col">MAY</th>
        <th width="30" scope="col">JUN</th>
        <th width="30" scope="col">JUL</th>
        <th width="30" scope="col">AUG</th>
        <th width="30" scope="col">SEP</th>
        <th width="30" scope="col">OCT</th>
        <th width="30" scope="col">NOV</th>
        <th width="30" scope="col">DEC</th>
      </tr>
      
<?php 
	  
$sql_plan= "
SELECT
audit_plan.planID,
audit_plan.aTypeCode,
audit_plan.aTitle,
audit_plan.meeting,
audit_plan.aYear,
audit_plan.jan,
audit_plan.feb,
audit_plan.mac,
audit_plan.apr,
audit_plan.may,
audit_plan.jun,
audit_plan.jul,
audit_plan.aug,
audit_plan.sep,
audit_plan.oct,
audit_plan.nov,
audit_plan.dece,
audit_plan.procedureID,
audit_plan.notes,
audit_plan.`organization` AS orga,
audit_form.aDate,
MONTH(audit_form.aDate) AS bulan,
SUM(IF(MONTH(audit_form.aDate)=1,1,0)) AS acJan,
SUM(IF(MONTH(audit_form.aDate)=2,1,0)) AS acFeb,
SUM(IF(MONTH(audit_form.aDate)=3,1,0)) AS acMac,
SUM(IF(MONTH(audit_form.aDate)=4,1,0)) AS acApr,
SUM(IF(MONTH(audit_form.aDate)=5,1,0)) AS acMay,
SUM(IF(MONTH(audit_form.aDate)=6,1,0)) AS acJun,
SUM(IF(MONTH(audit_form.aDate)=7,1,0)) AS acJul,
SUM(IF(MONTH(audit_form.aDate)=8,1,0)) AS acAug,
SUM(IF(MONTH(audit_form.aDate)=9,1,0)) AS acSep,
SUM(IF(MONTH(audit_form.aDate)=10,1,0)) AS acOct,
SUM(IF(MONTH(audit_form.aDate)=11,1,0)) AS acNov,
SUM(IF(MONTH(audit_form.aDate)=12,1,0)) AS acDec
FROM audit_plan
LEFT JOIN audit_form ON audit_plan.planID = audit_form.planID
WHERE audit_plan.aYear=$aYear  AND audit_plan.aTypeCode='$aTypeCode' AND audit_plan.subTypeID='$subTypeID'
GROUP BY audit_plan.planID
";
$query_plan=mysql_query($sql_plan,$conn);
$plan=mysql_fetch_array($query_plan);
			
	  $i=1;do{ 
	
		

	  ?>
          <tr>
            <td align="center" valign="top"><span class="text-center"><?php echo $i; ?></span></td>
            <td valign="top"><span class="text-center"><?php echo $plan['aTitle'] ?></span></td>
            
         <td valign="top"><span class="text-center"><?php echo $plan['meeting'] ?></span></td>
         <td valign="top"><span class="text-center"><?php echo $plan['orga'] ?></span></td>
            <td valign="top" <?php echo plan($plan['jan'],$plan['acJan']); ?>>  <?php echo actual($plan['jan'],$plan['acJan']); ?></td>
            <td valign="top" <?php echo plan($plan['feb'],$plan['acFeb']); ?>>  <?php echo actual($plan['feb'],$plan['acFeb']); ?></td>
             <td valign="top" <?php echo plan($plan['mac'],$plan['acMac']); ?>>  <?php echo actual($plan['mac'],$plan['acMac']); ?></td>
             <td valign="top" <?php echo plan($plan['apr'],$plan['acApr']); ?>>  <?php echo actual($plan['apr'],$plan['acApr']); ?></td>
            <td valign="top" <?php echo plan($plan['may'],$plan['acMay']); ?>>  <?php echo actual($plan['may'],$plan['acMay']); ?></td>
            <td valign="top" <?php echo plan($plan['jun'],$plan['acJun']); ?>>  <?php echo actual($plan['jun'],$plan['acJun']); ?></td>
            <td valign="top" <?php echo plan($plan['jul'],$plan['acJul']); ?>>  <?php echo actual($plan['jul'],$plan['acJul']); ?></td>
             <td valign="top" <?php echo plan($plan['aug'],$plan['acAug']); ?>>  <?php echo actual($plan['aug'],$plan['acAug']); ?></td>
            <td valign="top" <?php echo plan($plan['sep'],$plan['acSep']); ?>>  <?php echo actual($plan['sep'],$plan['acSep']); ?></td>
              <td valign="top" <?php echo plan($plan['oct'],$plan['acOct']);?>> <?php echo actual($plan['oct'],$plan['acOct']); ?></td>
            <td valign="top" <?php echo plan($plan['nov'],$plan['acNov']); ?>> <?php echo actual($plan['nov'],$plan['acNov']); ?></td>
            <td valign="top" <?php echo plan($plan['dece'],$plan['acDec']); ?>> <?php echo actual($plan['dece'],$plan['acDec']); ?> </td>
          </tr>   <?php $i++; }while($plan=mysql_fetch_array($query_plan))  ?>
        </table>
    
    
    <?php }while($planType=mysql_fetch_array($query_aType)) ?>
    
    

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