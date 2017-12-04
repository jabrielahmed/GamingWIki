function submitTags(){
	var tags = document.getElementById("userTag").childNodes;
	var commaSeperatedTags = "";
	
	tags.forEach(function(entry){
		commaSeperatedTags += entry.id + ",";
	})
	document.getElementById("commaSeperatedTags").value = commaSeperatedTags;
	document.getElementById("searchForm").submit();
}

function addTag(){
	var newTag = document.createElement("div");
	var string = document.getElementById("addTag").value;
	var index;
	var type = "custom";
	var color = "#a64eaa";//violet
	
	index = string.indexOf(":");
	if(index != -1){
		type = string.substring(0, index);
		type = type.trim();
		switch(type){
			case "game":
				color = "#1ca557";//green
				break;
			case "genre":
				color = "#f23030";//red
				break;
			case "console":
				color = "#1d85f4";//blue
				break;
			default:
				type = "custom";
		}
		string = string.substring(index + 1);
	}
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
	document.getElementById("addTag").value = "";
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
	var startIndex = statement.indexOf("[Game]");
	var endIndex;
	var title;
	var author;
	var game;
	var genre;
	var console;
	var custom;
	var votes;
	var id;
	var preview;
	
	
	document.getElementById("popTag").innerHTML = "Popular Game Titles!";
	while(startIndex != -1)
	{
		statement = statement.substring(startIndex + 13);
		endIndex = statement.indexOf(" )");
		game = statement.substring(0, endIndex);
		startIndex = statement.indexOf("[Game]");
		
		tag = document.createElement("div");
		tag.style.backgroundColor = "#1ca557"//green
		tag.className = "tag";
		tag.innerHTML = game;
		tag.draggable = "true";
		tag.id = "game:" + game;
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
	
	preview = document.createElement("div");
	preview.className = "preview";
	
	div = document.createElement("a");
	div.href = "display.php";
	div.innerHTML = title;
	preview.appendChild(div);
	
	div = document.createElement("p");
	div.innerHTML = author;
	preview.appendChild(div);
	
	div = document.createElement("img");
	div.src = "upvote.png";
	div.height = "10";
	div.width = "10";
	preview.appendChild(div);
	
	div = document.createElement("p");
	div.innerHTML = votes;
	preview.appendChild(div);
	
	div = document.createElement("img");
	div.src = "downvote.png";
	div.height = "10";
	div.width = "10";
	preview.appendChild(div);
	
	if(game != ""){
		div = document.createElement("div");
		div.className = "tag";
		div.innerHTML = game;
		div.style.backgroundColor = "#1ca557"//green
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
		custom = custom.substring(index + 1);
		index = custom.indexOf(",");
	}
	
	div = document.createElement("input");
	div.type = "hidden";
	div.value = "id";
	preview.appendChild(div);
	
	return preview;
}