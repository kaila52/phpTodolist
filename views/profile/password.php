<?php
require "views/component/header.php";
?>
<div class="container" style="height: 88%;">
    <div class="row h-100 pt-5">
        <div class="col-3 pl-5">
            <div id="list-example" class="list-group">
                <a class="dropdown-item py-2 rounded" href="index.php?controller=profile">Picture</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item py-2 rounded" href="index.php?controller=profile&action=setting">Account settings</a>
                <div class="dropdown-divider rounded"></div>
                <a class="dropdown-item py-2 rounded active" href="index.php?controller=profile&action=password">Change the password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item py-2 rounded" href="#">Developing</a>
            </div>
        </div>
        <div class="col-9 d-flex justify-content-center">
            <form>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require "views/component/fotter.php";
?>