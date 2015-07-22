<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
      h1, p { display: inline-block; }
    </style>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUrqgqo3AkPxzn9xH5Rn97MC--bZJDGwk">
    </script>
    
    <script type="text/javascript">
      $(document).ready(function(){

      });
    </script>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">     
        <!-- Pull from AJAX response where they clicked -->
        <h1>Destinations near <?= $clicked ?></h1>
        
        <!-- Cart link, ECHO number of items in cart -->
        <a href="#">Cart ( <?= $cart ?> )</a>
      </div>
      <div id="content">
        


      </div>
    </div


  </body>