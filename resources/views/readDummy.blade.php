<html>
<body>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        padding: 15px;
    }

    table {
        border-spacing: 5px;
    }

</style>

<script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyDr2Im1C1lQvrxuQocW4ul69MKwRfc5g6g",
        authDomain: "denuncias-app.firebaseapp.com",
        databaseURL: "https://denuncias-app.firebaseio.com",
        projectId: "denuncias-app",
        storageBucket: "denuncias-app.appspot.com",
        messagingSenderId: "885651585540"
    };
    firebase.initializeApp(config);
</script>

<head>
    <title>Denuncias Municipales ASDE</title>
</head>
<table style="width:100%" id="ex-table">
    <tr id="tr">
        <th>Email</th>
        <th>Nama</th>
        <th>Password</th>
        <th>id</th>
    </tr>
</table>

<script>
    //firebase script should be here
    var database = firebase.database();
    database.ref().once('value', function(snapshot){
        if(snapshot.exists()){
            var content = '';
            snapshot.forEach(function(snapshot){
                var val = snapshot.val();
                content +='<tr>';
                content += '<td>' + val.Email + '</td>';
                content += '<td>' + val.Nama + '</td>';
                content += '<td>' + val.Password + '</td>';
                content += '<td>' + val.id + '</td>';
                content += '</tr>';
            });
            $('#ex-table').append(content);
        }
    });


</script>

</body>
</html>