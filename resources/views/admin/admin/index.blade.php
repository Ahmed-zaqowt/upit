@extends('admin.master')


@section('content')



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" action="{{ route('admin.admin.update') }}" method="post">
                        @csrf
                        <input name="id" id="id"  class="form-control"  type="hidden">

                        <div>
                            <label  class="form-label">Name</label>
                            <input required name="name" id="edit_name"  class="form-control"  type="text">
                        </div>
                        <div>
                            <label  class="form-label">Email</label>
                            <input required name="email"  class="form-control" id="edit_email" type="email">
                        </div>
                        <div>
                            <label class="form-label">Role</label>
                            <select name="role" id="edit_role" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{ $role->name  }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label  class="form-label">Image</label>
                            <input  name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
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
            <h6 class="mb-0">ADMINS</h6>
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
                            <form method="post" id="add_form" enctype="multipart/form-data" action="{{ route('admin.admin.store') }}" class="row g-3">
                                @csrf
                            <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input required name="name" type="text" class="form-control" placeholder="Admin Name">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email Address</label>
                                    <input required name="email" type="email" class="form-control" placeholder="Admin Email Address">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <input required name="password"  type="password" class="form-control" placeholder="Admin Password">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Role</label>
                                    <select name="role" class="form-control">
                                        @foreach($roles as $role)
                                        <option value="{{ $role->id  }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Image</label>
                                    <input required name="image" accept=".jpg, .png, image/jpeg, image/png" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Add Admin</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card radius-10">
                        <div class="card-body">

                            @forelse($users as $user)
                                <div class="chip">
                                    <span data-role="{{ $user->role_id }}" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" class="edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ asset('images/'.$user->image) }}" alt="Contact Person">{{$user->name}}</span>
                                    <form class="d-inline" action="{{ route('admin.client.delete' , $user->id) }}" method="post">
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
                var email = button.data('email')
                var role = button.data('role')
                $('#id').val(id);
                $('#edit_name').val(name);
                $('#edit_email').val(email);
                $('#edit_role').val(role);
            });
        });
    </script>
@stop
