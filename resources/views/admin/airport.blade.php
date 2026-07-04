@extends('adminlte::page')

@section('title', 'Airport')

@section('content_header')
    <h1>Airport</h1>
@stop

@section('content')
    <div class="col-lg-4 offset-lg-8">
        <a type="button" class="btn btn-dark btn-block rounded-pill" data-toggle="modal" data-target="#createAirport">Create
            New airport</a>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Airports</h3>
        </div>

        <div class="card-body">
            <table id="airport-table" class="table table-bordered table-striped">
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
    </div>

    {{-- create airport --}}
    <div class="modal fade" id="createAirport" aria-labelledby="newModalLabel" data-backdrop="static" data-keyboard="false"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newModalLabel">Create Airport</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Name *:</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                        id="name">
                                    <span class="text-danger" id="name-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Address *:</label>
                                    <input type="text" class="form-control" value="{{ old('address') }}" name="address"
                                        id="address">
                                    <span class="text-danger" id="address-error"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="storeAirport()" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- edit airport --}}
    <div class="modal fade" id="editAirport" aria-labelledby="newModalLabel" data-backdrop="static" data-keyboard="false"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newModalLabel">Edit Airport</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" id="edit_id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Name *:</label>
                                    <input type="text" class="form-control" name="name" id="edit_name">
                                    <span class="text-danger" id="edit_name_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Address *:</label>
                                    <input type="text" class="form-control" name="address" id="edit_address">
                                    <span class="text-danger" id="edit_address_error"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="updateAirport()" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $('#airport-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= route('admin.air-ports.show') ?>",
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
        function storeAirport() {
            var name = $('#name').val();
            var address = $('#address').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "<?= route('admin.air-ports.store') ?>",
                type: 'POST',
                data: {
                    name: name,
                    address: address,
                },
                success: function(response) {

                    Swal.fire(
                        'Created!',
                        response.success,
                        'success'
                    ).then((ok) => {
                        location.reload();
                    });
                },
                error: function(response) {
                    if (response.status == 422) {
                        $('#name-error').text(response.responseJSON.errors.name);
                        $('#edit_address_error').text(response.responseJSON.errors.address);
                    }
                }
            });
        }


        function updateAirport() {

            var id = $('#edit_id').val();
            var name = $('#edit_name').val();
            var address = $('#edit_address').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "<?= route('admin.air-ports.update') ?>",
                type: 'POST',
                data: {
                    id: id,
                    name: name,
                    address: address,
                },
                success: function(response) {

                    Swal.fire(
                        'Updated!',
                        response.success,
                        'success'
                    ).then((ok) => {
                        location.reload();
                    });
                },
                error: function(response) {
                    if (response.status == 422) {
                        $('#edit_name_error').text(response.responseJSON.errors.name);
                        $('#address-error').text(response.responseJSON.errors.address);
                    }
                }
            });

        }

        $('#editAirport').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var data = jQuery.parseJSON(atob(button.data('data')));

            $('#edit_id').val(data.id);
            $('#edit_name').val(data.name);
            $('#edit_address').val(data.address);

        });

        function deleteAirport(id) {

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this Airport",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?= route('admin.air-ports.destroy') ?>",
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
@stop
