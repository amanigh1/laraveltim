@extends('layouts.adminTemplate')
@section('title', 'الحسابات')

@section('content')

    <h4 class="text-center">إنشاء حساب</h4>
    <div class="hr-blue mb-3"></div>

<div class="col-md-8 mx-auto">
    <form action="{{route('users.store')}}" method="post" class="text-right">
        @csrf

        <!-- new user's name -->
        <div class="form-group">
            <label for="name">الاسم</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

            <!-- new user's email -->
        <div class="form-group">
            <label for="email">الإيميل</label>
            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

            <!-- new user's password -->
        <div class="form-group">
            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" >
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>


            <!-- add btn -->
        <div class="form-group text-center">
                <button class="btn btn-info mt-3"> إضافة مستخدم</button>
        </div>
    </form>
</div>
@endsection

@section('script')

@endsection
