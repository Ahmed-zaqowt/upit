@extends('front.master')
@section('content')
    <div style="margin-bottom: 11vh;"></div>
    <!-- start about header  -->
    @if($about != null)
    <section id="maintenance-header" style="background: url({{ asset('images/' . $about->image_sec_1) }}) no-repeat center center;">
        @endif
        <div class="container d-flex align-items-center justify-content-center h-100">
            <!-- <h1 class="text-white text-center wow fadeIn" data-wow-delay=".2s">ABOUT US</h1> -->
            <!-- title  -->
            <div class="title text-center wow fadeInDown mx-auto mb-5" style="width: 95%;">
                <h3 class=" text-uppercase text-white fs-1">ABOUT US</h3>
                <p class="bottom text-uppercase text-white">
                    {{ $about->text1 ?? '' }}
                </p>
                <div class="title-icon d-flex my-4">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>

            </div>
        </div>
    </section>
    <!-- end about header  -->
    <!-- start about links -->
    <!-- end about links -->
    <!-- start JOURNEY section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    @if($about != null)
                    <img height="600px" src="{{ asset('images/' . $about->image_sec_2)}}" class="w-100" alt="">
                    @endif
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase text-gray">{{ $about->text2 ?? '' }}</h3>
                        <p class="bottom text-uppercase text-gray">{{ $about->text3  ?? ''}}</p>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">{{ $about->text4 ?? '' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end JOURNEY section  -->
    <!-- start JOURNEY section  -->
    <section id="journey">
        <div class="container">
            <div class="row gap-3 justify-content-center">
                <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                    @if($about != null)
                    <img height="600px" src="{{ asset('images/'.$about->image_sec_3)}}" class="w-100" alt="">
                    @endif
                </div>
                <div class="text col-lg-5 wow fadeInRight">
                    <!-- title  -->
                    <div class="title mb-3 wow fadeInDown">
                        <h3 class=" text-uppercase text-gray">{{ $about->text5 ?? ''}}</h3>
                        <p class="bottom text-uppercase text-gray">{{ $about->text6 ?? ''}}</p>
                        <div class="title-icon d-flex">
                            <div class="div pt-0 bg-beige"></div>
                            <div class="div bottom bg-beige"></div>
                        </div>
                    </div>
                    <!-- pars  -->
                    <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                        {{ $about->text7 ?? ''}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end JOURNEY section  -->

    <!-- start VISION, MISSION  -->
    <section id="mission">
        <div class="container">
            <div class="row gap-5 justify-content-center">
                <!-- title  -->
                <div class="title text-center wow fadeInDown col-lg-5">
                    <h3 class=" text-uppercase text-gray">OUR VISION</h3>
                    <div class="title-icon d-flex my-4">
                        <div class="div pt-0 bg-beige"></div>
                        <div class="div bottom bg-beige"></div>
                    </div>
                    <p class="bottom text-uppercase text-secondary" style="font-size: 14px;">
                        {{ $about->text8 ?? ''}}
                    </p>

                </div>
                <div class="title text-center wow fadeInDown col-lg-5">
                    <h3 class=" text-uppercase text-gray">OUR MISSION</h3>
                    <div class="title-icon d-flex my-4">
                        <div class="div pt-0 bg-beige"></div>
                        <div class="div bottom bg-beige"></div>
                    </div>
                    <p class="bottom text-uppercase text-secondary" style="font-size: 14px;">
                        {{ $about->text9 ?? ''}}
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end VISION, MISSION  -->
    <!-- start CHOOSE  -->
    <section id="choose">
        <div class="container">
            <!-- title  -->
            <div class="title text-center wow fadeInDown mx-auto mb-5" style="width: 95%;">
                <h3 class=" text-uppercase text-gray">WHY CHOOSE SETRA</h3>
                <div class="title-icon d-flex my-4">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
                <p class="bottom text-uppercase text-secondary">
                    {{ $about->text10 ?? ''}}
                </p>

            </div>
            <div class="row gap-3 justify-content-center">
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".2s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>
                    {{$about->text11 ?? ''}}
                </div>
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".3s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>
                    {{ $about->text12 ?? '' }}
                </div>
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".4s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>

                    {{$about->text13 ?? ''}}
                </div>
                <div class="col-md-5 d-flex gap-2 text-secondary wow fadeInUp" data-wow-delay=".5s" style="font-size: 14px;">
                    <i class="fa fa-check text-beige mt-1"></i>
                    {{ $about->text14 ?? '' }}                </div>
            </div>
        </div>
    </section>
    <!-- end CHOOSE  -->

    <!-- start partner second sliders  -->
    @include('front.parts.partner')

    <!-- end partner second sliders  -->
    <!-- start excellence  -->
    <section id="excellence">
        <div class="container text-center">
            <!-- title  -->
            <div class="title text-center mb-4 wow fadeInDown">
                <h3 class=" text-uppercase text-gray">{{ $about->text15 ?? ''}}</h3>
                <p class="bottom text-uppercase text-gray">{{ $about->text16 ?? ''}}</p>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
            </div>
            <p class="text-secondary fs-5 text-center mx-auto ex-p mb-4 wow fadeIn" data-wow-delay=".2s" style="line-height: 2; font-family: light;">
                {{ $about->text17 ?? ''}}
            </p>
            <a href="{{ route('contact') }}" class="btn btn-block btn-outline-light rounded-0 wow fadeInUp" data-wow-dela=".2s" style="font-size: 14px;padding: 10px 15px;">CONTACT US</a>
        </div>
    </section>
    <!-- end excellence  -->
    <!-- start about download  -->
    <section id="about-down" class="bg-beige text-center py-5">
        <a href="#" class="btn btn-outline-danger border-2 rounded-0 wow fadeIn" data-wow-delay=".2s" style="padding: 10px 18px;">DOWNLOAD OUR CORPORATE BROCHURE</a>
    </section>
    <!-- end about download  -->
    <!-- start main contact  -->
@stop
