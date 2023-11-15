@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Student</div>
        <div class="card-body">
            @foreach ($errors->all() as $message)
                {{ $message }}
            @endforeach
            <form action="/student/{{ $student->id }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $student->id }}" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control"></br>
                <label>Gender</label></br>
                <input type="text" name="gender" id="address" value="{{ $student->gender }}"
                    class="form-control"></br>
                <label>NIS</label></br>
                <input type="text" name="NIS" id="mobile" value="{{ $student->NIS }}" class="form-control"></br>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <input type="file" name="image" id="image">

                        <div class="pt-3">
                            @if ($student->image != '' && file_exists(public_path() . '/storage/photo' . $student->image))
                                <img src="{{ url('storage/photo' . $student->image) }}">
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('storage/photo/' . $student->image) }}" width="200px">
                    </div>


                </div>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
