@extends('layouts.app')
@section('content')
  <h1>Students</h1>
  <a href="{{ route('students.create') }}">Add student</a>
  <ul>
    @foreach ($students as $s)
      <li><a href="{{ route('students.show', $s) }}">{{ $s->name }}</a> ({{ $s->roll_no }})</li>
    @endforeach
  </ul>
@endsection