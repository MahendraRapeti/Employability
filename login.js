


  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyACN6UPoP5i6HdPwiTdYCbnZQ_Fx9VPqm0",
    authDomain: "employability-2f4b8.firebaseapp.com",
    projectId: "employability-2f4b8",
    storageBucket: "employability-2f4b8.appspot.com",
    messagingSenderId: "515139706178",
    appId: "1:515139706178:web:19ac3a9032dece3f5c7cdb"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const auth=firebase.auth();
  var z=0;
  function register()
  {
      window.location="signup.html";
  }

  function login()
  {

    var email=document.getElementById("email");
    var password=document.getElementById("password");

    const promise=auth.signInWithEmailAndPassword(email.value,password.value);

    promise.catch(e => alert(e.message));
    
    promise.then(
        function(value)
        {
          alert("Successfully signed in");
            window.open("main.html");
        },
    )
   
    
  }

  function log()
  {
      window.location="login.html";

  }

  function signup()
  {

    var email=document.getElementById("email");
    var password=document.getElementById("password");
    if(email==""||password=="")
    {
        alert("please fill all details");
    }
    else
    {

    const promise=auth.createUserWithEmailAndPassword(email.value,password.value);

    promise.catch(e => alert(e.message));
    
    promise.then(
        function(value)
        {
            alert("signed up successfully");
            window.open("main.html");
        },
    )
    }
    
  }



  

  