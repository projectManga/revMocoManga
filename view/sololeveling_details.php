<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mocoManga | SoloLeveling</title>

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
        .overflow {
            width: 750px;
            height: 175px;
            overflow: auto;
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
                        <a href="./listmanga.php">List Manga</a>
                        <span>Solo Leveling</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="../img/sololeveling.png">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>Solo Leveling</h3>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p>10 tahun yang lalu, setelah "Gerbang" yang terhubung ke dunia dengan dunia monster dibuka, beberapa hal yang biasa, setiap hari orang menerima kekuatan untuk memburu monster di dalam Gerbang. Mereka dikenal sebagai "Pemburu(Hunter)". Namun, tidak semua Pemburu kuat. Nama saya Sung Jin-Woo, Hunter E-rank. Saya seseorang yang harus mempertaruhkan nyawanya di dugeon paling rendah, "Terlemah Di Dunia".</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> Manhwa</li>
                                            <li><span>Author:</span> Chugon</li>
                                            <li><span>Illustrator:</span> Dubu(Redice Studio)</li>
                                            <li><span>Publisher:</span> D&C Media</li>
                                            <li><span>Date aired:</span> March 04, 2018 to ?</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Status:</span> Airing</li>
                                            <li><span>Genre:</span> Action, Magic</li>
                                            <li><span>Scores:</span> 7.31 / 1,515</li>
                                            <li><span>Rating:</span> 8.5 / 161 times</li>
                                            <li><span>Views:</span> 131,541</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-plus"></i> Tambah ke List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Chapter</h5>
                            </div>
                            <div class="overflow">
                                <ul>
                                    <li><a href="chapter1_sololeveling.php">Chapter 01</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Reviews</h5>
                            </div>
                        </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="product__sidebar">
                            <div class="product__sidebar__view">
                                <div class="section-title">
                                    <h5>Manga Terpopuler</h5>
                                </div>
                                <ul class="filter__controls">
                                    <li class="active" data-filter="*">Hari</li>
                                    <li data-filter=".week">Minggu</li>
                                    <li data-filter=".month">Bulan</li>
                                </ul>
                                <div class="filter__gallery">
                                    <div class="product__sidebar__comment__item mix day week month">
                                        <div class="product__sidebar__comment__item__pic">
                                            <img src="../img/sololeveling.png" alt="" width="90" height="130">
                                        </div>
                                        <div class="product__sidebar__comment__item__text">
                                            <ul>
                                                <li>Action</li>
                                                <li>Magic</li>
                                                <li>Manhwa</li>
                                            </ul>
                                            <h5><a href="sololeveling_details.php">Solo Leveling</a></h5>
                                        </div>
                                    </div>
                                    <div class="product__sidebar__comment__item mix day week">
                                        <div class="product__sidebar__comment__item__pic">
                                            <img src="../img/dr-stone.jpg" alt="" width="90" height="130">
                                        </div>
                                        <div class="product__sidebar__comment__item__text">
                                            <ul>
                                                <li>Action</li>
                                                <li>Survival</li>
                                                <li>Science</li>
                                                <li>Manga</li>
                                            </ul>
                                            <h5><a href="drstone_details.php">Dr. Stone</a></h5>
                                        </div>
                                    </div>
                                    <div class="product__sidebar__comment__item mix day">
                                        <div class="product__sidebar__comment__item__pic">
                                            <img src="../img/overlord.jpg" alt="" width="90" height="130">
                                        </div>
                                        <div class="product__sidebar__comment__item__text">
                                            <ul>
                                                <li>Action</li>
                                                <li>Magic</li>
                                                <li>Manga</li>
                                            </ul>
                                            <h5><a href="overlord_details.php">Overlord</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__sidebar__view">
                                <div class="section-title">
                                    <h5>Genres</h5>
                                </div>
                                <div class="product__sidebar__comment__item mix day week month">
                                    <div class="product__sidebar__comment__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Magic</li>
                                            <li>Manga</li>
                                        </ul>
                                        <ul>
                                            <li>Manhwa</li>
                                            <li>Science</li>
                                            <li>Survival</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product__sidebar__comment">
                                <div class="section-title">
                                    <h5>Social Media</h5>
                                </div>
                                <div class="product__sidebar__comment__item">
                                    <div class="product__sidebar__comment__item__text" align="center">
                                        <a href="#"><img src="../img/sidebar/discord.png" alt="" width="240" height="75"></a>\
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

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
