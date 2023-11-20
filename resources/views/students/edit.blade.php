@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Student</div>
        <div class="card-body">
            {{-- @foreach ($errors->all() as $message)
                {{ $message }}
            @endforeach --}}
            <form action="/student/{{ $student->id }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $student->id }}" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $student->name }}"
                    class="form-control @error('name') is-invalid @enderror" autofocus></br>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label>Gender</label></br>
                <input type="text" name="gender" id="gender" value="{{ $student->gender }}"
                    class="form-control @error('gender') is-invalid @enderror" autofocus></br>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
          <div class="mb-3">
            <label for="NIS">NIS</label></br>
            <input type="text" name="NIS" id="NIS" value="{{ $student->NIS }}"
                class="form-control @error('NIS') is-invalid @enderror" autofocus></br>
            @error('NIS ')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
                <div class="mb-3 mt-4">
                    <div class="mb-3">
                        <label for="image"></label>
                        <input type="file" name="image" id="image"
                            class="form -control @error('image') is-invalid @enderror">

                        @error('image ')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
