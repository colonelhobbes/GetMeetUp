<!DOCTYPE html>
<html>
        <head>
                <title>GetMeetUp</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <link href = "css/styles.css" rel = "stylesheet">
                <link rel="stylesheet" href="/css/font-awesome.min.css">
                <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <style type="text/css">
        .address input[type=text] {
        padding-right:25px;    
        }
        .inputRemove{
            display:inline-block;
            margin-left:-3px;
            cursor:pointer;
        }

        .inputRemove:hover{
            color:#DD3366;
        }
        body
{
    margin:0px;
    padding:0px;
    background-color:#eee;
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

        </head>
         <?php
          session_start();
          $_SESSION['allowed_access'] = true;
          ?>


        <body class="body">
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
               
                <div class = "container">
               
                <div class = "jumbotron">
                    <div class = "container">
           
                        <div class = "row">
               
               
                            

                            

                    
                                <center><h2><a href = "#">Step 1:<br>Add Addresses</a></h2>
                                <form id="form1" method="post" action = "h.php" role="form">
                                <div class="address">
                                <div class="input-group">
                                <input type="text" name="data[address][0]" id="data[address][0]" placeholder = "Address 1" class="form-control"/>
                                <span class="input-group-addon" style = "align:right"><div class="inputRemove">&times;</div></span>
                                </div>
                                </div>
                                
                                <button id="add-address">Add address</button>
                                </center>
                                
                                <br>
                                
                                <br>
                       
                        
                            </div>
                            </center>
               

                            
                            
                                    <center><h2><a href = "#">Step 2:<br>Select Method of Travel</a></h2>
                                    
                                    <select name="dropdown" id="dropdown" class="form-control"> 
                                    <option value="DRIVING">Driving</option>
                                    <option value="TRANSIT">Public Transportation</option>
                                    <option value="BICYCLING">Biking</option>
                                    <option value="WALKING">Walking</option>
                                    </select>
                                </center>
                                
                       
                        
                            </div>
                            </center>

                         

                             
                            
                                <center><h2><a href = "#">Step 3:<br>Enter What Kind of Place</a></h2></center>
                                <input type="text" name="keyword" id="keyword" placeholder = "What Kind of Place" class="form-control" />

                                
                       
                        
                            </div>
                            </center>
                            
                            
                            <div "col-md-3">
                               <center><h2><a href = "#">Step 4:<br>Click Enter When You're Ready</a></h2>
                                <button type="submit" class = "btn btn-success" value="Submit" onclick="javascript:document.getElementById("form1").submit();">Submit</button>
                                </center>
                                </div>
                                
                       
                        
                            </div>
                            </center>

                            </form>
                            </center>
                        </div>
                    </div>
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







// Log out so we can log in again with a different provider.
//auth.logout();
} else {
window.location.href = "index.php";
}
});

function logout() {
auth.logout();
window.location.href = "index.php";

}

function login(provider) {
auth.login(provider);

}

$(window).load(function(){
$("#add-address").click(function(e){
        e.preventDefault();
        var numberOfAddresses = $("#form1").find("input[name^='data[address]']").length;
        var label = '<label for="data[address][' + numberOfAddresses + ']"></label> ';
        var input = '<input type="text" class="form-control" name="data[address][' + numberOfAddresses + ']" id="data[address][' + numberOfAddresses + ']" placeholder= "Address ' + (numberOfAddresses+1) + '"/>';
        var inputx = '<span class="input-group-addon" style = "align:right"><div class="inputRemove">&times;</div></span></div>';
        var html = "<div class='address'><div class='input-group'>" + label + input +inputx+"</div>";
        $("#form1").find("#add-address").before(html);
    });


$(document).on("click",".address .inputRemove",function(){
   $(this).closest(".address").remove(); 
   $("#form1").find("label[for^='data[address]']").each(function(){
        //$(this).html("Address " + ($(this).parents('.address').index() + 1));
        $(this).next("input").attr("placeholder","Address " + ($(this).parents('.address').index() + 1));

    });
});

});//]]>  







</script>