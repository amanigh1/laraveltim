@extends('layouts.adminTemplate')
@section('title', 'الطلبات')



@section('content')
    <div class="container order">
        <div class="card mx-auto mb-5 p-0 m-5">
            <div class="card-body ">
                <div class=" my-2 ">
                    <div class="goldish text-center">Order #{{ $order->number }}</div>
                </div>

                <table class=" ml-3 table table-sm table-borderless text-secondary">

                    <tr>
                        <td  class="goldish">الخدمة</td>
                        <td>{{$order->service}}</td>
                    </tr>
                    <tr>
                        <td  class="goldish">التاريخ</td>
                        <td>{{ $order->created_at->format('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <td  class="goldish">الاسم</td>
                        <td >{{$order->name}}</td>
                    </tr>
                    <tr>
                        <td  class="goldish">الإيميل</td>
                        <td>{{$order->email}}</td>
                    </tr>

                    <tr>
                        <td  class="goldish">رقم الجوال</td>
                        <td>{{ $order->mobile }}</td>
                    </tr>

                </table>

                <div class="hr-blue"></div>

        <div class="text-center">
            <a class="btn btn-outline-gold mt-3" href="{{route('orders.index')}}"><i class="fas fa-arrow-left"></i> العودة للطلبات</a>
        </div>
    </div>
@endsection
