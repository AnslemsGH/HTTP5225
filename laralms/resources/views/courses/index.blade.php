@extends('template')
@section('content')

<h1 class="mb-4 text-success">All Courses</h1>

<div class="row">
    @foreach ($courses as $course)
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-success shadow-sm">

            <div class="card-header bg-success text-white">
                <h5 class="card-title mb-0">{{ $course->coursename }}</h5>
            </div>

            <div class="card-body">
                <p class="card-text mb-1">
                    <strong class="text-success">Professor:</strong> 
                    {{ $course->professor }}
                </p>

                <p class="card-text">
                    <strong class="text-success">Description:</strong><br>
                    {{ $course->description }}
                </p>
            </div>

            <div class="card-footer d-flex justify-content-between bg-light">
                <a href="{{ route('courses.edit', $course->id) }}" 
                   class="btn btn-sm btn-outline-success">
                    Edit
                </a>

                <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        Delete
                    </button>
                </form>
            </div>

        </div>
    </div>
    @endforeach
</div>

@endsection
