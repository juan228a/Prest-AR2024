<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = "Log In";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/about.css">
    <title>Prest-AR | Politica de Seguridad</title>
</head>
<body>
   <header>
            <div class="container-hero">
                <div class="container hero">
                    <div class="customer-support">
                    </div>

                    <div class="container-logo">
                       <h1 class="logo"><a href="index.php">Prest-AR</a></h1>
                    </div>

                    <div class="container-user">
            <i class="fa-solid fa-user"></i>
            <span class="logIn"><a href="perfiluser.php"><?php echo $username;?></a></span>
           <span class="signUp"><a href="cerrarsesion.php">Cerrar sesion</a></span>
        </div>
                </div>
            </div>

            <div class="container-navbar">
                <nav class="navbar container">
                    <i class="fa-solid fa-bars"></i>
                    <ul class="menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a  href="PoliticaDeSeg.php">Politica de Seguridad</a></li>
                        <li><a href="aboutUs.php">Acerca de Nosotros</a></li>
                        <li><a href="contacto.php">Contactame</a></li>
                        
                    </ul>

                    <form class="search-form">
                        <input type="search" placeholder="Buscar..." />
                        <button class="btn-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </nav>
            </div>
        </header>



    <div class="heading">
        <h1>Politica de Seguridad</h1>
    </div>
    <section>
    <div class="conteiner">
         <section class="about">
            <div class="about-image">
                <img src="../css/imagenes/politicadeseg.jpeg" alt="">
            </div>
            <div class="about-content">
                <h2>Prest-AR</h2>
                <p>

                    En Prest-AR, valoramos la seguridad de nuestros clientes, empleados y socios comerciales. Nuestra política de seguridad está diseñada para garantizar un ambiente seguro y protegido en todas nuestras operaciones.
                    <br>
                    Nuestro objetivo es proveer un entorno seguro y saludable para todos los empleados y clientes.<br>
                    Cumplir con todas las leyes y regulaciones de seguridad pertinentes.
                    Prevenir accidentes e incidentes mediante la implementación de medidas de seguridad adecuadas.<br>
                    Promover una cultura de seguridad y responsabilidad.<br>
                    Esta política se aplica a todos los empleados, clientes, contratistas y visitantes en nuestras instalaciones y durante el uso de nuestros servicios.
                    <br>
                    Mantenimiento de Equipos y Herramientas
                    <br>
                    Realizar inspecciones regulares de todas las herramientas y equipos.
                    Reparar o retirar del servicio cualquier equipo defectuoso inmediatamente.
                    <br>
                    Equipo de Protección Personal (EPP)
                    <br>
                    Proveer y exigir el uso de EPP adecuado, como guantes, gafas de seguridad y protección auditiva, según sea necesario.
                    <br>
                    Responsabilidades
                    <br>
                    Empleados: Seguir todas las políticas y procedimientos de seguridad, reportar condiciones inseguras y usar el EPP requerido.
                    Clientes: Cumplir con todas las instrucciones de seguridad proporcionadas y utilizar el equipo de manera responsable.
                    Gerencia: Implementar y supervisar la política de seguridad, proporcionar recursos necesarios y asegurar el cumplimiento de las regulaciones.<br>
                    Revisión y Actualización
                    <br>
                    Esta política será revisada y actualizada periódicamente para asegurar su efectividad y cumplimiento con las normativas actuales.
                    <br>
                    
                    Esta política de seguridad está diseñada para proteger a todas las personas involucradas con "Prest-AR" y promover un entorno seguro y saludable.</p>

            </div>
        </div>
</section>

<br><br><br><br><br><br>
<br>
<br>

<footer class="foot"><b>COPYRIGHT 2024</b></footer>


</body>