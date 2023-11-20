@extends('layout.mainlayout')

@section('title', 'student')

@section('content')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <div class="container">
                <br />
                <br /> --}}

    {{-- <table class="table table-fixed">
                    <tbody>
                        @foreach ($student as $item)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->NIS }}</td>

                            <td>
                                
                                <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View</button></a>

                             
                                <a href="{{ url('/student-edit/' . $item->id) }}" title="Edit Student"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i>
                                        Edit</button></a>

                                <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm"><i title="Delete Student"
                                            onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i>
                                        Delete</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
    <div class="" style="margin:20px;">
        <div class="col-12">
        </div>
        <div class="card-body">
            <a href="{{ url('/student-add') }}" class="btn btn-success btn-sm" title="Add New Student">
                Add New
            </a>
        </div>

        {{-- <div class="flex-6 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my-6 mx-14 gap-2">
            @foreach ($student as $student)
                <div class="pb-2">
                    <a class=" " href="">
                        <img src="{{ asset('storage/photo/' . $student->image) }}" width="200px">
                    </a>
                    <a href="{{ url('/student/' . $student->id) }}" title="View Student">
                        <button
                            class="btn btn-info text-black flex mt-2 bg-gray-200 hover:text-white rounded-full w-[100%] px-2 justify-center py-2 items-center gap-1">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            Detail</button></a>
                    <div class="flex rounded" role="group">
                        <a href="{{ url('/student-edit/' . $student->id) }}" title="Edit Student">
                            <button
                                class="btn btn-primary btn-sm text-black flex mt-2 bg-gray-200 hover:text-white rounded-full w-[100%] px-2 justify-center py-2 items-center gap-1 flex">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Edit</button></a>
                        <button form method="POST" action="{{ url('/student' . '/' . $student->id) }}"
                            accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit"
                                class="btn btn-danger btn-sm text-black flex mt-2 bg-gray-200 hover:text-white rounded-full w[100%] px-2 justify-center py-2 items-center gap-10 flex"><i
                                    title="Delete Student" onclick="return confirm("Confirm delete?")"><i
                                        class="fa fa-trash-o" aria-hidden="true"></i>
                                    Delete</button>
                            </form>
                        </button>
                    </div>
                </div>
        </div>
        @endforeach --}}


        <div class="flex-6 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my-6 mx-14 gap-2">
            @foreach ($student as $student)
                <div class="pb-2">
                    <a href="">
                        <img class=" w-full h-40 object-cover rounded-2xl grid-cols-1"
                            src="{{ asset('storage/photo/' . $student->image) }}" width="200px">
                    </a>
                    <h6 class="font-bold text-2xl mt-2">Nama : <td>{{ $student->name }}</td>
                    </h6>
                    <ul class="flex items-center gap-2 mt-1">
                        <li>
                            <h6>NIS : <td>{{ $student->NIS }}</td>
                            </h6>
                        </li>
                    </ul>
                    
                    {{-- <button
                    class="text-black flex mt-2 bg-gray-200 hover:text-white hover:bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                    <img src="svg/ticket-star.svg" alt="">
                    Beli Tiket
                </button> --}}
                    <a href="{{ url('/student/' . $student->id) }}" title="View Student">
                        <button
                            class="block rounded bg-blue-500 text-black flex mt-2 hover:text-white w-[99%] px-2 justify-center py-2 items-center gap-1">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            Detail</button></a>
                    <div class="flex rounded gap-1" role="group">
                        <a href="{{ url('/student-edit/' . $student->id) }}" title="Edit Student">
                            <button
                            class="block rounded bg-gray-900 px-5 mt-1  py-2.5 text-sm font-medium text-white transition w-[100%] hover:bg-gray-600 sm:block">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</button></a>
                        <button form method="POST" action="{{ url('/student' . '/' . $student->id) }}"
                            accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit"
                            class="block rounded bg-red-500 px-5 mt-1 py-2.5 text-sm font-medium text-white transition w-[100%] hover:bg-red-800 sm:block"><i
                            title="Delete Student" onclick="return confirm("Confirm delete?")">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            Delete</button>
                            </form>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
