@extends('admin.master')
<link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

@section('content')


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
                url: '{{ route('admin.contact.getdata') }}',
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
                    data: 'email',
                    name: 'email',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'msg',
                    name: 'message',
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
