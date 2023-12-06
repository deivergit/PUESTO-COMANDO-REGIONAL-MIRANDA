
var modal = document.getElementById("dialog");
var boton = document.getElementById("open-dialog");
var span = document.getElementById("close");
var closeIcon = document.getElementById("icon-close");


boton.addEventListener("click", function () {
    modal.style.display = "block";
});

span.addEventListener("click", function () {
    modal.style.display = "none";
});

closeIcon.addEventListener("click", function () {
    modal.style.display = "none";
});

window.addEventListener("click", function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
})