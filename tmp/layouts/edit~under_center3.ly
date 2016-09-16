@version=2
beginblock top
	begincontainer vertical style=empty width=400 align=center all
	begincontainer vertical style=1 width=400 align=center add
		brick color2 editheader
		brick message
		brick multistep_nav_edit
	begincontainer vertical style=fields fields
		brick editfields_atop
		brick color2 editbuttons
	endcontainer
	endcontainer
	begincontainer vertical style=empty width=100% details
		brick editdetails
	endcontainer
	endcontainer
endblock
