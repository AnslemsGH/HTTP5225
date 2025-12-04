@extends('template')
@section('content')


<h1>All Courses</h1>

@foreach ($courses as $course)
    {{
        $course -> coursename
    }} 
            <form action="{{ route('courses.destroy',$course -> id)}}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <button type="submit">Delete</button>
    </form>
    <br>
@endforeach


@endsection