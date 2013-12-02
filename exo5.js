function tableaucolor(){
	document.write('<table cellspacing="0" cellpadding="0">');
		var ligne = 0;
		var colonne = 0;
		var rgb_vert = 0;
		var rgb_rouge = 0;
			for (ligne = 0; ligne <= 255; ligne++){
				document.write("<tr>");
					for (colonne = 0; colonne <= 255; colonne++){
						document.write("<td style='width:1px;height:1px;background-color:rgb(" + rgb_rouge + "," + rgb_vert +",0)'></td>");
						rgb_rouge = rgb_rouge+1;
						}
				rgb_rouge = 0;
				document.write("</tr>");
				rgb_vert = rgb_vert+1;
				}
	document.write('</table>');
}