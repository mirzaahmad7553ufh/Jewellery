<<?php
    // session_start();
    // $show_name = false;

    // if (!isset($_SESSION["logedin"])) {
    //     // header("Location:login.php");
    // } else if (isset($_SESSION["logedin"])) {
    //     $show_name = true;
    // }
    if (isset($_GET['src'])) {
        $src = $_GET['src'];
    }
    ?>!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AS Collection-Checkout</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link  type="stylesheet" href="css/style.css"> -->
        <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <link rel="icon" type="img/jpg" href="favicon.jpg">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    </head>
    <style>
        .increment-btn .left {
            border-bottom-left-radius: 20px;
            border-top-left-radius: 20px;
        }

        .increment-btn .right {
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
        }

        .increment-btn a {
            outline: none;
            outline-color: white;
        }

        @media screen and (max-width: 600px) {
            #activeimg {
                margin-left: 20px;
                padding: 0px;
                width: 320px;
                height: 400px;
            }

            .thumbnil-img {

                margin-top: 30px;
            }


        }

        * {
            font-family: 'Playfair Display', serif;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            /* overflow-x: hidden; */
        }

        body {
            text-transform: uppercase;
            /* overflow: hidden; */

        }

        .navbar {
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
            outline: none;

        }

        .search-box:hover {
            box-shadow: none;
            background-color: #000000;
            color: #a08c5b;
            outline: none;
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

        .navbar-toggler-icon {
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

        
        .first-div {
            color: white;
        }

        .first-div:hover {
            color: #a08c5b;
        }
       .row .col-md-4 #cart_display_img{
            border:0px solid red;
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
            <div class="container mt-3 py-4 cart_checkout ">

                <div class="row ">
                    <div class="col-md-12 ">
                        <h2 class="text-left" style="color: #bbb572;text-align: left;">SHOPPING CART</h2>
                    </div>
                    <div class="col-md-12 ">
                        <div class="d-flex flex-row-reverse bd-highlight ">
                            <!-- <div class="" style="color:#a08c5b;font-size:small"> <a href="" style="color:#a08c5b;font-size:small"> <i class="fas fa-angle-left"></i> Previouse</a> |<a href="" style="color:#a08c5b;font-size:small"> Next <i class="fas fa-angle-right"></i></a></div> -->
                        </div>
                    </div>
                </div>
                <hr class="line text-light" style="height: 0.4px;padding-top:1px;">

                <div class="row  ">
                    <div class="col-md-8 col-lg-8  col-sm-8 pb-5">
                        <div class="row">
                            <div class="col-md-6 col-lg-4  col-sm-6 ">
                                <div id="cart_display_img" class="card   px-0 py-0 d-flex justify-content-center" style="width: 15rem;background-color:#181510; border:0px;">
                                    <?php if (isset($_GET['src'])) { ?>
                                        <img src="<?php echo $src ?>" class="card-img-top img-fluid img-responsive  " style="height: 250px; width:200px" alt="...">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-3">
                                <div class="card px-0 py-0 d-flex justify-content-center" style="width: 25rem;background-color:#181510;border:0px;">
                                    <h2 class="mt-0" style="color:#b1b1b0;">HYZA EARRINGS</h2>
                                    <h5 class="mt-2" style="color:#b1b1b0;">$ 289.00</h5>
                                    <div class="mt-3"><?php include "incrementbtn.php" ?></div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 col-lg-4 col-sm-12  pt-0 sub_total_cart_checkout ">
                        <h3 class="pt-2" style="color:#bbb572">Subtotal</h3>
                        <hr style=" color: #bbb572; margin-bottom: 30px;" class="mt-4">
                        <div class="pricee py-0 my-0"  style="color:#bbb572">$ <span id="sub_price">289</span>.00</div>

                        <script>
var c_val=document.getElementById('c_val').innerHTML; 
var set_val=document.getElementById('c_val');

var original_price=document.getElementById('sub_price').innerHTML;
var get_price=document.getElementById('sub_price').innerHTML;
// document.getElementById('sub_price').innerHTML="55";
var set_price=document.getElementById('sub_price');
function Decrement(){
 
  if(c_val>=1 && c_val<=20){
    c_val--;
      set_val.innerHTML=c_val;
  get_price=c_val*original_price;
  set_price.innerHTML=get_price;}
  
}
function Increment(){  
    if(c_val==0 || c_val==21){
        c_val=1;
    }
  if(c_val>=1 && c_val<=20){
  c_val++;
  set_val.innerHTML=c_val;
  get_price=c_val*original_price;
  set_price.innerHTML=get_price; }
}
</script>

                        <p class="" style="color:#b1b1b0;text-transform: uppercase
                    ; ">Orders will be processed in USD.<br><br>
                            ** Please Note **- Only one discount code is allowed per order. Discount codes cannot be
                            combined in one single purchase.<br><br>
                            * To Arrange Signature Verification Upon Delivery *Proceed in placing your order and then email
                            our customer support team at
                            support@alacouture.com with your order number. Additional charges will apply.<br><br>
                            * To view our Return/Exchange policy, please click here.<br><br>
                            Made by order. Kindly allow 4-6 weeks for the delivery of this item. For custom or urgent
                            requests, please contact support@alacouture.com.
                        </p>

                        <div class="checkout btn  px-4 p-2" onmouseover="changecolor(this)" onmouseout="backcolor(this)" style="border-radius:50px;width:100%;color:#000000; background:#bbb572"><i class="fas fa-lock px-2"></i> CheckOut</div>
                        <script>
                            function changecolor(x) {
                                x.style.backgroundColor = "#bbb572";
                            }

                            function backcolor(x) {
                                x.style.backgroundColor = " #bbb572";
                            }
                        </script>
                        <div class="row">
                            <div class="payment my-4 py-0">
                                <script src="https://apps.elfsight.com/p/platform.js"></script>
                                <div class="elfsight-app-74fc2620-4cac-439c-bf53-779de550a6e3 w-100"></div>
                            </div>
                        </div>
                    </div>
                <?php } else {
                                        echo '<h4 style="color:#bbb572;">Your Cart is empty!</h4>';
                                    } ?>
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