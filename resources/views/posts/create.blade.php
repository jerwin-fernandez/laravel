@extends('layouts.app')

@section('content')

    <h1>Create a post</h1>

    <form action="/posts" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Enter title" />
        <input type="submit" name="submit" />
    </form>
@endsection