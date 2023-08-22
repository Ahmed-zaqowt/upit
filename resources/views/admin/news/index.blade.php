@extends('admin.master')
<link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

@section('content')

    <div class="modal fade" id="full-modal-stem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add-mode-form" id="add_model_form"  enctype="multipart/form-data" action="{{ route('admin.news.store') }}" method="post">
                        @csrf

                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">Title</label>
                            <input required name="title"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">Description</label>
                            <input required name="description"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">Image</label>
                            <input required name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_edit" id="form_edit"  enctype="multipart/form-data" action="{{ route('admin.news.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id"  class="form-control">
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">Title</label>
                            <input id="edit_title" required name="title" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">Description</label>
                            <input id="edit_description" required name="description"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">Image</label>
                            <input  name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" action="{{ route('admin.home.update_image') }}" method="post">

                        <input type="hidden" name="id" value="{{ $image_news->id ?? null }}">
                        @csrf
                        <div>
                            <label for="formFileLg" class="form-label">Large file input example</label>
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

    {{--      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx                 --}}

    <h2 style="color: #2f2f2f">Image Section One</h2>
    <div class="card mb-5">
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.home.index_album') }}"  method="post">
                @csrf
                @if($image_news == null)
                <div>
                    <label for="formFileLg" class="form-label">chose the image .. </label>
                    <input type="hidden" name="location" value="news.one">
                    <input required name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

                <button  class="btn w-100 mt-3 " style="background-color: #8E0909" type="submit"><span style="color: white">
                                 Submit
                             </span></button>
                @endif
            </form>
            @if($image_news != null)

            <img width="150px" height="400px" style="border-radius: 12px ;"  src="{{ asset('images/'.$image_news->image) }}" class="card-img-top" alt="...">
              <button data-id="{{ $image_news->id }}" type="button" class="btn btn-info update_btn mt-3 w-100 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                 update
              </button>

            @endif
        </div>
    </div>


    {{--      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx                 --}}

    <h2 class="mt-4" style="color: #2f2f2f">Opration On News</h2>
    <div class="card">
        <div class="card-body">
            <button data-bs-toggle="modal" data-bs-target="#full-modal-stem"   class="btn w-100 mt-3 " style="background-color: #8E0909" type="submit"><span style="color: white">
                                 Add News
                             </span></button>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>





@stop


@section('js')
    <script src="{{asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/table-datatable.js')}}"></script>

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //bindTable
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,

            ajax: {
                url: '{{ route('admin.news.getdata') }}',
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
                {
                    "data": 'image',
                    "name": 'image',
                    render: function (data, type, full, meta) {
                        return `<img src="{{ asset('images/${data}') }}" style="width:100px;height:100px;"  class="img-fluid img-thumbnail">`;
                    },
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'title',
                    name: 'title',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'description',
                    name: 'description',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]

        });

        $(document).ready(function() {
            $(document).on('click', '.edit_btn', function(event) {
                $('input').removeClass('is-invalid');
                $('.invalid-feedback').text('');
                event.preventDefault();
                var button = $(this)
                var id = button.data('id')
                $('#id').val(id);
                $('#edit_title').val(button.data('title'))
                $('#edit_description').val(button.data('description'))
            });
        });


    </script>
@stop
