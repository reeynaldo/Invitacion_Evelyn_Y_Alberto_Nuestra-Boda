function abrirArriba(){
    $('.carta-arriba').css('transform', "translateY(-120%)").fadeOut(1000);
}

function abrirAbajo(time){
    $('.carta-abajo').css('transform', "translateY(120%)").fadeOut(1000);
    $('.abrir').css('transform', "translateY(120%)").fadeOut(100);
}

function mostrar(){
    $('#fondo').css('opacity', '100%');
    $('body').css('overflow', 'scroll');
    $('#carta').css('background','url()');
    // background:url(../img/fondo2.svg);

}

$(document).ready(function() {
    $("#abrir").on('click', function(event) {
       abrirArriba();
       abrirAbajo();
       mostrar();
    });

    $("#instagram").on('click', function(event) {
        var tab = window.open('https://www.instagram.com', '_blank');
    });

    $("#facebook").on('click', function(event) {
        var tab = window.open('https://www.facebook.com', '_blank');
    });
});