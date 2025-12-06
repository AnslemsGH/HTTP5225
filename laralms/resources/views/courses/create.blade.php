@extends('template')
@section('content')

<h3>Add a Course</h3>

<form action="{{ route('courses.store') }}" method="POST" >
    {{ csrf_field() }}
    <div class="form-group">
    <input type="text" class="form-control" name="coursename" placeholder="Course Name" required>
    </div>
    <br><br>
    <input type="text" class="form-control" name="description" placeholder="Course Description">
    <br><br>
    <input type="submit" value="Add Course" class="btn btn-primary">
</form>

@endsection