@extends('layouts.app')

@section('content')

<p><a href="{{ route('posts.create') }}">Create a new Post</a></p>

<ul>
@foreach($posts as $post)
<li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
 @endforeach
</ul>

@endsection