@extends('layouts.main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Bizimlə əlaqə saxlayın</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Ana səhifə <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Bizimlə əlaqə saxlayın <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Ünvan</h3>
                        <p>
                            Avtomobil zavodu, son dayanacaq avtobus 20. Bina 11 mənzil 7
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Nömrə:</h3>
                        <p><a href="tel://1234567920"> +994 55 243 57 87</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Email Address</h3>
                        <p>my.house.of.skill@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">watsap</h3>
                        <p>+380931418490</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{route('contact.us.save')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input required name="first_name" type="text" class="form-control" placeholder="Ad">
                        </div>
                        <div class="form-group">
                            <input required name="last_name" type="text" class="form-control" placeholder="Soyad">
                        </div>
                        <div class="form-group">
                            <input required name="phone" type="number" class="form-control" placeholder="Telefon nömrəsi">
                        </div>
                        <div class="form-group">
                            <textarea required name="message" id="" cols="30" rows="7" class="form-control"
                                      placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    @if(session('success'))
                        <div class="alert-success">
                            {{session('success')}}
                        </div>
                        @endif
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.1465567274035!2d46.364695415731354!3d40.64110844988574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDM4JzI4LjAiTiA0NsKwMjInMDAuOCJF!5e1!3m2!1sru!2s!4v1617471625295!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
