<!DOCTYPE html>
<html>
        <head>
                <title>GetMeetUp</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link href = "css/styles.css" rel = "stylesheet">
                <link rel="stylesheet" href="/css/font-awesome.min.css">
                <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
                <script src="/js/pace.js"></script>
                <link href="/css/loadingbar.css" rel="stylesheet">
        </head>
        <body>

         <div id = "main" class="main" style='display:none'>
               
                <div class = "navbar navbar-inverse navbar-static-top">
                        <div class = "container">
                               
                                <a href = "index.php" class = "navbar-brand">GetMeetUp</a>
                               
                                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                </button>
                               
                                <div class = "collapse navbar-collapse navHeaderCollapse">
                               
                                        <ul class = "nav navbar-nav navbar-right">
                                       
                                                <li class = "active"><a href = "index.php">Home</a></li>
                                                <li><a href = "#">Blog</a></li>
                                                <li class = "dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "#">Twitter</a></li>
                                                                <li><a href = "#">Facebook</a></li>
                                                                <li><a href = "#">Google+</a></li>
                                                                
                                                        </ul>
                                               
                                                </li>
                                                <li><a href = "#">About</a></li>
                                                <li id = "loginno" style='display:none'><a href = "#Login" data-toggle="modal">Login</a></li>
                                                <li id = "loginyes" style = 'display:none'><a href = "javascript:logout();">Logout</a></li>
                                       
                                        </ul>
                               
                                </div>
                               
                        </div>
                </div>
               
                <div class = "container">
               
                        <div class = "jumbotron">
                                <center><h3>Use Your Favorite App to Login!</h3>
                                <a href="javascript:login('github');"><i class="fa fa-github-square fa-5x github-login"></i></a>
                                <a href="javascript:login('google');"><i class="fa fa-google-plus-square fa-5x"></i></a>
                                <a href="javascript:login('facebook');"><i class="fa fa-facebook-square fa-5x"></i></a>
                                <a href="javascript:login('twitter');"><i class="fa fa-twitter-square fa-5x"></i></a>
                               
                        </div>
               
                </div>

        <br>
        <br>
        <br>
               
                <div class = "navbar navbar-default navbar-fixed-bottom">
               
                        <div class = "container">
                                <p class = "navbar-text pull-left">Built By Arun Kalyanaraman</p>
                                <a href="https://twitter.com/share" class="twitter-share-button navbar-text pull-right" data-url="http://getmeetup.com" data-text="Wanna meetup with me? Try GetMeetUp.com now." data-size="large" data-hashtags="GetMeetUp">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </div>
               
                </div>
               
                <div class = "modal fade" id = "Login" role = "dialog">
                    <div class = "modal-dialog">
                        <div class = "modal-content">
                            <div class = "modal-header text-center">
                                <h4>Login</h4>
                            </div>
                            <div class = "modal-body text-center">
                                <p>Login using one of your favorite apps.</p>
                                <a href="javascript:login('github');"><i class="fa fa-github-square fa-4x github-login"></i></a>
                                <a href="javascript:login('google');"><i class="fa fa-google-plus-square fa-4x"></i></a>
                                <a href="javascript:login('facebook');"><i class="fa fa-facebook-square fa-4x"></i></a>
                                <a href="javascript:login('twitter');"><i class="fa fa-twitter-square fa-4x"></i></a>
                            </div>
                            <div class = "modal-footer">
                           
                                <a class = "btn btn-primary" data-dismiss = "modal">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src = "js/bootstrap.js"></script>
            </div>
               
        </body>
</html>

<script type="text/javascript" src="https://cdn.firebase.com/v0/firebase.js"></script>
<script type='text/javascript' src='https://cdn.firebase.com/js/simple-login/1.3.0/firebase-simple-login.js'></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">


var href = document.location.href;


// FirebaseSimpleLogin demo instantiation
var firebaseRef = new Firebase("https://intense-fire-9670.firebaseio.com/");
var auth = new FirebaseSimpleLogin(firebaseRef, function(error, user) {
if (error) {
window.location.href = "login.php";
alert(error);
} else if (user) {

$('#loginno').hide();
$('#loginyes').show();
$('#main').fadeIn(1000);
window.location.href = "loggedin.php";






// Log out so we can log in again with a different provider.
//auth.logout();
} else {

$('#loginno').show();
$('#main').fadeIn(1000);
}
});

function login(provider) {
auth.login(provider);

}





</script>