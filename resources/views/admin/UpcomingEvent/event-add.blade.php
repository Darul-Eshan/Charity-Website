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

                    <form id="postForm" action="{{route('upcoming.event.save')}}" method="post" enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                            <div class="text-danger d-none">Error message here</div>
                        </div>
{{--                        <div class="mb-3">--}}
{{--                            <label for="category_id" class="form-label">Category Name</label>--}}
{{--                            <select name="category_id" id="category_id" class="form-control" required>--}}
{{--                                <option value="" disabled selected>-- Select Category --</option>--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <option value="{{$category->id}}">{{$category->title}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            <div class="text-danger d-none">Error message here</div>--}}
{{--                        </div>--}}


                        <div class="mb-3">
                            <label for="about" class="form-label">About Event</label>
                            <textarea class="form-control" id="about" name="about" rows="4" placeholder="Write post..." required></textarea>
                            <div class="text-danger d-none">Error message here</div>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Event Date</label>
                            <input type="date" id="date" name="date" required>
                            <div class="text-danger d-none">Error message here</div>
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Event Time</label>
                            <input type="time" id="time" name="time" required>
                            <div class="text-danger d-none">Error message here</div>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Event Location</label>
                            <input type="text" id="location" name="location" class="form-control" placeholder="Enter event location" required>
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
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                            <button type="reset" class="btn btn-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
