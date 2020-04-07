


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
                            <th> عرض / حذف</th>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)

                                <!-- row for each item -->
                                <tr class="record">
                                    <td >{{$order->id}}</td>
                                    <td >{{$order->name}}</td>
                                    <td >{{$order->service}}</td>
                                    <td>{{ $order->created_at->format('d/m/Y') }}</td>

                                    <!-- Actions -->
                                    <td>

                                        <!-- view btn -->
                                        <a href="{{route('orders.show',$order['id'])}}" class=" mr-2"><i class="fa fa-eye text-warning"></i></a>

                                        <!-- delete form -->

                                        <a class="mr-2" href="{{route('orders.destroy', $order['id'])}}"
                                           onclick="event.preventDefault();

                                               Swal.fire({
                                               // title: 'Are you sure?',
                                               text: 'هل أنت متأكد من رغبتك في حذف الطلب رقم {{$order['id']}}؟',
                                               icon: 'warning',
                                               width: '300px',
                                               showCancelButton: true,
                                               confirmButtonColor: '#3085d6',
                                               cancelButtonColor: '#d33',
                                               confirmButtonText: 'حذف',
                                               cancelButtonText: 'إلغاء'
                                               }).then((result) => {
                                               if (result.value) {
                                               document.getElementById('delete-form{{$order["id"]}}').submit();
                                               }
                                               })


                                               ">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>

                                        <form id="delete-form{{$order['id']}}" action="{{route('orders.destroy', $order['id'])}}" method="POST" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>
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


@endsection
