@extends('layouts.adminTemplate')
@section('title', 'الحسابات')

@section('content')


    <div class="container">
        <h4 class="text-center">الحسابات</h4>
        <div class="hr-blue mb-3"></div>


        <div class="col-12 admin">
            <div class="card">

                <!-- add new user -->
                <div class="col-md-6 mt-3 mb-2 text-right">
                    <a href="{{route('users.create')}}">
                        <button class="btn btn-info"> + إضافة حساب</button>
                    </a>
                </div>

                <div class="card-body">

                    <!-- categories tables -->
                    <div class="table-responsive text-center table-hover">
                        <table class="table table-gray">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>الإيميل</th>
                                <th>تعديل / حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr class="record">
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>

                                    <!-- Actions -->
                                    <td>

                                        <!-- edit btn -->
                                        <a href="{{route('users.edit', $user->id)}}" class="text-dark mr-2"><i
                                                class="fa fa-edit"></i></a>

                                        <!-- delete form -->
                                        @if(auth()->id() != $user->id)
                                        <a class="mr-2" href="{{route('users.destroy', $user->id)}}"
                                           onclick="event.preventDefault();

                                               Swal.fire({
                                               // title: 'Are you sure?',
                                               html: 'هل أنت متأكد من رغبتك في حذف هذا المستخدم' +
                                               '<br>' +
                                               '{{$user->name}}',
                                               icon: 'warning',
                                               width: '300px',
                                               showCancelButton: true,
                                               confirmButtonColor: '#3085d6',
                                               cancelButtonColor: '#d33',
                                               confirmButtonText: 'حذف',
                                               cancelButtonText: 'إلغاء'
                                               }).then((result) => {
                                               if (result.value) {
                                               document.getElementById('delete-form').submit();
                                               }
                                               })


                                               ">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>

                                        <form id="delete-form" action="{{route('users.destroy', $user->id)}}" method="POST" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        @else
                                            <i class="fa fa-trash text-secondary mr-2"></i>
                                        @endif
                                    </td>

                                </tr>

                            @empty
                                <p>There are no categories yet.</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{$users->render()}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>


        @if(session('edit_user'))
        Swal.fire({
            position: 'center',
            width: '300px',
            icon: 'success',
            html: 'تم تحديث بيانات المستخدم بنجاح',
            showConfirmButton: false,
            timer: 3000
        })
        @endif
    </script>
@endsection
