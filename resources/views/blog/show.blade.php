@extends('layouts.app')

@section('content')
    <a href="{{ url('/post/' . $post->id . '/delete') }}">Delete this post</a>
   <h3>{{ $post->title }}</h3>

    <p>{{ nl2br($post->body) }}</p>

    <p>Published on {{ $post->publish_date }} by {{ $post->user->name }}</p>
@endsection