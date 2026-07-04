@extends('adminlte::page')

@section('title', 'Crete New Blog')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Crete New Blog</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Crete New Blog</li>
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
                            <div class="container">
                                <div class="row justify-content-center mt-5">
                                    <div class="col-md-8">
                                        <div class="container">
                                            <div class="row justify-content-center mt-5">
                                                <div class="col-md-8">
                                                    <form action="{{ route('admin.blogs.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf




                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Slug</label>
                                                            <input type="text" name="slug" id="slug"
                                                                class="form-control @error('slug') is-invalid @enderror"
                                                                required value="{{ old('slug') }}">
                                                            @error('slug')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" name="title" id="title"
                                                                class="form-control @error('title') is-invalid @enderror"
                                                                required value="{{ old('title') }}">
                                                            @error('title')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>



                                                        <div class="mb-3">
                                                            <label for="introduction"
                                                                class="form-label">Introduction</label>
                                                            <textarea name="introduction" id="introduction" class="form-control @error('introduction') is-invalid @enderror"
                                                                rows="4" required>{{ old('introduction') }}</textarea>
                                                            @error('introduction')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="content" class="form-label">Content</label>
                                                            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="8"
                                                                required>{{ old('content') }}</textarea>
                                                            @error('content')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="first_image_url" class="form-label">First Image
                                                                URL</label>
                                                            <input type="text" name="first_image_url"
                                                                id="first_image_url"
                                                                class="form-control @error('first_image_url') is-invalid @enderror"
                                                                required value="{{ old('first_image_url') }}">
                                                            @error('first_image_url')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="first_image_caption" class="form-label">First Image
                                                                Caption</label>
                                                            <input type="text" name="first_image_caption"
                                                                id="first_image_caption"
                                                                class="form-control @error('first_image_caption') is-invalid @enderror"
                                                                value="{{ old('first_image_caption') }}">
                                                            @error('first_image_caption')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="first_image_caption" class="form-label">First Image
                                                                Alt</label>
                                                            <input type="text" name="first_image_alt"
                                                                id="first_image_alt"
                                                                class="form-control @error('first_image_alt') is-invalid @enderror"
                                                                value="{{ old('first_image_alt') }}">
                                                            @error('first_image_alt')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="second_image_url" class="form-label">Second Image
                                                                URL</label>
                                                            <input type="text" name="second_image_url"
                                                                id="second_image_url"
                                                                class="form-control @error('second_image_url') is-invalid @enderror"
                                                                required value="{{ old('second_image_url') }}">
                                                            @error('second_image_url')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="second_image_caption" class="form-label">Second
                                                                Image Caption</label>
                                                            <input type="text" name="second_image_caption"
                                                                id="second_image_caption"
                                                                class="form-control @error('second_image_caption') is-invalid @enderror"
                                                                value="{{ old('second_image_caption') }}">
                                                            @error('second_image_caption')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="second_image_caption" class="form-label">Second
                                                                Image Alt</label>
                                                            <input type="text" name="second_image_alt"
                                                                id="second_image_alt"
                                                                class="form-control @error('second_image_alt') is-invalid @enderror"
                                                                value="{{ old('second_image_alt') }}">
                                                            @error('second_image_alt')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="third_image_url" class="form-label">Third Image
                                                                URL</label>
                                                            <input type="text" name="third_image_url"
                                                                id="third_image_url"
                                                                class="form-control @error('third_image_url') is-invalid @enderror"
                                                                required value="{{ old('third_image_url') }}">
                                                            @error('third_image_url')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="third_image_caption" class="form-label">Third
                                                                Image Caption</label>
                                                            <input type="text" name="third_image_caption"
                                                                id="third_image_caption"
                                                                class="form-control @error('third_image_caption') is-invalid @enderror"
                                                                value="{{ old('third_image_caption') }}">
                                                            @error('third_image_caption')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="third_image_caption" class="form-label">Third
                                                                Image Alt</label>
                                                            <input type="text" name="third_image_alt"
                                                                id="third_image_alt"
                                                                class="form-control @error('third_image_alt') is-invalid @enderror"
                                                                value="{{ old('third_image_alt') }}">
                                                            @error('third_image_alt')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

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
