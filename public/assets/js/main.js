import Firebase from 'firebase';
import Vue from 'vue';
import VueFire from 'vuefire';
import App from '../../../resources/js/app';

Vue.use(VueFire)
new Vue({
    el: '#app',
    template: '<App/>',
    components: { App }
})

let config = {
    apiKey: "AIzaSyCTLQLC7wzcz5dEKz_BQQAY-ar6M8tQ6IQ",
    authDomain: "fly-n-buy.firebaseapp.com",
    databaseURL: "https://fly-n-buy.firebaseio.com",
    projectId: "fly-n-buy",
    storageBucket: "fly-n-buy.appspot.com",
    messagingSenderId: "1023970941466"
};

Firebase.initializeApp(config);
// Firebase Variables

var auth = firebase.auth();

// on state changed
auth.onAuthStateChanged(firebaseUser => {
    // check email
    if(firebaseUser){
        currentEmail.innerHTML = auth.currentUser.email
        currentEmail.style.display = 'block';
        singoutButton.style.display = 'block';
        singupForm.style.display = 'none';
    } else{
        singoutButton.style.display = 'none';
        singupForm.style.display = 'block';
        currentEmail.style.display = 'none';
    }

});

/*SignOut Varuable*/
var singoutButton = document.querySelector("#signout");
var currentEmail = document.querySelector("#current-email");




singupButton.addEventListener("click", clickSignupButton);
singoutButton.addEventListener("click", clickSignoutButton);


// --------------------------
// REGISTER KARYAWAN
// --------------------------

const addUserBtnUI = document.getElementById("add-user-btn");
addUserBtnUI.addEventListener("click", addUserBtnClicked)



function addUserBtnClicked() {

    const usersRef = dbRef.child('users');

    const addUserInputsUI = document.getElementsByClassName("form-control");

    // this object will hold the new user information
    let newUser = {};

    // loop through View to get the data for the model
    for (let i = 0, len = addUserInputsUI.length; i < len; i++) {

        let key = addUserInputsUI[i].getAttribute('data-key');
        let value = addUserInputsUI[i].value;
        newUser[key] = value;
    }

    usersRef.push(newUser, function(){
        console.log("data has been inserted");
    })
}


// •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
// SIGN OUT METHOD
// ••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
function clickSignoutButton(){
    auth.signOut()
}


/*Sign In*/
var signinEmail = document.querySelector("#signinEmail");
var signinPassword = document.querySelector("#signinPassword");
var singinButton = document.querySelector("#signin");

singinButton.addEventListener("click", clickSigninButton);

/*Sign In User Baru*/
function clickSigninButton() {

    auth.signInWithEmailAndPassword(signinEmail.value, signinPassword.value).
    then(function(user){
        console.log(user)
    }, function(error) {
        console.log(error.message);
        // error message show that you need to enable that authentication in firebase
    });

}

// --------------------------
// READ
// --------------------------
function readUserData() {

    const userListUI = document.getElementById("user-list");

    usersRef.on("value", snap => {

        userListUI.innerHTML = ""

        snap.forEach(childSnap => {

            let key = childSnap.key,
                value = childSnap.val()

            let $li = document.createElement("li");

            // edit icon
            let editIconUI = document.createElement("span");
            editIconUI.class = "edit-user";
            editIconUI.innerHTML = " ✎";
            editIconUI.setAttribute("userid", key);
            editIconUI.addEventListener("click", editButtonClicked)

            // delete icon
            let deleteIconUI = document.createElement("span");
            deleteIconUI.class = "delete-user";
            deleteIconUI.innerHTML = " ☓";
            deleteIconUI.setAttribute("userid", key);
            deleteIconUI.addEventListener("click", deleteButtonClicked)

            $li.innerHTML = value.name;
            $li.append(editIconUI);
            $li.append(deleteIconUI);

            $li.setAttribute("user-key", key);
            $li.addEventListener("click", userClicked)
            userListUI.append($li);

        });
    })

}



function userClicked(e) {


    var userID = e.target.getAttribute("user-key");

    const userRef = dbRef.child('users/' + userID);
    const userDetailUI = document.getElementById("user-detail");

    userRef.on("value", snap => {

        userDetailUI.innerHTML = ""

        snap.forEach(childSnap => {
            var $p = document.createElement("p");
            $p.innerHTML = childSnap.key  + " - " +  childSnap.val();
            userDetailUI.append($p);
        })

    });


}


