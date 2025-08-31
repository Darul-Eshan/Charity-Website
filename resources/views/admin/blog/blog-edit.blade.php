@extends('admin.admin-master')
@section('body')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow p-4 mt-5">
                    <h4 class="text-center mb-4">Create New Blog Post</h4>


                    <div class="alert alert-success d-none" id="successMessage">
                        Post created successfully!
                    </div>

                    <form id="postForm" action="{{route('blog.update',$blog->id)}}" method="post" enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="title" value="{{$blog->title}}" name="title" placeholder="Enter title" required>
                            <div class="text-danger d-none" id="titleError">Title is required</div>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="4" placeholder="{{$blog->content}}" required></textarea>
                            <div class="text-danger d-none" id="contentError">Content is required</div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <div class="position-relative" style="width: 150px; height: 150px;">
                                <!-- Preview Image -->
                                <img
                                    id="preview"
                                    src="{{asset($blog->image)}}"
                                    alt="Preview"
                                    class="img-fluid rounded"
                                    style="width: 100%; height: 100%; object-fit: cover; border: 1px solid #ddd;"
                                >

                                <!-- File Input -->
                                <input
                                    type="file"
                                    class="form-control position-absolute top-0 start-0 w-100 h-100 opacity-0"
                                    id="image"
                                    name="image"
                                    accept="image/*"
                                    onchange="previewImage(event)"
                                >
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary me-2">Add Post</button>
                            <button type="reset" class="btn btn-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                document.getElementById('preview').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

@endsection
