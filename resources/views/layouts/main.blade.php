<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kiddos - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('../css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('../css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('../css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('../css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('../css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('../css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
</head>
<body>
<div class="py-2 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-4 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center">
                            <img src="../images/icons/logo-main.png" alt="" width="40"></div>
                        <span class="text">House of Skills</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center">
                            <img src="../images/icons/logo-email.png" alt="" width="40"></div>
                        <span class="text">my.house.of.skill@gmail.com</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><img src="../images/icons/logo-phone.png" width="40" alt=""></div>
                        <span class="text">+ 994 55 243 57 87</span>
                    </div>
                    <div class="col-md-3 pr-4 d-flex topper align-items-center">
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <img style="border-radius: 30%" src="{{asset(\Illuminate\Support\Facades\Storage::disk('s3')->url(Auth::user()->img))}}" width="40"
                                 alt="">
                            <a href="{{route('userInformation', \Illuminate\Support\Facades\Auth::id())}}"><h6
                                    class="ml-3 text-dark">Haqqımda məlumat</h6></a>
                            <h6><a class="ml-3 text-white" href="{{route('logout')}}">Logout</a></h6>
                        @else
                            <a href="{{route('register')}}" class="ml-3 text-white">Register</a>
                            <a href="{{route('login')}}" class="ml-3 text-white">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="{{route('index')}}"><span style="color: red">House</span> of Skills</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('index')}}" class="nav-link pl-0">Ana səhifə</a></li>
                <li class="nav-item"><a href="{{route('teacher')}}" class="nav-link">Müəllim</a></li>
                <li class="nav-item"><a href="{{route('courses')}}" class="nav-link">Kurslar</a></li>
                <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link">Kurs qiyməti</a></li>
                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Qalereya</a></li>
                <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Bizimlə əlaqə</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 ">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2  text-center">Hələ suallarınız varmı?</h2>
                    <div class="block-23 mb-3 text-center">
                        <a  href="{{route('contact-us')}}" class="btn btn-warning ">Davam edin və sual verin</a>
                        {{--                        <ul>--}}
                        {{--                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span>--}}
                        {{--                            </li>--}}
                        {{--                            <li><a href="#"><span class="icon icon-phone"></span><span--}}
                        {{--                                        class="text">+2 392 3929 210</span></a></li>--}}
                        {{--                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <h1 class="ftco-heading-2 text-white">Connect With Us</h1>
                {{--                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">--}}
                <ul class="d-flex" style="list-style-type: none;padding-left: 0;">
                    <li style="display: block; margin-left: auto; margin-right: auto" class="ftco-animate"><a href="https://tele.click/semailk"><img src="../images/icons/telegram.png"
                                                                                       alt="" width="47" height="47"></a>
                    </li>
                    <li style="display: block; margin-left: auto; margin-right: auto" class="ftco-animate"><a href="https://vk.com/id15341621"><img src="../images/icons/vk.png" alt=""
                                                                                      width="47" height="47"></a></li>
                    <li style="display: block; margin-left: auto; margin-right: auto" class="ftco-animate"><a href="https://www.instagram.com/semailk"><img
                                src="../images/icons/instagram.png" alt="" width="50" height="50"></a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4 text-center">
                    <h2 class="ftco-heading-2">Əsas menyu</h2>
                    <ul  class="list-unstyled">
                        <li class="nav-item active"><a href="{{route('index')}}" class="nav-link pl-0">Ana səhifə</a></li>
                        <li class="nav-item"><a href="{{route('teacher')}}" class="nav-link">Müəllim</a></li>
                        <li class="nav-item"><a href="{{route('courses')}}" class="nav-link">Kurslar</a></li>
                        <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link">Kurs qiyməti</a></li>
                        <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Qalereya</a></li>
                        <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Bizimlə əlaqə</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        {{--            <div class="col-md-6 col-lg-3">--}}
        {{--                <div class="ftco-footer-widget mb-5">--}}
        {{--                    <h2 class="ftco-heading-2">Recent Blog</h2>--}}
        {{--                    <div class="block-21 mb-4 d-flex">--}}
        {{--                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>--}}
        {{--                        <div class="text">--}}
        {{--                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>--}}
        {{--                            <div class="meta">--}}
        {{--                                <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>--}}
        {{--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>--}}
        {{--                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="block-21 mb-5 d-flex">--}}
        {{--                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>--}}
        {{--                        <div class="text">--}}
        {{--                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>--}}
        {{--                            <div class="meta">--}}
        {{--                                <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>--}}
        {{--                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>--}}
        {{--                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="ftco-footer-widget mb-5">--}}



            {{--            <div class="col-md-6 col-lg-3">--}}
            {{--                <div class="ftco-footer-widget mb-5">--}}
            {{--                    <h2 class="ftco-heading-2">Subscribe Us!</h2>--}}
            {{--                    <form action="#" class="subscribe-form">--}}
            {{--                        <div class="form-group">--}}
            {{--                            <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">--}}
            {{--                            <input type="submit" value="Subscribe" class="form-control submit px-3">--}}
            {{--                        </div>--}}
            {{--                    </form>--}}
            {{--                </div>--}}


    <div class="row">
        <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                House of Skills &copy;<script>document.write(new Date().getFullYear());</script>
                Proqramlaşdırma Kursu 2021 <i class="icon-heart" aria-hidden="true"></i> by <a
                    href="{{route('index')}}" target="_blank">Ruslan Aliyev</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>

</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
{{--<script src="js/jquery.animateNumber.min.js"></script>--}}
<script src="js/scrollax.min.js"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>--}}
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
