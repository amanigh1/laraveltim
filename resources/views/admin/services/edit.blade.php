@extends('layouts.adminTemplate')
@section('title', 'الخدمات')

@section('content')
    <h4 class="text-center">تعديل الخدمة</h4>
    <div class="hr-blue mb-3"></div>

    <div class="col-md-8 mx-auto">
        <form action="{{route('services.update',  $service->id)}}" method="post" class="text-right" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <!-- Edit name -->
            <div class="form-group">
                <label for="name">الإسم</label>
                <input type="text" id="name" name="name" class="form-control" @isset( $service) value="{{ $service->name}}" @endisset>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <!-- Edit description -->
            <div class="form-group">
                <label for="description">الوصف</label>
                <textarea cols="30" rows="10" id="description" name="description" class="form-control" >@isset( $service) {{ $service->description}} @endisset</textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <!-- Edit image -->
            <div class="form-group">
                <label for="image" class="d-block">الصورة</label>
                <input id="image" type="file" name="image" class=" border @error('image') is-invalid @enderror">
                @error('image')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

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

