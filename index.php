<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="home">

    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/img/logo.jpg" width="40" alt=""></a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Toko <span class="sr-only"></span></a> </li>


                        <?php
                        if (empty($_SESSION["user_id"])) // if user is not login
                        {
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

    <section class="hero bg-image" data-image-src="images/img/Shopping.png">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>Populer Of Brand </h1>

                <div class="banner-form">
                    <form class="form-inline">

                    </form>
                </div>
                <div class="steps">
                    <div class="step-item step1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483 483" width="512" height="512">
                            <g fill="#FFF">
                                <path d="M467.006 177.92c-.055-1.573-.469-3.321-1.233-4.755L407.006 62.877V10.5c0-5.799-4.701-10.5-10.5-10.5h-310c-5.799 0-10.5 4.701-10.5 10.5v52.375L17.228 173.164a10.476 10.476 0 0 0-1.22 4.938h-.014V472.5c0 5.799 4.701 10.5 10.5 10.5h430.012c5.799 0 10.5-4.701 10.5-10.5V177.92zM282.379 76l18.007 91.602H182.583L200.445 76h81.934zm19.391 112.602c-4.964 29.003-30.096 51.143-60.281 51.143-30.173 0-55.295-22.139-60.258-51.143H301.77zm143.331 0c-4.96 29.003-30.075 51.143-60.237 51.143-30.185 0-55.317-22.139-60.281-51.143h120.518zm-123.314-21L303.78 76h86.423l48.81 91.602H321.787zM97.006 55V21h289v34h-289zm-4.198 21h86.243l-17.863 91.602h-117.2L92.808 76zm65.582 112.602c-5.028 28.475-30.113 50.19-60.229 50.19s-55.201-21.715-60.23-50.19H158.39zM300 462H183V306h117v156zm21 0V295.5c0-5.799-4.701-10.5-10.5-10.5h-138c-5.799 0-10.5 4.701-10.5 10.5V462H36.994V232.743a82.558 82.558 0 0 0 3.101 3.255c15.485 15.344 36.106 23.794 58.065 23.794s42.58-8.45 58.065-23.794a81.625 81.625 0 0 0 13.525-17.672c14.067 25.281 40.944 42.418 71.737 42.418 30.752 0 57.597-17.081 71.688-42.294 14.091 25.213 40.936 42.294 71.688 42.294 24.262 0 46.092-10.645 61.143-27.528V462H321z"></path>
                                <path d="M202.494 386h22c5.799 0 10.5-4.701 10.5-10.5s-4.701-10.5-10.5-10.5h-22c-5.799 0-10.5 4.701-10.5 10.5s4.701 10.5 10.5 10.5z"></path>
                            </g>
                        </svg>
                        <h4><span style="color:white;">1. </span>Lihat Toko</h4>
                    </div>

                    <div class="step-item step2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 512 512">
                            <g fill='#fff'>
                                <path d="M497.28 190.308c0-3.968-1.827-7.808-5.008-10.296-3.185-2.488-7.177-3.38-11.062-2.376l-150.453 36.08c-4.06.972-8.19-.08-11.503-2.277l-226.046-125.865c-7.663-4.263-17.664-.636-22.243 6.455-2.535 3.03-7.096 4.128-10.964 2.685-25.033-6.573-50.042-9.859-75.04-9.859-24.85 0-49.684 3.253-74.456 9.693-3.857 1.441-8.417.345-10.95-2.683-4.577-7.09-14.578-10.718-22.244-6.457L41.272 214.717c-3.314 2.198-7.444 3.25-11.505 2.278L-98.27 176.36c-3.884-1.004-7.876-.112-11.063 2.376-3.18 2.488-5.007 6.328-5.007 10.296 0 100.177 13.1 192.682 37.127 281.696 2.23 3.378 6.808 5.307 11.504 4.74 4.678-.556 9.186-2.642 12.42-6.21 24.3-36.74 52.08-73.92 82.29-109.78 15.49-17.53 37.34-27.553 60.065-27.553h18.78c34.48 0 68.83 18.926 86.392 49.09 12.422 19.87 28.85 33.75 47.94 40.37 20.23 7.054 38.47 17.816 57.4 34.29 1.177 1.17 2.227 2.404 3.17 3.71 12.284 16.747 28.48 24.25 45.372 24.25 18.084 0 35.106-7.503 47.392-24.252 3.78-5.174 8.708-11.293 14.788-18.375 22.686-25.28 47.067-53.646 71.105-82.586 1.735-1.973 3.847-3.062 6.066-3.09 2.218 .028 4.33 1.092 6.064 3.065 24.035 28.938 48.415 57.307 71.1 82.587 6.08 7.08 11.01 13.197 14.79 18.373 12.285 16.748 29.308 24.25 47.393 24.25 16.892 0 33.09-7.503 45.375-24.25 .942-1.305 1.992-2.54 3.168-3.71 18.931-16.474 37.177-27.236 57.403-34.29 19.09-6.62 35.516-20.5 47.94-40.37 17.562-30.165 51.911-49.09 86.39-49.09h18.78c22.725 0 44.57 10.023 60.06 27.554 30.21 35.86 57.99 73.04 82.29 109.78 3.234 3.568 7.743 5.654 12.42 6.21 4.697 .567 9.273-1.36 11.504-4.74 24.026-89.015 37.127-181.52 37.127-281.696zm-22.167-77.994H355.78c-14.384 0-28.28 7.883-37.697 20.567-5.465 8.286-13.236 21.242-25.23 36.03-9.127 11.555-21.818 23.245-37.854 34.843-.262 .17-.45 .38-.655 .586-.506 .504-1.09 .84-1.76 .925-.674 .088-1.317-.05-1.892-.4-.1-.06-.18-.15-.285-.21-.196-.114-.39-.252-.564-.425-4.725-4.723-9.953-11.155-15.317-19.353a6253.107 6253.107 0 0 0-35.045-48.635c-18.865-24.067-37.07-47.317-52.84-68.276 23.327-44.527 49.373-88.42 78.62-130.045 24.036-36.741 51.822-73.92 82.034-109.78 14.787-16.532 36.61-26.554 60.065-26.554h18.78c25.985 0 49.546 12.987 65.608 34.57 16.06 21.58 23.434 49.124 21.616 76.752-1.68 16.475-5.952 32.7-12.443 48.632-15.772 20.958-33.977 44.21-52.844 68.275-32.98 42.097-62.814 85.99-86.14 130.518a6055.03 6055.03 0 0 0-35.044 48.634c-5.364 8.198-10.593 14.63-15.318 19.354-.174.173-.368.31-.565.424-.1.06-.18.15-.285.21-.575 .35-1.218 .486-1.892 .4-.67-.085-1.253-.42-1.76-.926-.204-.205-.392-.416-.655-.587-16.036-11.598-28.727-23.288-37.854-34.842-11.994-14.788-19.765-27.744-25.23-36.03-9.417-12.684-23.313-20.567-37.698-20.567zm-113.253 225.228c-11.94 0-21.64 9.7-21.64 21.64 0 11.938 9.7 21.638 21.64 21.638 11.938 0 21.64-9.7 21.64-21.638 0-11.94-9.702-21.64-21.64-21.64zm113.252-68.613H355.78c-14.384 0-28.28 7.883-37.697 20.567-5.465 8.286-13.236 21.242-25.23 36.03-9.127 11.555-21.818 23.245-37.854 34.842-.262 .17-.45 .38-.655 .586-.506 .504-1.09 .84-1.76 .925-.674 .088-1.317-.05-1.892-.4-.1-.06-.18-.15-.285-.21-.196-.114-.39-.252-.564-.425-4.725-4.723-9.953-11.155-15.317-19.353a6253.107 6253.107 0 0 0-35.045-48.635c-18.865-24.067-37.07-47.317-52.84-68.276 23.327-44.527 49.373-88.42 78.62-130.045 24.036-36.741 51.822-73.92 82.034-109.78 14.787-16.532 36.61-26.554 60.065-26.554h18.78c25.985 0 49.546 12.987 65.608 34.57 16.06 21.58 23.434 49.124 21.616 76.752-1.68 16.475-5.952 32.7-12.443 48.632-15.772 20.958-33.977 44.21-52.844 68.275-32.98 42.097-62.814 85.99-86.14 130.518a6055.03 6055.03 0 0 0-35.044 48.634c-5.364 8.198-10.593 14.63-15.318 19.354-.174.173-.368.31-.565.424-.1.06-.18.15-.285.21-.575 .35-1.218 .486-1.892 .4-.67-.085-1.253-.42-1.76-.926-.204-.205-.392-.416-.655-.587-16.036-11.598-28.727-23.288-37.854-34.842-11.994-14.788-19.765-27.744-25.23-36.03-9.417-12.684-23.313-20.567-37.698-20.567z" />
                            </g>
                        </svg>

                        <h4><span style="color:white;">2. </span>Pesan Produk / Barang</h4>
                    </div>

                    <div class="step-item step3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                            <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" />
                        </svg>
                        <h4><span style="color:white;">3. </span>Kirim Barang / Produk</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4>Berbagai Toko Kami</h4>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="selected" data-filter="*">all</a> </li>
                                <?php
                                $res = mysqli_query($db, "select * from res_category");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo '<li><a href="#" data-filter=".' . $row['c_name'] . '"> ' . $row['c_name'] . '</a> </li>';
                                }
                                ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="restaurant-listing">

                    <?php
                    $ress = mysqli_query($db, "select * from restaurant");
                    while ($rows = mysqli_fetch_array($ress)) {

                        $query = mysqli_query($db, "select * from res_category where c_id='" . $rows['c_id'] . "' ");
                        $rowss = mysqli_fetch_array($query);

                        echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all ' . $rowss['c_name'] . '">
														<div class="restaurant-wrap">
															<div class="row">
																<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="restaurant-logo" href="dishes.php?res_id=' . $rows['rs_id'] . '" > <img src="admin/Res_img/' . $rows['image'] . '" alt="Restaurant logo"> </a>
																</div>
													
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5><a href="dishes.php?res_id=' . $rows['rs_id'] . '" >' . $rows['title'] . '</a></h5> <span>' . $rows['address'] . '</span>
																</div>
													
															</div>
												
														</div>
												
													</div>';
                    }


                    ?>

                </div>
            </div>
        </div>
    </section>

    <section class="popular">
        <div class="container">
            <div class="title text-xs-center m-b-30">
                <h2>Populer Produk & Barang</h2>
                <p class="lead">Cara cepat untuk memesan produk dan barang favorit Anda di antara 6 teratas ini</p>
            </div>
            <div class="row">
                <?php
                $query_res = mysqli_query($db, "select * from dishes LIMIT 6");
                while ($r = mysqli_fetch_array($query_res)) {

                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/' . $r['img'] . '"></div>
                                                <div class="content">
                                                    <h5><a href="dishes.php?res_id=' . $r['rs_id'] . '">' . $r['title'] . '</a></h5>
                                                    <div class="product-name">' . $r['slogan'] . '</div>
                                                    <div class="price-btn-block"> <span class="price">Rp' . $r['price'] . '</span> <a href="dishes.php?res_id=' . $r['rs_id'] . '" class="btn theme-btn-dash pull-right">Order Now</a> </div>
                                                </div>
                                                
                                            </div>
                                    </div>';
                }
                ?>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="bottom-footer">
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
    </footer>



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