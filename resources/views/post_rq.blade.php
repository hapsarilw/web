@extends('base')

@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Table Post Requester</h1>
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
                    <th>Link Barang</th>
                    <th>Status Post</th>
                    <th>Waktu Persetujuan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        <!-- /.content -->
        <!-- Update Model -->
        <form action="" method="POST" class="post-update-record-model form-horizontal">
            <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content" style="overflow: hidden;">
                        <div class="modal-header">
                            <h4 class="modal-title" id="custom-width-modalLabel">Update Status Post</h4>
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
        <!-- Read Barang -->
        <form action="" method="POST" class="post-barang-record-model form-horizontal">
            <div id="read-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content" style="overflow: hidden;">
                        <div class="modal-header">
                            <h4 class="modal-title" id="custom-width-modalLabel">Data Barang</h4>
                            <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" id="readBody">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- /.main-section -->
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
        firebase.database().ref('post_rq/').on('value', function(snapshot) {
            var value = snapshot.val();
            var htmls = [];
            $i = 1;
            $.each(value, function(index, value){
                const postKey = firebase.database().ref().child('post_rq').push().key;
                if(value) {
                    htmls.push('<tr>\
                <td>'+ $i++ +'</td>\
        		<td><button type="button" class="btn btn-info btn-lg readBarang" data-toggle="modal" data-id="'+index+'" data-target="#read-modal">Data Barang</button></td>\
        		<td>'+ value.statusPost +'</td>\
        		<td>'+ value.waktuPostDisetujui +'</td>\
        		<td><button type="button" class="btn btn-info btn-lg updateData" data-toggle="modal" data-id="'+index+'" data-target="#update-modal">Ubah Status</button></td>\
        	</tr>');
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);

        });


        // Update Data
        var updateID = 0;
        $('body').on('click', '.updateData', function() {
            updateID = $(this).attr('data-id');
            firebase.database().ref('post_rq/' + updateID).on('value', function(snapshot) {
                var values = snapshot.val();
                var updateData =
                    '<div class="form-group">\
                       <label for="last_name" class="col-md-12 col-form-label">Tgl Upload Post</label>\
                        <div class="col-md-12">\
                            <input id="waktuPost" type="text" class="form-control" name="waktu" value="'+values.waktuPostDisetujui+'" disabled required autofocus>\
                        </div>\
                    </div>\
                    <div class="form-group">\
                        <label for="post status" class="col-md-12 col-form-label">Ubah Status</label>\
                        <div class="col-md-12">\
                            <select class=" form-control" id="statusPost">\
                                <option value=setujui>Setujui</option>\
                                <option value=tolak>Tolak</option>\
                            </select>\
                        </div>\
                    </div>\
		            ';

                $('#updateBody').html(updateData);
            });

        });

        $('.updateStatusRecord').on('click', function() {
            var values = $(".post-update-record-model").serializeArray();

            var e = document.getElementById("statusPost");
            var status = e.options[e.selectedIndex].value;

            var postData = {
                waktuPostDisetujui : Date(),
                statusPost : status,
            };

            var postData2 = {
                statusBarang : status,
            };

            var updates = {};
            updates['/post_rq/' + updateID] = postData;

            var updates2 = {};
            updates2['/barang/' + updateID] = postData2;


            firebase.database().ref().update(updates);
            firebase.database().ref('/barang/' + updateID).update({ statusBarang : status });

            $("#update-modal").modal('hide');
        });

        // Read Barang
        var readID = 0;
        $('body').on('click', '.readBarang', function() {
            readID = $(this).attr('data-id');
            firebase.database().ref('barang/' + readID).on('value', function(snapshot) {
                var values1 = snapshot.val();
                var readBarang =
                    '<div class="row">\
                        <div class="col-xs-4">\
                            <img width=300px length=auto alt="foto barang"> \
                        </div>\
                        <div class="col-xs-5" style="border:0px solid gray">\
                            <h3>'+values1.namaBarang+'</h3>\
                            <h6 class="title-price"><small>Harga</small></h6>\
                            <h3 style="margin-top:0px;">Rp '+values1.harga+'</h3>\
                        <div class="section">\
                            <h6 class="title-attr" style="margin-top:15px;" ><small>Berat</small></h6>\
                            <h3 style="margin-top:0px;">'+values1.berat+' kg</h3>\
                        <div>\
                        <h4>Kuning</h4>\
                    </div>\
                </div>\
                <div class="section" style="padding-bottom:20px;">\
                    <h6 class="title-attr"><small>Jumlah Pesanan</small></h6>\
                <div>\
                <h4>10</h4>\
                </div>\
                </div>\
                    <div class="section" style="padding-bottom:20px;">\
                    <button class="btn btn-success disabled"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Status Saat Ini : '+values1.statusBarang+'</button>\
                </div>\
                </div>\
                <div class="col-xs-9">\
                <div style="width:100%;border-top:1px solid silver">\
                    <p style="padding:15px;">\
                    <small>\
                    Panjang : '+values1.panjang+'<br>\
                    Lebar : '+values1.lebar+'\
                </small>\
                </p>\
                <small>\
                <ul>\
                <li><p>'+values1.deskripsi+'</p>\\</li>\
                </ul>\
                </small>\
                </div>\
                </div>\
                </div>\
		            ';
                firebase.storage().ref(values1.imageURL).getDownloadURL().then(function(url)                             {
                    document.querySelector('img').src = url;

                }).catch(function(error) {
                    console.error(error);
                });
                $('#readBody').html(readBarang);
            });
        });

    </script>
@endsection
