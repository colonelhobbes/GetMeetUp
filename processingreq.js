
    


function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
  var places = [];
  for (var i = 0; i < gmarkers.length; i++) {
    gmarkers[i].setMap(null);
  }
  gmarkers = [];

 
  for (var i = 0; i < results.length; i++) {
    var place = results[i];
    places.push(place);
    var temp = createMarker(results[i]);
    

  }
    
  map.fitBounds(circle.getBounds());
  // if (markers.length == 1) map.setZoom(17);
  var destArray = [];
  destMarkers = [];

  for (var i=0; i<gmarkers.length;i++){
    if (google.maps.geometry.spherical.computeDistanceBetween(startLoc, gmarkers[i].getPosition()) < 10 * 1609.34) { // 1609.34 meters/mile
       destArray.push(gmarkers[i].getPosition());
       destMarkers.push(gmarkers[i]);
    }
  }
  
  
  
 
  var DistanceMatrixService = new google.maps.DistanceMatrixService();
  DistanceMatrixService.getDistanceMatrix(
    {
      origins: [startLoc],
      destinations: destArray,
      travelMode: travelMode,
      unitSystem: google.maps.UnitSystem.IMPERIAL,
      avoidHighways: false,
      avoidTolls: false,
    }, function (response, status) {
       var distancefield = distancefield;
         if (status == google.maps.DistanceMatrixStatus.OK) {
           var origins = response.originAddresses;
           var destinations = response.destinationAddresses;
           var results = response.rows[0].elements;
           var htmlString = "<table border='1'>";
	   
           for (var r = 0; r < results.length; r++) {
               var element = results[r];
               var distancetext = element.distance.text;
               var durationtext = element.duration.text;
               var to = destinations[r];
		if (element.duration.value) {
                 
		 
               }
            }//end for r
           htmlString += "</table>"; 
           

           
         }//end if status=ok
       })//end callback

  }
}



    
function initialize() {

	geocoder = new google.maps.Geocoder();
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer({
        suppressMarkers: false
    });
    
  
      
      var query = location.search.substring(1);
 
      // split the rest at each "&" character to give a list of  "argname=value"  pairs
      var pairs = query.split("&");
      for (var i=0; i<pairs.length; i++) {
        // break each pair at the first "=" to obtain the argname and value
	var pos = pairs[i].indexOf("=");
	var argname = pairs[i].substring(0,pos).toLowerCase();
        switch(argname) {
         case "q":
	  var value = pairs[i].substring(pos+1);
          break;
         default:
	  var value = pairs[i].substring(pos+1).toLowerCase();
          break;
        }
 
        // process each possible argname  -  use unescape() if theres any chance of spaces
        if (argname == "q") { 
           noAutoComplete = true;
           document.getElementById('target').value = unescape(value);
           
			  var request = {
			    bounds: circle.getBounds(), // new google.maps.LatLngBounds(new google.maps.LatLng(1.1548,103.571), new google.maps.LatLng(1.567,104.12)),

			    query: unescape(value)
			  };
        }
        
        
      }
  
  map = new google.maps.Map(document.getElementById('map_canvas'), {
    center: new google.maps.LatLng(GeoCenterLat, GeoCenterLong), // Brooklyn, NY
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    streetViewControl: false
  });
  directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directionsPanel"));

  marker1 = new google.maps.Marker({
    position: GeographicCenter,
    map: map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    title:"Center"
});

if(placelat){
  var control = document.getElementById('selectNumber');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
}

  
  service = new google.maps.places.PlacesService(map);
  initialService = new google.maps.places.PlacesService(map);


  google.maps.event.addListener(marker1, "dragend", function(evt) {
    startLoc = evt.latLng;
    circle.setCenter(startLoc);
    var request = {
      bounds: circle.getBounds(),
      query: keyword
    };
    
    initialService.textSearch(request, callback);
  });



  var request = {
  	location: new google.maps.LatLng(GeoCenterLat, GeoCenterLong),
  	radius: 500,
    query: keyword
  };
  

  if (noAutoComplete) initialService.textSearch(request, callback);
  var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(GeoCenterLat-1, GeoCenterLong+1),
    new google.maps.LatLng(GeoCenterLat, GeoCenterLong)
  );
  if (request && request.bounds) map.fitBounds(request.bounds);
  else map.fitBounds(defaultBounds);

  if (!noAutoComplete) {
  var input = keyword
  var markers = [];
  

  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
 
  });
}



      }


function createMarker(place){
    var placeLoc=place.geometry.location;
    if (place.icon) {
      var image = new google.maps.MarkerImage(
                place.icon, new google.maps.Size(71, 71),
                new google.maps.Point(0, 0), new google.maps.Point(17, 34),
                new google.maps.Size(25, 25));
     } else var image = null;

    var marker=new google.maps.Marker({
        map:map,
        icon: image,
        position:place.geometry.location
    });
    var request =  {
          reference: place.reference
    };
    google.maps.event.addListener(marker,'click',function(){
        service.getDetails(request, function(place, status) {
        	var locationofplace = place.geometry.location;
        	var markerlocation = marker.getPosition();
        	var markerlat = markerlocation.lat();
        	var markerlng = markerlocation.lng();
        	
        	//locationofplace = locationofplace.slice(1,locationofplace.length-1);
          if (status == google.maps.places.PlacesServiceStatus.OK) {
          	
          	

            var contentStr = '<h5>'+place.name+'</h5><p>'+place.formatted_address;
            if (!!place.formatted_phone_number) contentStr += '<br>'+place.formatted_phone_number;
            if (!!place.website) contentStr += '<br><a target="_blank" href="'+place.website+'">'+place.website+'</a>';
            //contentStr += '<form><select id="selectNumber"><option>Change Address</option></select></form>';
            contentStr += '<br><a href="'+document.URL+'&placelat='+markerlat+'&placelng='+markerlng+'">Get Directions</a>';
            //contentStr += '<br><a href="javascript:calcRoute(0,'+markerlat+','+markerlng+');">Get Directions</a>';
            //contentStr += "Your address: <input id='clientAddress' type='text'><input type='button' onClick=getDir(0) value='Go!'>";
            if(place.rating){
            contentStr += '<br>Place Rating: '+place.rating+'/5';
        }
        	if(place.price_level){
        		switch(place.price_level){
        			case 1: contentStr+='<br>Price Level: <b>$</b>$$$';
        			break;
        			case 2: contentStr+='<br>Price Level: <b>$$</b>$$';
        			break;
        			case 3: contentStr+='<br>Price Level: <b>$$$</b>$';
        			break;
        			case 4: contentStr+='<br>Price Level: <b>$$$$</b>';
        			break;

        		}


        	}
            contentStr += '<br>'+place.types+'</p>';

            infowindow.setContent(contentStr);
            infowindow.open(map,marker);
            
          } else { 
            var contentStr = "<h5>No Result, status="+status+"</h5>";
            infowindow.setContent(contentStr);
            infowindow.open(map,marker);
          }
        });
	

    });
    gmarkers.push(marker);
/*
    var side_bar_html = "<a href='javascript:google.maps.event.trigger(gmarkers["+parseInt(gmarkers.length-1)+"],\"click\");'>"+place.name+"</a><br>";
    document.getElementById('side_bar').innerHTML += side_bar_html;
*/
}

  


function calcRoute(lat, loc, travelMode) {
  
  var start = document.getElementById('selectNumber').value;
  if(start == "Change Address"){
  	start = new google.maps.LatLng(latitudesoflocation[0], longitudesoflocation[0]);
  }
 
  var end = new google.maps.LatLng(lat, loc);
  var request = {
    origin:start,
    destination:end,
    travelMode: travelMode
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}






     



