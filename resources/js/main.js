import Firebase from 'firebase'
import Vue from 'vue'
import VueFire from 'vuefire'
import App from './App'

Vue.use(VueFire)
new Vue({
    el: '#app',
    template: '<App/>',
    components: { App }
})

let config = {
    apiKey: "{{ config('services.firebase.api_key') }}",
    authDomain: "{{ config('services.firebase.auth_domain') }}",
    databaseURL: "{{ config('services.firebase.database_url') }}",
    storageBucket: "{{ config('services.firebase.storage_bucket') }}",

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


