@extends('template')
@section('content')
<h3>Update Course</h3>

<form action="{{ route('courses.update', $course -> id) }}" method="POST">
    @method('PUT')
    {{ csrf_field() }}
    <input type="text"  class="form-control" name="coursename" value="{{ $course -> coursename }}">
    <br><br>
    <input type="text"  class="form-control" name="description" value="{{ $course -> description }}">
    <br><br>
    <input type="submit" value="Update Course" class="btn btn-primary">


</form>


@endsection