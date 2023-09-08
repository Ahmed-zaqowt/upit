@extends('admin.master')
<link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

@section('content')


    <div class="modal fade" id="f-model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Image </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add-mode-form" id="add_model_form"  enctype="multipart/form-data" action="{{ route('admin.feature.store') }}" method="post">
                        @csrf
                       <input type="hidden" id="id" name="id" >
                        <div class="mb-2">
                            <label  class="form-label">Name</label>
                            <input required name="name"  class="form-control" placeholder="Features Name"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info w-50 d-inline">Submit</button>
                        </div>
                    </form>

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable_f" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-modal-f" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_edit" id="form_edit_f"  enctype="multipart/form-data" action="{{ route('admin.feature.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id"  class="form-control">
                        <div class="mb-2">
                            <label  class="form-label">Title</label>
                            <input id="edit_name" required name="name" class="form-control" type="text">
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

    <div class="modal fade" id="full-modal-stem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add-mode-form" id="add_model_form"  enctype="multipart/form-data" action="{{ route('admin.service.store') }}" method="post">
                        @csrf

                        <div class="mb-2">
                            <label  class="form-label">Title</label>
                            <input required name="title"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Description</label>
                            <input required name="description"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Image</label>
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
                    <h5 class="modal-title" id="exampleModalLabel">Update Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form_edit" id="form_edit"  enctype="multipart/form-data" action="{{ route('admin.service.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id"  class="form-control">
                        <div class="mb-2">
                            <label  class="form-label">Title</label>
                            <input id="edit_title" required name="title" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Description</label>
                            <input id="edit_description" required name="description"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Image</label>
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


    {{--      xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx                 --}}

    <h2 class="mt-4" style="color: #2f2f2f">Opration On Service</h2>
    <div class="card">
        <div class="card-body">
            <button data-bs-toggle="modal" data-bs-target="#full-modal-stem"   class="btn w-100 mt-3 " style="background-color: #8E0909" type="submit"><span style="color: white">
                                 Add
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
                        <th>Name</th>
                        <th>Description</th>
                        <th>Features</th>
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
                url: '{{ route('admin.service.getdata') }}',
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
                    data: 'name',
                    name: 'name',
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
                    data: 'features',
                    name: 'features',
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
        $( "#f-model" ).on('shown.bs.modal', function(){
            var button = $('#btn-add-f')
            var id = button.data('id')
            var table = $('#datatable_f').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,

                ajax: {
                    url: '{{ url('admin/feature/getdata') }}'+ "/" + id ,
                },
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },

                    {
                        data: 'name',
                        name: 'name',
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

        $(document).ready(function() {
            $(document).on('click', '.btn_edit_f', function(event) {
                $('input').removeClass('is-invalid');
                $('.invalid-feedback').text('');
                event.preventDefault();
                var button = $(this)
                var idf = button.data('id')
                var name = button.data('name')
                $('#id').val(idf);
                $('#edit_name').val(name);

            });
        });

        $(document).ready(function() {
            $(document).on('click', '.f-add', function(event) {
                event.preventDefault();
                var button = $(this)
                var id = button.data('id')
                $('#id').val(id);
            });
        });

        $('.f-model').on('submit', function(event) {
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
                    $('#f-model').trigger("reset");
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


        $('#form_edit_f').on('submit', function(event) {

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
                    $("#edit-modal-f").modal('hide');
                    $('#form_edit_f').trigger("reset");
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

    </script>
@stop
