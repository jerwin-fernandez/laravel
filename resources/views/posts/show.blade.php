@extends('layouts.app')

@section('content')
  <p><a href="{{ route('posts.index') }}">All posts</a></p>
  <hr>
  <a href="{{ route('posts.edit', $post->id) }}">Edit posts</a>
  <h1>{{ $post->title }}</h1>
@endsection