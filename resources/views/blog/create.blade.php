@extends('layouts.first')

<form method="POST">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Title">
    <textarea name="body" id="body" cols="30" rows="10"></textarea>
    <input type="text" name="publish_date">
    <input type="hidden" name="user_id" value="1">
    <input type="submit">
</form>