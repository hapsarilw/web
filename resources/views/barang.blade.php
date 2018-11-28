@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table Barang</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th style="width:5%">No.</th>
                    <th style="width:10%">Nama</th>
                    <th style="width:30%">Deskripsi</th>
                    <th style="width:10%">Unit</th>
                    <th style="width:10%">Harga</th>
                    <th style="width:10%">Biaya Admin</th>
                    <th style="width:10%">Foto</th>
                    <th style="width:5%">Staus Pecah Belah</th>
                    <th style="width:10%">Panjang(cm)</th>
                    <th style="width:10%">Lebar(cm)</th>
                </tr>
                </thead>
                <tbody id="tBody1">

                </tbody>
            </table>
            <hr>
            <h4>Konfirmasi Barang</h4>
            <table class="table table-bordered" style="width:100%">
            <thead>
            <tr>
                <th style="width:5%">No.</th>
                <th style="width:10%">ID_Barang</th>
                <th style="width:10%">Status Saat Ini</th>
                <th style="width:30%">Aksi</th>
            </tr>
            </thead>
            <tbody id="tBody2">

            </tbody>
            </table>
        </div>
        <form action="" method="POST" class="users-update-record-model form-horizontal">
            <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content" style="overflow: hidden;">
                        <div class="modal-header">
                            <h4 class="modal-title" id="custom-width-modalLabel">Update Status</h4>
                            <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" id="updateBody">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success waves-effect waves-light updateUserRecord">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
    <script type="text/javascript" src="../../public/assets/js/main.js"></script>
    <script>
        var config = {
            apiKey: "AIzaSyCTLQLC7wzcz5dEKz_BQQAY-ar6M8tQ6IQ",
            authDomain: "fly-n-buy.firebaseapp.com",
            databaseURL: "https://fly-n-buy.firebaseio.com",
            projectId: "fly-n-buy",
            storageBucket: "fly-n-buy.appspot.com",
            messagingSenderId: "1023970941466",
        };

        /* Initialize your Firebase app */
        firebase.initializeApp(config);
        firebase.database().ref('barang/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $i = 1;
            $.each(value, function(index, value){d
                if(value) {
                    htmls.push('<tr>\
                <td>'+ $i++ +'</td>\
        		<td>'+ value.name +'</td>\
        		<td>'+ value.deskripsi +'</td>\
        		<td>'+ value.jumlahPR +'</td>\
        		<td>'+ value.harga +'</td>\
        		<td>'+ value.biayaAdmin +'</td>\
        		<td><img src="'+ value.imgUrl +'" alt=""></td>\
        		<td>'+ value.statusPecahBelah +'</td>\
        		<td>'+ value.panjang +'</td>\
        		<td>'+ value.lebar +'</td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tBody1').html(htmls);
        });

        firebase.database().ref('post_rq/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $i = 1;
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                <td>'+ $i++ +'</td>\
        		<td>'+ value.idBarang +'</td>\
        		<td>'+ value.status +'</td>\
        		<td><a data-toggle="modal" data-target="#update-modal" class="btn btn-outline-success updateData" data-id="'+index+'">Update Status</a>\</td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tBody2').html(htmls);
        });

        // Update Data
        var updateID = 0;
        $('body').on('click', '.updateData', function() {
            updateID = $(this).attr('data-id');
            firebase.database().ref('post_rq/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                var updateData =
                    '<div class="form-group">\
                        <label for="first_name" class="col-md-12 col-form-label">ID</label>\
                        <div class="col-md-12">\
                            <input id="last_name" type="text" class="form-control" name="last_name" value="'+values.idBarang+'" required autofocus>\
                        </div>\
                        <label for="jenis_pegawai" class="col-md-12 col-form-label">Pilih Status</label>\
                        <div class="col-md-12">\
                            <select class=" pilih_statusl" id="pilihStatus">\
                                <option value=Setujui>Setujui</option>\
                                <option value=Tolak>Tolak</option>\
                            </select>\
                        </div>\
                    </div>\
		            ';

                $('#updateBody').html(updateData);
            });

        });

        $('.updateUserRecord').on('click', function() {
            var values = $(".users-update-record-model").serializeArray();

            var e = document.getElementById("pilihStatus");
            var pilihan = e.options[e.selectedIndex].value;

            var postData = {
                idBarang : values[0].value,
                status : pilihan,
            };

            var updates = {};
            updates['/post_rq/' + updateID ] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });


    </script>
@endsection
