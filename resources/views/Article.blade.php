@extends('leyouds.app')

@section('contant')
<h1>liste des article</h1>
@if ($posts->count() >0)
@foreach ($posts as $post)
    
<h3><a href="{{route('posts.show', ['id' => $post->id])}}">{{$post ->title}}</a></h3>
@endforeach
@endsection 
    
@else
<div>aucun post en base de donne</div>
    
@endif
