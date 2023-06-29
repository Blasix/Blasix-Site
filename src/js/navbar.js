// Load navbar.html into the navbar element
document.addEventListener("DOMContentLoaded", function () {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("navbar").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "navbar.html", true);
  xhttp.send();
});

// add functionality to the menu button
const menu_button = document.querySelector("#menu_button");
const close_button = document.querySelector("#close_button");
const menu = document.querySelector("#menu");

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
