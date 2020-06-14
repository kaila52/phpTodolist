<?php
require "views/component/header.php";
?>
<div class="mx-auto" style="width: 40%;">
    <form>
        <h2 class="text-center pt-4">Contact Us</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
        </div>
        <div class="col-md-10 mx-auto mt-3">
            <button type="submit" class="btn btn-lg btn-danger btn-block">Submit</button>
        </div>
    </form>
</div>
<?php
require "views/component/fotter.php";
?>