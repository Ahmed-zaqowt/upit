@extends('admin.master')


@section('content')



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Solution</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" action="{{ route('admin.solution.update') }}" method="post">
                        <input type="hidden" name="id" value="">
                        @csrf

                        <input name="id" id="id"  class="form-control"  type="hidden">

                        <div>
                            <label  class="form-label">Name</label>
                            <input name="name" id="edit_name"  class="form-control"  type="text">
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

    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0">ADD SOLUTION</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-4 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
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
                            <form method="post" id="add_form" enctype="multipart/form-data" action="{{ route('admin.solution.store') }}" class="row g-3">
                                @csrf
                            <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">WHAT WE OFFER</label>
                                    <input name="text1"   class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">COMPREHENSIVE INTEGRATION OF DATA CENTER DESIGN</label>
                                    <input name="text2"   class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">CUSTOMERS’ NEEDS
                                    </label>
                                    <input name="text3"   class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">PRECISE CUSTOMIZATION
                                    </label>
                                    <input name="text4"  class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">Sub Title
                                    </label>
                                    <input name="text5"  class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">Desc
                                    </label>
                                    <input name="text6"   class="form-control"  type="text">
                                </div>
                                <div>
                                    <label  class="form-label">Large file input example</label>
                                    <input  name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Add Client</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card radius-10">
                        <div class="card-body">

                            @forelse($solutions as $solution)
                                <div class="chip">
                                    <span data-id="{{ $solution->id }}" data-name="{{ $solution->name }}"  class="edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">{{$solution->name}}</span>
                                    <form class="d-inline" action="{{ route('admin.solution.delete' , $solution->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure?!')" style=" border: none ; height: 10px ;" ><span style="color: red" class="closebtn" >×</span></button>
                                    </form>
                                </div>
                            @empty
                              <p >There are no clients yet ... </p>
                            @endforelse
                        </div>
                    </div>
                </div>
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
                var name = button.data('name')
                $('#id').val(id);
                $('#edit_name').val(name);
            });
        });
    </script>
@stop
