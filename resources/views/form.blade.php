@extends('leyaod.app')

@section('content')
<h1>create a new poste</h1>

<form action="{{route('posts.create')}}" method="POST">
<input type="text" name="title" class="border-gray-600 border-2">
<textarea name="content" id="" cols="30" rows="10" class="border-gray-600 border-2" ></textarea>

<button type="submit" class="bg-green-500">cree </button>
</form>
    
@endsection