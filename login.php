
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>GetMeetUp v1.0 Login</title>
  <script src="pace.js"></script>
  <link href="loadingbar2.css" rel="stylesheet" />
</head>
<body >


 
<h4>Facebook</h4>
<p><a href="javascript:login('facebook');">Login</a></p>

<h4>GitHub</h4>
<p><a href="javascript:login('github');">Login</a></p>

<h4>Google</h4>
<p><a href="javascript:login('google');">Login</a></p>

<h4>Twitter</h4>
<p><a href="javascript:login('twitter');">Login</a></p>
             


   

  <script type="text/javascript" src="https://cdn.firebase.com/v0/firebase.js"></script>
  <script type='text/javascript' src='https://cdn.firebase.com/js/simple-login/1.3.0/firebase-simple-login.js'></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript">

  
    var href = document.location.href;
    

    // FirebaseSimpleLogin demo instantiation
    var firebaseRef = new Firebase("https://intense-fire-9670.firebaseio.com/");
    var auth = new FirebaseSimpleLogin(firebaseRef, function(error, user) {
      if (error) {
        // an error occurred while attempting login
        alert(error);
      } else if (user) {
        // user authenticated with Firebase
       
        window.location.href = "index.php";
		
		
		

        // Log out so we can log in again with a different provider.
        //auth.logout();
      } else {
        // user is logged out
      }
    });

    function login(provider) {
      auth.login(provider);
      
    }

  	


	
  </script>



  
  </form>
</body>
</html>
