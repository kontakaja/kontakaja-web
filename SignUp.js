const showPasswordSignup = document.querySelector("#show-password-signup");
const hidePasswordSignup = document.querySelector("#hide-password-signup");
const passwordSignupField = document.querySelector("#password-signup");

showPasswordSignup.addEventListener("click", function() {
  this.style.display = "none";
  hidePasswordSignup.style.display = "block";
  passwordSignupField.setAttribute("type", "password");
});

hidePasswordSignup.addEventListener("click", function() {
  this.style.display = "none";
  showPasswordSignup.style.display = "block";
  passwordSignupField.setAttribute("type", "text");
});

hidePasswordForget.style.display = "none";