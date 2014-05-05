<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>


	<?php
	$center =  $_GET["loc"];
	$center = str_replace('(','',$center);
	$center = str_replace(')','',$center);
	$geoarray = explode(",", $center);
	session_start();
	$latitudes = $_SESSION['locationslat'];
	$longitudes = $_SESSION['locationslong'];

	?>


<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpbot8_r95xAF1UIdz39iu5RS2P7i0LIk&sensor=false">
    </script>
    <script type="text/javascript">
    var listcount = <?php echo json_encode(count($latitudes)); ?>;
    var center = <?php echo json_encode($center); ?>;
    center = center.split(",");
    var GeoCenterLat = center[0];
	var GeoCenterLong = center[1];
	var GeographicCenter = new google.maps.LatLng(GeoCenterLat, GeoCenterLong);
	var latitudesoflocation =  <?php echo json_encode($latitudes); ?>;
	var longitudesoflocation = <?php echo json_encode($longitudes); ?>;
	var point = "Point ";
	var marker, i;
      function initialize() {
        var mapOptions = {
          center: GeographicCenter,
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);

        marker = new google.maps.Marker({
	    position: GeographicCenter,
	    map: map,
	    title: "Geographic Center"
		});


        for (i = 0; i< listcount; i++){
        marker = new google.maps.Marker({
	    position: new google.maps.LatLng(latitudesoflocation[i], longitudesoflocation[i]),
	    map: map,
	    title: point + String.fromCharCode(65+i)
		});
}

		

      }
      google.maps.event.addDomListener(window, 'load', initialize);

</script>
  </head>
  <body>
    <div id="map-canvas"/>
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

