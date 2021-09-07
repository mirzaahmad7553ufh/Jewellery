
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS Collection-Team</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="icon" type="img/jpg" href="favicon.jpg">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="" href="partials/style.css">
    <link rel="stylesheet" type="" href="partials/team.css">
  
   
</head>
<style>
    .card{
        margin:0 5px;
    }
    @media screen and (max-width: 600px) {
    .frontside .card .card-body img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }.card-body.text-center.mt-0.pt-4.pb-0 {
    height: 0px;
    overflow-y: hidden;
}.mainflip h4.card-title {
    font-size: 15px;
    text-align: center;
}h4.card-title.card_name {
    font-size: 14.8px;
    text-align: center;
}.col-6.col-sm-6.col-md-4.last_card_team {
            margin: auto;
        }
                
        .container{
            margin:2px 40px;
        }
                }
                @media screen and (max-width: 300px) {
    .frontside .card .card-body img {
        width: 120px;
        height: 130px;
        border-radius: 50%;
    }
                }
</style>

<body style="background-color: #000000">
    <!-- navigation -->
    <!-- navigation -->
    <div><!--  <?php
        // session_start();
        // $show_name = false;

        // if (!isset($_SESSION["logedin"])) {
        //     // header("Location:login.php");
        // } else if (isset($_SESSION["logedin"])) {
        //     $show_name = true;
        // }

        ?>-->


    <?php include "partials/nav.php";?>
    <!-- navbar end -->


    <!-- content -->
    <!-- Team -->
    
    <section id="team" class="pb-5" style="background: #000000;">
        <div class="container" style="background: #181510;">
            <h5 class="section-title h1" style="color:#bbb572"> OUR TEAM</h5>
            <div class="row">
                <!-- Team member -->
                <div class=" col-6 col-sm-6 col-md-4 card_1"data-aos="zoom-in">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card"   >
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="images/ceo_t.jpeg" alt="card image"></p>
                                        <h4 class="card-title  card_name" style="color:#bbb572">CEO </h4>
                                        <p class="card-text" style=" color: white;text-transform:capitalize" >Mr. Junaid Sheikh</p>
                                        <a href="index.php" class="btn btn-sm" style='background:#bbb572'><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                           <div class="backside">
                                <div class="card" style="background:#000000">
                                    <div class="card-body text-center mt-4"style="background:#000000">
                                        <h4 class="card-title" style="color:#bbb572;text-transform:capitalize">CEO’s
                                            Message </h4>
                                        <p class="card-text card_b_text" style=" color: white;">“
                                            We are the finest product producing team. We know the real meaning of gems and
                                            we shall be continually producing your happiness ”</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->

                <!-- chairman -->
                <div class=" col-6 col-sm-6 col-md-4 card_2"data-aos="zoom-in">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="images/chairman_t.jpeg" alt="card image"></p>
                                        <h4 class="card-title card_name" style="color:#bbb572">Chairman</h4>
                                        <p class="card-text" style=" color: white;text-transform:capitalize">Mr. Muhammad Asim</p>
                                        <a href="index.php" class="btn btn-sm" style='background:#bbb572'><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside"style="background:#000000;">
                                <div class="card my-0 py-0"style="background:#000000;">
                                    <div class="card-body text-center mt-0 pt-4 pb-0" style="background:#000000">
                                        <h4 class="card-title" style="color:#bbb572">Chairman’s
                                            Message</h4>
                                        <p class="card-text card_b_text_chairman" style="background:#000000; color: white;
    ">“We are crafting the best quality jewelry products since last 35 years and we believe
                                            we are innovating with continuous improvement.”</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-facebook color: blue"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class=" col-6 col-sm-6 col-md-4"data-aos="zoom-in">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="images/cs.jpeg" alt="card image"></p>
                                        <h4 class="card-title card_name" style="color:#bbb572">Jewelry craft Specialist</h4>
                                        <p class="card-text text-light"style="color:#bbb572;text-transform:capitalize">Mr. Usman Sheikh</p>
                                        <a href="index.php" class="btn btn-sm" style='background:#bbb572'><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                           <div class="backside">
                                <div class="card" style="background:#000000">
                                    <div class="card-body text-center mt-4"style="background:#000000">
                                        <h4 class="card-title " style="color:#bbb572">Jewelry craft Specialist</h4>
                                        <p class="card-text card_b_text"style=" color: white;">We are the finest product producing team. We know the real meaning of gems and
                                            we shall be continually producing your happiness</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- <div class=" col-md-2 col-0"></div> -->
                <!-- Team member -->
                <div class=" col-6 col-sm-6 col-md-4"data-aos="zoom-in">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="images/quality_t.jpeg" alt="card image"></p>
                                        <h4 class="card-title card_name" style="color:#bbb572">Quality Assurance Specialist</h4>
                                        <p class="card-text text-light" style="color:#bbb572;text-transform:capitalize">Ms. Fasih Sheikh</p>
                                        <a href="index.php" class="btn btn-sm" style='background:#bbb572'><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                           <div class="backside">
                                <div class="card" style="background:#000000">
                                    <div class="card-body text-center mt-4"style="background:#000000" style="background:#000000">
                                        <h4 class="card-title" style="color:#bbb572">Quality Assurance Specialist</h4>
                                        <p class="card-text card_b_text"style=" color: white;">We are the finest product producing team. We know the real meaning of gems and
                                            we shall be continually producing your happiness</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
               
                <!-- Team member -->
               
                <div class=" col-6 col-sm-6 col-md-4 last_card_team "data-aos="zoom-in">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card"style=" ">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="images/cs2.jpeg" alt="card image"></p>
                                        <h4 class="card-title card_name" style="color:#bbb572;">Jewelry craft Specialist <i style="visibility: hidden;">......</i></h4>
                                        <p class="card-text text-light"style="color:#bbb572;text-transform:capitalize">Mr. Ubaid ur Rehman</p>
                                        <a href="index.php" class="btn btn-sm" style='background:#bbb572'><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                           <div class="backside">
                                <div class="card" style="background:#000000">
                                    <div class="card-body text-center mt-4"style="background:#000000; min-height: 335px;">
                                        <h4 class="card-title" style="color:#bbb572">Jewelry craft Specialist</h4>
                                        <p class="card-text card_b_text"style=" color: white;">We are the finest product producing team. We know the real meaning of gems and
                                            we shall be continually producing your happiness</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center"  >
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                
                <!-- ./Team member -->

            </div>
        </div>
    </section>
    <!-- Team -->

    <!-- footer -->
    <div><?php
            include 'partials/footer.php';
            ?></div>

</body>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</html>