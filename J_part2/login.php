<?php
// include "partials/db_con.php";
// $show = false;
// $error = "Nothing";
// echo "start";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//   $email  = $_POST["email"];
//   $password = $_POST["password"];

//   $match_query = "SELECT * FROM `as_users` WHERE u_email='$email'";
//   $result_match_query = mysqli_query($con, $match_query);

//   while ($row = mysqli_fetch_array($result_match_query)) {
//     $hash = $row['u_password'];
//     $fname = $row['u_fname'];
//   }

//   if (mysqli_num_rows($result_match_query) == 1 &&  password_verify($password, $hash) == true) {
//     $show = "You are login now!";
//     // set session_
//     session_start();
//     $_SESSION["logedin"] = true;
//     $_SESSION["u_email"] = $email;
//     $_SESSION["u_fname"] = $fname;
//     $_SESSION["password"] = $password;
//     header("location:index.php");

//     // header("location:welcome.php");
//     // header("location:signup.php");
//   } else {
//     $error = "Invalid username and password";
//   }
// }
// mysqli_close($con);
//   echo $show;
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AS Collection-Login</title>
  <link rel="icon" type="img/jpg" href="favicon.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link  type="stylesheet" href="css/style.css"> -->
  <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="partials/style.css">
</head>
<style>
  .eye {
    display: inline;
    position: absolute;
    left: 323px !important;
    top: 7px;
    cursor: pointer;
    color: red;
}a[href="forgot_pass.php"]{
  font-size: 12px !important;
}
@media screen and (max-width: 1024px) {
  .eye {
    left: 265px !important; 
}}
@media screen and (max-width: 992px) {
  .eye {
    left: 263px !important; 
}}
@media screen and (max-width: 800px) {
  .eye {
    left: 423px !important; 
}}
@media screen and (max-width: 600px) {
        .container.py-4.login_container {
          margin-top: 20px;
            padding: 10px 20px !important;
        }}
@media screen and (max-width: 576px) {
  .eye {
    left: 423px !important; 
}}
@media screen and (max-width: 540px) {
  .eye {
    left: 454px !important; 
}}
@media screen and (max-width: 414px) {
  .eye {
    left: 330px !important; 
}}
@media screen and (max-width: 375px) {
  .eye {
    left: 290px !important; 
}}
@media screen and (max-width: 360px) {
  .eye {
    left: 279px !important; 
} }
@media screen and (max-width: 375px) {
  .eye {
    left: 240px !important; 
}}
@media screen and (max-width: 280px) {
  .eye {
    left: 200px !important; 
} a[href="forgot_pass.php"]{
  font-size: 10px !important;
}
}
 </style>

<body style="background-color: #000000">

  <!-- navigation -->
  <?php include "partials/nav.php";
  // if ($show == "You are login now!") {
  //   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  //   <strong>Success!</strong> '$show'
  //   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  //   </div>";
  // } else if ($error == "Invalid username and password") {
  //   echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  //       <strong>Error! </strong>$error<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  //       </div>";
  // }

  ?>
  <!-- navbar end -->

  <div class="main  " style="background-color: #181510; height:100%; margin-left:0px; padding-left:0px;    overflow: hidden;">
    <div class="container  py-4 login_container">

      <h3 class="color-grey">CUSTOMER LOGIN</h3>
      <hr class="line text-light" style="height: 0.4px;padding-top:1px;">
      
      <div class="row">
        <div class="col-md-2 col-lg-4  col-4"></div>
        <div class="col-sm-8 col-lg-4 col-md-8 col-12">
          <form class=" mt-5 mx-2 " action="login.php" method="post">
            <div class="mb-3 ">
              <label for="exampleInputEmail1" class="form-label  color-grey ">Email</label>
              <input type="email" class="form-control  d-flex justify-content-center" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
              <div class="row">
                <div class="col-md-7 col-6 col-lg-5"><label for="exampleInputPassword1" class="form-label  color-grey">Password</label></div>
                <div class="col-md-5 col-6 mt-2 col-lg-7 d-flex justify-content-end"> <a href="forgot_pass.php" style="text-transform: none; color:#a08c5b">Forgot your password?</a></div>
              </div>
              <div class="password">
                <input type="password" class="form-control " name="password" id="password">
                  <i id="togglePassword" class="eye bi bi-eye-slash text-dark" ></i>
              </div>

              <script>
              const togglePassword = document.querySelector('#togglePassword');
              const password = document.querySelector('#password');
                togglePassword.addEventListener('click', function(e) {
                  // toggle the type attribute
                  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                  password.setAttribute('type', type);
                  // toggle the eye / eye slash icon
                  this.classList.toggle('bi-eye');
                });
              </script>
              <div class="row">
                <div class="col-md-5 col-lg-4"><button type="submit" onmouseout="backcolor(this)" onmouseover="changecolor(this)" class="btn text-light mt-3  " style="border-radius: 50px; background-color: #9c8661">LOGIN</button></div>
                <script>
                  function changecolor(x) {
                    x.style.backgroundColor = "rgba(201, 201, 50, 0.713)";

                  }

                  function backcolor(x) {
                    x.style.backgroundColor = "#a08c5b";

                  }
                </script>
                <div class="col-md-7 col-lg-7 mt-4 "> <span class="color-grey mx-1" style=" font-size: 14px;">New Customer?</span><a href="signup.php" class="" style=" font-size: 12px; color:#a08c5b">Sign up →</a></div>
              </div>
              <!-- <button type="submit" class="btn   text-light mt-3 p-2 " style="border-radius: 50px; width: 25%;background-color: #9c8661">LOGIN</button></div> -->

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

</body>

</html>