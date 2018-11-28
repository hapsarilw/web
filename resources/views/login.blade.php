@extends('base2')
@section('content')

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->

            <h1><img width="200" src="{{ URL::to('/assets/img/4061e1fb-fc5b-4d74-a5c0-791f83f6c7b9.png') }}">Admin - Login</h1>
            <hr class="col-md-6">
            {{--@if(\Session::has('alert'))--}}
                {{--<div class="alert alert-danger" >--}}
                    {{--<div>{{Session::get('alert')}}</div>--}}
                {{--</div>--}}
            {{--@endif--}}
            {{--@if(\Session::has('alert-success'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--<div>{{Session::get('alert-success')}}</div>--}}
                {{--</div>--}}
            {{--@endif--}}
                <div id="signInForm">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="signinEmail" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="alamat">Password:</label>
                            <input type="password" class="form-control" id="signinPassword" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-md btn-primary" id="signin">Login</button>
                        {{--<a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>--}}
                    </div>
                </div>


        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
    <!-- /.main-section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
    <script type="text/javascript" src="../../public/assets/js/main.js"></script>
    <script>
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
        // singin form
        // •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
        var signinEmail = document.querySelector("#signinEmail");
        var signinPassword = document.querySelector("#signinPassword");
        var singinButton = document.querySelector("#signin");

        singinButton.addEventListener("click", clickSigninButton);


        function clickSigninButton() {

            auth.signInWithEmailAndPassword(signinEmail.value, signinPassword.value).
            then(function(users){
                console.log(users)
            }, function(error) {
                console.log(error.message);
                // error message show that you need to enable that authentication in firebase
            });
        }

    </script>
@endsection





