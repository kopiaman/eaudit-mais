<style>
/*#####################
Additional Styles (required)
#####################*/
.carousel-control.left, .carousel-control.right {
	background-image:none !important;
}
.carousel-inner .item img {
	width:100%;
	height:100%;
}
.carousel-indicators {
	bottom:5px;
	left:0;
	width:auto;
	padding:5px 25px 5px 25px;
	margin-left:0;
	background:rgba(0,0,0,0.7);
}
.carousel-indicators li {
	border-radius:0;
	width:8px;
	height:8px;
	background:#fff;
}
.carousel-indicators .active {
	width:10px;
	height:10px;
	background:#39b3d7;
	border-color:#39b3d7;
}
.carousel-control {
	background:	#39b3d7;
	color:#fff;
	padding: 4px 0;
	width:26px;
	top:auto;	
	left:auto;
	bottom:12px;
	opacity:0.85;
}
.carousel-control.right {
	right:10px;
}
.carousel-control.left {
	right: 46px;
}
.carousel-caption {
	top:auto;
	width:auto;
	right:auto;
	bottom:60px;
	left:0;
	padding:10px;
	background:rgba(0,0,0,0.30);
	text-align:left;
  	height:auto;
	max-width:50%;
}

#sliderClip {
	height:440px; 
}

</style>
<?php
$sql_slider= " SELECT `wnID`, `wContent`, `wType`, `wDate`, `wStatus`, wTitle, wPic FROM `web_news` WHERE wType='Slider' AND wStatus='On' ORDER BY wnID DESC LIMIT 0,5";
$query_slider=mysql_query($sql_slider,$conn);
$slider=mysql_fetch_array($query_slider);


$sql_newsNav= " SELECT COUNT(wnID) AS bil FROM `web_news` WHERE wType='Slider' AND wStatus='On' ORDER BY wnID DESC LIMIT 0,5";
$query_newsNav=mysql_query($sql_newsNav,$conn);
$newsNav=mysql_fetch_array($query_newsNav);
?>
<div class="container">
    <div id="myCarousel" class="carousel slide">
    
      <div class="carousel-inner">
      
      <?php 
	  $s=1;
	   
	  do{
		  if($s==1){ $sliderActive='active'; }else{ $sliderActive=''; }; 
	 ?>
        <article class="item <?php echo $sliderActive?>">
         
          <img src="../<?php echo thumb($slider['wPic'])?>" id="sliderClip" >
         
          <div class="carousel-caption">
            <h3><?php echo $slider['wTitle'] ?></h3>
            <p><?php echo $slider['wContent'] ?></p>
           <!-- <p><a class="btn btn-info btn-sm">Read More</a></p>-->
          </div>
        </article>
        
        <?php 
		$s++;
		}while($slider=mysql_fetch_array($query_slider)); ?>
                        
      </div>
            
      <!-- Controls -->
      <div class="carousel-controls">
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="fa fa-angle-double-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="fa fa-angle-double-right"></span>
          </a>
      </div>
    </div>    
</div>
