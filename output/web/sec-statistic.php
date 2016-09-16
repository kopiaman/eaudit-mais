<?php
$aYear=date('Y');

$sql_total= "
SELECT
coalesce(sum(audit_plan.aTypeCode='A'), 0) AS a,
coalesce(sum(audit_plan.aTypeCode='B'), 0) AS b,
coalesce(sum(audit_plan.aTypeCode='C'), 0) AS c,
coalesce(sum(audit_plan.aTypeCode='D'), 0) AS d,
coalesce(sum(audit_plan.aTypeCode='E'), 0) AS e
FROM audit_plan
WHERE audit_plan.aYear=$aYear";
$query_total=mysql_query($sql_total,$conn);
$total=mysql_fetch_array($query_total);

$sql_going= "
SELECT
coalesce(sum(audit_plan.aTypeCode='A'), 0) AS a,
coalesce(sum(audit_plan.aTypeCode='B'), 0) AS b,
coalesce(sum(audit_plan.aTypeCode='C'), 0) AS c,
coalesce(sum(audit_plan.aTypeCode='D'), 0) AS d,
coalesce(sum(audit_plan.aTypeCode='E'), 0) AS e
FROM audit_plan
INNER JOIN audit_form ON audit_plan.planID = audit_form.planID
WHERE (audit_plan.aYear =$aYear) AND (audit_form.aStatus !='Selesai' AND audit_form.aStatus !='Selesai(KIV)')

";
$query_going=mysql_query($sql_going,$conn);
$going=mysql_fetch_array($query_going);

$sql_done= "
SELECT
coalesce(sum(audit_plan.aTypeCode='A'), 0) AS a,
coalesce(sum(audit_plan.aTypeCode='B'), 0) AS b,
coalesce(sum(audit_plan.aTypeCode='C'), 0) AS c,
coalesce(sum(audit_plan.aTypeCode='D'), 0) AS d,
coalesce(sum(audit_plan.aTypeCode='E'), 0) AS e
FROM audit_plan
INNER JOIN audit_form ON audit_plan.planID = audit_form.planID
WHERE (audit_plan.aYear =$aYear) AND (audit_form.aStatus ='Selesai' OR audit_form.aStatus ='Selesai(KIV)')


";
$query_done=mysql_query($sql_done,$conn);
$done=mysql_fetch_array($query_done);


?>
<style>
 .danger { background-color:red; }
 .warning { background-color: yellow }
</style>
<h1 align="center">STATISTIK AUDITAN <?php echo date('Y') ?></h1>
<div class="col-sm-4">
<h3>AUDITAN KEWANGAN</h3> <div class="table-responsive">
 
 

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
                        <td><?php echo $total['a']-$going['a']-$done['a'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                        <td><?php echo $going['a'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                        <td><?php echo $done['a'] ?></td>
                   
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                        <th><?php echo $total['a'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->

<div class="col-sm-4"> 
<h3> AUDITAN PATUH SYARIAH</h3><div class="table-responsive">

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
                         <td><?php echo $total['b']-$going['b']-$done['b'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                        <td><?php echo $going['b'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                        <td><?php echo $done['b'] ?></td>
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                          <th><?php echo $total['b'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->


<div class="col-sm-4"> 
<h3>AUDITAN INTEGRITI</h3><div class="table-responsive">

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
                        <td><?php echo $total['c']-$going['c']-$done['c'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                         <td><?php echo $going['c'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                         <td><?php echo $done['c'] ?></td>
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                        <th><?php echo $total['c'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->


<div class="row"></div>

<div class="col-sm-4"> 
<h3>AUDITAN SUSULAN</h3><div class="table-responsive">

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
                        <td><?php echo $total['d']-$going['d']-$done['d'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                         <td><?php echo $going['d'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                        <td><?php echo $done['d'] ?></td>
                   
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                        <th><?php echo $total['d'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 3 & table !-->



<div class="col-sm-4"> 
<h3>PENGURUSAN AUDIT DALAM</h3><div class="table-responsive">

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
                        <td><?php echo $total['e']-$going['e']-$done['e'] ?></td>
               
                    </tr>

                    <tr class="warning">
                        <td>Sedang Diaudit</td>
                         <td><?php echo $going['e'] ?></td>
            
                    </tr>

                    <tr class="done">
                        <td>Selesai Diaudit</td>
                        <td><?php echo $done['e'] ?></td>
                   
                    </tr>

    		   <tr >
                        <th>Jumlah</th>
                        <th><?php echo $total['e'] ?></th>
                   
                    </tr>
 
                </tbody>
            </table>
            
</div></div><!-- col 2 & table !-->

</div><!-- col 6!-->


<div class="col-sm-4"><!-- START  col 4!-->

