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
                            <label for="formFileLg" class="form-label">Large file input example</label>
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
                            <label for="formFileLg" class="form-label">Large file input example</label>
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
                    @if (session('msg2'))
                        <div class="alert alert-{{ session('type') }} alertere">
                            {{ session('msg2') }}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="{{ route('admin.home.text') }}"  method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $title_one->id  ?? null}}">
                        <div class="input-group mb-3">
                            <input type="hidden" name="location" value="index.title.1">
                            <input name="name" type="text" class="form-control" placeholder="{{ $title_one->name ?? 'not yet' }}" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">update</button>
                        </div>
                    </form>
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
                            <label for="formFileLg" class="form-label">Large file input example</label>
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
