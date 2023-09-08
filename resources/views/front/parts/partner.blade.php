<section id="main-partner">
    <div class="container">
        <div class="title text-center wow fadeInDown">
            <h3 class=" text-uppercase text-danger">OUR PARTNERS</h3>
            <p class="bottom text-uppercase text-beige">{{ $index->text16 ?? '' }}</p>
            <div class="title-icon d-flex">
                <div class="div pt-0 bg-danger"></div>
                <div class="div bottom bg-danger"></div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper main-partner-swiper p-1 overflow-hidden wow fadeInUp" data-wow-delay=".2s">
            <div class="swiper-wrapper">
                @foreach($image_partners as $par)
                    <div class="swiper-slide p-md-1 text-center" style="width: 50px !important;">
                        <img src="{{asset('images/'.$par->image)}}" width="200px" height="200px" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
