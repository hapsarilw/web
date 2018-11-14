<html>
<head>
    <!-- Load the Firebase library before loading the body. -->
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase.js"></script>
</head>

<body>
<!-- Load the application script, which will save data to our Firebase app. -->


<!-- Honestly, we don't need this but otherwise this page is totally blank and it's kind of hard to tell that it's already loaded. -->
<h1>Insert DAta!</h1>
</body>
</html>
<script>
    // TODO: Replace with your project's config object. You can find this
    // by navigating to your project's console overview page
    // (https://console.firebase.google.com/project/your-project-id/overview)
    // and clicking "Add Firebase to your web app"
    var config = {
        apiKey: "AIzaSyCTLQLC7wzcz5dEKz_BQQAY-ar6M8tQ6IQ",
        authDomain: "fly-n-buy.firebaseapp.com",
        databaseURL: "https://fly-n-buy.firebaseio.com",
        storageBucket: "fly-n-buy.appspot.com",
    };

    /* Initialize your Firebase app */
    firebase.initializeApp(config);
    var ref = firebase.database().ref();



    /*********************************************/
    // Insert PostRQ //
    /*********************************************/



    /*********************************************/
    // Insert Users //
    /*********************************************/
    // var userRef = ref.child('users');
    // userRef.push(
    //     { name: "admin", email: "admin@gmail.com", password: 123, is_admin: 1 }
    // );
    // userRef.push (
    //     { name: "Zola Will", email: "vergie.dietrich@gmail.com", password: "enim", is_admin: 1 }
    //
    // );
    // userRef.push (
    //     { name: "Rolando Heidenreich II", email: "kade36@yahoo.com", password: "maiores", is_admin: 4 }
    //
    // );
    // userRef.push (
    //     { name: "Chloe Luettgen", email: "javier.eichmann@dickens.com", password: "perspiciatis", is_admin: 2 }
    //
    // );
    // userRef.push (
    //     { name: "Raphaelle Haag", email: "kobe.mraz@hotmail.com", password: "enim", is_admin: 2 }
    //
    // );
    // ref.child('users/-LQ9hR8PcrcOwdSVz_7q').update(
    //     { name: "Brandi McKenzie I", email: "tgrant@hotmail.com", password: "hic", is_admin: 0 }
    //
    // );
    // userRef.push (
    //     { name: "Devyn McLaughlin", email: "baltenwerth@kunde.com", password: "quia", is_admin: 0, }
    //
    // );
    // userRef.push (
    //     { name: "Theodore Hane", email: "rnitzsche@bergstrom.com", password: "odit", is_admin: 0 }
    //
    // );
    // userRef.push (
    //     { name: "Moises Dibbert", email: "frankie.fay@yahoo.com", password: "incidunt", is_admin: 0 }
    // );
    // userRef.push (
    //     { name: "Demarco Stokes", email: "estrella79@gmail.com", password: "aut", is_admin: 0 }
    // );
    // userRef.push (
    //     { name: "Ceasar West", email: "karolann48@yahoo.com", password: "officiis", is_admin: 0 }
    //
    // );
    // userRef.push (
    //     { name: "Kylie Waters", email: "emiliano.terry@gmail.com", password: "ut", is_admin: 0}
    // );
    // userRef.push (
    //     { name: "Lance Nikolaus", email: "rbashirian@morar.com", password: "rerum", is_admin: 0 }
    //
    // );
    // userRef.push (
    //     { name: "Mr. Demarco Doyle", email: "clint41@daniel.biz", password: "voluptates", is_admin: 0 }
    //
    // );
    // userRef.push (
    //     { name: "Agustin Armstrong", email: "felicity.kreiger@lueilwitz.com", password: "aut", is_admin: 0 }
    //
    // );
    // userRef.push (
    //     { name: "Sean Gerlach", email: "willms.olen@cole.com", password: "corrupti", is_admin: 0 }
    // );

    /*********************************************/
    // Insert Pengguna //
    /*********************************************/
    // var penggunaRef = ref.child('pengguna');
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8PcrcOwdSVz_7q", noRek: "97384870755", namaBank: "Mandiri", alamat: "5838 Danyka Fall\nPort Eloisa OH 70907-6341", kodePos: "69317-5099", kecamatan: "chester", kota: "Davonteburgh", propinsi: "Wisconsin"}
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8PcrcOwdSVz_7r", noRek: "7474571", namaBank: "BNI", alamat: "94219 Hilpert Mall Suite 781\nEast Greyson, IA 78497", kodePos: "44729-7306", kecamatan: "town", kota: "Caterinaburgh", propinsi: "Missouri"}
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8QpVrEHOE6EYp_", noRek: "0773350590473", namaBank: "Mandiri", alamat: "29795 Greta Summit Suite 826\nDonatoton, TX 99246-3557", kodePos: "10076", kecamatan: "town", kota: "North Omerside", propinsi: "Alaska"}
    //
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8SDqaMr-dicq53", noRek: "80355236", namaBank: "BCA", alamat: "309 Georgette Wall Apt. 157\nLake Kalebstad, NV 62350-4729", kodePos: "67521", kecamatan: "bury", kota: "Sawaynland", propinsi: "Nevada" }
    //
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8SDqaMr-dicq54", noRek: "390729636445650", namaBank: "Mandiri", "alamat": "7030 Collins Trail Suite 793\nBeertown, SC 30460-9558", kodePos: "88882-3139", kecamatan: "mouth", kota: "West Horacioview" }
    //
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8T34h2WEZ8xJRx", noRek: "04547263", namaBank: "BCA", alamat: "69309 Kasey Mews Apt. 077\nGermaineview, RI 31761-3594", kodePos: "81671", kecamatan: "furt", kota: "Lake Sydneyland", propinsi: "Colorado" }
    //
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8V6FnySxRthnu4", noRek: "1143359607", namaBank: "BCA", alamat: "88492 Efren Spurs Suite 023\nPort Destinee, AZ 05545", kodePos: "37712", kecamatan: "chester", kota: "Lake Kristystad", propinsi: "California" }
    //
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8W7cz9ioMd79a8", noRek: "5428689928", namaBank: "Mandiri", alamat: "82097 Rohan Flats\nPort Clintborough, VT 55364-8688", kodePos: "59258", kecamatan: "burgh", kota: "Lake Shanelle", propinsi: "Alaska" }
    //
    // );
    // penggunaRef.push(
    //     { id_user:"-LQ9hR8XnxY3_YZ5yIa7", noRek: "01470824875", namaBank: "BNI", alamat: "1294 Jakayla Via Apt. 645\nNorth Cordieville, LA 28237-6508", kodePos: "19159", "kecamatan": "port", kota: "West Cordelia", propinsi: "Wisconsin" }
    //
    // );
    // penggunaRef.push(
    //     { id_user: "-LQ9hR8XnxY3_YZ5yIa8", noRek: "3101632", namaBank: "BNI", alamat: "43103 Waino Shoals Suite 785\nElectashire, TN 06756", kodePos: "52476", "kecamatan": "mouth", kota: "Port Rettabury", propinsi: "Iowa" }
    // );

    /*********************************************/
    // Insert Requester //
    /*********************************************/
    // var requesterRef = ref.child('requester');
    ref.child('requester/-LQ9nbqbnk9T5cFawsXI').update(
        { id_pengguna: "-LR1Vr_2Far7Xl5ll2dt",
            actRequester :
                {
                    "-LQC5XbVXTCUyoRudHN8" : true,
                    "-LQC5Xbd8OfrpATaGr9I" : true
                }
        }
    );
    // ref.child('requester/-LQ9nbqk-ng0VTl7y3Bu').update(
    //     { id_pengguna: "-LR1Vr_2Far7Xl5ll2du",
    //         actRequester :
    //             {
    //                 act1 : "-LQC5XbeOIQV5s6n8-2J",
    //                 act2 : "-LQC5XbmvvTJNs3jx9MG"
    //             },
    //         transfer : {
    //             trf1 : "-LR1F9xObmSE8lj4pj5f",
    //             trf2 : "-LR1F9xRoMGeorLKtJuK",
    //             trf3 : "-LR1F9xSy_3aqmLkXWbI"
    //         }
    //     }
    // );
    // ref.child('requester/-LQ9nbqldqREBKZy7ll2').update(
    //     { id_pengguna: "-LR1Vr_3QjwWvzt2aJ9J",
    //         actRequester :
    //             {
    //                 act1 : "-LQC5XblzJfDR3OswLAF",
    //             },
    //         transfer : {
    //             trf1 : "-LR1F9xRoMGeorLKtJuJ",
    //             trf2 : "-LR1F9xSy_3aqmLkXWbH",
    //             trf3 : "-LR1F9xTFZLRtI8FZizA"
    //         }
    //     }
    // );
    // ref.child('requester/-LQ9nbqmDhwkgiZymjLt').update(
    //     { id_pengguna: "-LR1VrZvZ_yzuKfIrAUx", actRequester: null}
    // );
    // ref.child('requester/-LQ9nbqmDhwkgiZymjLu').update(
    //     { id_pengguna: "-LR1Vr_-RyHAWcn4gJw5", actRequester: null}
    // );

    /*********************************************/
    // Insert Traveller //
    /*********************************************/
    // var travellerRef = ref.child('traveller');
    // ref.child('traveller/-LQ9ookXEz9IHzJg6IXI').update(
    //     {id_pengguna: "-LR1Vr_0XdFMVNgSUduy",
    //         actTraveller :
    //                 {
    //                     act1 : "-LQC2Cx-Ef2_bY_pcIcV",
    //                     act2 : "-LQC2CxDwVbc1djcAJ2W",
    //                     act3 : "-LQC2CxDwVbc1djcAJ2X"
    //                 }
    //     }
    // );
    // ref.child('traveller/-LQ9ookfTlKr6JBSLjmk').update(
    //     {id_pengguna: "-LR1Vr_0XdFMVNgSUduz",
    //         actTraveller :
    //             {
    //                 act1 : "-LQC2Cx9OPpaVIDmglWA",
    //                 act2 : "-LQC2CxDwVbc1djcAJ2Y"
    //             },
    //         titipBarang :
    //             {
    //                 brg1 : "a132f2ce-0ece-478c-85a8-72cf6a889967"
    //             },
    //         pengiriman :
    //             {
    //                 kirim1 : "-LQOTtN9AwkO2WHstZ92"
    //             },
    //         receive :
    //             {
    //                 receive1 : "-LR1I6DOw_1VlKF1RdMf"
    //             }
    //
    //
    //     }
    // );
    // ref.child('traveller/-LQ9ookgFdTM_r0axBPi').update(
    //     {id_pengguna: "-LR1Vr_0XdFMVNgSUdv-",
    //         actTraveller :
    //             {
    //                 act1 : "-LQC2CxBBWpCBsPz4IhP",
    //                 act2 : "-LQC2CxDwVbc1djcAJ2Z"
    //             },
    //         titipBarang :
    //             {
    //                 brg1 : "e63bd478-22d8-41c7-83bc-27bdd3a7927e"
    //             },
    //         pengiriman :
    //             {
    //                 kirim1 : "-LQOTtNJyjnYKny-94T4"
    //             },
    //         receive :
    //             {
    //                 receive1 : "--LR1I6DY3Z_Q6_jerIzp",
    //                 receive2 : "-LR1I6DaDJyFWYFoXubM"
    //             }
    //     }
    // );
    // ref.child('traveller/-LQ9ookheboCgMGDgphE').update(
    //     {id_pengguna: "-LR1Vr_2Far7Xl5ll2dr",
    //         actTraveller :
    //             {
    //                 act1 : "-LQC2CxCvz_ijtX2gvNg",
    //                 act2 : "-LQC2CxFmOo_5UOJOmlR"
    //             }
    //     }
    // );
    // ref.child('traveller/-LQ9ookiA9R5VyiIrwUN').update(
    //     {id_pengguna: "-LR1Vr_2Far7Xl5ll2ds",
    //         actTraveller :
    //             {
    //                 act1 : "-LQC2CxCvz_ijtX2gvNh",
    //             }
    //     }
    // );

    /*********************************************/
    // Insert Barang //
    /*********************************************/
    // var barangRef = ref.child('barang');
    //
    // barangRef.push(
    //     { idRequester:3, nama: "Barang Jaskolski", unit: 2, deskripsi: "Excepturi ut magni possimus atque. At asperiores et velit in quo rerum maiores. Soluta iste nihil odit expedita expedita natus magni.", statusPecahBelah: "Tidak", berat: 1, harga: 93814.0, panjang: 40, lebar: 35, foto: "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F32313039...", kodeBarang: "Ready Stock"}
    //
    // );
    // barangRef.push(
    //     { idRequester:6,  nama: "Barang Legros", unit: 1, deskripsi: "Aspernatur quas ipsum praesentium occaecati. Quia alias hic ipsa sit ut asperiores. Expedita sint rerum aperiam placeat rerum.", statusPecahBelah: "Ya", berat: 1, harga: 71737.0, panjang: 44, lebar: 70, foto: "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F33333835...", kodeBarang: "Request", }
    // );
    // barangRef.push(
    //     { idRequester:8, nama: "Barang abc", unit: 3, deskripsi: "Sapiente aut repellat magnam in est. Sint accusamus tempora quas aut cupiditate quidem. Occaecati incidunt assumenda at. Sunt quam nihil nisi eius rerum ea.", statusPecahBelah: "Ya", berat: 2, harga: 106198.0, panjang: 93, "lebar": 39, "foto": "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F37353636...", kodeBarang: "Request" }
    // );
    // barangRef.push(
    //     { idRequester:11, nama: "Barang erd", unit: 3, deskripsi: "Enim consequuntur dolor vel dolores eaque dicta est ea. Voluptatem non occaecati laudantium recusandae eos aliquam. Cupiditate est voluptatem quia quis eveniet ab alias.", statusPecahBelah: "Tidak", berat: 4, harga: 192619.0, panjang: 26, "lebar": 48, "foto": "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F35393837...", kodeBarang: "Pre Order" }
    // );
    // barangRef.push(
    //     { idRequester:12, nama: "Barang ruqi", unit: 1, deskripsi: "Tempore veritatis aut voluptas quia qui cum. Quia et doloremque autem maiores velit modi minus fugit. Dignissimos et aut earum deserunt.", statusPecahBelah: "Ya", berat: 1, harga: 97980.0, panjang: 85, "lebar": 95, "foto": "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F39343133...", kodeBarang: "Pre Order" }
    // );
    // update idBarang //
    // ref.child('requester/-LQ9nbqbnk9T5cFawsXI/barang').update(
    //     {id_barang : "a132f2ce-0ece-478c-85a8-72cf6a889967"}
    // );
    // ref.child('requester/-LQ9nbqk-ng0VTl7y3Bu/barang').update(
    //     {id_barang : "e63bd478-22d8-41c7-83bc-27bdd3a7927e"}
    // );

    /*********************************************/
    // Insert Act_Traveller //
    /*********************************************/
    // var act_trvRef = ref.child('act_traveller');
    //
    // act_trvRef.push(
    //     { id_traveller: 9, aksi: "Pergi", negara: "Amerika", postRequester: "Mon:Jun:1983" }
    // );
    // act_trvRef.push(
    //     { id_traveller: 12, aksi: "Pergi", negara: "Jerman", postRequester: "Sat:May:1979" }
    //
    // );
    // act_trvRef.push(
    //     { id_traveller: 13, aksi: "Pergi", negara: "Jerman", postRequester: "Sun:Dec:1970" }
    //
    // );
    // act_trvRef.push(
    //     { id_traveller: 13, aksi: "Pergi", negara: "Amerika", postRequester: "Mon:Jul:1989" }
    //
    // );
    // act_trvRef.push(
    //     { id_traveller: 15, aksi: "Pergi", negara: "Swiss", postRequester: "Mon:Oct:2009" }
    //
    // );
    // act_trvRef.push(
    //     { id_traveller: 12, aksi: "Pulang", negara: "Indonesia", postRequester: "-" }
    //
    // );
    // act_trvRef.push(
    //     { id_traveller: 10, aksi: "Pulang", negara: "Indonesia", postRequester: "-" }
    //
    // );
    // act_trvRef.push(
    //     { id_traveller: 12, aksi: "Setujui Pembelian", negara: "-", postRequester: "2" }
    //
    // );
    // act_trvRef.push(
    //     { id_traveller: 6, aksi: "Setujui Pembelian", negara: "-", postRequester: "3" }
    //
    // );
    // act_trvRef.push(
    //     {id_traveller: 15, aksi: "Setujui Pembelian", negara: "-", postRequester: "2" }
    // );

    /*********************************************/
    // Insert Act_Traveller //
    /*********************************************/
    // var act_reqRef = ref.child('act_requester');
    //
    // act_reqRef.push(
    //     { id_requester: 4, aksi: "komentar pada post", postRequester: "https:\/\/gusikowski.com\/accusamus-qui-est-quod-et.html" }
    // );
    // act_reqRef.push(
    //     { id_requester: 6, aksi: "komentar pada post", postRequester: "http:\/\/jast.org\/aut-qui-et-repellendus-quasi" }
    // );
    // act_reqRef.push(
    //     { id_requester: 3, aksi: "upload post requester", postRequester: "http:\/\/stokes.net\/" }
    // );
    // act_reqRef.push(
    //     { id_requester: 6, aksi: "melakukan pembayaran", postRequester: "http:\/\/www.ryan.com\/rerum-molestiae-amet-aut-hic" }
    // );
    // act_reqRef.push(
    //     { id_requester: 5, aksi: "upload post requester", postRequester: "https:\/\/nicolas.com\/suscipit-ullam-velit-dolorem-quis-culpa-quos-eveniet.html"}
    // );

    /*********************************************/
    // Insert Beli //
    /*********************************************/
    // var act_reqRef = ref.child('beli');
    //
    // var beli = ref.child('beli');
    // beli.push(
    //     { idReview : null, idTraveller: 1, idBarang : 1, statusBeli : "disetujui traveller" }
    // );
    // beli.push(
    //     { idReview : null, idTraveller: 1, idBarang : 5, statusBeli : "menunggu pembayaran" }
    // );
    // beli.push(
    //     { idReview : 1, idTraveller: 5, idBarang : 2, statusBeli : "proses pembelian" }
    // );
    // beli.push(
    //     { idReview : 2, idTraveller: 3, idBarang : 4, statusBeli : "proses pembelian" }
    // );


    /*********************************************/
    // Insert Pengiriman //
    /*********************************************/
    // var pengiriman = ref.child('pengiriman');
    //
    // pengiriman.push(
    //     { idBarang : null, idTraveller: 3, noResi: "JNE1054", tglPengiriman: "12-03-2018", biayaKirim: 12000, statusKirim: "proses kirim ke alamat penerima"}
    // );
    // pengiriman.push(
    //     { idBarang : null, idTraveller: 5, noResi: "JNE1054", tglPengiriman: "12-03-2018", biayaKirim: 12000, statusKirim: "proses kirim ke alamat penerima"}
    // );


    /*********************************************/
    // Insert Review //
    /*********************************************/
    // var review = ref.child('review')
    //
    // review.push(
    //     { idBeli:1, isiReview : null, bintang:5 }
    // );
    //
    // review.push(
    //     { idBeli:2, isiReview : "Pengiriman baik, barang baik", bintang:3 }
    // );


    /*********************************************/
    // Insert Transfer //
    /*********************************************/
    // var transfer = ref.child('transfer')
    // transfer.push(
    //     { idRequester:null, waktu:firebase.database.ServerValue.TIMESTAMP, jumlah:150000, buktiPembayaran:null, status: "tunggu verifikasi"}
    // );
    // transfer.push(
    //     { idRequester:null, waktu:firebase.database.ServerValue.TIMESTAMP, jumlah:170000, buktiPembayaran:null, status: "sudah verifikasi"}
    // );
    // transfer.push(
    //     { idRequester:null, waktu:firebase.database.ServerValue.TIMESTAMP, jumlah:180000, buktiPembayaran:null, status: "tunggu verifikasi"}
    // );

    /*********************************************/
    // Insert Transfer //
    /*********************************************/
    // var receive = ref.child('receive')
    // receive.push(
    //     { idTraveller:1, waktu:firebase.database.ServerValue.TIMESTAMP, jumlah:150000,  status: "proses verifikasi"}
    // );
    // receive.push(
    //     { idTraveller:null, waktu:firebase.database.ServerValue.TIMESTAMP, jumlah:170000,  status: "sudah ditransfer"}
    // );
    // receive.push(
    //     { idTraveller:null, waktu:firebase.database.ServerValue.TIMESTAMP, jumlah:180000,  status: "proses verifikasi"}
    // );
</script>
