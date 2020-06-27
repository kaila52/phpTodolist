<?php
require "views/component/header.php";
?>
<div class="container" style="height: 88%;">
    <div class="row h-100 pt-5">
        <div class="col-3 pl-5">
            <div id="list-example" class="list-group">
                <a class="dropdown-item py-2 rounded" href="index.php?controller=profile">Picture</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item py-2 rounded active" href="index.php?controller=profile&action=setting">Account settings</a>
                <div class="dropdown-divider rounded"></div>
                <a class="dropdown-item py-2 rounded" href="index.php?controller=profile&action=password">Change the password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item py-2 rounded" href="#">Developing</a>
            </div>
        </div>
        <div class="col-9 d-flex justify-content-center">
            <form class="w-50 text-center" method="PUT">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php
require "views/component/fotter.php";
?>