@extends('layouts.first')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
    <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
    <input type="text" name="publish_date" value="{{ old('publish_date') }}">
    <input type="submit">
</form>