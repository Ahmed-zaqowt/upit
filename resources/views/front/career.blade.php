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
                    <input type="text" class="form-control bg-transparent border-0 text-white shadow-none"
                        placeholder="Search Vacancies">
                    <button type="submit"
                        class="btn border-0 outline-0 d-flex align-items-center justify-content-center"><i
                            class="fa-solid fa-arrow-right text-secondary"></i></button>
                </div>
            </form>
            <div class="row">
                <div class="career-list col-md-6 p-2 p-md-3 p-xl-4 border-1 border-end border-white-50">
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                </div>
                <div class="career-list col-md-6 p-2 p-md-3 p-xl-4 ">
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
                    <div class="mb-5">
                        <p class="text-white mb-1">Senior Project Engineer</p>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">...</button>
                        <span class="text-white" style="font-size: 14px;">Saudi Electronic Trading & Contracting Company Limited | 19 - Jul -
                            2023 | Setra-Riyadh |
                        </span>
                        <button type="button" style="font-size: 14px;" class="p-0 btn text-white d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">162</button>
                    </div>
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
                <h5 class="modal-title border-0 text-white" style="font-family: bold;" id="staticBackdropLabel">Sales</h5>
                <button type="button" class="text-white bg-transparent fs-3 border-0" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap w-100 gap-3">
                <p class="text-white" style="font-size: 14px;">Setra-Riyadh | 24 Jul, 2023</p>
                <p class="text-white" style="font-size: 14px;">Job Closing Date :   24 Aug, 2023</p>
            </div>
        </div>
        <div class="modal-body text-center mt-4">
            There Is No Data
        </div>
          <button type="button" class="btn mx-auto mt-5 mb-4 bg-danger text-white" style="font-size: 14px;">Apply Now</button>
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
    </script>
</body>

</html>
