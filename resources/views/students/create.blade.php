@extends('layouts.app')
@section('content')
  <h1>Add student</h1>
  <form method="POST" action="{{ route('students.store') }}">
    @csrf
    <input name="name" placeholder="Name" required>
    <input name="roll_no" placeholder="Roll no" required>
    <button type="submit">Save</button>
  </form>
@endsection