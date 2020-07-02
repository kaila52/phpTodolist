<!DOCTYPE html>
<html class="h-100">

<head>
    <title>Profile</title>
    <link href="pucblic/css/bootstrap.min.css" rel="stylesheet" />
    <script src="pucblic/js/fontwesom.min.js" crossorigin="anonymous"></script>
</head>

<body class="h-100">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">
                <svg width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M511.981,118.509c-0.135-2.956-1.892-5.726-4.565-7.04l-159.24-79.62c-3.776-1.887-8.363-0.64-10.664,2.898 L229.916,200.282l-55.413-85.891c-0.796-1.235-1.945-2.264-3.259-2.922l-159.24-79.62C6.582,29.138,0,33.218,0,39.268v79.621 c0,4.581,3.712,8.294,8.294,8.294c4.581,0,8.294-3.712,8.294-.294V52.687l142.652,71.326v335.32L16.587,388.008V154.277	c0-4.581-3.712-8.294-8.294-8.294c-4.581,0-8.294,3.712-8.294,8.294v238.857c0,3.142,1.775,6.013,4.585,7.418l159.24,79.62	c5.427,2.714,12.003-1.375,12.003-7.418V318.087l324.17,162.085c5.427,2.714,12.003-1.375,12.003-7.418V118.888	C512,118.76,511.987,118.636,511.981,118.509z M175.827,299.541v-152.5l145.239,225.12L175.827,299.541z M495.413,459.335
l-139.34-69.671l108.576-186.993c2.299-3.961,0.952-9.037-3.009-11.337c-3.96-2.298-9.036-0.953-11.337,3.009L344.094,377.258
L239.77,215.555L347.383,49.998l144.717,72.359l-26.387,45.446c-2.299,3.961-0.952,9.037,3.009,11.337	c3.958,2.297,9.035,0.953,11.337-3.009l15.354-26.443V459.335z" fill="#000" />
                        </g>
                    </g>
                </svg>
                <span class="ml-3 font-weight-bold">BRAND</apan>
            </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav mr-auto pl-lg-4">
                    <li class="nav-item px-lg-2 active"> <a class="nav-link" href="index.php?controller=home"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            foreach ($directory as $value) {
                                echo '<a class="dropdown-item" href="index.php?controller=product&action=' . $value[1] . '">' . ucfirst($value[1]) . '</a>';
                            }
                            ?>
                        </div>
                    </li>

                    <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Services</a> </li>
                    <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>About</a> </li>
                    <?php
                    if (!empty($_SESSION['id'])) {
                        echo '
                        <li class="nav-item px-lg-2 nav-link" data-toggle="modal" data-target="#deposit">
                            Deposit
                        </li>
                            <div class="modal fade" id="deposit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title amount" id="exampleModalLabel">Số dư : '.$_SESSION['amount'].'$</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Số tiền cần gửi: </label>
                                        <input type="number" class="form-control" name="amountDeposit">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="Deposit">Send message</button>
                                    </div>
                              </div>
                            </div>
                          </div>
                            ';
                            echo '
                            <li class="nav-item px-lg-2 nav-link" data-toggle="modal" data-target="#withdrawal">
                                Withdrawal
                                
                                </li>
                                <div class="modal fade" id="withdrawal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title amount" id="exampleModalLabel">Số dư : '.$_SESSION['amount'].'$</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Số tiền cần rút: </label>
                                        <input type="number" class="form-control" name="amountWithdrawal">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" name="Withdrawal">Send message</button>
                                    </div>
                              </div>
                                </div>
                              </div>
                                ';
                    }
                    ?>
                </ul>
                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    <?php if (!empty($_SESSION['id'])) {
                      echo '<li class="nav-item align-self-center text-danger amount">Số dư : '.$_SESSION['amount'].'$</li>';
                    };?>
                    
                    <li class="nav-item"> <a class="nav-link" href="#">
                            <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                        </a> </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                    <?php
                    if (empty($_SESSION['id'])) {
                        echo '<li class="nav-item px-1">
                            <a class="btn btn-outline-info my-2 my-sm-0" type="submit" href="index.php?controller=login">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="btn btn-outline-info my-2 my-sm-0" type="submit" href="index.php?controller=register">
                                <i class="fas fa-sign-in-alt"></i> Register
                            </a>
                        </li>';
                    } else {
                        echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                        if (!empty($_SESSION['profile'])) {
                            echo '<img id="navbarDropdown" style="border-radius: 50%;width: 40px;height: 40px;" src="pucblic/images/user/' . $_SESSION['profile'] . '"/>';
                        } else {
                            echo '<img id="navbarDropdown" src="pucblic/images/avatarDefaul.png" style="border-radius: 50%;width: 40px;height: 40px;" />';
                        }
                        echo '</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="index.php?controller=profile">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?controller=logout">Logout</a>
                        </div>
                    </li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>