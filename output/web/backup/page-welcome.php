<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body role="document" >
<?php include('headWelcome.php') ?>
<?php include('headNav.php') ?>
<style>

/*#####################
Additional Styles (required)
######################*/
#myCarouselQuran{
	margin:0px 0px 40px 0px;
	height:auto;
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

.imageRound{
	border-radius: 15px 50px 30px;
	width:200px;
 
	
}
</style>
<div class="container"  style="min-height:500px;">
<h1 align="center">SELAMAT DATANG KE E-AUDIT</h1>
<div class="row">
<div class="col-sm-12" align="center">
    <a href="page-statistic.php"><img src="images/statistik.jpg" class="imageRound"></a> 
  
   <a href="../index.htm"><img src="images/eaudit.jpg" width="256" class="imageRound"></a> 
    
    
    <a href="page-meeting.php"><img src="images/minit.jpg" class="imageRound"></a> 
   
</div></div>

<p></p>
<div class="col-sm-12">

		
        
              <!-- Carousel  --> <div id="myCarouselQuran" class="carousel slide">        
                <div class="carousel-inner">  
                     
                    <div class="item active"> 
					 <div class="caption">
                       	 <!-- <h4>Ali Imran: 104 </h4>
                            <p>" Dan hendaklah ada di antara kamu satu puak yang menyeru kepada kebajikan 
                            dan menyuruh berbuat segala perkara yang baik, serta melarang daripada segala yang salah.
                             Dan mereka yang bersifat demikian ialah orang-orang yang berjaya " </p>-->
                             <script type="text/javascript" language="JavaScript" src="http://surah.my/9/104.js"></script>
                        </div>
                    </div>
                    
                    <div class="item "> 
					 <div class="caption">
                       	  
                          <script type="text/javascript" language="JavaScript" src="http://surah.my/9/105.js"></script>
                            <!--
                            <h4>At Taubah: 105</h4>
                            <p>" Dan katakanlah (wahai Muhammad): Beramalah kamu (akan segala yang diperintahkan), 
                            maka Allah dan RasulNya serta orang-orang yang beriman akan melihat apa yang kamu kerjakan;
                             dan kamu akan dikembalikan kepada (Allah) Yang Mengetahui perkara-perkara yang ghaib dan yang nyata,
                              kemudian Ia menerangkan kepada kamu apa yang kamu telah kerjakan " </p>-->
                        </div>
                    </div>
                  
                                                                                             
                 </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                     <li data-target="#myCarouselQuran" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarouselQuran" data-slide-to="1" ></li>
					 </ol>                                                                 
            </div><!-- End Carousel -->  

           
</div><!-- col 12-->
</div> <!-- container !-->
 
<!-- start contact detail -->
<?php include('footer.php') ?>
</body>
</html>
 
 
