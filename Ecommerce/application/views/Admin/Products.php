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
          <li><a href="">Dashboard</a></li>
          <li> <a href="file:///Users/Abhi/Desktop/GitHub/Ecommerce-Project/Ecommerce/application/views/Admin/Orders.html#!">Orders</a></li>
          <li class="active"><a href="">Products</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="">Log off</a></li>
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
            <td> Picture </td>
            <td> ID</td>
            <td> Name </td>
            <td> Inventory Count </td>
            <td> Quantity Sold </td>
            <td> action </td>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td> <div class = "pic"> </div> </td>
            <td> 1 </td>
            <td> T-Shirt </td>
            <td> 12 </td>
            <td> 100 </td>
            <td> <p class = "link"><a href = ""> edit</p>  <p class ="link" ><a href = ""> delete</p></td>
          </tr>

          <tr>
            <td> <div class = "pic"> </div> </td>
            <td> Jack  </td>
            <td> 9/8/2014 </td>
            <td> 23123 Zanker Rd, San Jose, CA, 94009 </td>
            <td> $19.33 </td>
            <td> <p class = "link"><a href = ""> edit</p>  <p class = "link"><a href = ""> delete</p> </td>
          </tr>

          <tr>
            <td> <div class = "pic"> </div> </td>
            <td> Eric  </td>
            <td> 8/8/2014 </td>
            <td> 342 Jefferson Rd, San Francisco, CA, 94677 </td>
            <td> $9.33 </td>
            <td> <p class = "link"><a href = ""> edit</p>  <p class = "link"><a href = ""> delete</p> </td>
          </tr>

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
