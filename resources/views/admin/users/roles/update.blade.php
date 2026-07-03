@extends('adminlte::page')

@section('title', 'Update User Role')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update User Role</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Update User Role</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <form action="{{ route('admin.users.role.edit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $role->id }}">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Role Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ $role->name }}"
                                            placeholder="Enter Role Name">

                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="exampleInputPassword1">Role Permission</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach (DB::table('permissions')->get() as $permission)
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="checkbox" name="permissions[]"
                                                                value="{{ $permission->id }}"
                                                                @foreach ($role->permissions as $data) @if ($data->id == $permission->id)
                                                                checked @endif @endforeach>
                                                            <label for="customCheckbox1">{{ $permission->name }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Save User Role</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
@stop

@section('js')
    <script>
        $('.select2').select2();
    </script>
@stop
