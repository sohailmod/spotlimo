@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blogs</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{  route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    <div class="col-lg-4 offset-lg-8">
        <a type="button" class="btn btn-dark btn-block rounded-pill" href="{{  route('admin.blogs.create') }}">Create
            New Blog</a>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <table id="blogs-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Introduction</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $('#blogs-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=  route('admin.blogs.show') ?>",
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
                    "data": "title",
                    "searchable": true,
                    "orderable": true
                },
                {
                    "data": "introduction",
                    "searchable": true,
                    "orderable": true
                },
               
                {
                    "data": "action",
                    "searchable": false,
                    "orderable": true
                },

            ]
        });
    </script>

    <script>
        function deleteBlog(id) {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this Blog?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?=  route('admin.blogs.destroy') ?>",
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

@endsection
