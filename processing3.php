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
        </style>

        </head>
         <?php
          session_start();
          $_SESSION['allowed_access'] = true;
          ?>


        <body onload="javascript:calcRoute(placelat,placelng, travelMode);">
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
                                       
                                                <li class = "active"><a href = "loggedin.php">Home</a></li>
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
<div>
      
      <select id="selectNumber" onchange="javascript:calcRoute(placelat,placelng,travelMode);">
        <option>Change Address</option>
      </select>
      
</div>

<div id="map_canvas"></div>
<div id="directionsPanel"></div>

                
               
               
            
               <br>
               <br>
               <br>
                <div class = "navbar navbar-default navbar-fixed-bottom">
               
                        <div class = "container">
                                <p class = "navbar-text pull-left">Built By Arun Kalyanaraman</p>
                                <a href = "http://youtube.com/codersguide" class = "navbar-btn btn-danger btn pull-right">Subscribe on YouTube</a>
                        </div>
               
                </div>
               

               
                
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
<?php
require('processingreq.php');
?>

<script src="processingreq.js"></script>
<script type="text/javascript" src="https://cdn.firebase.com/v0/firebase.js"></script>
<script type='text/javascript' src='https://cdn.firebase.com/js/simple-login/1.3.0/firebase-simple-login.js'></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type ="text/javascript" src="http://www.geocodezip.com/scripts/v3_epoly.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false&amp;libraries=places,geometry"></script>
<script type='text/javascript' src='http://jsfiddle.net/js/lib/mootools-core-1.4.5-nocompat.js'></script>




<script type="text/javascript">
    var firebaseRef = new Firebase("https://intense-fire-9670.firebaseio.com/");
    var auth = new FirebaseSimpleLogin(firebaseRef, function(error, user) {
      if (error) {
        // an error occurred while attempting login
        alert(error);
      } else if (user) {
        // user authenticated with Firebase

    

        // Log out so we can log in again with a different provider.
        //auth.logout();
      } else {
        window.location.href = "login.php";
      }
    });


var listcount = <?php echo json_encode(count($latitudes)); ?>;
var center = <?php echo json_encode($center); ?>;
center = center.split(",");
var GeoCenterLat = center[0];
var GeoCenterLong = center[1];
var GeographicCenter = new google.maps.LatLng(GeoCenterLat, GeoCenterLong);
var latitudesoflocation =  <?php echo json_encode($latitudes); ?>;
var longitudesoflocation = <?php echo json_encode($longitudes); ?>;
var addresses = <?php echo json_encode($addresses); ?>;

var placelat = <?php echo json_encode($placelat); ?>;
var placelng = <?php echo json_encode($placelng); ?>;
var MethodofTravel = <?php echo json_encode($MethodofTravel); ?>;
if(MethodofTravel == "DRIVING"){
      var travelMode = google.maps.DirectionsTravelMode.DRIVING;
    }
    if(MethodofTravel == "TRANSIT"){
      var travelMode = google.maps.DirectionsTravelMode.TRANSIT;
    }
    if(MethodofTravel == "WALKING"){
      var travelMode = google.maps.DirectionsTravelMode.WALKING;
    }
    if(MethodofTravel == "BICYCLING"){
      var travelMode = google.maps.DirectionsTravelMode.BICYCLING;
    }

var keyword = <?php echo json_encode($keyword); ?>;
var points = "Point ";
var marker, i;
var map = null;
var gmarkers = [];
var destMarkers = [];
var service = null;
var noAutoComplete = true;
var initialService = null;
var infowindow = new google.maps.InfoWindow({size: new google.maps.Size(150,50)});
    var startLoc = new google.maps.LatLng(GeoCenterLat, GeoCenterLong); // Manhattan, NY
    var circle = new google.maps.Circle({
        center:startLoc,
        radius:1*1609.34, // 10 miles
        
    clickable: false,
        map: map
     });

var geocoder;
var directionsService;
var directionsDisplay;
 
 google.maps.event.addDomListener(window, 'load', initialize);
 
window.addEvent('load', function() {
var select = document.getElementById("selectNumber");
var options = addresses;
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = new google.maps.LatLng(latitudesoflocation[i], longitudesoflocation[i]);;
    select.appendChild(el);
}
});//]]> 

</script>