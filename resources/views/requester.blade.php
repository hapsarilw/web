@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Requester</h1>
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
                    <th>List Aktifitas </th>
                    <th>Dibuat Tanggal</th>
                </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        {{--Modal Email User--}}
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
        firebase.database().ref('requester/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $i = 1;
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                <td>'+ $i++ +'</td>\
        		<td><a data-toggle="modal" data-target="#read-modal" class="btn btn-outline-success readData" data-id="'+ value.id_pengguna+'">Data User</a></td>\
        		<td><a href="/act_requester" class="btn btn-outline-success actR_Data" data-id="'+ value.key+'">Aktifitas User</a></td>\
        		</td>\
        		<td>DD:MM:YY</td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);

            function getLink($data){
                var ref = new Firebase("https://fly-n-buy.firebaseio.com/users/");
                // Attach an asynchronous callback to read the data at our posts reference
                ref.on($data, function(snapshot) {
                    console.log(snapshot.val());
                }, function (errorObject) {
                    console.log("The read failed: " + errorObject.code);
                });
            }


        });
        // Read User Data
        $('body').on('click', '.readData', function() {
            read_IDPgn = $(this).attr('data-id');
            firebase.database().ref('pengguna/' + read_IDPgn).on('value', function(snapshot) {
                var values1 = snapshot.val();
                var id_user = values1.id_user
                firebase.database().ref('users/' + id_user).on('value', function(snapshot) {
                    var values2 = snapshot.val();
                    var readData =
                        '<div>\
                            <div class="col-12 "><h4 id=space><pre>Nama: '+values2.name+'</pre> </h4></div>\
                    </div>\
                    <div>\
                        <div class="col-12 "><h4 id=space><pre>Email: '+values2.email+'</pre> </h4></div>\
		            </div>\
		            ';
                    $('#readBody').html(readData);
                });
            });
        });

        $('.readReadRecord').on('click', function() {
            var values = $(".users-read-record-model").serializeArray();

            var postData = {
                email : values[1].value,
                name : values[0].value,
            };

            var read = {};
            read['/users/' + userID] = postData;

            firebase.database().ref().update(read);

            $("#read-modal").modal('hide');
        });
    </script>
    <!-- /.main-section -->
@endsection
