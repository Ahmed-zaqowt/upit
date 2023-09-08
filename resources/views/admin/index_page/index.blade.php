@extends('admin.master')

@section('content')


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form enctype="multipart/form-data" action="{{ route('admin.home.update_image') }}" method="post">


                        @csrf
                        <div>
                            <input type="hidden" name="id" id="id" >
                            <label  class="form-label">Large file input example</label>
                            <input type="hidden" name="location" value="index.slider">
                            <input required name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    @if ($errors->any() > 0)
        <div class="alert alert-danger alert-dismissible fade show alertere col-xl-9 mx-auto" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Fancy File Upload</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-{{ session('type') }} alertere">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <form enctype="multipart/form-data" action="{{ route('admin.home.index_album') }}"  method="post">
                        @csrf
                        <div>
                            <label  class="form-label">Large file input example</label>
                            <input type="hidden" name="location" value="index.slider">
                            <input  name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                         <button  class="btn w-100 mt-3 " style="background-color: #8E0909" type="submit"><span style="color: white">
                                 Submit
                             </span></button>
                    </form>
                </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        @forelse($slider_index_top as $img)
                            <div class="col-4">
                                <div class="card">
                                    <img width="150px" height="150px"  src="{{ asset('images/'.$img->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <form class="d-inline" action="{{ route('admin.home.delete_index_album' , $img->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Are you sure?!')"
                                                    class="btn btn-danger ">delete</button>
                                        </form>
                                        <button type="button" data-id="{{ $img->id }}" class="btn btn-info edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            update
                                        </button>

                                    </div>
                                </div>
                            </div>

                        @empty
                            <div class="alert border-0 bg-light-danger alert-dismissible fade show">
                                <div class="text-danger">There are no items yet .. !!</div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>








        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Fancy File Upload</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    @if (session('msg3'))
                        <div class="alert alert-{{ session('type') }} alertere">
                            {{ session('msg3') }}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="{{ route('admin.home.index_album') }}"  method="post">
                        @csrf
                        <div>
                            <input type="hidden" name="location" value="index.image.card">
                            <label  class="form-label">Large file input example</label>
                            <input required name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                        <button  class="btn w-100 mt-3 " style="background-color: #8E0909" type="submit"><span style="color: white">
                                 Submit
                             </span></button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @forelse($image_card as $img)

                        <div class="col-4">
                            <div class="card">
                                <img width="150px" height="150px"  src="{{ asset('images/'.$img->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <form class="d-inline" action="{{ route('admin.home.delete_index_album' , $img->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure?!')"
                                                class="btn btn-danger ">delete</button>
                                    </form>
                                    <button type="button" data-id="{{ $img->id }}" class="btn btn-info edit_btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        update
                                    </button>

                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="alert border-0 bg-light-danger alert-dismissible fade show">
                            <div class="text-danger">There are no items yet .. !!</div>
                        </div>
                    @endforelse


                </div>
            </div>
        </div>


            <form method="post" enctype="multipart/form-data" action="{{ route('admin.home.store') }}">
                <input type="hidden" name="id" value="{{ $about->id_create ?? '' }}">
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

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-4 d-flex">
                                <div class="card border shadow-none w-100">
                                    <div class="card-body">

                                        <h5>Section 1</h5>
                                        <hr>
                                        <div class="col-12">
                                            <label class="form-label">Sub Title</label>
                                            <input  value="{{ $about->text1 ?? ''}}"  name="text1" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Title</label>
                                            <input  value="{{ $about->text2 ?? ''}}" name="text2" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Sub Title</label>
                                            <input value="{{ $about->text3 ?? ''}}"  name="text3" class="form-control" >
                                        </div>
                                        <div>
                                            <label  class="form-label">Large file input example</label>
                                            <input   name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                                        </div>
                                        <hr>
                                        @if($about != null)
                                            <div class="my-5">
                                                <img width="100px" height="100px" src="{{ asset('images/' . $about->image ?? '')  }}">
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
                                            <input value="{{ $about->text4 ?? '' }}" name="text4"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Sub Title</label>
                                            <input value="{{ $about->text5  ?? ''}}" name="text5"   class="form-control"  type="text">
                                        </div>
                                        <hr>
                                        <div class="col-12">
                                            <label  class="form-label">Item</label>
                                            <input value="{{ $about->text6 ?? '' }}" name="text6"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Item</label>
                                            <input value="{{ $about->text7 ?? ''}}" name="text7"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Item</label>
                                            <input value="{{ $about->text8 ?? '' }}" name="text8"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Item</label>
                                            <input value="{{ $about->text9 ?? ''}}" name="text9"   class="form-control"  type="text">
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
                                            <label  class="form-label">Title</label>
                                            <input value="{{ $about->text10?? '' }}" name="text10"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Sub Title</label>
                                            <input value="{{ $about->text11  ?? ''}}" name="text11"   class="form-control"  type="text">
                                        </div>
                                        <hr>
                                        <div class="col-12">
                                            <label class="form-label">Item</label>
                                            <input value="{{ $about->text12 ?? '' }}" name="text12"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Item</label>
                                            <input value="{{ $about->text13 ?? ''}}" name="text13"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Item</label>
                                            <input value="{{ $about->text14 ?? '' }}" name="text14"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Item</label>
                                            <input value="{{ $about->text15 ?? ''}}" name="text15"   class="form-control"  type="text">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-4 d-flex">
                                <div class="card border shadow-none w-100">
                                    <div class="card-body">

                                        <h5>Section 4</h5>
                                        <hr>
                                        <div class="col-12">
                                            <label class="form-label">OUR PARTNERS</label>
                                            <input  value="{{ $about->text16 ?? ''}}"  name="text16" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">OUR CLIENTS</label>
                                            <input  value="{{ $about->text17 ?? ''}}" name="text17" class="form-control" >
                                        </div>
                                        <hr>
                                        <div class="col-12">
                                            <label class="form-label">Title</label>
                                            <input value="{{ $about->text18 ?? ''}}"  name="text18" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Sub Title</label>
                                            <input  value="{{ $about->text19 ?? ''}}"  name="text19" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Title</label>
                                            <input  value="{{ $about->text20 ?? ''}}" name="text20" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Sub Title</label>
                                            <input value="{{ $about->text21 ?? ''}}"  name="text21" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Title</label>
                                            <input  value="{{ $about->text22 ?? ''}}"  name="text22" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Sub Title</label>
                                            <input  value="{{ $about->text23 ?? ''}}" name="text23" class="form-control" >
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 d-flex">
                                <div class="card border shadow-none w-100">
                                    <div class="card-body">
                                        <h5>Section 5</h5>
                                        <hr>
                                        <div class="col-12">
                                            <label  class="form-label">Title</label>
                                            <input value="{{ $about->text24 ?? '' }}" name="text24"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Sub Title</label>
                                            <input value="{{ $about->text25  ?? ''}}" name="text25"   class="form-control"  type="text">
                                        </div>
                                        <hr>
                                        <div class="col-12">
                                            <label  class="form-label">Description</label>
                                            <textarea  name="text26" class="form-control"  type="text">{{ $about->text26 ?? '' }}</textarea>
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Title</label>
                                            <input value="{{ $about->text27 ?? ''}}" name="text27"   class="form-control"  type="text">
                                        </div>
                                        <div class="col-12">
                                            <label  class="form-label">Sub Title</label>
                                            <input value="{{ $about->text28 ?? '' }}" name="text28"   class="form-control"  type="text">
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


    </form>




@stop
@section('js')


    <script>
    $(document).ready(function() {
        $(document).on('click', '.edit_btn', function(event) {

            event.preventDefault();
            var button = $(this)
            var id = button.data('id')
            $('#id').val(id);
        });
    });
</script>
@stop
