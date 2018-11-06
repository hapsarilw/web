

var config = {
    apiKey: "{{ config('services.firebase.api_key') }}",
    authDomain: "{{ config('services.firebase.auth_domain') }}",
    databaseURL: "{{ config('services.firebase.database_url') }}",
    storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    projectId: "fly-n-buy",
    messagingSenderId: "1023970941466"
};
firebase.initializeApp(config);
// Firebase Variables
// Firebase Database Reference and the child
const dbRef = firebase.database().ref();
const usersRef = dbRef.child('users');

ref.on("value", function(snapshot) {
    console.log(snapshot.val());
}, function (error) {
    console.log("Error: " + error.code);
});
