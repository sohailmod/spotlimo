@extends('adminlte::page')

@section('title', 'User Settings')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{  route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Usres List</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="user-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>




    {{-- Change Role Form --}}
    <div class="modal" id="changeRole" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" id="edit_id">
                        <div class="form-group">
                            <label class="col-form-label">Role *:</label>
                            <select class="form-control select2" style="width: 100%;" name="role_id" id="role_id"
                                required>
                                <option value="">Select Role</option>
                                @foreach (DB::table('roles')->get() as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="role_id_error"></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="chageRole()">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
@stop

@section('js')
    <script>
        $('#user-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?=  route('admin.users.get') ?>",
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
                    "data": "email",
                    "searchable": true,
                    "orderable": true
                },
                {
                    "data": "role",
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
        $('#changeRole').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var data = jQuery.parseJSON(atob(button.data('data')));

            $('#edit_id').val(data.id);
            $('#role_id').val(data.roles[0]['id']);

        });


        function chageRole() {
            var id = $('#edit_id').val();
            var role_id = $('#role_id').val();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?=  route('admin.users.role.change') ?>",
                type: 'POST',
                data: {
                    id: id,
                    role_id: role_id,

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
                    if (response.status == 422) { // when status code is 422, it's a validation issue
                        $('#role_id_error').text(response.responseJSON.errors.role);
                    }
                }
            });

        }

        function deleteUser(id) {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this User!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?=  route('admin.users.delete') ?>",
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
