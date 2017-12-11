function upvote(){
	document.getElementById("upvote").src = "upvoted.png";
	document.getElementById("downvote").src = "downvote.png";
}

function downvote(){
	document.getElementById("upvote").src = "upvote.png";
	document.getElementById("downvote").src = "downvoted.png";
}