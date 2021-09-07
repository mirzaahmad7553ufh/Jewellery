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


  <?php include "partials/u_links.php" ?>
 
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="partials/style.css">
  <style>
    .row {
      --bs-gutter-x: 0rem !important;
    }
    a.nav-link.active.bottom_border {
        border-bottom: 1px solid #bbb572;
    }

    @media screen and (max-width: 1024px) {
      .currency_this_margin {
        margin-right: 40px;
      }

      .cart_this_margin {
        margin-right: 20px;
      }
    }

    @media screen and (max-width: 768px) {
      .currency_this_margin {
        margin-right: 30px;
      }

      .cart_this_margin {
        margin-right: 20px;
      }
    }

    @media screen and (max-width: 676px) {
      .cart_this_margin {
        margin-right: 0px;
      }
    }

    @media screen and (max-width: 600px) {
      li ul.dropdown-menu.dropdown-menu-currency {
        min-width: 70px;
      }

      a.dropdown-item.dropdown-toggle {
        padding-bottom: 5px;
      }
     
    }

    @media screen and (max-width: 360px) {
      .currency_this_margin {
        margin-right: 5px;
      }

      .cart_this_margin {
        margin-right: 0px;
      }
    }

    @media screen and (max-width: 375px) {
      .currency_this_margin {
        margin-right: 10px;
      }

      .cart_this_margin {
        margin-right: 0px;
      }
    }
  </style>
</head>

<body style="background-color: #000000">
  <div class="navigationbar  row no-gutters no-gutters ">
    <?php
    // if ($show_name == true) {
    //             echo ' <div class="row no-gutters  header " style="background-color: black;">
    //             <!-- social i-cons -->
    //             <div class="col-md-7 col-3 col-lg-7 col-sm-3 pt-1 mx-3 d-flex justify-content-left">
    //                 <a href="">
    //                     <i class="mx-2 pt-3 fab fa-facebook-f  header s-icons"></i></a>
    //                 <a href="">
    //                     <i class="mx-1 pt-3 fab fa-instagram  header s-icons"></i></a>
    //                 <a href="">
    //                     <i class=" mx-2 pt-3 far fa-envelope  header s-icons"></i></a>
    //             </div>

    //             <!-- currency dropdown -->
    //             <div class="col-md-1 col-1  col-lg-1 col-sm-1  d-flex justify-content-end"></div>
    //             <div class="col-md-1 col-2  mx-0 col-sm-2 px-0 d-flex justify-content-end ">
    //                 <div class="mt-0 pt-3 ">
    //                     <li class="nav-item dropdown mt-0 pt-0 dropdown-div">
    //                         <a class=" dropdown-toggle dropdown-currency dropdown-currency-main header " style="background-color:#000000;text-decoration: none;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    //                             usd
    //                         </a>
    //                         <ul class="dropdown-menu dropdown-menu-currency" aria-labelledby="navbarDropdown" style="background-color:#000000;text-decoration: none;">
    //                             <li><a class="dropdown-item dropdown-currency  " href="#">usd</a></li>
    //                             <li><a class="dropdown-item dropdown-currency" href="#">cad</a></li>
    //                             <li><a class="dropdown-item dropdown-currency" href="#">aud</a></li>
    //                             <li><a class="dropdown-item dropdown-currency" href="#">gbp</a></li>
    //                             <li><a class="dropdown-item dropdown-currency" href="#">eur</a></li>
    //                             <li><a class="dropdown-item dropdown-currency" href="#">jpy</a></li>
    //                             <li><a class="dropdown-item dropdown-currency" href="#">inr</a></li>
    //                         </ul>
    //                     </li>

    //                 </div>
    //             </div>
    //             <div class="col-md-1 col-3 col-lg-1  col-sm-3 mx-0 px-0 d-flex justify-content-end pt-3  ">
    //                 <div class="login text-light  d-flex justify-content-end login-div">
    //                     <a href="login.php" class="login-div">
    //                         <i class="far fa-user mt-1  header d-flex justify-content-center mx-2"></i></a>
    //                     <a href="logout.php">
    //                         <span class="header d-flex justify-content-end   ">';

    //             echo $_SESSION['u_fname'];
    //             echo '     
    //                         </span></a>
    //                 </div>
    //             </div>

    //             <div class="col-md-1 col-1 col-lg-1  col-sm-1 mx-0 px-0 pt-3  d-flex cart_div justify-content-end">
    //                 <a href="cart.php" class="cart-btn class="login-div data-toggle="tooltip" data-placement="bottom" title="Cart" style="display: inline; ">
    //                     <div class="" style="display: inline;"> <i class="fas text-light fa-shopping-cart"></i>
    //                         <span class="text-light"><span style="visibility: hidden;"></span>0</span>
    //                     </div>
    //                 </a>

    //             </div>

    //         </div>
    // ';
    // } else {

    // Social icons

    echo ' <div class="row no-gutters  header " style="background-color: black;">
    <!-- social i-cons -->
    <div class="col-md-6 col-3 col-lg-7 col-sm-3  mx-3 d-flex justify-content-left ">
        <a href="">
            <i class="mx-2   fab fa-facebook-f  header s-icons " id="color_hover"></i></a>
        <a href="">
            <i class="mx-1   fab fa-instagram  header s-icons " id="color_hover"></i></a>
        <a href="">
            <i class=" mx-2   far fa-envelope  header s-icons " id="color_hover"></i></a>
    </div>
    <!-- currency dropdown -->
    <div class="col-lg-1 col-1 col-md-0 col-lg-1 col-sm-1  d-flex justify-content-end"></div>
    <div id="" class="col-lg-1 col-2 col-md-2 currency_this_margin col-sm-2 px-0 d-flex justify-content-end ">
        <div class="  gl-3">
            <li class="nav-item dropdown mt-0 pt-0 dropdown-div">
                <a class=" dropdown-toggle dropdown-currency dropdown-currency-main header " onclick="Collapse_Currency()" style="background-color:#000000;text-decoration: none;" href="#" id="navbarDropdown" role="button"  aria-expanded="false">
                    usd <i class="fas ml-1  fa-angle-down"></i><i class="fas  fa-angle-right " style="display:none"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-currency"  id="dropdown-collapse_currency" aria-labelledby="navbarDropdown" style="background-color:#000000;text-decoration: none;">
                    <li><a class="dropdown-item dropdown-currency  " href="#">usd</a></li>
                    <li><a class="dropdown-item dropdown-currency" href="#">cad</a></li>
                    <li><a class="dropdown-item dropdown-currency" href="#">aud</a></li>
                    <li><a class="dropdown-item dropdown-currency" href="#">gbp</a></li>
                    <li><a class="dropdown-item dropdown-currency" href="#">eur</a></li>
                    <li><a class="dropdown-item dropdown-currency" href="#">jpy</a></li>
                    <li><a class="dropdown-item dropdown-currency" href="#">inr</a></li>
                </ul>
            </li>
        </div>
    </div>
    <div class="col-md-1 col-lg-1  col-3 col-lg-1  col-sm-3 mx-0 px-0 d-flex justify-content-end    "   >
        <div class="login   d-flex justify-content-end ">
            <a href="login.php" class="" style="text-decoration:none; ">
                <i class="far  fa-user pt-1 header d-flex justify-content-end "></i></a>
            <a href="login.php" style="text-decoration:none; ">
                <span class="header d-flex justify-content-end mx-2">';
    echo 'Login';
    echo '     
                </span></a>
        </div>
    </div>
    <div class="col-md-1 col-1 col-lg-1  col-sm-1 mx-0 px-1   d-flex  justify-content-end" style="   display:inline;"> ';
    echo '<a href="cart.php" class="cart_this_margin" style="display: inline;text-decoration:none; ">
            <i class="fas  fa-shopping-cart" style="color:#bbb572;text-decoration:none; "></i>
            <span class="cart-counter" style="color:#bbb572;text-decoration:none; text-align:center;">0</span>
        </a>

    </div>
   
</div>
';
    // }
    ?>
    <?php
    // <div class="first" style="background-color:#000000">
    // second-div
    echo '
    <div class="second_nav " style="background-color:#000000; --bs-gutter-x: 0rem;">
    <div class="logo text-center  p-1" style="width:100%; --bs-gutter-x: 0rem;"> <a href="index.php"><img src="images\logo.png" image" alt="logo not working" height="130px;"></a> </div>
    </div>';
    // navbar start
    echo '<nav class="navbar navbar-expand-lg gx-2 text-center  " id="nav" >
  
      <div class="container-fluid " >   
      
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" onclick="Collapse_Menu()" data-bs-target="#navbarSupportedContent" style="font-family: Playfair Display, serif" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-light w-3" ><span style>&nbsp;Menu</span></i>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active bottom_border "style="color:#bbb572;"  aria-current="page" nav-link href="index.php">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle "  id="navbarDropdown" role="button" style="color:#bbb572;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Type of jewellery <i class="ml-1 fas fa-angle-down" onclick="Collapse_Type_OF_Jewellery()"></i> 
              </a>
              <ul class="dropdown-menu" id="collapse_type_of_jewellery_id " aria-labelledby="navbarDropdown" style="background-color:black;">
                <li class="dropdown-submenu bg_black">
                  <a class="dropdown-item dropdown-toggle" onclick="accessories_icon_change()" style="color: #bbb572; " >ACCESSORIES  <i class=" ml-1 fas fa-angle-down" onclick="Collapse_Accessories()" id="accessories_angle_down "></i><i class="fas fa-angle-right " onclick="accessories_icon_back()" id="accessories_angle_right " style="display:none"></i></a>
                  <ul class="dropdown-menu " id="dropdown-collapse_accessories">
                    <li><a class="dropdown-item" href="commingsoon.php">
                    Nose pin</a></li>
                    <li><a class="dropdown-item" href="tops.php">
                    Tops</a></li>
                    <li><a class="dropdown-item" href="chains.php">
                    Chains</a></li>
                    <li><a class="dropdown-item" href="anklets.php">
                        ANKLETS</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="sets.php">Necklace SETS</a></li>
                <li><a class="dropdown-item" href="rings.php">RINGS</a></li>
                <li><a class="dropdown-item" href="bali-plain.php">Bali Plain</a></li>
                
                <li><a class="dropdown-item" href="bands.php">Bands</a></li>
               
                <li><a class="dropdown-item" href="locket-tops.php">Locket tops</a></li>
                <li><a class="dropdown-item" href="haars.php">Haars</a></li>
                <li><a class="dropdown-item" href="teekah.php">Jhumar Teekah</a></li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a class="nav-link bottom_border" style="color:#b1b1b0;" href="commingsoon.php">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link bottom_border" style=" color: #b1b1b0;" href="team.php">team</a>
          </li>
            <li class="nav-item">
              <a class="nav-link bottom_border" style="color:#b1b1b0;" href="commingsoon.php">CUSTOM ORDERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bottom_border" style=" color: #b1b1b0;" href="about.php">About us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link bottom_border" style=" color: #b1b1b0;" href="commingsoon.php">old jewellery repair shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bottom_border" style=" color: white;" href="commingsoon.php">online orders</a>
            </li>
            
            <div class="search-container">
            <form action="/action_page.php"   >
              <input type="text" placeholder="Search.." name="search" style=" background-color: #000000;
              border-radius: 30px;
              padding: 5px;
              color: #bbb572;
              outline: none;">

              <button type="submit" style="background-color: #000000;
              border-radius: 50px;
              padding: 2px;
              color: #bbb572;
              outline: none;" ><i class="fa fa-search" "></i></button>
              <script>
     function t(x){
        x.style.color="#bbb572";
            x.style.backgroundColor="#000000";
        }
        function t(){
            document.getElementById("search").style.Color="#bbb572";
            document.getElementById("search").style.backgroundColor="#000000";
           }
        function tt(x){
            x.style.color="#bbb572";
         x.style.border="0px solid black";
         x.style.backgroundColor="#000000";
         x.style.border="1px solid white";
        }
         </script>
            </form>
          </div>
                 </ul>
                </div>
            </div>
     </nav> </div>
     
     ';

    ?>
    <div class=""><?php
                  include 'chat_box.php';
                  ?></div>
    <script>
      var b = false;

      function Collapse_Menu() {
        var menu_collpse = document.getElementById('navbarSupportedContent');
        if (b == false) {
          menu_collpse.style.display = "block";
          b = true;
        } else {
          menu_collpse.style.display = "none";
          b = false;
        }
      }
      // function Collapse_Type_OF_Jewellery {
      //   var type_of_jewellery_collpse = document.getElementById('collapse_type_of_jewellery_id');
      //   if (b == false) {
      //     type_of_jewellery_collpse.style.display = "block";
      //     b = true;
      //   } else {
      //     type_of_jewellery_collpse.style.display = "none";
      //     b = false;
      //   }
      // } 
      function Collapse_Accessories() {
        var accessories_collpse = document.getElementById('dropdown-collapse_accessories');
        if (b == false) {
          accessories_collpse.style.display = "block";
          b = true;
        } else {
          accessories_collpse.style.display = "none";
          b = false;
        }
      } 

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
    <!-- navbar end -->
</body>

   <!-- Animation -->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init( {offset: 80, 
  delay: 0,
  duration: 500});
  </script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>