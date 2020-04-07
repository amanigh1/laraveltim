<!doctype html>
<html lang="ar" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel')}} | @yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>
<div class="se-pre-con" style=" background: url({{asset('images/loader1.gif')}}) center no-repeat #091315;"></div>
<div class="d-flex" id="wrapper" dir="ltr">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
        <a href="{{url('/')}}">
            <div class="sidebar-heading border-bottom text-info"><img src="{{asset('images/logo.png')}}" alt="logo"
                                                                      width="100"></div>
        </a>
        <div class="list-group list-group-flush">
            <a href="{{url('/adminpanel')}}"
               class="list-group-item list-group-item-action {{ Request::is('adminpanel') ? 'active' : '' }}">إحصاءات
                </a>
            <a href="{{url('/adminpanel/orders')}}"
               class="list-group-item list-group-item-action {{ Request::is('adminpanel/orders') ? 'active' : '' }}">الطلبات</a>
            <a href="{{url('/adminpanel/services')}}"
               class="list-group-item list-group-item-action {{ Request::is('adminpanel/services') ? 'active' : '' }}">الخدمات</a>
            <a href="{{url('/adminpanel/users')}}" class="list-group-item list-group-item-action {{ Request::is('adminpanel/users') ? 'active' : '' }}">الحسابات</a>
        </div>
    </div>

    <!-- sidebar-wrapper -->
    <div id="page-content-wrapper">

        <nav class="navbar ">
            <button class="btn mb-1 rounded-0" id="menu-toggle"><i class="fas fa-bars fa-2x text-dark"></i></button>

            <li class="ml-auto">
                <a class="nav-link text-dark d-block" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();

                       Swal.fire({
                       // title: 'Are you sure?',
                       text: 'هل أنت متأكد من رغبتك في تسجيل الخروج؟',
                       icon: 'warning',
                       width: '300px',
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'تسجيل الخروج',
                       cancelButtonText: 'إلغاء'
                       }).then((result) => {
                       if (result.value) {
                       document.getElementById('logout-form').submit();
                       }
                       })


                       ">
                    {{Auth::user()->name}} <i class="fas fa-power-off text-danger"></i>
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-content-wrapper">


            <div class="container mt-5" dir="rtl">
                @yield('content')
            </div>

        </div>
        <!-- Footer -->
        <footer class="page-footer font-small " dir="rtl">


            <!-- Copyright -->
            <div class="footer-copyright text-center small py-3 mt-1">

                جميع الحقوق محفوظة ©
                <a data-smooth="#intro" href="#intro" class="pl-2 text-info">TIM</a>

                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script>

            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>

</div>




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- Font Awesome-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"
        integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@yield('script')


<script>

    @if(session('order_created'))
    Swal.fire({
        position: 'center',
        icon: 'success',
        html: 'Order #{{session('order_created')}} has been successfully created.',
        height: '10px',
        showConfirmButton: false,
        timer: 3000
    });
    @endif



    @if(session('user_created'))

    Swal.fire({
        position: 'center',
        icon: 'success',
        html: 'تم إضافة المستخدم بنجاح',
        height: '10px',
        showConfirmButton: false,
        timer: 3000
    });
    @endif

    @if(session('user_deleted'))

    Swal.fire({
        position: 'center',
        icon: 'success',
        html: 'تم حذف المستخدم بنجاح',
        height: '10px',
        showConfirmButton: false,
        timer: 3000
    });
    @endif

    @if(session('order_deleted'))

    Swal.fire({
        position: 'center',
        icon: 'success',
        html: 'تم حذف الطلب بنجاح',
        height: '10px',
        showConfirmButton: false,
        timer: 3000
    });
    @endif

    // services

    @if(session('service_created'))

    Swal.fire({
        position: 'center',
        icon: 'success',
        html: 'تم إضافة الخدمة بنجاح',
        height: '10px',
        showConfirmButton: false,
        timer: 3000
    });
    @endif

    @if(session('service_deleted'))

    Swal.fire({
        position: 'center',
        icon: 'success',
        html: 'تم حذف الخدمة بنجاح',
        height: '10px',
        showConfirmButton: false,
        timer: 3000
    });
    @endif


    @if(session('service_edited'))

    Swal.fire({
        position: 'center',
        icon: 'success',
        html: 'تم تعديل الخدمة بنجاح',
        height: '10px',
        showConfirmButton: false,
        timer: 3000
    });
    @endif


</script>

<script>

    $(window).load(function () {
// Animate loader off screen
        $(".se-pre-con").fadeOut("slow");

    });

    // Menu Toggle Script
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    // Search
    $('input[name=quick-finder]').bind('keyup', function () {
        let val = $(this).val().toLowerCase();
        $('.record').hide();

        $('.record').each(function () {
            let text = $(this).text().toLowerCase();
            if (text.indexOf(val) != -1) {
                $(this).show();
            }
        })

    });

</script>

</body>

</html>
