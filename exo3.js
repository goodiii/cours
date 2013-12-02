<script type="text/javascript">

function tableau(ligne;colonne){
document.write("<table style='border:1px solid'>");
	for (var li=0; ligne < li; li++){
	document.write("<tr>"):
		for(var col=0; colonne < col; col++) {
			document.write("<td>" + (li*colonne+col) + "</td>");
		}
	document.write("</tr>");
	}
document.write("</table>");	
}

</script>