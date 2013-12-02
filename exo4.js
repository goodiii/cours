function couleur(){
	var rgb = 0;
	var col = 0;
	document.write("<table><tr>");
	for(var col=0; col <= 8; col++){
		document.write("<td style='width:15px;height:15px;background-color:rgb(" + rgb + ",0,0)'></td>");
		rgb = rgb+32;
	}
	document.write("</tr></table>");
}