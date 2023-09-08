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
                    <form class="add-mode-form" id="add_model_form"  enctype="multipart/form-data" action="{{ route('admin.contact.store') }}" method="post">
                        @csrf

                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">district</label>
                            <input required name="district"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">email</label>
                            <input required name="email"  class="form-control"  type="email">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">phone</label>
                            <input required name="phone"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">address</label>
                            <input required name="address"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">location</label>
                            <input required name="location"  class="form-control"  type="url">
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
                    <form class="form_edit" id="form_edit"  enctype="multipart/form-data" action="{{ route('admin.contact.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id"  class="form-control">
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">district</label>
                            <input required name="district" id="edit_district" class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">email</label>
                            <input required name="email" id="edit_email"  class="form-control"  type="email">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">phone</label>
                            <input required name="phone" id="edit_phone"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">address</label>
                            <input required name="address" id="edit_address"  class="form-control"  type="text">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-2">
                            <label for="formFileLg" class="form-label">location</label>
                            <input required name="location" id="edit_location"  class="form-control"  type="url">
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

    <h3 class="mt-4" style="color: #2f2f2f">CONTACT US INFORMATION</h3>
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
                        <th>district</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>location</th>
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
                url: '{{ route('admin.contact.contact.getdata') }}',
            },
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
                {
                    data: 'district',
                    name: 'district',
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
                    data: 'phone',
                    name: 'phone',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'address',
                    name: 'address',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'location',
                    name: 'location',
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
                $('#edit_district').val(button.data('district'))
                $('#edit_email').val(button.data('email'))
                $('#edit_phone').val(button.data('phone'))
                $('#edit_address').val(button.data('address'))
                $('#edit_location').val(button.data('map'))
            });
        });


    </script>
@stop
