<div id="top">
    <div class="container">
        <div class="col-md-12" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                </li>
                <li><a href="register.php">Register</a>
                </li>
                <li><a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Login User</h4>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email-modal" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-modal" placeholder="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">Anda Belum Daftar?</p>
                    <p class="text-center text-muted"><a href="register.php"><strong>Daftar Sekarang!</strong></a> Hanya perlu mengisi beberapa form untuk mendaftar ke bisnis kami!</p>

                </div>
            </div>
        </div>
    </div>
</div>