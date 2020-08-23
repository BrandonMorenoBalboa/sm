<?php 
    // Header
    include('./view/header.php'); 
?>
    <div class="section" id="home">
        <div class="title text-center">
            <h1 class="title title-main display-2 text-warning">Servicios mineros</h1>
            <p class="text-white"></p>
            <a class="btn btn-outline-warning btn-lg pl-5 pr-5" href="#servicios">Nuestros servicios</a>
        </div>
        <div class="video-container">
            <video autoplay loop muted>
                <source src="video/ServiciosMineros.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <?php include('./somos.php'); ?>

    <div class="parallax-1" id="servicios">
        <h2 class="display-3 title text-warning">Nuestros Servicios</h2>
    </div>

    <?php include('servicios.php'); ?>

    <div class="parallax-2" id="trabajos">
        <h2 class="display-3 title text-warning">Trabajos</h2>
    </div>

    <?php include('./galeria.php'); ?>

    <div class="parallax-3" id="contacto">
        <h2 class="display-3 title text-warning">Contacto</h2>
    </div>

    <?php include('./contacto.php'); ?>

    <?php include('./view/footer.php'); ?>