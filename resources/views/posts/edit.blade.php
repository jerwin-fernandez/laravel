@extends('layouts.app')

@section('content')

  <p>Edit a post</p>

  <form action="/posts/{{ $post->id }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" value="{{ $post->title }}" placeholder="Enter title" />
    <input type="submit" name="submit" />
  </form>

  <a href="{{ route('posts.show', $post->id) }}">Go back</a>

  <form action="/posts/{{ $post->id }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="delete" value="Delete" />
  </form>
@endsection