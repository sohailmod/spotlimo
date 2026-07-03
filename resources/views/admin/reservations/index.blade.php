@extends('adminlte::page')

@section('title', 'Customer Reservations')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Customer Reservations</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{  route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Customer Reservations</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    <div class="col-lg-4 offset-lg-8">
        <a type="button" class="btn btn-dark btn-block rounded-pill" href="{{  route('admin.reservations.create') }}">Create
            New Booking</a>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <table id="reservation-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Payment Status</th>
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
        $('#reservation-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=  route('admin.reservations.show') ?>",
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
                    "data": "date",
                    "searchable": true,
                    "orderable": true
                },
                {
                    "data": "status",
                    "searchable": true,
                    "orderable": true
                },
                {
                    "data": "payment_status",
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
        function deleteReservation(id) {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this Reservation",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?=  route('admin.reservations.destroy') ?>",
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
