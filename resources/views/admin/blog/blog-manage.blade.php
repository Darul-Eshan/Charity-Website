@extends('admin.admin-master')
@section('body')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow p-4 mt-5">
                    <h4 class="text-center mb-4">Manage Blog Post</h4>

                    <div class="alert alert-success">
                        <!-- session message placeholder -->
                    </div>

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
                       @foreach($blogs as $blog)
                           <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>{{($blog->title)}}</td>
                               <td>{{($blog->content)}}</td>
                               <td>
                                   <img src="{{asset($blog->image)}}" alt="category" width="80" height="80">
                               </td>
                               <td>{{$blog->status==1?'active':"inactive"}}</td>
                               <td>
                                   <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-warning btn-sm">Edit</a>
                                   @if($blog->status==1)
                                   <a href="{{route('blog.status',['id'=>$blog->id])}}" class="btn btn-success btn-sm">Inactive</a>
                                   @else
                                   <a href="{{route('blog.status',['id'=>$blog->id])}}" class="btn btn-indigo btn-sm">Active</a>
                                   @endif
                                   <button class="btn btn-danger btn-sm">Delete</button>
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
