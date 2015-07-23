<!DOCTYPE html>
<html>
  <head>
    <title>Trips</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">


    <style type="text/css">
    .nav-wrapper{
      background-color: #2BBBAD;
      font-size: 12px;
    }

    h4{
      padding: 10px 20px;
    }
    #wrapper{
      margin: 0px 100px;
    }

    #rating, h5 {
      display: inline-block;
    }


    #igimage{
      margin:8px;
      display: inline-block;
    }

    #span{
      color:blue;
      background-color: yellow;
    }

    #addcart{
      margin-left: 0px;
      margin-top: 35px;
    }

    #dropdown, .a.dropdown-button.btn{
      width: 200px;
    }

    #dropdown
    {
      margin-top: 35px;
    }

    #description
    {
      display: block;
    }

    .large.material.-icons{
      display: inline;
    }


    .div.col.s3
    {
      width:200px;
      padding-left: 10px;
    }

    .i.medium.material.icons
    {
      color: #2BBBAD;
      margin-top: 35px;
    }

    .city{
      background-color: lightgrey;
      margin-bottom: 30px;
      border-bottom: 50px;
    }
    p
    {
      margin: 5px 20px;
    }


    </style>

  </head>
<?php
  if (empty($cities)) {
     // $error = array("<script type='text/javascript'>alert('Sorry, we do not service any destinations in that area');</script>" => "<script type='text/javascript'>alert('Sorry, we do not service any destinations in that area');</script>");
     // $this->load->view("users/index", $error);
    redirect('/');
   } else {
?>
  <body>

    <div id="wrapper">

      <div id = "top">
        <nav>
          <div class="nav-wrapper">

    <div id="container">
      <div id="header">
          <a id="cart" href="#">Cart (0)</a>
        <!-- Pull from AJAX response where they clicked -->
<?php
          if ($results['city_name'] == NULL){
            echo "<h2 id='title'>Destinations close to your click";
          } else {
            echo "<h2 id='title'>Destinations near " . $results['city_name'] . "</h2>";
          }
?>
        <!-- Cart link, ECHO number of items in cart -->




                <?php
                          if ($results['city_name'] == NULL){
                            echo "<h3 id='title'>Destinations close to your click";
                          } else {
                            echo "<h4 id='title'>Destinations near " . $results['city_name']. "</h4>";
                          }
                ?>
          </div>
        </nav>
      </div>


<?php

function callInstagram($url)
  {
  $ch = curl_init();
  curl_setopt_array($ch, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => 2
  ));

  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
  }



     foreach ($cities as $city){
?>

  <div class = "city">
            <div class = "row">
            <div class="col s6">
              <h2><?= $city['name']. "<span> **** </span>" ?></h2>

          <div class="display_city">
            <h2><?= $city['name'] ?></h2>Click 'n Bounce User Rating:
            <form id="select">
              <select>
                <option value="duration">Trip Duration</option>
                <option value="four_day">4 Days $599</option>
                <option value="ten_day">10 Days $1,199</option>
              </select>
              <select>
                <option value="Quantity">Quantity</option>
                <option value="onepack">1</option>
                <option value="twopack">2</option>
                <option value="threepack">3</option>
                <option value="fourpack">4</option>
                <option value="fivepack">5</option>
              </select>
              <input type="submit" value="Add to Cart">
            </form>
            <p class="description">
            <?= $city['descr'] ?>
            </p>
            <div class="pics">
              Pictures

            </div>
              <div class ="row">
                <div class="col s3">
                  <div id = "dropdown">
                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Select Package</a>
                        <ul id='dropdown1' class='dropdown-content'>
                          <li><a href="#!">4 Days $599</a></li>
                          <li><a href="#!">10 Days $1199</a></li>
                        </ul>
                  </div>
                </div>

                <div class="col s2">
                  <a id = "addcart" class="waves-effect waves-light btn">Add to cart</a> <br>
                </div>

                <div class = "col s1">
                  <form action = "" method = "post" class = "medium material-icons">
                    <i class="medium material-icons">shopping_cart</i>
                  </form>

                </div>
              </div>

          </div>
            <p id="description">
            <?= $city['description'] ?>
            </p>



<?php

  $tag = preg_replace('/\s+/', '', str_replace(",", "", (str_replace(".", "", $city['name']))));
  $client_id = "647fe4705228477691c07541f36e66d7";
  $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;

  $inst_stream = callInstagram($url);
  $results = json_decode($inst_stream, true);

  //Now parse through the $results array to display your results...
  $amount = 0;
  foreach($results['data'] as $item){
    if ($amount > 5)
    {
      break;

    }
    $amount +=1;
      $image_link = $item['images']['low_resolution']['url'];
      echo "<div id = 'igimage'>";
      echo '<img src="'.$image_link.'" />';
      echo "</div>";

  }

?>


<?php
         }
?>
  </div>
  </div>
  </body>
<?php } ?>
</html>
