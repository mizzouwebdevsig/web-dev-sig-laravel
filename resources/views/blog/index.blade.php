@extends('layouts.first')

@section('content')
    <ul>
    @foreach($posts as $post)
        <li>{{ $post->title }} published at {{ $post->publish_date }}</li>
    @endforeach
    </ul>
@endsection