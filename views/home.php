<?php
require "views/component/header.php";
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="pucblic/images/background/lamborghini_v12_vision_gran_turismo.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="pucblic/images/background/lamborghini_terzo_millennio_electric_hypercar.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="pucblic/images/background/ferrari_enzo.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="pucblic/images/background/the_crew_2014.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="pucblic/images/background/adv_1_lamborghini_gallardo_spyder.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php
require "views/component/fotter.php";
?>