@extends('layouts.app')

@section('content')
    <ul>
    @foreach($posts as $post)
            <li><a href="{{ url('/post/' . $post->id) }}">{{ $post->title }}</a> published at {{ $post->publish_date }} by {{ $post->user->name }}</li>
    @endforeach
    </ul>

    {{ $posts->links() }}
@endsection