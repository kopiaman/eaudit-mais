<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body role="document" >
<?php include('headWelcome.php') ?>
<!-- start header -->
<?php include('headNav.php') ?>
<!-- end header --> 
<?php
$newsID=$_GET['newsID'];
$sql_news= " SELECT `wnID`, `wContent`, `wType`, `wDate`, `wStatus`,wPic, wTitle FROM `web_news` WHERE wnID=$newsID AND wType='Berita'";
$query_news=mysql_query($sql_news,$conn);
$news=mysql_fetch_array($query_news);
?>
<div class="container" style="min-height:600px">
    <div class="col-sm-12">
    <h4 style="color:purple"><?php echo dates($news['wDate']).' |'.$news['wTitle'];?></h4>
    <p><?php echo $news['wContent']?></p>
    
    
    
    
    </div><!-- col 12 -->
</div><!-- container end !-->  

<!-- start contact detail -->
<?php include('footer.php') ?>
</body>
</html>