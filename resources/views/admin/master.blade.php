<!doctype html>
<html lang="en" class="light-theme">

<head>
  Required meta tags
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('admin_assets/images/favicon-32x32.png')}} " type="image.png')}} " />
  <link href="{{asset('admin_assets/plugins/simplebar/css/simplebar.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/plugins/metismenu/css/metisMenu.min.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/css/bootstrap.min.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/css/bootstrap-extended.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/css/style.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/css/icons.css')}} " rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/extensions/toastr.min.css') }}">

	<link href="{{asset('admin_assets/css/pace.min.css')}} " rel="stylesheet" />

  <link href="{{asset('admin_assets/css/dark-theme.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/css/light-theme.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/css/semi-dark.css')}} " rel="stylesheet" />
  <link href="{{asset('admin_assets/css/header-colors.css')}} " rel="stylesheet" />
   @yield('css')
  <title>Snacked - Bootstrap 5 Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="#">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown dropdown-user-setting">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="user-setting d-flex align-items-center">
                    <img src="{{ asset('images/'.Auth::user()->image) ?? 'https://ui-avatars.com/api/?name='. Auth::guard("web")->user()->name  }}" class="user-img" alt="">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                     <a class="dropdown-item" href="#">
                       <div class="d-flex align-items-center">
                          <img  src="{{ asset('images/'.Auth::user()->image) ?? 'https://ui-avatars.com/api/?name='. Auth::guard("web")->user()->name  }}" alt="" class="rounded-circle" width="54" height="54">
                          <div class="ms-3">
                            <h6 class="mb-0 dropdown-user-name">{{Auth::user()->name}}</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">Super Admin</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-person-fill"></i></div>
                           <div class="ms-3"><span>Profile</span></div>
                         </div>
                       </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form  method="post" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick=" confirm('Are you sure?!')  ; event.preventDefault(); document.getElementById('logout-form').submit();" >
                         <div class="d-flex align-items-center">
                           <div class=""><i class="bi bi-lock-fill"></i></div>
                           <div class="ms-3"><span>Logout</span></div>
                         </div>
                       </a>
                    </li>
                </ul>
              </li>

              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

       @include('admin.parts.sidebar')

       <!--start content-->
          <main class="page-content">

            @yield('content')


          </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       <div class="switcher-body">
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  </div>
  <!--end wrapper-->



 Bootstrap bundle JS
  <script src="{{asset('admin_assets/js/bootstrap.bundle.min.js')}} "></script>

  <script src="{{asset('admin_assets/js/jquery.min.js')}} "></script>
  <script src="{{asset('admin_assets/plugins/simplebar/js/simplebar.min.js')}} "></script>
  <script src="{{asset('admin_assets/plugins/metismenu/js/metisMenu.min.js')}} "></script>

  <script src="{{asset('admin_assets/plugins/notifications/js/lobibox.min.js')}}"></script>
  <script src="{{ asset('admin_assets/plugins/notifications/js/notifications.min.js') }}"></script>
  <script src="{{asset('admin_assets/plugins/notifications/js/notification-custom-script.js')}}"></script>
  <script src="{{asset('admin_assets/js/app.js')}} "></script>
  <script src="{{asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/table-datatable.js') }}"></script>
  <script src="{{ asset('dashboard/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @yield('js')

  <script>


          $(".alertere").fadeTo(2000, 500).slideUp(500, function() {
          $(".alertere").slideUp(500);
           });


      $('.add-mode-form').on('submit', function(event) {
          $('.search_input').val("").trigger("change")
          // وقف عمل البوتن
          event.preventDefault();
          // البانات من الفورم داتا اللي انتا فيه و المسار برضو بالفورم والميثود برضك
          var data = new FormData(this);
          let url = $(this).attr('action');
          var method = $(this).attr('method');
          // فليديشن
          $('input').removeClass('is-invalid');
          $('.invalid-feedback').text('');
          // الاجاكس حبيبنا
          $.ajax({
              type: method,
              cache: false,
              contentType: false,
              processData: false,
              url: url,
              data: data,

              beforeSend: function() {},
              success: function(result) {
                  $('#full-modal-stem').modal('hide');
                  $('#add_model_form').trigger("reset");
                  toastr.success(result.success);
                  table.draw()
              },
              error: function(data) {
                  if (data.status === 422) {
                      var response = data.responseJSON;
                      $.each(response.errors, function(key, value) {
                          var str = (key.split("."));
                          if (str[1] === '0') {
                              key = str[0] + '[]';
                          }
                          $('[name="' + key + '"], [name="' + key + '[]"]').addClass(
                              'is-invalid');
                          $('[name="' + key + '"], [name="' + key + '[]"]').closest(
                              '.form-group').find('.invalid-feedback').html(value[0]);
                      });
                  } else {
                      console.log('ahmed');
                  }
              }
          });
      });

      $('#form_edit').on('submit', function(event) {
          $('.search_input').val("").trigger("change")

          event.preventDefault();
          var data = new FormData(this);
          let url = $(this).attr('action');
          let method = $(this).attr('method');

          $.ajax({
              type: method,
              cache: false,
              contentType: false,
              processData: false,
              url: url,
              data: data,

              success: function(result) {
                  $("#edit-modal").modal('hide');
                  $('#form_edit').trigger("reset");
                  toastr.success(result.success);
                  table.draw()

              },
              error: function(data) {
                  if (data.status === 422) {
                      var response = data.responseJSON;
                      $.each(response.errors, function(key, value) {
                          var str = (key.split("."));
                          if (str[1] === '0') {
                              key = str[0] + '[]';
                          }
                          $('[name="' + key + '"], [name="' + key + '[]"]').addClass(
                              'is-invalid');
                          $('[name="' + key + '"], [name="' + key + '[]"]').closest(
                              '.form-group').find('.invalid-feedback').html(value[0]);
                      });
                  } else {
                      console.log('ahmed');
                  }
              }
          });
      })


      $(document).on("click", ".btn_delete", function(e) {

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
                      method: 'DELETE',
                      type: 'DELETE',
                      data: {
                          _token: '{{ csrf_token() }}'
                      },
                  }).done(function() {
                      toastr.success('Deleted Successfully');
                      table.draw()

                  }).fail(function() {

                      toastr.error(
                          'You cannot delete it. There are subsections associated with it !');

                  });
              } else {
                  toastr.error('Canceled Deleted item');
              }
          });
      });

      $(document).on('click', '.button_modal', function(event) {
          $('input').removeClass('is-invalid');
          $('.invalid-feedback').text('');
      });
  </script>

</body>

</html>
