<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

<body>
    <!-- *** TOPBAR ***-->
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
                        <li>Tentang Kami</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Halaman</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="aboutus.php">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                                <li>
                                    <a href="faq2.php">FAQ</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->
                    <!-- <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div> -->
                </div>

                <div class="col-md-9">

                    <div class="box" id="text-page">
                        <h1 style="text-align: center;">Tentang Lelang Murah</h1>

                        <!-- <p class="lead">This page aim is to show you the most common HTML elements appearance on the website. For further reference please visit official <a href="http://getbootstrap.com/css/" class="external">Bootstrap website</a>.</p> -->

                        <p style="text-align: justify;"><strong>Lelang Murah</strong> merupakan suatu perusahaan yang bergerak dibidang pelelangan mobil dan motor. Mobil dan motor yang dilelang memiliki harga dan kualitas yang bervariasi dan tentunya memiliki garansi jika kualitas yang tertera tidak sesuai dengan kenyataan. Ayo tunggu apalagi, ikuti lelangnya bawa pulang mobil dan motornya.</p>

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