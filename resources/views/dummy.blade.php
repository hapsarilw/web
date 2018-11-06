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
    // userRef.push (
    //     { name: "Brandi McKenzie I", email: "tgrant@hotmail.com", password: "hic", is_admin: 3 }
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
    //     { id_user: 15, noRek: "97384870755", namaBank: "Mandiri", alamat: "5838 Danyka Fall\nPort Eloisa OH 70907-6341", kodePos: "69317-5099", kecamatan: "chester", kota: "Davonteburgh", propinsi: "Wisconsin"}
    // );
    // penggunaRef.push(
    //     { id_user: 11, noRek: "7474571", namaBank: "BNI", alamat: "94219 Hilpert Mall Suite 781\nEast Greyson, IA 78497", kodePos: "44729-7306", kecamatan: "town", kota: "Caterinaburgh", propinsi: "Missouri"}
    // );
    // penggunaRef.push(
    //     { id_user: 13, noRek: "0773350590473", namaBank: "Mandiri", alamat: "29795 Greta Summit Suite 826\nDonatoton, TX 99246-3557", kodePos: "10076", kecamatan: "town", kota: "North Omerside", propinsi: "Alaska"}
    //
    // );
    // penggunaRef.push(
    //     { id_user: 14, noRek: "80355236", namaBank: "BCA", alamat: "309 Georgette Wall Apt. 157\nLake Kalebstad, NV 62350-4729", kodePos: "67521", kecamatan: "bury", kota: "Sawaynland", propinsi: "Nevada" }
    //
    // );
    // penggunaRef.push(
    //     { id_user: 7, noRek: "390729636445650", namaBank: "Mandiri", "alamat": "7030 Collins Trail Suite 793\nBeertown, SC 30460-9558", kodePos: "88882-3139", kecamatan: "mouth", kota: "West Horacioview" }
    //
    // );
    // penggunaRef.push(
    //     { id_user: 6, noRek: "04547263", namaBank: "BCA", alamat: "69309 Kasey Mews Apt. 077\nGermaineview, RI 31761-3594", kodePos: "81671", kecamatan: "furt", kota: "Lake Sydneyland", propinsi: "Colorado" }
    //
    // );
    // penggunaRef.push(
    //     { id_user: 12, noRek: "1143359607", namaBank: "BCA", alamat: "88492 Efren Spurs Suite 023\nPort Destinee, AZ 05545", kodePos: "37712", kecamatan: "chester", kota: "Lake Kristystad", propinsi: "California" }
    //
    // );
    // penggunaRef.push(
    //     { id_user: 8, noRek: "5428689928", namaBank: "Mandiri", alamat: "82097 Rohan Flats\nPort Clintborough, VT 55364-8688", kodePos: "59258", kecamatan: "burgh", kota: "Lake Shanelle", propinsi: "Alaska" }
    //
    // );
    // penggunaRef.push(
    //     { id_user: 9, noRek: "01470824875", namaBank: "BNI", alamat: "1294 Jakayla Via Apt. 645\nNorth Cordieville, LA 28237-6508", kodePos: "19159", "kecamatan": "port", kota: "West Cordelia", propinsi: "Wisconsin" }
    //
    // );
    // penggunaRef.push(
    //     { id_user: 10, noRek: "3101632", namaBank: "BNI", alamat: "43103 Waino Shoals Suite 785\nElectashire, TN 06756", kodePos: "52476", "kecamatan": "mouth", kota: "Port Rettabury", propinsi: "Iowa" }
    // );

    /*********************************************/
    // Insert Requester //
    /*********************************************/
    // var requesterRef = ref.child('requester');
    // requesterRef.push(
    //     { id_pengguna: 8, actRequester: 1 }
    //
    // );
    // requesterRef.push(
    //     { id_pengguna: 11, actRequester: 2 }
    //
    // );
    // requesterRef.push(
    //     { id_pengguna: 12, actRequester: 4 }
    //
    // );
    // requesterRef.push(
    //     { id_pengguna: 15, actRequester: 5 }
    // );
    // requesterRef.push(
    //     { id_pengguna: 9, actRequester: 3 }
    // );

    /*********************************************/
    // Insert Traveller //
    /*********************************************/
    // var travellerRef = ref.child('traveller');
    // travellerRef.push(
    //     {id_pengguna: 7, actTraveller: 2}
    // );
    // travellerRef.push(
    //     {id_pengguna: 15, actTraveller: 5}
    // );
    // travellerRef.push(
    //     {id_pengguna: 11, actTraveller: 3}
    // );
    // travellerRef.push(
    //     {id_pengguna: 14, actTraveller: 1}
    // );
    // travellerRef.push(
    //     {id_pengguna: 8, actTraveller: 4}
    // );

    /*********************************************/
    // Insert Barang //
    /*********************************************/
    // var barangRef = ref.child('barang');
    //
    // barangRef.push(
    //     { idPengguna:3, nama: "Barang Jaskolski", unit: 2, deskripsi: "Excepturi ut magni possimus atque. At asperiores et velit in quo rerum maiores. Soluta iste nihil odit expedita expedita natus magni.", statusPecahBelah: "Tidak", berat: 1, harga: 93814.0, panjang: 40, lebar: 35, foto: "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F32313039...", kodeBarang: "Ready Stock"}
    //
    // );
    // barangRef.push(
    //     { idPengguna:6,  nama: "Barang Legros", unit: 1, deskripsi: "Aspernatur quas ipsum praesentium occaecati. Quia alias hic ipsa sit ut asperiores. Expedita sint rerum aperiam placeat rerum.", statusPecahBelah: "Ya", berat: 1, harga: 71737.0, panjang: 44, lebar: 70, foto: "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F33333835...", kodeBarang: "Request", }
    // );
    // barangRef.push(
    //     { idPengguna:8, nama: "Barang abc", unit: 3, deskripsi: "Sapiente aut repellat magnam in est. Sint accusamus tempora quas aut cupiditate quidem. Occaecati incidunt assumenda at. Sunt quam nihil nisi eius rerum ea.", statusPecahBelah: "Ya", berat: 2, harga: 106198.0, panjang: 93, "lebar": 39, "foto": "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F37353636...", kodeBarang: "Request" }
    // );
    // barangRef.push(
    //     { idPengguna:11, nama: "Barang erd", unit: 3, deskripsi: "Enim consequuntur dolor vel dolores eaque dicta est ea. Voluptatem non occaecati laudantium recusandae eos aliquam. Cupiditate est voluptatem quia quis eveniet ab alias.", statusPecahBelah: "Tidak", berat: 4, harga: 192619.0, panjang: 26, "lebar": 48, "foto": "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F35393837...", kodeBarang: "Pre Order" }
    // );
    // barangRef.push(
    //     { idPengguna:12, nama: "Barang ruqi", unit: 1, deskripsi: "Tempore veritatis aut voluptas quia qui cum. Quia et doloremque autem maiores velit modi minus fugit. Dignissimos et aut earum deserunt.", statusPecahBelah: "Ya", berat: 1, harga: 97980.0, panjang: 85, "lebar": 95, "foto": "68747470733A2F2F6C6F72656D706978656C2E636F6D2F3634302F3438302F3F39343133...", kodeBarang: "Pre Order" }
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

</script>