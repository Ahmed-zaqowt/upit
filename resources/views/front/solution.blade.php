
@extends('front.master')
@section('content')
    <!-- start solution header  -->
    <section id="solution-header" class="d-flex align-items-center justify-content-center"
        style="background: url({{ asset('images/' . $solution->image) }}) no-repeat center center;">
        <div class="overlay" style="background: url({{ asset('images/' . $solution->image) }}) ;">
        </div>
        <div class="overlay-color">
        </div>
        <div class="title text-center pt-0 wow fadeInDown">
            <h3 class=" text-uppercase fs-1 text-white">{{ $solution->solution->name }}</h3>
            <div class="title-icon d-flex">
                <div class="div pt-0 bg-danger"></div>
                <div class="div bottom bg-danger"></div>
            </div>
        </div>
    </section>
    <!-- end solution header  -->
    <!-- start solution logo  -->
    <section id="solution-logo">
        <div class="container">
            <!-- title  -->
            <div class="title text-center wow fadeInDown mb-5">
                <h3 class=" text-uppercase text-gray mx-auto">WHAT WE OFFER</h3>
                <p class="bottom text-uppercase text-secondary ">
                    {{ $solution->text1 }}
                </p>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-danger"></div>
                    <div class="div bottom bg-danger"></div>
                </div>
            </div>
            <!-- start sol cards  -->
            <div class="row g-5 pt-5">
                <!-- start card  -->
                <div class="card border-0 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <i class="fa-solid fa-gauge-high fs-1 mb-4 text-danger"></i>
                    <h5 class=" text-gray text-center" style="font-family: bold; font-size: 14px;">COMPREHENSIVE
                        INTEGRATION OF DATA CENTER DESIGN</h5>
                    <p class="text-secondary text-center" style="font-size: 14px;">
                        {{ $solution->text2 }}
                    </p>
                </div>
                <!-- start card  -->
                <div class="card border-0 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <i class="fa-solid fa-display fs-1 mb-4 text-danger"></i>
                    <h5 class=" text-gray text-center" style="font-family: bold; font-size: 14px;">
                        CUSTOMERS’ NEEDS
                    </h5>
                    <p class="text-secondary text-center" style="font-size: 14px;">
                        {{ $solution->text3 }}
                    </p>
                </div>
                <!-- start card  -->
                <div class="card border-0 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s">
                    <i class="fa-solid fa-sliders fs-1 mb-4 text-danger" style="transform: rotate(90deg);"></i>
                    <h5 class=" text-gray text-center" style="font-family: bold; font-size: 14px;">
                        PRECISE CUSTOMIZATION
                    </h5>
                    <p class="text-secondary text-center" style="font-size: 14px;">
                        {{ $solution->text4 }}
                    </p>
                </div>
            </div>
            <!-- end sol cards  -->
        </div>
    </section>
    <!-- end solution logo  -->
    <section id="num-conter" class="bg-danger py-5">
        <div class="container">
            <div class="title text-center wow fadeInDown">
                <h3 class=" text-uppercase text-white">WE HAVE CARVED OUT A UNIQUE NICHE IN THE INDUSTRY, SUCCESSFULLY
                    DELIVERING HUNDREDS OF PROJECTS ALL OVER THE KINGDOM</h3>
                <p class="bottom text-uppercase text-beige">FOR THE GOVERNMENT, SEMI-GOVERNMENT, DEFENSE, BANKING AND
                    TELECOMMUNICATIONS SECTORS.</p>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
            </div>
            <!-- start numbers  -->
            <div class="row gap-5 justify-content-center">
                <!-- start num  -->
                <div class="col-md-5 col-lg-2 p-3 bg-beige wow fadeInUp" data-wow-delay=".2s">
                    <span class="text-danger fs-2 mb-2 d-block text-center counter" data-val="">350</span>
                    <p class="text-gray text-uppercase fs-5 text-center" style="font-family: bold;">PROJECTS COMPLETED
                    </p>
                </div>
                <!-- start num  -->
                <div class="col-md-5 col-lg-2 p-3 bg-beige wow fadeInUp" data-wow-delay=".3s">
                    <span class="text-danger fs-2 mb-2 d-block text-center counter" data-val="">200</span>
                    <p class="text-gray text-uppercase fs-5 text-center" style="font-family: bold;">Qualified Engineers
                    </p>
                </div>
                <!-- start num  -->
                <div class="col-md-5 col-lg-2 p-3 bg-beige wow fadeInUp" data-wow-delay=".4s">
                    <span class="text-danger fs-2 mb-2 d-block text-center counter" data-val="">44</span>
                    <p class="text-gray text-uppercase fs-5 text-center" style="font-family: bold;">CLIENTS</p>
                </div>
                <!-- start num  -->
                <div class="col-md-5 col-lg-2 p-3 bg-beige wow fadeInUp" data-wow-delay=".5s">
                    <span class="text-danger fs-2 mb-2 d-block text-center counter" data-val="">500000</span>
                    <p class="text-gray text-uppercase fs-5 text-center" style="font-family: bold;">Fire DEVICES
                        installed</p>
                </div>
            </div>
        </div>
    </section>
    <section id="sol-title">
        <div class="container">
            <!-- title  -->
            <div class="title text-center wow fadeInDown">
                <h3 class=" text-uppercase text-gray">DATA CENTER INFRASTRUCTURE SERVICES</h3>
                <div class="title-icon d-flex my-4">
                    <div class="div pt-0 bg-danger"></div>
                    <div class="div bottom bg-danger"></div>
                </div>
                <p class="bottom text-uppercase text-beige">
                    {{ $solution->text5 }}                </p>
            </div>
            <p class="text-gray wow fadeIn" data-wow-delay=".2s">
                {{ $solution->text6 }}
            </p>

        </div>
    </section>
    <section id="ex-services">
        <div class="container">
            <!-- title  -->
            <div class="title text-center mb-4 wow fadeInDown">
                <h3 class=" text-uppercase text-gray">EXCLUSIVE SERVICES</h3>
                <div class="title-icon d-flex my-4">
                    <div class="div pt-0 bg-danger"></div>
                    <div class="div bottom bg-danger"></div>
                </div>
                <p class="bottom text-uppercase text-secondary">NO ONE COMMITS LIKE WE DO</p>
            </div>
            <!-- start row -->
            <div class="row g-5">
                @foreach($services as $ser)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="image rounded-2 overflow-hidden">
                        <img src="{{ asset('images/'.$ser->image) }}" class="object-fit-cover rounded-2"
                            width="100%" height="200" alt="">
                        <h3 class="text-gray fs-5 my-3" style="font-family: bold;"> {{ $ser->name }}</h3>
                        <p class="text-secondary" style="font-size: 14px;">
                            {{ $ser->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- start partner second sliders  -->
    @include('front.parts.partner')

@stop
