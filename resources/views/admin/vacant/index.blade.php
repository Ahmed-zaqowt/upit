@extends('admin.master')


@section('content')




    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0">CLIENTS </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card radius-10">
                        <div class="card-body">

                            @forelse($vacant as $i)
                                <div class="chip">
                                    <span  class="edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">{{$i->user->name}}</span>
                                    <form class="d-inline" action="{{ route('admin.vacant.delete' , $i->id) }}" method="post">
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
