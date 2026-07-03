@extends('adminlte::page')

@section('title', isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post' }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active">{{ isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post' }}</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.blogs.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $blogPost->id }}">
                <div class="form-group">
                    <label for="title">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="title"
                        name="slug" value="{{ old('slug', isset($blogPost) ? $blogPost->slug : '') }}" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title', isset($blogPost) ? $blogPost->title : '') }}" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="introduction">Introduction</label>
                    <textarea class="form-control @error('introduction') is-invalid @enderror" id="introduction" name="introduction"
                        rows="3" required>{{ old('introduction', isset($blogPost) ? $blogPost->introduction : '') }}</textarea>
                    @error('introduction')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10"
                        required>{{ old('content', isset($blogPost) ? $blogPost->content : '') }}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <label for="first_image_url">First Image URL</label>
                        <input type="text" class="form-control @error('first_image_url') is-invalid @enderror"
                            id="first_image_url" name="first_image_url"
                            value="{{ old('first_image_url', isset($blogPost) ? $blogPost->first_image_url : '') }}"
                            required>
                        @error('first_image_url')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="first_image_caption">First Image Caption</label>
                        <input type="text" class="form-control" id="first_image_caption" name="first_image_caption"
                            value="{{ old('first_image_caption', isset($blogPost) ? $blogPost->first_image_caption : '') }}">
                    </div>
                    <div class="col">
                        <label for="first_image_caption">First Image Alt</label>
                        <input type="text" class="form-control" id="first_image_caption" name="first_image_alt"
                            value="{{ old('first_image_alt', isset($blogPost) ? $blogPost->first_image_alt : '') }}">
                    </div>
                </div>


                <div class="form-row mb-3">
                    <div class="col">
                        <label for="second_image_url">Second Image URL</label>
                        <input type="text" class="form-control @error('second_image_url') is-invalid @enderror"
                            id="second_image_url" name="second_image_url"
                            value="{{ old('second_image_url', isset($blogPost) ? $blogPost->second_image_url : '') }}"
                            required>
                        @error('second_image_url')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="second_image_caption">Second Image Caption</label>
                        <input type="text" class="form-control" id="second_image_caption" name="second_image_caption"
                            value="{{ old('second_image_caption', isset($blogPost) ? $blogPost->second_image_caption : '') }}">
                    </div>
                    <div class="col">
                        <label for="second_image_caption">Second Image Alt</label>
                        <input type="text" class="form-control" id="second_image_alt" name="second_image_alt"
                            value="{{ old('second_image_alt', isset($blogPost) ? $blogPost->second_image_alt : '') }}">
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col">
                        <label for="third_image_url">Third Image URL</label>
                        <input type="text" class="form-control @error('third_image_url') is-invalid @enderror"
                            id="third_image_url" name="third_image_url"
                            value="{{ old('third_image_url', isset($blogPost) ? $blogPost->third_image_url : '') }}"
                            required>
                        @error('third_image_url')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="third_image_caption">Third Image Caption</label>
                        <input type="text" class="form-control" id="third_image_caption" name="third_image_caption"
                            value="{{ old('third_image_caption', isset($blogPost) ? $blogPost->third_image_caption : '') }}">
                    </div>
                    <div class="col">
                        <label for="third_image_caption">Third Image Alt</label>
                        <input type="text" class="form-control" id="third_image_alt" name="third_image_alt"
                            value="{{ old('third_image_alt', isset($blogPost) ? $blogPost->third_image_alt : '') }}">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ isset($blogPost) ? 'Update' : 'Create' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/33.1.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                // You can customize the CKEditor here if needed
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
