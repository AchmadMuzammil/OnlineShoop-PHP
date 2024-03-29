<!DOCTYPE html>
<html lang="en">
<?php

session_start();
error_reporting(0);
include("connection/connect.php");
if (isset($_POST['submit'])) {
   if (
      empty($_POST['firstname']) ||
      empty($_POST['lastname']) ||
      empty($_POST['email']) ||
      empty($_POST['phone']) ||
      empty($_POST['password']) ||
      empty($_POST['cpassword']) ||
      empty($_POST['cpassword'])
   ) {
      $message = "All fields must be Required!";
   } else {

      $check_username = mysqli_query($db, "SELECT username FROM users where username = '" . $_POST['username'] . "' ");
      $check_email = mysqli_query($db, "SELECT email FROM users where email = '" . $_POST['email'] . "' ");



      if ($_POST['password'] != $_POST['cpassword']) {

         echo "<script>alert('Password not match');</script>";
      } elseif (strlen($_POST['password']) < 6) {
         echo "<script>alert('Password Must be >=6');</script>";
      } elseif (strlen($_POST['phone']) < 10) {
         echo "<script>alert('Invalid phone number!');</script>";
      } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
         echo "<script>alert('Invalid email address please type a valid email!');</script>";
      } elseif (mysqli_num_rows($check_username) > 0) {
         echo "<script>alert('Username Already exists!');</script>";
      } elseif (mysqli_num_rows($check_email) > 0) {
         echo "<script>alert('Email Already exists!');</script>";
      } else {


         $mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('" . $_POST['username'] . "','" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['email'] . "','" . $_POST['phone'] . "','" . md5($_POST['password']) . "','" . $_POST['address'] . "')";
         mysqli_query($db, $mql);

         header("refresh:0.1;url=login.php");
      }
   }
}


?>


<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="#">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title>Registrasi</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link href="css/animsition.min.css" rel="stylesheet">
   <link href="css/animate.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <div style=" background-image: url('images/img/1.png');">
      <header id="header" class="header-scroll top-header headrom">
         <nav class="navbar navbar-dark">
            <div class="container">
               <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
               <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/img/logo.jpg" width="40" alt=""> </a>
               <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                  <ul class="nav navbar-nav">
                     <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                     <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Toko <span class="sr-only"></span></a> </li>

                     <?php
                     if (empty($_SESSION["user_id"])) {
                        echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                     } else {


                        echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Pesanan</a> </li>';
                        echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                     }

                     ?>

                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div class="page-wrapper">

         <div class="container">
            <ul>

            </ul>
         </div>

         <section class="contact-page inner-page">
            <div class="container ">
               <div class="row ">
                  <div class="col-md-12">
                     <div class="widget">
                        <div class="widget-body">

                           <form action="" method="post">
                              <div class="row">
                                 <div class="form-group col-sm-12">
                                    <label for="exampleInputEmail1">User-Name</label>
                                    <input class="form-control" type="text" name="username" id="example-text-input">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Nama Depan</label>
                                    <input class="form-control" type="text" name="firstname" id="example-text-input">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input class="form-control" type="text" name="lastname" id="example-text-input-2">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">No HP</label>
                                    <input class="form-control" type="text" name="phone" id="example-tel-input-3">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <label for="exampleInputPassword1">Konfir password</label>
                                    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2">
                                 </div>
                                 <div class="form-group col-sm-12">
                                    <label for="exampleTextarea">Alamat pengiriman</label>
                                    <textarea class="form-control" id="exampleTextarea" name="address" rows="3"></textarea>
                                 </div>

                              </div>

                              <div class="row">
                                 <div class="col-sm-4">
                                    <p> <input type="submit" value="Register" name="submit" class="btn theme-btn"> </p>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <footer class="footer">
            <div class="container">

               <div class="row bottom-footer">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                           <h5>Pembayaran</h5>
                           <ul>
                              <li>
                                 <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                              </li>
                              <li>
                                 <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                              </li>
                              <li>
                                 <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                              </li>
                              <li>
                                 <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                              </li>
                              <li>
                                 <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                           <h5>Alamat</h5>
                           <p>Dusun Wijenan Lor, Rt/Rw 001/002, Desa Singolatren, Kecamatan Singojuruh</p>
                           <div class="color-white">
                              <a href="https://instagram.com/_chicha.shop?igshid=MXRvODF0YzVicmh4OA=="><i class="fa-brands fa-instagram"></i></a>
                              <a href="http://shopee.co.id/chichashop23"><i class="fa-solid fa-cart-shopping"></i></a>
                              <a href="https://wa.me/6287889169191/?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20Anda."><i class="fa-brands fa-whatsapp"></i></a>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 additional-info color-gray">
                           <h5>Informasi</h5>
                           <p>Ciptaan Mahasiwa stikom.</p>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </footer>

      </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/animsition.min.js"></script>
      <script src="js/bootstrap-slider.min.js"></script>
      <script src="js/jquery.isotope.min.js"></script>
      <script src="js/headroom.js"></script>
      <script src="js/foodpicky.min.js"></script>
</body>

</html>