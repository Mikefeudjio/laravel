@extends('leyaod.app')

@section('content')
<h1>create a new poste</h1>

<form action="{{route('posts.create')}}" method="POST">

    @csrf

    <fieldset>
        <legend>forulair de commandes</legend>
        <p><label for="nam"></label> <input type="text" name="nom" placeholder="mon" required autofocus></p>
       
    
        <textarea name="text" id="" cols="30" rows="5">text</textarea>
        <p><input type="submit" name="button" value="envoyer"></p>
       
</form>
    
@endsection