@extends('layouts.main')
@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                     data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">İstənilən yaşda <span>proqramlaşdırmaya başlayın</span></h1>
{{--                        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                     data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Fikrinizdəki hamıdan fərqli olun <span>Unikal olun</span></h1>
{{--                        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                     data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Bir peşə öyrən<span> Hər ölkənin ehtiyac duyduğu şey</span></h1>
{{--                        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-services ftco-no-pb">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            {{--                            <span class="flaticon-teacher"></span>--}}
                            <img src="../images/icons/laravel.png" width="140" height="140">

                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">LARAVEL</h3>
                            <p>Laravel veb saytının sürətli inkişafı üçün hazırlanmış populyar bir PHP veb
                                çərçivəsidir.</p>
                            <p> Mürəkkəb çərçivələrin böyük gücünü minimum yazı konfiqurasiyası ilə kod yazma asanlığı
                                ilə birləşdirir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="../images/icons/php.png" width="140" height="140">
                            {{--                            <span class="flaticon-reading"></span>--}}
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">PHP</h3>
                            <p>Bu yeni başlayanlar üçün PHP və MySQL proqramlaşdırma kursudur. PHP-nin əsaslarını necə
                                effektiv öyrənəcəyinizi və peşəkar veb saytları sıfırdan necə yaratmağı
                                öyrənəcəksiniz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="../images/icons/html5.png" width="140" height="140">
                            {{--                            <span class="flaticon-books"></span>--}}
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">HTML5</h3>
                            <p>HTML veb səhifələrin düzülüşündə istifadə olunur. Brauzer HTML dilini işləyir, nəticədə
                                ekranda rahat bir mətn formatı görünür.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="../images/icons/css3.png" width="140" height="140">
                            {{--                            <span class="flaticon-diploma"></span>--}}
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">CSS3</h3>
                            <p>CSS veb səhifəni tərtib etmək üçün istifadə olunur. Rənglər, şriftlər, blok yerləşdirmə -
                                hamısı CSS ilə özelleştirilebilir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                    <div class="text px-4 ftco-animate">
                        <h2 class="mb-4">Niyə indi proqramlaşdırma öyrənmək lazımdır?</h2>
                        <p>İT sahəsinin sürətlə böyüməsi və proqram inkişaf etdiricilərinin çatışmazlığı səbəbindən
                            institutda proqramçı kimi işə başlaya bilərsiniz. 2-3 kursdan kiçik inkişafçı kimi işə
                            düzələ və karyera pilləkənləri ilə irəliləməyə başlaya bilərsiniz. Və eyni zamanda 30-50 min
                            rubl tələbəyə layiq bir maaş al.

                            Proqramçılar özləri hər addımın müddətini belə qiymətləndirirlər:
                            • İlk altı aydan bir yarım ilədək həqiqi təcrübə, kiçiksiniz
                            • Önümüzdəki 1-3 il ərzində aktiv məşqlə ortadasınız
                            • 4-6 illik təcrübəsi olan bir proqramçı böyükdür

                            Ancaq əlbətdə ki, sərhədlərin şərtli olduğunu və daha aktiv və maraqsevər bir inkişaf
                            etdiricinin 3 il ərzində böyük bir inkişaf etdiricinin bütün bacarıqlarını mənimsəyəcəyini
                            xatırlamağa dəyər.

                            ᅠ Proqramlaşdırma sahəsində dərin ixtisaslaşma ilə yanaşı, proqramçı bir IT şirkəti
                            daxilində əlaqəli sahələrə - dizayn, marketinq, analitik, idarəetmə sahələrinə keçə bilər.
                            Proqramçı, bununla maraqlanırsa və lazımi səriştələrə sahibdirsə, bir proqram memarı,
                            mühəndis, İT layihə meneceri ola bilər. Məsələn, menecer kimi işləmək üçün ünsiyyət
                            bacarıqlarına, təşəbbüskarlığa, komanda qurmaq və iş proseslərinə nəzarət etmək bacarığına
                            ehtiyac duyulur.

                            Əmək haqqı aralığı:
                            ᅠ Proqramçı əmək haqqı birbaşa ixtisas və vərdişlərdən asılıdır. Ən az maaş alan vəzifələr
                            yeni öyrənən kiçik inkişaf etdiricilərdir. Və əmək bazarında ən çox maaş alan bir məhsul və
                            ya layihədən bütövlükdə cavabdeh olan proqram memarları və sistem mühəndisləridir. Buna
                            görə, proqramçılar üçün maaş aralığı çox geniş ola bilər, ancaq yuxarıda yazdığımız kimi:

                            50,000 - 260,000 rub.</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">Kurslarımızda nə öyrənəcəksiniz</h2>
                    <p>Mümkün kursların bütün siyahısı:</p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/remont-pk.png" width="90" height="90">
                                </div>
                                <div class="text">
                                    <h3>Kompüter təmiri</h3>
                                    <p>Fərdi və dizüstü kompüterlərin necə söküləcəyini və yığılacağını
                                        öyrənəcəksiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/windows-10.png" width="90" height="90">
                                </div>
                                <div class="text">
                                    <h3>Windows</h3>
                                    <p>Hər növ pəncərəni necə yenidən quracağınızı öyrənəcəksiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/php.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>PHP</h3>
                                    <p>Saytların 90% -nin yazıldığı dildir</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/laravel.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>LARAVEL</h3>
                                    <p>Dünyanın ən populyar Freamvorku.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/html5.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>HTML5</h3>
                                    <p>Bütün saytların düzəltmə dili.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/css3.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>CSS3</h3>
                                    <p>Gözəllik və animasiya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/mysql.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>MYSQL</h3>
                                    <p>Saytınızın məlumat bazası.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/github.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>GITHUB</h3>
                                    <p>Bir komandada necə çalışacağınızı öyrənəcəksiniz, bu proqramçılar üçün ən
                                        populyar vasitədir.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/linux.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>LINUX</h3>
                                    <p>Proqramçılar üçün ən populyar əməliyyat sistemi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                                    <img src="../images/icons/docker.png" width="90" height="90" alt="">
                                </div>
                                <div class="text">
                                    <h3>DOCKER</h3>
                                    <p>Veb sayt inkişafında proqramçılar üçün ən populyar vasitədir.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Bizimlə əlaqə yaratmaq istəyirsinizsə</h2>
                    <p class="mb-0">Sualınızı yazın və cavab gözləyin, sualınıza mütləq cavab verəcəyik.</p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="{{route('contact-us')}}" class="btn btn-secondary px-4 py-3">Sual</a></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Gələcəktə sizin üçün </span> nə gözləyir</h2>
                    <p>Dünyanın hər hansı bir yerində çalışın. Koronavirus və digər problemlərdən asılı olmayın. Özünüzə
                        və yaxınlarınıza dəstək olun.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url(images/icons/ofice-1.png);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Ən yaxşı ofislərdə işləyin</h3>
                            <span class="position mb-2"></span>
                            <div class="faded">
                                <p>Olduğunuz yerdən motivasiya alın.</p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url(images/icons/ofice-2.jpg);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dəniz kənarında da işləyin.</h3>
                            {{--                            <span class="position mb-2">English Teacher</span>--}}
                            <div class="faded">
                                <p>Dünyanın hər hansı bir yerində işləyin.</p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url(images/icons/ofice-3.png);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Yeni tanışlıqlar və komanda iş</h3>
                            {{--                            <span class="position mb-2">i</span>--}}
                            <div class="faded">
                                <p>Komanda ilə birlikdə çalışın.</p>
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
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                 style="background-image: url(images/icons/ofice-4.png);"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Bizimlə inkişaf edin</h3>
                            {{--                            <span class="position mb-2">Science Teacher</span>--}}
                            <div class="faded">
                                <p>İnkişaf edin və bizimlə işləyin. İş tapmaqda kömək edirik.</p>
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
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Fəxri</span> lövhə</h2>
                    <p>Ən yaxşı tələbələrimiz burada nümayiş olunacaq</p>
                </div>
            </div>
            <div class="row">
                @foreach($accounts as $account)
                    {{--                    @dd($account->user->img)--}}
                    @if(collect(array_merge($account->appraisal, $account->home_work))->pluck('value')->avg() > 4)
                        <div class="col-md-6 course d-lg-flex ftco-animate">
                            <div class="img"
                                 style="background-image: url({{url(asset('storage/' . $account->user->img))}})"></div>
                            <div class="text bg-light p-4">
                                <h3 class="text-center"><a
                                        href="#">{{mb_strimwidth($account->user->name, 0,15)}} {{mb_strimwidth($account->user->last_name, 0,15)}}</a>
                                </h3>
                                <img src="../images/icons/1-mesto.png" alt="" width="100%" height="150">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

{{--    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);"--}}
{{--             data-stellar-background-ratio="0.5">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center mb-5 pb-2">--}}
{{--                <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">--}}
{{--                    <h2 class="mb-4"><span>20 Years of</span> Experience</h2>--}}
{{--                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the--}}
{{--                        necessary regelialia. It is a paradisematic country</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row d-md-flex align-items-center justify-content-center">--}}
{{--                <div class="col-lg-10">--}}
{{--                    <div class="row d-md-flex align-items-center">--}}
{{--                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                            <div class="block-18">--}}
{{--                                <div class="icon"><span class="flaticon-doctor"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <strong class="number" data-number="18">0</strong>--}}
{{--                                    <span>Certified Teachers</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                            <div class="block-18">--}}
{{--                                <div class="icon"><span class="flaticon-doctor"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <strong class="number" data-number="351">0</strong>--}}
{{--                                    <span>Successful Kids</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                            <div class="block-18">--}}
{{--                                <div class="icon"><span class="flaticon-doctor"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <strong class="number" data-number="564">0</strong>--}}
{{--                                    <span>Happy Parents</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">--}}
{{--                            <div class="block-18">--}}
{{--                                <div class="icon"><span class="flaticon-doctor"></span></div>--}}
{{--                                <div class="text">--}}
{{--                                    <strong class="number" data-number="300">0</strong>--}}
{{--                                    <span>Awards Won</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url({{url(asset('../images/icons/ruslan.png'))}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url({{url(asset('../images/icons/ruslan.png'))}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url({{url(asset('../images/icons/ruslan.png'))}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url({{url(asset('../images/icons/ruslan.png'))}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url({{url(asset('../images/icons/ruslan.png'))}})">
                                </div>
                                <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Mother</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{url(asset('../images/icons/logo.png'))}})"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5 bg-primary">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">Sualınızı verin</h2>
                        <p>Mesajda həqiqi telefon nömrənizi daxil edin ki, sizə zəng edə bilək.</p>
                    </div>
                    <form action="{{route('contact.us.save')}}" method="POST"  class="appointment-form ftco-animate">
                        @csrf
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input required name="first_name" type="text" class="form-control" placeholder="Ad">
                            </div>
                            <div class="form-group ml-md-4">
                                <input required name="last_name" type="text" class="form-control" placeholder="Soyad">
                            </div>
                        </div>
                        <div class="d-md-flex">
{{--                            <div class="form-group">--}}
{{--                                <div class="form-field">--}}
{{--                                    <div class="select-wrap">--}}
{{--                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>--}}
{{--                                        <select name="" id="" class="form-control">--}}
{{--                                            <option value="">Select Your Course</option>--}}
{{--                                            <option value="">Art Lesson</option>--}}
{{--                                            <option value="">Language Lesson</option>--}}
{{--                                            <option value="">Music Lesson</option>--}}
{{--                                            <option value="">Sports</option>--}}
{{--                                            <option value="">Other Services</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-group ml-md-4">
                                <input required name="phone" type="number" class="form-control" placeholder="Nömrə">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea required name="message" id="" cols="30" rows="2" class="form-control"
                                          placeholder="Mesaj"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Mesaj göndər" class="btn btn-secondary py-3 px-4">
                            </div>
                        </div>
                    </form>
                    @if(session('success'))
                        <div class="alert-success">
                            {{session('success')}}
                        </div>
                    @endif
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

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Son</span> xəbərlər</h2>
                    <p>Blog bölümündə kurslarımızın son xəbərlərini oxuya bilərsiniz</p>
                </div>
            </div>
            <div class="row">
                @foreach($lastNews as $new)
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end"
                           style="background-image: url({{url(asset('storage/' . $new->img))}});">
                            <div class="meta-date text-center p-2">
                                <span class="day">{{$new->created_at}}</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="{{route('get.new', $new->id)}}">{{$new->title}}</a></h3>
                            <p>{{mb_strimwidth($new->content,0,100,'...Читать далее')}}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{route('get.new', $new->id)}}" class="btn btn-secondary">Read More <span
                                            class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('../images/icons/footer-img1.png')}}" class="gallery image-popup img d-flex align-items-center"
                       style="background-image: url({{url(asset('../images/icons/footer-img1.png'))}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('../images/icons/footer-img2.png')}}" class="gallery image-popup img d-flex align-items-center"
                       style="background-image: url({{url(asset('../images/icons/footer-img2.png'))}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('../images/icons/footer-img3.png')}}" class="gallery image-popup img d-flex align-items-center"
                       style="background-image: url({{url(asset('../images/icons/footer-img3.png'))}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('../images/icons/footer-img4.png')}}" class="gallery image-popup img d-flex align-items-center"
                       style="background-image: url({{url(asset('../images/icons/footer-img4.png'))}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection


