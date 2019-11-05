@extends('layouts.master')
@section('master.content')

    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Create Post</h3>
                </div>
                <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">

                            <label for="">Writer</label>
                            <input type="text" name="writer" class="form-control">

                            <label for="">body</label>
                            <textarea name="body" cols="81" rows="3"></textarea>
                            <label for="">tag</label>
                            <input type="text" name="tag" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
