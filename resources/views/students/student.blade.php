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
    {{-- <div class="" style="margin:20px;"> --}}

    <div class="card-body">
        <a href="{{ url('/student-add') }}" class="btn btn-success btn-sm" title="Add New Student">
            Add New Student
        </a>
    </div>


    <form class="flex items-center">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                </svg>
            </div>
            <input type="text" name="keyword"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search student name..." required>
        </div>
        <button type="submit"
            class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>


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


    {{-- <div class=" mx-4 gap-9 pt-20 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($students as $student)
                <div class="pb-3">
                    <a href="">
                        <img src="{{ asset('storage/photo/' . $student->image) }}" alt=""
                        class="w-full h-44 object-cover rounded-xl">
                            
                    </a>
                    <h6 class="flex font-bold text-2xl mt-2">Nama : <td>{{ $student->name }}</td>
                    </h6>
                    <ul class="flex items-center gap-2 mt-1">
                        <li>
                            <h6>NIS : <td>{{ $student->NIS }}</td>
                            </h6>
                        </li>
                    </ul> --}}




{{-- 
    
        <div class=" mx-4 gap-9 pt-20 grid grid-cols-3 gap-5">
            @foreach ($students as $student)
                <div class=" bg-green-600 pb-3">
                    <img src="{{ asset('storage/photo/' . $student->image) }}" alt=""
                        class=" w-full h-44 object-cover rounded-xl grid-cols-2">
                    <h6 class="text-[#8BC53F] mt-3 ml-2 text-xs ">nis : {{ $student->NIS }}</h6>
                    <h3 class=" font-bold text-2xl mt-2">{{ $student->name }}</h3>
                    <ul class="flex items-center gap-2 mt-2">
                    </ul>

                    <a href="{{ url('/student/' . $student->id) }}" title="View Student">
                        <button
                            class="block rounded bg-blue-500 text-black flex mt-2 hover:text-white w-[100%] px-2 justify-center py-2 items-center">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            Detail</button></a>
                    <div class="flex rounded gap-1 items-center" role="group">
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
                                class="block rounded bg-red-500 px-5 mt-1 py-2.5 text-sm font-medium text-white transition w-[90%] hover:bg-red-800 sm:block"><i
                                    title="Delete Student" onclick="return confirm("Confirm delete?")">
                                    <i class="fa fa-eye item" aria-hidden="true"></i>
                                    Delete</button>
                            </form>
                        </button>
                    </div>
                </div>
            @endforeach
        </div> --}}

    <div class="grid grid-cols-4  gap-3 my-7">
        @foreach ($students as $student)
            <div>
                <img src="{{ asset('storage/photo/' . $student->image) }}" alt=""
                    class="w-full h-44 object-cover rounded-xl">
                <h6 class="text-[#8BC53F] mt-3 ml-2 text-xs ">nis : {{ $student->NIS }}</h6>
                <h3 class=" font-bold text-2xl mt-2">{{ $student->name }}</h3>
                <a href="{{ url('/student/' . $student->id) }}" title="View Student">
                    <button
                        class="block rounded bg-blue-500 text-black flex mt-2 hover:text-white w-[100%] px-2 justify-center py-2 items-center">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        Detail</button></a>
                <ul class="flex items-center gap-1">
                    <li class="w-1/2"><a href="{{ url('/student-edit/' . $student->id) }}" title="Edit Student">
                        <button
                            class="block rounded-md bg-gray-900 w-full mt-1  py-2.5 text-sm font-medium text-white transition w-[100%] hover:bg-gray-600 sm:block">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</button></a></li>
                       {{-- <li> <form action="{{ url('/student' . '/' . $student->id) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit"
                                class=""><i
                                    title="Delete Student" onclick="return confirm('Confirm delete?')">
                                    <i class="fa fa-eye item" aria-hidden="true"></i>
                                    Delete</button>
                        </form></li> --}}
                        <li class="w-1/2 items-center">
                            <form method="POST" action="{{ url('/student' . '/' . $student->id) }}">
                                {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                                <button type="submit" class="w-full mt-1 py-2.5 text-sm text-white bg-red-500 rounded-md" >Delete</button>
                            </form>
                        </li>
                    </ul>
            </div>
        @endforeach
    </div>
    {{-- 
        @foreach ($students as $student)
        <div class=" grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my-6 mx-14 gap-2">
            <div class="pb-2">
                <img src="{{ asset('storage/photo/' . $student->image) }}" alt=""
                class=" w-full h-44 object-cover rounded-xl">
                <h6 class="text-sm mt-4 text-green-500">Design event</h6>
                <h4 class="font-bold text-2xl mt-2">Refactoring UI</h4>
                <ul class="flex items-center gap-2 mt-1">
                    <li>
                        <img src="svg/location.svg" alt="">
                    </li>
                    <li>
                        <h6>malang</h6>
                    </li>
                    <li>
                        <img src="svg/clock.svg" alt="">
                    </li>
                    <li>
                        <h6>12:00 AM</h6>
                    </li>
                </ul>
                <button
                    class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                    <img src="svg/ticket-star.svg" alt="">
                    Beli Tiket
                </button>
            </div>
        </div>

        @endforeach --}}
    <div class=" d-flex justify-content-end mx-5 my-8 ">
        {{ $students->links() }}
    </div>
@endsection
