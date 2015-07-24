<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { 
        height: 100%; 
        margin: 0; 
        padding: 0; 
        text-align: center;
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
        font-family: sans-serif;
      }
      }
      #header {
        margin-bottom: 80px;
        margin-top: 60px;
      }
        #checkout{
          width: 450px;
          height: 500px;
          background-color: rgba(0,0,0,.5);
          border: 3px solid yellow;
          border-radius: 10px;
          font-family: sans-serif;
          margin: 0px auto;
          display: inline-block;
          vertical-align: top;
          margin-top: 50px;
          margin-right: 50px;
        }
        #checkout form{
          margin-top: 40px;
          display: inline-block;
          vertical-align: top;
        }
        #checkout input{
          background-color: black;
          margin: 3px;
          display: inline-block;
          color: white;
          line-height: 0px; 
          text-align: center;
        }
        #checkout #checkoutLabels, #checkoutInfo{
          display: inline-block;
        }
        #checkout #checkoutLabels{
          text-align: right;
          line-height: 26px;
        }
        #billing{
          width: 450px;
          height: 620px;
          background-color: rgba(0,0,0,.5);
          border: 3px solid hotpink;
          border-radius: 10px;
          font-family: sans-serif;
          margin: 0px auto;
          display: inline-block;
        }
        #billing form{
          margin-top: 40px;
          display: inline-block;
          vertical-align: top;
        }
        #billing input{
          background-color: black;
          margin: 3px;
          display: inline-block;
          color: white;
          line-height: 0px; 
          text-align: center;
        }
        #billingLabels {
          vertical-align: top;
        }
        /*#billingLabels p*/
        #billing #billingLabels, #billingInfo{
          display: inline-block;
        }
        #billing #billingLabels{
          text-align: right;
          line-height: 26px;
        }
        #paynow {
          height: 30px;
          width: 90px;
          border-radius: 10px;
        }
        #cart {
          width: 800px;
          background-color: rgba(0,0,0,.5);
          border-radius: 10px;
          border: 3px solid limegreen;
          margin: 0px auto 40px auto;
          text-align: center;
          padding: 10px;
        }
        a:hover {
          color: orange;
        }
        a {
          color: white;
          text-decoration: none;
          text-align: center;
          font-size: 14px;
        }
        a#map {
          margin-right: 100px;
          vertical-align: top;
        }
        a#trips {
          margin-left: 100px;
          vertical-align: top;
        }
    </style>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUrqgqo3AkPxzn9xH5Rn97MC--bZJDGwk">
    </script>
    <script type="text/javascript">
    </script>
  </head>
  <body>
  <div id="header">
    <h1>Checkout 'n Bounce</h1>
  </div>
  <div id="cart">
    Item(s) currently in your cart<br>
    <p>(<?= $ord['quantity']?>) <?= $ord['pickPack'] ?> Day Package(s) to <?= $ord['name'] ?></p>
    <a href="/" id="map">Return to the map  </a><a href="/Controller/returnToTrips" id="trips">  Back to city selection </a>

  </div>
  <div id="checkout">
    <h2>Shipping Information</h2>
    <form action="/Controller/submitPayment" method="post">
      <div id="checkoutLabels">
        <p>First Name:</p>
        <p>Last Name:</p>
        <p>Address:</p>
        <p>Address 2:</p>
        <p>City:</p>
        <p>State:</p>
        <p>Zipcode:</p>
      </div>
      <div id="checkoutInfo">
        <p><input type="text" name="first_name"></p>
        <p><input type="text" name="last_name"></p>
        <p><input type="text" name="address"></p>
        <p><input type="text" name="address2"></p>
        <p><input type="text" name="city"></p>
        <p><input type="text" name="state"></p>
        <p><input type="text" name="zipcode"></p>
      <!-- </form> -->
    </div>
    </div>
    <div id="billing">
      <h2>Billing Information</h2>
      <p>Same as shipping<input type="checkbox"></p>
      <div id="billingLabels">
        <p>First Name:</p>
        <p>Last Name:</p>
        <p>Address:</p>
        <p>Address 2:</p>
        <p>City:</p>
        <p>State:</p>
        <p>Zipcode:</p>
        <p>Card Number:</p>
        <p>Security Code:</p>
        <p>Expiration:</p>
      </div>
      <div id="billingInfo">
        <p><input type="text" name="bill_first_name"></p>
        <p><input type="text" name="bill_last_name"></p>
        <p><input type="text" name="bill_address"></p>
        <p><input type="text" name="bill_address2"></p>
        <p><input type="text" name="bill_city"></p>
        <p><input type="text" name="bill_state"></p>
        <p><input type="text" name="bill_zipcode"></p>
        <p><input type="password" name="ccnumber"></p>
        <p><input type="password" name="cvv"></p>

        <p><select name="exp_month">
          <option> - Month - </option>
          <option value="January">January</option>
          <option value="Febuary">Febuary</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
        </select>
        <select name="exp_year">
          <option> - Year - </option>
          <option value="2023">2023</option>
          <option value="2022">2022</option>
          <option value="2021">2021</option>
          <option value="2020">2020</option>
          <option value="2019">2019</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
      </select></p>
      <input type="submit" id="paynow" value="Pay Now"><br>
    </form>
  </div>
  </body>
</html>