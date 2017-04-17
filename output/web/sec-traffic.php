<?php
$aYear=date('Y');

$sql_query= "
SELECT
    
    SUM(IF(audit_form.aStatus LIKE '%Selesai%', 1, 0)) AS green,
    SUM(IF(audit_form.aStatus LIKE 'Query Dihantar' OR audit_form.aStatus LIKE '%Maklum Balas%' OR audit_form.aStatus LIKE '%Susulan%', 1, 0)) AS yellow,
    SUM(IF(audit_form.aStatus LIKE '%Peringatan%', 1, 0)) AS red
    FROM audit_form
    LEFT JOIN audit_plan ON audit_form.planID = audit_plan.planID
    LEFT JOIN audit_info ON audit_form.fid = audit_info.fid
    WHERE audit_plan.aYear=$aYear
    
";
$query_query=mysql_query($sql_query,$conn);
$query=mysql_fetch_array($query_query);
?>
<h1>PRESTASI AUDITAN SUSULAN <?php echo $aYear ?></h1>

<div class="table-responsive">

                <table width="30%" class="table">
                <thead>
                    <tr>
                        <th width="87%">STATUS</th>
                        <th width="13%">BIL</th>
                
                    </tr>
                </thead>
                <tbody >

         

                    <tr >
                        <td>Isu / Penambahbaikan Belum Diambil  Tindakan</td>
                        <td style="background-color:black"><div class="icon" style="background-color:red; color:white">
                        <a href="../website/viewSusulanDetailCombine.php?aYear=<?php echo date('Y') ?>" target="_blank"><?php echo $query['red']; ?> </a></div></td>
               
                    </tr>

                    <tr >
                        <td>Dalam Proses Tindakan</td>
                       <td style="background-color:black"><div class="icon" style="background-color:yellow; color:black">
                       <a href="../website/viewSusulanDetailCombine.php?aYear=<?php echo date('Y') ?>" target="_blank"><?php echo $query['yellow']; ?> </a></div></td>
                      
            
                    </tr>

                    <tr >
                        <td height="59">Isu Selesai / Telah Ambil Tindakan</td>
                        <td style="background-color:black"><div class="icon" style="background-color:green; color:white"> 
                         <a href="../website/viewSusulanDetailCombine.php?aYear=<?php echo date('Y') ?>" target="_blank"><?php echo $query['green']; ?> </a></div></td>
                        
                   
                    </tr>
 
                </tbody>
            </table>
            
</div>