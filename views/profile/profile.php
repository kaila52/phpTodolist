<?php
require "views/component/header.php";
?>
<div class="row" style="height: 88%;">
    <div class="col-3 pl-5 pt-5">
        <div id="list-example" class="list-group">
            <a class="dropdown-item py-2 rounded active" href="index.php?controller=profile">Picture</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item py-2 rounded" href="index.php?controller=profile&action=account">Account settings</a>
            <div class="dropdown-divider rounded"></div>
            <a class="dropdown-item py-2 rounded" href="index.php?controller=profile&action=password">Change the password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item py-2 rounded" href="#">Separated link</a>
        </div>
    </div>
    <div class="col">
        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
            <h4 id="list-item-1">Item 1</h4>
            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
            <h4 id="list-item-2">Item 2</h4>
            <p>Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
            <h4 id="list-item-3">Item 3</h4>
            <p>Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
        </div>
    </div>
</div>
<?php
require "views/component/fotter.php";
?>