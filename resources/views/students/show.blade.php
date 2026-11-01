@extends('layouts.app')
@section('content')
  <h1>{{ $student->name }}</h1>
  <p>Roll no: {{ $student->roll_no }}</p>
  <a href="{{ route('students.index') }}">Back</a>
@endsection