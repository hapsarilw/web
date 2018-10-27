var appMaster = {
	menuToggler: function(){
		// Menu Toggler
	    $('#menuToggler').on('click', function(e) {
	    	e.preventDefault();
	    	/* Act on the event */
	    	$('#wrapper').toggleClass('toggled');
	    });
	    
	},
	anotherFunction: function(){
		// Add you custom here and don't forget to change the object title (anotherFunction)
	}
}

// Initialize Firebase
var config = {
    apiKey: "AIzaSyCTLQLC7wzcz5dEKz_BQQAY-ar6M8tQ6IQ",
    authDomain: "fly-n-buy.firebaseapp.com",
    databaseURL: "https://fly-n-buy.firebaseio.com",
    projectId: "fly-n-buy",
    storageBucket: "fly-n-buy.appspot.com",
    messagingSenderId: "1023970941466"
};
firebase.initializeApp(config);
