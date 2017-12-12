function loadGames(){
	var data = document.getElementById("articleList").innerHTML.trim();
	var startIndex = 0;
	var endIndex = data.indexOf(",");
	var title;
	var id;
	
	document.getElementById("articleList").innerHTML = "";
	while(endIndex != -1)
	{
		title = data.substring(startIndex, endIndex);
		
		data = data.substring(endIndex + 1);
		startIndex = 0;
		endIndex = data.indexOf(",");
		
		id = data.substring(startIndex, endIndex);
		
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
		div.onlick = "form.submit();";
		div.style = "background:none;color:inherit;border:none;padding:0;font: inherit;border-bottom:1px solid #444;cursor: pointer;";
		submitForm.appendChild(div);
		preview.appendChild(submitForm);
		document.getElementById("articleList").appendChild(preview);
		
		data = data.substring(endIndex + 1);
		startIndex = 0;
		endIndex = data.indexOf(",");
	}
}