@extends('base')
@section('content')

    <!-- Main Section -->
    <section class="main-section">s
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit User</h1>
            <hr>
            @foreach($data as $datas)
                <form action="{{ route('user.update', $datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="usr" name="name" value="{{ $datas->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                    </div>
                    <div class="form-group">
                        <label for="admin">Tipe User:</label>
                        <hr>
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="Pengguna") echo "checked";?>
                               value="Pengguna">Pengguna
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="Admin") echo "checked";?>
                               value="Admin">Admin
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="Transaksi") echo "checked";?>
                               value="Transaksi">Transaksi
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="Keuangan") echo "checked";?>
                               value="Keuangan">Keuangan
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="Customer Service") echo "checked";?>
                               value="Customer Service">Customer Service


                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ $datas->password }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                    </div>
                </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection