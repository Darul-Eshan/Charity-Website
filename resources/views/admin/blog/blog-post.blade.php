@extends('admin.admin-master')
@section('body')

    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow p-4 mt-5">
                    <h4 class="text-center mb-4">Create New Blog Post</h4>

                    <div class="alert alert-success d-none">
                        Success message here
                    </div>

                    <form id="postForm" action="{{route('blog.save')}}" method="post" enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                            <div class="text-danger d-none">Error message here</div>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="4" placeholder="Write post..." required></textarea>
                            <div class="text-danger d-none">Error message here</div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <div class="mt-3 text-center">
                                <img id="preview" src="" alt="Preview" class="img-fluid rounded d-none" style="max-width:200px;">
                                <div class="text-danger d-none">Error message here</div>
                            </div>
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
