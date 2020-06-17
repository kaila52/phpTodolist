<?php
    require "views/component/header.php";
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($res as $value) {
            echo '
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card mt-5">
                <div class="position-absolute" style="right: 20px;top: 20px;">
                    <a href="#" class="card-link text-danger like">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
                <img class="card-img" src="pucblic/images/product/'.$value[5].'.jpg" alt="Vans">
                <div class="card-body">
                    <h4 class="card-title">'.$value[2].'</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Style: '.$value[0].'</h6>
                    <p class="card-text">'.$value[3].'</p>
                    <div class="options d-flex flex-fill">
                        <select class="custom-select mr-1">
                            <option selected>Color</option>
                            <option value="1">Green</option>
                            <option value="2">Blue</option>
                            <option value="3">Red</option>
                        </select>
                        <select class="custom-select ml-1">
                            <option selected>Size</option>
                            <option value="1">41</option>
                            <option value="2">42</option>
                            <option value="3">43</option>
                        </select>
                    </div>
                    <div class="buy d-flex justify-content-between align-items-center">
                        <div class="price text-success">
                            <h5 class="mt-4">$'.$value[4].'</h5>
                        </div>
                        <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            </div>
        </div>';
          }
        ?>
    </div>
</div>
<?php
    require "views/component/fotter.php";
?>