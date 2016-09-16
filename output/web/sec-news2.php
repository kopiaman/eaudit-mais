<style>

/*#####################
Additional Styles (required)
######################*/
#myCarouselNews{
	margin:0px 0px 40px 0px;
	height:300px;
}

.carousel-indicators {
	bottom:-40px;
	left:0;
	width:100%;
	background:#FFF;
	padding: 6px 0px;
	margin-left:0;
	border-top:2px solid #CCC;
}
.carousel-indicators li {
	width:12px;
	height:12px;	
	background:#CCC;
	border-color:#fff;

}
.carousel-indicators .active {
	width:14px;
	height:14px;
	background:#428bca;
	border-color:#428bca;
}
.carousel-inner .thumbnail {
	margin-bottom:0;
	border-bottom-left-radius:0;
	border-bottom-right-radius:0;
}
.carousel-inner .caption {
	
	padding: 10px;
}

</style>
<?php
$sql_news= " SELECT `wnID`, `wContent`, `wType`, `wDate`, `wStatus`,wPic, wTitle FROM `web_news` WHERE wType='Berita' AND wStatus='On' ORDER BY wnID DESC LIMIT 0,5";
$query_news=mysql_query($sql_news,$conn);
$news=mysql_fetch_array($query_news);

$query_newsNav=mysql_query($sql_news,$conn);
$newsNav=mysql_fetch_array($query_newsNav);
?>
<h1>BERITA</h1>
            <!-- Carousel
            ================================================== -->
            <div id="myCarouselNews" class="carousel slide">        
                <div class="carousel-inner">  
                
                 <?php 
				 $n=1; 
				 do { 
				      if($n==1){ $nActive='active'; }else{ $nActive=''; }; 
				 ?>         
                    <div class="item <?php echo $nActive?>"> 
                    	<!--<a href="#"><img class="thumbnail" src="../<?php // echo thumb($news['wPic']) ?>"  style="height:300px; width:600px;"></a>-->
                        <div class="caption">
                       	  <h4 style="color:purple"><?php echo dates($news['wDate']).' |'.$news['wTitle'];?></h4>
                            <p><?php echo trim_text($news['wContent'],700,$news['wnID']);?> </p>
                        </div>
                    </div>
                  
                     <?php $n++; }while($news=mysql_fetch_array($query_news)); ?>                                                                                 
                </div>
                 <!-- Indicators -->
                  <ol class="carousel-indicators">
                  <?php 
				  $nv=0;
				  do{ 
				   if($nv==0){ $nvActive='active'; }else{ $nvActive=''; }; 
				  ?>
                    <li data-target="#myCarouselNews" data-slide-to="<?php echo $nv?>" class="<?php echo $nActive?>"></li>
                    
                    <?php 
					$nv++;
					}while($newsNav=mysql_fetch_array($query_newsNav)); ?>
                 
                  </ol>                                                                 
            </div><!-- End Carousel -->  
