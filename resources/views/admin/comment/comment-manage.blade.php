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
                            <th>id</th>
                            <th>blog_id</th>
                            <th>user_id</th>
                            <th>parent_id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>comment</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)

                            <tr>

                                <th>Sl</th>
                                <th>{{$comment->id}}</th>
                                <th>{{$comment->blog_id}}</th>
                                <th>{{$comment->user_id}}</th>
                                <th>{{$comment->parent_id}}</th>
                                <th>{{$comment->name}}</th>
                                <th>{{$comment->email}}</th>
                                <th>{{$comment->comment}}</th>
                                <td>

                                    <form action="" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="">
                                        <button href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this?')">Delete</button>
                                    </form>
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
