<!DOCTYPE html>
<html lang="en">

<head> 
    
<style>

footer .fa-angle-down:before {
        content: "\f107";
        display: none;
    }
    
    @media screen and (max-width: 600px) {
        
         footer .fa-angle-down:before {
            content: "\f107";
            display: block;
        }}
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
                    <img src="images\logo.png" class=" pb-2 px-3 card-img-top  img-fluid" height="140px " alt="...">
                    <div class="col-sm-5 col-8 col-md-8 pb-2 mt-3 text-center d-flex justify-content-center  " style="width:100%;">
                        <a href="" style="width:100%; text-align: end;">
                            <i class=" pt-3 fab fa-facebook-f  links_color_hover " style="font-size: 20px;"> </i></a>
                        <a href="" style="width:100%;">
                            <i class=" pt-3 fab fa-instagram  links_color_hover" style="font-size: 20px;"></i></a>
                        <a href="" style="width:100%;text-align: start;">
                            <i class=" pt-3 far fa-envelope  links_color_hover" style="font-size: 20px;"></i></a>
                    </div>
                </div>
                <div class="card border-0">
                    <hr style="color: #bbb572;" class="footer_hr">
                    <h6 style="color: #bbb572; display:inline-block" class="text-left" onclick="Collapse_popularCollection()"><span style="visibility: hidden;">......</span>
                        POPULAR COLLECTIONS <i class=" ml-2 fas fa-angle-down"  id="accessories_angle_down"></i></h6> 
                    <ul id="footer_collapse_1" >
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
                <div class="card border-0">
                <hr style="color: #bbb572;" class="footer_hr">
                    <h6 style="color: #bbb572;" class="text-left" onclick="Collapse_gotQuestion()"><span style="visibility: hidden;">......</span> GOT
                        QUESTIONS?  <i class=" ml-2 fas fa-angle-down"  id="accessories_angle_down"></i></h6>
                    <ul id="footer_collapse_2" style="display: block;">
                        <li style="margin-bottom: 1rem;"><a href="about.php">About Us</a></li>
                        <li><a href="commingsoon.php">FAQs</a></li>
                        <li><a href="commingsoon.php">Returns & Exchanges</a></li>
                        <li><a href="commingsoon.php">Shipping</a></li>
                        <li><a href="commingsoon.php">Track Your Order</a></li>
                        <li><a href="policies.php">Privacy Policy</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                    <hr style="color: #bbb572;" class="footer_hr">
                </div>
                <div class="card border-0 text-center">
                    
                    <h6 style="color: #bbb572;" class=" mx-0 px-0"><span style="visibility: hidden;" class="footer_hidden_doots">....</span>GET ON
                        OUR V.I.P. LIST</h6>
                    <ul>
                        <p style=" margin-bottom: 1rem;color: #b1b1b0; font-size: small;">Enter you name and email
                            address below to get FREE SHIPPING on your first order! Also, be the first to know about new
                            arrivals & our sales!
                        </p>
                        <li>
                            <form id="form_footer">
                                <div class="mb-3">

                                    <input type="text"
                                        
                                        class="form-control footer_fname" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="First Name" autocomplete="off">
                                </div>
                                <div class="mb-3">

                                    <input type="email"
                                        style=" padding:10px;font-weight: 520; color:#242424"
                                        class="form-control footer_email" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Email address" autocomplete="off">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="exampleInputPassword1" style="width:220px; padding:10px;font-weight: 520; color:#242424" class="form-label" placeholder="Enter Password">Password</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div> -->

                                <button type="submit" class="btn  text-light" onmouseover="changecolor(this)"
                                    onmouseout="backcolor(this)"
                                    style="border-radius: 50px; width:120px; padding:10px;background-color: #bbb572;font-weight: 520;">Sign
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
                    <h6 style="color:#b1b1b0;font-size:15px; ">© 2021 AS Collection. All Rights Reserved. Powered by <a
                            href="" style="color:#bbb572">HBS</a> </h6>
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
      var b = false;

      function Collapse_popularCollection() {
        var footer_collapse_1 = document.getElementById('footer_collapse_1');
        if (b == false) {
          footer_collapse_1.style.display = "block";
          b = true;
        } else {
          footer_collapse_1.style.display = "none";
          b = false;
        }
      }
      function Collapse_gotQuestion() {
        
      
        var footer_collapse_2 = document.getElementById('footer_collapse_2');
        if (b == false) {
          footer_collapse_2.style.display = "block";
          b = true;
        } else {
          footer_collapse_2.style.display = "none";
          b = false;
        }
      }
      
      
      
      </script>
</html>