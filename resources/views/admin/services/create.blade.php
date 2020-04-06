@extends('layouts.adminTemplate')
@section('title', 'الخدمات')

@section('content')

    <h4 class="text-center">إضافة الخدمة</h4>
    <div class="hr-blue mb-3"></div>

    <div class="col-md-8 mx-auto">

    <form action="{{route('services.store')}}" method="post" class="text-right" enctype="multipart/form-data">
    @csrf

    <!--  name -->
        <div class="form-group">
            <label for="name">الاسم</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{old('name')}}" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <!--  description -->
        <div class="form-group">
            <label for="description">الوصف</label>
            <textarea cols="30" rows="10" id="description" name="description" class="form-control  @error('name') is-invalid @enderror" > {{old('description')}} </textarea>

            @error('description')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>


        <!--  img -->
        <div class="form-group">
            <label for="image" class="d-block">الصورة</label>
            <input id="image" type="file" name="image" class="border @error('image') is-invalid @enderror">
            @error('image')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

        </div>



        <!-- save btn -->
        <div class="form-group">
            <button type="submit" class="btn btn-info">إضافة</button>
        </div>
    </form>
    </div>
@endsection


