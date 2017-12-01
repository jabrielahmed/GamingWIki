function submitWithTags(){
	var tags = document.getElementById("userTag").innerHTML;
	var commaSeperatedTags = "";
	var tag;
	var leftIndex;
	var rightIndex;
	
	while(leftIndex = tags.indexOf("<") != -1)
	{
		rightIndex = tags.indexOf(">");
		tag = tags.substring(leftIndex + 1, rightIndex);
		commaSeperatedTags += tag + ",";
	}
	commaSeperatedTags = commaSeperatedTags.substring(0, commaSeperatedTags.length - 1);
	document.getElementById("commaSeperatedTags").value = commaSeperatedTags;
}

function addTag(){
	var newTag = document.createElement('div');
	var text = document.getElementById('addTag').value;
	
	text = "&lt" + text.trim() + "&gt";
	newTag.innerHTML = text;
	document.getElementById('userTag').appendChild(newTag);
	document.getElementById('addTag').value = "";
}