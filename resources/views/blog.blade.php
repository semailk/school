@extends('layouts.main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Our Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.blade.php">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Son xəbərlər<i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($news as $new)
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{route('get.new', $new->id)}}" class="block-20 d-flex align-items-end"
                           style="background-image: url({{url(asset(\Illuminate\Support\Facades\Storage::disk('s3')->url($new->img)))}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">{{$new->created_at}}</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="{{route('get.new', $new->id)}}">{{$new->title}}</a></h3>
                            <p>{{mb_strimwidth($new->content,0,100,'...Читать далее')}}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{route('get.new', $new->id)}}" class="btn btn-secondary">Read More<span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
            <div class="row no-gutters my-5">
                <div class="col text-center">
                    <div class="block-27">

                        <ul>
                            <li>{{$news->links()}}</li>
{{--                            <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>--}}
{{--                            <li class="active"><span>1</span></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
