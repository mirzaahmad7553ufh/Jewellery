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
    <title>AS Collection-contact us</title>
    <link rel="icon" type="img/jpg" href="favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="partials/style.css">
</head>
<style>
   
</style>

<body style="background-color: #000000">
    <!-- navigation -->
    <div><?php
            include 'partials/nav.php';
            ?></div>

    <!-- navbar end -->

    <div class="main  " style="background-color: #181510; height:100%; margin-left:0px; padding-left:0px;    overflow-y: hidden;">
        <div class="container  py-4">

            <h3 class="color-grey">Contact us</h3>
            <hr class="line text-light" style="height: 0.4px;padding-top:1px;">
            <div class="row mt-5">
                <div class=" col-lg-3 col-md-2 col-sm-3"></div>
                <div class=" col-lg-6 col-md-8 col-sm-2 ">
                    <h3 class=" text-center" style="color:#9c8661">How can we help you?</h3>
                    <form class=" mt-5 contact_container">
                        <div class="mb-3 ">
                            <label for="firstname" class="form-label  color-grey ">Name</label><input type="First Name" style="font-size: small;    font-style: italic;" placeholder="your name" class="form-control  d-flex justify-content-center" id="firstname" aria-describedby="firstname">
                        </div>

                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label  color-grey ">Email</label><input type="email" style="font-size: small;font-style: italic;" placeholder="your email" class="form-control  d-flex justify-content-center" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <label for="subject" class="form-label  color-grey">Subject</label>

                            </div>
                            <input type="text" style=" font-style: italic; font-size: small;" placeholder="Subject" class="form-control " id="subject">
                            <div class=" ">
                                <label for="subject" class=" mt-3 form-label  color-grey">Message</label>
                            </div>

                            <textarea rows="4" cols="" class="form-control " style=" font-style: italic; font-size: small;" placeholder="your message"></textarea>

                            <div class="row">
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" onmouseout="backcolor(this)" onmouseover="changecolor(this)" class="btn text-light mt-3 py-2  px-5" style="border-radius: 50px; background-color: #9c8661">SEND</button>
                                </div>
                                <script>
                                    function changecolor(x) {
                                        x.style.backgroundColor = "rgba(201, 201, 50, 0.713)";

                                    }

                                    function backcolor(x) {
                                        x.style.backgroundColor = "#a08c5b";

                                    }
                                </script>

                            </div>

                    </form>
                </div>
                <!-- <div class="col-md-3"></div> -->
            </div>
            <div class="row mt-5" >
                <div class="contact-details my-4 text-center " style="color:#a08c5b;font-size:30px; font-weight:bolder">contact-details</div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14480.794531636084!2d67.02140002219033!3d24.857064617843992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1625667716319!5m2!1sen!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                <div class="col-lg-6 col-md-12 text-center px-2 pt-2 " style="color:#a08c5b;font-size:20px;">
                    <div class="address pt-5 px-5">“Bliss Shopping Center Shop No.24 Zaibun Nisa Street Saddar Karachi</div>
                    <div class="phone pt-3 px-5">0343-2137516</div>
                    <div class="email pt-3 px-5" style="text-transform: none;">Sheikh.junaid@Hotmail.com</div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <!-- footer -->
    <div><?php
            include 'partials/footer.php';
            ?></div>