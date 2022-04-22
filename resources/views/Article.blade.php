@extends('leyaod/app')

@section('content')
<h1> les articles</h1>
@foreach ($posts as $post)
    <h3>{{$post}}</h3>
@endforeach

@endsection