@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Admin Fly n Buy</h1><br><br>

            <h4>Hallo, {{Session::get('name')}}. Apakabar?</h4><br>
            <h4>Email kamu : {{Session::get('email')}}</h4>
            <h4>Status Login : {{Session::get('login')}}</h4>


        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection