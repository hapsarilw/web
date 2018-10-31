@extends('base2')
@section('content')

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->

            <h1><img width="200" src="{{ URL::to('/assets/img/4061e1fb-fc5b-4d74-a5c0-791f83f6c7b9.png') }}">     Admin - Login</h1>
            <hr class="col-md-6">
            @if(\Session::has('alert'))
                <div class="alert alert-danger" >
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="signinEmail" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label for="alamat">Password:</label>
                        <input type="password" class="form-control" id="signinPassword" name="password"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-md btn-primary" id="signin">Login</button>
                    {{--<a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>--}}
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection