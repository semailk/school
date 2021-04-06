@extends('layouts.main')
@section('content')
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('storage/' . $new->img)}}" width="430" height="250" alt="">
            </div>
            <div class="col-6">
                <h2>{{$new->title}}</h2>
                <p>{{$new->content}}</p>
            </div>
        </div>
    </div>

@endsection
