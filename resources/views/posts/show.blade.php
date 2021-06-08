@extends('posts.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Show post</h2><hr>
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

            <div class="row">
                <div class="card p-3">
                    <div class="card-title">
                        <strong>Title: </strong>
                        {{ $post->title}}
                    </div>
                    <div class="card-text">
                        <strong>Description: </strong>
                        {{ $post->description }}
                    </div>
                </div>
            </div>

@endsection