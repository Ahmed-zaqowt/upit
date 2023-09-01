@extends('front.master')
   @section('content')
       <section id="maintenance-header" style="background: url({{ asset('front_assets/images/maintenenace.jpg') }}) no-repeat center center;">
           <div class="container d-flex align-items-center justify-content-center h-100">
               <h1 class="text-white text-center wow fadeIn" data-wow-delay=".2s">MAINTENANCE & FIELD SERVICES </h1>
           </div>
       </section>
       <!-- end maintenance header  -->
       <!-- start maintenance logo  -->

       <!-- end maintenance logo  -->
       <!-- start POWER SYSTEMS MAINTENANCE section  -->
       @foreach($services as $service)
           <section id="journey">
               <div class="container">
                   <div class="row gap-3 justify-content-center align-items-center">
                       <div class="img col-lg-6 p-lg-4 wow fadeInLeft">
                           <img width="610px" height="670px"  src="{{ asset('images/'.$service->image) }}" class="w-100 object-fit-cover" alt="">
                       </div>
                       <div class="text col-lg-5 wow fadeInRight">
                           <!-- title  -->
                           <div class="title mb-3 wow fadeInDown">
                               <h3 class=" text-uppercase fs-4 text-gray">{{ $service->name }}</h3>
                               <div class="title-icon d-flex">
                                   <div class="div pt-0 bg-beige"></div>
                                   <div class="div bottom bg-beige"></div>
                               </div>
                           </div>
                           <!-- pars  -->
                           <p class="text-secondary lh-base mb-4" style="font-size: 14px;">
                               {{ $service->description }}
                           </p>
                           <ul class="p-0 d-flex flex-column gap-3">
                               @foreach($service->feature as $i)
                               <li class="d-flex gap-2 text-secondary" style="font-size: 14px;">
                                   <i class="fa fa-check text-beige mt-1"></i>
                                   {{ $i->name }}
                               </li>
                               @endforeach
                           </ul>
                           <form   method="post" action="{{ route('order.store' , $service->id ) }}">
                               @csrf
                           </form>
                           @if(\Illuminate\Support\Facades\Auth::user()->status == 'user')
                           <button id="post-order" data-id="{{ $service->id }}"  data-url="/order/store/{{$service->id}}" class="btn btn-outline-danger border-2 rounded-0 wow fadeIn btn-order" style="font-size: 14px;" data-wow-delay=".2s"
                           >ORDER NOW!</button>
                           @endif
                       </div>
                   </div>
               </div>
           </section>


       @endforeach


       <!-- start excellence  -->
       <section id="excellence">
           <div class="container text-center">
               <!-- title  -->
               <div class="title text-center mb-5 wow fadeInDown">
                   <h3 class=" text-uppercase text-gray mb-3">WE MAINTAIN YOUR PEACE OF MIND</h3>
                   <div class="title-icon d-flex">
                       <div class="div pt-0 bg-beige"></div>
                       <div class="div bottom bg-beige"></div>
                   </div>
               </div>
               <p class="text-secondary fs-5 text-center mx-auto ex-p mb-4 wow fadeIn" data-wow-delay=".2s"
                  style="line-height: 2; font-family: light;">
                   Our Maintenance Contracts are tailor-made for your budget and technical requirements. Our service sales
                   teams are professional and extremely knowledgeable in your needs. Get the required maintenance your
                   mission-critical system needs so that it will perform as planned with maximum efficiency and
                   performance. We provide full operation services for your whole data center infrastructure.
               </p>
               <a href="#"
                  class=" d-block text-uppercase btn rounded-0 border-2 btn btn-outline-light rounded-0 wow fadeInUp px-4 py-3 mx-auto my-5"
                  style="font-size: 12px;width: fit-content;" data-wow-delay=".2s">CONTACT US
               </a>
           </div>
       </section>
       <!-- end excellence  -->
       <!-- start about download  -->
       <section id="about-down" class="bg-beige text-center py-5">
           <a href="#" class="btn btn-outline-danger border-2 rounded-0 wow fadeIn" data-wow-delay=".2s"
              style="padding: 10px 18px;">DOWNLOAD OUR CORPORATE BROCHURE</a>
       </section>
       <!-- end about download  -->
       <!-- start main contact  -->

    @stop

