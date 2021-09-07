<?php
        // session_start();
        // $show_name=false;

        // if (!isset($_SESSION["logedin"])) {
        //     // header("Location:login.php");
        // }else if (isset($_SESSION["logedin"])) {
        //     $show_name=true;

         ?>
        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>AS Collection-Sets</title>
    <link rel="stylesheet" href="partials/nav_items_style.css">
 
    <link rel="icon" type="img/jpg" href="favicon.jpg">
</head>
<style>
   div.search-filter .nav-item a {
    font-size: .7rem;
}
.card img.card-img-height{
    height:250px;
    border-radius: 5px;
    margin-top: 5.2rem;
    -webkit-box-shadow: 2px 2px 12px 1px #000000; 
   
}
.card img.card-img-height:hover{
    -webkit-box-shadow: 5px 5px 23px 5px #000000; 
}
span.title.text-center {
    font-size: .9rem;
}
.card-body {
    flex:0; 
   padding: 0;
}
@media screen and (max-width: 600px) {
    .card img.card-img-height {
            height:190px;
            padding:2px;
}
span.title.text-center {
  margin:0;
  padding:0;
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
                    <h3 class="" style="color: #bbb572;">Necklace Sets</h3>
                </div>
                <div class="col-md-6 col-6">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="search-filter">
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
                         
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/s1.jpeg'?>">
                                    
                                <div class="card">
                                    <img src="images/s1.jpeg" class="card-img-top card-img-height "     alt="..." class="img-fluid">
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/s1.jpeg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center " itemprop="name">Chokar earings in silver with real Naurattan stones</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                        
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/s2.jpeg'?>">
                                    
                                <div class="card">
                                    <img src="images/s2.jpeg" class="card-img-top img-fluid card-img-height" >
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/s2.jpeg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" style=" text-decoration: none;" itemprop="name">Chokar earings in silver with real Naurattan stones</span> <span class="price "><br> <span class="money" style=" text-decoration: none; border-bottom-color: #181510;" data-currency-usd="42000 Rs">42000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                        
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/s3.jpeg'?>">
                                    
                                <div class="card">
                                    <img src="images/s3.jpeg" class="card-img-top img-fluid card-img-height">
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/s3.jpeg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">Chokar earings in silver with real Naurattan stones</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">54000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                     
                        
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i21.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i21.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i21.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                        
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i25.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i25.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i25.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                     
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i5.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i5.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i5.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                




                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i15.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i15.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i15.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                        
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i42.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i42.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i42.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                     
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i12.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i12.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i12.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>










                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i34.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i34.jpg" class="card-img-top card-img-height img-fluid" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i34.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>  



                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i35.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i35.jpg" id='img1' class="card-img-top  img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i35.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">Asna Earrings - Availabe in 2 Options</span> <span class="price "> <br><span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i36.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i36.jpg" class="card-img-top  img-fluid card-img-height" >
                                    
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i36.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i39.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i37.jpg" class="card-img-top img-fluid card-img-height" >
                                  
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i37.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i33.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i33.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i33.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
                        </div>
                      <div class="col-md-3 px-2 col-6 " data-aos="zoom-in">
                             <a href="product.php?src=<?php echo 'images/i59.jpg'?>">
                                    
                                <div class="card">
                                    <img src="images/i59.jpg" class="card-img-top img-fluid card-img-height" >
                                   
                                </div>
                                 <a href="product.php?src=<?php echo 'images/i59.jpg'?>">
                                    
                                    <h5 class="card-title text-center"><a class="product-info__caption " href="/collections/best-sellers/products/aqsa-set-nauratan" itemprop="url">
                                                <div class="product-details">   <span class="title text-center" itemprop="name">jenfj SetAqsa Set - Nauratan</span> <span class="price "><br> <span class="money" data-currency-usd="45000 Rs">45000 Rs</span></span>

                                                </div>
                                            </a></h5>
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