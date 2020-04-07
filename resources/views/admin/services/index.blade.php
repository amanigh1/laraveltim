


@extends('layouts.adminTemplate')
@section('title', 'الخدمات')

@section('content')

    <div class="container">
        <h4 class="text-center">الخدمات</h4>
        <div class="hr-blue mb-3"></div>

        <!-- items table -->
        <div class="col-12 admin">
            <div class="card">

                <!-- add new service -->
                <div class="col-md-6 mt-3 mb-2 text-right">
                    <a href="{{route('services.create')}}">
                        <button class="btn btn-info"> + إضافة خدمة</button>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive text-center mt-3">
                        <table class="table table-gray table-hover">
                            <thead>
                            <th>الاسم</th>
                            <th>عرض / تعديل / حذف</th>
                            </thead>
                            <tbody>
                            @foreach( $services as  $service)

                                <!-- row for each item -->
                                <tr class="record">
                                    <td >{{ $service->name}}</td>
                                    <!-- Actions -->
                                    <td>

                                        <!-- view btn -->
                                        <a href="{{route('services.show', $service['id'])}}" class=" mr-2"><i class="fa fa-eye text-warning"></i></a>

                                        <!-- edit btn -->
                                        <a href="{{route('services.edit', $service->id)}}" class="text-dark mr-2"><i
                                                class="fa fa-edit"></i></a>

                                        <!-- delete form -->

                                            <a class="mr-2" href="{{route('services.destroy', $service->id)}}"
                                               onclick="event.preventDefault();

                                               Swal.fire({
                                               // title: 'Are you sure?',
                                               text: 'هل أنت متأكد من رغبتك في حذف خدمة {{$service->name}}؟',
                                               icon: 'warning',
                                               width: '300px',
                                               showCancelButton: true,
                                               confirmButtonColor: '#3085d6',
                                               cancelButtonColor: '#d33',
                                               confirmButtonText: 'حذف',
                                               cancelButtonText: 'إلغاء'
                                               }).then((result) => {
                                               if (result.value) {
                                               document.getElementById('delete-form{{$service->id}}').submit();
                                               }
                                               })


                                               ">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>

                                            <form id="delete-form{{$service->id}}" action="{{route('services.destroy', $service->id)}}" method="POST" style="display: none;">
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
                {{ $services->render()}}
            </div>
        </div>

    </div>


@endsection
