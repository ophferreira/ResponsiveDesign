// JS puro

//let btn = document.querySelector('.menu-principal-btn');
//let menuPrincipal = document.querySelector('.menu-principal');
//
//btn.addEventListener('click', abreFechaMenu);
//
//function abreFechaMenu(evento){
//    menuPrincipal.classList.toggle('menu-item-fechado');
//}

// JQuery

$(document).ready(function(){
    //Botão Menu
    $('.menu-principal-btn').click(function(){
        $('.menu-principal').toggleClass('menu-item-fechado');
    });

    //Slide Depoimentos
    $('.depoimentos-caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true
    });

    // Validação Forms Contato
    $('.forms').validate({
        rules: {
            name: 'required',
            email: {
                required: true,
                email: true
            },
            msg: 'required'
        },
        messages: {
            name: "Por favor, preencha com seu nome!",
            email: {
                required: "Por favor, preencha o e-mail!",
                email: "Por favor, preencha um e-mail válido!"
            },
            msg: "Por favor, digite sua mensagem!"
        }
    });
});