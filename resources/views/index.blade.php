@extends('layouts.front')

@section('content')

    <!-- hero -->
    <header id="intro" class="hero" style="background-image: url({{asset('images/bg.jpg')}})">
        <div class="banner" >
            <h2 class="banner-title text-uppercase" data-aos="fade-right">A touch integrated marketing</h2>
            <a data-smooth="#about-us" href="#about-us" >
                <button data-aos="fade-up" class="btn btn-lg btn-info">إقرأ المزيد</button>
            </a>
        </div>
    </header>
    <!-- end of hero -->


    <!-- Main Layout -->
    <main>

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
                <div class="row">
                    <div class="card col-lg-3 mb-4" data-aos="zoom-out">
                        <img class="card-img-top" src="{{asset('images/services/social.png')}}" alt="Card image cap">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">إدارة حسابات التواصل</h5>
                            <p class="card-text mt-2">لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل
                                توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم</p>
                            <a href="#">
                                <button class="btn btn-lg btn-info mt-auto">إطلبها الآن</button>
                            </a>

                        </div>
                    </div>
                    <div class="card col-lg-3 mb-4" data-aos="zoom-out">
                        <img class="card-img-top" src="{{asset('images/services/video.png')}}" alt="Card image cap">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">المونتاج المرئي</h5>
                            <p class="card-text mt-2">لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل
                                توضع الفقرات في الصفحة التي يقرأها. </p>
                            <a href="#">
                                <button class="btn btn-lg btn-info mt-auto">إطلبها الآن</button>
                            </a>

                        </div>
                    </div>
                    <div class="card col-lg-3 mb-4" data-aos="zoom-out">
                        <img class="card-img-top" src="{{asset('images/services/design.png')}}" alt="Card image cap">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">التصميم الإبداعي</h5>
                            <p class="card-text mt-2">للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي"
                                فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء</p>
                            <a href="#">
                                <button class="btn btn-lg btn-info mt-auto">إطلبها الآن</button>
                            </a>

                        </div>
                    </div>
                    <div class="card col-lg-3 mb-4" data-aos="zoom-out">
                        <img class="card-img-top" src="{{asset('images/services/marketing.png')}}" alt="Card image cap">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">التسويق الرقمي</h5>
                            <p class="card-text mt-2">لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل
                                توضع الفقرات</p>

                            <a href="#">
                                <button class="btn btn-lg btn-info mt-auto">إطلبها الآن</button>
                            </a>
                        </div>
                    </div>
                </div>
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


    </main>

@endsection
