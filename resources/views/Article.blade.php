@extends('leyouds.app')

@section('contant')
<h1>liste des article</h1>
@foreach ($posts as $post)
    
<h3><a href="">{{$post}}</a></h3>
@endforeach
@endsection 