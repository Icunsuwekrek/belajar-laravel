@extends('students.layout')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Students</div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <label for="name">Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Gender</label></br>
                <input type="text" name="gender" id="gender" class="form-control"></br>
                <label>NIS</label></br>
                <input type="text" name="NIS" id="NIS" class="form-control"></br>
                <div class="mb3">
                  <label for="photo">Photo</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="photo" id="photo"
                            aria-describedby="inputGroupFileAddon04" >
                    </div>
                </div>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
