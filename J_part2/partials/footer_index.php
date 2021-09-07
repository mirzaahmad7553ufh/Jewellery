<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS Collection</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="partials/style.css">
    <style>
        .change_first_card_dropdown_1 {
            display: none;
        }

        .replace_first_card_dropdown_1 {
            display: block;
        }

        .change_second_card_dropdown_2 {
            display: none;
        }

        .replace_second_card_dropdown_2 {
            display: block;
        }

        /* .footer_drop_icon {
            display: none;
        }

        .footer_drop_icon_click {
            display: block;
        } */

        .change_first_card_dropdown_1 ul.dropdown_header li,
        .change_second_card_dropdown_2 ul.dropdown_header li {
            display: inline-block;
            float: left;
        }

        .change_first_card_dropdown_1 ul.dropdown_header li,
        .change_second_card_dropdown_2 ul.dropdown_header li:nth-child(even) {
            margin-left: 5px;
            font-size: 17px;
            color: #bbb572;
        }

        .GET_ON {
            text-align: center;
        }
        .f_icon{
                font-size: 20px;
            }
            .horizontal_lines_footer{
    display: none;
}
        @media screen and (max-width: 600px) {
            .change_first_card_dropdown_1 {
                display: block;

            }

            .replace_first_card_dropdown_1 {
                display: none;
            }

            .change_second_card_dropdown_2 {
                display: block;
            }

            .replace_second_card_dropdown_2 {
                display: none;
            }

            #footer_drop_icon_click_1,
            #footer_drop_icon_click_2 {
                display: none;
            }

            .change_first_card_dropdown_1 ul.dropdown_header li h6,
            .change_second_card_dropdown_2 ul.dropdown_header li h6,
            .change_second_card_dropdown_2 ul.dropdown_header li i {
                font-size: 13.5px;
            }

            .change_first_card_dropdown_1 ul.dropdown_header li i,
            .change_second_card_dropdown_2 ul.dropdown_header li i {
                font-size: 13.5px;
                 position: relative; 
                 top: -4px;
                left: 5px; 
            }
            .f_icon {
   display:none;
}
.f_img {
    text-align: center;
    width: 197px;
    height: 131px;
    margin: auto;
    margin-right: auto;
    margin-bottom: auto;
    margin-left: auto;
    margin-bottom: 0px;
    padding-bottom: 0px;
}.card.border-0.px-5 {
    margin-bottom: 0;
}.horizontal_lines_footer{
    display: block;
    height: 0.4px;padding-top:1px;
} .card.border-0.change_first_card_dropdown_1 {
    margin: 0;
    padding: 0;
}
.card.border-0.change_second_card_dropdown_2 {
    margin: 0;
    padding: 0;
}hr.line.text-light.horizontal_lines_footer {
    margin: 5px;
}h6.mx-0.px-0.GET_ON_h6 {
    margin-top: 35px;
}

        }
       
    </style>
</head>


<body style="background-color: #000000">

    <!-- footer -->
    <div class="line" style="height: 0.4px;color:#b1b1b0;padding-top:1px;">
    </div>

    <div class="footer " style=" background-color: #242424;">
        <footer class="py-5 container" style=" background-color: #242424; ">
            <div class="card-group " style=" background-color: #242424; ">
                <div class="card border-0 px-5">
                    <img src="images\logo.png" class=" pb-2 px-3 card-img-top f_img img-fluid" height="140px " alt="...">
                    <div class="col-sm-5 col-8 col-md-8 pb-2 mt-3 text-center d-flex justify-content-center  " style="width:100%;">
                        <a href="" style="width:100%; text-align: end;">
                            <i class=" pt-3 fab fa-facebook-f f_icon links_color_hover "> </i></a>
                        <a href="" style="width:100%;">
                            <i class=" pt-3 fab fa-instagram f_icon links_color_hover" ></i></a>
                        <a href="" style="width:100%;text-align: start;">
                            <i class=" pt-3 far fa-envelope f_icon links_color_hover" ></i></a>
                    </div>
                </div>

                <!-- /* -------------------------------------------------------------------------- */
                /*                        CHANGE_FIRST_CARD_DROPDOWN_1                        */
                /* -------------------------------------------------------------------------- */ -->
                <hr class="line text-light horizontal_lines_footer" >
                <div class="card border-0 change_first_card_dropdown_1">
                    <ul class="dropdown_header">
                        <li>
                            <h6 style="color: #bbb572;" class="text-left">
                                POPULAR COLLECTIONS</h6>
                        </li>
                        <li ><i class="fas fa-angle-down footer_drop_icon_1 text-end" onclick="show_drop_down_first_card1()"></i></li>
                    </ul>

                    <ul id="footer_drop_icon_click_1">
                        <div>
                            <br>
                            <li style="margin-bottom: 1rem;"><a href="sets.php">Sets</a></li>
                            <li><a href="bali-plain.php">Earrings</a></li>
                            <li><a href="commingsoon.php">Ready-to-Ship</a></li>
                            <li><a href="commingsoon.php">Men's Collection</a></li>
                            <li><a href="commingsoon.php">Tribal Collection</a></li>
                            <li><a href="commingsoon.php">Diamanté Collection</a></li>
                            <li><a href="commingsoon.php">Sale</a></li>
                            <li><a href="commingsoon.php">Gift Cards</a></li>
                        </div>

                    </ul>
                </div>

                <!-- /* -------------------------------------------------------------------------- */
                /*                        Replace_FIRST_CARD_DROPDOWN_1                        */
                /* -------------------------------------------------------------------------- */ -->
                <div class="card border-0 replace_first_card_dropdown_1">
                    <h6 style="color: #bbb572;" class="text-left"><span style="visibility: hidden;">......</span>
                        POPULAR COLLECTIONS</h6>
                    <ul>
                        <li style="margin-bottom: 1rem;"><a href="sets.php">Sets</a></li>
                        <li><a href="bali-plain.php">Earrings</a></li>
                        <li><a href="commingsoon.php">Ready-to-Ship</a></li>
                        <li><a href="commingsoon.php">Men's Collection</a></li>
                        <li><a href="commingsoon.php">Tribal Collection</a></li>
                        <li><a href="commingsoon.php">Diamanté Collection</a></li>
                        <li><a href="commingsoon.php">Sale</a></li>
                        <li><a href="commingsoon.php">Gift Cards</a></li>

                    </ul>
                </div>

                <script>
                    var flag1 = true;

                    function show_drop_down_first_card1() {

                        var element = document.getElementById("footer_drop_icon_click_1");
                        if (flag1 == true) {
                            element.style.display = "block";
                            flag1 = false;
                        } else {
                            element.style.display = "none";
                            flag1 = true;
                        }
                    }
                    var flag2 = true;

                    function show_drop_down_first_card2() {

                        var element = document.getElementById("footer_drop_icon_click_2");
                        if (flag2 == true) {
                            element.style.display = "block";
                            flag2 = false;
                        } else {
                            element.style.display = "none";
                            flag2 = true;
                        }
                    }
                </script>
                <!-- /* -------------------------------------------------------------------------- */
                                    /*                               CARD 2                                       */
                                    /* -------------------------------------------------------------------------- */ -->

                <!-- /* -------------------------------------------------------------------------- */
                /*                        change_second_card_dropdown_2                        */
                /* -------------------------------------------------------------------------- */ -->
                <hr class="line text-light horizontal_lines_footer" >
                <div class="card border-0 change_second_card_dropdown_2">
                    <ul class="dropdown_header" onclick="show_drop_down_first_card2()">
                        <li>
                            <h6 style="color: #bbb572;" class="text-left"><span style="visibility: hidden;">.</span> GOT
                                QUESTIONS?<span style="visibility: hidden;"></span></h6>
                        </li>
                        <li><i class=" fas fa-angle-down footer_drop_icon_2"></i></li>
                    </ul>
                    < <ul id="footer_drop_icon_click_2">
                        <li style="margin-bottom: 1rem;"><a href="about.php">About Us</a></li>
                        <li><a href="commingsoon.php">FAQs</a></li>
                        <li><a href="commingsoon.php">Returns & Exchanges</a></li>
                        <li><a href="commingsoon.php">Shipping</a></li>
                        <li><a href="commingsoon.php">Track Your Order</a></li>
                        <li><a href="policies.php">Privacy Policy</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        </ul>
                </div>

                <!-- /* -------------------------------------------------------------------------- */
                /*                       replace_second_card_dropdown_2                        */
                /* -------------------------------------------------------------------------- */ -->
                <div class="card border-0 replace_second_card_dropdown_2">
                    <h6 style="color: #bbb572;" class="text-left"><span style="visibility: hidden;">......</span> GOT
                        QUESTIONS?</h6>
                    <ul>
                        <li style="margin-bottom: 1rem;"><a href="about.php">About Us</a></li>
                        <li><a href="commingsoon.php">FAQs</a></li>
                        <li><a href="commingsoon.php">Returns & Exchanges</a></li>
                        <li><a href="commingsoon.php">Shipping</a></li>
                        <li><a href="commingsoon.php">Track Your Order</a></li>
                        <li><a href="policies.php">Privacy Policy</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <hr class="line text-light horizontal_lines_footer" >


                <!-- /* -------------------------------------------------------------------------- */
                    /*                               CARD 3                                       */
                    /* -------------------------------------------------------------------------- */ -->

                <div class="card border-0 GET_ON">
                    <h6 style="color: #bbb572;" class=" mx-0 px-0 GET_ON_h6"><span style="visibility: hidden;">......</span>GET ON
                        OUR V.I.P. LIST</h6>
                    <ul>
                        <p style=" margin-bottom: 1rem;color: #b1b1b0; font-size: small;">Enter you name and email
                            address below to get FREE SHIPPING on your first order! Also, be the first to know about new
                            arrivals & our sales!
                        </p>
                        <li>
                            <form>
                                <div class="mb-3">

                                    <input type="email" style=" height:40px; padding:10px;font-weight: 520; color:#242424" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" autocomplete="off">
                                </div>
                                <div class="mb-3">

                                    <input type="email" style=" padding:10px;font-weight: 520; color:#242424" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address" autocomplete="off">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="exampleInputPassword1" style="width:220px; padding:10px;font-weight: 520; color:#242424" class="form-label" placeholder="Enter Password">Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div> -->

                                <button type="submit" class="btn  text-light" onmouseover="changecolor(this)" onmouseout="backcolor(this)" style="border-radius: 50px; width:120px; padding:10px;background-color: #bbb572;font-weight: 520;">Sign
                                    up</button>
                                <script>
                                    function changecolor(x) {
                                        x.style.backgroundColor = "rgba(201, 201, 50, 0.713)";

                                    }

                                    function backcolor(x) {
                                        x.style.backgroundColor = "#bbb572";

                                    }
                                </script>
                            </form>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="row container mt-5 ">
                <hr class="line text-light" style="height: 0.4px;padding-top:1px;">
                <div class="col-md-6 col-12 pt-2" style="color:#b1b1b0;font-size:14px;">
                    <h6 style="color:#b1b1b0;font-size:15px; ">© 2021 AS Collection. All Rights Reserved. Powered by <a href="">HBS</a> </h6>
                </div>
                <div class="col-md-6 col-12 " style="color:#b1b1b0;font-size:14px;">
                    <div class="row">


                        <!-- <div class="col-md-1 col-2 mt-2  " style="border-radius: 60px;"><img src="images/c1.jpg" class=" img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1 col-2  mt-2 mx-2 " style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1 col-2 mt-2 " style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1 col-2 mt-2  mx-2" style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1 col-2  mt-2" style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1 col-2 mt-2 mx-2" style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1 col-2 mt-2" style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1  col-2 mt-2 mx-2" style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div>
                        <div class="col-md-1 col-2 mt-2" style="border-radius: 60px;"><img src="images/c1.jpg" class="img-fluid img-responsive" height="30px" width="" alt=""></div> -->
                        <!-- <div class="col-md-1 col-2 mt-2" style="border-radius: 60px;"><img src="images/c1.jpg" class="img-responsive" height="30px" width=""alt=""></div> -->
                        <!-- <div class="col-md-1 " style="border-radius: 60px;"><img src="images/c1.jpg" class="img-responsive" height="30px" width=""alt=""></div> -->
                        <!-- <div class="col-md-1 " style="border-radius: 60px;"><img src="images/c1.jpg" class="img-responsive" height="30px" width=""alt=""></div> -->
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script>

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>