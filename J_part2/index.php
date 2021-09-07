<!--  <?php
            // session_start();
            // $show_name = false;

            // if (!isset($_SESSION["logedin"])) {
            //     // header("Location:login.php");
            // } else if (isset($_SESSION["logedin"])) {
            //     $show_name = true;
            // }
            ?>-->
    <!DOCTYPE html>
    <html lang="en">
 
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title text-center>AS Collection</title text-center>
        <?php include "partials/u_links.php"?>
     
        
    </head>
    <style>
        .card-body {
            background-color: #181510;
            text-align: center;
        }

        .card-border {
            border: 0px solid #c451a725;
            /* background-color: #c451a74f; */

        }

        .card {

            border-radius: 0px;
            background-color: #181510;
        }

        .card-title {
            font-size: 20px;
            color: #bbb572;
        }

        .card-title text-center {
            font-size: 35px;
            color: #bbb572;
        }

        .title text-center {
            font-size: 19px;
            text-decoration: none;
            color: #bbb572;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;

        }


        .instagram-opacity:hover {
            opacity: 0.4;
        }

        img.card-img-top.instagram-opacity {
            height: 300px;
            -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 23px 0px rgba(0,0,0,0); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 23px 0px rgba(0,0,0,0);
        }

        .insta_icon {

            position: absolute;
            top: 50%;
            font-size: 26px;
            left: 50%;
            display: none;
        }


        .dropdown-currency {
            list-style-type: none;
            font-size: 10.7px;
            margin-top: 5px;
        }

        li {
            list-style-type: none;
        }

        .dropdown-menu-currency {
            list-style-type: none;
            font-size: 7.7px;

        }

        .dropdown-currency-main {
            width: 10px;
            margin: 0px 0px 0px 0px;
            padding: 0px;
            margin-top: 50px;   
        }

        .col-md-1 {
            margin-right: 5px;
        }



        .first-div {
            color: white;
        }

        .first-div:hover {
            color: #bbb572;
        }

        .row no-gutters {

            margin-right: 0px;
            margin-left: 0px;
        }

        .carousel-item img {
            height: 790px;
        }

        .gallery_part {
            position: relative;
        }

        img.main-img.card-img-top {
            height: 450px;
        } img.card-img-top.main-img1 {
                height: 280px;
            }

        .one-image-carousel {
            height: 500px;
        }
        .cart_div{
            margin: top 20px;
        }
        img.card-img-top.best-seller-collection {
    height: 250px;
    padding: 1px;
    -webkit-box-shadow: 5px 5px 23px 0px #000000; 
box-shadow: 5px 5px 23px 0px #000000;
}
.ready-to-ship-collection {
        height: 250px;
        padding: 1px;
        -webkit-box-shadow: 5px 5px 23px 0px #000000; 
box-shadow: 5px 5px 23px 0px #000000;
    }
    img.card-img-top.instagram-opacity {
                height: 270px;
            }
            span.title.text-center {
    font-size: 15px;
   
}
       
        /* -------------------------------------------------------------------------- */
        /*                           MEDIA QUERY FOR MOBILES                          */
        /* -------------------------------------------------------------------------- */

        @media screen and (max-width: 600px) {
            .col-6.col-md-4.sub-main_collection {
        margin-top: 0px !important;
    }
    span.title.text-center {
    font-size: 13px;
    text-align: left;
}
    h5.card-title.text-center{
        font-size:15px;
    }
    img.d-block.w-100 {
    height: 301px;
}
    .ready-to-ship-collection {
        height: 180px;
        padding: 2px;
        -webkit-box-shadow: 5px 5px 23px 5px #000000; 
box-shadow: 5px 5px 23px 5px #000000;
    }
            .best-seller-collection{
            height: 200px;
            -webkit-box-shadow: 5px 5px 23px 5px #000000; 
box-shadow: 5px 5px 23px 5px #000000;
        }
            .card-border {
                margin:7%;
                border: 2px solid #c451a725;
            }

            img.one-image-carousel.d-block.w-100 {
    height: 250px;
}
            img.main-img.card-img-top {
                margin: auto;
            height: 200px;
        }img.card-img-top.best-seller-collection {
            height:190px;
            padding:2px;
}
            

        img.card-img-top.main-img1 {
                margin: auto;
                height: 180px;
            }

            .carousel-item img {
                height: 300px;
            }

            img.card-img-top.instagram-opacity {
                height: 120px;
            }
           div .card img.card-img-top.best-seller-collection {
            border-radius: 7px;
}

        }
        

    </style>

<body style="background-color: #000000;">

<!-- navigation -->
<!-- navigation -->
<div><?php
    include 'partials/nav.php';
    ?></div>
<!-- navigation -->

<!-- <button onclick="topFunction()" id="myBtn" class="back-to-top1 back-to-top2" style="transition: background-color .3s, 
opacity .5s, visibility .5s;cursor: pointer;border-radius: 7px;background:#bbb572;color:#181510;height:40px;width:40px; 
position: fixed;bottom: 20px;right: 30px;z-index: 99; display:none;font-size:23px; border:1px solid #bbb572;" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
<script>
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        $('html, body').animate({
            scrollTop: 0
        }, '900');
    }
</script> -->



<!-- navbar end -->

<!-- carousel start -->
<div class=""><?php
                include 'partials/carousel.php';
                ?></div>
<!-- carousel end -->



<!-- main content start -->
<div class="content" style="background-color: #181510; ">

    <!-- first two cards -->

    <div class="pt-5 container "   >
        <h2 class="text-center first_heading_index" style=" color: #bbb572;" data-aos="slide-up">OUR FEATURED COLLECTIONS</h2>

        <hr style=" color: #bbb572; margin-bottom: 30px;" class="mt-4">
        <a href="">
            <div class="cards mt-4">
                <div class="row no-gutters">

                    <div class="col-sm-12 col-md-6 col-lg-6  col-6  mx-auto"   data-aos="zoom-in">
                        <a href="sets.php">
                            <div class="card card-border">
                                <img src="images/i42.jpg" height="590px" class="main-img card-img-top  " alt="..." class="img-fluid img-responsive">
                            </div>
                            <a href="sets.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="color:#bbb572">SHOP THE LOOK COLLECTION</h5>
                                </div>
                            </a>
                    </div>
                    <div class="col-sm-12  col-md-6 col-lg-6 col-6  mx-auto"  data-aos="zoom-in">
                        <a href="haars.php">
                            <a href="haars.php">
                                <div class="card card-border">
                                    <img src="images/i41.jpg" height="590px" class=" main-img card-img-top" alt="..." class="img-fluid img-responsive">
                                </div>
                                <a href="haars.php">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="color:#bbb572">BRIDAL COLLECTION</h5>
                                    </div>
                                </a>
                    </div>

                    <!-- 3 cards  -->

                    <div class="three-cards mt-4" >
                        <div class="row no-gutters row no-gutters  row no-gutters  g-4">
                            <div class="col-6 col-md-4 sub-main_collection" data-aos="zoom-in">
                                <a href="sets.php">
                                    <div class="card card-border">
                                        <img src="images/i35.jpg" class="card-img-top main-img1 " alt="..." class="img-fluid" height="350px">
                                    </div>
                                </a>
                                <a href="sets.php">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="color:#bbb572">SETS<h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 sub-main_collection" data-aos="zoom-in">
                                <a href="commingsoon.php">
                                    <div class="card card-border">
                                        <img src="images/i37.jpg" class="main-img1 card-img-top" alt="..." class="img-fluid" height="350px">
                                    </div>
                                </a>
                                <a href="commingsoon.php">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="color:#bbb572">CUSTOM ORDERS</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 sub-main_collection" data-aos="zoom-in">
                                <a href="bali-plain.php">
                                    <div class="card card-border">
                                        <img src="images/i45.jpg" class="main-img1 card-img-top" alt="..." class="img-fluid" height="350px">
                                    </div>
                                </a>
                                <a href="bali-plain.php">
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="color:#bbb572">EARRINGS</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>




                    <!-- 4 cards -->
                    <div class="text mt-5">
                        <h2 class="text-center" style=" color: #bbb572;" data-aos="slide-up" >BEST SELLERS COLLECTION</h2>
                        <hr style=" color: #bbb572; margin-bottom: 30px;" class="mt-4">
                    </div>

                    <!-- BEST SELLERS COLLECTION first row -->
                    <div class="row mt-2"  >
                        <div class="col-md-3 col-6  col-sm-6 " data-aos="zoom-in-up">
                            <div class="card">
                                <a href="teekah.php">
                                    <img src="images/t2.jpeg" class="card-img-top  best-seller-collection" onmouseover="changeimg11(this)" onmouseout="previousimg11(this)" alt="..." class="img-fluid" height="300px">

                                </a>
                            </div>
                            <a href="teekah.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="teekah.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Jhumar Teekah</span> <span class="price "><br> <span class="money"    data-aos="zoom-in" id="teekah" data-currency-usd="40000 Rs">40000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6  col-sm-6 "data-aos="zoom-in-up">
                            <div class="card"><a href="sets.php">
                                <img src="images/s2.jpeg" class="card-img-top best-seller-collection" id='img1' onmouseover="changeimg2(this)" onmouseout="previousimg2(this)" alt="..." class="img-fluid" height="300px"></a>

                            </div>
                            <a href="sets.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="sets.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Chokar earings Naurattan</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="chokar1" data-currency-usd="40000 Rs">40000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6  col-sm-6 "data-aos="zoom-in-up">
                            <div class="card"><a href="sets.php">
                                <img src="images/s3.jpeg" class="card-img-top best-seller-collection" id='img1' onmouseover="changeimg13(this)" onmouseout="previousimg3(this)" alt="..." class="img-fluid" height="300px"></a>

                            </div>
                            <a href="sets.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="sets.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Chokar earings Naurattan</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="chokar2" data-currency-usd="">540000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6  col-sm-6 "data-aos="zoom-in-up">
                            <div class="card"><a href="bali-plain.php">
                                <img src="images/e1.jpeg" class="card-img-top best-seller-collection" id='img1' onmouseover="changeimg14(this)" onmouseout="previousimg4(this)" alt="..." class="img-fluid" height="300px"></a>

                            </div>
                            <a href="bali-plain.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="bali-plain.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Earrings</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="earring" data-currency-usd="">21000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                    </div>

                        <!-- BEST SELLERS COLLECTION second row  2nd-->
                    <div class="row " >
                        <div class="col-md-3 col-6  col-sm-6 "data-aos="zoom-in-up">
                            <div class="card">
                                <a href="teekah.php">
                                    <img src="images/t1.jpeg" class="card-img-top  best-seller-collection" onmouseover="changeimg11(this)" onmouseout="previousimg11(this)" alt="..." class="img-fluid" height="300px">

                                </a>
                            </div>
                            <a href="teekah.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="teekah.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Jhumar Teekah</span> <span class="price "><br> <span class="money"    data-aos="zoom-in" id="teekah" data-currency-usd="40000 Rs">40000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6  col-sm-6 "data-aos="zoom-in-up">
                            <div class="card"><a href="sets.php">
                                <img src="images/s1.jpeg" class="card-img-top best-seller-collection" id='img1' onmouseover="changeimg2(this)" onmouseout="previousimg2(this)" alt="..." class="img-fluid" height="300px"></a>

                            </div>
                            <a href="sets.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="sets.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Chokar earings Naurattan</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="chokar1" data-currency-usd="40000 Rs">40000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6  col-sm-6 "data-aos="zoom-in-up">
                            <div class="card"><a href="tops.php">
                                <img src="images/tops1.jpeg" class="card-img-top best-seller-collection" id='img1' onmouseover="changeimg13(this)" onmouseout="previousimg3(this)" alt="..." class="img-fluid" height="300px"></a>

                            </div>
                            <a href="tops.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="tops.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Earings Naurattan</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="chokar2" data-currency-usd="">540000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6  col-sm-6 "data-aos="zoom-in-up">
                            <div class="card"><a href="sets.php">
                                <img src="images/i59.jpg" class="card-img-top best-seller-collection" id='img1' onmouseover="changeimg14(this)" onmouseout="previousimg4(this)" alt="..." class="img-fluid" height="300px"></a>

                            </div>
                            <a href="sets.php">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="sets.php" itemprop="url">
                                            <div class="product-details"> <span class="title text-center" itemprop="name">Set</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="earring" data-currency-usd="">21000 Rs</span></span>

                                            </div>
                                        </a></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4 cards -->
                <div class="text my-5">
                    <h2 class="text-center mt-5" style=" color: #bbb572;" data-aos="slide-up">READY-TO-SHIP COLLECTION</h2>
                    <hr style=" color: #bbb572; margin-bottom: 30px;" class="my-4">
                </div>
                <!-- container div -->
            </div>
    </div>
    <!-- container-fluid -->


   
    <div class="container">

         <!-- READY-TO-SHIP COLLECTION first row 1st -->
        <div class="four-cards " >
            <div class="row no-gutters row no-gutters   row no-gutters cols-md-4 g-4">
                
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                        <a href="bands.php">
                        <img src="images/i27.jpg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg15(this)" onmouseout="previousimg15(this)" alt="..." class="img-fluid" height="300px"></a>
                    </div>
                    <a href="bands.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href=" sets.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Bracelet</span> <span class="price "><br> <span class="money"    data-aos="zoom-in" id="tops_1" data-currency-usd="5500 Rs">5500 Rs</span></span>
                                    </div>
                                </a></h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                    <a href="bali-plain.php">
                        <img src="images/i28.jpg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg16(this)" onmouseout="previousimg6(this)" alt="..." class="img-fluid" height="300px"></a>

                    </div>
                    <a href="bali-plain.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href=" sets.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Earrings</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="bands" data-currency-usd="40000 Rs">8000 Rs</span></span>

                                    </div>
                                </a></h5>
                        </div>
                </div>
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                        <a href="sets.php">
                        <img src="images/i21.jpg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg17(this)" onmouseout="previousimg7(this)" alt="..." class="img-fluid" height="300px"></a>

                    </div>
                    <a href="sets.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href=" sets.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Set</span><span class="price "> <br><span class="money"    data-aos="zoom-in" id="l_tops" data-currency-usd="12500">12500 Rs</span></span>

                                    </div>
                                </a></h5>
                        </div>
                </div>
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                       <a href="sets.php">
                        <img src="images/i34.jpg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg18(this)" onmouseout="previousimg8(this)" alt="..." class="img-fluid" height="300px"></a>

                    </div>
                    <a href="sets.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href=" sets.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Set-Nauratan</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="earrings" data-currency-usd="120000 Rs Rs">120000 Rs</span></span>
                                    </div>
                                </a></h5>
                        </div>
                </div>
            </div>
        </div>

         <!-- READY-TO-SHIP COLLECTION second row 2nd -->
        <div class="four-cards " >
            <div class="row no-gutters row no-gutters   row no-gutters cols-md-4 g-4">
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                       <a href="locket-tops.php">
                        <img src="images/lt2.jpeg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg15(this)" onmouseout="previousimg15(this)" alt="..." class="img-fluid" height="300px"></a>
                    </div>
                    <a href="locket-tops.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href="locket-tops.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Tops - Nauratan</span> <span class="price "><br> <span class="money"    data-aos="zoom-in" id="tops_1" data-currency-usd="5500 Rs">5500 Rs</span></span>
                                    </div>
                                </a></h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                    <a href="bands.php">
                        <img src="images/i63.jpg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg16(this)" onmouseout="previousimg6(this)" alt="..." class="img-fluid" height="300px"></a>

                    </div>
                    <a href="bands.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href="bands.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Tennis Bracelet</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="bands" data-currency-usd="40000 Rs">8000 Rs</span></span>

                                    </div>
                                </a></h5>
                        </div>
                </div>
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                        <a href="locket-tops.php">
                        <img src="images/lt1.jpeg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg17(this)" onmouseout="previousimg7(this)" alt="..." class="img-fluid" height="300px"></a>

                    </div>
                    <a href="locket-tops.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href="locket-tops.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Locket Tops</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="l_tops" data-currency-usd="12500">12500 Rs</span></span>

                                    </div>
                                </a></h5>
                        </div>
                </div>
                <div class="col-md-3 col-6  col-sm-6"data-aos="zoom-in">
                    <!-- <a href=""> -->
                    <div class="card">
                       <a href="bali-plain.php">
                        <img src="images/e2.jpeg" class="card-img-top ready-to-ship-collection" id='img1' onmouseover="changeimg18(this)" onmouseout="previousimg8(this)" alt="..." class="img-fluid" height="300px"></a>

                    </div>
                   <a href="bali-plain.php">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a class="product-info__caption " href="bali-plain.php" itemprop="url">
                                    <div class="product-details"> <span class="title text-center" itemprop="name">Earrings in silver</span> <span class="price "> <br><span class="money"    data-aos="zoom-in" id="earrings" data-currency-usd="120000 Rs Rs">120000 Rs</span></span>
                                    </div>
                                </a></h5>
                        </div>
                </div>
            </div>
        </div>

        <!-- container-fluid div-->
    </div>
    <!-- one image carousel start-->
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-5" data-bs-ride="carousel"data-aos="zoom-in">
        <div class="carousel-inner">
            <div class="carousel-items active">
                <img src="images/i37.jpg" class="one-image-carousel d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!-- one image carousel end-->

    <div class="gallery pt-5 " style="background-color:  000000;" >
        <h3 style="text-align: center; color:#bbb572 " data-aos="slide-up">Instagram</h3>
        
        
                  <br>
        <!-- /* -------------------------------------------------------------------------- */
        /*                                   GALLERY                                  */
        /* -------------------------------------------------------------------------- */ -->

        <!-- <div class="row my-5">
<div class="col-md-3 col-6"></div>
<div class="col-md-3 col-6"></div>
<div class="col-md-3 col-6"></div>
<div class="col-md-3 col-6"></div>
<div class="col-md-3 col-6"></div>
<div class="col-md-3 col-6"></div>
<div class="col-md-3 col-6"></div>
<div class="col-md-3 col-6"></div>
</div> -->


        <div class="container-fluid" style="box-sizing: border-box; margin:0; padding:0">
            <div class="four-cards ">
                <div class="row no-gutters row no-gutters   row no-gutters cols-md-4 g-4">
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in">
                            <a href="sets.php" class="gallery_part">
                                <img src="images/i25.jpg" onmouseover="on1(this)" onmouseout="off1(this)" class="card-img-top instagram-opacity " alt="..." class="img-fluid">
                                <i id="instaicon1" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                                <script>
                                    var x1 = document.getElementById('instaicon1');

                                    function on1() {
                                        x1.style.display = "block";
                                    }

                                    function off1() {
                                        x1.style.display = "none";
                                    }
                                </script>
                            </a>
                        </div>

                    </div>
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in">
                            <a href="sets.php" class="gallery_part">
                            <img src="images/i5.jpg" onmouseover="on2(this)" onmouseout="off2(this)" class="card-img-top  instagram-opacity" id='img1' alt="..." class="img-fluid">
                            <i id="instaicon2" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                            <script>
                                var x2 = document.getElementById('instaicon2');

                                function on2() {
                                    x2.style.display = "block";
                                }

                                function off2() {
                                    x2.style.display = "none";
                                }
                            </script></a>
                        </div>
                    </div>
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in" >
                            <a href="sets.php" class="gallery_part">
                            <img src="images/i15.jpg" onmouseover="on3(this)" onmouseout="off3(this)" class="card-img-top  instagram-opacity" id='img1' alt="..." class="img-fluid">
                            <i id="instaicon3" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                            <script>
                                var y3 = document.getElementById('instaicon3');

                                function on3() {
                                    y3.style.display = "block";
                                }

                                function off3() {
                                    y3.style.display = "none";
                                }
                            </script></a>
                        </div>

                    </div>
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in">
                            <a href="sets.php">
                            <img src="images/i42.jpg" onmouseover="on4(this)" onmouseout="off4(this)" class="card-img-top instagram-opacity " id='img1' alt="..." class="img-fluid">
                            <i id="instaicon4" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                            <script>
                                var y4 = document.getElementById('instaicon4');

                                function on4() {
                                    y4.style.display = "block";
                                }

                                function off4() {
                                    y4.style.display = "none";
                                }
                            </script></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- container-fluid div-->
        </div>

        <div class="container-fluid " style="box-sizing: border-box;margin:0;padding:0;" >
            <div class="fourd-cards " >
                <div class="row no-gutters row no-gutters   row no-gutters cols-md-4 g-4" >
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in">
                            <a href="bands.php" class="gallery_part">
                                <img src="images/b1.jpeg" onmouseover="onn5(this)" onmouseout="offn5(this)" class="card-img-top instagram-opacity " alt="..." class="img-fluid">
                                <i id="instaicon5" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                                <script>
                                    var x5 = document.getElementById('instaicon5');

                                    function onn5() {
                                        x5.style.display = "block";
                                    }

                                    function offn5() {
                                        x5.style.display = "none";
                                    }
                                </script>
                            </a>
                        </div>

                    </div>
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in">
                            <a href="bali-plain.php">
                            <img src="images/i19.jpg" onmouseover="on6(this)" onmouseout="off6(this)" class="card-img-top  instagram-opacity" id='img1' alt="..." class="img-fluid">
                            <i id="instaicon6" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                            <script>
                                var y = document.getElementById('instaicon6');

                                function on6() {
                                    y.style.display = "block";
                                }

                                function off6() {
                                    y.style.display = "none";
                                }
                            </script></a>
                        </div>
                    </div>
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in">
                            <a href="sets">
                            <img src="images/i12.jpg" onmouseover="on7(this)" onmouseout="off7(this)" class="card-img-top  instagram-opacity" id='img1' alt="..." class="img-fluid">
                            <i id="instaicon7" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                            <script>
                                var z = document.getElementById('instaicon7');

                                function on7() {
                                    z.style.display = "block";
                                }

                                function off7() {
                                    z.style.display = "none";
                                }
                            </script></a>
                        </div>

                    </div>
                    <div class="col">
                        <!-- <a href=""> -->
                        <div class="card"data-aos="zoom-in">
                            <a href="bali-plain.php">
                            <img src="images/i22.jpg" onmouseover="on8(this)" onmouseout="off8(this)" class="card-img-top instagram-opacity " id='img1' alt="..." class="img-fluid">
                            <i id="instaicon8" class="fab fa-instagram insta_icon text-light" style="display:none"></i>
                            <script>
                                var z8 = document.getElementById('instaicon8');

                                function on8() {
                                    z8.style.display = "block";
                                }

                                function off8() {
                                    z8.style.display = "none";
                                }
                            </script></a>
                        </div>

                    </div>

                </div>
            </div>
            <!-- container-fluid div-->
        </div>
    </div>
</div>

</div>
<!-- main-end -->


<!-- footer -->
<div><?php
include 'partials/footer.php';
?></div>


</body>
<script>
 function Collapse_Currency() {
        
          var dropdown_collapse_currency = document.getElementById('dropdown-collapse_currency');
          if (b == false) {
            dropdown_collapse_currency.style.display = "block";
            b = true;
          } else {
            dropdown_collapse_currency.style.display = "none";
            b = false;
          }
        }
        </script>

     
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    </html>