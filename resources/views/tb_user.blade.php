@extends('base')
@section('content')

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Data Pengguna dan Karyawan</h1>
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tipe Pengguna</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        <!-- /.content -->
        <!-- Update Model -->
        <form action="" method="POST" class="users-update-record-model form-horizontal">
            <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content" style="overflow: hidden;">
                        <div class="modal-header">
                            <h4 class="modal-title" id="custom-width-modalLabel">Update Data Pegawai</h4>
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
        <!-- Delete Model -->
        <form action="" method="POST" class="users-remove-record-model">
            <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="custom-width-modalLabel">Hapus Data Pegawai</h4>
                            <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <h4>Anda ingin menghapus record ini?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light deleteMatchRecord">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
        firebase.database().ref('users/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $i = 1;
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                <td>'+ $i++ +'</td>\
        		<td>'+ value.name +'</td>\
        		<td>'+ value.email +'</td>\
        		<td>'+ getAdmin(value.is_admin) +'</td>\
        		<td> <a data-toggle="modal" data-target="#update-modal" class="btn btn-outline-success updateData" data-id="'+index+'">Update</a>\
                     <a data-toggle="modal" data-target="#remove-modal" class="btn btn-outline-danger removeData" data-id="'+index+'">Delete</a> </td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');

            function getAdmin($data){
                if($data == 0){
                    return "Pengguna";
                }
                else if($data == 1){
                    return "Admin";
                }
                else if($data == 2){
                    return "Transaksi";
                }
                else if($data == 3){
                    return "Keuangan";
                }
                else{
                    return "Customer Service"
                }
            }


        });
        // Update Data
        var updateID = 0;
        $('body').on('click', '.updateData', function() {
            updateID = $(this).attr('data-id');
            firebase.database().ref('users/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                var updateData =
                    '<div class="form-group">\
                        <label for="first_name" class="col-md-12 col-form-label">Nama</label>\
                        <div class="col-md-12">\
                            <input id="first_name" type="text" class="form-control" name="first_name" value="'+values.name+'" required autofocus>\
                        </div>\
                    </div>\
                    <div class="form-group">\
                        <label for="last_name" class="col-md-12 col-form-label">Email</label>\
                        <div class="col-md-12">\
                            <input id="last_name" type="text" class="form-control" name="last_name" value="'+values.email+'" required autofocus>\
                        </div>\
		            </div>\
		            <div class="form-group">\
                        <label for="jenis_pegawai" class="col-md-12 col-form-label">Jenis Pegawai</label>\
                        <div class="col-md-12">\
                            <select class=" form-control" id="jenisPegawai">\
                                <option value=1>Admin</option>\
                                <option value=2>Transaksi</option>\
                                <option value=3>Keuangan</option>\
                                <option value=4>Customer Service</option>\
                            </select>\
                        </div>\
                    </div>\
		            ';

                $('#updateBody').html(updateData);
            });

        });

        $('.updateUserRecord').on('click', function() {
            var values = $(".users-update-record-model").serializeArray();

            var e = document.getElementById("jenisPegawai");
            var jenis = e.options[e.selectedIndex].value;

            var postData = {
                email : values[1].value,
                name : values[0].value,
                is_admin : jenis,
            };

            var updates = {};
            updates['/users/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });
        // Remove Data
        $("body").on('click', '.removeData', function() {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
        });

        $('.deleteMatchRecord').on('click', function(){
            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('users/' + id).remove();
            $('body').find('.users-remove-record-model').find( "input" ).remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function() {
            $('body').find('.users-remove-record-model').find( "input" ).remove();
        });

    </script>


@endsection
