<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUrqgqo3AkPxzn9xH5Rn97MC--bZJDGwk">
    </script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        var map;
        var mapOptions = {
          zoom: 3,
          center: { lat: 16.103, lng: -22.803 },
          mapTypeId: google.maps.MapTypeId.SATELLITE
    };  

    function getAddress(lat, lng) {
            var latlng = new google.maps.LatLng(lat, lng);
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                      console.log(results[0]);
                        alert(results[1].formatted_address);
                    }
                }
            });
        }

    function initialize() {
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      var displayElement = document.getElementById('display');
    
      google.maps.event.addListener(map, "click", function( event ) {
          //console.log(event);
          var lat = event.latLng.A;
          var lng = event.latLng.F;
          
          $("#display").html("coordinates: " + lat +', '+ lng);
          $("#lat").val(lat);
          $("#lng").val(lng);
          getAddress(lat, lng);


        });

        // if ((dest)lat > .9(lat) && (dest)lat < 1.1(lat)){
        //   if ((dest)lng > .9(lng) && (dest)lng < 1.1(lng)){

        //   }
        // }
        

        }
        google.maps.event.addDomListener(window, 'load', initialize);
 
      });
    </script>
  </head>
  <body>
  <div id ="display"></div>
<div id="map-canvas"></div>
<form id="coordinate_form">
  <input type="text" id="lat" name="lat">
  <input type="text" id="lng" name="lng">
</form>
  </body>
</html>