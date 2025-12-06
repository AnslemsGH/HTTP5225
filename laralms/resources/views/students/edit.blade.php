@extends('template')
@section('content')
<h3>Update Student</h3>

<form action="{{ route('students.update', $student -> id) }}" method="POST">
    @method('PUT')
    {{ csrf_field() }}
    <input type="text"  class="form-control" name="fname" value="{{ $student -> fname }}">
    @error('fname')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
    <input type="text"  class="form-control" name="lname" value="{{ $student -> lname }}">
        @error('lname')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
    <input type="text"  class="form-control" name="email" value="{{ $student -> email }}">
        @error('email')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
    <input type="submit" value="Update Student" class="btn btn-primary">


</form>


@endsection