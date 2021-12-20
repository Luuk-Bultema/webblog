@extends('main')
@section('title', 'Posts')
@section('content')
<div class="posts">
    <h1>Dit zijn onze posts!</h1>
    <br/>
    @foreach($posts as $post)
        <a href="/post/{{ $post->slug }}"><h2 class="post-title">{{ $post->title }}</h2></a>
        <p><i>Geplaatst door: {{$post->user->name}} op {{$post->created_at}}</i></p>
    @endforeach
</div>
<br/>
<a href="/posts/create"><u>Maak een nieuwe post!</u></a>
@endsection
 

