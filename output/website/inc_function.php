<?php

function thumb($files){
$dcode=json_decode($files);
$thumbs=$dcode[0]->thumbnail;
return $thumbs;
};

function full($files){
$dcode=json_decode($files);
$full=$dcode[0]->name;
return $full;
};

function loopJSON_attachment($JSON){
$result = json_decode($JSON);
foreach($result as $key => $value) {
    if($value) {

    $filename=$value->name;
    $oriname=$value->usrName;
    echo "<a href='../$filename' target='_blank'> $oriname</a>"; 
    echo "<br><br>";
     
    }
};
};

function dates($date){
$dateNormal=date("d M Y", strtotime($date));	
return $dateNormal;
};

function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {$input = strip_tags($input);}
	//no need to trim, already shorter than trim length
    if (strlen($input) <= $length) { return $input; }
	 //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
	 //add ellipses (...)
    if ($ellipses) {$trimmed_text .= '..';}
    return $trimmed_text;}
	
	//create modal 
	 function modalbox($id,$title,$body,$tabindex){
	 echo '<div class="modal fade" id="'.$id.'" role="dialog" tabindex="'.$tabindex.'" >
    <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">';
	echo '<button type="button" class="close" data-dismiss="modal"><span>Close</span></button>
              <h4 class="modal-title">'.$title.'</h4></div>	
  		                <div class="modal-body">'.$body.'</div>
         <div class="modal-footer">    </div>
        </div>
    </div>  
</div>';				 
 };
 
 
function generateRandomPassword($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
};

function sprintNo($id,$no){
$sprintNo=sprintf("%0{$no}s",$id);	
return $sprintNo;
};

function fileUpload($id,$directory){
$temp = explode(".",$_FILES["$id"]["name"]);
$newfilename = rand(1,99999) . '.' .end($temp);
move_uploaded_file($_FILES["$id"]["tmp_name"],$directory.'/'.$newfilename);
};   

function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>

