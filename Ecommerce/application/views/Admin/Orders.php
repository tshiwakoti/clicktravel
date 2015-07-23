<html>
  <head>
    <meta charset="utf-8">
    <title>Orders </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

    <style>

    #wrapper{

    }

    #content{
      margin: 0px 100px;
      background-color: white;
    }

    #search{
      padding-right: 297px;

    }

    #search, #dropdown{
      display: inline-block;
      vertical-align: top;
    }

    #head{
      background-color: lightgray;
      border: 2px solid gray;
      font-size: 18px;
      color: black;
    }

    #pagination{
      margin: 0px auto;
      width: 50%;

    }


    </style>
  </head>

  <body>
<div id = "wrapper">

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <ul>
          <li class = "active"><a href="">Dashboard</a></li>
          <li class="active"> <a href="">Orders</a></li>
          <li><a href="/Admins/displaypackages">Products</a></li>
        </ul>

        <ul class="right hide-on-med-and-down">
          <li><a href="/Admins/logoff">Log off</a></li>
        </ul>

      </div>
    </nav>
  </div>





  <div id = "content">
    <div id = "search">
      <div class = "row">
        <nav class = "col s6">
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label for="search"><i class="material-icons">search</i></label>
              </div>
            </form>
        </nav>
      </div>
    </div>

    <div id = "dropdown">

      <nav class = "col s12">

        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Order In </a></li>
          <li><a href="#!">Process</a></li>
          <li class="divider"></li>
        <li><a href="#!">Shipped</a></li>
        </ul>

        <nav>
          <div class="nav-wrapper">
          <ul class="right hide-on-med-and-down">
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Show All <i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
          </div>
        </nav>

      </nav>

    </div>


    <div id = "table">
      <table class = "striped">
        <thead id = "head">
          <tr>
            <td> Order ID </td>
            <td> Name </td>
            <td> Date </td>
            <td> Billing Address </td>
            <td> Total </td>
            <td> Status </td>

          </tr>
        </thead>


<?php
      foreach ($orders as $order)
      {
?>

        <tr>
          <!-- <td> <a href = <?= "file:///Users/Abhi/Desktop/GitHub/Ecommerce-Project/Ecommerce/application/views/Admin/show.html"> 51 ?> </td> -->
          <td> <a href = ""> <?= $order['id'] ?> </td>
          <td> <?= $order['first_name'].$order['last_name'] ?> </td>
          <td> <?= $order['created_at'] ?> </td>
          <td> <?= $order['billingaddress'].$order['billingaddress2']. " , ".$order['billingcity']." , ".$order['billingstate']." , ".$order['billingzipcode']  ?> </td>
          <td> <?= $order['price']?> </td>
          <td> Order in process </td>
        </tr>
<?php
      }

?>


        </tbody>
      </table>
    </div>

    <div id = "pagination">
      <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!">6</a></li>
        <li class="waves-effect"><a href="#!">7</a></li>
        <li class="waves-effect"><a href="#!">8</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>


  </div>
</div>
</body>
</html>
