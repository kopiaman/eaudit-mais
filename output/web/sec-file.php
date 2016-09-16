<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body role="document" >
<?php include('headWelcome.php') ?>
<!-- start header -->
<?php include('headNav.php') ?>
<!-- end header --> 
<?php
$category=$_GET['category'];
$sql_panduan= "SELECT webID,webCategory,webTitle,webAttachment FROM web_file WHERE webCategory='$category'";
$query_panduan=mysql_query($sql_panduan,$conn);
$panduan=mysql_fetch_array($query_panduan);

?>

<div class="container" style="min-height:600px">
<h1 align="center">PANDUAN</h1>
 <div class="col-sm-12">

<table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width="95%">  </th>
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
 </div> <!-- container !-->
 
<!-- start contact detail -->
<?php include('footer.php') ?>
</body>
</html>
 
 
