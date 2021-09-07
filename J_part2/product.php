<?php
        // session_start();
        // $show_name=false;

        // if (!isset($_SESSION["logedin"])) {
        //     // header("Location:login.php");
        // }else if (isset($_SESSION["logedin"])) {
        //     $show_name=true;

        // 
        
        $src=$_GET['src'];
        // echo 'source is: '.$src;
        
        ?><!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS Collection-Product</title>

    <link rel="stylesheet" href="partials/nav_items_style.css">
 
 <link rel="icon" type="img/jpg" href="favicon.jpg">
</head>

<style>


    .zoomimg:hover {
        cursor: zoom-in;
        transform: scale(1.3);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        /* margin-bottom: 350px; */
        /* margin-top: 350px; */
        padding:20px 0;
    }

    .zoomimg {
        border:1px solid white;
        /* padding: 50px; */
        transition: transform .2s;
        /* Animation */

        margin: 0 auto;
        
    }

    .card-bigimg {
        border: 1px solid white;
    }

    .thumbnil-img {
       
        width: 100px;
        padding: 0px;
    }
    #activeimg {
        margin: 0px;
        padding: 0px;
        margin-top: 50px;
        margin-bottom: 20px;
        width: 400px;
        height: 400px;
    }
    .geek {
        
        overflow: hidden;
        margin: 0 auto;
    }
    .geek img {
        width: 100%;
        transition: 0.5s all ease-in-out;
        cursor:zoom-in;
    }
    .geek:hover img {
        transform: scale(1.5);
    }
    @media screen and (max-width: 600px) {
        #activeimg {
            margin-left: 20px;
            padding: 0px;
            width: 320px;
            height: 400px;
        } .thumbnil-img {
            padding: 3.8px;
        margin-top:30px;
    }

        
    }
</style>

<body style="background-color: #000000">
    <!-- navigation -->
    <!-- navigation -->
    <div><?php
            include 'partials/nav.php';
            ?></div>
    <!-- navbar end -->


    <!-- content -->
    <div class="main  " style="background-color: #181510; height:100%; margin-left:0px; padding-left:0px; overflow: hidden;">
        <div class="container mt-3 py-4  ">

            <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                  <h4 style="color: #bbb572;">Product</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="d-flex flex-row-reverse bd-highlight mt-1">
                        <div class="" style="color:#a08c5b;font-size:small"> <a href="" style="color:#a08c5b;font-size:small"> <i class="fas fa-angle-left"></i> Previouse</a> |<a href="" style="color:#a08c5b;font-size:small"> Next <i class="fas fa-angle-right"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- <hr class="line text-light" style="height: 0.4px;padding-top:1px;"> -->

            <div class="row  ">
                <div class=" col-md-12 col-sm-6 col-lg-6   pb-5">
                    <div class="card px-0 py-0 d-flex justify-content-center geek " style="border:0px;background-color:#181510">
                        <img src="<?php echo $src?>" class="card-img-top  img-fluid img-responsive  " id='activeimg' alt="...">
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-3">
                            <!-- <div class="card-group  mt-4" style="background:#181510"> -->
                                <div class="card" style="background-color:#181510;border:0px;">
                                    <img src="<?php echo $src?>" onclick="changeimg(this)" class="img-fluid img-responsive thumbnil-img" style="height:130px;" alt="">
                                    <script>
                                        function changeimg(x) {

                                            var bigimg = document.getElementById('activeimg');
                                            
                                            var srcc = x.src;

                                            bigimg.src = x.src;

                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-3">
                                <div class="card" style="background-color:#181510;border:0px;">
                                    <img src="images/h1.jpeg" onclick="changeimg(this)" class="img-fluid img-responsive thumbnil-img" style="  height:130px;" alt="">
                                    <script>
                                        function changeimg(x) {

                                            var bigimg = document.getElementById('activeimg');
                                            var srcc = x.src;

                                            bigimg.src = x.src;

                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-3">
                                <div class="card" style="border:0px;background:#181510">
                                    <img src="images/i33.jpg" onclick="changeimg(this)" class="img-fluid img-responsive thumbnil-img" style="  height:130px;" alt="">
                                    <script>
                                        function changeimg(x) {

                                            var bigimg = document.getElementById('activeimg');
                                            var firstthumbnil = x;

                                            var srcc = x.src;
                                            x.src = bigimg.src;
                                            bigimg.src = srcc;

                                        }
                                    </script>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-3">
                                <div class="card" style="border:0px;background:#181510">
                                    <img src="images/i10.jpg" onclick="changeimg(this)" class="img-fluid img-responsive thumbnil-img" style="  height:130px;" alt="">
                                    <script>
                                        function changeimg(x) {

                                            var bigimg = document.getElementById('activeimg');
                                            var srcc = x.src;

                                            bigimg.src = x.src;

                                        }
                                    </script>
                                <!-- </div>  -->
                            </div>
                        </div>
                    </div>
                </div>
            


            <div class="col-md-12 col-sm-6 col-lg-6  pt-4 pb-5 product_desc ">
                <h3 class="pt-4" style="color:#bbb572">RIHA SET</h3>
                <hr style=" color: #bbb572; margin-bottom: 30px;" class="mt-4">
                <div class="pricee py-0 my-0" style="color:#bbb572;font-size:22px">$ 289.00</div>
               <a href="cart.php?src=<?php echo $src?>?id=59" class=""> <div class="cat-btn btn my-4  px-4 p-2" onmouseover="changecolor(this)" onmouseout="backcolor(this)" style="border-radius:50px;width:85%;color:#000000; background:#bbb572">ADD TO CART</div></a>
                <script>
                    function changecolor(x) {
                        x.style.backgroundColor = "#bbb572";
                    }

                    function backcolor(x) {
                        x.style.backgroundColor = " #bbb572";
                    }
                </script>
                <p class="text-light" style="text-transform: lowercase;">
              Statement earrings so stunning, you won't need anything else!

Ethnic and luxurious jhumkey earrings handcrafted with ruby stones and pearl moti. Approximate earrings length is 3".

Gold-plated on high-quality brass as base metal.

Made by order. Kindly allow 4-6 weeks for the delivery of this item. For custom or urgent requests, please contact support@alacouture.com.
                </p>
                <div class="text-light mt-5" style="text-transform: capitalize;">*Please Note: We use faux stones and beads in all of our jewelry.</div>
            </div>
        </div>

    </div>




    <div class="row py-2">
        <div class="releated-items">
            <!-- 4 cards -->
            <div class="text my-5">
                <h2 class="text-center" style=" color: #bbb572;">RELATED ITEMS</h2>
                <hr style=" color: #bbb572; margin-bottom: 30px;" class="mt-4">
            </div>
            <!-- container div -->
        </div>
    </div>
    <!-- container-fluid -->

    <div class="container-fluid">
        <div class="four-cards  " >
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i12.jpg" class="card-img-top " id='img1' onmouseover="changeimg15(this)" onmouseout="previousimg5(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg15(x) {
                                    x.src = "images/i15.jpg";
                                }

                                function previousimg5(x) {
                                    x.src = "images/i12.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Aqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 9.00">$ 69.00</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>
                <div class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i18.jpg" class="card-img-top " id='img1' onmouseover="changeimg16(this)" onmouseout="previousimg6(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg16(x) {
                                    x.src = "images/i4.jpg";
                                }

                                function previousimg6(x) {
                                    x.src = "images/i18.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Asna Earrings - Availabe in 2 Options</span> <span class="price "> <br><span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>
                <div class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i33.jpg" class="card-img-top " id='img1' onmouseover="changeimg17(this)" onmouseout="previousimg7(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg17(x) {
                                    x.src = "images/i6.jpg";
                                }

                                function previousimg7(x) {
                                    x.src = "images/i33.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Sonam Earrings</span> <span class="price "> <br><span class="money" data-currency-usd="$ 89.00">SOLD OUT</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>
                <div class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i37.jpg" class="card-img-top " id='img1' onmouseover="changeimg18(this)" onmouseout="previousimg8(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg18(x) {
                                    x.src = "images/i7.jpg";
                                }

                                function previousimg8(x) {
                                    x.src = "images/i37.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Naina Set</span> <span class="price "> <br><span class="money" data-currency-usd="$ 69.00">$ 169.00</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>

            </div>
        </div>
        <!-- container-fluid div-->
    </div>
    <div class="rect-items">
        <!-- 4 cards -->
        <div class="text mt-5">
            <h2 class="text-center" style=" color: #bbb572;">RECENTLY VIEWED ITEMS</h2>
            <hr style=" color: #bbb572; margin-bottom: 30px;" class="mt-4">
        </div>
        <!-- container div -->
    </div>
    </div>
    <!-- container-fluid -->

    <div class="container-fluid" style="background:#181510">
        <div class="four-cards ">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div    class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i12.jpg" class="card-img-top " id='img1' onmouseover="changeimg15(this)" onmouseout="previousimg5(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg15(x) {
                                    x.src = "images/i15.jpg";
                                }

                                function previousimg5(x) {
                                    x.src = "images/i12.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Aqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>
                <div    class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i18.jpg" class="card-img-top " id='img1' onmouseover="changeimg16(this)" onmouseout="previousimg6(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg16(x) {
                                    x.src = "images/i4.jpg";
                                }

                                function previousimg6(x) {
                                    x.src = "images/i18.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Asna Earrings - Availabe in 2 Options</span> <span class="price "> <br><span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>
                <div    class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i33.jpg" class="card-img-top " id='img1' onmouseover="changeimg17(this)" onmouseout="previousimg7(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg17(x) {
                                    x.src = "images/i6.jpg";
                                }

                                function previousimg7(x) {
                                    x.src = "images/i33.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Sonam Earrings</span> <span class="price "> <br><span class="money" data-currency-usd="$ 89.00">SOLD OUT</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>
                <div    class="col-md-3 col-6"data-aos="zoom-in">
                    <a href="">
                        <div class="card">
                            <img src="images/i37.jpg" class="card-img-top " id='img1' onmouseover="changeimg18(this)" onmouseout="previousimg8(this)" alt="..." class="img-fluid" height="300px">
                            <script>
                                function changeimg18(x) {
                                    x.src = "images/i7.jpg";
                                }

                                function previousimg8(x) {
                                    x.src = "images/i37.jpg";
                                }
                            </script>
                        </div>
                        <a href="">
                            <div class="card-body"style="background:#181510 ">
                                <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                        <div class="product-details"> <span class="title" itemprop="name">Naina Set</span> <span class="price "> <br><span class="money" data-currency-usd="$ 69.00">$ 169.00</span></span>

                                        </div>
                                    </a></h5>
                            </div>
                </div>

            </div>
        </div>
        <!-- container-fluid div-->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- footer -->
    <div><?php
            include 'partials/footer.php';
            ?></div>

</body>

</html>