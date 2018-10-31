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

let app = Firebase.initializeApp(config);
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


// •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
// signup form
// •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
var singoutButton = document.querySelector("#signout");
var currentEmail = document.querySelector("#current-email");

var singupForm = document.querySelector("#signup-form");
var userName = document.querySelector("#username");
var email = document.querySelector("#email");
var password = document.querySelector("#password");
var singupButton = document.querySelector("#signup");


singupButton.addEventListener("click", clickSignupButton);
singoutButton.addEventListener("click", clickSignoutButton);


function clickSignupButton(){

    //signup firebase method
    auth.createUserWithEmailAndPassword(email.value, password.value).
    then(function(user){
        console.log(auth.currentUser.email)


    }, function(error) {
        console.log(error.message);
        // error message show that you need to enable that authentication in firebase
    });

}

function clickSignoutButton(){
    auth.signOut()
}

// •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
// singin form
// •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
var signinEmail = document.querySelector("#signinEmail");
var signinPassword = document.querySelector("#signinPassword");
var singinButton = document.querySelector("#signin");

singinButton.addEventListener("click", clickSigninButton);


function clickSigninButton() {

    auth.signInWithEmailAndPassword(signinEmail.value, signinPassword.value).
    then(function(user){
        console.log(user)
    }, function(error) {
        console.log(error.message);
        // error message show that you need to enable that authentication in firebase
    });

}
