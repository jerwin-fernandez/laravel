@extends('layouts.app')

@section('content')
  <h1>Contact Page</h1>

  @if(count($people) !== 0)
    @foreach($people as $person)
    
    {{ $person }}

    @endforeach
  @endif

@endsection

@section('footer')
  <script>
    // alert('waow');
  </script>
@endsection