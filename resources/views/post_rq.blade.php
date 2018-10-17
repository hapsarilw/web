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
                    <th>Link Barang</th>
                    <th>Nama Pengguna</th>
                    <th>Nama Pegawai</th>
                    <th>Status Post</th>
                    <th>Tanggal Berakhir</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <a target="_blank" href="{{ url('show_barang/' . $datas->id_barang) }}">Link Barang</a>
                        </td>
                        <td>{{ $datas->id_pengguna }}</td>
                        <td>{{ $datas->id_pegawai }}</td>
                        <td>{{ $datas->statusPost }}</td>
                        <td>{{ $datas->tglBerakhir }}</td>
                        <td>
                            @if ($datas->statusPost === "Belum Konfirmasi")
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Posting ?</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select><br>
                                    <button class="btn btn-sm btn-success" type="submit" onclick="return confirm('Yakin ingin konfirmasi?')">Simpan</button>
                                </div>
                            @else
                                -
                            @endif

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
