@extends('admin.master')

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center">
        <div class="breadcrumb-title pe-3 text-white">Pages</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt text-white"></i></a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">User Profile</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="profile-cover bg-dark"></div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="mb-0">My Account</h5>
                    <hr>
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">USER INFORMATION</h6>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{ route('admin.profile.update' , Auth::user()->id) }}" class="row g-3" >
                               @csrf
                                @method('put')
                                <div class="col-6">
                                    <label class="form-label">Name Admin </label>
                                    <input name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Email address</label>
                                    <input name="email" type="text" class="form-control" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Change Profile Image</label>
                                    <input  name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <div class="profile-avatar text-center">
                        <img src="{{ asset('images/'.Auth::user()->image) ?? 'https://ui-avatars.com/api/?name='. Auth::guard("web")->user()->name  }}" class="rounded-circle shadow" width="120" height="120" alt="">
                    </div>
                    <div class="text-center mt-4">
                        <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                        <p class="mb-0 text-secondary">Super Admin</p>
                        <h6 class="mb-1">{{ Auth::user()->email  }}</h6>

                    </div>
        </div>
    </div><!--end row-->



    @Stop
