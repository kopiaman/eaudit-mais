<?php include_once('head.php'); 

$fid=$_GET['fid'];

$sql_at= "
SELECT
audit_form.fid,
audit_form.`ref`,
audit_form.aDate,
audit_form.dateApprove,
audit_form.aStatus,
audit_form.aTypeCode,
audit_form.userID,
audit_form.userCheck,
audit_form.userAuditee,
`user`.fullName AS penyedia,
`user`.department AS jabatan,
user1.fullName AS pelulus,
auditee.fullname AS auditee,
auditee.sector ,
auditee.department,
auditee.paid,
auditee.agency
FROM audit_form
LEFT JOIN `user` ON audit_form.userID = `user`.userID
LEFT JOIN `user` AS user1 ON audit_form.userApprove = user1.userID
LEFT JOIN auditee ON audit_form.userAuditee = auditee.aid
WHERE audit_form.fid='$fid'";
$query_at=mysql_query($sql_at,$conn);
$row=mysql_fetch_array($query_at);


$sql_detail= "
SELECT
audit_info.inid,
audit_info.fid,
audit_info.finding,
audit_info.refyID,
audit_info.suggest,
audit_info.attachment,
audit_info.answer,audit_info.answer2,audit_info.answer3,
audit_info.iStatus,
audit_info.reply_attachment, audit_info.reply_attachment2, audit_info.reply_attachment3,
reference_detail.detail AS rujukan
FROM audit_info
LEFT JOIN `reference_detail` ON audit_info.refyID = reference_detail.refyID
WHERE audit_info.fid=$fid";
$query_detail=mysql_query($sql_detail,$conn);
$detail=mysql_fetch_array($query_detail);


$status=$row['aStatus'];

?>
<body role="document">
<section id="contactArea">
  <div class="container">
    <h1 class="text-center">&nbsp;</h1>
    <table width="1050" border="0" cellpadding="0">
      <tr>
        <td width="17%" rowspan="3" valign="top"><?php include('letterhead.php') ?></td>
        <td colspan="2" valign="top"><h1><span class="text-center">BORANG PEMERHATIAN AUDIT DALAM MAIS</span></h1>
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td width="32%" valign="top"><strong>NO QUERY : <?php echo $row['ref']; ?></strong></td>
        <td width="51%" valign="top"><strong>Tarikh:</strong> <?php echo dates($row['dateApprove']) ?></td>
      </tr>
      <tr>
        <td height="121" valign="top"><p><strong>AUDITOR </strong></p>
          <p>NAMA: <?php echo $row['pelulus'] ?><br>
        JAWATAN: Ketua Audit Dalam </p></td>
        <td valign="top"><p><strong>AUDITI</strong></p>
        <p>NAMA:<?php echo $row['auditee'] ?> <br>
        JAWATAN: <?php echo $row['jawatan']; ?>-<?php echo $row['sector'].'/'.$row['department']; ?><?php echo $row['paid']; ?><?php echo $row['agency']; ?></p></td>
      </tr>
    </table>
    <p>
      <?php $i=1;do{ ?>
    </p>
    <table width="1050" border="1" cellpadding="10" cellspacing="0" class="plainTable">
      <tr>
        <th width="50" scope="col">BIL</th>
        <th width="250" scope="col">PENEMUAN</th>
        <th width="250" scope="col">PROSEDUR/ RUJUKAN</th>
        <th width="250" scope="col">CADANGAN</th>
        <th width="250" scope="col">MAKLUM BALAS</th>
      </tr>
      <tr>
        <td align="center" valign="top"><span class="text-center"><?php echo $i; ?></span></td>
        <td valign="top"><?php echo $detail['finding']; ?><br>

         <?php if($detail['attachment']){?>	
        <a href="../<?php echo full($detail['attachment']); ?>" target="_blank"> ATTACHMENT</a>
 		<?php  };?>

        </td>

        <td valign="top"><?php echo $detail['rujukan']; ?></td>
        <td valign="top"><?php echo $detail['suggest']; ?></td>
        <td valign="top"> 
        
         <?php  $inid=$detail['inid'];
		 
		    if($status=='Query Dihantar'|| $status=='Peringatan Mesra'|| $status=='Peringatan 1'||$status=='Peringatan 2'){ ?>             
   <?php $paperlink="../auditee/output/auditee_reply_edit.php?editid1=$inid"; ?>
   <a href="#"  onclick="window.open('<?php echo $paperlink?>','name','width=800,height=500')" class="btn btn-primary btn-lg" > ISI MAKLUM BALAS</a> 
   <?php }else if($status=='Susulan 1'){ ?>             
   <?php $paperlink2="../auditee/output/auditee_reply2_edit.php?editid1=$inid"; ?>
   <a href="#"  onclick="window.open('<?php echo $paperlink2?>','name','width=800,height=500')" class="btn btn-primary btn-lg" > ISI MAKLUM BALAS SUSULAN 1</a> 
   <?php }else if($status=='Susulan 2'){ ?>             
   <?php $paperlink3="../auditee/output/auditee_reply3_edit.php?editid1=$inid"; ?>
   <a href="#"  onclick="window.open('<?php echo $paperlink3?>','name','width=800,height=500')" class="btn btn-primary btn-lg" > ISI MAKLUM BALAS SUSULAN 2</a> 
   <?php }; ?>
        </td>
      </tr>
    </table>
    <p>
      <?php $i++; }while($detail=mysql_fetch_array($query_detail))  ?>
    </p>
    </div>
 
</section> 
<p align="center">KLIK BUTANG 'HANTAR' JIKA TELAH SELESAI <br>
<a href="thankyou.php?fid=<?php echo $row['fid']?>">HANTAR </a></p>
  
</body>
</html>