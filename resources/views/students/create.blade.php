@extends('students.layout')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Students</div>
        <div class="card-body">
            {{-- @foreach ($errors->all() as $message)
                {{ $message }}
            @endforeach --}}
            <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <label for="name">Name</label></br>
                <input type="text" name="name" id="name"   class="form-control @error('name') is-invalid @enderror" autofocus></br>
              
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label>Gender</label></br>
                <input type="text" name="gender" id="gender"   class="form-control @error('gender') is-invalid @enderror" autofocus></br>
              
                @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror


                <label>NIS</label></br>
                <input type="text" name="NIS" id="NIS"   class="form-control @error('NIS') is-invalid @enderror" autofocus></br>

                @error('NIS')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="mb3">
                    <label for="photo">Photo</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="photo" id="photo"
                            aria-describedby="inputGroupFileAddon04">
                    </div>
                </div>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
