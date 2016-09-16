<?php 
class eventclass_audit_form  extends eventsBase
{ 
	function eventclass_audit_form()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


		$this->events["BeforeMoveNextList"]=true;



//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		global $conn;

$thisYear =date('Y');
$fid=$keys['fid'];
$planID=$values['planID'];

//query what typeCode from planID 
$sql_planID = "SELECT aTypeCode FROM `audit_plan` WHERE planID='$planID'";
$q_planID = db_query($sql_planID,$conn);
$row_planID=db_fetch_array($q_planID);

$aTypeCode=$row_planID['aTypeCode'];  //substr($aType,0,2);	

//tgk bilangan rekod tahun ini
$sql_count = "SELECT COUNT(fid) AS bil  FROM `audit_form` WHERE  YEAR(aDate) LIKE '$thisYear' AND aTypeCode='$aTypeCode'";
$q_count = db_query($sql_count,$conn);
$row_count=db_fetch_array($q_count);

$newNo=$row_count['bil']+1;
$newNo=sprintf("%02s",$newNo);

$month=date('m'); $year=date('Y');

$ref= $newNo.'/'.$month.'/'.$year.$aTypeCode;

//update reference number
$sql_up= "UPDATE audit_form SET ref ='$ref',aTypeCode='$aTypeCode' WHERE fid='$fid'";
$query_up=db_exec($sql_up,$conn);




;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		
$group=$_SESSION['GroupID'];

$userID=$_SESSION['userID'];
$status=$data['aStatus'];


if($userID==$data['userID']){ //jika userID adalah penyedia
  
  switch ($status)
	{
	case 'Draf':$record["buttonHantar"]=true; break;
  case 'Draf-Perlu Pindaan': $record["buttonDipinda"]=true; break;
	case 'Maklum Balas 1': $record["buttonFinish"]=true;$record["buttonSusulan"]=true;  break;	
  case 'Maklum Balas 2': $record["buttonFinish"]=true;$record["buttonSusulan"]=true;  break;	
  case 'Maklum Balas 3': $record["buttonFinish"]=true;break;
  case 'Lulus':$record["buttonSendAudit"]=true; break;
  case 'Query Dihantar': $record["buttonSoftReminder"]=true; break;
  case 'Peringatan Mesra': $record["buttonReminder1"]=true; break;
  case 'Peringatan 1':  $record["buttonReminder2"]=true; break;
  case 'Peringatan 2':  $record["buttonIngkar"]=true; break;
	};
};


if($userID==$data['userCheck']){ //jika userID adalah penyemak

  switch ($status)
	{
	case 'Draf-Dihantar':$record["buttonSemak"]=true; $record["buttonSemakReject"]=true; break;
  case 'Draf-Dipinda': $record["buttonDipindaDisemak"]=true;$record["buttonSemakReject"]=true;  break;
	};

};

if($userID==$data['userApprove']){ //jika userID adalah pelulus

 switch ($status)
	{
	case 'Draf-Disemak':$record["buttonLulus"]=true; break;
  case 'Draf-Dipinda-Disemak': $record["buttonLulus"]=true;  break;
	};

};
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
