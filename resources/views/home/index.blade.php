<!DOCTYPE html>
<html lang="en">

@include('layouts.head');

<body>

    <!-- *** TOPBAR ***-->
    @include('layouts.top')
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR *** -->
    @include('layouts.navbar')
    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="{{url('')}}/img/main-slider1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{url('')}}/img/main-slider2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{url('')}}/img/main-slider3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="{{url('')}}/img/main-slider4.jpg" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We love our customers</a></h3>
                                <p>We are known to provide best possible service ever</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                                <p>You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                <p>Free returns on everything for 3 months.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            <div id="hot">
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2><b>LOKASI LELANG</b></h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="box-image">
                                <div class="image">
                                <img src="{{url('')}}/img/jakarta.jpg" alt="" class="img-lokasi">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3>Jakarta</h3> 
                                </div>
                            </div>
                            <!-- /.box-image -->
                        </div>

                        <div class="col-sm-4">
                            <div class="box-image">
                                <div class="image">
                                <img src="{{url('')}}/img/bandung.jpg" alt="" class="img-lokasi">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3>Bandung</h3> 
                                </div>
                            </div>
                            <!-- /.box-image -->
                        </div>

                        <div class="col-sm-4">
                            <div class="box-image">
                                <div class="image">
                                <img src="{{url('')}}/img/surabaya.jpeg" alt="" class="img-lokasi">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3>Surabaya</h3> 
                                </div>
                            </div>
                            <!-- /.box-image -->
                        </div>

                        <div class="col-sm-4">
                            <div class="box-image">
                                <div class="image">
                                <img src="{{url('')}}/img/medan.jpg" alt="" class="img-lokasi">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3>Medan</h3> 
                                </div>
                            </div>
                            <!-- /.box-image -->
                        </div>

                        <div class="col-sm-4">
                            <div class="box-image">
                                <div class="image">
                                <img src="{{url('')}}/img/palembang.jpg" alt="" class="img-lokasi">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3>Palembang</h3> 
                                </div>
                            </div>
                            <!-- /.box-image -->
                        </div>

                        <div class="col-sm-4">
                            <div class="box-image">
                                <div class="image">
                                <img src="{{url('')}}/img/yogyakarta.jpg" alt="" class="img-lokasi">
                                </div>
                                <div class="bg"></div>
                                <div class="name">
                                    <h3>Yogyakarta</h3> 
                                </div>
                            </div>
                            <!-- /.box-image -->
                        </div>

                    </div>
                </div>
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2><b>List Terbaru</b></h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">
                        <div class="item">
                            <div class="product">
                                <a href="detail.php">
                                    <img src="{{url('')}}/img/avanza.jpg" alt="" class="img-random">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <a href="detail.php">
                                    <img src="{{url('')}}/img/suprax.jpg" alt="" class="img-random">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <a href="detail.php">
                                    <img src="{{url('')}}/img/fortuner.jpg" alt="" class="img-random">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <a href="detail.php">
                                    <img src="{{url('')}}/img/mobilio.jpg" alt="" class="img-random">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <a href="detail.php">
                                    <img src="{{url('')}}/img/beat.jpg" alt="" class="img-random">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <a href="detail.php">
                                    <img src="{{url('')}}/img/agya.jpg" alt="" class="img-random">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->

            </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->

        </div>
        <!-- /#content -->

        <!-- *** FOOTER *** -->
        @include('layouts.footer');
        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT *** -->
        @include('layouts.copyright');
        <!-- *** COPYRIGHT END *** -->

    </div>
    <!-- /#all -->

    <!-- *** SCRIPTS TO INCLUDE ***-->
    @include('layouts.script');


</body>

</html>