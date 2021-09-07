<?php
        // session_start();
        // $show_name=false;

        // if (!isset($_SESSION["logedin"])) {
        //     // header("Location:login.php");
        // }else if (isset($_SESSION["logedin"])) {
        //     $show_name=true;

        ?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS Collection-bands</title>

     <link rel="stylesheet" href="partials/nav_items_style.css">
 
    <link rel="icon" type="img/jpg" href="favicon.jpg">
</head>
<style>
   

    
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
                <div class="col-md-6 col-6 ">
                    <h3 class="" style="color: #bbb572;">Bands</h3>
                </div>
                <div class="col-md-6 col-6 ">
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
                      <div class="col-md-4 col-lg-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/b1.jpeg'?>">
                                    
                                <div class="card">
                                    <img src="images/b1.jpeg" class="card-img-top " onmouseover="changeimg11(this)" onmouseout="previousimg11(this)" alt="..." class="img-fluid" height="300px">
                                     
                                </div>
                                 <a href="product.php?src=<?php echo 'images/b1.jpeg'?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Tennis bracelet in silver with zircon</span> <span class="price "><br> <span class="money" data-currency-usd="8000 RS">8000 RS</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i63.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i63.jpg" class="card-img-top " id='img1' onmouseover="changeimg2(this)" onmouseout="previousimg2(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i63.jpg'?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Tennis bracelet in silver with zircon</span> <span class="price "> <br><span class="money" data-currency-usd="8000 RS">8000 RS</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        
                    
                      <div class="col-md-4 col-lg-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i27.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i27.jpg" class="card-img-top " onmouseover="changeimg14(this)" onmouseout="previousimg14(this)" alt="..." class="img-fluid" height="300px">
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i27.jpg'?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Tennis bracelet in silver with zircon</span> <span class="price "><br> <span class="money" data-currency-usd="8000 RS">8000 RS</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i69.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i69.jpg" class="card-img-top " onmouseover="changeimg41(this)" onmouseout="previousimg41(this)" alt="..." class="img-fluid" height="300px">
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i69.jpg'?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Tennis bracelet in silver with zircon</span> <span class="price "><br> <span class="money" data-currency-usd="8000 RS">8000 RS</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i62.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i62.jpg" class="card-img-top " onmouseover="changeimg51(this)" onmouseout="previousimg51(this)" alt="..." class="img-fluid" height="300px">
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i62.jpg'?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Tennis bracelet in silver with zircon</span> <span class="price "><br> <span class="money" data-currency-usd="8000 RS">8000 RS</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i67.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i67.jpg" class="card-img-top " onmouseover="changeimg61(this)" onmouseout="previousimg61(this)" alt="..." class="img-fluid" height="300px">
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i67.jpg'?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Tennis bracelet in silver with zircon</span> <span class="price "><br> <span class="money" data-currency-usd="8000 RS">8000 RS</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                      <div class="col-md-4 col-lg-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i69.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i69.jpg" class="card-img-top " onmouseover="changeimg71(this)" onmouseout="previousimg71(this)" alt="..." class="img-fluid" height="300px">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i69.jpg'?>">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Tennis bracelet in silver with zircon</span> <span class="price "><br> <span class="money" data-currency-usd="8000 RS">8000 RS</span></span>

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