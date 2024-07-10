let plus = document.querySelector(".plus-sign");
let line = document.querySelector("#line-opacity");
let dropdownmenu1 = document.querySelector(".dropdownmenu1");
let dropdownmenu2 = document.querySelector(".dropdownmenu2");
let dropdownmenu3 = document.querySelector(".dropdownmenu3");
plus.addEventListener("click", () => {
  line.classList.toggle("line_disappear");

  let allMenusShown =
    dropdownmenu1.classList.contains("show") &&
    dropdownmenu2.classList.contains("show") &&
    dropdownmenu3.classList.contains("show");

  if (allMenusShown) {
    dropdownmenu1.classList.add("hide");
    dropdownmenu2.classList.add("hide");
    dropdownmenu3.classList.add("hide");
    dropdownmenu1.style.opacity = 1;
    dropdownmenu2.style.opacity = 1;
    dropdownmenu3.style.opacity = 1;
    setTimeout(function () {
      dropdownmenu1.classList.remove("show", "hide");
      dropdownmenu2.classList.remove("show", "hide");
      dropdownmenu3.classList.remove("show", "hide");
      dropdownmenu1.style.opacity = 0;
      dropdownmenu2.style.opacity = 0;
      dropdownmenu3.style.opacity = 0;
    }, 600); // Delay matches animation duration
  } else {
    dropdownmenu1.classList.add("show");
    dropdownmenu2.classList.add("show");
    dropdownmenu3.classList.add("show");
  }
});
