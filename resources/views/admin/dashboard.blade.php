@extends('layouts.adminTemplate')
@section('title', 'إحصاءات')

@section('content')

    <div class="container">
        <div class="mb-3 text-light">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-5 mr-md-2 bg-warning dash-box p-4 text-center">
                    <h5 class="col-12 text-center">طلبات اليوم</h5>
                    <h6 class=" badge badge-pill badge-danger px-2 pt-1 ml-1">{{$today_orders}} طلب </h6>
                </div>
            </div>
        </div>

        <div class="mb-3 text-light">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-5 mr-md-2 bg-info dash-box p-4 text-center">
                    <h5 class="col-12 text-center">طلبات الشهر</h5>
                    <h6 class=" badge badge-pill badge-danger px-2 pt-1 ml-1">{{$month_orders}} طلب </h6>
                </div>
            </div>
        </div>


        <div class="mb-3 text-light">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-5 mr-md-2 bg-dark dash-box p-4 text-center">
                    <h5 class="col-12 text-center">إجمالي الطلبات </h5>
                    <h6 class=" badge badge-pill badge-danger px-2 pt-1 ml-1">{{$full_orders}} طلب </h6>
                </div>
            </div>
        </div>

    </div>

@endsection
