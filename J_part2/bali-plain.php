<?php
        // session_start();
        // $show_name=false;

        // if (!isset($_SESSION["logedin"])) {
        //     // header("Location:login.php");
        // }else if (isset($_SESSION["logedin"])) {
        //     $show_name=true;

        // }?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS Collection-bali-plain</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="icon" type="img/jpg" href="favicon.jpg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="partials/style.css">
</head>

<link rel="stylesheet" href="partials/nav_items_style.css">
 
 <link rel="icon" type="img/jpg" href="favicon.jpg">
</head>
<style>
    div.search-filter .nav-item a {
        font-size: .7rem;
    }

    .card.product_img_card {
        border: 0px solid red;

    }

    .card img.card-img-height {
        height: 250px;
        border-radius: 7px;
        margin-top: 3.2rem;
        -webkit-box-shadow: 2px 2px 12px 1px #000000;

    }

    .card img.card-img-height:hover {
        -webkit-box-shadow: 5px 5px 23px 5px #000000;
    }

    span.title.text-center {
        font-size: .9rem;
    }

    .card-body {
        flex: 0;
        padding: 0;
    }

    @media screen and (max-width: 600px) {
        .card img.card-img-height {
            margin-top: 0;
            height: 190px;
            padding: 2px;
        }

        span.title.text-center {
            margin: 0;
            padding: 0;
            width: 100%;
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
                <div class="col-md-6 col-6">
                    <h3 class="" style="color: #bbb572;">Bali - Plain</h3>
                </div>
                <div class="col-md-6 col-6">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="">
                            <li class="nav-item dropdown">
                                <a class=" dropdown-toggle dropdown-search-filter dropdown-search-filter-main first-div" style="color: #bbb572;" href="#" id="navbarDropdown" style="color:#b1b1b0;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    DATE: NEW TO OLD
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-search-filter py-1 " aria-labelledby="navbarDropdown" style="width:5px;background-color:#000000;">
                                    <li><a class="dropdown-item dropdown-search-filter px-3 py-1" href="#">FEATURE</a></li>
                                    <li><a class="dropdown-item dropdown-search-filter px-3 py-1" href="#">best selling</a></li>
                                    <li><a class="dropdown-item dropdown-search-filter px-3 py-1" href="#">Alphabetically: A-Z</a></li>
                                    <li><a class="dropdown-item dropdown-search-filter px-3 py-1" href="#">Alphabetically: Z-A</a></li>
                                    <li><a class="dropdown-item dropdown-search-filter px-3 py-1" href="#">Price: Low to High</a></li>
                                    <li><a class="dropdown-item dropdown-search-filter px-3 py-1" href="#">Price: High to Low</a></li>
                                    <li><a class="dropdown-item dropdown-search-filter px-3 py-1" href="#">Date: Old to New</a></li>
                                </ul>
                            </li>

                        </div>
                    </div>
                </div>
            </div>

            <hr class="line text-light" style="height: 0.4px;padding-top:1px;">
            <div class="row py-2">

                <div class="three-cards ">
                    <div class="row cols-1 row-cols-md-3 g-3">
                  <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/e1.jpeg' ?>">
                                    
                                <div class="card">
                                    <img src="images/e1.jpeg" class="card-img-top " onmouseover="changeimg11(this)" onmouseout="previousimg11(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/e1.jpeg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i28.jpg' ?>">
                                    
                                <div class="card">
                                    <img src="images/i28.jpg" class="card-img-top " onmouseover="changeimg11(this)" onmouseout="previousimg11(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i28.jpg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        
                      <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/e2.jpeg' ?>">
                                    
                                <div class="card">
                                    <img src="images/e2.jpeg" class="card-img-top " onmouseover="changeimg11(this)" onmouseout="previousimg11(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/e2.jpeg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i47.jpg' ?>">
                                    
                                <div class="card">
                                    <img src="images/i47.jpg" class="card-img-top " id='img1' onmouseover="changeimg2(this)" onmouseout="previousimg2(this)" alt="..." class="img-fluid" height="300px">
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i47.jpg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Asna Earrings - Availabe in 2 Options</span> <span class="price "> <br><span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i22.jpg' ?>">
                                    
                                <div class="card">
                                    <img src="images/i22.jpg" class="card-img-top " onmouseover="changeimg14(this)" onmouseout="previousimg14(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i22.jpg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>

                      <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i19.jpg' ?>">
                                    
                                <div class="card">
                                    <img src="images/i19.jpg" class="card-img-top " onmouseover="changeimg14(this)" onmouseout="previousimg14(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i19.jpg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                    
                      <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i48.jpg' ?>">
                                    
                                <div class="card">
                                    <img src="images/i48.jpg" class="card-img-top " onmouseover="changeimg14(this)" onmouseout="previousimg14(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i48.jpg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-4 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i53.jpg' ?>">
                                    
                                <div class="card">
                                    <img src="images/i53.jpg" class="card-img-top " onmouseover="changeimg41(this)" onmouseout="previousimg41(this)" alt="..." class="img-fluid" height="300px">
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i53.jpg' ?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                       
                       
                    </div>
                </div>
            </div>
             <!--pagination -->
             <div class="my-5"><?php
                                include 'partials/pagination.php';
                                ?></div> 
         </div>
    </div>
    </div>  
    <!-- footer -->
    <div><?php
            include 'partials/footer.php';
            ?></div>
</body>
</html>