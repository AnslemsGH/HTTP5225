@extends('template')
@section('content')

<h3>Add a Student</h3>

<div class="container">
    <div class="row">
        <div class="col">
            @if($errors -> any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
                    
                @endforeach
</ul>
</div>
            @endif
        </div>
    </div>
</div>

<form action="{{ route('students.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="text"  class="form-control" name="fname" placeholder="First Name">
    @error('fname')
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
    <input type="text"  class="form-control" name="lname" placeholder="Last Name">
    @error('lname')
            <span class="text-danger">
            {{$message}}
        </span>
    @enderror
    <br><br>
    <input type="email"  class="form-control" name="email" placeholder="Email">
    <br><br>
    <input type="submit" value="Add Student" class="btn btn-primary">
</form>

@endsection