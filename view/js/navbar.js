var botao = document.querySelectorAll("#span");
var abrir = document.querySelector(".setadireita");
var fechar = document.querySelector(".setaesquerda");
var nav = document.getElementById("sidenavbar");

nav.addEventListener("mouseenter", function () {

    nav.classList.add("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.remove("botaonavegacao");

    }
    fechar.classList.remove("setadireita");
    abrir.classList.add("setaesquerda");
});

nav.addEventListener("mouseleave", function () {

    nav.classList.remove("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.add("botaonavegacao");

    }
    fechar.classList.remove("setadireita");
    abrir.classList.add("setaesquerda");

});

abrir.addEventListener("click", function () {

    nav.classList.remove("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.remove("botaonavegacao");

    }
    fechar.classList.remove("setadireita");
    abrir.classList.add("setaesquerda");
});

fechar.addEventListener("click", function () {

    nav.classList.add("larguraNavbar");
    for (let index = 0; index < botao.length; index++) {
        botao[index].classList.add("botaonavegacao");

    }
    fechar.classList.remove("setadireita");
    abrir.classList.add("setaesquerda");

});