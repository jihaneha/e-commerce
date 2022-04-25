let burger = document.querySelector(".burger");
let body = document.querySelector("body");

burger.addEventListener("click", function () {
  body.classList.toggle("open");
});
