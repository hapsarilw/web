@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Aktifitas Traveller</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Traveller</th>
                    <th>Aksi</th>
                    <th>Negara</th>
                    <th>Link Post Requester</th>
                    <th>Tanggal Aktifitas</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->id_traveller}}</td>
                        <td>{{ $datas->aksi }}</td>
                        <td>{{ $datas->negara }}</td>
                        <td>@if($datas->aksi=="Setujui Pembelian")
                                <button type="button" class="btn btn-info">Lihat Post Barang</button>
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $datas->tgl }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection