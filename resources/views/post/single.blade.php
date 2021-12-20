@extends('main')
@section('title', $post->title)
@section('content')
<div class="single-posts">
    <h1>{{ $post->title }}</h1>
    <hr/>
    <p>{!! $post->content !!}</p>
    <hr/>
    <i>Geplaatst door: {{ $post->user->name }} op {{ $post->created_at}}</i>
    <a href="/post/{{ $post->slug }} /edit">Wijzig</a>
</div>
@endsection