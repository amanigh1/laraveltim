@extends('layouts.adminTemplate')
@section('title', 'الخدمات')



@section('content')
    <div class="container">


        <div class="row service">
            <div class="col-md-12  mx-auto p-0">
                <div class="card  col-lg-3 mb-4" data-aos="zoom-out">
                    <img class="card-img-top" src="{{asset($service->image)}}"
                         alt="Card image cap">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark">{{$service->name}}</h5>
                        <p class="card-text mt-2">{{$service->description}}</p>
                        <div class="text-center">
                            <a class="btn btn-info mt-3" href="{{route('services.index')}}"> <i
                                    class="fas fa-arrow-left text-light pt-1"></i></a>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

@endsection
