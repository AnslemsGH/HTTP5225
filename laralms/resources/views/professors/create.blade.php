@extends('template')
@section('content')

<h3>Add a Professor</h3>

<form action="{{ route('professors.store') }}" method="POST" >
    {{ csrf_field() }}
    <div class="form-group">
    <input type="text" class="form-control" name="professorname" placeholder="Professor Name">
    @error('professorname')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror    
</div>
    <br><br>
    <input type="submit" value="Add Professor" class="btn btn-primary">
</form>

@endsection