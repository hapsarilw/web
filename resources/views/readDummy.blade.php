<html>
<head>
    <!-- Load the Firebase library before loading the body. -->
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase.js"></script>

    <style>
        body, h1, h2 {
        margin:0;
        padding:0;
        }
        body {
        background:#039be5;
        font-family: Arial, sans-serif;
        }
        h1 {
        padding:10px;
        background:#ffcc00;
        }

        /*---------------------------*/
        /* Read Users */
        /*---------------------------*/
        #userList {
        margin:0;
        padding:0;
        width:200px;
        float:left;
        margin:10px;
        border:1px solid #4fc3fc;
        }

        #userList h2 {
        padding:10px;
        margin:0;
        color:white;
        }

        #userList li {
        padding:5px 10px;
        border-top:1px solid #4fc3fc;
        cursor: pointer;
        color:white;
        font-style: italic;
        }

        #userList li:hover {
        background: #4fc3fc;
        }

        #userDetail {
        float:left;
        width:200px;
        margin:10px;
        margin-left:0;
        padding:10px;
        border:1px solid #4fc3fc;
        color:white;
    </style>
</head>

<body>
<!-- Load the application script, which will save data to our Firebase app. -->


<!-- Honestly, we don't need this but otherwise this page is totally blank and it's kind of hard to tell that it's already loaded. -->
<h1>Read Data</h1>
<h1>Firebase CRUD with Vanilla Javascript<br/><small><em>01 Read Data</em></small></h1>

<ul id="userList"></ul>
<div id="userDetail">
    <p >Name :<strong class="detailName"></strong></p>
    <p >Age: <strong class="detailAge"></strong></p>
    <p >Email: <strong class="detailEmail"></strong></p>
    <p >Email: <strong class="detailEmail"></strong></p>
</div>
</body>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
<script>
    // TODO: Replace with your project's config object. You can find this
    // by navigating to your project's console overview page
    // (https://console.firebase.google.com/project/your-project-id/overview)
    // and clicking "Add Firebase to your web app"
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


    // Firebase Database Reference and the child
    const dbRef = firebase.database().ref();
    const usersRef = dbRef.child('users');


    readUserData();


    // --------------------------
    // READ
    // --------------------------
    function readUserData() {

        const userListUI = document.getElementById("userList");

        usersRef.on("child_added", snap => {
            let user = snap.val();
            let $li = document.createElement("li");
            $li.innerHTML = user.name;
            $li.setAttribute("child-key", snap.key);
            $li.addEventListener("click", userClicked)
            userListUI.append($li);
        });
    }



    function userClicked(e) {
        var userID = e.target.getAttribute("user-key");

        const userRef = dbRef.child('users/' + userID);
        const userDetailUI = document.getElementById("user-detail");

        userRef.on("value", snap => {

            userDetailUI.innerHTML = "hi"

            snap.forEach(childSnap => {
                var $p = document.createElement("p");
                $p.innerHTML = childSnap.key  + " - " +  childSnap.val();
                userDetailUI.append($p);
            })
        });
    }
</script>
</html>
