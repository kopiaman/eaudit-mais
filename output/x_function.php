<?php

function salam(){
$text="السلام عليكم ورحمة الله وبركاته ";
echo $text;
};


function foot(){
$text="مڠهارڤ كريضأن الله ";
$text.="<br/>";
$text.="  أمانه، ڤريهاتين دان مسرا  ";
echo $text;
};

function urlWeb(){
$url='http://www.kreatiwi.com/eaudit';
$text="LINK : <a href='$url' target='_blank'> $url</a> <br/>";
$text.="Sekian, Terima Kasih <br/><br/>";
echo $text;
}


function dates($date){
$dateNormal=date("d M Y", strtotime($date));	
return $dateNormal;
};


function sprintNo($id,$no){
$sprintNo=sprintf("%0{$no}s",$id);	
return $sprintNo;
};



function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

