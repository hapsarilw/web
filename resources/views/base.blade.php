<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- For Google -->
    <link rel="author" href="https://plus.google.com/+Scoopthemes">
    <link rel="publisher" href="https://plus.google.com/+Scoopthemes">


    <!-- Canonical -->
    <link rel="canonical" href="">

    <title>Admin Panel - FlyNBuy</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="/assets/css/main.css" rel="stylesheet"> {{-- ini cara memanggil css dari folder assets -> css --}}
    <link href="/assets/css/base.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
    <aside id="sideBar">
        <ul class="main-nav">
            <!-- Your Logo Or Site Name -->
            <li class="nav-brand">
                <a href="/home_user">ADMIN - Home</a>
            </li>
            <li><a href="#">User &nbsp<i class="fa fa-caret-right" aria-hidden="true"></i> </a>
                <ul class="dropdown">
                    <li><a href="/tb_user">Data Pengguna & Karyawan</a></li>
                    <li><a href="/pengguna">Profil Penggguna</a></li>
                </ul>
            </li>
            <li><a href="/register">Tambah Pegawai &nbsp<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <li><a href="#">Requester</a>
                <ul class="dropdown">
                    <li><a href="/requester">Requester</a></li>
                    <li><a href="/act_requester">Aktifitas Requester</a></li>
                </ul>
            </li>
            <li><a href="#">Traveller &nbsp<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                <ul class="dropdown">
                    <li><a href="/traveller">Traveller</a></li>
                    <li><a href="/act_traveller">Aktifitas Traveller</a></li>
                </ul>
            </li>
            <li><a href="#">Barang &nbsp<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                <ul class="dropdown">
                    <li><a href="/barang">Data Barang</a></li>
                    <li><a href="/post_rq">Konfirmasi Post Barang</a></li>
                </ul>
            </li>
            <li><a href="#">Keuangan &nbsp<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                <ul class="dropdown">
                    <li><a href="/transfer">Cek Transfer</a></li>
                    <li>Cek Receive</li>
                </ul>
            </li>
            <li><a href="#">Customer Service &nbsp<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                <ul class="dropdown">
                    <li>Komplain Requester</li>
                    <li>Komplain Traveller</li>
                    <li>Review</li>
                </ul>
            </li>
            <li>

            </li>
            {{--<li>--}}
                {{--<a href="#">Konfirmasi Transaksi</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">Konfirmasi Customer Service</a>--}}
            {{--</li>--}}
            <li style="bottom: 0; position: fixed; overlay: none;">
                <a  href="/logout" id="signout">Logout</a>
            </li>
        </ul>
    </aside>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    {{--<script src="/assets/js/custom.js"></script> --}}{{-- ini cara memanggil js dari folder assets -> js --}}

<!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/3.6.5/firebase.js"></script>
    @yield('content') {{-- Semua file konten kita akan ada di bagian ini --}}


</div>

</body>

</html>
