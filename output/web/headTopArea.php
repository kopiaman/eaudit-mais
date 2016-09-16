<?php
$sql_tell= " SELECT `wnID`, `wContent`, `wType`, `wDate`, `wStatus` FROM `web_news` WHERE wType='Pengumuman' AND wStatus='On' ORDER BY wnID DESC";
$query_tell=mysql_query($sql_tell,$conn);
$tell=mysql_fetch_array($query_tell);

?>

<section id="topArea"><div class="container">    <div class="row">
            
                <div class="col-sm-12">
            	    <div class="flexslider">
 					 <ul class="slides">
                     <?php do { ?>
                     <li>
                	<span style="color:#F00; font-size:14px; font-weight:bold;">PENGUMUMAN: <?php echo $tell['wContent']; ?></span>
                    </li>
                    <?php }while($tell=mysql_fetch_array($query_tell)) ?>
                    </ul>
                </div>
              </div>

</div> </div></section>