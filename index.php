<!DOCTYPE html>
<html>
        <head>
                <title>GetMeetUp</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link href = "css/styles.css" rel = "stylesheet">
                <link rel="stylesheet" href="/css/font-awesome.min.css">
                <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
                <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
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
        body
{
    margin:0px;
    padding:0px;
    background-color:#eee;
}

        </style>
        <body class="body">


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
                                       
                                                <li class = "active"><a href = "index.php">Home</a></li>
                                                <li><a href = "gettingstarted.php">Get Started</a></li>
                                                
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
               
                
               
                            <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/8.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Find Meetups For Free!</h1>
              <p>GetMeetUp is a tool which helps you and your friends find the most optimal meeting location, and the best part: it's free!</p>
              <p><a id="l1a"class="btn btn-lg btn-primary" href = "#Login" data-toggle="modal" role="button">Get Started</a></p>
              <p><a id="l1b"class="btn btn-lg btn-primary" href = "loggedin.php" data-toggle="modal" role="button">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/11.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hate Traffic?</h1>
              <p>Not to worry. GetMeetUp sources the best traffic information and directions from Google Maps to make sure that you aren't stuck in gridlock.</p>
              <p><a id="l2a"class="btn btn-lg btn-primary" href = "#Login" data-toggle="modal" role="button">Get Started</a></p>
              <p><a id="l2b"class="btn btn-lg btn-primary" href = "loggedin.php" data-toggle="modal" role="button">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/7.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Anywhere. Anytime.</h1>
              <p>Sourcing places from powerful location databases like Google and Yelp, GetMeetUp will always find you the best place to meet up with your friends.</p>
              <p><a id="l3a"class="btn btn-lg btn-primary" href = "#Login" data-toggle="modal" role="button">Get Started</a></p>
              <p><a id="l3b"class="btn btn-lg btn-primary" href = "loggedin.php" data-toggle="modal" role="button">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/9.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Never Get Lost Again!</h1>
              <p>We give you directions so you won't ever struggle to find your way again.</p>
              <p><a id="l4a"class="btn btn-lg btn-primary" href = "#Login" data-toggle="modal" role="button">Get Started</a></p>
              <p><a id="l4b"class="btn btn-lg btn-primary" href = "loggedin.php" data-toggle="modal" role="button">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
               
     

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/2.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Just Two Addresses and a Keyword</h2>
          <p>All you need to get started are two addresses and a search term. We do the rest.</p>
          <p><a id="l5a"class="btn btn-default btn-primary" href = "#Login" data-toggle="modal" role="button">Learn More</a></p>
          <p><a id="l5b"class="btn btn-default btn-primary" href = "loggedin.php" data-toggle="modal" role="button">Learn More</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/1.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>On All of Your Favorite Devices</h2>
          <p>With a website designed to be used on the go, you can utilize the full power of GetMeetUp wherever, and whenever, you want to.</p>
          <p><a id="l6a"class="btn btn-default btn-primary" href = "#Login" data-toggle="modal" role="button">Get Started</a></p>
          <p><a id="l6b"class="btn btn-default btn-primary" href = "loggedin.php" data-toggle="modal" role="button">Get Started</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/3.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>1000s of Places to Choose From</h2>
          <p>With locations sourced from Google and Yelp, you will always find a place you love!</p>
          <p><a id="l7a"class="btn btn-default btn-primary" href = "#Login" data-toggle="modal" role="button">Learn More</a></p>
          <p><a id="l7b"class="btn btn-default btn-primary" href = "loggedin.php" data-toggle="modal" role="button">Learn More</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
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
								           <button type="submit" value="Submit" class="btn btn-custom pull-right" id="send_btn">Send</button>
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
    
    window.location.href = "loggedin.php";
}
$('#loginno').hide();
$('#l1a').hide();
$('#l2a').hide();
$('#l3a').hide();
$('#l4a').hide();
$('#l5a').hide();
$('#l6a').hide();
$('#l7a').hide();
$('#loginyes').show();
$('#main').fadeIn(1000);



// Log out so we can log in again with a different provider.
//auth.logout();
} else {
$('#loginyes').hide();
$('#l1b').hide();
$('#l2b').hide();
$('#l3b').hide();
$('#l4b').hide();
$('#l5b').hide();
$('#l6b').hide();
$('#l7b').hide();
$('#loginno').show();
$('#main').fadeIn(1000);



}
});


function login(provider) {


auth.login(provider);




}

$('#send_btn').popover({content: 'Thank You'},'click'); 

function logout() {
auth.logout();
window.location.href = "index.php";

} 





    




</script>