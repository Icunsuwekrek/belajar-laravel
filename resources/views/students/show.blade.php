@extends('layout.mainlayout')   
{{-- @extends('students.layout') --}}
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <div class="card-body row col-lg-12">
                <div class="col-lg-8">
                    <h5 class="card-title">Name : {{ $student->name }}</h5>
                    <p class="card-text">Gender : {{ $student->gender }}</p>
                    <p class="card-text">NIS : {{ $student->NIS }}</p>
                </div>
                <div class="my-2 col-lg-4 d-flex justify-content-end ">
                    <img src="{{ asset('storage/photo/' . $student->image) }}" width="200px">
                </div>
            </div>

        </div>
    </div>
@endsection
