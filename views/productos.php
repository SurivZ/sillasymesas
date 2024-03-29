<?php
use mysqli;

$conexion = new mysqli("localhost", "root", "", "sillasymesas");

if ($conexion->connect_error)
    die("Error de conexión: " . $conn->connect_error);

$sql = "SELECT * FROM `productos`;";

$result = $conn->query($query);

echo $result;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/static/resources/favicon.ico" rel="icon" type="imagen/x-icon" />
    <title>Productos | TMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="/static/styles/products.css">
</head>

<body>
    <header class="header" id="inicio">
        <p style="padding: 1em 1.5em; font-size: 1.5em; color: white; z-index: 20; position: relative;">
            <a style="text-decoration: none; color: white;" href="/#galeria"><i
                    class="fa-solid fa-arrow-left"></i>Volver</a>
        </p>
    </header>
    <main>
        <h2 class="titulo"><strong>Productos</strong></h2>
        <div class="contenedor">
            <?php foreach ($productos as $producto): ?>
                <a href="<?php echo $producto[3]; ?>" class="tarjeta">
                    <img src="<?php echo $producto[4]; ?>" alt="<?php echo $producto[1]; ?>" class="imagen">
                    <div class="texto">
                        <h3 class="nombre">
                            <?php echo $producto[1]; ?>
                        </h3>
                        <p class="precio">$
                            <?php echo $producto[2]; ?> COP
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>
    <footer id="social-net">
        <div class="footer-content">
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
</body>

</html>