@extends('admin.master')


@section('content')

    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0"> Edit Content {{ $page->solution->name }} </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-12 d-flex">
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
                            <form method="post" id="add_form" enctype="multipart/form-data" action="{{ route('admin.solution.update_page' , $page->id) }}" class="row g-3">
                                @csrf
                                @method('put')
                                <div class="col-12">
                                    <label  class="form-label">WHAT WE OFFER</label>
                                    <input name="text1"  value="{{ $page->text1 }}"  class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">COMPREHENSIVE INTEGRATION OF DATA CENTER DESIGN</label>
                                    <input name="text2"  value="{{ $page->text2 }}"   class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">CUSTOMERS’ NEEDS
                                    </label>
                                    <input name="text3"  value="{{ $page->text3 }}"   class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">PRECISE CUSTOMIZATION
                                    </label>
                                    <input name="text4"  value="{{ $page->text4 }}"  class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">Sub Title
                                    </label>
                                    <input name="text5"  value="{{ $page->text5 }}"  class="form-control"  type="text">
                                </div>
                                <div class="col-12">
                                    <label  class="form-label">Desc
                                    </label>
                                    <input name="text6"   value="{{ $page->text6 }}"  class="form-control"  type="text">
                                </div>
                                <div>
                                    <label  class="form-label">Large file input example</label>
                                    <input  name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <img width="150px" height="400px" style="border-radius: 12px ;"  src="{{ asset('images/'.$page->image) }}" class="card-img-top" alt="...">

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Update Content</button>
                                    </div>
                                </div>
                            </form>
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
