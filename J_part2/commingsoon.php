<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AS Collection-Coming Soon</title>
  <link rel="icon" type="img/jpg" href="favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Playfair Display', serif;
    }

    .color-grey {
        color: #b1b1b0;
    }

    .color-lightbrown {
        background-color: #a08c5b;
    }

    body {
        text-transform: uppercase;
        /* overflow: hidden; */
     
    }

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
  }

  .nav-link {
    color: #a08c5b;
  }

  .nav-link:hover {
    color: #a08c5b;
  }

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
    /* outline: none; */
  }

  .dropdown-currency {
    margin: 0px 0px 0px 0px;
    padding: 0px;
    list-style-type: none;
    font-size: 10.7px;
    margin-top: 5px;
  }

  li {
    list-style-type: none;
  }

  .dropdown-menu-currency {


    margin: 0px 0px 0px 0px;
    padding: 0px;
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
    color: #a08c5b;
  }

  .heading {
    color: #b1b1b0;
    font-size: 30px;
  }
  label{
         font-size: 13px;
         font-weight: bolder;
    }
</style>

<body style="background-color: #000000">

     <!-- navigation -->
     <?php include "partials/nav.php";


?>
<!-- navbar end -->

   <!-- content -->
   <div class="main  " style="background:#181510; height:100%; margin-left:0px; padding-left:0px; overflow: hidden;">
        
        <div class="container mt-3 py-4 my-5  ">

            <div class="row my-5 mb-5">
                <h1 class="text-center text-light ">Coming Soon</h1>
                <hr class="text-center text-light my-3 mb-5  d-flex justify-content-center" style="margin: auto;
  width: 40%; text-align:center">
            </div>
        </div>


     <!-- footer -->
     <div><?php
include 'partials/footer.php';
?></div>

</body>
</html>