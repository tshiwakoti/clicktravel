<!DOCTYPE html>
<html>
  <head>
    <title>Click 'n Bounce</title>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUrqgqo3AkPxzn9xH5Rn97MC--bZJDGwk">
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        var map;

        var mapOptions = {
          zoom: 3,
          center: { lat: 16.103, lng: -22.803 },
          mapTypeId: google.maps.MapTypeId.SATELLITE,
          disableDefaultUI: true
        };  

      function getAddress(lat, lng) {
        var latlng = new google.maps.LatLng(lat, lng);
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({ 'latLng': latlng }, function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (results[1]) {
              //console.log(results[0]);
              alert(results[1].formatted_address);
            }
          }
        });
      }

      function initialize() {
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var displayElement = document.getElementById('display');
        google.maps.event.addListener(map, "click", function( event ) {
          var lat = event.latLng.A;
          var lng = event.latLng.F;
          $("input[name=lat]").val(lat);
          $("#lng").val(lng);
          $("#coordinate_form").submit();
        });

        // if ((dest)lat > .9(lat) && (dest)lat < 1.1(lat)){
        //   if ((dest)lng > .9(lng) && (dest)lng < 1.1(lng)){

        //   }
        // }
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      $("button").click(function(){
        $("#logAndReg").fadeToggle();
      });
    });
    </script>
    <style type="text/css">
      .welcome{
        color: white;
        text-align: center;
        margin-top: 5px;
        font-weight: normal;

      }
      #header{
        width: 100%;
        height: 50px;
        position: absolute;
        z-index: 3;
        font-family: sans-serif;
        background-color: black;
        opacity: 0.5;
      }
      button{
        color: white;
        background-color: black;
        border: 1px solid white;
        border-radius: 5px;
        height: 40px;
        width: 110px;
        position: fixed;
        left: 91%;
        margin-top: 5px;
      }
      #logAndReg{
        position: fixed;
        z-index: 3;
        left: 24%;
        top: 22%;
        width: 700px;
        height: 500px;
        background-color: black;
        display: none;
        opacity: 0.5;
        border: 1px solid silver;
        border-radius: 10px;
        color: white;
        text-align: center;
        padding-top: 40px;
        font-family: sans-serif;
      }
        #logAndReg form{
          margin-top: 40px;
          display: inline-block;
          vertical-align: top;
        }
        #logAndReg input{
          text-align: right;
          background-color: black;
          margin: 4px;
        }
        #logAndReg #regLabels, #regInfo, #logLabels, #logInfo{
          display: inline-block;
          vertical-align: top;
        }

        #logAndReg #regLabels, #logLabels{
          text-align: right;
          line-height: 27px;
        }
        #logAndReg .sub{
          color: white;
          background-color: black;
          border: 1px solid white;
          border-radius: 5px;
          height: 30px;
          width: 80px;
          text-align: center;
        }

    </style>
  </head>
  <body>
    <div id="header">
      <button>Log In | Register</button>
      <h1 class="welcome">Where would you rather be?</h1>
      <p class="welcome">Click to explore</p>
    </div>
    <div id="logAndReg">
      <h2>Welcome to Click 'n Bounce</h2>
      <form method="post" action="register">
        <div id="regLabels">
          First Name:<br>
          Last Name:<br>
          Email:<br>
          Password:<br>
          Confirm Password:<br>
        </div>
        <div id="regInfo">
          <input type="text" name="first_name"><br>
          <input type="text" name="last_name"><br>
          <input type="text" name="email"><br>
          <input type="password" name="password"><br>
          <input type="password" name="passwordconf"><br>
      </div>
      <br>
      <br>
        <input class="sub" type="submit" name="submit" value="Register">
      </form>
      <form method="post" action="login">
        <div id="logLabels">
          Email:<br>
          Password:<br>
        </div>
        <div id="logInfo">
          <input type="text" name="email"><br>
          <input type="password" name="password"><br>
        </div>
        <br>
        <br>
        <input class="sub" type="submit" name="submit" value="Login">
      </form>
    </div>
    <div id="map-canvas"></div>
    <form id="coordinate_form" method="post" action="processCoords" display: hidden>
      <input type="text" id="lat" name="lat">
      <input type="text" id="lng" name="lng">
    </form>
  </body>
</html>