@extends('layouts.main')
@section('content')
    <style>
        .images {
            transition: 0.3s;
        }

        .images:hover{
            transform: scale(1.1);
            z-index: 1;
        }
    </style>
<!--    --><?php //$images = $galleries->pluck('img')->collapse() ?>






<div class="container">
    <div class="row">
        @foreach($galleries->pluck('img')->collapse() as $image)
        <div class="col-md-3 mb-4 ftco-animate">
            <a href="{{asset(\Illuminate\Support\Facades\Storage::disk('s3')->url($image))}}" class="gallery image-popup img d-flex align-items-center"
               style="background-image: url({{url(asset('storage/' . $image))}});">
                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
            </a>
        </div>

{{--        <div class="col-md-4">--}}
{{--            <img class="images" src="{{asset('storage/' . $image)}}" width="100%" height="100%" alt="">--}}
{{--        </div>--}}
        @endforeach
    </div>
    {{$galleries->links()}}
</div>
@endsection
