@extends('adminlte::page')

@section('title', 'User Role')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Role</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">User Role</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    <div class="col-lg-4 offset-lg-8">
        <a type="button" class="btn btn-dark btn-block rounded-pill" href="{{ route('admin.users.role.create') }}">Create
            New Role</a>

    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">User Role</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="role-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Guard Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $('#role-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= route('admin.users.get.role') ?>",
                "type": "POST",
                "data": {
                    "_token": "{{ csrf_token() }}"
                },
            },
            "columns": [{
                    "data": "id",
                    "searchable": true,
                    "orderable": false
                },
                {
                    "data": "name",
                    "searchable": true,
                    "orderable": true
                },
                {
                    "data": "guard_name",
                    "searchable": true,
                    "orderable": true
                },

                {
                    "data": "action",
                    "searchable": false,
                    "orderable": false
                },

            ]
        });


        function deleteRole(id) {

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this Role!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log(result);
                    $.ajax({
                        url: "<?= route('admin.users.role.delete') ?>",
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.success,
                                'success'
                            ).then((ok) => {
                                location.reload();
                            });
                        },
                        error: function(response) {
                            swal.fire({
                                title: "Error",
                                text: response.responseText,
                                icon: "error",
                            });
                        }
                    });
                }
            });
        }
    </script>

    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
    </script>
@stop
