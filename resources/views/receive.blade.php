@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Receive</h1>
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
                    <th>ID</th>
                    <th>Waktu</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
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
                        <button type="button" class="btn btn-success waves-effect waves-light updateStatusRecord">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
        firebase.database().ref('receive/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $i = 1;
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                <td>'+ $i++ +'</td>\
        		<td>'+ index +'</td>\
        		<td>'+ value.waktu +'</td>\
        		<td>'+ value.jumlah +'</td>\
        		<td>'+ value.status +'</td>\
        		<td><a data-toggle="modal" data-target="#update-modal" class="btn btn-outline-success updateData" data-id="'+index+'">Update</a></td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
        });

        firebase.database().ref('receive/').on('value', function(snapshot) {
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
            firebase.database().ref('receive/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                var updateData =
                    '<div class="form-group">\
                        <label for="post status" class="col-md-12 col-form-label">Verifikasi Pembayaran</label>\
                        <p>'+values.status+'</p>\
                        <div class="col-md-12">\
                            <select class=" form-control" id="statusBayar">\
                                <option value="Uang sudah Dikirim">Uang sudah Dikirim</option>\
                                <option value="Uang gagal Dikirim">Uang gagal Dikirim</option>\
                            </select>\
                        </div>\
                    </div>\
		            ';

                $('#updateBody').html(updateData);
            });
        });
        $('.updateStatusRecord').on('click', function() {
            var e = document.getElementById("statusBayar");
            var pilihan = e.options[e.selectedIndex].value;

            firebase.database().ref('/receive/' + updateID).update({ status: pilihan });

            $("#update-modal").modal('hide');
        });


    </script>
@endsection
