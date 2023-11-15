
@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')



    <h1 class="text-center font-serif	font-family: ui-serif md-grid-flow;">Ini Halaman Home</h1>
    <h2 class="text-center">
        Selamat Datang, {{ $nama }}
    </h2>

    {{-- <div class="container"> --}}
    {{-- <div class="row" style="margin:20px;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <table class="table table-bordered table-dark">
                                <tr>
                                    <th class="bg-dark">No</th>
                                    <th class="bg-dark">Data</th>
                                </tr>
                                <h5>
                                    @foreach ($buah as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> {{ $data }}</td>
                                        </tr>
                                    @endforeach
                                </h5> --}}



    <div class="flex-6 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my-6 mx-14 gap-2">
        <div class="pb-2">
            <a href="event_detail.html">
                <img src="img/1.png" alt="">
            </a>
            <h6 class="text-sm mt-4 text-blue-600">Design Event</h6>
            <h4 class="font-bold text-2xl mt-2">Refactoring UI</h4>
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
                class="text-black flex mt-2 bg-gray-200 hover:text-white hover:bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
                <img src="img/ticket-star.svg" alt="">
                Beli Tiket
            </button>
        </div>

        <div class="pb-2">
            <img src="img/2.png" alt="">
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
            <button class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
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
            <button class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
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
            <button class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
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
            <button class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
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
            <button class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
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
            <button class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
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
            <button class="text-white flex mt-2 bg-black rounded-full w-[90%] px-1 justify-center py-2 items-center gap-1">
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

@endsection
