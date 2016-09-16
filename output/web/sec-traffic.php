<?php
$aYear=date('Y');

$sql_query= "
SELECT
COUNT(aStatus) AS total,
coalesce(sum(aStatus!='Peringatan 1' AND aStatus!='Peringatan 2' AND aStatus!='Selesai' AND aStatus!='Selesai(KIV)'), 0) AS yellow,
coalesce(sum(aStatus='Peringatan 1' OR aStatus='Peringatan 2'), 0) AS red,
coalesce(sum(aStatus='Selesai' OR aStatus='Selesai(KIV)'), 0) AS green
FROM audit_form
WHERE year(aDate) =$aYear";
$query_query=mysql_query($sql_query,$conn);
$query=mysql_fetch_array($query_query);
?>
<h1>PRESTASI AUDITAN SUSULAN</h1>

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
