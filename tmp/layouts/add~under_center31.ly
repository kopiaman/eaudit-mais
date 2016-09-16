@version=2
beginblock top
	begincontainer vertical style=empty width=400 align=center all
	begincontainer vertical style=1 width=400 align=center add
		brick color2 addheader
		brick message
		brick multistep_nav_add
	begincontainer vertical style=fields fields
		brick addfields_atop
		brick color2 addbuttons
	endcontainer
	endcontainer
	begincontainer vertical style=empty width=100% details
		brick adddetails
	endcontainer
	endcontainer
endblock
