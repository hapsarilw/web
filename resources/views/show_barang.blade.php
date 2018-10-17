@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Data Barang</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table>
                <tr spa>
                    <th rowspan="6"><p><img width="300" src="{{$barang->foto}}" /></p></th>
                    <th></th>
                </tr>

                <tr>
                    <th>
                        <p>Nama {{$barang->nama}}</p>
                        <p>Unit {{$barang->unit}}</p>
                        <p>Status {{$barang->statusPecahBelah}}</p>
                        <p>Berat {{$barang->berat}}</p>
                        <p>Harga {{$barang->harga}}</p>
                        <p>Deskripsi {{$barang->deskripsi}}</p>
                    </th>

                </tr>
            </table>


        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
