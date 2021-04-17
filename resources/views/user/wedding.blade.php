<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kính mời các bạn tham gia chung vui.">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Minh Siêu - Bảo Chi">
    <meta property="og:description" content="Kính mời các bạn tham gia chung vui.">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="900">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Kính mời các bạn tham gia chung vui.">
    <meta name="twitter:title" content="Minh Siêu - Bảo Chi">
    <title>
        Minh Siêu - Bảo Chi
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://endfa.vn/_endfatemplate/temp_13/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="https://endfa.vn/_endfatemplate/temp_13/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="https://endfa.vn/_endfatemplate/temp_13/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link rel="stylesheet" href="https://endfa.vn/_endfatemplate/temp_13/css/style.css" type="text/css">
    <style>
        #masthead .title {
            word-spacing: 0.3rem;
        }
        #masthead .title >span {
            text-transform: capitalize;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #masthead .title .and-sym {
            font-size: 2.1rem;
        }
        .bg-success {
            background-color:lightgreen;
        }

        @media (min-width: 325px) and (max-width: 767px) {
            #masthead .title >span {
                text-transform: capitalize;
                font-size: 80px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <section id="masthead" class="center">
        <div class="images-bg" style="background-image: url('{{ URL::asset('user/Image/bannerW.jpg') }}');">
        </div>
        <div class="container">
            <p class="suptitle">Lễ Thành Hôn</p>
            <h1 class="title"><span>minh siêu</span> <span class="and-sym">&</span> <span>bảo chi</span></h1>
            <div class="date">
                <div class="row text-center">
                    <div class="weekday col"><span>Thứ Bảy</span></div>
                    <div class="day">22</div>
                    <div class="month col"><span>Tháng 5</span></div>
                    <div class="year col-12">Năm 2021</div>
                </div>
            </div>
            <div id="countdown" class="timer-countdown" data-year="2021" data-month="05" data-day="22" data-hour="10" data-minute="30" data-second="0">
                <div class="days"></div>
                <div class="hours"></div>
                <div class="minutes"></div>
                <div class="seconds"></div>
            </div>
        </div>
    </section>
    <section id="main-content">
        <div id="menu-head" class="container">
            <div class="main-menu-wrap menu-wrap">
                <ul class="nav main-menu menu center">
                    <li class="active">
                        <a href="#introduce" title="Giới thiệu">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#story" title="Chặng đường đã qua">Chặng đường đã qua</a>
                    </li>
                    <li>
                        <a href="#gallery" title="Kỉ niệm">Kỉ niệm</a>
                    </li>
                </ul>
                <div class="background-menu">
                    <div class="l1"></div>
                    <div class="l2"></div>
                    <div class="l3"></div>
                </div>
            </div>
        </div>

        <!-- message -->
        @foreach(['danger', 'warning', 'success', 'info'] as $msg)
            @if(session($msg))
            <div class="bg-{{ $msg }}">
                <div style="text-align: center; text-transform: capitalize;">
                    {{ session($msg) }}
                </div>
            </div>
            @endif
        @endforeach

        <div id="introduce" class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="groom-info center">
                            <div class="wrap-image">
                                <div class="b">
                                    <div class="p">
                                        <img class="groom-img" src="{{ URL::asset('user/Image/avaCD.jpg') }}" alt="groom img">
                                    </div>
                                </div>
                            </div>
                            <h2 class="groom-name">Minh Siêu</h2>
                            <div class="text-center text-uppercase">
                                <strong>Nhà Trai</strong>
                            </div>
                            <hr>
                            <p>Lê Công Quát<br>Trần Thị Hảo</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2"></div>
                    <div class="col-md-5 col-sm-5">
                        <div class="bride-info center">
                            <div class="wrap-image">
                                <div class="b">
                                    <div class="p">
                                        <img class="bride-img" src="{{ URL::asset('user/Image/avaCD.jpg') }}" alt="bride img">
                                    </div>
                                </div>
                            </div>
                            <h2 class="bride-name">Bảo Chi</h2>
                            <div class="text-center text-uppercase">
                                <strong>Nhà Gái</strong>
                            </div>
                            <hr>
                            <p>Trần Thị Kim Dung<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="invite" class="content-wrap" style="background-image: url('{{ URL::asset('user/Image/bannerW.jpg') }}');" class="" data-stellar-background-ratio="0.5">
            <div class="invite-content">
                <div class="text-center">
                    <img src="https://endfa.vn/_endfatemplate/temp_13/images/icon-section.png" alt="icon">
                </div>
                <div class="text text-center">
                    <p>Kính mời bạn và người thương<br />Sự hiện diện của bạn là niềm hạnh phúc của chúng tôi</p>
                </div>
            </div>
        </div>
        <div id="wedding-info" class="content-wrap">
            <div class="wedding-info-wrap center">
                <div class="container wedding-info">
                    <div class="title-wrap">
                        <div class="menu-wrap">
                            <h3 class="menu">Lễ thành hôn được tổ chức</h3>
                            <div class="background-menu">
                                <div class="l1"></div>
                                <div class="l2"></div>
                                <div class="l3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wedding-info-item mt-5">
                        <div class="row">
                            <div class="col-md-6 order-md-1">
                                <div class="img-wrap wrap-image">
                                    <div class="b">
                                        <div class="p">
                                            <img src="" alt="Minh Siêu & Bảo Chi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-2 mt-3 mt-sm-0">
                                <div class="title">
                                    Nhà Trai
                                </div>
                                <div class="content">
                                    <p>
                                        <strong>
                                            10:30
                                            <br>
                                            Thứ Bảy, 22/05/2021
                                        </strong>
                                        <br>
                                        (Tức ngày 11.04 năm Tân Sửu)
                                    </p>
                                    <strong>Địa điểm tổ chức:</strong>
                                    <p>Tầng 3, Trung tâm <br>sự kiện & tiệc cưới CTM PLACE </p>
                                </div>
                                <div class="btn-map">
                                    <a href="" target="_blank" title="map">Xem bản đồ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wedding-info-item mt-5">
                        <div class="row">
                            <div class="col-md-6 order-md-2">
                                <div class="img-wrap wrap-image">
                                    <div class="b">
                                        <div class="p">
                                            <img src="" alt="Minh Siêu & Bảo Chi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-1 mt-3 mt-sm-0">
                                <div class="title">
                                    Nhà Gái
                                </div>
                                <div class="content">
                                    <p>
                                        <strong>
                                            10:30
                                            <br>
                                            Thứ Bảy, 22/05/2021
                                        </strong>
                                        <br>
                                        (Tức ngày 11.04 năm Tân Sửu)
                                    </p>
                                    <strong>Địa điểm tổ chức:</strong>
                                    <p>Tầng 3, Trung tâm <br>sự kiện & tiệc cưới CTM PLACE </p>
                                </div>
                                <div class="btn-map">
                                    <a href="" target="_blank" title="map">Xem bản đồ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="story" class="content-wrap">
            <div class="container">
                <div class="title-wrap text-center">
                    Chặng Đường Đã Qua
                </div>
                <div class="text-center">
                    <img src="https://endfa.vn/_endfatemplate/temp_13/images/icon-3-heart.png" alt="icon">
                </div>
                <div class="story-wrap clearfix">
                    <div class="col-md-12 col-xs-12">
                        <div class="wrapper-content">
                            <div class="item 1">
                                <div class="wrap-content-item">
                                    <div class="content">
                                        <div class="pic">
                                            <div class="pic-image">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="content-item">
                                            <h3>Lần Đầu Gặp Nhau</h3>
                                            <p class="time">10/01/2018</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item 2">
                                <div class="wrap-content-item">
                                    <div class="content">
                                        <div class="pic">
                                            <div class="pic-image">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="content-item">
                                            <h3>Lần Đầu Hẹn Hò</h3>
                                            <p class="time">26/02/2018</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item 3">
                                <div class="wrap-content-item">
                                    <div class="content">
                                        <div class="pic">
                                            <div class="pic-image">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="content-item">
                                            <h3>3 Năm Bên Nhau</h3>
                                            <p class="time">26/02/2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item 4">
                                <div class="wrap-content-item">
                                    <div class="content">
                                        <div class="pic">
                                            <div class="pic-image">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="content-item">
                                            <h3>Hạnh Phúc Mãi Mãi</h3>
                                            <p class="time">22/05/2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="heart-box">
                <div class="heart animate-topright"></div>
                <div class="heart animate-bottomright"></div>
                <div class="heart animate-topleft"></div>
                <div class="heart animate-bottomleft"></div>
                <div class="heart animate-up"></div>
                <div class="heart animate-down"></div>
                <div class="heart animate-left"></div>
                <div class="heart animate-right"></div>
            </div>
        </div>
        <div id="gallery" class="content-wrap">
            <div class="container">
                <div class="title-wrap text-center">
                    Kỉ Niệm
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme popup-gallery">
                        <div class="item-wrap">
                            <div class="pic-item">
                                <img class="img-fluid" src="" alt="Minh Siêu & Bảo Chi" />
                            </div>
                            <a class="view" href="" data-image="" title="Minh Siêu & Bảo Chi">
                            </a>
                        </div>
                        <div class="item-wrap">
                            <div class="pic-item">
                                <img class="img-fluid" src="" alt="Minh Siêu & Bảo Chi" />
                            </div>
                            <a class="view" href="" data-image="" title="Minh Siêu & Bảo Chi">
                            </a>
                        </div>
                        <div class="item-wrap">
                            <div class="pic-item">
                                <img class="img-fluid" src="" alt="Minh Siêu & Bảo Chi" />
                            </div>
                            <a class="view" href="" data-image="" title="Minh Siêu & Bảo Chi">
                            </a>
                        </div>
                        <div class="item-wrap">
                            <div class="pic-item">
                                <img class="img-fluid" src="" alt="Minh Siêu & Bảo Chi" />
                            </div>
                            <a class="view" href="" data-image="" title="Minh Siêu & Bảo Chi">
                            </a>
                        </div>
                        <div class="item-wrap">
                            <div class="pic-item">
                                <img class="img-fluid" src="" alt="Minh Siêu & Bảo Chi" />
                            </div>
                            <a class="view" href="" data-image="" title="Minh Siêu & Bảo Chi">
                            </a>
                        </div>
                        <div class="item-wrap">
                            <div class="pic-item">
                                <img class="img-fluid" src="" alt="Minh Siêu & Bảo Chi" />
                            </div>
                            <a class="view" href="" data-image="" title="Minh Siêu & Bảo Chi">
                            </a>
                        </div>
                        <div class="item-wrap">
                            <div class="pic-item">
                                <img class="img-fluid" src="" alt="Minh Siêu & Bảo Chi" />
                            </div>
                            <a class="view" href="" data-image="" title="Minh Siêu & Bảo Chi">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer text-center">
        <div class="images-bg" style="background-image: url('');">
        </div>
        <div class="container">
            <div class="footer-logo">
                <img src="https://endfa.vn/_endfatemplate/temp_13/images/icon-circle.png" alt="decor">
                <h6 class="title"><span>Minh Siêu</span> <span class="and-sym">&</span> <span>Bảo Chi</span></h6>
            </div>
            <h3>
                Cảm ơn mọi người đã đến dự đám cưới của chúng tôi. Chân thành cảm ơn!
            </h3>
            <div id="attend-wrap">
                <button type="button" class="btn btn-popup" data-toggle="modal" data-target="#attendModalCenter">
                    Đăng ký tham dự
                </button>
            </div>
            <div class="footer-copyright">
                <p>Copyright @ 2021 by <a href="#">LMS</a></p>
            </div>
        </div>
    </section>
    <div id="attend-form-wrap">
        <div class="modal fade" id="attendModalCenter" tabindex="-1" role="dialog" aria-labelledby="attendModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered vertical-align-center" role="document">
                <div class="wrapper-content-modal">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="title-form text-center">
                                Đăng Kí Tham Dự
                            </div>
                            <hr>
                            <p class="desc-form text-center">
                               Hãy cho chúng tôi biết<br>bạn sẽ đến chung vui nhé
                            </p>
                            <form action="{{ route('home.register') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputname" class="d-block w-100 text-center">Họ và Tên</label>
                                        <input id="inputname" type="text" class="d-block w-100" name="name" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputemail" class="d-block w-100 text-center">Email</label>
                                        <input id="inputemail" type="email" class="d-block w-100" name="email" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="attend-wrap">
                                    <h4>Bạn sẽ tham dự chứ?</h4>
                                    <label class="label-input">
                                        <input type="radio" name="attend" value="1" checked=""><span>Có, tôi sẽ tham dự</span>
                                    </label>
                                    <label class="label-input">
                                        <input type="radio" name="attend" value="0"><span>Xin lỗi, tôi không thể tham dự</span>
                                    </label>
                                </div>
                                <p>
                                    <textarea name="message" cols="40" rows="6" placeholder="Lời chúc"></textarea>
                                </p>
                                <div class="text-center">
                                    <!-- <input type="hidden" value="" name="nonce">
                                    <input type="hidden" value="" name="ajax_url">
                                    <input type="hidden" value="" name="post_id"> -->
                                    <input class="btn btn-submit" type="submit" value="Gửi">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://endfa.vn/_endfatemplate/temp_13/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="https://endfa.vn/_endfatemplate/temp_13/js/lib.js" type="text/javascript"></script>
    <script src="https://endfa.vn/_endfatemplate/temp_13/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="https://endfa.vn/_endfatemplate/temp_13/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://endfa.vn/_endfatemplate/temp_13/js/owl.carousel.js" type="text/javascript"></script>
    <script src="https://endfa.vn/_endfatemplate/temp_13/js/attend_script.js" type="text/javascript"></script>
    <script src="https://endfa.vn/_endfatemplate/temp_13/js/script.js" type="text/javascript"></script>
    <!-- <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, "script",
        "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "399570517572185");
    fbq("track", "PageView");
    </script>
    <!-- <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=399570517572185&ev=PageView&noscript=1" /></noscript>
    <div id="fb-root"></div> -->
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '2191618384445322',
            xfbml: true,
            version: 'v3.2'
        });
        FB.AppEvents.logPageView();
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-customerchat" attribution=setup_tool page_id="258490081679236" logged_in_greeting="B?n �ang xem Thiệp cưới (Wedding Invitation)" logged_out_greeting="Bạn đang xem thiệp cưới (Wedding Invitation)">
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129171871-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-129171871-1');
    </script> -->
</body>

</html>
