@extends('template')
@section('content')

<h3>Add a Course</h3>

<form action="{{ route('courses.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="coursename" placeholder="Course Name" required>
    <br><br>
    <input type="text" name="professor" placeholder="Professor's Name">
    <br><br>
    <input type="submit" value="Add Course">
</form>

@endsection