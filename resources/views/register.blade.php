@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section" id="mainsection">
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
            <form >
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text"  class="form-control" data-key="newName" >
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" data-key="newEmail" >
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" data-key="newPassword" >
                </div>
                <div class="form-group">
                    <label for="password">Password Confirmation:</label>
                    <input type="password" class="form-control" data-key="newConfirmation" >
                </div>
                <div class="form-group">
                    <label for="Jenis Pegawai">Pilih Pegawai:</label>
                        <select class="form-control" data-key="is_admin">
                            <option value="1">Admin</option>
                            <option value="2">Transaksi</option>
                            <option value="3">Keuangan</option>
                            <option value="4">Customer Service</option>
                        </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary" id="add-user-btn">Simpan</button>
                    <button type="reset" class="btn btn-md btn-danger">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->

@endsection