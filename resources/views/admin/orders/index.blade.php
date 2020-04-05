


@extends('layouts.adminTemplate')
@section('title', 'الطلبات')

@section('content')

    <div class="container">
        <h4 class="text-center">الطلبات</h4>
        <div class="hr-blue mb-3"></div>

        <!-- items table -->
        <div class="col-12 admin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive text-center mt-3">
                        <table class="table table-gray table-hover">
                            <thead>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الخدمة</th>
                            <th>التاريخ</th>
                            <th>عرض</th>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)

                                <!-- row for each item -->
                                <tr class="record">
                                    <td >{{$order->number}}</td>
                                    <td >{{$order->name}}</td>
                                    <td >{{$order->service}}</td>
                                    <td>{{ $order->created_at->format('d/m/Y') }}</td>

                                    <!-- Actions -->
                                    <td>

                                        <!-- view btn -->
                                        <a href="{{route('orders.show',$order['id'])}}" class=" mr-2"><i class="fa fa-eye text-warning"></i></a>
                                    </td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{$orders->render()}}
            </div>
        </div>

        </div>
    </div>

@endsection
