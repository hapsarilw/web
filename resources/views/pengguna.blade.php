@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Pengguna</h1>
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
                    <th>ID User</th>
                    <th>No Rekening</th>
                    <th>Nama Bank</th>
                    <th>Alamat</th>
                    <th>Kode Pos</th>
                    <th>Kecamatan</th>
                    <th>Kota</th>
                    <th>Propinsi</th>
                    <th>Dibuat Tanggal</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->id_user }}</td>
                        <td>{{ $datas->noRek }}</td>
                        <td>{{ $datas->namaBank }}</td>
                        <td>{{ $datas->alamat }}</td>
                        <td>{{ $datas->kodePos }}</td>
                        <td>{{ $datas->kecamatan }}</td>
                        <td>{{ $datas->kota }}</td>
                        <td>{{ $datas->propinsi }}</td>
                        <td>{{ $datas->created_at }}</td>
                        <td>
                            <form action="{{ route('pengguna.destroy', $datas->id) }}" method="post">
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