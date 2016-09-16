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
	padding:20px;
	background:rgba(0,0,0,0.70);
	text-align:left;
  	height:auto;
	max-width:50%;
}
</style>
<?php
$sql_news= " SELECT `wnID`, `wContent`, `wType`, `wDate`, `wStatus` FROM `web_news` WHERE wType='Berita' AND wStatus='On' ORDER BY wnID DESC LIMIT 0,5";
$query_news=mysql_query($sql_news,$conn);
$news=mysql_fetch_array($query_news);

?>
<div class="container">
    <div id="myCarousel" class="carousel slide">
    
      <div class="carousel-inner">
        <article class="item active">
          <img src="http://placehold.it/1200x440/cccccc/ffffff">
          <div class="carousel-caption">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            <p><a class="btn btn-info btn-sm">Read More</a></p>
          </div>
        </article>
         <article class="item">
          <img src="http://placehold.it/1200x440/999999/cccccc">
          <div class="carousel-caption">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            <p><a class="btn btn-info btn-sm">Read More</a></p>
          </div>
        </article> 
        <article class="item">
          <img src="http://placehold.it/1200x440/dddddd/333333">
          <div class="carousel-caption">
            <h3>Headline</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            <p><a class="btn btn-info btn-sm">Read More</a></p>
          </div>
        </article>                      
      </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>        
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
<script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
	$('#myCarousel').carousel({
		interval:   4000
	});
</script>
