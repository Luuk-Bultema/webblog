@extends('main')
@section('title', 'Posts')
@section('content')
<div class="create-post">
    <h1>Maak hier een nieuwe blog post!</h1>
    <hr/>
    <form method="POST" action="/posts">
        @csrf
        <label for="txtTitle">Titel:</label><br/>
        <input type="text" name="txtTitle" id="txtTitle"><br/>
        <label for="txtSlug">Slug:</label><br/>
        <input type="text" name="txtSlug" id="txtSlug"><br/>
        <label for="txtContent">Content:</label><br/>
        <textarea name="txtContent" id="txtContent" cols="30" rows="10"></textarea><br/>
        <input type="submit" name="btnSave" value="Opslaan">
    </form>
</div>
@endsection
