<!DOCTYPE html>
<html>
        <head>
                <title>GetMeetUp</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link href = "css/styles.css" rel = "stylesheet">
                <link rel="stylesheet" href="/css/font-awesome.min.css">
                <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        </head>
        <style type="text/css">
        .input-group[class*="col-"] {
	    padding-right: 15px;
	    padding-left: 15px;
	    }

		.popover   {
		    background-color: #e74c3c;
		    color: #ecf0f1;
		    width: 120px;
		}
		.popover.right .arrow:after {
		    border-right-color: #e74c3c;
		}

        span.step {
  background: #cccccc;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; 
}

        </style>
        <body>


        <div id = "main" class="main" style='display:none'>
               
                <div class = "navbar navbar-inverse navbar-static-top">
                        <div class = "container">
                               
                                <a href = "loggedin.php" class = "navbar-brand">GetMeetUp</a>
                               
                                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                        <span class = "icon-bar"></span>
                                </button>
                               
                                <div class = "collapse navbar-collapse navHeaderCollapse">
                               
                                        <ul class = "nav navbar-nav navbar-right">
                                       
                                                <li ><a href = "index.php">Home</a></li>
                                                <li class = "active"><a href = "gettingstarted.php">Get Started</a></li>
                                                
                                                <li><a href = "#Contact" data-toggle="modal">Contact Us</a></li>
                                                <li class = "dropdown">
                                                       
                                                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
                                                        <ul class = "dropdown-menu">
                                                                <li><a href = "#">Twitter</a></li>
                                                                <li><a href = "#">Facebook</a></li>
                                                                <li><a href = "#">Google+</a></li>
                                                                
                                                        </ul>
                                               
                                                </li>
                                                <li><a href = "about.php">About</a></li>
                                                <li id = "loginno" style='display:none'><a href = "#Login" data-toggle="modal">Login</a></li>
                                                <li id = "loginyes" style = 'display:none'><a href = "javascript:logout();">Logout</a></li>

                                       
                                        </ul>
                               
                                </div>
                               
                        </div>
                </div>
               
                <div class = "container">
               
                        <div class = "jumbotron">
                                <center><h2>
                                Getting started with GetMeetUp could not be easier. Simply follow the 3 steps below in order to find your perfect meeting place!</h2></center>
                                
                        </div>
               
                </div>
               

                   
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <center><span class="step">1</span><h3><a href = "#">Login Using one of Your Favorite Apps</a></h3>
                            <p>To provide you with the best experience, GetMeetUp seamlessly works with your favorite social media websites in order to make login into our system quick and easy. We value our user's privacy, so we never store any of your personal information, usernames, or passwords - just the way it should be. </p>
                                    <a href = "login.php" class = "btn btn-success">Login Now</a>
                                    <br>
                    <br>
                    <br>
                    </div>

                    
                        <img src="images/login.png" height="50%" width="50%">
                   
                    
                        </div>
                        </center>



                        <div class="col-md-6">
                            <center><span class="step">2</span><h3><a href = "#">Enter Some Information About the Place You Would Like to Find</a></h3>
                            <p>Add just a couple words or a phrase to tell us what kind of place you want to meet up at. You can enter general terms like "coffee" or specific cafes you would love to try out. You can change the mode of transportation, and add as many starting locations as you like. The sky is the limit!</p>
                                    <center><a href = "login.php" class = "btn btn-success">Get Started</a></center>
                                    <br>
                                    <br>
                                    <br>
                    </div>
                        <img src="images/form.png" height="35%" width="50%">
                    
                        </div>
                    </div>
                </div>

                <br>
                <br>
                

                <div class="container">
               <div class="col-md-6">
                            <center><span class="step">3</span><h3><a href = "#">Use the Interactive Map to Navigate Results</a></h3>
                            <p>The fully functional map populates with optimized meeting locations for you to choose from. Simply click on the blue marker, and then "Get Directions" to generate directions from each of your starting locations.</p>
                                    <center><a href = "login.php" class = "btn btn-success">Give it a Try</a></center>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                    </div>
                        <img src="images/results.png" height="50%" width="50%">
                    
                        </div>
                    </div>
                </div>
                </div>


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
                           
                                <a id = "cancelmodal" class = "btn btn-primary" data-dismiss = "modal">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			        <div class="modal-dialog">
				        <div class="modal-content">
					        <div class="modal-header">
					            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					            <h4 class="modal-title">Contact Form</h4>
					        </div>
					        <div class="modal-body">
					          <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
								    <div class="form-group">
								        <label class="control-label col-md-4" for="first_name">First Name</label>
								        <div class="col-md-6">
								            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
								        </div>
								    </div>
								    <div class="form-group">
								        <label class="control-label col-md-4" for="last_name">Last Name</label>
								        <div class="col-md-6">
								            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
								        </div>
								    </div>
								    <div class="form-group">
								        <label class="control-label col-md-4" for="email">Email Address</label>
								        <div class="col-md-6 input-group">
								        <span class="input-group-addon">@</span>
								            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
								        </div>
								    </div>
								    <div class="form-group">
								        <label class="control-label col-md-4" for="comment">Question or Comment</label>
								        <div class="col-md-6">
								            <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
								        </div>
								    </div>
								    <div class="form-group">
								        <div class="col-md-6">
								           <center><button type="submit" value="Submit" class="btn btn-primary pull-right" id="send_btn">Send</button></center>
								        </div>
								    </div>
							</form>
					        </div><!-- End of Modal body -->
				        </div><!-- End of Modal content -->
			        </div><!-- End of Modal dialog -->
    			</div><!-- End of Modal -->


               </div>
                
               
        </body>
</html>





<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src = "js/bootstrap.js"></script>
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

if($('#Login').hasClass('in')){
    window.location.href = "index.php";
}

$('#loginno').hide();
$('#loginyes').show();
$('#main').fadeIn(1000);


// Log out so we can log in again with a different provider.
//auth.logout();
} else {
$('#loginyes').hide();
$('#loginno').show();
$('#main').fadeIn(1000);



}
});

function login(provider) {
auth.login(provider);

if($('#Login').hasClass('in')){
    
    $('#Login').modal('hide');

}

}

$('#send_btn').popover({content: 'Thank You'},'click'); 

function logout() {
auth.logout();
window.location.href = "index.php";

} 



    




</script>