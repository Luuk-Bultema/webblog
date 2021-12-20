@extends('main')
@section('title', 'Posts')
@section('content')
<div class="edit-post">
    <h1>Maak hier een nieuwe blog post!</h1>
    <hr/>
    <form method="POST" action="/post/{{ $post-> id}}">
        @csrf
        @method('put')
        <label for="txtTitle">Titel:</label><br/>
        <input type="text" name="txtTitle" id="txtTitle" value="{{ $post->title }}"><br/>
        <label for="txtSlug">Slug:</label><br/>
        <input type="text" name="txtSlug" id="txtSlug" value="{{ $post->slug }}"><br/>
        <label for="txtContent">Content:</label><br/>
        <textarea name="txtContent" id="txtContent" cols="30" rows="10">{{ $post->content }}</textarea><br/>
        <input type="submit" name="btnSave" value="Opslaan">
    </form>
    <br/><br/><br/><br/>
    
    <button onclick="event.preventDefault(); document.getElementById('delete-post-form').submit();">
        Post verwijderen</button>


    <form id="delete-post-form" action="/post/{{ $post->id }}" method="POST" style="display: none;">
        @csrf
        @method('delete');
    </form>
</div>
@endsection
