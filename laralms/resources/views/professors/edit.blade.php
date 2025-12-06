@extends('template')
@section('content')
<h3>Update Professor</h3>

<form action="{{ route('professors.update', $professor -> id) }}" method="POST">
    @method('PUT')
    {{ csrf_field() }}
    <input type="text"  class="form-control" name="professorname" value="{{ $professor -> professorname }}">
    <br><br>
    <input type="submit" value="Update Professor" class="btn btn-primary">


</form>


@endsection