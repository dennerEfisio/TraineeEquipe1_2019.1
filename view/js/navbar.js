var botao = document.querySelectorAll("#span");
var nav = document.getElementById("sidenavbar");
var cube = document.getElementById("#cubocentral");

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

cube.addEventListener("click",function(){

    for (let index = 0; index < cube.length; index++) {
        cube[index].array[index];
        
    }
});

