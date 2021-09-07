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
    <title>AS Collection-Custom-order</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="icon" type="img/jpg" href="l2.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    .hovercolor:hover{
        background-color:red;

    }
    * {  font-family: 'Playfair Display', serif;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        /* overflow-x: hidden; */
    }

    body {
        text-transform: uppercase;
        /* overflow: hidden; */
        
    }
    .navbar{
        /* overflow-y: hidden; */
    }

    .dropdown-toggle:hover {}

    .dropdown-item {
        color: #b1b1b0;
        background-color: #000000;
        padding-left: 30px;
        padding-right: 70px;
        padding-bottom: 20px;
        overflow-y: hidden;

    }

    .dropdown-item:hover {

        color: #a08c5b;
        background-color: #000000;
        /* overflow-y: hidden; */


    }


    .nav-link {
        color: #a08c5b;
    }

    .nav-link:hover {

        color: #a08c5b;

        /* overflow: hidden; */

    }


    /* .dropdown-currrency {
    width: 100%;
  } */

    .navbar-nav li:hover>ul.dropdown-menu {
        display: block;
        
    }

    .dropdown-submenu {
        position: relative;


    }

    .dropdown-submenu>.dropdown-menu {
        background-color: #000000;
        top: 0;
        margin-top: -5px;
        left: 99%;
        

    }

    .search-box {
        background-color: #000000;
        border-radius: 30px;
        padding: 5px;
        color: #a08c5b;
        outline:none;

    }

    .search-box:hover {
        box-shadow: none;
        background-color: #000000;
        color: #a08c5b;
        outline:none;
    }

    .bottom_border:hover {
        border-bottom: 1px solid #a08c5b;
    }

    /* main style */
    .card-body {
        background-color: #181510;
        text-align: center;
    }

    .card-border {
        border: 7.9px solid #c451a725;
        background-color: #c451a74f;

    }

    .card {
        border-radius: 0px;
        background-color: #c451a700;
    }

    .card-title {
        color: #b1b1b0;
    }

    .title {
        font-size: 19px;
        text-decoration: none;
        color: #b1b1b0;
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;

    }

    .money {
        /* margin: 40px;  */
        color: #a08c5b;
        text-decoration: none;
        text-align: center;
    }

    a {
        text-decoration: none;
        color: #b1b1b0;
    }

    a:hover {
        text-decoration: none;
        color: #a08c5b;
    }

    .opacitywithlogo:hover {
        opacity: 0.3;
        /* background-color: white; */
    }

    .opacitywithlogo {
        
        height: 320px;
    }

    footer ul li {
        margin-top: 15px;
        font-size: 14px;
    }

    footer ul li a {
        text-transform: capitalize;
    }

    .icon-search {
        position: absolute;
        top: 20px;
        left: 1170px;
    }

    .dropdown-currency {
        margin: 0px 0px 0px 0px;
        padding: 0px;
        list-style-type: none;
        font-size: 10.7px;
        margin-top: 5px;

        /* border: 1px solid #b1b1b0; */
    }

    li {
        list-style-type: none;
    }

    .dropdown-menu-currency {


        margin: 0px 0px 0px 0px;
        padding: 0px;
        list-style-type: none;
        font-size: 7.7px;
        /* margin-top:55px; */
        /* border: 1px solid #b1b1b0; */
        /* text-align: right; */
        /* width: 10px;  */

    }

    .dropdown-currency-main {

        width: 10px;
        margin: 0px 0px 0px 0px;
        padding: 0px;
        margin-top: 50px;
        /* font-size:15px; */

    }
    .navbar-toggler-icon{
         /* background-color:#a08c5b; 
        border-radius:4px;
        width:35px;
        height:30px; */
      
        /* background-img:url('hamberg.PNG');
        background-repeat:no-repeat; */
    }
    .dropdown-menu {
        
        /* margin: 0px 0px 0px 0px; */
        /* padding-right: 80px; */
        /* width: 10px; */
    }

    .col-md-1 {
        margin-right: 5px;
    }
   
    .first-div{
        color:white;
    }
    .first-div:hover{
        color:#a08c5b;
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
                <div class="col-md-6">
                    <h3 class="" style="color: #bbb572;">Custom Orders</h3>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="">
                            <li class="nav-item dropdown">
                                <a class=" dropdown-toggle dropdown-currency dropdown-currency-main first-div" style="color: #bbb572;font-size: 13.9px;" href="#" id="navbarDropdown" style="color:#b1b1b0;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    DATE: NEW TO OLD
                                </a>
                                <ul class="dropdown-menu dropdown-menu-currency py-1 " aria-labelledby="navbarDropdown" style="width:5px;background-color:#000000;">
                                    <li><a class="dropdown-item dropdown-currency px-3 py-1" href="#">FEATURE</a></li>
                                    <li><a class="dropdown-item dropdown-currency px-3 py-1" href="#">best selling</a></li>
                                    <li><a class="dropdown-item dropdown-currency px-3 py-1" href="#">Alphabetically: A-Z</a></li>
                                    <li><a class="dropdown-item dropdown-currency px-3 py-1" href="#">Alphabetically: Z-A</a></li>
                                    <li><a class="dropdown-item dropdown-currency px-3 py-1" href="#">Price: Low to High</a></li>
                                    <li><a class="dropdown-item dropdown-currency px-3 py-1" href="#">Price: High to Low</a></li>
                                    <li><a class="dropdown-item dropdown-currency px-3 py-1" href="#">Date: Old to New</a></li>
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
                        <div class="col">
                             <a href="product.php">
                                    
                                <div class="card">
                                    <img src="images/i11.jpg" class="card-img-top " onmouseover="changeimg11(this)" onmouseout="previousimg11(this)" alt="..." class="img-fluid" height="300px">
                                    <script>
                                        function changeimg11(x) {
                                            x.src = "images/i52.jpg";
                                        }

                                        function previousimg11(x) {
                                            x.src = "images/i11.jpg";
                                        }
                                    </script>
                                </div>
                                 <a href="product.php">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        <div class="col">
                             <a href="product.php">
                                    
                                <div class="card">
                                    <img src="images/i52.jpg" class="card-img-top " id='img1' onmouseover="changeimg2(this)" onmouseout="previousimg2(this)" alt="..." class="img-fluid" height="300px">
                                    <script>
                                        function changeimg2(x) {
                                            x.src = "images/i11.jpg";
                                        }

                                        function previousimg2(x) {
                                            x.src = "images/i52.jpg";
                                        }
                                    </script>
                                </div>
                                 <a href="product.php">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">Asna Earrings - Availabe in 2 Options</span> <span class="price "> <br><span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        
                    
                        <div class="col">
                             <a href="product.php">
                                    
                                <div class="card">
                                    <img src="images/i11.jpg" class="card-img-top " onmouseover="changeimg14(this)" onmouseout="previousimg14(this)" alt="..." class="img-fluid" height="300px">
                                    <script>
                                        function changeimg14(x) {
                                            x.src = "images/i52.jpg";
                                        }

                                        function previousimg14(x) {
                                            x.src = "images/i11.jpg";
                                        }
                                    </script>
                                </div>
                                 <a href="product.php">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        <div class="col">
                             <a href="product.php">
                                    
                                <div class="card">
                                    <img src="images/i11.jpg" class="card-img-top " onmouseover="changeimg41(this)" onmouseout="previousimg41(this)" alt="..." class="img-fluid" height="300px">
                                    <script>
                                        function changeimg41(x) {
                                            x.src = "images/i52.jpg";
                                        }

                                        function previousimg41(x) {
                                            x.src = "images/i11.jpg";
                                        }
                                    </script>
                                </div>
                                 <a href="product.php">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        <div class="col">
                             <a href="product.php">
                                    
                                <div class="card">
                                    <img src="images/i52.jpg" class="card-img-top " onmouseover="changeimg51(this)" onmouseout="previousimg51(this)" alt="..." class="img-fluid" height="300px">
                                    <script>
                                        function changeimg51(x) {
                                            x.src = "images/i11.jpg";
                                        }

                                        function previousimg51(x) {
                                            x.src = "images/i52.jpg";
                                        }
                                    </script>
                                </div>
                                 <a href="product.php">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        <div class="col">
                             <a href="product.php">
                                    
                                <div class="card">
                                    <img src="images/i11.jpg" class="card-img-top " onmouseover="changeimg61(this)" onmouseout="previousimg61(this)" alt="..." class="img-fluid" height="300px">
                                    <script>
                                        function changeimg61(x) {
                                            x.src = "images/i52.jpg";
                                        }

                                        function previousimg61(x) {
                                            x.src = "images/i11.jpg";
                                        }
                                    </script>
                                </div>
                                 <a href="product.php">
                                    
                                    <div class="card-body">
                                        <h5 class="card-title"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details"> <span class="title" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="$ 69.00">$ 69.00</span></span>

                                                </div>
                                            </a></h5>
                                    </div>
                        </div>
                        <div class="col">
                             <a href="product.php">
                                    
                                <div class="card">
                                    <img src="images/i11.jpg" class="card-img-top " onmouseover="changeimg71(this)" onmouseout="previousimg71(this)" alt="..." class="img-fluid" height="300px">
                                    <script>
                                        function changeimg71(x) {
                                            x.src = "images/i52.jpg";
                                        }

                                        function previousimg71(x) {
                                            x.src = "images/i11.jpg";
                                        }
                                    </script>
                                </div>
                                 <a href="product.php">
                                    
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