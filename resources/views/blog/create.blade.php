@extends('layouts.app')

@section('content')
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
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ old('body') }}</textarea>
    </div>
    <div class="form-group">
        <label for="publish_date">Publish Date</label>
        <input type="text" id="publish_date" class="form-control" name="publish_date" value="{{ old('publish_date') }}">
    </div>
    <input type="submit">
</form>
@endsection