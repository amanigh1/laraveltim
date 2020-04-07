
@extends('layouts.front')

@section('content')

    <!-- hero -->
    <header id="intro" class="hero" style="background-image: url({{asset('images/bg.jpg')}})">
        <div class="banner">
            <h2 class="banner-title text-uppercase" data-aos="fade-right">A touch integrated marketing</h2>
            <a data-smooth="#about-us" href="#about-us">
                <button data-aos="fade-up" class="btn btn-lg btn-info">إقرأ المزيد</button>
            </a>
        </div>
    </header>
    <!-- end of hero -->


    <!-- Main Layout -->


        <!--   about us     -->
        <section id="about-us" class=" padding">
            <div class="container">
                <div class="section-title">
                    <h2>
                        من نحن</h2>
                    <hr class="hr-blue">
                </div>
                <div class="row" data-aos="fade-left">
                    <div class="text-right grey-text px-5">
                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم
                            إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي،
                            هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي
                            وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال
                            "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى
                            السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد
                            كإدخال بعض العبارات الفكاهية إليها.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--   end about us     -->


        <!--   mission & vision     -->

        <section id="mission" class=" padding">
            <div class="container">
                <div class="section-title">
                    <h2>رسالتنا ورؤيتنا</h2>
                    <hr class="hr-blue">
                </div>
                <div class="row overlay icons">
                    <div class="col-md-6  p-3 " data-aos="fade-left">
                        <div class="icon-div">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="text-right grey-text px-5">
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
                                لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضا.</p>
                        </div>
                    </div>

                    <div class="col-md-6 p-3 " data-aos="fade-right">
                        <div class="icon-div">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="text-right grey-text px-5">
                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
                                لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً.</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--   end mission & vision     -->

        <!-- Section: Our Services -->
        <section id="services" class=" padding">
            <div class="container">
                <div class="section-title">
                    <h2>خدماتنا</h2>
                    <hr class="hr-blue">
                </div>
                @if($services)
                    <div class="row service">
                        @foreach($services as $service)
                            <div class="card  col-lg-3 mb-4" data-aos="zoom-out">
                                <img class="card-img-top" src="{{asset($service->image)}}"
                                     alt="Card image cap">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{$service->name}}</h5>
                                    <p class="card-text mt-2">{{$service->description}}</p>
                                    <a href="{{route('service_form', $service->id )}}">
                                        <button class="btn btn-lg btn-info mt-auto">اطلبها الآن</button>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @endif
            </div>
        </section>
        <!-- Section: Our Services -->

        <!--   contact     -->

        <section id="contact" class=" padding">
            <div class="container">
                <div class="section-title">
                    <h2>تواصل معنا</h2>
                    <hr class="hr-blue">
                </div>


                <!-- Grid column -->
                <div class="row d-flex justify-content-center" data-aos="fade-up">
                    <a href="#" class="fa fa-twitter"></a>

                    <a href="#" class="fa fa-instagram"></a>

                    <a href="mailto:amanighanem11@gmail.com" class="fa fa-envelope"></a>
                </div>

                <!-- Grid column -->


            </div>
        </section>
        <!--   end contact     -->




@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>

        @if(session('order_received'))
        Swal.fire({
            title: '<span class="goldish">شكرًا {{session('order_received')}}</span>',
            html: 'تم استلام طلبكم رقم {{session("order_id")}} بنجاح، وسيتم التّواصل معكم قريبًا.',
            icon: 'success',
            width: '300px',
            backdrop: 'rgba(0,0,0,.8)',
            confirmButtonText: 'تم',
        });
    @endif

    @if(session('logout'))
    Swal.fire({
        position: 'center',
        width: '300px',
        icon: 'success',
        html: 'تم تسجيل الخروج بنجاح',
        showConfirmButton: false,
        timer: 3000
    })
        @endif
</script>
@endsection
