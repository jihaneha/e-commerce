let burger = document.querySelector(".burger");
let body = document.querySelector("body");

burger.addEventListener("click", function () {
  body.classList.toggle("open");
});
// sweet alert
function sweetalert() {
  swal({
    title: "GIGI'S BRAND",
    text: "Inscrirez vous a notre Newsletter et recevrez une réduction pour votre prochaine commande",
    icon: "info",
    buttons: ["s'inscrire", "fermer"],
    timer: "3500",
    className: "sweet",
  });
}
