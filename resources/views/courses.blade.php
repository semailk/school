@extends('layouts.main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Courses</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.blade.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section">
			<div class="container">
				<div class="row">
                    @foreach($courses as $course)
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url({{url(asset(\Illuminate\Support\Facades\Storage::disk('s3')->url($course->img)))}}); background-size: auto;"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">{{$course->title}}</a></h3>
{{--							<p class="subheading"><span>Class time:</span> 9:00am - 10am</p>--}}
							<p>{{mb_strimwidth($course->content, 0,100, '...Daha çox oxu')}}}}</p>
                            <a href="{{route('get.course',$course->id)}}"> <button class="btn btn-primary">Daha çox oxu</button></a>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>
@endsection
