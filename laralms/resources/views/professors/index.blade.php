@extends('template')
@section('content')


<h1>All Professors</h1>


<div class ="row">
    @foreach ($professors  as $professor)
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$professor -> professorname}}</h5>
      </div>
      <div class="card-footer">
        <a href="{{ route('professors.edit', $professor -> id)}}" class="btn btn-sm btn-success">Edit</a>
        <form action="{{ route('professors.destroy',$professor -> id)}}" method="POST">
          @method('DELETE')
          {{ csrf_field() }}
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>  
      </div>
    </div>
        
    @endforeach

</div>

@endsection

