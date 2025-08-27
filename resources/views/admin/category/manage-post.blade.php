@extends('admin.admin-master')
@section('body')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow p-4 mt-5">
                    <h4 class="text-center mb-4">Manage Blog Post</h4>

                    @if(session('massage'))
                        <div class="alert alert-success">
                            {{ session('massage') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$loop->iteration}}/td>
                            <td>{{$category->title}}</td>
                            <td></td>
                            <td>
                                <img src="{{asset($category->image)}}" alt="category" width="80" height="80">
                            </td>
                            <td>{{$category->status==1?'active':"Inactive"}}</td>
                            <td>
                                <a href="{{route('post.edit',['id'=>$category->id])}}" class="btn btn-warning btn-sm">Edit</a>
                                @if($category->status==1)
                                    <a href="{{route('post.status',['id'=>$category->id])}}" class="btn btn-success btn-sm">Inactive</a>
                                @else
                                    <a href="{{route('post.status',['id'=>$category->id])}}" class="btn btn-indigo btn-sm">Active</a>
                                @endif
                                <button href="+" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
