<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css')}}">
    <!-- swiper js  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/swiper-bundle.min.css')}}">
    <!-- font awesome  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/all.min.css')}}">
    <!-- animate  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/animate.css')}}">
    <!-- hover.css  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/hover-min.css')}}">
    <!-- my style  -->
    <link rel="stylesheet" href="{{ asset('front_assets/css/style.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('front_assets/images/image1.png')}}" type="image/x-icon">
    <title>UPIT</title>
</head>

<body class="vh-100 overflow-hidden ">

    <section id="register" class="vh-100 bg-danger w-50 m-0 px-1 px-md-2 px-lg-5 py-5">
        <div class="container">
            <div class="all d-flex flex-column  vh-100">
                <p class="fs-2 text-white my-5">Saudi Electronic Trading & Contracting Company Limited -
                    <span style="font-family: bold;">login</span>
                </p>
                @if ($errors->any() > 0)
                    <div class="alert alert-danger alert-dismissible fade show alertere" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form  method="POST" action="{{ route('login') }}" class="w-100">
                  @csrf
                    <input id="email"  name="email" value="{{old('email')}}" required autofocus autocomplete="username" type="email" class="form-control border-white bg-transparent mb-3 rounded-3 py-2"
                        placeholder="Email">
                    <input id="password"
                           name="password"
                           required autocomplete="current-password" type="password" class="form-control border-white bg-transparent mb-3 rounded-3 py-2"
                        placeholder="Password">
                    <!-- <a href="#" class="text-white d-block text-end" style="font-size: 14px;">Forgot Password?</a> -->
                    @if (Route::has('password.request'))
                        <a class="forgot-modal btn text-white d-block text-end"  href="{{ route('password.request') }}"
                           role="button">Forgot Password ?</a>
                    @endif

                    <button type="submit" class="btn bg-white text-danger d-block mx-auto my-5 px-5"
                        style="font-size: 14px;">Login</button>
                </form>
                <p class="text-white text-center">Do not have an account? <a href="{{  route('register') }}"
                        class="text-white fs-5" style="font-family: bold;">Sign Up!</a>
                </p>
            </div>
        </div>
    </section>












    <!-- jquery -->
    <script src="{{ asset('front_assets/js/jquery.js')}}"></script>
    <!-- font awesome  -->
    <script src="{{ asset('front_assets/js/all.min.js')}}"></script>
    <!-- bootstrap  -->
    <script src="{{ asset('front_assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- swiper js  -->
    <script src="{{ asset('front_assets/js/swiper-bundle.min.js')}}"></script>
    <!-- counter up  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
        integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- animate  -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- <script>
        $('.bd-example-modal-sm').modal(options)
    </script> -->
    <script src="{{ asset('front_assets/js/custom.js')}}"></script>
</body>

</html>
