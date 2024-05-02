<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wardify - Login</title>

    <!-- Custom fonts for this template-->
    <link href="modelo/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="modelo/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="modelo/assets/img/marca/icon-wardify.png" type="image/x-icon">
    <link rel="shortcut icon" href="modelo/assets/img/marca/icon-wardify.png" type="image/x-icon">

</head>

</head>

<body class="bg-gradient-dark">

    <!-- SACAR A estilos.CSS-->
    <style>
        /* Estilos para el video de fondo */
        #video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            object-fit: cover; /* Ajusta el tamaño del video para que cubra todo el contenedor */
            opacity: 50%;
            filter: blur(15px);
            
        }

        /* Estilos para el contenido encima del video */
        .content {
            position: relative;
            z-index: 1;
        }
        #imageSlider {
            height: 200px auto;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            transition: background-image 5s ease-in-out;
         }
    </style>