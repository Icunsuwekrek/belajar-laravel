@extends('layout.mainlayout')

@section('title', 'student')

@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student-add') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive table-dark">

                            <table class="table table-fixed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>NIS</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>{{ $item->NIS }}</td>

                                            <td>
                                                <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/student-edit/' . $item->id) }}"
                                                    title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="POST" action="{{ url('/student' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            title="Delete Student" onclick="return confirm("Confirm
                                                            delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <header class="text-black">
                                <div class="flex-auto" id="navbarSupportedContent">
                                    <div class="flex-6 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my-6 mx-14 gap-2">
                                        <div class="pb-2">
                                            <a href="event_detail.html">
                                                <img src="img/1.png" alt="">
                                            </a>
                                            
                                            <h6 class="text-sm mt-4 text-blue-600"><td>{{ $item->name }}</td></h6>
                                            <h4 class="font-bold text-2xl mt-2"><td>{{ $item->gender }}</td></h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <li>
                                                    <h6>NIS</h6>
                                                </li>
                                                <li>
                                                    <h6><td>{{ $item->NIS }}</td></h6>
                                                </li>
                                            </ul>
                                            <button
                                                class="text-black flex mt-2 bg-gray-200 hover:text-white hover:bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                                                <img src="img/ticket-star.svg" alt="">
                                                Edit | Delete
                                            </button>
                                        </div>

                                        <div class="pb-2">
                                            <img src="img/2.png" alt="">
                                            <h6 class="text-sm mt-4 text-green-500"><td>{{ $item->name }}</td></h6>
                                            <h4 class="font-bold text-2xl mt-2">Web Dev Summit 2022</h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <li>
                                                    <img src="img/location.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>malang</h6>
                                                </li>
                                                <li>
                                                    <img src="img/clock.svg" alt="">
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

                                        <div class="pb-2">
                                            <img src="img/3.png" alt="">
                                            <h6 class="text-sm mt-4 text-orange-600">Cyrpto</h6>
                                            <h4 class="font-bold text-2xl mt-2">Crypto & NFT Era</h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <li>
                                                    <img src="img/location.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>malang</h6>
                                                </li>
                                                <li>
                                                    <img src="img/clock.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>12:00 AM</h6>
                                                </li>
                                            </ul>
                                            <button
                                                class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                                                <img src="img/ticket-star.svg" alt="">
                                                Beli Tiket
                                            </button>
                                        </div>

                                        <div class="pb-2">
                                            <img src="img/4.png" alt="">
                                            <h6 class="text-sm mt-4 text-blue-400">Library</h6>
                                            <h4 class="font-bold text-2xl mt-2">Threejs Summit</h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <li>
                                                    <img src="img/location.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>malang</h6>
                                                </li>
                                                <li>
                                                    <img src="img/clock.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>12:00 AM</h6>
                                                </li>
                                            </ul>
                                            <button
                                                class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                                                <img src="img/ticket-star.svg" alt="">
                                                Beli Tiket
                                            </button>
                                        </div>

                                        <div class="pb-2 mt-8">
                                            <img src="img/5.png" alt="">
                                            <h6 class="text-sm mt-4 text-green-500">Web Dev</h6>
                                            <h4 class="font-bold text-2xl mt-2">Web Dev Summit 2022</h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <li>
                                                    <img src="img/location.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>malang</h6>
                                                </li>
                                                <li>
                                                    <img src="img/clock.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>12:00 AM</h6>
                                                </li>
                                            </ul>
                                            <button
                                                class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                                                <img src="img/ticket-star.svg" alt="">
                                                Beli Tiket
                                            </button>
                                        </div>

                                        <div class="pb-2 mt-8">
                                            <img src="img/6.png" alt="">
                                            <h6 class="text-sm mt-4 text-green-500">Web Dev</h6>
                                            <h4 class="font-bold text-2xl mt-2">Web Dev Summit 2022</h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <li>
                                                    <img src="img/location.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>malang</h6>
                                                </li>
                                                <li>
                                                    <img src="img/clock.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>12:00 AM</h6>
                                                </li>
                                            </ul>
                                            <button
                                                class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                                                <img src="img/ticket-star.svg" alt="">
                                                Beli Tiket
                                            </button>
                                        </div>

                                        <div class="pb-2 mt-8">
                                            <img src="img/7.png" alt="">
                                            <h6 class="text-sm mt-4 text-orange-600">Cyrpto</h6>
                                            <h4 class="font-bold text-2xl mt-2">Crypto & NFT Era</h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <img <img src="img/location.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>malang</h6>
                                                </li>
                                                <li>
                                                    <img src="img/clock.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>12:00 AM</h6>
                                                </li>
                                            </ul>
                                            <button
                                                class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                                                <img src="img/ticket-star.svg" alt="">
                                                Beli Tiket
                                            </button>
                                        </div>

                                        <div class="pb-2 mt-8">
                                            <img src="img/8.png" alt="">
                                            <h6 class="text-sm mt-4 text-blue-400">Library</h6>
                                            <h4 class="font-bold text-2xl mt-2">Threejs Summit</h4>
                                            <ul class="flex items-center gap-2 mt-1">
                                                <li>
                                                    <img src="img/location.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>malang</h6>
                                                </li>
                                                <li>
                                                    <img src="img/clock.svg" alt="">
                                                </li>
                                                <li>
                                                    <h6>12:00 AM</h6>
                                                </li>
                                            </ul>
                                            <button
                                                class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                                                <img src="img/ticket-star.svg" alt="">
                                                Beli Tiket
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
