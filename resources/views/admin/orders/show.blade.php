@extends('layouts.adminTemplate')
@section('title', 'الطلبات')



@section('content')
    <div class="container order">

        <h4 class="text-center">طلب رقم {{ $order->id }}</h4>
        <div class="hr-blue mb-4"></div>
        <div class="col-md-10 mx-auto p-0">
            <div class="card p-0 m-0 w-100 mx-auto" >
                <div class="card-body  bg-light w-100">

                    <table class=" table table-sm table-borderless text-secondary w-75 mx-auto text-center">

                        <tr>
                            <td class="text-dark  ">الخدمة</td>
                            <td class=" ">{{$order->service}}</td>
                        </tr>
                        <tr>
                            <td class="text-dark  ">التاريخ</td>
                            <td class=" ">{{ $order->created_at->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <td class="text-dark  ">الاسم</td>
                            <td class=" ">{{$order->name}}</td>
                        </tr>
                        <tr>
                            <td class="text-dark  ">الإيميل</td>
                            <td class=" "><a href="mailto:{{$order->email}}">{{$order->email}}</a></td>
                        </tr>

                        <tr>
                            <td class="text-dark  ">الجوال</td>
                            <td class=" ">{{ $order->mobile }}</td>
                        </tr>

                    </table>
                </div>
                <div class="text-center">
                    <a class="btn btn-info mt-3" href="{{route('orders.index')}}"> <i
                            class="fas fa-arrow-left text-light pt-1"></i></a>
                </div>
            </div>


        </div>
    </div>
@endsection
