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
    </section>
    <!-- /.main-section -->
    < <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
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
        		<td>'+ getAdmin(value.is_admin) +'\</td>\
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

            function aksi($data){
                if($data==0){
                    return "";
                }
                else{
                    return deletePegawai($data)
                }
            }

            function deletePegawai($data){
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
            }
        });
    </script>


@endsection