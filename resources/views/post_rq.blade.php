@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Table Post Requester</h1>
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
                    <th>ID Barang</th>
                    <th>ID User</th>
                    <th>ID Pegawai</th>
                    <th>Waktu Post</th>
                    <th>Jumlah</th>
                    <th>Status Post</th>
                    <th>Tanggal Berakhir</th>
                    <th>Status Post</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->id_barang }}</td>
                        <td>{{ $datas->id_user }}</td>
                        <td>{{ $datas->id_pegawai }}</td>
                        <td>{{ $datas->waktuPost }}</td>
                        <td>{{ $datas->jumlah }}</td>
                        <td>{{ $datas->statusPost }}</td>
                        <td>{{ $datas->tanggalBerakhir }}</td>
                        <td>
                            {{--<form action="{{ route('post_rq.updateStatus', $datas->id) }}" method="post">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--{{ method_field('UPDATE') }}--}}
                                {{--<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Post tidak disetujui?')">Setuju</button>--}}
                                {{--<button class="btn btn-sm btn-success" type="submit" onclick="return confirm('Setujui Postingan?')">Setuju</button>--}}
                            {{--</form>--}}
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