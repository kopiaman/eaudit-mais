<?php include_once('head.php'); 
$note="";
$inid=$_GET['inid'];

 $answer = secure($_POST['answer']);


 if ((isset($_POST["MM_abstract"])) && ($_POST["MM_abstract"]=="abstractForm")) 
{ 
     $sql_abstractAdd ="UPDATE audit_info SET answer='$answer' WHERE inid='$inid'";
	$abstractQuery=mysql_query($sql_abstractAdd,$conn);
		
		    if($abstractQuery)
			{
				
				
			$note="Terima kasih atas jawapan anda. Kami akan memberi tahu status borang audit ini selepas disemak. "; 
 
		  }else{
			$note="Gagal kemas kini borang.";
};
};

?>
<body role="document">
  <img src="images/logo.gif">
   <section id="contactArea">
    	<div class="container">     
       	<h1 class="text-center">BORANG AUDIT DALAMAN</h1>
           <span class="border"> <i class="fa fa-plane"></i> </span> 
         <div class="row">
        
				
                    <div class="col-sm-12">
                      <?php  echo '<h2>'.$note.'</h2>' ?>
          <?php  if(!isset($_POST["MM_abstract"])){  //hide form if already submitted ?>
                       <form id="abstractForm" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="MM_abstract" name="MM_abstract" value="abstractForm"  >
						
                        <p><label>Jawapan</label><br>
                        <textarea cols="10" rows="5" placeholder="JAWAPAN ANDA DISINI..." class="form-control" id="answer" name="answer" required></textarea></p>
                        <p><input type="submit" class="btn" value="HANTAR JAWAPAN"></p>
   					 </form>
                    </div>
                    <?php } ?>
		</div></div>
      </section>
	
    <!-- start footer area -->
 <?php include_once('footer.php') ?>
    <!-- end footer area -->
</body>
  
</html>
