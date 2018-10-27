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

    // Initialize your Firebase app
    firebase.initializeApp(config);

    var ref = firebase.database().ref();

    var playersRef = ref.child("Users");
    playersRef.push ({
        Email: "admin@gmail.com",
        Nama: "admin",
        Password: "123456"
    });
</script>