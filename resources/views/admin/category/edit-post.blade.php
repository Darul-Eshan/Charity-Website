@extends('admin.admin-master')
@section('body')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow p-4 mt-5">
                    <h4 class="text-center mb-4">Create New Blog Post</h4>

                    @if(session('massage'))
                        <div class="alert alert-success">
                            {{ session('massage') }}
                        </div>
                    @endif

                    <form id="postForm" action="{{ route('post.update',$category->id) }}" method="post" enctype="multipart/form-data" class="mb-4">
                        @csrf
{{--                        <input type="hidden" name="id" value="{{$category->id}}">--}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="title" value="{{$category->title}}" name="title" placeholder="Enter title" required>
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="4" placeholder="{{$category->content}}" required></textarea>

                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror</div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <div class="position-relative" style="width: 150px; height: 150px;">
                                <!-- পুরনো Image দেখাবে -->
                                <img
                                    id="preview"
                                    src="{{ asset($category->image) }}"
                                    alt="Preview"
                                    class="img-fluid rounded"
                                    style="width: 100%; height: 100%; object-fit: cover; border: 1px solid #ddd;"
                                >

                                <!-- Input File Box (Transparent overlay করে দিচ্ছি image এর উপরেই) -->
                                <input
                                    type="file"
                                    class="form-control position-absolute top-0 start-0 w-100 h-100 opacity-0"
                                    id="image"
                                    name="image"
                                    accept="image/*"
                                    onchange="previewImage(event)"
                                >
                            </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary me-2">Add Post</button>
                            <button type="reset" class="btn btn-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
