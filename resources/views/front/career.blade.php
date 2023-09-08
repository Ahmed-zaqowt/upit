<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css ') }}">
    <!-- swiper js  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/swiper-bundle.min.css ') }}">
    <!-- font awesome  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/all.min.css ') }}">
    <!-- animate  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/animate.css ') }}">
    <!-- hover.css  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/hover-min.css ') }}">
    <!-- my style  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/style.css ') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('front_assets/images/image1.png')}}" type="image/x-icon">
    <title>UPIT</title>
</head>

<body class="">

    <section id="career-title" class="w-50 m-0 p-3">
        <div class="container">
            <div class="links d-flex justify-content-start align-items-center gap-3">
               @if(\Illuminate\Support\Facades\Auth::check())
                    <form  method="post" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                    <a href="{{ route('logout') }}" class="btn btn-danger py-1 px-5 logout-tag"  >Logout</a>

                @else
                    <a href="{{ route('login') }}" class="btn btn-danger py-1 px-5">Login</a>

                @endif
                <button id="change-lang" class="btn text-white">EN</button>
            </div>
            <p class="m-0 mt-5 pt-5 text-white fs-3 w-75">Saudi Electronic Trading & Contracting Company Limited</p>
        </div>
    </section>
    <section id="search" class="bg-danger m-0 position-relative py-5 ">
        <div class="container">
            <div class="vacancies bg-danger d-flex flex-column gap-2 justify-content-center align-items-center ">
                <i class="fa fa-bag-shopping text-white" style="font-size: 50px;"></i>
                <span class="text-uppercase fs-5 text-white" style="font-family: bold;">vacancies</span>
            </div>
            <form class="search-field pt-5 mx-auto mb-5">
                <div class="form-group border-white rounded-3 border-1 border d-flex align-items-center px-2 py-1">
                    <form method="post" action="{{ route('search') }}" >
                        <input name="search" type="text" class="form-control bg-transparent border-0 text-white shadow-none"
                               placeholder="Search Vacancies">
                        <button type="submit"
                                class="btn border-0 outline-0 d-flex align-items-center justify-content-center"><i
                                class="fa-solid fa-arrow-right text-secondary"></i></button>
                    </form>

                </div>
            </form>
            <div class="row">
                <div class="career-list col-md-6 p-2 p-md-3 p-xl-4 border-1 border-end border-white-50">
                    @foreach($careers as $i)
                        <div class="mb-5">
                            <p class="text-white mb-1">{{$i->title}}</p>
                            <span class="text-white" style="font-size: 14px;">{{ $i->subtitle }} Limited | {{ $i->start }} -
                            {{ $i->end }}
                        </span>
                            <button data-id="{{ $i->id }}" data-title="{{ $i->title }}" data-start="{{ $i->start }}" data-end="{{ $i->end }}" data-desc="{{ $i->desc }}" type="button" style="font-size: 14px;" class="mt-1 text-white d-block btn btn-light btn-sm btn-m" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Show More ... </button>
                        </div>

                    @endforeach
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl rounded-4">
      <div class="modal-content">
        <div class="modal-header bg-danger d-flex flex-column gap-3">
            <div class="d-flex justify-content-between align-items-center flex-wrap w-100 gap-3">
                <h5 class="modal-title border-0 text-white" style="font-family: bold;" id="staticBackdropLabel"></h5>
                <button type="button" class="text-white bg-transparent fs-3 border-0" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap w-100 gap-3">
                <p class="text-white" style="font-size: 14px;">Setra-Riyadh |<span id="start"></span> </p>
                <p class="text-white" style="font-size: 14px;">Job Closing Date :   <span id="end"></span></p>
            </div>
        </div>
        <div   class="modal-body text-center mt-4">
           <p id="desc_v"></p>

             @if(\Illuminate\Support\Facades\Auth::check())
              <form method="POST" action="{{ route('admin.vacant.store' , \Illuminate\Support\Facades\Auth::user()->id) }}">
                  @csrf
                  <input type="hidden" id="id" name="id">
                  <button style="justify-content: center" class="btn mx-auto mt-5 mb-4 bg-danger text-white" style="font-size: 14px;">Apply Now</button>
              </form>

             @else
               <a href="{{ route('login') }}"  class="btn mx-auto mt-5 mb-4 bg-danger text-white" style="font-size: 14px;">Login</a>

          @endif
        </div>
       </div>
    </div>
  </div>


    <!-- jquery -->
    <script src="{{ asset('front_assets/js/jquery.js ') }}"></script>
    <!-- font awesome  -->
    <script src="{{ asset('front_assets/js/all.min.js ') }}"></script>
    <!-- bootstrap  -->
    <script src="{{ asset('front_assets/js/bootstrap.bundle.min.js ') }}"></script>
    <!-- swiper js  -->
    <script src="{{ asset('front_assets/js/swiper-bundle.min.js ') }}"></script>
    <!-- counter up  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js "
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- animate  -->
    <script src="{{ asset('front_assets/js/wow.min.js ') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).on("click", ".logout-tag", function(e) {
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Do you really want to delete this item ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    document.getElementById('logout-form').submit();
                }
            });
        });


        $(document).ready(function() {
            $(document).on('click', '.btn-m', function(event) {
                event.preventDefault();
                var button = $(this)
                var id = button.data('id')

                $('#id').val(id);
                $('#desc_v').text(button.data('desc'));
                $('#start').text(button.data('start'));
                $('#end').text(button.data('end'));
                $('#staticBackdropLabel').text(button.data('title'));

            });
        });
    </script>
</body>

</html>
