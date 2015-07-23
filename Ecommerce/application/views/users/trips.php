<!DOCTYPE html>
<html>
  <head>
    <title>Trips</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">


    <style type="text/css">
    body {
      background: #000 url(../images/body_bg_new.jpg) repeat fixed center top;
      background-image: url(http://www.css3maker.com/images/body_bg_new.jpg);
      background-position-x: 50%;
      background-position-y: 0%;
      background-size: initial;
      background-repeat-x: repeat;
      background-repeat-y: repeat;
      background-attachment: fixed;
      background-origin: initial;
      background-clip: initial;
      background-color: rgb(0, 0, 0);
      color: white;
    }
    h4{
      padding: 10px 20px;
    }
    #content {
      width: 1000px;
      text-align: center;
      margin: 0px auto;
    }
    #wrapper{
      margin: 0px auto;
    }

    #rating, h5 {
      display: inline-block;
    }


    #igimage{
      margin:4px;
      display: inline-block;
    }

    #span{
      color:blue;
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

    .descr
    {
      display: inline-block;
      width: 300px;
      font-size: 18px;
      text-align: left;
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
      /*color: #2BBBAD;*/
      margin-top: 35px;
    }

    .city{
      margin-top: 30px;
      color: white;
      margin-bottom: 30px;
      border-bottom: 50px;
    }
    p
    {
      margin: 5px 20px;
    }
    img {
      height: 200px;
      width: 200px;
      padding: 0px;
      margin: 0px;
    }
    .pics {
      width: 680px;
      float: right;
      display: inline-block;
    }
    #title {
      margin: 0px auto;
      text-align: center;
    }

    </style>

  </head>
<?php
  if (empty($cities)) {
    redirect('/');
   } else {
?>
  <body>
      <div id="wrapper">
          <?php
            if ($results['city_name'] == NULL){
              echo "<h1 id='title'>Destinations close to your click</h1>";
            } else {
              echo "<h1 id='title'>Destinations near " . $results['city_name']. "</h1>";
            }
          ?>
          <div id="content">
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
          <a id = "addcart" class="waves-effect waves-light btn">Purchase</a> <br>
        </div>
      </div>

          </div>
          <div class="descr">
            
            <?= $city['descr'] ?>
            
          </div>


  <div class="pics">
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
  </div>
<?php
         }
?>
  </div>
  </div>
  </div>
  </body>
<?php } ?>
</html>
