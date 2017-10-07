<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <base href="http://www.fitoshop.in.ua/" target="_self">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FitoShop &mdash;Корзина</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Корзина"/>
    <meta name="keywords" content="Фіто, чай"/>
    <meta name="author" content="https://github.com/tonyzoer/"/>

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Cart css -->
    <link rel="stylesheet" href="css/cart.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<header id="fh5co-header" role="banner">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse"
                   data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="/">FitoShop</a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/"><span>Головна <span class="border"></span></span></a></li>
                    <li class="active"><a href="cart"><span>Корзина <span class="border"></span></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END .header -->

<aside class="fh5co-page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</aside>

<div id="fh5co-main">

    <div class="container">
        <div class="row">
            <form action="sendForm.php" method="POST">
                <div class="col-md-12">
                    <h1>Корзина</h1>

                    <div class="shopping-cart" id="cart">


                        <div class="column-labels" id="column-labels">
                            <label class="product-image">Фото</label>
                            <label class="product-details">Продукт</label>
                            <label class="product-price">Ціна</label>
                            <label class="product-quantity">Кількість</label>
                            <label class="product-removal">Видалити</label>
                            <label class="product-line-price">Сума</label>
                        </div>


                        <div class="totals">
                            <div class="totals-item">
                                <label>Сума</label>
                                <div class="totals-value" id="cart-subtotal">71.97</div>
                            </div>
                            <!-- <div class="totals-item">
                              <label>Tax (5%)</label>
                              <div class="totals-value" id="cart-tax">3.60</div>
                            </div> -->
                            <div class="totals-item">
                                <label>Доставка</label>
                                <div class="totals-value" id="cart-shipping">35.00</div>
                            </div>
                            <div class="totals-item totals-item-total">
                                <label>Повна Сума</label>
                                <div class="totals-value" id="cart-total">90.57</div>
                            </div>
                        </div>
                        <input class="input-sm" type="email" placeholder="E-Mail" name="email">
                        <input class="input-sm" type="tel" placeholder="Телефон" name="tel">
                        <input class="input-sm" type="text" placeholder="Ім'я" name="name">
                        <button type="submit" id="checkout" class="checkout">Замовити</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="fh5co-spacer fh5co-spacer-lg"></div>

    <footer id="fh5co-footer">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="fh5co-footer-widget">
                        <h2 class="fh5co-footer-logo">FitoShop</h2>
                        <p>Є ОФІЦІЙНИМ ПРЕДСТАВНИКОМ ТОВ «НВП «ЛАБОРАТОРІЯ «НЕВІД» (Україна, Київська область,
                            Обухівський район, с. Халеп’я, вул. Беркутова, 18. )
                            <br> Представлену продукцію Ви можете замовити на сайті,
                            <br> або за телефоном : <a style="font-size:2em" href="tel:+380969718767 ">(096) 971 – 87 –
                                67 </a>
                        </p>
                        <p>МИ ПРАЦЮЕМО: <br> ПОНЕДІЛОК – ПЯТНИЦЯ - 9.00 до 18.00 <br> СУБОТА, НЕДІЛЯ - вихідний.
                        </p>
                    </div>
                    <div class="fh5co-footer-widget">
                        <ul class="fh5co-social">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="visible-sm-block clearfix"></div>


                <div class="col-md-4 col-sm-12">
                    <div class="fh5co-footer-widget top-level">
                        <h4 class="fh5co-footer-lead ">Продукція</h4>
                        <ul class="fh5co-list-check">
                            <?php
                            include 'php/dbconect.php';
                            $id = array();
                            $type = array();
                            $imgsrc = array();
                            $desc = array();
                            $sql = null;
                            $sql = "SELECT * FROM `productTypes`
							ORDER BY type";
                            $result = $conn->query($sql);
                            $i = 0;
                            if ($result->num_rows > 0) {
                                ///asdasd
                                // echo "fuck yeeah";
                                while ($row = $result->fetch_assoc()) {
                                    $id[] = $row['id'];
                                    $type[] = $row['type'];
                                    $imgsrc[] = $row['imgsrc'];
                                    $desc[] = $row['desc'];
                                    $i++;
                                }
                            } else {
                                echo "Sorry not found";
                            }

                            $i = 0;
                            for ($z = 0; $z < count($id); $z++) {
                                $i = $z + 1;
                                echo "<li><a href='type/$id[$z]'>$type[$z]</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row fh5co-row-padded fh5co-copyright">
                <div class="col-md-5">
                    <p>
                        <small>&copy Designed by: <a href="https://github.com/tonyzoer/" target="_blank">Zoer</a>
                    </p>
                </div>
            </div>
        </div>

    </footer>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!-- SimpleCart -->
    <script type="text/javascript" src="js/simpleCart.min.js"></script>
    <script>
        simpleCart({
            checkout: {
                type: "SendForm",
                email: "nevid@fitoshop.in.ua",
                url: "sendForm.php",
                method: "POST",
            }
        });
        simpleCart.init();
    </script>
    <!-- Cart js -->
    <script type="text/javascript" src="js/cart.js"></script>

</body>
</html>
