    @extends('layout.mainlayout')

    @section('title', 'Home')

    @section('content')
    
        <h1 class="text-center font-serif	font-family: ui-serif;">Ini Halaman Home</h1>
        <h2 class="text-center">
            Selamat Datang, {{ $nama }}
        </h2>

        <div class="container">
            <div class="row" style="margin:20px;">
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
                                </h5>

                                <tr>
                                    <hr>
                                </tr>

                        </div>
                    </div>
                </div>
            </div>

        @endsection
