<?php 
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events


	
	
		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		global $conn;

$_SESSION['email']=$data['email'];
$_SESSION['userID']=$data['userID'];

$username=$_SESSION["email"];

$sql_at= "SELECT GroupID FROM user_ugmembers WHERE UserName='$username'";
$query_at=db_query($sql_at,$conn);
$row_at=db_fetch_array($query_at);

$_SESSION['GroupID']=$row_at['GroupID'];


;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events

} 
?>
