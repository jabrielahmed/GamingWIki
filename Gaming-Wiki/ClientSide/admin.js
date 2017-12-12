function getMetrics(){
	var data = document.getElementById('metrics').innerHTML;
	var startIndex = 0;
	var endIndex = data.indesOf(',');
	var title;
	var id;
	var text = "";
	
	while(endIndex != -1){
		title = data.substring(startIndex, endIndex);
		
		data = data.substring(endIndex + 1);
		startIndex = 0;
		endIndex = data.indexOf(",");
		
		id = data.substring(startIndex, endIndex);
		
		data = data.substring(endIndex + 1);
		startIndex = 0;
		endIndex = data.indexOf(",");
		
		text += title + " : " + id + "\n";
	}
	document.getElementById('metrics').innerHTML = text;
}