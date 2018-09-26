@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table Barang</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th style="width:5%">No.</th>
                    <th style="width:10%">Nama</th>
                    <th style="width:30%">Deskripsi</th>
                    <th style="width:10%">Unit</th>
                    <th style="width:10%">Harga</th>
                    <th style="width:10%">Foto</th>
                    <th style="width:5%">Sttaus Pecah Belah</th>
                    <th style="width:10%">Dibuat Tanggal</th>
                    <th style="width:20%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->nama }}</td>
                        <td>{{ $datas->deskripsi }}</td>
                        <td>{{ $datas->unit }}</td>
                        <td>{{ $datas->harga }}</td>
                        <td><img width="100" src="<?php echo $datas->foto; ?>" /></td>
                        <td>{{ $datas->statusPecahBelah }}</td>
                        <td>{{ $datas->created_at }}</td>
                        <td>
                            <form action="{{ route('barang.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection