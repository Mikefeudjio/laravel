@extends('leyouds.app')
@section('contant')
    <h1>create un mouveau posts</h1>

    <form action="{{route('posts.store')}}" method="post" class="border-black-600 border-5">
        @csrf
        <input type="text" name="title" id="">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <button type="submit">envoyer</button>
    </form>
@endsection