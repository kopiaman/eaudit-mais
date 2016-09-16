<?php 
class eventclass_audit_form_manual  extends eventsBase
{ 
	function eventclass_audit_form_manual()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;



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

$sql_up= "UPDATE audit_form SET ref ='$ref',aTypeCode='$aTypeCode' WHERE fid='$fid'";
$query_up=db_exec($sql_up,$conn);




;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
