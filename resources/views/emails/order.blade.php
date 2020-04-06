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

    <!-- css file -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

</head>

<body>
<div class="container order mt-5 pt-2 text-center">

    <!-- logo -->
    <div class="col-md-4 mx-auto py-5">

        <img src="{{asset('images/logo.png')}}" alt="logo" height="80">


    </div>

    <h4 class="text-center">طلب رقم {{ $number }}</h4>
    <div class="hr-blue mb-4"></div>
    <div class="col-md-10 mx-auto p-0">
        <div class="card p-0 m-0 w-100 mx-auto" >
            <div class="card-body  bg-light w-100">

                <table class=" table table-sm table-borderless text-secondary w-75 mx-auto text-center">

                    <tr>
                        <td class="text-dark  ">الخدمة</td>
                        <td class=" ">{{$service}}</td>
                    </tr>
                    <tr>
                        <td class="text-dark  ">التاريخ</td>
                        <td class=" ">{{ $date }}</td>
                    </tr>
                    <tr>
                        <td class="text-dark  ">الاسم</td>
                        <td class=" ">{{$name}}</td>
                    </tr>
                    <tr>
                        <td class="text-dark  ">الإيميل</td>
                        <td class=" "><a href="mailto:{{$email}}">{{$email}}</a></td>
                    </tr>

                    <tr>
                        <td class="text-dark  ">الجوال</td>
                        <td class=" ">{{ $mobile }}</td>
                    </tr>

                </table>
            </div>

        </div>


    </div>
</div>


</body>

</html>
