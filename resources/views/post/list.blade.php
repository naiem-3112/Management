@extends('layouts.master')
@section('master.content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Post List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Writer</th>
                            <th width="50%">Body</th>
                            <th>Tag</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->writer }}</td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->tag }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{ route('post.edit', $post->id) }}" >Edit</a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('post.delete', $post->id) }}" >Delete</a>
                                    <a class="btn btn-dark btn-sm" href="{{ route('post.show', $post->id) }}" >Show</a>
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
