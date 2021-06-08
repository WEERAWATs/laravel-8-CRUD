@extends('posts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Edit post</h2><hr>
            <a href="{{ route('posts.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            There were some problems with your input. <br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea name="description" class="form-control" style="height: 150px">{{ $post->description }}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success my-3">Update</button>
            </div>
        </div>
    </form>

@endsection