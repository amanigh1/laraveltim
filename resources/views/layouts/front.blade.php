<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <title>TIM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="70">
<div class="se-pre-con" style=" background: url({{asset('images/loader.png')}}) center no-repeat #ffffff;"></div>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top  bg-dark">
    <a class="navbar-brand" data-smooth="#intro" href="/#intro"> <img src="{{asset('images/logo.png')}}" alt="logo"> </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav" type="button" name="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav ml-auto smooth-scroll text-center">
            <li class="nav-item"><a class="nav-link " data-smooth="#about-us" href="/#about-us">من نحن</a></li>
            <li class="nav-item"><a class="nav-link" data-smooth="#mission" href="/#mission">رسالتنا ورؤيتنا</a></li>
            <li class="nav-item"><a class="nav-link" data-smooth="#services" href="/#services">خدماتنا</a></li>
            <li class="nav-item"><a class="nav-link" data-smooth="#contact" href="/#contact">تواصل معنا</a></li>
        </ul>
    </div>
</nav>

<main>
@yield('content')
</main>
<!-- Footer -->
<footer class="page-footer font-small bg-dark ">

    <!-- Footer Links -->
    <div class="container text-center">

        <!-- Grid row -->
        <div class="row mt-3" data-aos="fade-up">

            <!-- logo -->
            <div class="col-md-4 mx-auto py-3">

                <a data-smooth="#intro" href="/#intro"> <img src="{{asset('images/logo.png')}}" alt="logo" height="80"> </a>


            </div>
            <!-- end logo -->


        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center small  py-3 mt-1">

        جميع الحقوق محفوظة ©
        <a data-smooth="#intro" href="#intro" class="pl-2">TIM</a>

        <script type="text/javascript">
            document.write(new Date().getFullYear());
        </script>

    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

@yield('script')

<script>
    $(window).load(function () {
// Animate loader off screen
        $(".se-pre-con").fadeOut("slow");

    });

    $(document).ready(function () {



        // smooth scroll
        var TopOffset = 65;

        $('a[data-smooth]').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - TopOffset
                    }, 1000);
                    return false;
                }
            }
        });


    });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
    });
</script>
</body>

</html>

