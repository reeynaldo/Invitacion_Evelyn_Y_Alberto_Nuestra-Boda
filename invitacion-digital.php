<!DOCTYPE html>
<html lang="es-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styleInvitacion.css">
    <link rel="shortcut icon" href="IMG/boda/baile.png">
    <title class="titulo">Nuestra boda: E+A</title>
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="flex-center" id="carta">
        <img src="IMG/boda/carta-arriba.png" alt="" class="carta-arriba">
        <img src="IMG/boda/carta-abajo.png" alt="" class="carta-abajo">
        <button class="abrir" id="abrir">Abrir</button>
    </div>

    <div class="flex-center" id="fondo">
        <div id="contenedor-portada" class="flex-center"><br>
            <h1 class="titulo">Evelyn + Alberto</h1><br><br><br><br><br><br><br><br><br><br><br><br>
            <h1 class="texto-medium">- GUARDA ESTA FECHA -</h1>
            <h1 class="texto-medium">Viernes, 29 de Diciembre 2023</h1><br><br>
        </div>
        <div id="contenedor" class="flex-center uno">
            <br><br><br><br>
            <h1 class="titulo">¡ Nos casamos !</h1>
            <h1 class="comillas">“</h1>
            <h1 class="texto-medium" class="msj">El amor no mira con los ojos, sino con el alma.</h1> <br>
            <img src="IMG/boda/anillos.jpeg" class="img" alt=""><br>
            <h1 class="texto-medium" class="msj">¡Nos hará muy felices que nos acompañes en este día tan especial!.</h1>
            <br><br><br>
        </div>

        <div id="contenedor" class="flex-center dos">
            <br><br><br><br>
            <h1 class="texto-medium" class="msj">Con la bendicion de nuestros padres y padrinos, tenemos el placer de
                invitarles a ser testigos de nuestra unión.</h1> <br>
            <h1 class="titulo">Padres de la novia</h1>
            <h1 class="texto-medium" class="msj">Esbeydi Salas Meraz.</h1>
            <h1 class="texto-medium" class="msj">Everardo Martinez.</h1> <br>
            <h1 class="titulo">Padres del novio</h1>
            <h1 class="texto-medium" class="msj">Monica Yanet De Jesús Luna.</h1>
            <h1 class="texto-medium" class="msj">Alberto Salazar Mercado.</h1> <br>
            <h1 class="titulo">Padrinos de relación</h1>
            <h1 class="texto-medium" class="msj">Nombre App Apm.</h1>
            <h1 class="texto-medium" class="msj">Nombre App Apm.</h1> <br><br><br><br>
        </div>

        <div id="contenedor-cinta" class="flex-center">
            <br><br><br>
            <h1 class="titulo">¡ Solo faltan !</h1><br>
            <div id="cuenta"></div><br><br><br>
        </div>

        <div id="contenedor" class="flex-center tres">
            <br><br><br><img src="IMG/boda/iglesia.png" class="icono"><br>
            <h1 class="titulo">Celebración Religiosa</h1>
            <h1 class="texto-medium">Parroquia San Pedro Apóstol</h1><br>
            <h1 class="texto-medium">6:00 P.M</h1><br>
            <h1 class="texto-medium">Av Independencia 172, Centro, 40850 Petatlán, Gro.</h1>
            <img src="IMG/boda/iglesia.jpg" class="img" alt=""><br>
            <a class="button" href="https://goo.gl/maps/ndeGKjgj7yX2399a9" target="_blank">ABRIR MAPA</a><br>
            <div class="linea"></div>
            <br><br><br><img src="IMG/boda/fiesta.png" class="icono"><br>
            <h1 class="titulo">Evento Social</h1>
            <h1 class="texto-medium">Splash Salón de Eventos</h1><br>
            <h1 class="texto-medium">8:00 P.M</h1><br>
            <h1 class="texto-medium">Calle 5 de Mayo, Barrio de la Hoja, 40830 Petatlán, Gro.</h1>
            <img src="IMG/boda/evento.png" class="img" alt=""><br>
            <a class="button" href="https://goo.gl/maps/9zTKV5yNcYAWiAnN9" target="_blank">ABRIR MAPA</a><br>
        </div>

        <div id="contenedor" class="flex-center dresscode">
            <br><br><br><br><br><br>
            <h1 class="titulo">Código de Vestimenta</h1><br>
            <h1 class="texto-medium">¿Qué me pongo para la fiesta?</h1>
            <h1 class="texto-medium">Ven con tu mejor sonrisa</h1><br>
            <h1 class="titulo">Semi-Formal</h1><br>
            <div class="flex-row">
                <h1 class="texto-medium"><img src="IMG/boda/mujer.png" class="dress-m"><br><br>MUJERES</h1>
                <h1 class="texto-medium"><img src="IMG/boda/hombre.png" class="dress-h"><br><br>HOMBRES</h1>
            </div><br><br>
            <h1 class="texto-medium">-El color (color)-</h1>
            <h1 class="texto-medium">Esta reservado para la novia</h1><br><br><br><br>
        </div>

        <div id="contenedor" class="flex-center"><br><br><br>
            <h1 class="titulo">Padrinos de Boda</h1><br>
            <h1 class="texto-medium padr">Sin ellos no sería igual</h1>
        </div><br>

        <div id="contenedor" class="flex-center carrusel">
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>

                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                    <h1 class="texto-medium">Jose Angel De Jesús Balanzar</h1><br>
                    <h1 class="titulo">Salón</h1>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <h1 class="texto-medium">Nombre de padrino</h1><br>
                    <h1 class="titulo">Anillo</h1>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <h1 class="texto-medium">Nombre de padrino</h1><br>
                    <h1 class="titulo">Comida</h1>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div><br><br><br>

        <div id="contenedor" class="flex-center asistencia">
            <br><br><br>
            <h1 class="titulo">Confirmar Asistencia</h1>
            <h1 class="texto-medium">Es muy importante para nosotros contar con tu confirmación lo antes posible.</h1>
            <br>
            <div class="flex-row">
                <a class="texto-medium" href="tel:+525511976198" target="_blank"><img class="contacto"
                        src="IMG/boda/telefono.png"><br>Llámame</a>
                <a class="texto-medium"
                    href="https://api.whatsapp.com/send?phone=+525511976198&text=Hola Evely / Alberto, Muchas gracias por invitarme a tu Celebración, mi respuesta a tu invitación es: "
                    target="_blank"><img class="contacto" src="IMG/boda/whats.png"><br>Contáctame</a>
            </div> <br><br><br>
        </div>

        <div id="contenedor" class="flex-center">
            <br><br>
            <h1 class="titulo">Mesa de Regalos</h1><br>
            <h1 class="texto-medium">Tu presencia es mi mayor regalo, pero si deseas tener un detalle conmigo te
                comparto algunas ideas.</h1><br><br><br>
            <div class="flex-center mesa">
                <h1 class="texto-medium"><img src="IMG/boda/amazon.png" class="mesa ico"> <br>NUMERO DE EVENTO: 000000
                </h1>
                <br>
                <a class="button" href="https://mesaderegalos.liverpool.com.mx/eventodebusqueda" target="_blank">VER
                    MESA</a><br>
            </div><br><br><br>
            <div class="flex-center mesa">
                <h1 class="texto-medium"><img src="IMG/boda/bbva.jpg" class="mesa ico"> <br>Juan Alberto Salazar de
                    Jesús
                </h1>
                <h1 class="texto-medium">Cuenta: 0000000000</h1><br><br>
            </div><br><br><br><br>
        </div>

        <div id="contenedor" class="flex-center hash">
            <br><br>
            <div class="linea-lef"></div><br><br><br>
            <h1 class="texto-medium">NUESTROS RECUERDOS</h1><br>
            <h1 class="titulo">Hashtag...</h1><br>
            <h1 class="texto-medium">No olvides etiquetarnos en todas tus publicaciones de Instagram y Facebook
                utilizando nuestro Hashtag...</h1><br>
            <h1 class="texto-large hashtag">#Evelyn+Alberto</h1>
            <br><br><br>
            <div class="linea-right"></div><br><br>
            <div class="flex-row">
                <img src="IMG/boda/instagram.png" class="social" id="instagram">
                <img src="IMG/boda/facebook.png" class="social" id="facebook">
            </div><br>
        </div><br><br><br>

        <div id="contenedor" class="flex-center consideraciones">
            <h1 class="titulo">Consideraciones</h1>
            <h1 class="texto-medium">Es muy importante para nosotros tomar en cuenta nuestros deseos.</h1><br><br>
            <h1 class="texto-large hashtag">SÓLO ADULTOS</h1>
            <h1 class="linea medio"></h1><br><br>
            <h1 class="texto-medium">Adoramos a sus hijos, pero creemos que necesitan una noche libre. Sólo adultos, por
                favor.</h1><br>
            <img src="IMG/boda//brinds.jpeg" class="img" alt=""><br><br><br>
        </div><br><br>


        <div id="contenedor" class="flex-center deseos">
            <h1 class="titulo buenosDeseos">Buenos deseos</h1><br><br>
            <form
                action="https://docs.google.com/forms/d/e/1FAIpQLScYQG8UOJepJh_iXdLXKtm1PLFpZNyhgpby8fmaEAvYsnI1fw/formResponse">
                <h1 class="texto-medium">Escribe un mensaje para los novios.</h1><br><br>
                <input type="text" name="entry.769386669" placeholder="Nombre y apellido*" class="texto-medium name"
                    required><br>
                <input type="text" name="entry.1218361481" placeholder="Mensaje*" class="texto-medium msj"
                    required><br><br>
                <input type="submit" id="btn-buenosDeseos" name="enviar" value="ENVIAR" class="button"><br><br>
            </form>
        </div><br><br><br><br>

        <div id="contenedor" class="flex-center">
            <a href="https://api.whatsapp.com/send?phone=+525521358480&text=Hola, Quisiera cotizar una invitación digital"
                target="_blank" class="texto-medium link">- Invitación digital -</a><br><br><br>
            <a href="https://api.whatsapp.com/send?phone=+525521358480&text=Hola, Quisiera cotizar una invitación digital"
                target="_blank" class="texto-medium link">¿</a><br><br><br>
        </div>

        <script src="JS/boda/musica.js"></script>
        <script src="JS/boda/simplyCountdown.min.js"></script>
        <script src="JS/boda/countdown.js"></script>
        <script src="JS/boda/abrir.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
</body>

</html>