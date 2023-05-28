const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

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

const showPasswordReset = document.querySelector("#show-password-reset");
const hidePasswordReset = document.querySelector("#hide-password-reset");
const passwordResetField = document.querySelector("#password-reset");

showPasswordReset.addEventListener("click", function() {
  this.style.display = "none";
  hidePasswordReset.style.display = "block";
  passwordResetField.setAttribute("type", "text");
});

hidePasswordReset.addEventListener("click", function() {
  this.style.display = "none";
  showPasswordReset.style.display = "block";
  passwordResetField.setAttribute("type", "password");
});

const showPasswordUlangi = document.querySelector("#show-password-ulangi");
const hidePasswordUlangi = document.querySelector("#hide-password-ulangi");
const passwordUlangiField = document.querySelector("#password-ulangi");

showPasswordUlangi.addEventListener("click", function() {
  this.style.display = "none";
  hidePasswordUlangi.style.display = "block";
  passwordUlangiField.setAttribute("type", "text");
});

hidePasswordUlangi.addEventListener("click", function() {
  this.style.display = "none";
  showPasswordUlangi.style.display = "block";
  passwordUlangiField.setAttribute("type", "password");
});

hidePasswordForget.style.display = "none";










