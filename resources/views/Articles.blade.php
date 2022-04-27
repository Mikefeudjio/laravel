@extends('leyaod.app')

@section('content')
<h1>les nouveau articles</h1>
<h3>{{ $post ->content}}</h3>

@foreach ( $post->comments as $comment )
<div>{{$comment->content}}</div>
    @empty
    <div>uncun commentaire trouve</div>
@endforeach
@endsection