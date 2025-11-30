@extends('template')
@section('content')


<h1>All Students</h1>

@foreach ($students as $student)
    {{
        $student -> fname
        <form action="{{ route('students.destroy',$student -> id)}}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <button type="submit">Delete</button>
      </form>
    }} <br>
@endforeach


@endsection

