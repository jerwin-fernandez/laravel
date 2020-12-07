@extends('layouts.app')

@section('content')

  <p>Edit a post</p>

  @if(count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif

  {!! Form::model($post, [
    'route' => ['posts.update', $post],
    'method' => 'PUT'
  ]) !!}

    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Enter a title',
      ]) !!}
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}

  <a href="{{ route('posts.show', $post->id) }}">Go back</a>

  {!! Form::open([
    'route' => ['posts.destroy', $post->id],
    'method' => 'DELETE'
  ]) !!}

    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

  {!! Form::close() !!}
@endsection