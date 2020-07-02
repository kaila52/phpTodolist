<?php
require "views/component/header.php";
?>
<div class="container" style="height: 88%;">
    <div class="row h-100 pt-5">
        <div class="col-3 pl-5">
            <div id="list-example" class="list-group">
                <a class="dropdown-item py-2 rounded active" href="index.php?controller=profile">Picture</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item py-2 rounded" href="index.php?controller=profile&action=setting">Account settings</a>
                <div class="dropdown-divider rounded"></div>
                <a class="dropdown-item py-2 rounded" href="index.php?controller=profile&action=password">Change the password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item py-2 rounded" href="#">Developing</a>
            </div>
        </div>
        <div class="col-9 d-flex justify-content-center">
            <form class="w-50 text-center" method="POST" enctype="multipart/form-data">
                <div>
                    <label style="cursor: pointer;" for="file-input">
                        <?php
                        if(!empty($_SESSION['profile'])){
                            echo '<img class="rounded-circle" width="50%" src="pucblic/images/user/' . $_SESSION['profile'] . '" />';
                        }else{
                            echo '<img class="rounded-circle" width="50%" src="pucblic/images/avatarDefaul.png""/>';
                        }
                        
                        ?>
                        <i class="fas fa-camera fa-2x position-absolute" style="top: 25%;right: 39%;"> </i>
                    </label>
                    <input type="file" class="form-control-file d-none" id="file-input" name="image" />
                </div>
                <h3 class="name">Ben Johnson</h3>
                <p class="title">Musician</p>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php
require "views/component/fotter.php";
?>