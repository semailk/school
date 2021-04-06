@extends('layouts.main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Kurs qiyməti</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Ana səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span>Kurs qiyməti <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Xidmət </span>Qiymətləri</h2>
                    <p>Bir neçə ay əvvəldən bir ödəmə edin və endirim əldə edin.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Basic</h3>
                            <p><span class="price">30 Manat</span> <span class="per">/ 1 ay</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/icons/logo-price-1.png);"></div>
                        <div class="px-4">
                            <p>Aylıq standart kurs qiyməti.</p>
                        </div>
                        <p class="button text-center"><a href="{{route('contact-us')}}" class="btn btn-primary px-4 py-3">Kurs almaq</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Standard</h3>
                            <p><span class="price">80 Manat</span> <span class="per">/ 3ay</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/icons/logo-price-2.png);"></div>
                        <div class="px-4">
                            <p>Üç aylıq qiymət. 10 manat qənaət.</p>
                        </div>
                        <p class="button text-center"><a href="{{route('contact-us')}}" class="btn btn-secondary px-4 py-3">Kurs almaq</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light active pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Premium</h3>
                            <p><span class="price">150 Manat</span> <span class="per">/ 6ay</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/icons/logo-price-3.png);"></div>
                        <div class="px-4">
                            <p>Altı aylıq qiymət. 30 manat qənaət.</p>
                        </div>
                        <p class="button text-center"><a href="{{route('contact-us')}}" class="btn btn-tertiary px-4 py-3">Kurs almaq</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3">Platinum</h3>
                            <p><span class="price"> 300 Manat </span> <span class="per">/ 12ay</span></p>
                        </div>
                        <div class="img" style="background-image: url(images/icons/logo-price-4.png);"></div>
                        <div class="px-4">
                            <p>On iki aylıq qiymət. 60 manata qənaət.</p>
                        </div>
                        <p class="button text-center"><a href="{{route('contact-us')}}" class="btn btn-quarternary px-4 py-3">Kurs almaq</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
