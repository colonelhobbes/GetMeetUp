<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
<style type="text/css">
html, body {
          margin: 0;
          padding: 0;
          height: 100%
      }
      #map_canvas {
          margin: 0;
          padding: 0;
          width: 50%;
          height: 100%
      }
      #directionsPanel {
          position: absolute;
          top: 0px;
          right: 0px;
          width: 50%;
          height: 100%
      }
      #selectNumber {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

</style>
    <title>GetMeetUp v1.0</title>







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

</head>
<body onload="javascript:calcRoute(placelat,placelng, travelMode);">
<a href="javascript:logout();">Logout</a>

<div>
      
      <select id="selectNumber" onchange="javascript:calcRoute(placelat,placelng,travelMode);">
        <option>Change Address</option>
      </select>
      
    </div>

<div id="map_canvas"></div>
<div id="directionsPanel"></div>

</body>
</html>