<?php
$sql_tell= " SELECT `wnID`, `wContent`, `wType`, `wDate`, `wStatus` FROM `web_news` WHERE wType='Pengumuman' AND wStatus='On' ORDER BY wnID DESC";
$query_tell=mysql_query($sql_tell,$conn);
$tell=mysql_fetch_array($query_tell);

?>
<style>
.announce{
	font-size:20px;
	color:#639;
	font-weight:bold;
	background-color:#FF0;
	padding:30px;
	

}
</style>
                 <h1> PENGUMUMAN</h1>
            	 <!--   <div class="flexslider" id="news">
 					 <ul class="slides">-->
                    <!-- <?php// do { ?>
                     <li>-->
                	<p class="announce"><?php echo $tell['wContent'] ?></p>
                 <!--   </li>-->
                   <!-- <?php //}while($tell=mysql_fetch_array($query_tell)) ?>-->
                  <!--  </ul>-->
             <!--   </div>-->


