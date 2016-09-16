<?php 
class eventclass_report_kewangan  extends eventsBase
{ 
	function eventclass_report_kewangan()
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
$date = date('Ym');
$fid=$keys['fid'];

$id=sprintf("%02s",$fid);

$ref=$date.'/'.$id;

$sql_up= "UPDATE audit_form SET ref ='$ref' WHERE fid='$fid'";
$query_up=db_exec($sql_up,$conn);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
