function upvote() {
	if (userLoggedIn()) {
		document.getElementById("upvote").src = "upvoted.png";
		document.getElementById("downvote").src = "downvote.png";
		var title = getTitle();
		var user = getUser();

		var xmlHttp = new XMLHttpRequest();
		xmlHttp.open("GET", "upvote.php?user="+user+"&title="+title, false);
		// xmlHttp.open("GET", "upvote.php?user=bob&title="+title, false);
		xmlHttp.onreadystatechange = function () {
			if (xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200) {
				var response = JSON.parse(xmlHttp.responseText);
			}
		}
		xmlHttp.send();
	}
}
function getTitle() {
	var title = document.getElementById("title").innerHTML
	title = title.replace(/\r?\n|\r/g, "")
		.replace(/\t+/g, "")
		.split(" ")
		.filter(x => x !== "")
		.join()
		.replace(/,/g," ")
		return title;
		
}
function getUser() {
	return document.getElementById("hidden").innerHTML.replace(/ /g,'');
}

function userLoggedIn() {
	var user = document.getElementById("hidden").innerHTML;
	if (user.includes("nouser")) {
		console.log('in')
		return false;
	} else {
		
		return true;
	}

}

function downvote() {
	if (userLoggedIn()) {
		document.getElementById("upvote").src = "upvote.png";
		document.getElementById("downvote").src = "downvoted.png";
		var title = getTitle();
		var user = getUser();
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.open("GET", "downvote.php?user="+user+"&title="+title, false);
		// xmlHttp.open("GET", "upvote.php?user=bob&title="+title, false);
		xmlHttp.onreadystatechange = function () {
			if (xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200) {
				var response = JSON.parse(xmlHttp.responseText);
			}
		}
		xmlHttp.send();
	}

}