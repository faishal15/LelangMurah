<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

<body>

    <!-- *** TOPBAR *** -->
    <?php include 'top.php';?>
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***-->
    <?php include 'navbar.php';?>
    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>Lokasi</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
                    _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Kota</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="aboutus.php">Jakarta</a>
                                </li>
                                <li>
                                    <a href="contact.php">Surabaya</a>
                                </li>
                                <li>
                                    <a href="faq2.php">Medan</a>
                                </li>
                                <li>
                                    <a href="faq2.php">Yogyakarta</a>
                                </li>
                                <li>
                                    <a href="faq2.php">Bandung</a>
                                </li>
                                <li>
                                    <a href="faq2.php">Palembang</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <div class="row">
                            <div class ="col-md-5">
                                <img src="img/surabaya.jpeg" alt="" class="img-responsive">
                            </div>
                            <div class ="col-md-4">
                                <h2>Surabaya</h2>
                                <h3><i class="fa fa-map-marker"></i> Alamat</h3>
                                <p>Jalan Gebang No 7</p>
                                <h3><i class="fa fa-phone"></i> Telepon</h3>
                                <p>08637837262</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.panel-group -->

            </div>


        </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

<!-- *** FOOTER *** -->
<?php include 'footer.php';?>
<!-- *** FOOTER END *** -->

<!-- *** COPYRIGHT *** -->
<?php include 'copyright.php';?>
<!-- *** COPYRIGHT END *** -->
</div>
<!-- /#all -->

<!-- *** SCRIPTS TO INCLUDE *** -->
<?php include 'script.php';?>

</body>

</html>
