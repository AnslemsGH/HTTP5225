@extends('template')
@section('content')

<h3>Add a Course</h3>

<form action="{{ route('courses.store') }}" method="POST" >
    {{ csrf_field() }}
    <div class="form-group">
    <input type="text" class="form-control" name="coursename" placeholder="Course Name">
        @error('coursename')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    </div>
    <br><br>
    <input type="text" class="form-control" name="description" placeholder="Course Description">
        @error('description')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
        <label>Select a Professor:</label><br>
        <select name="professor_id" id="professor_id" class="form-select form-select-lg border-primary shadow-sm">
            <option value="" selected disabled>Select a Professor</option>
        @foreach ($professors as $professor)
        <option value="{{$professor->id}}">{{$professor-> professorname}}</option>
        @endforeach
        </select>
        <br>

    <input type="submit" value="Add Course" class="btn btn-primary">
</form>

@endsection