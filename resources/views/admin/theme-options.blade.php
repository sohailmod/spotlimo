@extends('adminlte::page')

@section('title', 'Theme Options')

@section('content_header')
    <h1>Theme Options</h1>
@stop

@section('content')
    <div class="container-fluid">

        <div class="col-lg-4 offset-lg-8">
            <a type="button" class="btn btn-dark btn-block rounded-pill" data-toggle="modal"
                data-target="#createThemeOption">Add
                Theme Option</a>

        </div>

        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="tab-content" id="v-pills-tabContent">
                    <form action="{{ route('admin.theme-options.update') }}" method="post">
                        @csrf
                        <div class="card-body">
                            @foreach ($settings as $setting)
                                <div class="form-group">
                                    <label for="hotline">{{ $setting->name }}</label>
                                    <input type="text" class="form-control" name="{{ $setting->id }}[]"
                                        id="{{ $setting->key }}" value="{{ $setting->value }}">
                                </div>
                            @endforeach
                            <button type="submit" id="button" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- create Theme Options --}}
    <div class="modal fade" id="createThemeOption" aria-labelledby="newModalLabel" data-backdrop="static"
        data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newModalLabel">Create Theme Option</h5>
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
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="storeThemeOption()" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <script>
        $(function() {
            $('#hotline').prop('required', true);
            $('#address').prop('required', true);
            $('#email').prop('required', true);
        });
    </script>

    <script>
        function storeThemeOption() {

            var name = $('#name').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "<?= route('admin.theme-options.store') ?>",
                type: 'POST',
                data: {
                    name: name,

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

                    }
                }
            });
        }
    </script>

@endsection
