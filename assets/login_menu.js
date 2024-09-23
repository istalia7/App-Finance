let login_icon = document.querySelector(".login_icon");
let loginDropdown = document.querySelector(".login_menu");

// Doesn't work for some reason, will see later
// login_icon.addEventListener("click", () => {
//   if (loginDropdown.classList.contains("loginMenuAnimated")) {
//     loginDropdown.classList.add("loginMenuAnimatedReversed");
//     setTimeout(function () {
//       loginDropdown.classList.remove(
//         "loginMenuAnimated",
//         "loginMenuAnimatedReversed"
//       );
//     }, 1000);
//   } else {
//     loginDropdown.classList.add("loginMenuAnimated");
//   }
// });

login_icon.addEventListener("click", () => {
  loginDropdown.classList.toggle("loginMenuAnimated");
});
