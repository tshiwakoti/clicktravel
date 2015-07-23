<html>
  <head>
    <meta charset="utf-8">
    <title>Products </title>
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

    .col.s6, .input-field, .row{
      height: 40px;
      width: 200px;
    }
    .nav.col.s6{
      width: 200px;
    }

    #button{
      height: 40px;
      width: 250px;
      margin-left: 550px;
    }

    #search{
      height: 40px;
      width: 200px;

    }

    #search, #addnew{
      display: inline-block;
      vertical-align: top;
    }

    #head{
      background-color: lightgrey;
      border: 2px solid grey;
      font-size: 18px;
    }

    #pagination{
      margin: 0px auto;
      width: 50%;

    }

    .pic{
      width: 60px;
      height:60px;
      border: 1px solid black;
      background-color: white;
    }
    .link{
      display: inline-block;
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
          <li> <a href="/Admins/displayorders">Orders</a></li>
          <li class="active"><a href="">Products</a></li>
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

    <div id = "addnew">
      <a id = "button" class="waves-effect waves-light btn">Add new product</a>
    </div>



    <div id = "table">
      <table class = "striped">
        <thead id = "head">
          <tr>
            <td> ID </td>
            <td> City Name </td>
            <td> Duration </td>
            <td> Price </td>
            <td> Action </td>
          </tr>
        </thead>

<!-- <?php
var_dump ($packages);
?> -->
        <tbody>
<?php
        foreach($packages as $package)
        {
?>
          <tr>
            <td> <?= $package['id'] ?> </td>
            <td> <?= $package['name'] ?> </td>
            <td> <?= $package['duration'] ?> </td>
            <td> <?= $package['price'] ?> </td>
            <td> <p class = "link"><a href = ""> edit</p>  <p class ="link" ><a href = ""> delete</p></td>
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
