<!DOCTYPE html>
<html>
  <head>
    <title>Trips</title>
    <style type="text/css">
      #wrapper { height: 100%; width: 970px; background-image: 'background.png'; margin: 0px auto; }
      h1, p { display: inline-block; }
      h3 { display: inline-block; }
      form { display: inline-block; }
      #cart { float: right; }
      .description { border: 1px solid silver; }
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
        <h1>Destinations near <?= $results['city_name'] ?></h1>

        <!-- Cart link, ECHO number of items in cart -->
        <a id="cart" href="#">Cart (0)</a>

      </div>
      <div id="content">
<?php
      foreach ($cities as $city){ 
?>
          <div class="display_city">
            <h3><?= $city['name'] ?></h3>Click 'n Bounce User Rating:
            <form>
              <select>
                <option value="four_day">4 Days $599</option>
                <option value="ten_day">10 Days $1,199</option>
              </select>
              <input type="submit" value="Add to Cart">
            </form>
            <p class="description">
            <?= $city['description'] ?>
            </p>
          </div>
<?php
         }
?>


      </div>
    </div>
  </body>
</html>
