<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
error_reporting(0);
session_start();


function function_alert()
{


    echo "<script>alert('Thank you. Your Order has been placed!');</script>";
    echo "<script>window.location.replace('your_orders.php');</script>";
}

if (empty($_SESSION["user_id"])) {
    header('location:login.php');
} else {


    foreach ($_SESSION["cart_item"] as $item) {

        $item_total += ($item["price"] * $item["quantity"]);

        if ($_POST['submit']) {

            $SQL = "insert into users_orders(u_id,title,quantity,price) values('" . $_SESSION["user_id"] . "','" . $item["title"] . "','" . $item["quantity"] . "','" . $item["price"] . "')";

            mysqli_query($db, $SQL);


            unset($_SESSION["cart_item"]);
            unset($item["title"]);
            unset($item["quantity"]);
            unset($item["price"]);
            $success = "Thank you. Your order has been placed!";

            function_alert();
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
        <title>Pesanan</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animsition.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <div class="site-wrapper">
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
                <div class="top-links">
                    <div class="container">
                        <ul class="row links">

                            <li class="col-xs-12 col-sm-4 link-item"><span>1</span><a href="restaurants.php">Pilih Toko</a></li>
                            <li class="col-xs-12 col-sm-4 link-item "><span>2</span><a href="#">Pilih Barang</a></li>
                            <li class="col-xs-12 col-sm-4 link-item active"><span>3</span><a href="checkout.php">Pesan dan Bayar</a></li>
                        </ul>
                    </div>
                </div>

                <div class="container">

                    <span style="color:green;">
                        <?php echo $success; ?>
                    </span>

                </div>

                <div class="container m-t-30">
                    <form action="" method="post">
                        <div class="widget clearfix">

                            <div class="widget-body">
                                <form method="post" action="#">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="cart-totals margin-b-20">
                                                <div class="cart-totals-title">
                                                    <h4>Ringkasan Keranjang</h4>
                                                </div>
                                                <div class="cart-totals-fields">

                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Subtotal Keranjang</td>
                                                                <td> <?php echo "Rp" . $item_total; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ongkos kirim</td>
                                                                <td>Gratis</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-color"><strong>Total</strong></td>
                                                                <td class="text-color"><strong> <?php echo "Rp" . $item_total; ?></strong></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="payment-option">
                                                <ul class=" list-unstyled">
                                                    <li>
                                                        <label class="custom-control custom-radio  m-b-20">
                                                            <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Bayar di tempat (COD)</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="custom-control custom-radio  m-b-10">
                                                            <input name="mod" type="radio" value="paypal" disabled class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Paypal <img src="images/paypal.jpg" alt="" width="90"></span> </label>
                                                    </li>
                                                </ul>
                                                <p class="text-xs-center"> <input type="submit" onclick="return confirm('Do you want to confirm the order?');" name="submit" class="btn btn-success btn-block" value="Pesan Sekarang"> </p>
                                            </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>

        <footer class="footer">
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

<?php
}
?>