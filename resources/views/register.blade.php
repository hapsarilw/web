@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>FlynBuy -  Register Pegawai</h1>
            <hr>
            {{--Menampilkan Hasil Validasi--}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('/registerPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text"  class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password">Password Confirmation:</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                </div>
                <div class="form-group">
                    <label for="Jenis Pegawai">Pilih Pegawai:</label>
                    <div class="form-group">
                        <input type="radio" name="is_admin" value="1">Admin<br>
                        <input type="radio" name="is_admin" value="2">Transaksi<br>
                        <input type="radio" name="is_admin" value="3">Keuangan<br>
                        <input type="radio" name="is_admin" value="4">Customer Service<br>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-md btn-danger">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection