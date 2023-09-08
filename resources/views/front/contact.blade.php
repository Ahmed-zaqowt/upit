@extends('front.master')
@section('content')
    <div style="margin-bottom: 11vh;"></div>
    <!-- start contact header  -->
    <section id="contact-header" class="d-flex align-items-center justify-content-center"
        style="background: url({{ asset('front_assets/images/contact-pic-2-scaled.jpeg') }}) no-repeat center center;">
        <div class="overlay" style="background: url(images/sm_dot_b.png) rgba(63,63,63);">
        </div>
        <div class="title text-center pt-0 wow fadeInDown">
            <h3 class=" text-uppercase fs-1 text-white">GET IN TOUCH</h3>
            <p class="bottom text-uppercase text-white">FEEL FREE TO ASK</p>
            <div class="title-icon d-flex">
                <div class="div pt-0 bg-beige"></div>
                <div class="div bottom bg-beige"></div>
            </div>
        </div>
    </section>
    <!-- end contact header  -->
    <!-- start contact maps  -->
    <section id="maps">
        <div class="container">
            <div class="row m-0 g-5">
                @foreach($contacts as $i)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="text-uppercase text-gray fs-5 mb-4" style="font-family: bold;letter-spacing: 2px;">RIYADH
                        OFFICE</h3>
                    <p class="text-secondary" style="font-size: 15px;"><i
                            class="fa-solid fa-house text-gray me-3"></i>{{ $i->district  }}</p>
                    <p class="text-secondary" style="font-size: 15px;"><i
                            class="fa-solid fa-phone text-gray me-3"></i>{{ $i->phone }}</p>
                   <a target="_blank" href="{{ $i->map }}"> <p class="text-secondary" style="font-size: 15px;"><i
                            class="fa-solid fa-house text-gray me-3"></i>{{ $i->address }}</p></a>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54414.87398372801!2d46.6752955!3d24.7135517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1690550736564!5m2!1sar!2s"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end contact maps  -->
    <!-- start contact sec  -->
    <section id="contact-page">
        <div class="container">
            <div class="title text-center mb-2 wow fadeInDown" data-wow-delay=".3s">
                <h3 class=" text-uppercase fs-5 text-danger">SEND US AN EMAIL AT INFO@SETRA.COM.SA</h3>
                <p class="bottom text-uppercase text-beige">OR FILL IN THE BELOW FORM</p>
                <div class="title-icon d-flex">
                    <div class="div pt-0 bg-beige"></div>
                    <div class="div bottom bg-beige"></div>
                </div>
            </div>
        </div>
    </section>
@stop
