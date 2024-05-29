<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIBRIS YURDUM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="../img/emu-dau-logo.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="home.css" />


    <style>
        .modal-body {
   
            background-color: #303841;
        }

        .carousel-inner {
            width: 100%;

        }

        .bdr {
            border-bottom: 2px solid red;
        }

        .radius {
            border-radius: 15px;
            transition: 0.5s all ease;
        }

        .radius:hover:after {

            content: " >";

        }

        .slick-initialized .slick-slide {
            outline: none;
        }

        .checked {
            color: orange;
        }

        .img-hv {
            transition: 0.5s all ease;
        }

        .img-hv:hover {
            transform: scale(1.2, 1.2);
        }

        .active,
        .menu-bar ul li:hover {
            background: #2bab0d;
            border-radius: 5px;

        }

        .sub-menu-1 {
            display: none;
        }

        .menu-bar ul li:hover .sub-menu-1 {
            display: block;
            position: absolute;
            background: rgb(0, 100, 0);
            margin-top: 15px;
            margin-left: -15px;

        }

        .menu-bar ul li:hover .sub-menu-1 ul {
            display: block;
            margin: 10px;
        }
    </style>
</head>

<body>

    <header class="header">
        <img src="images/emu-dau-logo.png" alt style="height: 70px; width: 65px">
        <a href="#" class="logo" style="text-decoration: none;">KIBRIS YURDUM</a>
        <nav class="navbar">
            <a href="#hakkimizda" style=" text-decoration:none; ">hakkimizda</a>
            <a href="#Gallery" style=" text-decoration:none; ">Yurtlarimiz</a>
            <a href="#contact" style=" text-decoration:none; ">iletisim</a>
            <button id="admin" style="    margin-left: 7px;height: 40px;width: 80px"><a href="login.php" style=" text-decoration:none; text-align:centre" id="link1">Giris</a></button>
        </nav>

        </nav>
   
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title w-100">
                            <h4 class="text-muted">Hesabiniza giris yapin</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-body ">
                        <form action="" class="was-validated">
                            <div class="form-group">
                                <label for="email" class="text-info font-weight-bold">Email:</label>
                                <input type="email" class="form-control" placeholder="Mailinizi girin" required>
                                <div class="valid-feedback">
                                    <strong>Mail adresiniz gecerli</strong>
                                </div>
                                <div class="invalid-feedback">
                                    <strong>Lütfen gecerli bir mail adresi girin</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd" class="text-primary font-weight-bold">Password:</label>
                                <input type="password" class="form-control" placeholder="Sifrenizi girin" minlength="6" maxlength="8" required>
                                <div class="valid-feedback">
                                    <strong>Sifreniz guclu</strong>
                                </div>
                                <div class="invalid-feedback">
                                    <strong>Once sifrenizi girin</strong>
                                </div>
                            </div>
                            <div class="form-group form-group-check">
                                <label for="chk" class="form-group-label text-light font-weight-bold">
                                    <input type="checkbox" class="form-group-input"> Beni hatýrla 
                                </label>
                            </div>
                            <input type="submit" class="form-control btn btn-outline-success font-weight-bold" value="Giris">
                        </form>
                    </div> 




        </nav>
    </header>
  
    <div id="pslide" class="carousel slide" data-ride="carousel" style="margin-left: 40px; margin-right:40px">

       

        <div class="carousel-inner" data-interval="500">
        
            <div class="carousel-item active">
              
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
                <img src="images/popart1.jpg" height="600px" width="100%" alt="">
            </div>
          
            <div class="carousel-item">
                
                <div class="carousel-caption">
                 
                </div>
                <img src="images/Astra1.jpg" height="600px" width="100%" alt="">
            </div>
          
            <div class="carousel-item">
                
                <div class="carousel-caption">
                 
                </div>
                <img src="images/longson1.jpg" height="600px" width="100%" alt="">
            </div>
           
            <div class="carousel-item">
               
                <div class="carousel-caption">
                   
                </div>
                <img src="images/akdeniz.jpg" height="600px" width="100%" alt="">
            </div>
        </div>

     
        <a href="#pslide" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#pslide" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
 
    <center>
        <h1 class="heading" style="margin-bottom: -50px;"> <span>hakkimizda</span> </h1>
    </center>
    <section class="ftco-wrap-hakkimizda">

        <div class="intro" id="hakkimizda">
            <div class="container" id="sec_cond">
                <div class="row">
                    <div class="col">
                        <div class="intro_content" style="width: 550px; margin-right: 172px;height: 415px;">
                         
                            <div class="intro_title">
                                <h3>MERHABALAR</h3>
                            </div>
                            <div class="intro_text">
                                <p>Hos geldiniz! Yurt yonetim sistemi, ogrencilerimizin konforlu ve guvenli bir sekilde konaklayabilmesi icin tasarlanmis modern bir platformdur. Bu sistem sayesinde, yurtlarimizla ilgili tum bilgilere kolayca erisebilir, basvurularinizi yapabilir ve yurt hayatinizi daha duzenli hale getirebilirsiniz. Yurtlarimiz, ogrencilerimize rahat bir yasam alani sunmak icin modern olanaklarla donatilmistir. Ogrencilerimiz, yurt basvurularini online olarak yapabilir, oda durumlarini takip edebilir ve yonetim ile kolayca iletisime gecebilirler. Konforlu ve huzurlu bir yurt deneyimi icin sitemiz uzerinden daha fazla bilgi alabilir ve basvurunuzu hemen yapabilirsiniz. Yeni yurt doneminizde basarilar dileriz!
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6.5 col-md-6 intro_col">
                                <div class="intro_image"><img src="images/daukusbakis.jpg" alt="intro" style="max-width: 100%;
    border-radius: 0px 0px 10px 10px; border: 2px solid darksalmon"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <div class="container-fluid pt-5 pb-3" id="Gallery" style="margin-top:20px">
        <h1 class=" heading">Yurtlarimiz</h1>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-info m-1 active" data-filter="*" style=" text-decoration:none; ">All</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".first"><a href="#room" style=" text-decoration:none; "> Akdeniz </a>
                    </li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".second"><a href="#floor" style=" text-decoration:none; ">Astra</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".third"><a href="#canteen" style=" text-decoration:none; ">Dau 2</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".fourth"><a href="#dort" style=" text-decoration:none; ">Longson</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".fifth"><a href="#bes" style=" text-decoration:none; ">Pop art</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".sixth"><a href="#alti" style=" text-decoration:none; ">Dau 4</li>

                </ul>
            </div>
        </div>
        <div class="container" id="cont">
            <div class="position-relative d-flex align-items-center justify-content-center" id="sec_cond1">
                <div class="row portfolio-container" id="room">
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/ak1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/ak1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/ak2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/ak2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/ak3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/ak3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Astra1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Astra1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Astra2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Astra2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Astra3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Astra3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dau21.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dau21.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dau22.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dau22.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dau23.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dau23.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="dort">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/longson1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/longson1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="dort">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/longson2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/longson2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="dort">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/longson3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/longson3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="bes">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/popart1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/popart1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="bes">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/popart2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/popart2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="bes">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/popart3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/popart3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="alti">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dau44.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dau44.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="alti">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dau45.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dau45.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="alti">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dau46.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dau46.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

<section id="contact" class="contact">
    <div class="container" id="cont">
        <div class="section-title" id="sec_cond">
            <div class="row" data-aos="fade-in">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bx bx-home"></i>
                            <h4>Konum:</h4>
                            <p>Dogu Akdeniz Universitesi, Gazimagusa</p>
                        </div>
                        <div class="mail">
                            <i class="bx bx-envelope"></i>
                            <h4>E-posta:</h4>
                            <p>20001651@emu.edu.tr</p>
                        </div>
                        <div class="phone">
                            <i class="bx bxl-skype"></i>
                            <h4>Telefon:</h4>
                            <p>05391110243</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.0361094353924!2d33.91164791558245!3d35.14237927967859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14dfc9de2ec388ab%3A0x90b5c9b9584b6f10!2sDo%C4%9Fu+Akdeniz+%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1680456384141!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>Hizli baglantilar</h3>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> ana sayfa </a>
                <a href="#hakkimizda" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> hakkimizda </a>
                <a href="#Galeri" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Galeri </a>
                <a href="#iletisim" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> iletisim</a>
            </div>

            <div class="box">
                <h3>Iletisim bilgileri</h3>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-phone" style="text-decoration: none;"></i> 05391110243 </a>
              
                <a href="#" style="text-decoration: none;"> <i class="fas fa-envelope"></i> 20001651@emu.edu.tr </a>
                <a href="https://maps.app.goo.gl/gt1PqFp5c9QBUiz36" style="text-decoration: none;"> <i class="fas fa-map-marker-alt"></i> Dogu Akdeniz Universitesi, Gazimagusa, Kuzey Kibris Turk Cumhuriyeti. </a>
            </div>

            <div class="box">
                <h3>bizi takip edin</h3>
                <a target="_blank" href="https://www.facebook.com/" target="_blank" style="text-decoration: none;"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a target="_blank" href="https://www.twitter.com/" style="text-decoration: none;"> <i class="fab fa-twitter"></i> twitter </a>
               <a target="_blank" href="https://www.instagram.com/" style="text-decoration: none;"> <i class="fab fa-instagram"></i> instagram </a>
               <a target="_blank" href="https://www.linkedin.com/" style="text-decoration: none;"> <i class="fab fa-linkedin"></i> linkedin </a>
 <a target="_blank" href="https://www.pinterest.com/" style="text-decoration: none;"> <i class="fab fa-pinterest"></i> pinterest </a>

            </div>

        </div>



    </section>




    <div class="container-fluid bg-dark text-white mt-5 py-1 px-sm-1 px-md-5" style="height: 150px;">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4" style="margin-top: 5px;">
                <a class="btn btn-light btn-social mr-2" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="credit">
                <h2>created by <span>EMU Students</span> | @all rights reserved</h2>
            </div>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>

    <script>
        $('.pslick').slick({
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>

</body>

</html>