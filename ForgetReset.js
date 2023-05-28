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
