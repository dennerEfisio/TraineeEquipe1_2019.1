var botao = document.querySelectorAll("#span");
var abrir = document.getElementsByClassName("setadireita");
var fechar = document.getElementsByClassName("setaesquerda");
var nav = document.getElementById("sidenavbar");

nav.addEventListener("mouseenter", function () {

    nav.classList.add("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.remove("botaonavegacao");

    }
    fechar.classList.remove("setaesquerda");
    abrir.classList.remove("setaesquerda");
});

nav.addEventListener("mouseleave", function () {

    nav.classList.remove("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.add("botaonavegacao");

    }
    fechar.classList.remove("setaesquerda");
    abrir.classList.remove("setaesquerda");

});

abrir.addEventListener("click", function () {

    nav.classList.remove("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.remove("botaonavegacao");

    }
    fechar.classList.remove("setaesquerda");
    abrir.classList.remove("setaesquerda");
});

fechar.addEventListener("click", function () {

    nav.classList.add("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.add("botaonavegacao");

    }
    fechar.classList.remove("setaesquerda");
    abrir.classList.remove("setaesquerda");

});