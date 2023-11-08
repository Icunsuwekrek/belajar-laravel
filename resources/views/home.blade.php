    @extends('layout.mainlayout')

    @section('title', 'Home')

    @section('content')
    <h1>Ini halaman home</h1>
        <h2>
            Selamat Datang, {{ $nama }}
          
            </h2>

            <table class="table">
                <tr>
                    <th  class="bg-primary">No</th>
                    <th class="bg-primary">Nama</th>
                </tr>
                <h5>
                    @foreach ($buah as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> {{ $data }}</td>
                        </tr>
                    @endforeach
                </h5>
                <tr></tr>
            </table>
           @endsection

     