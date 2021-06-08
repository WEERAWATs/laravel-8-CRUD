@extends('master')

@section('meta')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="HTML, CSS, JS, Laravel">
        <meta namer="author" content="vee.ws">
        <title>Index Page</title>
@endsection

@section('content')
    <h1>Hello, {{ $name }}</h1>
    <p>This is my body content.</p>

    @for ($i = 1;$i <= 10; $i++)
        The current value is {{ $i }} <br>
    @endfor
@endsection