<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mocoManga | Dr. Stone-Chapter01</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <style type="text/css">
        .putih {
            color: white;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="../index.php">
                            <img src="../img/logo1.png" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="../index.php">Beranda</a></li>
                                <li class="active"><a href="./listmanga.php">List Manga</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
                                <li><a href="./login.php"><span class="icon_profile arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./mylist.php">Mylist</a></li>
                                        <?php 
                                        session_start();
                                        if(isset($_SESSION['email'])): ?>
                                            <li><a href="../proses/pslogot.php">Logout</a></li>
                                        <?php else: ?>
                                            <li><a href="../view/login.php">Login</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="../index.php"><i class="fa fa-home"></i> Beranda</a>
                        <a href="./listmanga.php"> ListManga</a>
                        <a href="./drstone_details.php"> Dr. Stone</a>
                        <span>Chapter 01</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row" align="center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img src="../img/Dr Stone/00.jpg">
                    <img src="../img/Dr Stone/01.jpg">
                    <img src="../img/Dr Stone/02.jpg">
                    <img src="../img/Dr Stone/03.jpg">
                    <img src="../img/Dr Stone/04.jpg">
                    <img src="../img/Dr Stone/05.jpg">
                    <img src="../img/Dr Stone/06.jpg">
                    <img src="../img/Dr Stone/07.jpg">
                    <img src="../img/Dr Stone/08.jpg">
                    <img src="../img/Dr Stone/09.jpg">
                    <img src="../img/Dr Stone/10.jpg">
                    <img src="../img/Dr Stone/11.jpg">
                    <img src="../img/Dr Stone/12.jpg">
                    <img src="../img/Dr Stone/13.jpg">
                    <img src="../img/Dr Stone/14.jpg">
                    <img src="../img/Dr Stone/15.jpg">
                    <img src="../img/Dr Stone/16.jpg">
                    <img src="../img/Dr Stone/17.jpg">
                    <img src="../img/Dr Stone/18.jpg">
                    <img src="../img/Dr Stone/19.jpg">
                    <img src="../img/Dr Stone/20.jpg">
                    <img src="../img/Dr Stone/21.jpg">
                    <img src="../img/Dr Stone/22.jpg">
                    <img src="../img/Dr Stone/23.jpg">
                    <img src="../img/Dr Stone/24.jpg">
                    <img src="../img/Dr Stone/25.jpg">
                    <img src="../img/Dr Stone/26.jpg">
                    <img src="../img/Dr Stone/27.jpg">
                    <img src="../img/Dr Stone/28.jpg">
                    <img src="../img/Dr Stone/29.jpg">
                    <img src="../img/Dr Stone/30.jpg">
                    <img src="../img/Dr Stone/31.jpg">
                    <img src="../img/Dr Stone/32.jpg">
                    <img src="../img/Dr Stone/33.jpg">
                    <img src="../img/Dr Stone/34.jpg">
                    <img src="../img/Dr Stone/35.jpg">
                    <img src="../img/Dr Stone/36.jpg">
                    <img src="../img/Dr Stone/37.jpg">
                    <img src="../img/Dr Stone/38.jpg">
                    <img src="../img/Dr Stone/39.jpg">
                    <img src="../img/Dr Stone/40.jpg">
                    <img src="../img/Dr Stone/41.jpg">
                    <img src="../img/Dr Stone/42.jpg">
                    <img src="../img/Dr Stone/43.jpg">
                    <img src="../img/Dr Stone/44.jpg">
                    <img src="../img/Dr Stone/45.jpg">
                    <img src="../img/Dr Stone/46.jpg">
                    <img src="../img/Dr Stone/47.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="../index.php"><img src="../img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/player.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>