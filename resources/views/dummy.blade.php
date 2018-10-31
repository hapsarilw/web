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

    /*Insert Data Users*/
    var userRef = ref.child("users");
    userRef.push (
        { name: "admin", email: "admin@gmail.com", password: 123, is_admin: 1 }
    );
    userRef.push (
        { name: "Zola Will", email: "vergie.dietrich@gmail.com", password: "enim", is_admin: 1 }

    );
    userRef.push (
        { name: "Rolando Heidenreich II", email: "kade36@yahoo.com", password: "maiores", is_admin: 4 }

    );
    userRef.push (
        { name: "Chloe Luettgen", email: "javier.eichmann@dickens.com", password: "perspiciatis", is_admin: 2 }

    );
    userRef.push (
        { name: "Raphaelle Haag", email: "kobe.mraz@hotmail.com", password: "enim", is_admin: 2 }

    );
    userRef.push (
        { name: "Brandi McKenzie I", email: "tgrant@hotmail.com", password: "hic", is_admin: 3 }

    );
    userRef.push (
        { name: "Devyn McLaughlin", email: "baltenwerth@kunde.com", password: "quia", is_admin: 0, }

    );
    userRef.push (
        { name: "Theodore Hane", email: "rnitzsche@bergstrom.com", password: "odit", is_admin: 0 }

    );
    userRef.push (
        { name: "Moises Dibbert", email: "frankie.fay@yahoo.com", password: "incidunt", is_admin: 0 }
    );
    userRef.push (
        { name: "Demarco Stokes", email: "estrella79@gmail.com", password: "aut", is_admin: 0 }
    );
    userRef.push (
        { name: "Ceasar West", email: "karolann48@yahoo.com", password: "officiis", is_admin: 0 }

    );
    userRef.push (
        { name: "Kylie Waters", email: "emiliano.terry@gmail.com", password: "ut", is_admin: 0}
    );
    userRef.push (
        { name: "Lance Nikolaus", email: "rbashirian@morar.com", password: "rerum", is_admin: 0 }

    );
    userRef.push (
        { name: "Mr. Demarco Doyle", email: "clint41@daniel.biz", password: "voluptates", is_admin: 0 }

    );
    userRef.push (
        { name: "Agustin Armstrong", email: "felicity.kreiger@lueilwitz.com", password: "aut", is_admin: 0 }

    );
    userRef.push (
        { name: "Sean Gerlach", email: "willms.olen@cole.com", password: "corrupti", is_admin: 0 }
    );
</script>