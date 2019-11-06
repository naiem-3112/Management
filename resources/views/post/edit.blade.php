@extends('layouts.master')
@section('master.content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Post</h3>
                </div>
                <form action="{{ route('post.update', $postEdit->id) }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $postEdit->title }}">

                            <label for="">Writer</label>
                            <input type="text" name="writer" class="form-control" value="{{ $postEdit->writer }}">

                            <label for="">body</label>
                            <textarea name="body" cols="81" rows="3">{{ $postEdit->body }}</textarea>
                            <label for="">tag</label>
                            <input type="text" name="tag" class="form-control" value="{{ $postEdit->tag }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
