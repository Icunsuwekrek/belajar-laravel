@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('student/' .$student->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="address" value="{{$student->gender}}" class="form-control"></br>
        <label>NIS</label></br>
        <input type="text" name="NIS" id="mobile" value="{{$student->NIS}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
@stop