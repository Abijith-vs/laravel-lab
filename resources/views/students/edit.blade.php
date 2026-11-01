@extends('layouts.app')
@section('content')
  <h1>Edit student</h1>

  <form method="POST" action="{{ route('students.update', $student) }}">
    @csrf
    @method('PUT')

    <p>
      <label>Name<br>
        <input name="name" value="{{ old('name', $student->name) }}" required>
      </label>
    </p>

    <p>
      <label>Roll no<br>
        <input name="roll_no" value="{{ old('roll_no', $student->roll_no) }}" required>
      </label>
    </p>

    <p>
      <label>Email<br>
        <input name="email" type="email" value="{{ old('email', $student->email) }}" required>
      </label>
    </p>

    <p>
      <label>Department<br>
        <input name="department" value="{{ old('department', $student->department) }}">
      </label>
    </p>

    <p>
      <label>Semester<br>
        <input name="semester" type="number" min="1" max="8" value="{{ old('semester', $student->semester) }}">
      </label>
    </p>

    <p>
      <label>CGPA<br>
        <input name="cgpa" type="number" step="0.01" min="0" max="10" value="{{ old('cgpa', $student->cgpa) }}">
      </label>
    </p>

    <button type="submit">Update</button>
  </form>

  <p><a href="{{ route('students.index') }}">Back</a></p>
@endsection
