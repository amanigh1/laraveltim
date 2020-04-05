@extends('layouts.front')

@section('content')

    <div class="container margin text-right d-flex justify-content-center">

        <div class="col-md-6">
            <h4 class="text-center">نأمل تعبئة النموذج أدناه:</h4>
            <hr class="hr-blue mb-5">

            <form action="{{route('orders.store')}}" method="post">
            @csrf

            <!-- Service name -->
                <div class="form-group">
                    <label for="service">الخدمة</label>
                    <input type="text" id="service" name="service" class="form-control disabled" value="{{$service->name}}">
                </div>


                <!-- name -->
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{old('name')}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <!-- email -->
                <div class="form-group">
                    <label for="email">الإيميل</label>
                    <input type="email" id="email" name="email"
                           class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <!-- mobile -->
                <div class="form-group">
                    <label for="mobile">رقم الجوال</label>
                    <div class="input-group mb-2" dir="ltr">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+966</div>
                        </div>
                        <input type="tel" maxlength="10" id="mobile" name="mobile"
                               class="form-control @error('mobile') is-invalid @enderror" placeholder="5XXXXXXXX"
                               value="{{old('mobile')}}">
                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <!-- save btn -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info"> إرسال <i class="fa fa-paper-plane"></i></button>
                </div>
            </form>

        </div>
    </div>
@endsection
