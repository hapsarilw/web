@extends('base')
<style>
    #space{
        tab-size: 4px;
    }
</style>
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Pengguna</h1>
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
                    <th>ID User</th>
                    <th>No Rekening</th>
                    <th>Nama Bank</th>
                    <th>Alamat</th>
                    <th>Kode Pos</th>
                    <th>Kecamatan</th>
                    <th>Kota</th>
                    <th>Propinsi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        <!-- Read Model -->
        <form action="" method="POST" class="users-read-record-model form-horizontal">
            <div id="read-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content" style="overflow: hidden;">
                        <div class="modal-header">
                            <h4 class="modal-title" id="custom-width-modalLabel">Data Pengguna</h4>
                        </div>
                        <div class="modal-body" id="readBody">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect read-data-from-delete-form" data-dismiss="modal">Close</button>
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
        firebase.database().ref('pengguna/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $i = 1;
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                <td>'+ $i++ +'</td>\
        		<td><a data-toggle="modal" data-target="#read-modal" class="btn btn-outline-success readData" data-id="'+ value.id_user+'">Data User</a></td>\
        		<td>'+ value.noRek +'</td>\
        		<td>'+ value.namaBank +'</td>\
        		<td>'+ value.kodePos +'</td>\
        		<td>'+ value.kecamatan +'</td>\
        		<td>'+ value.kota +'</td>\
        		<td>'+ value.namaBank +'</td>\
        		<td>'+ value.propinsi +'</td>\
        		<td> <a data-toggle="modal" data-target="#remove-modal" class="btn btn-outline-danger removeData" data-id="'+index+'">Delete</a> </td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');


        });

        // Remove Data
        $("body").on('click', '.removeData', function() {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
        });

        $('.deleteMatchRecord').on('click', function(){
            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('pengguna/' + id).remove();
            $('body').find('.users-remove-record-model').find( "input" ).remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function() {
            $('body').find('.users-remove-record-model').find( "input" ).remove();
        });

        // Read Data
        var readID = 0;
        $('body').on('click', '.readData', function() {
            readID = $(this).attr('data-id');
            firebase.database().ref('users/' + readID).on('value', function(snapshot) {
                var values = snapshot.val();
                var readData =
                    '<div>\
                        <div class="col-12 "><h4 id=space><pre>Nama: '+values.name+'</pre> </h4></div>\
                    </div>\
                    <div>\
                        <div class="col-12 "><h4 id=space><pre>Email: '+values.email+'</pre> </h4></div>\
		            </div>\
		            ';
                $('#readBody').html(readData);
            });

        });

        $('.readReadRecord').on('click', function() {
            var values = $(".users-read-record-model").serializeArray();

            var postData = {
                email : values[1].value,
                name : values[0].value,
            };

            var read = {};
            read['/users/' + readID] = postData;

            firebase.database().ref().update(read);

            $("#read-modal").modal('hide');
        });

    </script>
@endsection
