@extends('leyouds.app')
@section('contant')
    <h1>create un mouveau posts</h1>
    <form action="{{route('posts.store')}}" method="post"></form>
@endsection