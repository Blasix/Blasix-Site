// add functionality to the menu button
const menu_button = document.getElementById("menu_button");
const close_button = document.getElementById("close_button");
const menu = document.getElementById("menu");

menu_button.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});
close_button.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

// set the height of the body to the height of the window minus the height of the navbar
var navbarHeight = document.getElementById("navbar").offsetHeight;
var body = document.getElementById("body");
body.style.height = "calc(100vh - " + navbarHeight + "px)";
