function getMetrics(){
	var data = document.getElementById('metrics').innerHTML;
	var backupData = data;
	var startIndex = 0;
	var endIndex = data.indexOf(',');
	var map = [];
	var title;
	var votes;
	var string = "";
	
	while(endIndex != -1){
		title = data.substring(startIndex, endIndex);
		
		data = data.substring(endIndex + 1);
		startIndex = 0;
		endIndex = data.indexOf(",");
		
		data = data.substring(endIndex + 1);
		startIndex = 0;
		endIndex = data.indexOf(",");
		
		map[title] = 0;
	}
	startIndex = 0;
	endIndex = backupData.indexOf(',');
	while(endIndex != -1){
		title = backupData.substring(startIndex, endIndex);
		
		backupData = backupData.substring(endIndex + 1);
		startIndex = 0;
		endIndex = backupData.indexOf(",");
		
		votes = parseInt(backupData.substring(startIndex, endIndex));
		
		backupData = backupData.substring(endIndex + 1);
		startIndex = 0;
		endIndex = backupData.indexOf(",");
		
		map[title] += votes;
	}
	for(var k in map)
	{
		string += k + " : " + map[k] + "<br/>";
	}
	document.getElementById('metrics').innerHTML = string;
}