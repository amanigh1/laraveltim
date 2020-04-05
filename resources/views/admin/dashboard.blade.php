


@extends('layouts.adminTemplate')
@section('title', 'إحصاءات اليوم')

@section('content')

<div class="container">
    <h4 class="text-center">إحصاءات اليوم</h4>
    <div class="hr-blue mb-3"></div>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-5 mr-md-2 bg-warning dash-box d-flex align-items-center justify-content-center text-dark">
            <span class="today-count bg-danger rounded-circle px-2 pt-1 ml-1 text-light">{{$today_orders}}</span>
          <span class="mt-1">طلب جديد</span>
        </div>
    </div>
</div>

@endsection
