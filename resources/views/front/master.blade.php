<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.min.css')}}">
    <!-- swiper js  -->
    <link rel="stylesheet" href="{{asset('front_assets/css/swiper-bundle.min.css')}}">
    <!-- font awesome  -->
    <link rel="stylesheet" href="{{asset('front_assets/css/all.min.css')}}">
    <!-- animate  -->
    <link rel="stylesheet" href="{{asset('front_assets/css/animate.css')}}">
    <!-- hover.css  -->
    <link rel="stylesheet" href="{{asset('front_assets/css/hover-min.css')}}">
    <!-- my style  -->
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('front_assets/images/image1.png')}}" type="image/x-icon">
    <title>UPIT</title>
</head>

<body class="">
    <!-- start nav  -->
    <header class="bg-white">
        <a href="#" class="logo">
            <img src="assets/images/cp (1).svg" width="100px" class="py-1" alt="">
        </a>
        <div class="navigation">
            <ul class="menu">
                <div class="close-btn close-div text-light d-flex justify-content-between"> menu<i
                        class=" close-btn fa-solid fa-xmark text-light fs-3"></i></div>
                <li class="menu-item text-gray active"><a href="{{ route('index')  }}">Home</a></li>
                <li class="menu-item text-gray"><a href="{{ route('about')  }}">about</a></li>
                <!-- <li class="menu-item text-gray"><a href="#">services</a></li> -->
                <li class="menu-item res-menu text-gray">
                    <a class="sub-btn">solutions <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu bg-white">
                        @php
                            $solution = \App\Models\Solution::all();
                        @endphp
                        @foreach($solution as $i)
                            <li class="sub-item"><a class="sub-item-link text-capitalize" href="{{route('solution' , $i->id)}}">{{ $i->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="menu-item text-gray"><a href="{{ route('maintenance') }}">maintenance</a></li>
                <li class="menu-item text-gray"><a href="{{ route('clients') }}">clients</a></li>
                <li class="menu-item text-gray"><a href="{{ route('news') }}">news</a></li>
                <li class="menu-item text-gray"><a href="{{ route('contact') }}">Contact</a></li>
                <li class="menu-item text-gray"><a href="{{ route('career') }}">career</a></li>
            </ul>
        </div>
        <div class="buttons d-flex gap-3 align-items-center h-100">
            <!-- res-nav bars -->
            <!-- <a href="#" class="text-danger fs-3"><i class="fa-solid fa-cart-shopping"></i></a> -->
            <li class="menu-cart text-gray h-100 d-flex align-items-center">
                <a class="sub-btn text-danger fs-5" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                <ul class="sub-cart bg-white rounded-3 shadow">
                    @php
                        $stores = \App\Models\Store::all();
                    @endphp

                    @foreach($stores as $store)
                        <li class="sub-item"><a target="_blank" class="sub-item-link text-capitalize" href="{{ $store->url }}">{{ $store->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <button id="change-lang" class="btn text-gray">EN</button>
            @if(\Illuminate\Support\Facades\Auth::check())
                <form  method="post" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                <li class="menu-cart text-gray h-100 d-flex align-items-center">
                    <a href="#" class="btn btn-outline-danger" style="font-size: 14px;">Oprations</a>
                    <ul class="sub-cart bg-white rounded-3 shadow text-center">

                        <li class="sub-item">
                            <!-- <a class="sub-item-link text-capitalize text-center" href="#"> -->
                            <button type="button"
                                    class="sub-item-link text-capitalize text-center bg-transparent border-0 text-danger"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                orders
                            </button>
                        </li>
                        <li class="sub-item"><a class="sub-item-link text-capitalize text-center logout-tag"
                                                href="{{ route('logout') }}">Logout</a>
                        </li>

                    </ul>
                </li>

            @else
                <a href="{{ route('login') }}" class="btn btn-outline-danger" style="font-size: 14px;">login</a>

            @endif

            <div class="menu-btn"><i class="fa-solid fa-bars text-danger fs-3"></i></div>
            <!-- <a href="#" class="btn btn-outline-danger">cart</a> -->
        </div>
    </header>




    <div class="after-header" style="margin-bottom: 11vh;"></div>
    <!-- end header  -->
      @yield('content')
    <section id="contact">
        <div class="container">
            <div class="title py-3 wow fadeInLeft">
                <p class="bottom text-uppercase text-gray mb-1">LEAVE A REPLY</p>
                <span class="d-block fs-6 text-secondary">Your email address will not be published. Required fields are
                    marked *</span>
            </div>
            <form method="post" id="contact_form" action="{{ route('post_contact') }}">
                @csrf
                <textarea required class="form-control mb-4 rounded-0 wow fadeInRight" name="msg" id="" cols="30" rows="10"></textarea>
                @if($errors->has('msg'))
                    <div class="text-danger text-sm error-text">{{ $errors->first('msg') }}</div>
                @endif
                <div class="row">
                    <div class="form-group col-md-6 col-lg-6 mb-4 wow fadeInUp" data-wow-delay=".15s">
                        <label class="text-gray text-uppercase" for="">NAME <span class="text-danger">*</span></label>
                        <input  required type="text" name="name" class="form-control rounded-0">
                        @if($errors->has('name'))
                            <div class="text-danger text-sm error-text">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="form-group col-md-6 col-lg-6 mb-4 wow fadeInUp" data-wow-delay=".25s">
                        <label class="text-gray text-uppercase" for="">EMAIL <span class="text-danger">*</span></label>
                        <input required type="email" name="email" class="form-control rounded-0">
                        @if($errors->has('email'))
                            <div class="text-danger text-sm error-text">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                </div>
                <div class="send row justify-content-between align-items-center my-4 wow fadeIn" data-wow-delay=".5s">
                    <p class="save d-flex align-items-center gap-2 col-md-9">
                        <input   type="hidden" name="" id="">
                        <span class="text-secondary"> </span>
                    </p>
                    <button type="submit" class="col-md-3 btn btn-danger">POST COMMENT</button>
                </div>
            </form>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><span class="text-danger">{{ \Illuminate\Support\Facades\Auth::user()->name ?? ''}}</span> Orders</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                        <tr class="text-center">
                            <th class="p-3" scope="col">Name</th>
                            <th class="p-3" scope="col">Date</th>
                            <th class="p-3" scope="col">Status</th>
                            <th class="p-3" scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(\Illuminate\Support\Facades\Auth::check())
                        @php
                            $orders = \App\Models\Order::query()->where('user_id' , \Illuminate\Support\Facades\Auth::user()->id)->get();
                        @endphp
                        @foreach($orders as $order)
                            <tr class="text-center">
                                <td class="p-3">{{ $order->service->name  }}</td>
                                <td class="p-3">{{ $order->created_at }}</td>
                                @if($order->status == "pending")
                                    <td class="p-3"><p class="p-1 m-0 rounded-2 bg-secondary  text-white" style="font-size: 14px;">Pending</p></td>
                                @elseif($order->status == "processing")
                                    <td class="p-3"><p class="p-1 m-0 rounded-2 bg-info text-white" style="font-size: 14px;">Processing</p></td>
                                @elseif($order->status == "completed")
                                    <td class="p-3"><p class="p-1 m-0 rounded-2 bg-success text-white" style="font-size: 14px;">Completed</p></td>
                                @elseif($order->status == "canceled")
                                    <td class="p-3"><p class="p-1 m-0 rounded-2 bg-danger  text-white" style="font-size: 14px;">Canceled</p></td>
                                @endif
                              @if($order->status != 'canceled')
                                    <td class="p-3"><button data-url="/order/delete/{{ $order->id }}" class="order_delete"><i class="fa-regular fa-trash-can text-danger fs-5"></i></button></td>
                                @else
                                    <td class="p-3"></td>

                                @endif
                             </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- end main contact  -->
    <!-- start footer  -->
    <footer class="bg-gray p-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-img bg-light d-flex align-items-center justify-content-center"
                        style="width: 200px; height: 200px; border-radius: 50%;">
                        <img src="{{asset('front_assets/images/footer.png')}}" style="width: 80%;" alt="">
                    </div>
                    <div class="d-flex py-3 flex-column gap-3 col-md-4 col-sm-6">
                        <a href="#" class="text-white d-flex align-items-center gap-3"><i
                                class="fa-solid text-white fa-globe fs-4"></i>info@upitsa.net</a>
                        <a href="#" class="text-white d-flex align-items-center gap-3"><i
                                class="fa-solid text-white fa-globe fs-4"></i>upitsa.net</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 pt-5">
                    <span class="fs-5 text-beige">Quick Links</span>
                    <ul class="p-0 mt-3 d-flex flex-column gap-2">
                        <li class=""><a class="text-white hvr-forward" href="{{route('index')}}">Home</a></li>
                        <li class=""><a class="text-white hvr-forward" href="{{ route('about') }}">About</a></li>
                        <li class=""><a class="text-white hvr-forward" href="{{ route('maintenance') }}">Maintenance</a></li>
                        <li class=""><a class="text-white hvr-forward" href="{{ route('news') }}">News</a></li>
                        <li class=""><a class="text-white hvr-forward" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-5 pt-5">
                    <span class="fs-5 text-beige">About Us</span>
                    <p class="mt-3 text-white">HQ - Kingdom of Saudi Arabia - Riyadh - Olaya Computer Market - Al-Rasis
                        Building, Phone:
                        0115120404.
                        The capital is 1,000,000 riyals paid in full, membership number: 762862 - second degree. ISO
                        certificate 9001:2015.
                    </p>
                    <div class="contact-links d-flex gap-4 align-items-center justify-content-center">
                        <a href="#" class="hvr-float-shadow"><i
                                class="fa-brands fa-facebook-f fs-5 text-white "></i></a>
                        <a href="#" class="hvr-float-shadow"><i class="fa-brands fa-instagram fs-5 text-white "></i></a>
                        <a href="#" class="hvr-float-shadow"><i
                                class="fa-brands fa-linkedin-in fs-5 text-white "></i></a>
                        <a href="#" class="hvr-float-shadow"><i class="fa-solid fa-envelope fs-5 text-white "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer  -->


    <button id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></button>


    <!-- jquery -->
    <script src="{{asset('front_assets/js/jquery.js')}}"></script>
    <!-- font awesome  -->
    <script src="{{asset('front_assets/js/all.min.js')}}"></script>
    <!-- bootstrap  -->
    <script src="{{asset('front_assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- swiper js  -->
    <script src="{{asset('front_assets/js/swiper-bundle.min.js')}}"></script>
    <!-- counter up  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- animate  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('front_assets/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
        </script>
    <script src="{{asset('front_assets/js/custom.js')}}"></script>
<script>


    $('#contact_form').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: 'Post',
            url: '{{ route('post_contact') }}',
            data: formData,
            success: function(res) {
                $('#contact_form input').val('')
                $('#contact_form textarea').val('')
                swal("Good job!", "You clicked the button!", "success");
            }
        })

    })



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

    $(document).on("click", ".btn-order", function(e) {
        var button = $(this)
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Do you really want to delete this item ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var url = button.data('url');
                $.ajax({
                    url: url,
                    method: 'post',
                    type: 'post',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                }).done(function() {
                    swal("Good job!", "You clicked the button!", "success");
                    setTimeout(function() {
                        window.location.reload()
                    }, 1200);

                }).fail(function() {

                });
            } else {
                toastr.error('Canceled Deleted item');
            }
        });
    });

    $(document).on("click", ".order_delete", function(e) {

        var button = $(this)
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Do you really want to delete this item ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var id = button.data('id')
                var url = button.data('url');
                $.ajax({
                    url: url,
                    method: 'PUT',
                    type: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                }).done(function() {
                    swal("Good job!", "You clicked the button!", "success")
                    setTimeout(function() {
                        window.location.reload()
                    }, 1200);


                }).fail(function() {

                    toastr.error(
                        'You cannot delete it. There are subsections associated with it !');

                });
            } else {
                toastr.error('Canceled Deleted item');
            }
        });
    });
</script>
</body>

</html>
