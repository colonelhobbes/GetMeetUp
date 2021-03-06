
<!DOCTYPE html>
<html>
<head>
  <script src="pace.js"></script>
  <link href="loadingbar.css" rel="stylesheet" />
</head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title></title>
<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 0px; padding: 0px }
</style>

<?php
session_start();
if (!$_SESSION['allowed_access']) {
    header('Location: index.php');
    exit();
}
?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type ="text/javascript" src="http://www.geocodezip.com/scripts/v3_epoly.js"></script>
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
    
      
    
</script>

<?php

error_reporting(0);
class GetMostCommonColors
{

  var $image;

  function Get_Color()
  {
    if (isset($this->image))
    {
      $PREVIEW_WIDTH    = 150; 
      $PREVIEW_HEIGHT   = 150;
      $size = GetImageSize($this->image);
      $scale=1;
      if ($size[0]>0)
      $scale = min($PREVIEW_WIDTH/$size[0], $PREVIEW_HEIGHT/$size[1]);
      if ($scale < 1)
      {
        $width = floor($scale*$size[0]);
        $height = floor($scale*$size[1]);
      }
      else
      {
        $width = $size[0];
        $height = $size[1];
      }
      $image_resized = imagecreatetruecolor($width, $height);
      if ($size[2]==1)
      $image_orig=imagecreatefromgif($this->image);
      if ($size[2]==2)
      $image_orig=imagecreatefromjpeg($this->image);
      if ($size[2]==3)
      $image_orig=imagecreatefrompng($this->image);
      imagecopyresampled($image_resized, $image_orig, 0, 0, 0, 0, $width, $height, $size[0], $size[1]); 
      $im = $image_resized;
      $imgWidth = imagesx($im);
      $imgHeight = imagesy($im);
      for ($y=0; $y < $imgHeight; $y++)
      {
        for ($x=0; $x < $imgWidth; $x++)
        {
          $index = imagecolorat($im,$x,$y);
          $Colors = imagecolorsforindex($im,$index);
          $Colors['red']=intval((($Colors['red'])+15)/32)*32;    
          $Colors['green']=intval((($Colors['green'])+15)/32)*32;
          $Colors['blue']=intval((($Colors['blue'])+15)/32)*32;
          if ($Colors['red']>=256)
          $Colors['red']=240;
          if ($Colors['green']>=256)
          $Colors['green']=240;
          if ($Colors['blue']>=256)
          $Colors['blue']=240;
          $hexarray[]=substr("0".dechex($Colors['red']),-2).substr("0".dechex($Colors['green']),-2).substr("0".dechex($Colors['blue']),-2);
        }
      }
      $hexarray=array_count_values($hexarray);
      natsort($hexarray);
      $hexarray=array_reverse($hexarray,true);
      return $hexarray;

    }
    else die("You must enter a filename! (\$image parameter)");
  }
}
?>


<?php

  $counter = 0;
  $endpoint = "https://maps.googleapis.com/maps/api/geocode/json?address=";

  foreach ( $_POST['data']['address'] as $address ) {
      if ( !empty( $address ) ) {
          $addresses[$counter] = $address;
          $counter++;
      }
  }
  
  $numberofaddresses = sizeof($addresses);
?>

<?php
for($count = 0; $count < $counter; $count++){
  $address = $addresses[$count];
  $query = urlencode($address);
  $ch = $endpoint.$query. "&sensor=false&key=AIzaSyA0y6CFKC9aSDbHGA8mJ5i6Hoe8_E9uLM0";
  $result = file_get_contents($ch);

  $result = json_decode($result, true);

  $lat = $result['results'][0]['geometry']['location']['lat'];
  $long = $result['results'][0]['geometry']['location']['lng'];
   
  $latitudes[$count] = $lat;
  $longitudes[$count] = $long;
  session_start();
  $_SESSION['locationslat'] = $latitudes;
  $_SESSION['locationslong'] = $longitudes;
  $_SESSION['addresses'] = $addresses;
  



  }

  $MethodofTravel = $_POST["dropdown"];
  $MethodofTravel = strtoupper($MethodofTravel);

  $_SESSION['MethodofTravel'] = $MethodofTravel;
  $keyword = $_POST['keyword'];
  $_SESSION['keyword'] = $keyword;

  for($count = 0; $count < $counter; $count++){
    $latitudesconverttoradians[$count] = ($latitudes[$count])*(pi())/180;
    $longitudesconvertedtoradians[$count] = ($longitudes[$count])*(pi())/180;
  }

  $x = 0
; $y = 0;
  $z = 0;

  for($count = 0; $count < $counter; $count++){
    $x += (cos($latitudesconverttoradians[$count]))*(cos($longitudesconvertedtoradians[$count]));
    $y += (cos($latitudesconverttoradians[$count]))*(sin($longitudesconvertedtoradians[$count]));
    $z += sin($latitudesconverttoradians[$count]);
  }

  $x = $x/(count($latitudesconverttoradians));
  $y = $y/(count($longitudesconvertedtoradians));
  $z = $z/(count($longitudesconvertedtoradians));

  $GeoLong = (atan2($y, $x))*180/(pi());
  $Hyp = sqrt($x * $x + $y * $y);
  $GeoLat = (atan2($z, $Hyp))*180/(pi());

  
  ?>

<?php
$ex=new GetMostCommonColors();
$ex->image="http://maps.googleapis.com/maps/api/staticmap?center=".$GeoLat.",".$GeoLong."&zoom=50&size=600x300&maptype=roadmap&markers=color:blue&sensor=false";
$colors=$ex->Get_Color();
$how_many=12;
$colors_key=array_keys($colors);


//Code for water in the image is c0c0f0; the code right now echos this string out if the image is water. Run an if statement to check if it is water with the condition of only two 
//points and then use the midpoint of the route. Should there be more than 2 points return an error and display map showing what happened. If this is not the code returned, run
//code based on midpoint or route midpoint, whichever has the fastest travel time.
?>



<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type ="text/javascript" src="http://www.geocodezip.com/scripts/v3_epoly.js"></script>
<script type="text/javascript">
  var MethodofTravel = <?php echo json_encode($MethodofTravel); ?>;
  var directionDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;
  var polyline = null;
  var infowindow = new google.maps.InfoWindow();
  var addresses = <?php echo json_encode($addresses); ?>;
  var numberofaddresses = <?php echo json_encode($numberofaddresses); ?>;
  var ifwater = <?php echo json_encode($colors_key[0]); ?>;
  var geolatreal = <?php echo json_encode($GeoLat); ?>;
  var geolongreal = <?php echo json_encode($GeoLong); ?>;
  var keyword = <?php echo json_encode($keyword); ?>;

function createMarker(latlng, label, html) {
    var contentString = '<b>'+label+'</b><br>'+html;
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: label,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });
        marker.myname = label;

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString+"<br>"+marker.getPosition().toUrlValue(6)); 
        infowindow.open(map,marker);
        });
    return marker;
}

  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers:true});
    polyline = new google.maps.Polyline({
    path: [],
    strokeColor: '#FF0000',
    strokeWeight: 3
    });
    directionsDisplay.setMap(map);
    if(numberofaddresses == 2){
    //alert("yo")
    calcRoute();
    }
    else if(numberofaddresses > 2 && ifwater == "c0c0f0"){
     alert("Calculations and results could not be preformed because the locations entered yeilded a midpoint over a body of water. Redirecting to input page.")
     var submit = "("+geolatreal+","+geolongreal+")";
    //alert("hi")
    window.location.href = "processing2.php?loc=" + submit;
    }

    else if(numberofaddresses > 2){
    var submit = "("+geolatreal+","+geolongreal+")";
    //alert("hi")
    window.location.href = "processing2.php?loc=" + submit;
    }

    if(numberofaddresses <2){
      alert("Only one address has been submitted. Redirecting to input page.")
      window.location.href = "loggedin.php";
    }
    if(keyword == ""){
      alert("No search keyword was entered. Redirecting to input page.")
      window.location.href = "loggedin.php";
    }
    
  }

  function calcRoute() {
    var start = addresses[0];
    var end = addresses[1];
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

    var request = {
        origin: start,
        destination: end,
        travelMode: travelMode
    };
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        polyline.setPath([]);
        var bounds = new google.maps.LatLngBounds();
        startLocation = new Object();
        endLocation = new Object();
        directionsDisplay.setDirections(response);
        var route = response.routes[0];
        var summaryPanel = document.getElementById("directions_panel");
        summaryPanel.innerHTML = "";

        // For each route, display summary information.
    var path = response.routes[0].overview_path;
    var legs = response.routes[0].legs;
        for (i=0;i<legs.length;i++) {
          if (i == 0) { 
            startLocation.latlng = legs[i].start_location;
            startLocation.address = legs[i].start_address;
            marker = createMarker(legs[i].start_location,"midpoint","","green");
          }
          endLocation.latlng = legs[i].end_location;
          endLocation.address = legs[i].end_address;
          var steps = legs[i].steps;
          for (j=0;j<steps.length;j++) {
            var nextSegment = steps[j].path;
            for (k=0;k<nextSegment.length;k++) {
              polyline.getPath().push(nextSegment[k]);
              bounds.extend(nextSegment[k]);
            }
          }
        }

        polyline.setMap(map);

        computeTotalDistance(response);
      } else {
        //alert("directions response "+status);
        if(MethodofTravel == "DRIVING"){
          alert("Calculations and results could not be preformed because the locations entered yeilded a midpoint over a body of water. This may be due to no route using this method existing between the points. To solve this problem, verify that there is a route using the desired method of travel or change the method of travel. Redirecting to input page")
        }
        if(MethodofTravel == "TRANSIT"){
          alert("Calculations and results could not be preformed because the locations entered yeilded a midpoint over a body of water. This may be due to no route using this method existing between the points. To solve this problem, verify that there is a route using the desired method of travel or change the method of travel. Redirecting to input page")
        }
        if(MethodofTravel == "WALKING"){
          alert("Calculations and results could not be preformed because the locations entered yeilded a midpoint over a body of water. This may be due to no route using this method existing between the points. To solve this problem, verify that there is a route using the desired method of travel or change the method of travel. Redirecting to input page")
        }
        if(MethodofTravel == "BICYCLING"){
          alert("Calculations and results could not be preformed because the locations entered yeilded a midpoint over a body of water. This may be due to no route using this method existing between the points. To solve this problem, verify that there is a route using the desired method of travel or change the method of travel. Redirecting to input page")
        }
        window.location.href = "index.php";
      }
    });
  }

var totalDist = 0;
var totalTime = 0;



      function computeTotalDistance(result) {
      totalDist = 0;
      totalTime = 0;
      var myroute = result.routes[0];
      for (i = 0; i < myroute.legs.length; i++) {
        totalDist += myroute.legs[i].distance.value;
        totalTime += myroute.legs[i].duration.value;      
      }
      var percentage = 50;
      var distance = (percentage/100) * totalDist;
      var routeMid = polyline.GetPointAtDistance(distance);
      window.location.href = "processing2.php?loc=" + routeMid;

      totalDist = totalDist / 1000.
      }
</script>

<body onload="initialize()">


<div id="control_panel" style="float:right;width:30%;text-align:left;padding-top:20px">
<div id="directions_panel" style="margin:20px;background-color:#FFEE77;"></div>
<div id="total"></div>
</div>

</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50600257-1', 'getmeetup.com');
  ga('send', 'pageview');

</script>
</html>
 