
@extends('front.master')
@section('content')
<body class="">
    <!-- start nav  -->

    <section id="try-header"
        style="background: url({{ asset('images/'.$image_one->image) }}) no-repeat center center; background-size: cover; height: 60vh;">

    </section>
    <!-- end title  -->
    <section id="read-details">
        <div class="container">
            <div class="row  justify-content-between text-gray align-items-start read-padding"
                style="font-family: bold;">
                <h1 class="read-title col-md-9 fs-4 wow fadeInLeft">{{ $news->title }}
                </h1>
                <a href="{{ route('news') }}" class="read-btn btn btn-light mb-3 col-md-2 d-block wow fadeInRight" style="width: fit-content;">Back
                    <i class="fa-solid fa-angle-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
    <section id="read-details">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <span class="text-danger fs-4 wow fadeInLeft" style="font-family: bold;">2023-05-15</span>
                <a href="index.html" class="read-link bg-danger d-flex align-items-center justify-content-center wow fadeInRight"><i
                        class="fa-solid fa-share-nodes fs-4 text-white"></i></a>
            </div>
        </div>
    </section>
    <!-- datails  -->
    <section id="read-details" class="pb-5">
        <div class="container ">
            <div class="news-img mb-4">
                <img src="{{asset('images/'.$news->image)}}" class="object-fit-cover wow fadeIn" height="300px" width="100%" alt="">
            </div>
            <p class="text-gray wow fadeInUp">
                {{ $news->description }}
            </p>


        </div>
    </section>

@stop
