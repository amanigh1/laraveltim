@extends('layouts.adminTemplate')
@section('title', 'الحسابات')

@section('content')
    <h4 class="text-center">تعديل الحساب</h4>
    <div class="hr-blue mb-3"></div>

    <div class="col-md-8 mx-auto">
    <form action="{{route('users.update', $user->id)}}" method="post" class="text-right">
    @csrf
    @method('PATCH')
    <!-- Edit user's name -->
        <div class="form-group">
            <label for="name">الإسم</label>
            <input type="text" id="name" name="name" class="form-control" @isset($user) value="{{$user->name}}" @endisset>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <!-- Edit user's email -->
        <div class="form-group">
            <label for="email">الإيميل</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" @isset($user) value="{{$user->email}}" @endisset>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <!-- Edit user's password -->
        <div class="form-group">
            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" class="form-control" >
        </div>


        <!-- edit btn -->
        <div class="form-group text-center">
            <button type="submit" class="btn btn-info">تعديل</button>
        </div>
    </form>
    </div>
@endsection

@section('script')

<script>
// To display file(img) name after choosing a file(img).
    $('#file_1').on('change',function(){
        //get the file name

        var fileName = $(this).val();
        var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(cleanFileName);
    })

</script>
@endsection
