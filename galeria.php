<div class="container">
    <div class="row">
        <h3 class="h1 col-md-12 text-left title mb-5 display-4 border-bottom border-warning pt-3">Galería</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-6 pb-5 popup-gallery">
        <?php 
            for ($i=1; $i < 23; $i++) { 
                echo '<a class="p-1" href="./img/fotos/'.$i.'.jpg" data-fancybox="gallery" data-caption="">
                    <img src="./img/fotos/'.$i.'.jpg" alt="" class="img-fluid">
                </a>';
            }
        ?>
    </div>
</div>

<?php 

/*
for ($i=1; $i < 40; $i++) { 
    echo '        <a class="p-1" href="./img/fotos/'.$i.'.jpg" data-fancybox="gallery" data-caption="">
    <img src="./img/fotos/'.$i.'.jpg" alt="" class="img-fluid">
</a>';
}
*/
?>