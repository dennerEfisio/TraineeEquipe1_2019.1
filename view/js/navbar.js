var botao = document.querySelectorAll("#span");
var abrir = document.getElementsByClassName("setadireita");
var fechar = document.getElementsByClassName("setaesquerda");
var nav = document.getElementById("sidenavbar");

nav.addEventListener("mouseenter", function () {

    nav.classList.add("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.remove("botaonavegacao");

    }

});

nav.addEventListener("mouseleave", function () {

    nav.classList.remove("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.add("botaonavegacao");

    }

});

abrir.addEventListener("click", function() {

    nav.classList.remove("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.remove("botaonavegacao");

    }
});

fechar.addEventListener("click", function () {

    nav.classList.add("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.add("botaonavegacao");

    }

});