let modal = document.getElementById('signup-model');
let btn = document.getElementById("signup");
let cancel = document.getElementById("cancel");
btn.onclick = function () {
    modal.style.display = "block";
    
}
cancel.onclick = function () {
    modal.style.display = "none";
}

let modal1 = document.getElementById('signin-modal');
let btn1 = document.getElementById('signin');
btn1.onclick = function () {
    console.log("hello");
    modal1.style.display = "block";
}



