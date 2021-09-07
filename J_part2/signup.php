<?php
// include "partials/db_con.php";
// $show=false;
// $error="Nothing";
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     // if(isset($_Post['submitt'])){
//     $fname  =$_POST["fname"];
//     $lname  =$_POST["lname"];
//     $email  =$_POST["email"];
//     $password =$_POST["password"];
//     $s_news  =1;

//     $match_query="SELECT * FROM `as_users` WHERE u_email=' $email'";
//     $result_match_query=mysqli_query($con,$match_query);
//     if(mysqli_num_rows($result_match_query)>0){
//       $error=true;
//       $error="Account Already exist!";
//   }else{
//     $phash=password_hash($password,PASSWORD_DEFAULT);
//     $q="INSERT INTO `as_users` (`u_fname`, `u_lname`, `u_email`, `u_password`, `subscribe-news`) VALUES ( '$fname', '$lname','$email', '$phash','$s_news');";
//     $res=mysqli_query($con,$q);
//    if($res){
//    $show=true; 
//    }
   
//    }
// }
//   mysqli_close($con);
  // echo $show;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS Collection-Sign Up</title>
    <link rel="icon" type="img/jpg" href="favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    
</head>
<style>
     @media screen and (max-width: 600px) {
        .container.py-4.signup_page {
            padding: 0 21px;
        }}
</style>

<body style="background-color: #000000">
        <!-- navigation -->
        <?php include "partials/nav.php";
// if($show){echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
//     <strong>Success!</strong> Your account has been successfully created.
//     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//     </div>";} 
    // else if($error && $error!="Nothing"){echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    //     <strong>Error!</strong>.$error.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    //     </div>";}

?>
    <!-- navbar end -->

    <div class="main  " style="background-color: #181510; height:100%; margin-left:0px; padding-left:0px;    overflow-y: hidden;">
        <div class="container  py-4 signup_page">

            <h3 class="color-grey">CREATE ACCOUNT</h3>
            <hr class="line text-light" style="height: 0.4px;padding-top:1px;">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-lg-3"></div>
                <div class="col-md-7 col-sm-4 col-lg-6">
                    <form class=" mt-5 mx-2" action="signup.php" method="post">
                        <div class="mb-3 ">
                            <label for="firstname" class="form-label  color-grey ">First Name</label>
                            <input type="text" class="form-control  d-flex justify-content-center" name="fname"  id="firstname" aria-describedby="firstname">
                        </div>
                        <div class="mb-3 ">
                            <label for="lastname" class="form-label  color-grey ">Last Name</label>
                            <input type="text" class="form-control  d-flex justify-content-center"  name="lname" id="lastname" aria-describedby="lastname">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label  color-grey ">Email</label>
                            <input type="email" class="form-control  d-flex justify-content-center"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <div class="row">
                              <label for="exampleInputPassword1" class="form-label  color-grey">Password</label>
                               
                            </div>
                            <input type="password" class="form-control " name="password" id="exampleInputPassword1">

                            <div class="form-check my-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label color-grey mx-2" style="font-size:12px" name="s_news" for="exampleCheck1">SUBSCRIBE TO OUR NEWSLETTER?</label>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-lg-6 col-sm-2"><button type="submit" onmouseout="backcolor(this)" onmouseover="changecolor(this)" class="btn text-light mt-3 py-2 " style="border-radius: 50px; background-color: #9c8661">SIGN UP</button></div>
                                <script>
                                            function changecolor(x){
                                                x.style.backgroundColor="rgba(201, 201, 50, 0.713)";
                                
                                            }
                                            function backcolor(x){
                                                x.style.backgroundColor="#a08c5b";
                                
                                            }
                                        </script> 
                                <div class="col-md-7 col-lg-6 col-sm-3 mt-4 "> <span class="color-grey " style=" font-size: 13px;"><span style="visibility: hidden;"></span>Returning Customer?</span><a href="login.php" class="" style=" font-size: 12px; color:#a08c5b"><span style="visibility: hidden;">....</span>Login →</a></div>
                            </div>

                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

    </div>
    </div>


   <!-- footer -->
   <div><?php
include 'partials/footer.php';
?></div>