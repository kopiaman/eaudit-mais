<?php
$sql_panduan= "SELECT webID,webCategory,webTitle,webAttachment FROM web_file WHERE webCategory='panduan'";
$query_panduan=mysql_query($sql_panduan,$conn);
$panduan=mysql_fetch_array($query_panduan);

$sql_rujukan= "SELECT webID,webCategory,webTitle,webAttachment FROM web_file WHERE webCategory='rujukan'";
$query_rujukan=mysql_query($sql_rujukan,$conn);
$rujukan=mysql_fetch_array($query_rujukan);

$sql_laporan= "SELECT webID,webCategory,webTitle,webAttachment FROM web_file WHERE webCategory='laporan'";
$query_laporan=mysql_query($sql_laporan,$conn);
$laporan=mysql_fetch_array($query_laporan);
?>

<h1 align="center">PANDUAN</h1>
<section id="rujukan" >
 <div class="col-sm-6">

<table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="95%"> GARIS PANDUAN </th>
                    </tr>
                </thead>
                <tbody>
                <?php $p=1; do { ?>
                    <tr>
                        <td><?php echo $p ?></td>
                        <td><a href="<?php echo '../'.full($panduan['webAttachment']); ?>" target="_blank"><?php echo $panduan['webTitle'] ?></a></td>
                    </tr>
              
                    <?php $p++; }while($panduan=mysql_fetch_array($query_panduan));  ?>
                </tbody>
            </table>
           
</div><!-- col 4 -->
 </section> <!-- rujukan section end !-->
 
<div class="col-sm-6">
 <section id="panduan" >
<table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="95%"> RUJUKAN/PEKELILING</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $r=1; do { ?>
                    <tr>
                        <td><?php echo $r ?></td>
                         <td><a href="<?php echo '../'.full($rujukan['webAttachment']); ?>" target="_blank"><?php echo $rujukan['webTitle'] ?></a></td>
                    </tr>
              
                    <?php $r++; }while($rujukan=mysql_fetch_array($query_rujukan));  ?>
                </tbody>
            </table>
            </section> <!-- panduan section end !-->
            
             <section id="laporan" > 
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="95%">  KERTAS LAPORAN AUDIT</th>
                    </tr>
                </thead>
                <tbody>
                   <?php $y=1; do { ?>
                    <tr>
                        <td><?php echo $y ?></td>
                         <td><a href="<?php echo '../'.full($laporan['webAttachment']); ?>" target="_blank"><?php echo $laporan['webTitle'] ?></a></td>
                    </tr>
					<?php $y++; }while($laporan=mysql_fetch_array($query_laporan));  ?>
                </tbody>
            </table> 
            </section>
</div><!-- col 6 -->
 
 
 
