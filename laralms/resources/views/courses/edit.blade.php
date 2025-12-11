@extends('template')
@section('content')
<h3>Update Course</h3>

<form action="{{ route('courses.update', $course -> id) }}" method="POST">
    @method('PUT')
    {{ csrf_field() }}
    <input type="text"  class="form-control" name="coursename" value="{{ $course -> coursename }}">
           @error('coursename')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
    <input type="text"  class="form-control" name="description" value="{{ $course -> description }}">
           @error('description')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
    <label for="professor_id" class="form-label">Professor</label>
        <select name="professor_id" id="professor_id" class="form-select form-select-lg rounded-3 shadow-sm" required>
            <option value="" disabled>Select a Professor</option>

            @foreach ($professors as $professor)
                <option value="{{ $professor->id }}" {{ $course->professor_id == $professor->id ? 'selected' : '' }}>{{ $professor->professorname }}
                </option>
            @endforeach
        </select>
        <br>
    <input type="submit" value="Update Course" class="btn btn-primary">


</form>


@endsection