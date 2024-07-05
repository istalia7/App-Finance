let plus = document.querySelector(".plus-sign");
let line = document.querySelector("#line-opacity");
let recap = document.querySelector(".recap_table1");
let dropdownmenu1 = document.querySelector(".dropdownmenu1");
let dropdownmenu2 = document.querySelector(".dropdownmenu2");
let dropdownmenu3 = document.querySelector(".dropdownmenu3");
plus.addEventListener("click", () => {
  line.classList.toggle("line_disappear");
  dropdownmenu1.classList.toggle("dropdownmenu1_animated");
  dropdownmenu2.classList.toggle("dropdownmenu2_animated");
  dropdownmenu3.classList.toggle("dropdownmenu3_animated");
});
