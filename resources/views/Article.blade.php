@extends('leyouds.app')

@section('contant')
<h1>liste des article</h1>
@foreach ($posts as $post)
    
<h3>{{$post}}</h3>
@endforeach
@endsection 