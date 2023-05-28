
const showPassword = document.querySelector("#show-password");
const hidePassword = document.querySelector("#hide-password");
const passwordField = document.querySelector("#password");

showPassword.addEventListener("click", function() {
  this.style.display = "none";
  hidePassword.style.display = "block";
  passwordField.setAttribute("type", "text");
});

hidePassword.addEventListener("click", function() {
  this.style.display = "none";
  showPassword.style.display = "block";
  passwordField.setAttribute("type", "password");
});



hidePasswordForget.style.display = "none";



  





