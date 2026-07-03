@extends('adminlte::page')

@section('title', 'Vehicle Service Types')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Vehicle Service Types</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{  route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Vehicle Types</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    <div class="col-lg-4 offset-lg-8">
        <a type="button" class="btn btn-dark btn-block rounded-pill">Create
            New vehicle Service</a>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Vehicle Types</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="service-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('#service-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=  route('admin.service-types.show') ?>",
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
                    "data": "action",
                    "searchable": false,
                    "orderable": true
                },

            ]
        });
    </script>

    <script>
        function deleteVehicle(id) {
            alert('sss');
        }
    </script>
@stop
