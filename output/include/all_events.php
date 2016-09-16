<?php 
class eventclass_all  extends eventsBase
{ 
	function eventclass_all()
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
