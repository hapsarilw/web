@extends('base')
@section('content')

    <!-- Main Section -->
    <section class="main-section">
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
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="0") echo "checked";?>
                               value="0">Pengguna
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="1") echo "checked";?>
                               value="1">Admin
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="2") echo "checked";?>
                               value="2">Transaksi
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="3") echo "checked";?>
                               value="3">Keuangan
                        <input type="radio" name="is_admin"
                               <?php if (isset($datas->is_admin) && $datas->is_admin=="4") echo "checked";?>
                               value="4">Customer Service

                        <?php echo $datas->is_admin?>


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