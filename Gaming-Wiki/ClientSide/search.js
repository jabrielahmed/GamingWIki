function submitTags(){
	var tags = document.getElementById("userTag").childNodes;
	var commaSeperatedTags = "";
	
	tags.forEach(function(entry){
		commaSeperatedTags += entry.id + ",";
	})
	document.getElementById("commaSeperatedTags").value = commaSeperatedTags;
	document.getElementById("searchForm").submit();
}

function addGameTag(){
	var newTag = document.createElement("div");
	var string = document.getElementById("addGameTag").value;
	var index;
	var type = "game";
	var color = "#1ca557";//green
	
	string = string.trim();
	if(string != ""){
		newTag.style.backgroundColor = color;
		newTag.className = "tag";
		newTag.innerHTML = string;
		newTag.draggable = "true";
		newTag.id = type + ":" + string;
		newTag.addEventListener("dragstart", drag);
		document.getElementById("userTag").appendChild(newTag);
	}
	document.getElementById("addGameTag").value = "";
}

function addGenreTag(){
	var newTag = document.createElement("div");
	var string = document.getElementById("addGenreTag").value;
	var index;
	var type = "genre";
	var color = "#f23030";//red
	
	string = string.trim();
	if(string != ""){
		newTag.style.backgroundColor = color;
		newTag.className = "tag";
		newTag.innerHTML = string;
		newTag.draggable = "true";
		newTag.id = type + ":" + string;
		newTag.addEventListener("dragstart", drag);
		document.getElementById("userTag").appendChild(newTag);
	}
	document.getElementById("addGenreTag").value = "";
}

function addConsoleTag(){
	var newTag = document.createElement("div");
	var string = document.getElementById("addConsoleTag").value;
	var index;
	var type = "console";
	var color = "#1d85f4";//blue
	
	string = string.trim();
	if(string != ""){
		newTag.style.backgroundColor = color;
		newTag.className = "tag";
		newTag.innerHTML = string;
		newTag.draggable = "true";
		newTag.id = type + ":" + string;
		newTag.addEventListener("dragstart", drag);
		document.getElementById("userTag").appendChild(newTag);
	}
	document.getElementById("addConsoleTag").value = "";
}

function addCustomTag(){
	var newTag = document.createElement("div");
	var string = document.getElementById("addCustomTag").value;
	var index;
	var type = "custom";
	var color = "#a64eaa";//violet
	
	string = string.trim();
	if(string != ""){
		newTag.style.backgroundColor = color;
		newTag.className = "tag";
		newTag.innerHTML = string;
		newTag.draggable = "true";
		newTag.id = type + ":" + string;
		newTag.addEventListener("dragstart", drag);
		document.getElementById("userTag").appendChild(newTag);
	}
	document.getElementById("addCustomTag").value = "";
}

function allowDrop(ev){
    ev.preventDefault();
}

function drag(ev){
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

function displayQuery(){
	var statement = document.getElementById("popTag").innerHTML;
	var articleCounter = 0;
	var startIndex = statement.indexOf("[" + articleCounter + "]");
	var endIndex;
	var title;
	var author;
	var game;
	var genre;
	var console;
	var custom;
	var color;
	var type;
	var votes;
	var id;
	var preview;
	
	document.getElementById("popTag").innerHTML = "<b>Popular Search Tags!</b>";
	while(startIndex != -1)
	{
		switch(Math.floor(Math.random() * 3)){
			case 0:
				statement = statement.substring(startIndex);
				startIndex = statement.indexOf("[Game]");
				statement = statement.substring(startIndex + 13);
				endIndex = statement.indexOf(" [Genre]");
				tagText = statement.substring(0, endIndex);
				type = "game";
				color = "#1ca557";//green
				break;
			case 1:
				statement = statement.substring(startIndex);
				startIndex = statement.indexOf("[Genre]");
				statement = statement.substring(startIndex + 14);
				endIndex = statement.indexOf(" [Custom]");
				tagText = statement.substring(0, endIndex);
				type = "genre";
				color = "#f23030";//red
				break;
			case 2:
				statement = statement.substring(startIndex);
				startIndex = statement.indexOf("[Custom]");
				statement = statement.substring(startIndex + 15);
				endIndex = statement.indexOf(",");
				tagText = statement.substring(0, endIndex);
				type = "custom";
				color = "#a64eaa";//violet
		}
		
		
		startIndex = statement.indexOf("[" + ++articleCounter + "]");
		
		if(tagText.length > 40)
			continue;
		
		tag = document.createElement("div");
		tag.style.backgroundColor = color;
		tag.className = "tag";
		tag.innerHTML = tagText;
		tag.draggable = "true";
		tag.id = type + ":" + tagText;
		tag.addEventListener("dragstart", drag);
		document.getElementById("popTag").appendChild(tag);
	}
	
	statement = document.getElementById("result").innerHTML;
	document.getElementById("result").innerHTML = "";
	startIndex = statement.indexOf("[ArticleTitle]");
	while(startIndex != -1)
	{
		statement = statement.substring(startIndex + 21);
		endIndex = statement.indexOf("[Author]");
		title = statement.substring(0, endIndex).trim();
		
		startIndex = endIndex;
		statement = statement.substring(startIndex + 15);
		endIndex = statement.indexOf("[Game]");
		author = statement.substring(0, endIndex).trim();
		
		startIndex = endIndex;
		statement = statement.substring(startIndex + 13);
		endIndex = statement.indexOf("[Genre]");
		game = statement.substring(0, endIndex).trim();
		
		startIndex = endIndex;
		statement = statement.substring(startIndex + 14);
		endIndex = statement.indexOf("[Console]");
		genre = statement.substring(0, endIndex).trim();
		
		startIndex = endIndex;
		statement = statement.substring(startIndex + 16);
		endIndex = statement.indexOf("[Custom]");
		console = statement.substring(0, endIndex).trim();
		
		startIndex = endIndex;
		statement = statement.substring(startIndex + 15);
		endIndex = statement.indexOf("[Votes]");
		custom = statement.substring(0, endIndex).trim();
		
		startIndex = endIndex;
		statement = statement.substring(startIndex + 14);
		endIndex = statement.indexOf("[Id]");
		votes = statement.substring(0, endIndex).trim();
		
		startIndex = endIndex;
		statement = statement.substring(startIndex + 11);
		endIndex = statement.indexOf(" )");
		id = statement.substring(0, endIndex).trim();
		
		startIndex = statement.indexOf("[ArticleTitle]");
		
		preview = makePreview(title, author, game, genre, console, custom, votes, id);
		document.getElementById("result").appendChild(preview);
	}
}

function makePreview(title, author, game, genre, console, custom, votes, id){
	var div;
	var index;
	var index;
	var customTag;
	var submitForm;
	
	preview = document.createElement("div");
	preview.className = "preview";
	preview.id = id;
	
	submitForm = document.createElement("form");
	submitForm.action = "display.php";
	submitForm.method = "post";
	
	div = document.createElement("button");
	div.innerHTML = title;
	div.name = "article";
	div.value = id;
	div.className = "submitLink";
	div.onlick = "form.submit();";
	submitForm.appendChild(div);
	preview.appendChild(submitForm);
	
	div = document.createElement("p");
	div.innerHTML = "By: " + author;
	preview.appendChild(div);
	
	div = document.createElement("p");
	div.innerHTML = votes + " upvotes";
	preview.appendChild(div);
	
	if(game != ""){
		div = document.createElement("div");
		div.className = "tag";
		div.innerHTML = game;
		div.style.backgroundColor = "#1ca557";//green
		preview.appendChild(div);
	}
	
	if(genre != ""){
		div = document.createElement("div");
		div.className = "tag";
		div.innerHTML = genre;
		div.style.backgroundColor = "#f23030";//red
		preview.appendChild(div);
	}
	
	if(console != ""){
		div = document.createElement("div");
		div.className = "tag";
		div.innerHTML = console;
		div.style.backgroundColor = "#1d85f4";//blue
		preview.appendChild(div);
	}
	
	index = custom.indexOf(",");
	while(index != -1)
	{
		customTag = document.createElement("div");
		customTag.className = "tag";
		customTag.innerHTML = custom.substring(0, index);
		customTag.style.backgroundColor = "#a64eaa";//violet
		preview.appendChild(customTag);
		custom = custom.substring(index + 1).trim();
		index = custom.indexOf(",");
	}
	
	return preview;
}