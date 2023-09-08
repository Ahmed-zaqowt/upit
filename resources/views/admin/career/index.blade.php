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
                    <form class="add-mode-form" id="add_model_form"  enctype="multipart/form-data" action="{{ route('admin.career.store') }}" method="post">
                        @csrf

                        <div class="mb-2">
                            <label  class="form-label">Title</label>
                            <input required name="title"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Sub Title</label>
                            <input required name="subtitle"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Description</label>
                            <textarea required name="desc"  class="form-control"  type="text"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Start</label>
                            <input required name="start"  class="form-control"  type="date">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">End</label>
                            <input required name="end"  class="form-control"  type="date">
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
                    <form class="form_edit" id="form_edit"  enctype="multipart/form-data" action="{{ route('admin.career.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id"  class="form-control">
                        <div class="mb-2">
                            <label  class="form-label">Title</label>
                            <input id="edit_title" required name="title" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Title</label>
                            <input id="edit_subtitle" required name="subtitle" class="form-control" type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Description</label>
                            <textarea id="edit_desc" required name="desc"  class="form-control"  type="text"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">Start</label>
                            <input required id="edit_start" name="start"  class="form-control"  type="date">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label">End</label>
                            <input required id="edit_end" name="end"  class="form-control"  type="date">
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



    <h2 class="mt-4" style="color: #2f2f2f">Opration On Careers</h2>
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
                        <th>Title</th>
                        <th>SubTitle</th>
                        <th>Description</th>
                        <th>Start</th>
                        <th>End</th>
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
                url: '{{ route('admin.career.getdata') }}',
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
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
                    data: 'subtitle',
                    name: 'subtitle',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'desc',
                    name: 'description',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'start',
                    name: 'start',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'end',
                    name: 'end',
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
                $('#edit_subtitle').val(button.data('subtitle'))
                $('#edit_desc').val(button.data('desc'))
                $('#edit_start').val(button.data('start'))
                $('#edit_end').val(button.data('end'))
            });
        });


    </script>
@stop
