let modal = document.getElementById("signup-modal");
let btn = document.getElementById("signup");
btn.onclick = function(){
    modal.style.display = "block";
}

let cancel = document.getElementById("cancel");
cancel.onclick = function(){
    modal.style.display = "none";
}

let modal1 = document.getElementById("signin-modal");
let btn1 = document.getElementById("signin");
btn1.onclick = function(){
    console.log("hello");
    modal1.style.display = "block";
}

let cancel1 = document.getElementById("cancel1");
cancel1.onclick = function(){
    modal.style.display = "none";
}