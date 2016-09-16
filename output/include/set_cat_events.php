<?php 
class eventclass_set_cat  extends eventsBase
{ 
	function eventclass_set_cat()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		
//8 for PAID, 9 forAgensi,
$strWhereClause="catID!='8' AND catID!='9'";
// Place event code here.
// Use 
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
