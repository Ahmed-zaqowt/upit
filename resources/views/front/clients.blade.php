
@extends('front.master')


@section('content')
    <div class="container">
        <section id="news-title" class="position-relative" style="clip-path: polygon(0 0, 100% 0%, 100% 70%, 0% 100%);">
            <div class="title text-center" style="padding: 60px 0;">
                <h3 class=" text-uppercase fs-4 text-gray wow fadeInDown">OUR CLIENTS</h3>
                <p class="bottom text-uppercase text-white wow fadeInDown" style="font-size: 14px;">SOME OF OUR CLIENTS
                    FROM A VARIETY OF INDUSTRIES</p>
            </div>
            <div class="back-title bg-beige"></div>
            <div class="p-5 overlay" style="background-image: url(images/sm_cell_w.png);"></div>
        </section>
    </div>
    <!-- end clients title -->
    <!-- start all clients  -->
    <section id="all-clients">
        <div class="container">
            <div class="row m-0">
                @foreach($users as $user)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 wow fadeInUp" data-wow-delay=".2s">
                    <img src="{{ asset('images/'.$user->image ) }}" width="100%" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end all clients  -->
@stop
