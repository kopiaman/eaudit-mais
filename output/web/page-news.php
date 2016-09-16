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
    
    <?php
	
    $image_name=$news['wPic'];
	$arr=json_decode($image_name);
	
	//$full=$obj[0]->name;
	//$thumbs=$obj[0]->thumbnail; 
	
	$numberofItem=count($arr); //count number of object in array
	/*
	for($i=0;$i<$numberofItem;$i++){   //loop through array
	 echo $arr[$i]->name;
	 echo '<br/>';	
	};
	
	*/
	
    
    ?>
    
    
    <ul id="Grid">
    
               <?php  for($i=0;$i<$numberofItem;$i++){
				   
				  $full=$arr[$i]->name;
	             $thumbs=$arr[$i]->thumbnail;
				 
				  $filename=$arr[$i]->usrName;
				   
				     ?>    
    			    
                  
                	<a href="../<?php echo  $full;?>" data-lightbox="<?php echo  $filename;?>">  <img src="../<?php echo $thumbs;?>" width="250px" height="150px;"></a>
                   
                 
              
				<?php }; ?>
	</ul>
    
    
    </div><!-- col 12 -->
</div><!-- container end !-->  


<!-- start contact detail -->
<?php include('footer.php') ?>
</body>
</html>