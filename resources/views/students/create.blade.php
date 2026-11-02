@extends('layouts.app')
@section('content')
  <h1>Add student</h1>

  <form method="POST" action="{{ route('students.store') }}">
    @csrf

    <p>
      <label>Name<br>
        <input name="name" value="{{ old('name') }}" placeholder="Name" required>
      </label>
    </p>

    <p>
      <label>Roll no<br>
        <input name="roll_no" value="{{ old('roll_no') }}" placeholder="Roll no" required>
      </label>
    </p>

    <p>
      <label>Email<br>
        <input name="email" type="email" value="{{ old('email') }}" placeholder="Email" required>
      </label>
    </p>

    <p>
      <label>Department<br>
        <input name="department" value="{{ old('department', 'CSE') }}" placeholder="Department">
      </label>
    </p>

    <p>
      <label>Semester<br>
        <input name="semester" type="number" min="1" max="8" value="{{ old('semester', 1) }}" placeholder="Semester">
      </label>
    </p>

    <p>
      <label>CGPA<br>
        <input name="cgpa" type="number" step="0.01" min="0" max="10" value="{{ old('cgpa') }}" placeholder="CGPA">
      </label>
    </p>

    <button type="submit">Save</button>
  </form>

  <p><a href="{{ route('students.index') }}">Back</a></p>
@endsection