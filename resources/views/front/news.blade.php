

 @extends('front.master')
 @section('content')

     <section id="try-header"
              style="background: url({{ asset('images/'.$image_one->image) }}) no-repeat center center; background-size: cover; height: 60vh;">

     </section>
     <!-- end title  -->
     <!-- start news cards  -->
     <section>
         <div class="container">
             <div class="title text-center">
                 <h3 class=" text-uppercase text-danger wow fadeInDown">NEWS</h3>
                 <div class="title-icon d-flex wow fadeInUp">
                     <div class="div pt-0 bg-beige"></div>
                     <div class="div bottom bg-beige"></div>
                 </div>
             </div>
             <div class="row p-0 g-4 justify-content-center">
                 @foreach($news as $new)
                 <div class="p-3 col-md-6 col-lg-4 p-0 wow fadeInUp" data-wow-delay=".2s">
                     <div class=" border rounded-4 shadow">
                         <div class="card-img">
                             <img src="{{asset('images/'.$new->image)}}" height="270" width="100%"
                                  class="object-fit-cover rounded-top-4" alt="">
                         </div>
                         <div class="card-text p-3">
                             <p class="text-gray ">
                                 {{ $new->title }}
                             </p>
                             <p class="text-danger">2023-05-15</p>
                             <a href="{{ route('read_news' , $new->id) }}" class="btn btn-light mb-3">Read More <i
                                     class="fa-solid fa-angle-right ms-2"></i>
                             </a>
                         </div>
                     </div>
                 </div>
                 @endforeach



             </div>
         </div>
     </section>


 @stop
