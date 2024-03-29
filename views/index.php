<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../static/resources/favicon.ico" rel="icon" type="imagen/x-icon" />
    <title>TMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/static/styles/main.css">
</head>

<body>
    <header class="header" id="inicio">
        <img class="hamburguer" src="/static/resources/hamburguesa.svg" alt="Hamburguesa">
        <nav class="menu-navegacion">
            <a href="#inicio">INICIO</a>
            <a href="#servicio">NOSOTROS</a>
            <a href="#galeria">GALERIA</a>
            <a href="/productos">PRODUCTOS</a>
            <a href="#contacto">CONTACTO</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">BIENVENIDO A TMS</h1>
            <p class="copy"><i>Nuestra empresa se distingue por ofrecer mobiliario de excelente calidad y valor inigualable, fusionando el arte con un alto profesionalismo; de esta manera proporcionamos soluciones duraderas y estéticamente atractivas que superan las expectativas de nuestros clientes.</i></p>
        </div>
    </header>
    <div class="container p-5">
        <main>
            <section class="services contenedor" id="servicio">
                <h2 class="subtitulo">Nosotros</h2>
                <p class="description">Empresa dedicada a la fabricación de muebles en estructura metálica, combinados con cubierta en madera y materiales poliméricos modernos que combinan un diseño elegante con una gran funcionalidad, adaptándose a las necesidades de nuestros clientes.</p>
                <br><br>
                <div class="contenedor-servicio">
                    <div class="checklist-servicio">
                        <div class="service">
                            <img src="/static/resources/hogar.webp" alt="Comedor">
                            <h3 class="n-service"><span class="number">1</span>Hogares</h3>
                            <p> Ofrecemos una amplia gama de muebles para el hogar, como sillas de comedor, mesas de centro, escritorios, estanterías, etc. </p>
                        </div>
                        <div class="service">
                            <img src="/static/resources/oficina.webp" alt="Silla de oficina">
                            <h3 class="n-service"><span class="number">2</span>Oficinas</h3>
                            <p> Fabricamos muebles de oficina de alta calidad, como escritorios, sillas de oficina, mesas de reuniones, etc. </p>
                        </div>
                        <div class="service">
                            <img src="/static/resources/negocio.webp" alt="Estante">
                            <h3 class="n-service"><span class="number">3</span>Negocios</h3>
                            <p> Ofrecemos soluciones de mobiliario para negocios, como restaurantes, bares, hoteles, escuelas, etc. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="gallery" id="galeria">
                <div class="contenedor">
                    <h2 class="subtitulo">Galeria</h2>
                    <p style="text-align: center;"> Algunos de nuestros productos. </p>
                    <div class="contenedor-galeria">
                        <img src="/static/resources/uno.jpg" class="img-galeria" alt="uno.jpg">
                        <img src="/static/resources/dos.jpg" class="img-galeria" alt="dos.jpg">
                        <img src="/static/resources/tres.jpg" class="img-galeria" alt="tres.jpg">
                        <img src="/static/resources/cuatro.jpg" class="img-galeria" alt="cuatro.jpg">
                        <img src="/static/resources/cinco.jpg" class="img-galeria" alt="cinco.jpg">
                        <img src="/static/resources/seis.jpg" class="img-galeria" alt="seis.jpg">
                    </div>
                </div>
                <p style="text-align: center; padding-bottom: 2.5em; font-size: 1.25em;">
                    <a href="/productos" style="text-decoration: none;">Ir a productos</a>
                </p>
            </section>
            <div class="imagen-light">
                <img src="/static/resources/close.svg" alt="close.svg" class="close">
                <img src="" alt="" class="agregar-imagen">
            </div>
            <section id="contacto">
                <h2 class="subtitulo" style="padding-top: 1em;">Contacto</h2>
                <div class="contact">
                    <i class="fa-sharp fa-solid fa-phone"> <span style="font-family: 'Roboto', sans-serif; font-size: 0.8em;">+57 000 000 0000</span> </i>
                    <i class="fa-sharp fa-solid fa-envelope"> <span style="font-family: 'Roboto', sans-serif; font-size: 0.8em;">ejemplo@email.com</span> </i>
                    <i class="fa-sharp fa-solid fa-location-dot"> <span style="font-family: 'Roboto', sans-serif; font-size: 0.8em;">Troncal del Caribe, Arjona, Bolívar</span> </i>
                </div>
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.1784567209843!2d-75.3493308239976!3d10.247186868730576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e589f6d41a9e50b%3A0x664db28db521bba0!2sTMS!5e0!3m2!1ses-419!2sco!4v1710032855805!5m2!1ses-419!2sco"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </main>
    </div>
    <footer id="social-net">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand"><a class="rethom" href="/"><img src="/static/resources/logo.webp" alt="Logo"></a></h2>
                <p>Síguenos en nuestras redes</p>
            </div>
            <div class="social-media">
                <a href="#" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
        <div style="text-align: center; padding-bottom: 1em;">
            <span>Copyright © 2024 TMS</span>
        </div>
    </footer>
    <script type="text/javascript" src="/static/scripts/main.js"></script>
</body>

</html>