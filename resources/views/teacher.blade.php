@extends('layouts.main')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Müəllim</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Ana səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span>Müəllim <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{url(asset('../images/teacher/Ruslan-teacher.jpg'))}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Ruslan Əliyev</h3>
								<span class="position mb-2">Müəllim</span>
								<div class="faded">
									<p>Veb proqramçısı.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
                    <div class="col-md-6 ml-5 text-dark">
                      <p>  Hamını salamlayıram, adım Ruslan Əliyevdir. 26 yaşım var və təxminən 4 ildir ki,
                        proqram edirəm. Orta məktəbi və universiteti Ukraynada bitirdim.
                        Mən veb sayt geliştiricisiyəm. Məqsədim uşaqlara özlərimin bildiklərimi öyrətmək və həyatda xəyallarına belə gətirə bilmədikləri peşəni verməkdir.
                        Bu peşədə əsas şey öyrənmək və inkişaf etmək arzusudur. Mən sənin müəllimin və böyük qardaşın olacağam.
                        Azərbaycan ərazisində sizə öyrətəcəyim şeylər sizə öyrədilməyəcəkdir. Bakıda kurslar 120 manatdan başlayır,
                        amma orada sənə bir şey öyrədəcəklərini söyləməyəcəm, amma zəmanət verirəm ki, sizə dərs verəcəyəm və planınıza sadiq qalsanız,
                        o zaman mütləq böyük zirvələrə çatacaqsınız. Kompüterlərə necə girəcəyinizi, çox pul alacağınız kompleks veb saytlar yaratmağı
                        öyrənəcəksiniz. Düşünürəm ki, düzgün seçim edəcək və bütün dünyanın ehtiyac duyduğu proqramçılar ailəsinin bir hissəsi olacaqsan.
                      </p>
                    </div>
				</div>
			</div>
		</section>
@endsection
