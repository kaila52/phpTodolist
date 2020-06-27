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
            <form method="POST" class="w-75">
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Old Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control form-control-lg" id="colFormLabelLg" name="oldpasswd">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">New Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control form-control-lg" id="colFormLabelLg" name="newpasswd">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control form-control-lg" id="colFormLabelLg" name="cfpasswd">
                    </div>
                </div>
                <button type="submit" name="update" class="btn btn-success">Success</button>
            </form>
        </div>
    </div>
</div>
<?php
require "views/component/fotter.php";
?>