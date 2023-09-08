@extends('admin.master')
<link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

@section('content')
 <form method="post" enctype="multipart/form-data" action="{{ route('admin.about.store') }}">
     <input type="hidden" name="id" value="{{ $about->id ?? '' }}">
     @csrf
     @if (session('msg'))
         <div class="alert alert-{{ session('type') }} alertere">
             {{ session('msg') }}
         </div>
     @endif
     @if ($errors->any() > 0)
         <div class="alert alert-danger alert-dismissible fade show alertere" role="alert">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     <div class="card">
         <div class="card-header py-3">
             <h6 class="mb-0">ABOUT US </h6>
         </div>
         <div class="card-body">
             <div class="row">
                 <div class="col-12 col-lg-4 d-flex">
                     <div class="card border shadow-none w-100">
                         <div class="card-body">

                             <h5>Section 1</h5>
                             <hr>
                             <div class="col-12">
                                 <label class="form-label">About Us</label>
                                 <textarea  name="text1" class="form-control" placeholder="About Us">{{ $about->text1 ?? ''}}</textarea>
                             </div>
                             <div>
                                 <label  class="form-label">Large file input example</label>
                                 <input   name="image_sec_1" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                             </div>
                              <hr>
                             @if($about != null)
                             <div class="my-5">
                                 <img width="100px" height="100px" src="{{ asset('images/' . $about->image_sec_1 ?? '')  }}">
                             </div>
                             <div class="my-5">
                                 <img width="100px" height="100px" src="{{ asset('images/' . $about->image_sec_2 ?? '')}}">
                             </div>
                             <div>
                                 <img width="100px" height="100px" src="{{ asset('images/' . $about->image_sec_3 ?? '')}}">
                             </div>
                             @endif
                         </div>
                     </div>
                 </div>
                 <div class="col-12 col-lg-4 d-flex">
                     <div class="card border shadow-none w-100">
                         <div class="card-body">
                             <h5>Section 2</h5>
                             <hr>
                             <div class="col-12">
                                 <label  class="form-label">Title</label>
                                 <input value="{{ $about->text2 ?? '' }}" name="text2"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">Sub Title</label>
                                 <input value="{{ $about->text3  ?? ''}}" name="text3"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">Descraption
                                 </label>
                                 <textarea  name="text4"   class="form-control"  type="text">{{ $about->text4 ?? '' }}</textarea>
                             </div>
                             <div>
                                 <label  class="form-label">Large file input example</label>
                                 <input  name="image_sec_2" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                             </div>
                             <hr>
                             <div class="col-12">
                                 <label  class="form-label">Title</label>
                                 <input value="{{ $about->text5 ?? '' }}" name="text5"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">Sub Title</label>
                                 <input value="{{ $about->text6 ?? ''}}" name="text6"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">Descraption
                                 </label>
                                 <textarea  name="text7"   class="form-control"  type="text">{{ $about->text7 ?? ''}}</textarea>
                             </div>
                             <div>
                                 <label  class="form-label">Large file input example</label>
                                 <input  name="image_sec_3" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-12 col-lg-4 d-flex">
                     <div class="card border shadow-none w-100">
                         <div class="card-body">
                             <h5>Section 3</h5>
                             <hr>
                             <div class="col-12">
                                 <label  class="form-label">OUR VISION
                                 </label>
                                 <textarea  name="text8"   class="form-control"  type="text">{{ $about->text8 ?? ''}}</textarea>
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">OUR MISSION
                                 </label>
                                 <textarea  name="text9"   class="form-control"  type="text">{{ $about->text9 ?? ''}}</textarea>
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">WHY CHOOSE SETRA
                                 </label>
                                 <textarea  name="text10"   class="form-control"  type="text">{{ $about->text10 ?? ''}}</textarea>
                             </div>

                             <hr>
                             <div class="col-12">
                                 <label  class="form-label">first advantage</label>
                                 <input value="{{ $about->text11 ?? ''}}" name="text11"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">second advantage</label>
                                 <input value="{{ $about->text12 ?? '' }}" name="text12"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">third feature</label>
                                 <input value="{{ $about->text13 ?? ''}}" name="text13"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label class="form-label">fourth feature</label>
                                 <input value="{{ $about->text14 ?? '' }}" name="text14"   class="form-control"  type="text">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-header py-3">
         </div>
         <div class="card-body">
             <div class="row">
                 <div class="col-12 col-lg-14 d-flex">
                     <div class="card border shadow-none w-100">
                         <div class="card-body">
                             <h5>Section 4</h5>
                             <hr>
                             <div class="col-12">
                                 <label  class="form-label">Title</label>
                                 <input value="{{ $about->text15 ?? ''}}" name="text15"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">Sub Title</label>
                                 <input value="{{ $about->text16 ?? ''}}" name="text16"   class="form-control"  type="text">
                             </div>
                             <div class="col-12">
                                 <label  class="form-label">Descraption
                                 </label>
                                 <textarea  name="text17"   class="form-control"  type="text">{{ $about->text17 ?? ''}}</textarea>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

                              <div class="d-grid">
                                  <button type="submit" class="btn btn-primary">Add Client</button>
                              </div>
                          </div>

 </form>

@stop
