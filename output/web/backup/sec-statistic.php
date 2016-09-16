<?php
$aYear=date('Y');

$sql_total= "
SELECT
coalesce(sum(audit_plan.aType='KEWANGAN'), 0) AS kewangan,
coalesce(sum(audit_plan.aType='SUSULAN'), 0) AS susulan,
coalesce(sum(audit_plan.aType='AD-HOC'), 0) AS adhoc,
coalesce(sum(audit_plan.aType='PRESTASI'), 0) AS prestasi
FROM audit_plan
WHERE audit_plan.aYear=$aYear";
$query_total=mysql_query($sql_total,$conn);
$total=mysql_fetch_array($query_total);

$sql_going= "
SELECT
coalesce(sum(audit_plan.aType='KEWANGAN'), 0) AS kewangan,
coalesce(sum(audit_plan.aType='SUSULAN'), 0) AS susulan,
coalesce(sum(audit_plan.aType='AD-HOC'), 0) AS adhoc,
coalesce(sum(audit_plan.aType='PRESTASI'), 0) AS prestasi
FROM audit_plan
INNER JOIN audit_form ON audit_plan.planID = audit_form.planID
WHERE (audit_plan.aYear =$aYear) AND (audit_form.aStatus !='Selesai' AND audit_form.aStatus !='Selesai(KIV)')";
$query_going=mysql_query($sql_going,$conn);
$going=mysql_fetch_array($query_going);

$sql_done= "
SELECT
coalesce(sum(audit_plan.aType='KEWANGAN'), 0) AS kewangan,
coalesce(sum(audit_plan.aType='SUSULAN'), 0) AS susulan,
coalesce(sum(audit_plan.aType='AD-HOC'), 0) AS adhoc,
coalesce(sum(audit_plan.aType='PRESTASI'), 0) AS prestasi
FROM audit_plan
INNER JOIN audit_form ON audit_plan.planID = audit_form.planID
WHERE (audit_plan.aYear =$aYear) AND (audit_form.aStatus ='Selesai' OR audit_form.aStatus ='Selesai(KIV)')";
$query_done=mysql_query($sql_done,$conn);
$done=mysql_fetch_array($query_done);


?>


<h1 align="center">STATISTIK AUDITAN <?php echo date('Y') ?></h1>
<div class="col-sm-3">

<div class="icon"> <i class="fa fa-briefcase"></i> </div><h3>KEWANGAN</h3> <div class="table-responsive">
 
 

                <table class="table">
                <thead>
                    <tr>
                        <th width="80%">STATUS</th>
                        <th width="20%">BIL</th>
                
                    </tr>
                </thead>
                <tbody>

		 

                    <tr class="danger">
                        <td>Belum Diaudit</td>
                        <td><?php echo $total['kewangan']-$going['kewangan']-$done['kewangan'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                        <td><?php echo $going['kewangan'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                        <td><?php echo $done['kewangan'] ?></td>
                   
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                        <th><?php echo $total['kewangan'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->

<div class="col-sm-3"> 
<div class="icon" ><i class="fa fa-signal"></i></div><br /><h3> PRESTASI</h3><div class="table-responsive">

                <table class="table">
                <thead>
                    <tr>
                        <th width="80%">STATUS</th>
                        <th width="20%">BIL</th>
                
                    </tr>
                </thead>
                <tbody>

		 

                    <tr class="danger">
                        <td>Belum Diaudit</td>
                         <td><?php echo $total['prestasi']-$going['prestasi']-$done['prestasi'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                        <td><?php echo $going['prestasi'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                        <td><?php echo $done['prestasi'] ?></td>
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                          <th><?php echo $total['prestasi'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->


<div class="col-sm-3"> 
<div class="icon" > <i class="fa fa-bolt "></i> </div><br /><h3>AD-HOC</h3><div class="table-responsive">

                <table class="table">
                <thead>
                    <tr>
                        <th width="80%">STATUS</th>
                        <th width="20%">BIL</th>
                
                    </tr>
                </thead>
                <tbody>

		 

                    <tr class="danger">
                        <td>Belum Diaudit</td>
                        <td><?php echo $total['adhoc']-$going['adhoc']-$done['adhoc'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                         <td><?php echo $going['adhoc'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                         <td><?php echo $done['adhoc'] ?></td>
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                        <th><?php echo $total['adhoc'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->




<div class="col-sm-3"> 
<div class="icon"> <i class="fa fa-exchange "></i> </div><br /><h3>SUSULAN</h3><div class="table-responsive">

                <table class="table">
                <thead>
                    <tr>
                        <th width="80%">STATUS</th>
                        <th width="20%">BIL</th>
                
                    </tr>
                </thead>
                <tbody>

		 

                    <tr class="danger">
                        <td>Belum Diaudit</td>
                        <td><?php echo $total['susulan']-$going['susulan']-$done['susulan'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                         <td><?php echo $going['susulan'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                        <td><?php echo $done['susulan'] ?></td>
                   
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                        <th><?php echo $total['susulan'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->


</div><!-- col 6!-->


<div class="col-sm-4"><!-- START  col 4!-->

