@extends('adminlte::page')

@section('title', 'Update Vehicle')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update Vehicle</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Update Vehicle</li>
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
                            <form action="{{ route('admin.vehicle-types.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name *</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" placeholder="Enter Vehicle name"
                                                value="{{ $data->name }}" required>

                                            @error('color')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Capacity of passenger *</label>
                                            <input type="number"
                                                class="form-control @error('capacity_of_passenger') is-invalid @enderror"
                                                id="capacity_of_passenger" name="capacity_of_passenger"
                                                value="{{ $data->capacity_of_passenger }}" required>
                                            @error('capacity_of_passenger')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Max allowed seats *</label>
                                            <input type="number"
                                                class="form-control @error('max_allowed_seats') is-invalid @enderror"
                                                id="max_allowed_seats" name="max_allowed_seats"
                                                value="{{ $data->max_allowed_seats }}" required>
                                            @error('max_allowed_seats')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No of luggage *</label>
                                            <input type="number"
                                                class="form-control @error('no_of_luggage') is-invalid @enderror"
                                                id="no_of_luggage" name="no_of_luggage" value="{{ $data->no_of_luggage }}"
                                                required>
                                            @error('no_of_luggage')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    {{-- Per Mile Charge --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Per mile charge($) *</label>
                                            <input type="text"
                                                class="form-control @error('per_mile_charge') is-invalid @enderror"
                                                id="per_mile_charge" name="per_mile_charge"
                                                value="{{ $data->per_mile_charge }}" required>
                                            @error('per_mile_charge')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Under 10 miles --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Under 10 Miles ($) *</label>
                                            <input type="text"
                                                class="form-control @error('miles_under_10') is-invalid @enderror"
                                                id="miles_under_10" name="miles_under_10"
                                                value="{{ $data->miles_under_10 }}" required>
                                            @error('miles_under_10')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- First 15 miles  --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First 15 Miles ($)*</label>
                                            <input type="text"
                                                class="form-control @error('first_15_miles') is-invalid @enderror"
                                                id="first_15_miles" name="first_15_miles"
                                                value="{{ $data->first_15_miles }}" required>
                                            @error('first_15_miles')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- After 15 Miles --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">After 15 Miles ($) *</label>
                                            <input type="text"
                                                class="form-control @error('after_15_miles') is-invalid @enderror"
                                                id="after_15_miles" name="after_15_miles"
                                                value="{{ $data->after_15_miles }}" required>
                                            @error('after_15_miles')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Rush hour charge($) *</label>
                                            <input type="text"
                                                class="form-control @error('rush_hour_charge') is-invalid @enderror"
                                                id="rush_hour_charge" name="rush_hour_charge"
                                                value="{{ $data->rush_hour_charge }}" required>
                                            @error('rush_hour_charge')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hourly Charter($) *</label>
                                            <input type="text"
                                                class="form-control @error('hourly_charge') is-invalid @enderror"
                                                id="hourly_charge" name="hourly_charge"
                                                value="{{ $data->hourly_charge }}" required>
                                            @error('hourly_charge')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- Tax --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">tax(%) *</label>
                                            <input type="text" class="form-control @error('tax') is-invalid @enderror"
                                                id="tax" name="tax" value="{{ $data->tax }}" required>
                                            @error('tax')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Minimum hours</label>
                                            <input type="number"
                                                class="form-control @error('minimum_hours') is-invalid @enderror"
                                                id="minimum_hours" name="minimum_hours"
                                                value="{{ $data->minimum_hours }}">
                                            @error('minimum_hours')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Image">Image *</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input thumbimg"
                                                        name="image" accept="image/*">
                                                    <label class="custom-file-label" for="Image"
                                                        id="thumbshupfl">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6 img-card-cont">
                                        @if ($data->image)
                                            <img class="img-fluid" src="{{ asset($data->image) }}" width="50%"
                                                height="50%">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Remark</label>
                                            <textarea type="text" class="form-control @error('remark') is-invalid @enderror" id="remark" cols="3"
                                                name="remark">{{ $data->remark }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                                    </div>
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
        var thumbimg = document.querySelector(".thumbimg");
        var thumbimgPre = document.querySelector("#thumbimgpre");
        var thumbshupfl = document.querySelector("#thumbshupfl");
        thumbimg.onchange = evt => {
            const [file] = thumbimg.files
            if (file) {
                thumbimgPre.src = URL.createObjectURL(file)
                thumbshupfl.innerHTML = file.name;
            }
        }
    </script>
@stop
