@extends('layouts.app')

@section('content')
    <h1>Create a post</h1>

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(['route' => 'posts.store']) !!}
        <div class="form-group">

            {{-- label first argument will be the for attribute then the second will be the text --}}
            {!! Form::label('title', 'Title:') !!}

            {{-- text arguments: 1st id and name, value, attributes assoc array --}}
            {!! Form::text('title', null,  ['class' => 'form-control', 'placeholder' => 'Enter Title']) !!}

        </div>
        
        {{-- first argument is the Text, and second will be its attributes --}}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection