<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

<body>
    <!-- *** TOPBAR *** -->
    <?php include 'top.php';?>
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR *** -->
    <?php include 'navbar.php';?>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Detail Produk</li>
                    </ul>

                </div>

                <div class="col-md-12">

                    <div class="row" id="productMain">
                        <div class="col-sm-7">
                            <div id="mainImage">
                                <img src="img/detailbig1.jpg" alt="" class="img-detail">
                            </div>

                        </div>
                        <div class="col-sm-5">
                            <div class="box">
                                <h1 class="text-center">Toyota Avanza</h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a>
                                </p>
                                <p class="price">$124.00</p>

                                <p class="text-center buttons">
                                    <a href="basket.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                                    <a href="basket.php" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="thumbs">
                        <div class="slider">
                            <div class="col-xs-2">
                                <a href="img/detailbig1.jpg" class="thumb">
                                    <img src="img/detailsquare.jpg" alt="" class="img-preview">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/detailbig2.jpg" class="thumb">
                                    <img src="img/detailsquare2.jpg" alt="" class="img-preview">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/detailbig3.jpg" class="thumb">
                                    <img src="img/detailsquare3.jpg" alt="" class="img-preview">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/medan.jpg" class="thumb">
                                    <img src="img/medan.jpg" alt="" class="img-preview">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/detailbig3.jpg" class="thumb">
                                    <img src="img/detailsquare3.jpg" alt="" class="img-preview">
                                </a>
                            </div>
                            <div class="col-xs-2">
                                <a href="img/detailbig3.jpg" class="thumb">
                                    <img src="img/detailsquare3.jpg" alt="" class="img-preview">
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="box" id="details">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>
                                    <h4>Merk</h4>
                                    <p>Toyota</p>
                                    <h4>Tipe</h4>
                                    <ul>
                                        <li>Avanza</li>
                                    </ul>
                                    <h4>No Polisi</h4>
                                    <h4>Tahun</h4>
                                    <h4>Transmisi</h4>
                                    <h4>Kapasitas Mesin (CC)</h4>
                                    <h4>Bahan Bakar</h4>
                                    <h4>Kilometer</h4>
                                    <h4>No Rangka</h4>
                                    <h4>No Mesin</h4>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                    <h4>Warna</h4>
                                    <p>Hitam</p>
                                    <h4>STNK</h4>
                                    <ul>
                                        <li>Avanza</li>
                                    </ul>
                                    <h4>Masa Berlaku STNK</h4>
                                    <h4>BPKB</h4>
                                    <h4>Faktur</h4>
                                    <h4>Fotokopi KTP</h4>
                                    <h4>Kwitansi Blanko</h4>
                                    <h4>Form A</h4>
                                    <h4>KEUR</h4>
                                    <h4>Masa Berlaku KEUR</h4>
                                </p>
                            </div>
                        </div>
                       
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