let modal = document.getElementById("signup-modal");
let signUpButton = document.getElementById("signup");

signUpButton.onclick = function () {
    modal.style.display = "block";
}

let cancel = document.getElementById("cancel");
cancel.onclick = function () {
    modal.style.display = "none";
}

let modal1 = document.getElementById("signin-modal");
let signinButton = document.getElementById("signin");
signinButton.onclick = function () {
    modal1.style.display = "block";
}

let cancel1 = document.getElementById("cancel1");
cancel1.onclick = function () {
    console.log('hello')
    modal1.style.display = "none";
}