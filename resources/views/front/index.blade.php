@extends('front.master')

@section('content')
    <!-- start main slider  -->
    <div class="swiper main-swiper">
        <div class="swiper-wrapper">
            @foreach($slider_index_top as $img1)
            <div class="swiper-slide wow ">
                <div class="swiper-clip bg-light">
                    <img src="{{asset('images/'.$img1->image)}}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next main-next"></div>
        <div class="swiper-button-prev main-prev"></div>
    </div>
    <!-- end main slider  -->
    <!-- start services main  -->
    <section id="main-service">
        <div class="container">
            <h2 class=" gray-title mb-5 mx-auto text-center text-uppercase wow fadeInDown">FROM DESIGN, SUPPLY, INSTALLATION, TO HIGH-END MAINTENANCE

            </h2>
            <div class="row g-4 g-lg-5 justify-content-center">
                @foreach($image_card as $img2)
                <a href="#" class="wow fadeInUp col-md-5 col-lg-4" data-wow-delay=".1s">
                    <div class="s-img">
                        <img src="{{asset('images/'. $img2->image )}}" alt="">
                    </div>
                </a>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end services main  -->
    <!-- start main maintenance -->
    <section id="main-meaintenance" class="position-relative">
        <div class="main-meaintenance-after"></div>
        <div class="title text-center maintenance-title wow fadeInDown">
            <p class="top text-uppercase text-beige">{{ $index->text1 ?? '' }}</p>

            <h3 class=" text-uppercase text-white">{{ $index->text2 ?? '' }}</h3>
            <p class="bottom text-uppercase text-beige">{{ $index->text3 ?? '' }}</p>
            <div class="title-icon d-flex">
                <div class="div pt-0 bg-beige"></div>
                <div class="div bottom bg-beige"></div>
            </div>
        </div>
        <div class="content row g-3 p-2 m-0">
            <div class=" col-lg-4">
                <div class="title text-end wow fadeInLeft">
                    <h3 class=" text-uppercase fs-5 text-white">{{ $index->text4 ?? '' }}</h3>
                    <p class="bottom text-uppercase text-beige">{{ $index->text5 ?? '' }}</p>
                </div>
                <ol class="text-end m-0 p-0 gap-5 row">
                    <li class="text-uppercase text-white d-flex justify-content-end align-items-center gap-2 wow fadeInLeft" data-wow-delay=".1s">
                        {{ $index->text6 ?? '' }}
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                    </li>
                    <li class="text-uppercase text-white d-flex justify-content-end align-items-center gap-2 wow fadeInLeft" data-wow-delay=".2s">
                        {{ $index->text7 ?? '' }}
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                    </li>
                    <li class="text-uppercase text-white d-flex justify-content-end align-items-center gap-2 wow fadeInLeft" data-wow-delay=".3s">
                        {{ $index->text8 ?? '' }}
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                    </li>
                    <li class="text-uppercase text-white d-flex justify-content-end align-items-start gap-2 wow fadeInLeft" data-wow-delay=".4s">
                        <p>{{ $index->text9 ?? '' }}</p>
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                    </li>
                </ol>
            </div>
            <div class=" col-lg-4">
                <div class="img-center text-center wow fadeInUp">
                    @if($index != null)
                    <img src="{{asset('images/' . $index->image)}}" alt="">
                    @endif
                </div>
            </div>
            <div class=" col-lg-4 last-maintenance">
                <div class="title text-start wow fadeInRight">
                    <h3 class=" text-uppercase fs-5 text-beige">{{ $index->text10 ?? '' }}</h3>
                    <p class="bottom text-uppercase text-danger">{{ $index->text11 ?? '' }}
                    </p>
                </div>
                <ol class="text-start m-0 p-0 row gap-5">
                    <li class="text-uppercase text-gray d-flex justify-content-start align-items-center gap-2 wow fadeInRight" data-wow-delay=".1s">
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                        {{ $index->text12 ?? '' }}
                    </li>
                    <li class="text-uppercase text-gray d-flex justify-content-start align-items-center gap-2 wow fadeInRight" data-wow-delay=".2s">
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                        {{ $index->text13 ?? '' }}
                    </li>
                    <li class="text-uppercase text-gray d-flex justify-content-start align-items-center gap-2 wow fadeInRight" data-wow-delay=".3s">
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                        {{ $index->text14 ?? '' }}
                    </li>
                    <li class="text-uppercase text-gray d-flex justify-content-start align-items-center gap-2 wow fadeInRight" data-wow-delay=".4s">
                        <i class="fa-regular fa-circle text-beige fs-3"></i>
                        {{ $index->text15 ?? '' }}
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- end main maintenance -->
    <!-- start partner second sliders  -->
    @include('front.parts.partner')
    <!-- end partner second sliders  -->
    <!-- start client second sliders  -->
    <section id="main-client">
        <div class="container">
            <div class="title text-center wow fadeInDown">
                <h3 class=" text-uppercase text-danger">OUR CLIENTS</h3>
                <p class="bottom text-uppercase text-beige">{{ $index->text17 ?? ''}}</p>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-danger"></div>
                    <div class="div bottom bg-danger"></div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper main-client-swiper p-1 overflow-hidden wow fadeInUp" data-wow-delay=".2s">
                <div class="swiper-wrapper">
                    @foreach($image_clients as $cli)
                    <div class="swiper-slide p-md-1 text-center" style="width: 50px !important;">
                        <img src="{{asset('images/'.$cli->image)}}" width="200px" height="200px" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end client second sliders  -->
    <!-- start certificate  -->
    <section id="certificate" class="position-relative">
        <div class="container">
            <div class="certificate-after"></div>
            <!-- first  -->
            <div class="info d-flex flex-column gap-5 mt-5 first">
                <!-- 1 -->
                <div class="d-flex align-items-start gap-3 f-1 wow fadeInRight" data-wow-delay=".1s">
                    <i class="fa-solid fa-location-dot text-danger text-i fs-3"></i>
                    <div class=" d-flex flex-column">
                        <h5 class="text-uppercase fs-6 text-danger" style="font-family: bold;">{{ $index->text18 ?? '' }}</h5>
                        <span class="text-beige d-block fs-6">{{ $index->text19 ?? '' }}</span>
                    </div>
                </div>
                <!-- 2 -->
                <div class="d-flex align-items-start gap-3 f-2 wow fadeInRight" data-wow-delay=".2s">
                    <i class="fa-solid fa-user-tie text-danger text-i fs-3"></i>
                    <div class=" d-flex flex-column">
                        <h5 class="text-uppercase fs-6 text-danger" style="font-family: bold;">{{ $index->text20 ?? ''}}</h5>
                        <span class="text-beige d-block fs-6">{{ $index->text21 ?? ''}}</span>
                    </div>
                </div>
                <!-- 3 -->
                <div class="d-flex align-items-start gap-3 f-3 wow fadeInRight" data-wow-delay=".3s">
                    <i class="fas fa-users-cog text-danger text-i fs-3"></i>
                    <div class=" d-flex flex-column">
                        <h5 class="text-uppercase fs-6 text-danger" style="font-family: bold;">{{ $index->text22 ?? ''}}</h5>
                        <span class="text-beige d-block fs-6">{{ $index->text23 ?? ''}}</span>
                    </div>
                </div>
            </div>
            <!-- second  -->
            <div class="download">
                <div class="title my-1 text-center wow fadeInDown">
                    <h3 class=" text-uppercase text-white fs-1">{{ $index->text24 ?? ''}}</h3>
                    <p class="bottom text-uppercase text-beige">{{ $index->text25 ?? ''}}</p>
                    <div class="title-icon d-flex">
                        <div class="div pt-0 bg-white"></div>
                        <div class="div bottom bg-white"></div>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-start flex-column flex-lg-row">
                    <div class="order-2 order-lg-1 text-center wow fadeInRight">
                        <p class=" text-white text-start">{{ $index->text26 ?? ''}}
                        </p>
                        <a href="#" class="btn btn-block btn-outline-light rounded-0">DOWNLOAD
                            BROCHURE</a>
                    </div>
                </div>
            </div>
            <!-- third -->
            <div class="text-center third">
                <div class="title text-center wow fadeInDown">
                    <h3 class=" text-uppercase text-white fs-2">{{ $index->text27 ?? ''}}</h3>
                    <p class="bottom text-uppercase text-beige">{{ $index->text28 ?? ''}}</p>
                    <div class="title-icon d-flex">
                        <div class="div pt-0 bg-white"></div>
                        <div class="div bottom bg-white"></div>
                    </div>
                </div>
                <a href="#" class="text-uppercase btn btn-block btn-outline-light rounded-0 wow fadeInUp">CONTACT US</a>
            </div>
        </div>
    </section>
    <!-- end certificate  -->
    <!-- start main contact  -->


@stop
