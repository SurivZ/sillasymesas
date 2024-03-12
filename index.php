<?php

$ruta = $_SERVER['REQUEST_URI'];

if ($ruta === '/')
    include 'views/index.php';
elseif ($ruta === '/productos')
    include 'views/productos.php';
else
    include 'views/404.php';


